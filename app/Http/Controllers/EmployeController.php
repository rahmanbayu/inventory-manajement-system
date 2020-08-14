<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeController extends Controller
{
    public function index()
    {
        return view('employes.index');
    }
    public function create()
    {
        return view('employes.form');
    }
}
