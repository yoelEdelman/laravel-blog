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

<div class="container mt-5">
    <div>
        @foreach($categories as $category)
            <div class="card">
                <div class="card-body">
                    <article class="d-flex justify-content-between">
                        <a href="{{ url('/categories/'. $category->id) }}"> {{$category->title}}</a>
                        @if($category->article)
                            <article>
                                Article(s) :    {{ $category->article->count() }}
                            </article>
                       @endif
                    </article>
                </div>
            </div>
        @endforeach
    </div>


</div>
</body>

</html>