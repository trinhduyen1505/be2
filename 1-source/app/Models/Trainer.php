<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;

    protected $table = 'trainers';

    public function company(){
        return $this->hasOne('App\Company');
        $company = Trainer::find(1)->company;
    }
}
