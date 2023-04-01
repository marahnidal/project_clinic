<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background: #eee;font-family:Arial, Helvetica, sans-serif;">
    <div style="background: #fff;width:600px;padding:30px;border:2px solid #bbb;margin:30px auto">
    <h3>Dear Doctor,</h3>
    <p> We hope you find this email:</p>
    <br>
    <p><b>Name:</b>{{ $data['name'] }}</p>
    <p><b>Email:</b>{{ $data['email'] }}</p>
    <p><b>Tel:</b>{{ $data['tel'] }}</p>
    <p><b> Date:</b>{{ $data['date'] }}</p>
    <p><b> Time:</b>{{ $data['time'] }}</p>
    <br>
    <br>
    <p>Best regards </p>
    </div>

</body>
</html>
