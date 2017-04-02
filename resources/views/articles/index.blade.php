@extends('layouts.main')

@section('page_title', 'Data All')

@section('content')
    <br>
    <a href="{{ url('articles/create') }}" class="btn btn-primary">Create New</a>
    <br>
    <br>
    @foreach($articles as $article)

    <div class="panel panel-success">
        <div class="panel-heading">
            <a href="{{ action('ArticlesController@show', [$article->id]) }}">
                {{ $article->title }}</a>
        </div>
        <div class="panel-body">
            {{ $article->body }}<br>
            {{ $article->published_at->diffForHumans() }}
        </div>
    </div>

    @endforeach

@stop