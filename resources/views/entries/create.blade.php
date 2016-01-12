@extends('layouts.app')
@section('content')
<div class="container">
    <div class="col-sm-offset-2 col-sm-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>{!! trans('messages.add_an_entry') !!}</h2>
            </div>
            <div class="panel-body">
                @include('common.errors')
                {!! Form::open(['action' => 'EntriesController@store'], ['class' => 'form-group']) !!}
                    <div class="form-group">
                        {!! Form::label('title', trans('messages.title'), ['class' => 'col-sm-3 control-label']) !!}
                        {!! Form::text('title') !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('body', trans('messages.details'), ['class' => 'col-sm-3 control-label']) !!}
                        {!! Form::textarea('body') !!}
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            {!! Form::submit(trans('messages.add')) !!}
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection