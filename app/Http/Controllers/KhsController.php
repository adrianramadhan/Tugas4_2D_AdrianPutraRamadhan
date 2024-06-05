<?php

namespace App\Http\Controllers;

use App\Models\Khs;
use Illuminate\Http\Request;

class KhsController extends Controller
{
    public function index()
    {
        $khs = Khs::with('mahasiswa', 'matkul')->get();
        return view('khs.index', compact('khs'));
    }
}