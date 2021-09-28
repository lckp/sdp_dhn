<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index(){

        $paises = DB::table('paises')->get();
        return view('index', compact('paises'));
    }

    public function pegaEstados($id){
        echo json_encode(DB::table('estados')->where('pais_id', $id)->get());
    }
}

