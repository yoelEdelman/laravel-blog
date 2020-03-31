<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

@component('layouts.nav')

@endcomponent
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            @foreach($articles as $article)
                <div class="card" style="margin-top: 20px">
                    <div class="card-header">
                        <a style=" font-size: 120%" href="{{ url('/articles/'. $article->id) }}">

                            {{ $article->title }}
                        </a>
                    </div>
                    <div class="card-body">
                       <div style="text-align: right">
                           <a style=" font-size: 120%" href="{{ url('/categories/'. $article->category->id) }}">

                               {{ $article->category->title }}
                           </a>
                       </div>
                        <cite>{{ $article->description }}</cite>
                        <p class="mt-3">{{ $article->content }}</p>
                        <div  class="d-flex align-items-center">
                            <a class="d-flex align-items-center" href="{{ url('/users/'. $article->user->id)}}">
                                <img style="width: 20px; height: 20px; border-radius: 25px" src="{{ $article->user->avatar }}">
                                <article style="margin-left: 5px">{{ $article->user->name }}</article>
                            </a>
                            <time style="font-size: 90%; color: grey; margin-left: 5px">{{ $article->created_at->diffForHumans()}}</time>
                        </div>


                    </div>
                </div>
            @endforeach
            <br>

        </div>
    </div>
</div>

</body>

</html>
