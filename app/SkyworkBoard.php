<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SkyworkBoard extends Model
{
    //	
	protected $table = 'Skywork_Board';
	protected $connection = 'mysql';
	protected $primaryKey = 'BoardNumber';

	//public $timestamps = 'false';

	//protected $dates = ['due_date', 'assigned_date'];
}
