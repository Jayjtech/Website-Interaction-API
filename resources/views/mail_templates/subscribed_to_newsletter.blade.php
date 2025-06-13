@extends('layouts.mail')
@section('content')
    <!-- Main content -->
    <tr>
        <td style="padding: 0 40px 40px 40px;">
            <!-- Main heading -->
            <h1
                style="font-size: 28px; font-weight: bold; color: #1f2937; line-height: 1.3; margin: 0 0 30px 0; font-family: Arial, sans-serif;">
                Welcome to K-Lord Technologies — Let's Build the Future Together!
            </h1>

            <!-- Greeting -->
            <p
                style="font-size: 16px; color: #374151; line-height: 1.6; margin: 0 0 20px 0; font-family: Arial, sans-serif;">
                Hi {{ $mail_data->user->name }},
            </p>

            <!-- Welcome message -->
            <p
                style="font-size: 16px; color: #374151; line-height: 1.6; margin: 0 0 30px 0; font-family: Arial, sans-serif;">
                Thanks for signing up for the Klord Technologies newsletter — we're thrilled to have you on
                board!
            </p>

            <!-- Benefits intro -->
            <p
                style="font-size: 16px; color: #374151; line-height: 1.6; margin: 0 0 20px 0; font-family: Arial, sans-serif;">
                You'll now be the first to hear about:
            </p>

            <!-- Benefits list -->
            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%"
                style="margin-bottom: 30px;">
                <tr>
                    <td>
                        <div style="margin-bottom: 12px; display: flex; align-items: center;">
                            <span
                                style="color: #10b981; font-size: 18px; margin-right: 10px; font-family: Arial, sans-serif;">✅</span>
                            <span style="font-size: 16px; color: #374151; font-family: Arial, sans-serif;">Smart
                                insights on software trends</span>
                        </div>
                        <div style="margin-bottom: 12px; display: flex; align-items: center;">
                            <span
                                style="color: #10b981; font-size: 18px; margin-right: 10px; font-family: Arial, sans-serif;">✅</span>
                            <span style="font-size: 16px; color: #374151; font-family: Arial, sans-serif;">Case
                                studies from real projects</span>
                        </div>
                        <div style="margin-bottom: 12px; display: flex; align-items: center;">
                            <span
                                style="color: #10b981; font-size: 18px; margin-right: 10px; font-family: Arial, sans-serif;">✅</span>
                            <span style="font-size: 16px; color: #374151; font-family: Arial, sans-serif;">Expert
                                tips from our dev team</span>
                        </div>
                        <div style="margin-bottom: 12px; display: flex; align-items: center;">
                            <span
                                style="color: #10b981; font-size: 18px; margin-right: 10px; font-family: Arial, sans-serif;">✅</span>
                            <span style="font-size: 16px; color: #374151; font-family: Arial, sans-serif;">Exclusive
                                updates & offers</span>
                        </div>
                    </td>
                </tr>
            </table>

            <!-- Mission statement -->
            <p
                style="font-size: 16px; color: #374151; line-height: 1.6; margin: 0 0 30px 0; font-family: Arial, sans-serif;">
                We're here to help businesses grow with innovative software solutions — and you're now part
                of that journey.
            </p>

            <!-- Call to action -->
            <p
                style="font-size: 16px; color: #374151; line-height: 1.6; margin: 0 0 20px 0; font-family: Arial, sans-serif;">
                Got a question or project idea? Just hit reply — we'd love to hear from you.
            </p>

            <p
                style="font-size: 16px; color: #374151; line-height: 1.6; margin: 0 0 30px 0; font-family: Arial, sans-serif;">
                Looking forward to your participation!
            </p>

            <!-- Sign off -->
            <p
                style="font-size: 16px; color: #374151; line-height: 1.6; margin: 0 0 10px 0; font-family: Arial, sans-serif;">
                Best regards,
            </p>
            <p
                style="font-size: 16px; color: #374151; line-height: 1.6; margin: 0 0 40px 0; font-family: Arial, sans-serif;">
                The Klord Technologies Team
            </p>
        </td>
    </tr>
@endsection
