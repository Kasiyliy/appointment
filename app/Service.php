<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['name', 'price','visible'];
	public function employees()
    {
        return $this->belongsToMany('App\Employee');
    }
}
