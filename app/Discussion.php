<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
    protected $table = "discussions";

    protected $fillable = ['*'];
}
