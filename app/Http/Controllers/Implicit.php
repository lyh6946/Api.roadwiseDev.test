<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Implicit extends Controller
{
    //
	public function getIndex()
	{
		return 'getIndex';
	}

	public function getShow($id)
	{
		return 'getShow : ' . $id;
	}

	public function postProfile()
	{
		return 'postProfile';
	}

	public function getFooBar()
	{
		return 'getFooBar';
	}

	public function getCollection()
	{

		$collection = collect([1, 'apple', '', 'banana', null, 3])
			->map(function ($name) {
				return strtoupper($name);
			})
			->reject(function ($name) {
				return is_numeric($name);
			})
			->reject(function ($name) {
				return empty($name);
			});

		dump($collection);
	}

	public function getTest()
	{
		$col = collect([
			['name' => 'desk1', 'price' => 200],
			['name' => 'desk2', 'price' => 201],
			['name' => 'desk3', 'price' => 202],
			['name' => 'desk4', 'price' => 203],
			['name' => 'desk5', 'price' => 204],
			['name' => 'desk6', 'price' => 205],
			['name' => 'desk7', 'price' => 206],
			['name' => 'desk8', 'price' => 207],
		]);
		//$chunks = $col->chunk(3);
		$chunks = $col->toJson();
		//dd($chunks->toArray());

		return view('impl.test')->with('projects', $chunks);

	}

	public function getJson(Request $request)
	{
		$col = collect(['fruid' => 'Banana', 'price' => 50]);

		if ($request->ajax()){
			return $col->toJson();
		}

		//return dump($col);
	}

	public function getTt()
	{
		return view('impl.tt');
	}

	public function getBoard()
	{
		return view('impl.boardList');
	}

	public function getUserlist($searchText)
	{
		$url = 'http://api.roadwisedev.test/task/getUserList';
		$data = array("searchText" => $searchText);
		$data_string = json_encode($data);

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HEADER, 1);
		curl_setopt($ch, CURLOPT_POST, 0);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
		curl_setopt($ch, CURLOPT_TIMEOUT, 30);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$result = curl_exec($ch);

		return $result;
	}

}
