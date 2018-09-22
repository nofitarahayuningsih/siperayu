<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratkeluarController extends Controller
{
    public function index()
    {
    	$tb_suratkeluar - Suratkeluar::orderBy('id')->get();
    	return view('suratkeluar/index', ['Suratkeluar' => $tb_suratkeluar]);
    }
     public function create()
    {
    	return view('suratmasuk/create');
    }
}
