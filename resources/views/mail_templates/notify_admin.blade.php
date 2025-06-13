<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $mail_data->extra_data->subject }}</title>
</head>

<body>
    <h1>{{ $mail_data->user->first_name }} {{ $mail_data->user->last_name }} recently registered on Klord technologies
    </h1>
</body>

</html>
