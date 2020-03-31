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
    <div class="card">
        <div class="card-header d-flex align-items-center">
            <img style="width: 100px; height: 100px; border-radius: 100%" src="{{$user->avatar}}">
            <article style="font-size: 160%; margin-left: 15px">{{$user->name}}</article>
        </div>
        <div class="card-body">
            @if(count($user->articles) > 0)
            @foreach($user->articles as $article)
                <div style="box-shadow: 0px 0px 3px lightgray; padding: 10px; border-radius: 5px">
                    <article>
                        <b>{{ $article->title }}</b>
                    </article>
                    <cite>{{ $article->description }}</cite>
                    <p class="mt-1">{{ $article->content }}</p>
                    <div class="text-right">
                        <time>{{$article->created_at->diffForHumans()}}</time>
                    </div>
                </div>

            @endforeach
                @else
                <div class="alert alert-secondary" role="alert">
                    No articles written by this author
                </div>
            @endif
        </div>
    </div>
</div>

</body>
</html>
