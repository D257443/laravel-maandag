<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Publisher list</title>
</head>
<body>
    <ul>
        @foreach($publishers as $publisher)
            <li>
                <a href="{{  route('publishers.show', $publisher->id) }}">{{  $publisher->company_name }}</a>
            </li>
        @endforeach    
    </ul>
</body>
</html>