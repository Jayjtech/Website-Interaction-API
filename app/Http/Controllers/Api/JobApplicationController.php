<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\JobApplication;
use App\Rules\ValidEmailPrefix;
use App\Traits\MailSender;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class JobApplicationController extends Controller
{
    use MailSender;
    public function applyForJob(Request $request){
        try {
            $validated = $request->validate([
                'name' => 'required|string',
                'email' => ['required', 'email:rfc,dns,spoof,filter', 'max:255', new ValidEmailPrefix],
                'phone_number' => 'required|string',
                'reason' => 'required|string',
                'resume' => 'required|file|mimes:pdf,doc,docx|max:2048',
                'cover_letter' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
            ]);

            DB::beginTransaction();

            // Store files
            $resumePath = $request->file('resume')->store('job_applications/resumes', 'public');

            $coverLetterPath = null;
            if ($request->hasFile('cover_letter')) {
                $coverLetterPath = $request->file('cover_letter')->store('job_applications/cover_letters', 'public');
            }

            // Save to DB
            $application = new JobApplication();
            $application->name = $validated['name'];
            $application->email = $validated['email'];
            $application->phone_number = $validated['phone_number'];
            $application->reason = $validated['reason'];
            $application->resume = $resumePath;
            $application->cover_letter = $coverLetterPath;
            $application->save();

            DB::commit();

            // Send email to user
            $extra_data = (object)[
                "subject" => "Job Application"
            ];
            
            $this->sendEmail((object)$validated, "job_application", $extra_data, $request->email);

            return response()->json([
                'status' => 'success',
                'message' => 'Application submitted successfully.'
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
            DB::rollBack();
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ], 500);
        }
    }
}