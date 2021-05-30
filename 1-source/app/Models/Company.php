<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $table = 'companies';
   // protected $primaryKey = 'company_id';

    public function trainer(){
        return $this->hasMany('App\Models\Trainer');
    }
    public function categoryCom(){
        return $this->belongsTo('App\Models\Category','category_id','company_id');
    }
}
