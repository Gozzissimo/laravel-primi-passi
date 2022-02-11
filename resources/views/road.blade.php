<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Bikes | Road</title>
</head>
<body>
    <h1>Road</h1>

    <ul>
        @foreach($bikes as $bike)
            <li>
                <h2>{{ $bike['brand'] }}</h2>
                <h3>{{ $bike['model'] }}</h3>
                <h4>{{ $bike['size'] }}</h4>
                <div class="">
                    <img src="{{ $bike['image'] }}" alt="">
                </div>
            </li>
        @endforeach
    </ul>
</body>
</html>