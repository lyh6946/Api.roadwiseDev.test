<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class Task extends Controller
{
    //

	public function list3()
	{
		$tasks =
		[
			['name' => 'yong1', 'doing' => 'test'],
			['name' => 'ggg1', 'doing' => 'ssss1'],
		];

		return view('task.list3')->with('tasks', $tasks);
	}

	public function param(Request $request, $id = 12, $arg = 'argument1')
	{
		//return ['id' => $id, 'arg' => $arg];
		//return $request->path();
		dump([
			'path' => $request->path(),
			'url' => $request->url(),
			'fullUrl' => $request->fullUrl(),
			'method' => $request->method(),
			'name' => $request->get('name'),
			'ajax' => $request->ajax(),
			'header' => $request->header(),
			'id' => $id,
			'arg' => $arg,
		]);
	}

	//회원정보 리스트
	public function getUserList($searchType, $searchText)
	{
		$sql_query = 'select * from S_Mem ';

		if ($searchType <> '' && $searchText <> '')
		{
			$sql_query = $sql_query.' where '.$searchType.' LIKE \'%'.$searchText.'%\'';
		}
		//$sql_query = 'select * from S_Mem';

		$data_member = DB::select($sql_query);
		$data = array();

		foreach ($data_member as $member){
			array_push($data,
					array('MemNumber'=>$member->MemNumber,
					'id'=>$member->Id,
					'name'=>$member->Name
			));
	  }

		header('Content-Type: application/json; charset=utf8');
		$json = json_encode(array('webData'=>$data), JSON_PRETTY_PRINT+JSON_UNESCAPED_UNICODE);

		return $json;

	}

}
