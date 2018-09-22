<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratmasukController extends Controller
{
    public function index()
    {
    	return view('suratmasuk/index');
    }
    public function create()
    {
    	return view('suratmasuk/create');
    }
}
