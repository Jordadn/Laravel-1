<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidosController extends Controller
{
    Function listar(){
        return view ("pedidos");
    
    }
}