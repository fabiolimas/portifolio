<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contato Portifolio</title>
</head>
<body>
    <h1>{{$mailData['title']}}</h1>
    <b>Email:</b> {{$mailData['email']}}
    <p><b>Nome:</b> {{$mailData['nome']}}</p>

    <p>{{$mailData['body']}}</p>
</body>
</html>
