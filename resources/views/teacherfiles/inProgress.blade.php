@extends('layouts.admin')

@section('content')

<h1>文件管理 / 正在转换pdf文件:</h1>
<br>
<p align="center">
    <img src="http://www.mytreedb.com/uploads/mytreedb/loader/ajax_loader_red_512.gif" width="94" height="92" />
    <br>
    正在转换文件，如果文件比较大，转换时间需要比较久，请耐心等待...... <span id="timing">0</span>秒
</p>
<script language="javascript">
    timing = 0;
    checkPdfConvertStatus = function() {
        $.ajax({
            url: '/teacher-files/in-progress-ajax/{{ $teacherfile->id }}',
            type: 'GET',
            data: 'action=ajax',
            success: function(teacherFile) {
                //console.log(teacherFile);
                teacherFileJson = JSON.parse(teacherFile);
                //called when successful
                if(teacherFileJson.itemsKey) {
                    alert("文件转换完成！");
                    window.location.href = "/teacher-files/";
                }
            },
            error: function(e) {
            }
        });

        timing++;
        $("#timing").html(timing);
    };

    window.setInterval(checkPdfConvertStatus, 2000);

</script>

@endsection