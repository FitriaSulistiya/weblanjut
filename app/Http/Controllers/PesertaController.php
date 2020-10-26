<?php

namespace App\Http\Controllers;

use App\Peserta;
use Illuminate\Http\Request;

class pesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peserta = peserta::orderBy('id', 'ASC')->get();
        return view('peserta.index', compact('peserta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('peserta.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'peserta' => 'required|string'
        ]);

        try {
            $peserta = peserta::create([
                'nama' => $request->nama,
                'asalsekolah' => $request->asalsekolah,
                'gender' => $request->gender
            ]);
            return redirect('/peserta')->with(['success' => '<strong>' . $request->peserta . '</strong> Telah disimpan']);
        } catch(\Exception $e) {
            return redirect('/peserta/create')->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $peserta = peserta::find($id);
        return view('peserta.show', compact('peserta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peserta = peserta::find($id);
        return view('peserta.edit', compact('peserta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $peserta = peserta::find($id);
        $peserta->update([
            'peserta' => $request->peserta,
            'kapasitas' => $request->kapasitas,
            'terisi' => $request->terisi
        ]);
        return redirect('/peserta')->with(['success' => '<b>' . $request->peserta . '</b> Diperbaharui']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peserta = peserta::find($id);
        $peserta->delete();
        return redirect('/peserta')->with(['success' => '<b>' . $peserta->peserta . '</b> Berhasil Dihapus']);
    }
}