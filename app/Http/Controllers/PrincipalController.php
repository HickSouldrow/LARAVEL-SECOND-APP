<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function principal()
    {
        return view('site.principal'); // Certifique-se de que essa view existe
    }

    public function sobrenos()
    {
        return view('site.sobrenos');
    }

    public function contato()
    {
        return view('site.contato');
    }

    public function termos()
    {
        return view('site.termos');
    }

    public function ajuda()
    {
        return view('site.ajuda');
    }
    public function imagem()
    {
        return view('site.imagem');
    }
}
