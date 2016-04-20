@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">微课管理</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">

            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>微课名称</th>
                            <th>时长</th>
                            <th>年级</th>
                            <th>哇哇豆</th>
                            <th>是否公开</th>
                            <th>审核状态</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach( $microCourses as $microCourse )
                        <tr class="odd gradeX">
                            <td>{!! $microCourse->id !!}</td>
                            <td>{!! $microCourse->name !!}</td>
                            <td>{!! $microCourse->video_duration !!}</td>
                            <td class="center">{!! $microCourse->gradename !!}</td>
                            <td class="center">{!! $microCourse->price !!}</td>
                            <td class="center">{!! $microCourse->publish !!}</td>
                            <td class="center">{!! $microCourse->isauth !!}</td>
                            <td class="center"><a href="{!! URL::action('TeacherAdmin\MicroCoursesController@edit', $microCourse->id) !!}">Edit</a></td>
                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
@endsection
