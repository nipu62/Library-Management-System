<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Place extends Model
{
    protected $guearded = ['_id'];
}
