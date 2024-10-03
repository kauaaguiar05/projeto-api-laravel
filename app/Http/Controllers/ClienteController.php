<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function listar()
    {
        $array = [
            "nome" => "Kaua"
        ];

        return response()->json($array, 200);
    }
}
