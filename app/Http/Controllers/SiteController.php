<?php

namespace parque\Http\Controllers;

use Illuminate\Http\Request;
use parque\Models\Barraqueiro;

class SiteController extends Controller
{

    private $barraca;

    public function __construct(Barraqueiro $barraca)
    {
        $this->barraca = $barraca;
    }

    public function barracas(){

        $barracas = $this->barraca->get();
        return view('barraca.index',compact('barracas'));

    }
}
