<?php

namespace App\Http\Controllers;

use App\Absenpiket;
use Illuminate\Http\Request;

class AbsenPiketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('absen_piket.index', [
            'nomor' => 1,
            'absenpikets' => Absenpiket::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('absen_piket.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Absenpiket::create([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'user_id' => auth()->user()->id,
            'hari' => $request->hari,
            'tanggal' => $request->tanggal,
            'kehadiran' => $request->kehadiran
        ]);
        return redirect()->route('absen_piket.index')->with('notif', 'Data disimpan');  
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
    public function edit($id)
    {
        return view('absen_piket.edit', [
            'data' => Absenpiket::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Absenpiket::findOrFail($id);
        $data->update($request->all());
        return redirect()->route('absen_piket.index')->with('notif', 'Data diupdate'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Absenpiket::findOrFail($id)->delete();
        return back()->with('notif', 'Data dihapus');
    }
}
