<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <from action="{{ route(name: 'proses create') }}" method="POST">
        <input type="text" name="name" placeholder="Name">
        <input type="submit" value="submit">
</body>
</html>l