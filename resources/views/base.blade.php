<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Blog App</title>
</head>
<body>
    <div class="container">
        <h3>Blog</h3>
        <div class="card">
            <div class="card-header" mt-5>
                <h1>Get Access Token</h1>
            </div>
            <div class="card-body" mt-5>
                {{-- <input type="text" name="getAccess" value="{{ $response }}"> --}}
                {{ dd($response) }}
                <button class="btn btn-primary">Get Token</button>
            </div>
        </div>
    </div>
</body>
</html>