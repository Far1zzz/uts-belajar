<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    public function peserta()
    {
        $peserta = Peserta::all();
        return view('peserta.index', ['allpeserta' => $peserta]);
    }
}
