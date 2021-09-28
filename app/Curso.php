<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Curso extends Model
{
    use SoftDeletes;
    protected $table = 'cursos';
    protected $fillable = ['nome','area_conhecimento'];
    
}
