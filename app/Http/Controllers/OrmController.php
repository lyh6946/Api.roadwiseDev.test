<?php

namespace App\Http\Controllers;
use App\SkyworkBoard;

use DB;


class OrmController extends Controller
{
    //
	public function dataList()
	{

		$tasks = SkyworkBoard::all();

		return response()->json($tasks, 200, [], JSON_PRETTY_PRINT);

		//return $tasks;

	}

	public function test()
	{

		$data_member = DB::select('SELECT * FROM S_Mem');
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
