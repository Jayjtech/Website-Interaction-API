<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    protected $mail_data;

    public function __construct($mail_data)
    {
        $this->mail_data = $mail_data;
    }

    public function build(){
        $template = $this->getTemplate($this->mail_data->email_type ?? '');

        if (!$template) {
            throw new \Exception("Invalid email type provided.");
        }

        return $this->view($template)
            ->subject($this->mail_data->extra_data->subject ?? 'Default Subject')
            ->with(['mail_data' => $this->mail_data]);
    }

    private function getTemplate($email_type){
        switch ($email_type) {
            case "user_get_started":
                return "mail_templates.user_get_started";
            case "notify_admin":
                return "mail_templates.notify_admin";
            case "subscribed_to_newsletter":
                return "mail_templates.subscribed_to_newsletter";
            case "job_application":
                return "mail_templates.job_application";
            default:
                return null;
        }
    }
}