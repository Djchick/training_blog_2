@extends('layouts.app')
@section('content')
<div class="container">
    <center>
        <h1>{!! trans('messages.training_blog') !!}</h1>      
    </center>
    @foreach ($otherUsers as $otherUser)
        <h2>{!! trans('messages.name') !!}: {!! $otherUser->name !!}</h2>
        {!! Form::open(['action' => 'UsersController@store']) !!}
            {!! Form::hidden('follow_id', $otherUser->id) !!}
            {!! Form::submit(trans('messages.follow')) !!}
        {!! Form::close() !!}
    @endforeach
</div>
@endsection