<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminMain extends Controller
{
    //
	public function main()
	{
		//return '1';
		return view('admin.main');
	}
}
