<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to K-Lord Technologies</title>
    <style>
        /* Reset styles for email clients */
        body,
        table,
        td,
        p,
        a,
        li,
        blockquote {
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        table,
        td {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }

        img {
            -ms-interpolation-mode: bicubic;
            border: 0;
            height: auto;
            line-height: 100%;
            outline: none;
            text-decoration: none;
        }
    </style>
</head>

<body style="margin: 0; padding: 0; background-color: #f5f5f5; font-family: Arial, sans-serif;">
    <!-- Main container -->
    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%"
        style="background-color: #f5f5f5;">
        <tr>
            <td align="center" style="padding: 40px 20px;">
                <!-- Email content wrapper -->
                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="600"
                    style="background-color: #ffffff; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                    <!-- Header with logo -->
                    <tr>
                        <td style="padding: 40px 40px 20px 40px;">
                            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                <tr>
                                    <td>
                                        <img src="{{ asset('logo.svg') }}" alt="Logo" width="100" height="100">
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    @yield('content')
                    <!-- Footer -->
                    <tr>
                        <td style="padding: 30px 40px; background-color: #f9fafb; border-top: 1px solid #e5e7eb;">
                            <!-- Footer text -->
                            <p
                                style="font-size: 14px; color: #6b7280; line-height: 1.6; margin: 0 0 20px 0; text-align: center; font-family: Arial, sans-serif;">
                                Need help? <a href="https://klordtechnologies.com/#/contact"
                                    style="color: #2563eb; text-decoration: none;">Contact our
                                    support
                                    team</a>. Want to give us
                                feedback? Let us know what you think on our <a
                                    href="https://klordtechnologies.com/#/get-started"
                                    style="color: #2563eb; text-decoration: none;">feedback site</a>.
                            </p>

                            <!-- Social media icons -->
                            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                <tr>
                                    <td align="center">
                                        <table role="presentation" cellspacing="0" cellpadding="0" border="0">
                                            <tr>
                                                <td style="padding: 0 10px;">
                                                    <a href="#" style="text-decoration: none;">
                                                        <div
                                                            style="width: 32px; height: 32px; background-color: #6b7280; border-radius: 4px; display: flex; align-items: center; justify-content: center;">
                                                            <span style="color: white; font-size: 16px;">f</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td style="padding: 0 10px;">
                                                    <a href="#" style="text-decoration: none;">
                                                        <div
                                                            style="width: 32px; height: 32px; background-color: #6b7280; border-radius: 4px; display: flex; align-items: center; justify-content: center;">
                                                            <span style="color: white; font-size: 16px;">in</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td style="padding: 0 10px;">
                                                    <a href="#" style="text-decoration: none;">
                                                        <div
                                                            style="width: 32px; height: 32px; background-color: #6b7280; border-radius: 4px; display: flex; align-items: center; justify-content: center;">
                                                            <span style="color: white; font-size: 16px;">t</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td style="padding: 0 10px;">
                                                    <a href="#" style="text-decoration: none;">
                                                        <div
                                                            style="width: 32px; height: 32px; background-color: #6b7280; border-radius: 4px; display: flex; align-items: center; justify-content: center;">
                                                            <span style="color: white; font-size: 16px;">@</span>
                                                        </div>
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
