@extends('layouts.admin')

@section('content')

    <h1>上传文件(ppt,word)</h1>
    <hr/>

    {!! Form::open(['url' => 'teacher-files', 'files' => true, 'class' => 'form-horizontal']) !!}

            <div class="form-group {{ $errors->has('inputKey') ? 'has-error' : ''}}">
                {!! Form::label('inputKey', '文件: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::file('inputKey', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('inputKey', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-3">
                    {!! Form::submit('上传', ['class' => 'btn btn-primary form-control','style'=>'width:50px;']) !!}
                    {!! Form::hidden('user_id', $userId) !!}
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

    <script language="JavaScript">
        $(document).ready(function(){
            $("#inputKey").change(function() {
                fileName = $("#inputKey").val();
                checkFile(fileName)
            });

            $(".form-horizontal").submit(function() {
                document.charset='utf-8';
                fileName=$("#inputKey").val();
                return checkFile(fileName)
            });

            function checkFile(fileName) {
                extension= fileName.split('.').pop();
                if(fileName=="" ) {
                    alert("请选择PPT,Word文件!");
                    return false;
                }
                if(extension == "ppt" || extension == "doc") {
                    return true;
                } else {
                    alert("只允许选择PPT,Word文件!");
                    return false;
                }
            }
        });
    </script>

@endsection

