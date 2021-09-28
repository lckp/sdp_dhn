<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    use HasFactory;
    protected $table = 'cidades';
    protected $fillable = ['cidade','estado_id'];

    public function estado() {
        return $this->belongsTo('App\Estado','estado_id','id');
    }
}
