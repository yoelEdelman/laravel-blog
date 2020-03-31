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
                    <h3 class="mt-5">{{ $article->title }}</h3>
                    <hr>
                    <div class="card">
                        <div class="card-header">
                            <div  class="d-flex align-items-center">
                                <img style="width: 50px; height: 50px; border-radius: 25px" src="{{$article->user->avatar}}"> <article style="margin-left: 10px">{{ $article->user->name }}</article>
                            </div>
                        </div>
                        <div class="card-body">
                            <cite>{{ $article->description }}</cite>
                            <p class="mt-3">{{ $article->content }}</p>
                            <time>{{ $article->created_at->diffForHumans()}}</time>
                        </div>
                    </div>
                    <br>

                </div>
            </div>
        </div>

    </body>

</html>
