<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use App\Om;


class Pessoal extends Model
{
    use SoftDeletes;
    protected $table = 'pessoal';
    protected $fillable = ['nome','nome_guerra', 'posto_graduacao', 'om_id'];

    public function om(){
        return $this->belongsTo('App\Om','om_id','id');
    }

    public function scopePessoalCorrente($query){

        //Traz somente o pessoal da mesma OM do administardor
        $om = Om::where('id', Auth::user()->om_id)->first()->sigla;
        $omid = Auth::user()->om_id;

        if ($om == 'DHN'){
            return $query;            
        }
        else{
            return $query->where('om_id', $omid);
        }
    }
        
}
