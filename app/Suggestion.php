<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;
class Suggestion extends Model
{
    
    protected $guearded = ['_id'];
}
