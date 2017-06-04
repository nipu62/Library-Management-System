<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Book extends Model
{
    protected $guearded = ['_id'];
}
