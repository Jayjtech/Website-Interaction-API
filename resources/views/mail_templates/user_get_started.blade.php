@extends('layouts.mail')
@section('content')
    <!-- Main content -->
    <tr>
        <td style="padding: 0 40px 40px 40px;">
            <!-- Main heading -->
            <h1
                style="font-size: 28px; font-weight: bold; color: #1f2937; line-height: 1.3; margin: 0 0 30px 0; font-family: Arial, sans-serif;">
                Thanks for Reaching Out to Klord Technologies Let's Build Something Great
            </h1>

            <!-- Greeting -->
            <p
                style="font-size: 16px; color: #374151; line-height: 1.6; margin: 0 0 20px 0; font-family: Arial, sans-serif;">
                Hi {{ $mail_data->user->first_name }} {{ $mail_data->user->last_name }},
            </p>

            <!-- Thank you message -->
            <p
                style="font-size: 16px; color: #374151; line-height: 1.6; margin: 0 0 30px 0; font-family: Arial, sans-serif;">
                Thank you for getting in touch with Klord Technologies — we're excited to learn more about your
                project!
            </p>

            <!-- Process explanation -->
            <p
                style="font-size: 16px; color: #374151; line-height: 1.6; margin: 0 0 30px 0; font-family: Arial, sans-serif;">
                We've received your inquiry and our team is currently reviewing the details. One of our
                specialists will reach out to you shortly to better understand your needs and explore how we can
                help.
            </p>

            <!-- Services intro -->
            <p
                style="font-size: 16px; color: #374151; line-height: 1.6; margin: 0 0 20px 0; font-family: Arial, sans-serif;">
                Whether you're looking for:
            </p>

            <!-- Services list -->
            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%"
                style="margin-bottom: 20px;">
                <tr>
                    <td>
                        <div style="margin-bottom: 12px; display: flex; align-items: center;">
                            <span
                                style="color: #10b981; font-size: 18px; margin-right: 10px; font-family: Arial, sans-serif;">✓</span>
                            <span style="font-size: 16px; color: #374151; font-family: Arial, sans-serif;">Custom
                                software development</span>
                        </div>
                        <div style="margin-bottom: 12px; display: flex; align-items: center;">
                            <span
                                style="color: #10b981; font-size: 18px; margin-right: 10px; font-family: Arial, sans-serif;">✓</span>
                            <span style="font-size: 16px; color: #374151; font-family: Arial, sans-serif;">Web
                                or mobile app solutions</span>
                        </div>
                        <div style="margin-bottom: 12px; display: flex; align-items: center;">
                            <span
                                style="color: #10b981; font-size: 18px; margin-right: 10px; font-family: Arial, sans-serif;">✓</span>
                            <span style="font-size: 16px; color: #374151; font-family: Arial, sans-serif;">Product
                                design & strategy</span>
                        </div>
                        <div style="margin-bottom: 12px; display: flex; align-items: center;">
                            <span
                                style="color: #10b981; font-size: 18px; margin-right: 10px; font-family: Arial, sans-serif;">✓</span>
                            <span style="font-size: 16px; color: #374151; font-family: Arial, sans-serif;">Ongoing
                                support & maintenance</span>
                        </div>
                    </td>
                </tr>
            </table>

            <!-- Reassurance message -->
            <p
                style="font-size: 16px; color: #374151; line-height: 1.6; margin: 0 0 30px 0; font-family: Arial, sans-serif;">
                you're in the right place.
            </p>

            <!-- Call to action -->
            <p
                style="font-size: 16px; color: #374151; line-height: 1.6; margin: 0 0 30px 0; font-family: Arial, sans-serif;">
                In the meantime, feel free to explore our <a href="https://klordtechnologies.com/#/portfolio"
                    style="color: #2563eb; text-decoration: none;">case studies/portfolio</a> or learn more
                about how we work <a href="https://klordtechnologies.com"
                    style="color: #2563eb; text-decoration: none;">https://klordtechnologies.com/#/portfolio</a>.
            </p>

            <!-- Follow-up message -->
            <p
                style="font-size: 16px; color: #374151; line-height: 1.6; margin: 0 0 30px 0; font-family: Arial, sans-serif;">
                We'll be in touch soon!
            </p>

            <!-- Sign off -->
            <p
                style="font-size: 16px; color: #374151; line-height: 1.6; margin: 0 0 10px 0; font-family: Arial, sans-serif;">
                Warm regards,
            </p>
            {{-- <p
                style="font-size: 16px; color: #374151; line-height: 1.6; margin: 0 0 10px 0; font-family: Arial, sans-serif;">
                [Your Name / The Client Success Team]
            </p> --}}
            <p
                style="font-size: 16px; color: #374151; line-height: 1.6; margin: 0 0 40px 0; font-family: Arial, sans-serif;">
                Klord Technologies
            </p>
        </td>
    </tr>
@endsection
