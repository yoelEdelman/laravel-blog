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

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <h3 class="mt-5">{{ $category->title }}</h3>
            <div class="card" style="border: 0px solid transparent">
                <div class="card-body">
                    @if($category->article)
                        @foreach($category->article as $ct)
                            <article  style="padding: 10px; margin-bottom: 15px; box-shadow: 0px 0px 3px lightgray; border-radius: 3px">
                                <b>{{ $ct->title }}</b>
                                <p class="mt-3">{{ $ct->content }}</p>
                                <div class="d-flex align-items-center">
                                    <img style="width: 20px; height: 20px; border-radius: 100%" src="{{$ct->user->avatar}}">
                                    <article class="ml-1" >{{ $ct->user->name }}</article>
                                    <time class="ml-1" style="font-size: 90%; color: grey">{{ $ct->created_at->diffForHumans()}}</time>
                                </div>
                            </article>
                        @endforeach
                     @endif
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>