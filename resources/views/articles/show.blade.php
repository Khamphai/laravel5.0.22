@extends('layouts.main')
@section('page_title', 'Show Page')
@section('content')


        <h1>{{ $article->title }}</h1>

        <a href="{{ action('ArticlesController@edit', [$article->id]) }}" class="btn btn-primary">Edit</a>
        <br>
        <br>
        <div class="panel panel-primary">
            <div class="panel-heading">{{ $article->body}}</div>
            <div class="panel-body">
                {{ $article->published_at }}
            </div>
        </div>

        <a href="{{}}" class="btn btn-danger">Delete</a>


@stop