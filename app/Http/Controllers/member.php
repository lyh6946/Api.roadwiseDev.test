<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class member extends Controller
{
    //
    public function getuserList($searchType, $searchText)
    {

      //return 1;


      $url = 'http://api.roadwisedev.test/task/getuserlist/'.$searchType.'/'.$searchText;
  		//$data = array('searchType' => $searchType, 'searchText' => $searchText);
  		//$data_string = json_encode($data);

  		$ch = curl_init();
  		curl_setopt($ch, CURLOPT_URL, $url);
  		curl_setopt($ch, CURLOPT_HEADER, 1);
  		curl_setopt($ch, CURLOPT_POST, 0);
  		curl_setopt($ch, CURLOPT_TIMEOUT, 30);
  		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  		$result = curl_exec($ch);

  		return $result;


    }
}
