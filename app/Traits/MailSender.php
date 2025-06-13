<?php
namespace App\Traits;

use App\Mail\SendEmail;
use Illuminate\Support\Facades\Mail;

trait MailSender{
    public function sendEmail($user, $email_type, $extra_data, $sendTo){
        $mail_data = (object)[
            "user" => $user,
            "extra_data" => $extra_data,
            "email_type" => $email_type,   
        ];
        
        Mail::to($sendTo)->send(new SendEmail($mail_data));
        // return response()->json([
        //     "status" => "success",
        //     "message" => "Email sent",
        //     "email" => $user->email
        // ]);
    }
}