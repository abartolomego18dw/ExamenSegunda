<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class FotoController extends Controller
{
    public function index()
    {	



        return view('foto/index');
    }
}
