<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
	protected $table = 'warehouses';
    
    protected $fillable = ['name','image','description'];
    
    protected $hidden = [];

    public function product()
    {
    	return $this->hasMany('App\Product');
    }
}
