<?php

namespace App\Http\Controllers;

use App\Models\Matkul;
use App\Http\Requests;

class MatkulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matkul = Matkul::orderBy('id', 'desc')->paginate(10);
        return view('matkul.matkul', compact('matkul'));
    }
}
