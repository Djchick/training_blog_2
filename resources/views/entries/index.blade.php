@extends('layouts.app')
@section('content')
<div class="container">
    <center>
        <h1>{!! trans('messages.training_blog') !!}</h1>      
    </center>
    @foreach ($entries as $entry)
        <h2>{!! trans('messages.entry_title') !!}: {!! $entry->title !!}</h2>
        <h4>{!! trans('messages.posted_by') !!}: {!! $entry->user->name !!}</h4>
        <h4>{!! trans('messages.posted_at') !!}: {!! $entry->created_at !!}</h4>
        {{ $entry->body }}<br>
        <h3>{!! trans('messages.comment') !!}:</h3>
        @foreach ($entry->comments as $comment)
            <h4>{!! trans('messages.commented_by') !!}: {!! $comment->user->name !!}</h4>
            <h4>{!! trans('messages.commented_at') !!}: {!! $comment->created_at !!}</h4>
            <p>{{ $comment->comment }}</p><br>
        @endforeach
    @endforeach
</div>
<center>{!! $entries->render() !!}</center>
@endsection
