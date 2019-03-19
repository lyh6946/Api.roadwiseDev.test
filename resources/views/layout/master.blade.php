<!DOCTYPE html>
<html lang="ko">
	<head>
		<meta charset="utf-8">
		<title>@yield('title')</title>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		마스터 페이지 레이아웃
		<br/><br/><br/><br/>
		<div class="container">
			@yield('content')
		</div>
	</body>
</html>