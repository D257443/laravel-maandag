<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Games</title>
</head>
<body>
<h1>Game Overview (Master page)</h1>
<ul>
    @foreach($games as $game)
        <li><a href="{{ route('games.show', $game->id) }}">{{$game->title}} {{$game->publisher}}</a></li>
    @endforeach
</ul>
</body>
</html>