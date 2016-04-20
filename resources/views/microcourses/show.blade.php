@extends('layouts.admin')

@section('content')

    <h1>Microcourse</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Id</th><th>Name</th><th>Video Duration</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                     <td> {{ $microcourse->id }} </td><td> {{ $microcourse->name }} </td><td> {{ $microcourse->video_duration }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection
