<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventEntry extends Model
{
    protected $fillable = ['eventName','date','class'];
}
