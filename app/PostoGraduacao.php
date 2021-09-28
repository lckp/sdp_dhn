<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class PostoGraduacao extends Model
{
    use SoftDeletes;
    protected $table = 'posto_graduacao';
    protected $fillable = ['descricao','sigla', 'antiguidade'];
    
}
