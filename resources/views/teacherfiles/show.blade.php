@extends('layouts.admin')

@section('content')

    <h1>文件管理 / 查看PNG图片:</h1>
    <p>{{ $teacherfile->inputKey }}->{{ $teacherfile->itemsKey }}</p>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>
                    <div class="wah">
                        <a href="{{ Config::get('hihooray.hooray-teacher-files.url') }}{{ $teacherfile->itemsKey }}" target="_blank" style="color:blue">view pdf</a><br>
                    </div>
                    <div class="wah">
                        @for ($iPage = 1; $iPage <=  $teacherfile->page_num; $iPage++)
                        <a href="{{ Config::get('hihooray.hooray-teacher-files.url') }}{{ $teacherfile->itemsKey }}?odconv/png/page/{{ $iPage }}/density/150/quality/80/resize/800" target="_blank" style="color:blue">png{{ $iPage }}</a>|
                        @endfor
                    </div>

                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        @for ($iPage = 1; $iPage <=  $teacherfile->page_num; $iPage++)
                        <a href="{{ Config::get('hihooray.hooray-teacher-files.url') }}{{ $teacherfile->itemsKey }}?odconv/png/page/{{ $iPage }}/density/150/quality/80/resize/800" target="_blank" style="color:blue; ">
                            <img src="{{ Config::get('hihooray.hooray-teacher-files.url') }}{{ $teacherfile->itemsKey }}?odconv/png/page/{{ $iPage }}/density/150/quality/80/resize/300" style="width:100px;height:200px;border: 1px dashed blue;">
                        </a>
                        @endfor
                    </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection