<?php

namespace App\Http\Controllers;

use App\Absenkehadiran;
use Illuminate\Http\Request;

class AbsenRayonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('absen_rayon.index', [
            'nomor' => 1,
            'absenrayons' => Absenkehadiran::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('absen_rayon.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Absenkehadiran::create([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'user_id' => auth()->user()->id,
            'tanggal' => $request->tanggal,
            'kehadiran' => $request->kehadiran
        ]);
        return redirect()->route('absen_rayon.index')->with('notif', 'Data disimpan');
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
        return view('absen_rayon.edit', [
            'data' => Absenkehadiran::findOrFail($id)
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
        $data = Absenkehadiran::findOrFail($id);
        $data->update($request->all());
        return redirect()->route('absen_rayon.index')->with('notif', 'Data diupdate'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Absenkehadiran::findOrFail($id)->delete();
        return back()->with('notif', 'Data dihapus');
    }
}
