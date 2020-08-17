<?php

namespace App\Http\Controllers;

use App\Employe;
use App\Http\Requests\Employes\CreateEmployeRequest;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    public function index()
    {
        return view('employes.index', ['employes' => Employe::all()]);
    }
    public function create()
    {
        return view('employes.form');
    }
    public function store(CreateEmployeRequest $request)
    {
        $data = $request->validated();
        $data['image'] = $request->file('image')->store(
            'assets/employes',
            'public'
        );
        Employe::create($data);

        session()->flash('success', 'Create employe success.');
        return redirect()->route('employes.index');
    }
}
