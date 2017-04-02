@extends('layouts.main')
@section('page_title', 'Edit Page')
@section('content')

    <h1 class="page-title">Edit {{ $article->title }}</h1>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::model($article,
        ['method' => 'PATCH',
        'action'=>['ArticlesController@update',
        $article->id]]) !!}

        @include('articles._form',
        ['submitButtonText' =>
         '<i class="glyphicon glyphicon-pencil"></i>Update Article'])
    {!! Form::close() !!}

@stop