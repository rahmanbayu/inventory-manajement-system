<?php

namespace App\Http\Controllers;

use App\Employe;
use App\Http\Requests\Employes\CreateEmployeRequest;
use App\Http\Requests\Employes\UpdateEployeRequest;
use CreateEmployesTable;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('employes.index', ['employes' => Employe::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employes.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Employe $employe)
    {
        return view('employes.form', ['employe' => $employe]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEployeRequest $request, Employe $employe)
    {
        $data = $request->validated();
        if ($request->has('image')) {
            $employe->deleteImage();
            $data['image'] = $request->file('image')->store(
                'assets/employes',
                'public'
            );
        }

        $employe->update($data);

        session()->flash('success', 'Employe edit success.');
        return redirect()->route('employes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employe $employe)
    {
        $employe->deleteImage();
        $employe->delete();

        session()->flash('success', 'Employe delete success.');

        return redirect()->back();
    }
}
