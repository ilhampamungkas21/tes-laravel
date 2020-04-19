<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelCompanies extends Model

{
    //

	protected $primarykey = 'id';
 	
 	public $timestamp = false;
	protected $table ='companies';
    protected $fillable =['nama','email','website','logo'];


   

   	public function informasi_employee()
    { 
    return $this->hasMany('App\ModelEmployee');
	}



}
