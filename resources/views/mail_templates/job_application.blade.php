@extends('layouts.mail')
@section('content')
    <!-- Main content -->
    <tr>
        <td style="padding: 0 40px 40px 40px;">
            <!-- Main heading -->
            <h1
                style="font-size: 28px; font-weight: bold; color: #1f2937; line-height: 1.3; margin: 0 0 30px 0; font-family: Arial, sans-serif;">
                Thanks for Applying at Klord Technologies We've Got Your Application
            </h1>

            <!-- Greeting -->
            <p
                style="font-size: 16px; color: #374151; line-height: 1.6; margin: 0 0 20px 0; font-family: Arial, sans-serif;">
                Hi {{ $mail_data->user->name }},
            </p>

            <!-- Thank you message -->
            <p
                style="font-size: 16px; color: #374151; line-height: 1.6; margin: 0 0 30px 0; font-family: Arial, sans-serif;">

                Thank you for your interest in joining the team at Klord Technologies! We've received your application and
                our hiring team is currently reviewing it.
            </p>

            <!-- Process explanation -->
            <p
                style="font-size: 16px; color: #374151; line-height: 1.6; margin: 0 0 30px 0; font-family: Arial, sans-serif;">
                We appreciate you taking the time to reach out — we’re always excited to connect with talented people like
                you who are passionate about tech, innovation, and building impactful software.
            </p>


            <!-- Services intro -->
            <p
                style="font-size: 16px; color: #374151; line-height: 1.6; margin: 0 0 20px 0; font-family: Arial, sans-serif;">
                What’s next?
            </p>

            <p
                style="font-size: 16px; color: #374151; line-height: 1.6; margin: 0 0 30px 0; font-family: Arial, sans-serif;">
                If your qualifications are a good match, we’ll be in touch shortly to schedule the next steps. Either way,
                you’ll hear from us soon.
                In the meantime, feel free to check out:
            </p>

            <!-- Follow-up message -->
            <p
                style="font-size: 16px; color: #374151; line-height: 1.6; margin: 0 0 30px 0; font-family: Arial, sans-serif;">
                Thanks again for your interest — we’re glad you found us!
            </p>

            <!-- Sign off -->
            <p
                style="font-size: 16px; color: #374151; line-height: 1.6; margin: 0 0 10px 0; font-family: Arial, sans-serif;">
                Warm regards,
            </p>
            <p
                style="font-size: 16px; color: #374151; line-height: 1.6; margin: 0 0 10px 0; font-family: Arial, sans-serif;">
                The Hiring Team
            </p>
            <p
                style="font-size: 16px; color: #374151; line-height: 1.6; margin: 0 0 40px 0; font-family: Arial, sans-serif;">
                Klord Technologies
            </p>
        </td>
    </tr>
@endsection
