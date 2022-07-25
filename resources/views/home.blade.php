<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hello World!</h1>
    <h3>Player Logged: {{ $user['name'] }} {{ $user['surname'] }}</h3>

    <ul>
        @foreach($videogame as $gameTitle)
            <li>{{ $gameTitle['gameTitle'] }}</li>
        @endforeach
    </ul>
    
</body>
</html>