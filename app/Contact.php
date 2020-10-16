<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    protected $dates = [
		
		'created_at',
		'updated_at',
		//'deleted_at',

	];


	protected $fillable = [

		'name',
		'email',
		'message'
		
	];

	
    //
     protected $primaryKey = 'id_contact';

     
    public $timestamps = true;
}
