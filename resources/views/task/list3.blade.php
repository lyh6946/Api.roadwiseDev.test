@extends('layout.master')
@section('title')
	할일목록
@endsection

@section('content')
	
	<table class="table">
		<thead>
			<tr>
				<th>이름</th>
				<th>할일</th>
			</tr>
		<thead>
		<tbody>			
		@foreach ($tasks as $task)
			<tr>		
				<td>{{$task['name']}}</td>	
				<td>{{$task['doing']}}</td>	
			</tr>
		@endforeach
		</tbody>
	</table>

@endsection


