<?php

namespace App\Http\Controllers\Api;

use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\LiveChat;
use App\Rules\ValidEmailPrefix;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class LiveChatController extends Controller
{
    public function chat(Request $request){
        try{
            $request->validate([
                'quick_prompts' => 'required|array',
                'full_name' => 'required|string',
                'email' => ['required', 'email:rfc,dns,spoof,filter', 'max:255', new ValidEmailPrefix],
                'company_name' => 'required|string',
                'position' => 'required|string',
            ]);

            DB::beginTransaction();
            $liveChat = new LiveChat();
            $liveChat->quick_prompts = $request->quick_prompts;
            $liveChat->full_name = $request->full_name;
            $liveChat->email = $request->email;
            $liveChat->company_name = $request->company_name;
            $liveChat->position = $request->position;
            $liveChat->save();
            
            DB::commit();
            return response()->json([
                'status' => 'success',
                'message' => 'Received successfully'
            ], 200);
            
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
            DB::rollBack(); // Ensure rollback in case of any exception
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ], 500);
        }
    }
}