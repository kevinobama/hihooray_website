@extends('layouts.admin')

@section('content')

    <h1>微课管理 <a href="{{ url('microcourses/create') }}" class="btn btn-primary pull-right btn-sm">添加微课</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Id</th><th>Name</th><th>Video Duration</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($microcourses as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('microcourses', $item->id) }}">{{ $item->id }}</a></td><td>{{ $item->name }}</td><td>{{ $item->video_duration }}</td>
                    <td>
                        <a href="{{ url('microcourses/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['microcourses', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $microcourses->render() !!} </div>
    </div>

@endsection
