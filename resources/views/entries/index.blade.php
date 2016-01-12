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
        <h1>{!! trans('messages.training_blog') !!}</h1>      
    </center>
</div>
    @foreach ($entries as $entry)
        @include('common.entries.index')
        @if (\Auth::user())
            @include('common.entries.comment')
        @endif
    @endforeach
</div>
<center>{!! $entries->appends(['user_type' => 'all'])->render() !!}</center>
@endsection