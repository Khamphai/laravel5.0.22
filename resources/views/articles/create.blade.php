@extends('layouts.main')
@section('page_title', 'Create Page')
@section('content')

    <h1 class="page-title">Write a New article</h1>

    {{--@include('errors.list')--}}

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['url'=>'articles']) !!}
        @include('articles._form',
         ['submitButtonText' =>
          '<i class="glyphicon glyphicon-plus"></i>Add Article'])
    {!! Form::close() !!}

@stop