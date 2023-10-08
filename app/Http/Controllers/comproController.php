<?php

namespace App\Http\Controllers;

use App\Models\compro;
use Illuminate\Http\Request;

class comproController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compro = compro::latest()->paginate(5);

        return view('compro.compro', compact('compro'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('compro.create-compro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $compro = new compro;
        $compro->nama = $request->input('nama');
        $compro->email = $request->input('email');
        $compro->whatsapp = $request->input('whatsapp');
        $compro->deskripsi = $request->input('deskripsi');



        if ($request->hasfile('pdf')) {
            $file = $request->file('pdf');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('img/', $filename);
            $compro->pdf = $filename;
        }
        $compro->save();

        return response()->download('ne/img/NGI.pdf');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = compro::find($id);
        $hapus->delete();
        return back()->with('toast_success', 'Data Berhasil Dihapus!');
    }
}
