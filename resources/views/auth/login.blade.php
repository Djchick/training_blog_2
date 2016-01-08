@extends('layouts.app')
@section('content')
<div id="register" class="container">
    <div class="col-sm-offset-2 col-sm-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                {!! trans('messages.login') !!}
            </div>
            <div class="panel-body">
                @include('common.errors')
                {!! Form::open(['url' => 'auth/login'], ['class' => 'form-group']) !!}
                    <div class="form-group">
                        {!! Form::label('email', trans('messages.email'), ['class' => 'col-sm-3 control-label']) !!}
                        {!! Form::email('email') !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('password', trans('messages.password'), ['class' => 'col-sm-3 control-label']) !!}
                        {!! Form::password('password') !!}
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            {!! Form::submit(trans('messages.login')) !!}
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
