<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['title', 'description'];
    public $timestamps = false;

    // public function getRouteKeyName(){
    //     return'title';
    // }
}
