@extends('layouts.app')
@section('menu')
<div>
    <ul class="nav navbar-nav">
        <li>{!! Html::linkAction('EntriesController@create', trans('messages.create_entry')) !!}</li>
        <li><a href="#">{!! trans('messages.members') !!}</a></li>
    </ul>
</div>
@endsection
@section('content')
<div class="container">
    <center>
        <h1>{!! trans('messages.welcome') !!}</h1>      
    </center>
    {!! Form::open(['action' => ['EntriesController@index'], 'method' => 'GET']) !!}
        {!! Form::hidden('user_type', 'follow') !!}
        {!! Form::submit(trans('messages.following_posts')) !!}   
    {!! Form::close() !!}
    {!! Form::open(['action' => ['EntriesController@index'], 'method' => 'GET']) !!}
        {!! Form::hidden('user_type', 'all') !!}
        {!! Form::submit(trans('messages.all_posts')) !!}
    {!! Form::close() !!}
</div>
@endsection