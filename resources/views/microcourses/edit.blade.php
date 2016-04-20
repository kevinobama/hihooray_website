@extends('layouts.admin')

@section('content')

	<h1>修改微课</h1>
	<hr/>

	{!! Form::model($microcourse, [
		'method' => 'PATCH',
		'url' => ['microcourses', $microcourse->id],
		'class' => 'form-horizontal'
	]) !!}

	<div class="form-group {{ $errors->has('id') ? 'has-error' : ''}}">
		{!! Form::label('id', 'Id: ', ['class' => 'col-sm-2 control-label']) !!}
		<div class="col-sm-7">
			{!! Form::number('id', null, ['class' => 'form-control', 'readonly' => 'true']) !!}
			{!! $errors->first('id', '<p class="help-block">:message</p>') !!}
		</div>
	</div>
	<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
		{!! Form::label('name', '微课名称: ', ['class' => 'col-sm-2 control-label']) !!}
		<div class="col-sm-7">
			{!! Form::text('name', null, ['class' => 'form-control']) !!}
			{!! $errors->first('name', '<p class="help-block">:message</p>') !!}
		</div>
	</div>
	<div class="form-group {{ $errors->has('gradename') ? 'has-error' : ''}}">
		{!! Form::label('gradename', '年级阶段: ', ['class' => 'col-sm-2 control-label']) !!}
		<div class="col-sm-7">
			{!! Form::select('gradename', [2 => '小学', 3 => '初中', 4 => '高中'], ['class' => 'form-control']) !!}
			{!! $errors->first('gradename', '<p class="help-block">:message</p>') !!}
		</div>
	</div>
	<div class="form-group {{ $errors->has('price') ? 'has-error' : ''}}">
		{!! Form::label('price', '哇哇豆价格: ', ['class' => 'col-sm-2 control-label']) !!}
		<div class="col-sm-7">
			{!! Form::number('price', null, ['class' => 'form-control']) !!}
			{!! $errors->first('price', '<p class="help-block">:message</p>') !!}
		</div>
	</div>
	<div class="form-group {{ $errors->has('publish') ? 'has-error' : ''}}">
		{!! Form::label('publish', '是否公开: ', ['class' => 'col-sm-2 control-label']) !!}
		<div class="col-sm-7">
			<div class="checkbox">
				<label>{!! Form::radio('publish', '1') !!} Yes</label>
				<label>{!! Form::radio('publish', '0', true) !!} No</label>
			</div>
			{!! $errors->first('publish', '<p class="help-block">:message</p>') !!}
		</div>
	</div>
	<div class="form-group {{ $errors->has('price') ? 'has-error' : ''}}">
		{!! Form::label('file', '视频课件: ', ['class' => 'col-sm-2 control-label']) !!}
		<div class="col-sm-2" id="container">
			<a class="btn btn-default " id="pickfiles" href="#" >
				<i class="glyphicon glyphicon-plus"></i>
				<span>选择文件</span>
			</a>
		</div>
		<div class="col-sm-5 right">
			<div id="fsUploadProgress"></div>
		</div>
		<div class="col-sm-offset-2 col-sm-7">
			{!! Form::text('video_url', null, ['class' => 'form-control hide', 'id' => 'video_url']) !!}
			{!! $errors->first('video_url', '<p class="help-block">:message</p>') !!}
		</div>
	</div>
	<div class="form-group {{ $errors->has('video_duration') ? 'has-error' : ''}}">
		{!! Form::label('video_duration', '视频时长: ', ['class' => 'col-sm-2 control-label']) !!}
		<div class="col-sm-7">
			{!! Form::text('video_duration', null, ['class' => 'form-control', 'id' => 'video_duration']) !!}
			{!! $errors->first('video_duration', '<p class="help-block">:message</p>') !!}
		</div>
	</div>
	<div class="form-group {{ $errors->has('isauth') ? 'has-error' : ''}}">
		{!! Form::label('content', '内容简介: ', ['class' => 'col-sm-2 control-label']) !!}
		<div class="col-sm-7">
			{!! Form::textarea('content', null, ['class' => 'form-control']) !!}
			{!! $errors->first('content', '<p class="help-block">:message</p>') !!}
		</div>
	</div>


	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-3">
			{!! Form::submit('保存', ['class' => 'btn btn-primary form-control']) !!}
		</div>
	</div>
	{!! Form::close() !!}

	<script src="{{ asset('/js/plupload-2.1.8/js/plupload.full.min.js') }}"></script>
	<script src="{{ asset('/js/plupload-2.1.8/js/i18n/zh_CN.js') }}"></script>
	<script src="{{ asset('/js/qiniu.min.js') }}"></script>
	<script src="{{ asset('/js/qiniu-ui.js') }}"></script>
	<script src="{{ asset('/js/qiniu-uploader.js') }}"></script>

	@if ($errors->any())
		<ul class="alert alert-danger">
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif

@endsection
