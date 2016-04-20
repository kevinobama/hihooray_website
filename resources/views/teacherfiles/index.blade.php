@extends('layouts.admin')

@section('content')

    <h1>老师文件管理 <a href="{{ url('teacher-files/create') }}" class="btn btn-primary pull-right btn-sm">上传文件</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
            {{-- */$x=0;/* --}}
            <tr>
            @foreach($teacherfiles as $key=>$item)
                    <td>
                        {{ HTML::image(TeacherFilesHelper::getIconByExtension($item->inputKey), $item->inputKey, array('style' => 'width:30px;height:20px;')) }}
                        {{ $item->inputKey }}
                        @if ($item->itemsKey)
                        <a href="{{ url('teacher-files/' . $item->id) }}">
                            {{ HTML::image(TeacherFilesHelper::getIconByExtension("hihooray.pdf"), $item->inputKey, array('style' => 'width:30px;height:20px;')) }}
                        </a>
                        @endif
                        |
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['teacher-files', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs', 'onclick'=> 'return comfirm()']) !!}
                        {!! Form::close() !!}

                    </td>
            @if(($key+1) % 3 ==0)
                </tr>
                <tr>
            @endif
            @endforeach
            </tr>
            </tbody>
        </table>
        <div class="pagination"> {!! $teacherfiles->render() !!} </div>
    </div>
    <script type="text/javascript">
        //确认是否要删除
        function comfirm(){
            if(confirm("确认要删除吗？")==false){
                return false;
            }
        }
    </script>
@endsection
