<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $produks = Barang::all();
        return view('Home.display', compact('produks'));
    }
}
