@extends('layouts.app')

@section('content')
<h1> Articles </h1>

@foreach ($articles as $a)
<article>
    <!--<h2><a href="{{ url('/articles',$a->id) }}">{{ $a->title }} </a> </h2>-->
    <!--<h2><a href="{{ action('ArticlesController@show',[$a->id]) }}">{{ $a->title }} </a> </h2>-->
    <h2><a href="/articles/{{ $a->id }}">{{ $a->title }} </a> </h2>
    <div class="body">{{ $a->excerpt }}</div>
</article>
@endforeach
@stop
