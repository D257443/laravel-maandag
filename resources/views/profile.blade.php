<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <style>
        body {
            font-family: arial;
        }
        .profile {
            width: 80%;
            margin: 0 auto;
            text-align: center;
        }

        p.description {
            padding: 0px 150px;
            text-align: justify;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="profile">
            <h1 class="title">{{ $profile->name }}</h1>
            <p class="description">
                {{ $profile->description }}
            </p>
            <div class="email">
                <h3>email:</h3>
                <p>{{$profile->email}}</p>
            </div>
            <ul class="interests">
                @foreach( $profile->interests as $interest )
                    <li>{{$interest}}</li>
                @endforeach
            </ul>
        </div>
    </div>
</body>
</html>