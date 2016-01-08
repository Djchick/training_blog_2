@extends('layouts.app')
@section('menu')
<div>
    <div>
        <ul class="nav navbar-nav">
            <li><a href="#">{!! trans('messages.create_entry') !!}</a></li>
            <li><a href="#">{!! trans('messages.members') !!}</a></li>
        </ul>
    </div>
</div>
@endsection
@section('content')
<div class="container">
    <center>
        <h1>{!! trans('messages.welcome') !!}</h1>      
    </center>
</div>
@endsection