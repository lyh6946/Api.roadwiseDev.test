<?php
	
	/*
	echo 'test'.'<br/>';
	echo 'task(name):'.$task['name'].'<br/>';
	echo 'task(doing):'.$task['doing'].'<br/>';
	echo 'datetimeValue:'.$datetimeValue;
	*/

?>

<html>
	<body>
		<h1>할일정보</h1>
		<p>{{$task['name']}}</p>
		<p>{{$task['doing']}}</p>
		<p>{{$datetimeValue}}</p>

		@if ($task['name'] == 'yong')
			용용
		@else
			헤헤
		@endif

		@unless (Auth::check())
			로그인 필요
		@endunless

	</body>
</html>