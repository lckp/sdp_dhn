<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Om extends Model
{   use SoftDeletes;
    protected $table = 'om';
    protected $fillable = ['nome','sigla'];
    
}
