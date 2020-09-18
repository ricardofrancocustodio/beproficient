<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Test extends Model
{
	//use SoftDeletes;

	protected $dates = [
		
		'created_at',
		'updated_at',
		//'deleted_at',

	];


	protected $fillable = [

		'id_testtype',
		'created_by_user_id',
		
	];

	
    //
     protected $primaryKey = 'id_test';
}
