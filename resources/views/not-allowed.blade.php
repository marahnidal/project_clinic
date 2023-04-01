<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Not Allowed</title>
</head>
<style>
body{
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    font-family: Arial, Helvetica, sans-serif;
}
body div a {
    padding: 10px 15px;
    display: inline-block;
    text-decoration: none;
    border-radius: 3px;
    background-color: rgba(161, 207, 249, 0.888);
    color: #000;
    font-size: 18px;
    box-shadow: 0 0 10px rgba(36, 36, 36, 0.895);
}
</style>
<body>
    <div>
    <img width="500" src="{{ asset('adminassets/img/error_405_by_juanjosecas-d4h94oy-450x355.png') }}">
    <br>
        <a href="{{ url('/') }}">HomePage</a>
</div>
</body>
</html>
