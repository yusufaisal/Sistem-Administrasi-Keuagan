<?php

namespace App\Http\Controllers;

use App\Http\Requests\PenerimaanRequest;
use App\Penerimaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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
        $penerimaan = Penerimaan::where('tipe','=','Penerimaan')->paginate(15);
        $i = 1;
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
        $penerimaan->tipe = 'Penerimaan';
        $penerimaan->deposit = 0;
        Auth::user()->Penerimaan()->save($penerimaan);

        Session::flash('message', 'Data successfully added!');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Penerimaan  $penerimaan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penerimaan = Auth::User()->Penerimaan->where('id','=',$id)->where('tipe','=','Penerimaan')->first();
        return view('Fungsionalitas.Penerimaan.edit',compact('penerimaan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Penerimaan  $penerimaan
     * @return \Illuminate\Http\Response
     */
    public function update(PenerimaanRequest $request, $id)
    {
        $penerimaan = Auth::User()->Penerimaan->where('id','=',$id)->where('tipe','=','Penerimaan')->first();
        $penerimaan->profit = $request->input('profit');
        $penerimaan->keterangan = $request->input('keterangan');
        $penerimaan->tahun = $request->input('tahun');
        $penerimaan->bulan = $request->input('bulan');
        $penerimaan->save();


        Session::flash('message', 'Data successfully updated!');
        return redirect(url('penerimaan/'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Penerimaan  $penerimaan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penerimaan = Auth::User()->Penerimaan->where('id','=',$id)->where('tipe','=','Penerimaan')->first();
        $penerimaan -> delete();

        Session::flash('message', 'Data successfully deleted!');
        return redirect(url('penerimaan/'));
    }
}
