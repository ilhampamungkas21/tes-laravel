<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelEmployee extends Model
{
    //

   protected $primarykey = 'id';
 	
 	public $timestamp = false;
	protected $table ='employees';
    protected $fillable =['nama','email','company_id','logo'];


    public function company()
    { 
    return $this->belongsTo('App\ModelCompanies');
	}

}
