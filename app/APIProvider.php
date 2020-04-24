<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class APIProvider extends Model{
    protected $table = 'kontakt';
    protected $fillable = ['fornavn','efternavn','besked'];
}






