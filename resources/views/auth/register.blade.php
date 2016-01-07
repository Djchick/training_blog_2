@extends('layouts.app')
@section('content')
<div id="register" class="container">
    <div class="col-sm-offset-2 col-sm-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                {!! trans('messages.register') !!}
            </div>
            <div class="panel-body">
                @include('common.errors')
                {!! Form::open(['url' => 'auth/register'], ['class' => 'form-horizontal']) !!}
                    <div class="form-group">
                        {!! Form::label('name', trans('messages.name'), ['class' => 'col-sm-3 control-label']) !!}
                        {!! Form::text('name') !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('email', trans('messages.email'), ['class' => 'col-sm-3 control-label']) !!}
                        {!! Form::email('email') !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('password', trans('messages.password'), ['class' => 'col-sm-3 control-label']) !!}
                        {!! Form::password('password') !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('password_confirmation', trans('messages.confirm_password'), ['class' => 'col-sm-3 control-label']) !!}
                        {!! Form::password('password_confirmation') !!}
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            {!! Form::submit(trans('messages.register')) !!}
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
