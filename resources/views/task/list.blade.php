<html>
	<body>
		@foreach($tasks as $task)
			이름 : {{$task['name']}}, 할일 : {{$task['doing']}} <br/>
		@endforeach
		<br/><br/><br/><br/><br/><br/><br/>

		
		@for ($i =0; $i < count($tasks); $i++)
			이름1 : {{$tasks[$i]['name']}}, 할일1 : {{$tasks[$i]['doing']}} <br/>
		@endfor


	</body>
</html>