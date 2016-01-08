@extends('layouts.app')
@section('menu')
<div>
    <ul class="nav navbar-nav">
        <li><a href="#">{!! trans('messages.create_entry') !!}</a></li>
        <li><a href="#">{!! trans('messages.members') !!}</a></li>
    </ul>
</div>
@endsection
@section('content')
<div class="container">
    <center>
        <h1>{!! trans('messages.welcome') !!}</h1>      
    </center>
</div>
<div>
    @foreach ($followings as $following)
        @foreach ($following->entries as $entry)
            <h2>{!! trans('messages.entry_title') !!}: {!! $entry->title !!}</h2>
            <h4>{!! trans('messages.posted_by') !!}: {!! $entry->user->name !!}</h4>
            <h4>{!! trans('messages.posted_at') !!}: {!! $entry->created_at !!}</h4>
            {{ $entry->body }}<br>
            <h3>{!! trans('messages.comment') !!}:</h3>
            @foreach ($entry->comments as $comment)
                <h4>{!! trans('messages.commented_by') !!}: {!! $comment->user->name !!}</h4>
                <h4>{!! trans('messages.commented_at') !!}: {!! $comment->created_at !!}</h4>
                {{ $comment->comment }}<br>
            @endforeach
        @endforeach
    @endforeach
</div>
<center>{!! $followings->appends(['user_type' => 'follow'])->render() !!}</center>
@endsection