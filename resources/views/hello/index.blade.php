@extends('layouts.main')

@section('page_title', 'Hello Page')

@section('content')



    <h1>{{ $title }}</h1>
    <p>{{ $subtitle }}</p>
    <p>The current timestamp is {{ time() }}</p>
    {{ isset($title) ? $title : 'Default' }}

    {{--<i class="glyphicon glyphicon-envelope"></i>--}}

    {{--<br>--}}
    {{--{!! $title !!}--}}
    {{--<br>--}}
    {{--@{{ Blade Systax }}--}}



    {{--@if( count($record) === 1 )--}}
        {{--I have a one record!--}}
    {{--@elseif( count($record) > 1 )--}}
        {{--I have {{ count($record) }} records!--}}
    {{--@else--}}
        {{--I have no record!--}}
    {{--@endif--}}



    {{--@unless( Auth::check())--}}
        {{--You are not signed in.--}}
    {{--@endunless--}}



    {{--@for($i=0; $i<10; $i++)--}}
        {{--<li>The current value is {{ $i }}</li>--}}
    {{--@endfor--}}

    {{--@while( true )--}}
        {{--I am looping forever.--}}
    {{--@endwhile--}}



    {{--@foreach( $users as $user)--}}
        {{--<p>This is user {{ $user->name }}</p>--}}
    {{--@endforeach--}}

    {{--@forelse($users as $user)--}}
        {{--<p>This is user {{ $user->name }}</p>--}}
    {{--@empty--}}
        {{--<p>No user!</p>--}}
    {{--@endforelse--}}


    {{--@include('view.name')--}}
    {{--@include('view.name', ['some' => 'data'])--}}


    {{--<a href="{{ action('ArticlesController@show', [1]) }}">--}}
        {{--Article 1--}}
    {{--</a>--}}
    {{----}}
    {{--<a href="{{ url('article/1') }}">--}}
        {{--Article 1--}}
    {{--</a>--}}
    {{----}}
    {{--<img src="{{ url('images/some_image.png') }}">--}}





@stop