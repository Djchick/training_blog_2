{!! Form::open(['action' => 'CommentsController@store'], ['class' => 'form-group']) !!}
    {!! Form::hidden('entry_id', $entry->id) !!}
    <div class="form-group">
        {!! Form::label('comment', trans('messages.make_comment')) !!}
        {!! Form::text('comment') !!}
    </div>
    <div class="form-group">
        {!! Form::submit(trans('messages.add')) !!}
    </div>
{!! Form::close() !!}
@yield('content')