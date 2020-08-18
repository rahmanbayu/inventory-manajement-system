<?php

namespace App\Http\Controllers;

use App\Http\Requests\Supliers\CreateSuplierRequest;
use App\Http\Requests\Supliers\UpdateSuplierRequest;
use App\Suplier;
use Illuminate\Http\Request;

class SuplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('supliers.index', ['supliers' => Suplier::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supliers.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateSuplierRequest $request)
    {
        $data = $request->validated();
        $data['image'] = $request->file('image')->store(
            'assets/supliers',
            'public'
        );

        Suplier::create($data);

        session()->flash('success', 'New suplier was added.');
        return redirect()->route('supliers.index');
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
    public function edit(Suplier $suplier)
    {
        return view('supliers.form', ['suplier' => $suplier]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSuplierRequest $request, Suplier $suplier)
    {
        $data = $request->validated();

        if ($request->has('image')) {
            $suplier->imageDelete();
            $data['image'] = $request->file('image')->store(
                'assets/supliers',
                'public'
            );
        }

        $suplier->update($data);

        session()->flash('success', 'Edit suplier success.');
        return redirect()->route('supliers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Suplier $suplier)
    {
        $suplier->imageDelete();
        $suplier->delete();

        session()->flash('success', 'Delete suplier success.');
        return redirect()->back();
    }
}
