<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CargoDosController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        return "Ejecución automática";
    }
}
