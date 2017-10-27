<?php

namespace App\Http\Controllers;

use App\Belanja;
use App\Http\Requests\BelanjaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class BelanjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() {
        $this -> middleware('auth');
    }

    public function index()
    {
        $belanja = Belanja::where('tipe','=','Belanja')->paginate(15);
        $i = 1;

        return view('Fungsionalitas.Belanja.index', compact('belanja','i'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Fungsionalitas.Belanja.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BelanjaRequest $request)
    {
        $input = $request->input();
        $belanja = new Belanja($input);
        $belanja->tipe = 'Belanja';
        $belanja->profit = 0;
        Auth::user()->Belanja()->save($belanja);

        Session::flash('message', 'Data successfully added!');
        return redirect(url('belanja/'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Belanja  $belanja
     * @return \Illuminate\Http\Response
     */
    public function show(Belanja $belanja)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Belanja  $belanja
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $belanja = Auth::User()->Belanja->where('id','=',$id)->where('tipe','=','Belanja')->first();
        return view('Fungsionalitas.Belanja.edit',compact('belanja'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Belanja  $belanja
     * @return \Illuminate\Http\Response
     */
    public function update(BelanjaRequest $request, $id)
    {
        $belanja = Auth::User()->Belanja->where('id','=',$id)->where('tipe','=','Belanja')->first();
        $belanja->deposit = $request->input('deposit');
        $belanja->keterangan = $request->input('keterangan');
        $belanja->tahun = $request->input('tahun');
        $belanja->bulan = $request->input('bulan');
        $belanja->save();


        Session::flash('message', 'Data successfully updated!');
        return redirect(url('belanja/'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Belanja  $belanja
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $belanja = Auth::User()->Belanja->where('id','=',$id)->where('tipe','=','Belanja')->first();
        $belanja -> delete();

        Session::flash('message', 'Data successfully deleted!');
        return redirect(url('belanja/'));
    }
}