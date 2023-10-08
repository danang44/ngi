<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kontak;

class kontakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kontak = kontak::latest()->get();

        return view('kontak.kontak', compact('kontak'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kontak.create-kontak');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kontak = new kontak;
        $kontak->judul = $request->input('judul');
        $kontak->deskripsi = $request->input('deskripsi');
        $kontak->link = $request->input('link');
        $kontak->url = $request->input('url');

        if ($request->hasfile('ikon')) {
            $file = $request->file('ikon');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('img/', $filename);
            $kontak->ikon = $filename;
        }
        $kontak->save();
        return redirect('kontak')->with('toast_success', 'Data Berhasil Disimpan!');
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
        $kontak = kontak::findorfail($id);
        return view('kontak.update-kontak', compact('kontak'));
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
        $kontak = kontak::findorfail($id);
        $kontak->judul = $request->input('judul');
        $kontak->deskripsi = $request->input('deskripsi');
        $kontak->link = $request->input('link');
        $kontak->url = $request->input('url');

        if ($request->hasfile('ikon')) {
            $file = $request->file('ikon');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('img/', $filename);
            $kontak->ikon = $filename;
        }
        $kontak->save();
        return redirect('kontak')->with('toast_success', 'Data Berhasil Disimpan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = kontak::findorfail($id);
        $file = public_path('/img/') . $hapus->ikon;
        if (file_exists($file)) {
            @unlink($file);
        }
        $hapus->delete();
        return back()->with('toast_success', 'Data Berhasil Dihapus');
    }
}
