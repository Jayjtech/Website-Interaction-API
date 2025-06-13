<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\GetStarted;
use App\Models\NewsLetter;
use App\Models\User;
use App\Rules\ValidEmailPrefix;
use App\Traits\MailSender;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class GetStartedController extends Controller
{
    use MailSender;

    public function getStarted(Request $request)
    {
        try {
            $validated = $request->validate([
                'first_name' => 'required|string',
                'last_name' => 'required|string',
                'job_title' => 'nullable|string',
                'phone_number' => 'required|string|min:10|max:15',
                'email' => ['required', 'email:rfc,dns,spoof,filter', 'max:255', new ValidEmailPrefix],
                'company_name' => 'required|string',
                // 'website_url' => 'url',
                'industry' => 'required|string',
                'team_size' => 'required|string',
                'help_needed' => 'required|string',
                'other_help_needed' => 'nullable|string',
                'project_description' => 'nullable|string',
                'project_timeline' => 'nullable|string',
                'estimated_budget' => 'nullable|string',
            ]);

            // Check if user already exists by email
            $exist = User::where('email', $request->email)->first();
            if ($exist) {
                return response()->json([
                    'status' => 'warning',
                    'message' => 'Your request has already been received'
                ]);
            }

            // Begin transaction
            DB::beginTransaction();

            // Create new user
            $user = new User();
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->job_title = $request->job_title;
            $user->phone_number = $request->phone_number;
            $user->email = $request->email;
            $user->password = Hash::make('1234'); 
            $user->save();

            // Create get started details
            $getStarted = new GetStarted();
            $getStarted->user_id = $user->id;
            $getStarted->company_name = $request->company_name;
            $getStarted->website_url = $request->website_url;
            $getStarted->industry = $request->industry;
            $getStarted->team_size = $request->team_size;
            $getStarted->help_needed = $request->help_needed;
            $getStarted->other_help_needed = $request->other_help_needed;
            $getStarted->project_description = $request->project_description;
            $getStarted->project_timeline = $request->project_timeline;
            $getStarted->estimated_budget = $request->estimated_budget;
            $getStarted->save();

            DB::commit();

            // Send email to user
            $extra_data = (object)[
                "subject" => "Welcome to Klord Technologies"
            ];
            $this->sendEmail((object)$validated, "user_get_started", $extra_data, $request->email);

            // Send email to company
            $company_email = env('COMPANY_EMAIL', 'admin@klord.com'); // fallback if not set
            $this->sendEmail((object)$validated, "notify_admin", (object)["subject" => "New Sign-up on Klord Technologies"], $company_email);

            return response()->json([
                'status' => "success",
                'message' => "Thank you for joining us. You will get a response from us shortly"
            ]);

        } catch (ValidationException $e) {
            $message = "";
            foreach ($e->errors() as $fieldErrors) {
                foreach ($fieldErrors as $err) {
                    $message .= $err . " | ";
                }
            }
            $message = rtrim($message, " | ");

            return response()->json([
                'status' => 'error',
                'message' => $message
            ], 400);

        } catch (Exception $e) {
            DB::rollBack(); // Ensure rollback in case of any exception
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ]);
        }
    }

    public function subscribeToNewsletter(Request $request){
        try{
            $validated = $request->validate([
                'name' => 'required|string',
                'email' => ['required', 'email:rfc,dns,spoof,filter', 'max:255', new ValidEmailPrefix],
            ]);


            $exist = NewsLetter::where('email', $request->email)->first();
            
            if($exist){
                return response()->json([
                    'status' => 'warning',
                    'message' => 'You are already a subscriber.'
                ]);
            }
            
            DB::beginTransaction();
            $newsletter = new NewsLetter();
            $newsletter->name = $request->name;
            $newsletter->email = $request->email;
            $newsletter->save();
            DB::commit();
            
            // Send email to user
            $extra_data = (object)[
                "subject" => "Newsletter"
            ];
            
            $this->sendEmail((object)$validated, "subscribed_to_newsletter", $extra_data, $request->email);

            return response()->json([
                'status' => 'success',
                'message' => 'Thank you for subscribing to our newsletter.'
            ],200);

        }catch(ValidationException $e){
            $message = "";
            foreach ($e->errors() as $fieldErrors) {
                foreach ($fieldErrors as $err) {
                    $message .= $err . " | ";
                }
            }
            $message = rtrim($message, " | ");

            return response()->json([
                'status' => 'error',
                'message' => $message
            ], 400);
        }catch(Exception $e){
            DB::rollBack();
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ]);
        }
    }
}