<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>

@component('layouts.nav')

@endcomponent

<div class="container mt-5">
    @foreach($users as $user)
        <div class="card">
            <div class="card-body d-flex align-items-center justify-content-between">
                <div class="d-flex  align-items-center">
                    <a class="d-flex  align-items-center" href="{{ url('/users/'. $user->id) }}">
                     <img style="width: 60px; height: 60px; border-radius: 100%" src="{{$user->avatar}}">
                     <article style="margin-left: 10px">{{ $user->name }}</article>
                    </a>
                </div>

                <article style="margin-left: 10px; justify-self: flex-end" > Articles : {{ $user->articles->count() }}</article>
            </div>
        </div>

        @endforeach
</div>

</body>
</html>