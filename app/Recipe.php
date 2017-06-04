<?php

namespace App;
use Jenssegers\Mongodb\Eloquent\Model;

class Recipe extends Model
{
    //
    protected $guearded = ['_id'];
}
