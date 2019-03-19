@extends('layout.master')
@section('title')
	테스트
@endsection

@section('content')

	내용입니다.
	
@endsection


<?php

	$img = \Image::make('foo.jpg');
	->resize(320,240)
	->insert('watermark.png');

?>