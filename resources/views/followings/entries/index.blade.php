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
            @include('common.entries.index')
            @include('common.entries.comment')
        @endforeach
    @endforeach
</div>
<center>{!! $followings->appends(['user_type' => 'follow'])->render() !!}</center>
@endsection