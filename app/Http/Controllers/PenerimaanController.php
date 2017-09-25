<?php

namespace App\Http\Controllers;

use App\Http\Requests\PenerimaanRequest;
use App\Penerimaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PenerimaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this ->middleware('auth');
    }

    public function index()
    {
        $penerimaan = Penerimaan::paginate(15);
        $i =1;
        return view('Fungsionalitas.Penerimaan.index', compact('penerimaan','i'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Fungsionalitas.Penerimaan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PenerimaanRequest $request)
    {
        $input = $request->input();
        $penerimaan = new Penerimaan($input);
        $penerimaan->user = Auth::user()->name;
        $penerimaan->save();
        return redirect(url('/penerimaan'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Penerimaan  $penerimaan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $penerimaan = Penerimaan::findOrFail($id);
        return view('Fungsionalitas.Penerimaan.show',compact('penerimaan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Penerimaan  $penerimaan
     * @return \Illuminate\Http\Response
     */
    public function edit(Penerimaan $penerimaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Penerimaan  $penerimaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penerimaan $penerimaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Penerimaan  $penerimaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penerimaan $penerimaan)
    {
        //
    }
}
