@extends('layouts.admin')

@section('content')

    <h1>Edit Teacherfile</h1>
    <hr/>

    {!! Form::model($teacherfile, [
        'method' => 'PATCH',
        'url' => ['teacher-files', $teacherfile->id],
        'class' => 'form-horizontal'
    ]) !!}
                <div class="form-group {{ $errors->has('pipeline') ? 'has-error' : ''}}">
                {!! Form::label('pipeline', 'pipeline: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('pipeline', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('pipeline', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

            <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
                {!! Form::label('description', 'description: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('description', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-3">
                    {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
                </div>
            </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection