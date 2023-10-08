<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\layanan;
use App\Models\logo;

class layananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $layanan = layanan::latest()->get();

        return view('layanan.layanan', compact('layanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layanan.create-layanan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $layanan = new layanan;
        $layanan->judul = $request->input('judul');
        $layanan->deskripsi = $request->input('deskripsi');
        if ($request->hasfile('icon')) {
            $file = $request->file('icon');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('img/', $filename);
            $layanan->icon = $filename;
        }
        $layanan->save();
        return redirect('layanan')->with('toast_success', 'Data Berhasil Disimpan!');
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
        $layanan = layanan::findorfail($id);
        return view('layanan.update-layanan', compact('layanan'));
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
        $layanan = layanan::findorfail($id);
        $layanan->judul = $request->input('judul');
        $layanan->deskripsi = $request->input('deskripsi');
        if ($request->hasfile('icon')) {
            $file = $request->file('icon');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('img/', $filename);
            $layanan->icon = $filename;
        }
        $layanan->save();
        return redirect('layanan')->with('toast_success', 'Data Berhasil Disimpan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = layanan::findorfail($id);
        $file = public_path('/img/') . $hapus->icon;
        if (file_exists($file)) {
            @unlink($file);
        }
        $hapus->delete();
        return back()->with('toast_success', 'Data Berhasil Dihapus');
    }

    public function trash()
    {
        $layanan = layanan::onlyTrashed()->get();
        return view('layanan.trash-layanan', compact('layanan'));
    }

    public function restore($id = null)
    {
        if ($id != null) {
            $layanan = layanan::onlyTrashed()->where('id', $id)->restore();
        } else {
            $layanan = layanan::onlyTrashed()->restore();
        }
        return redirect('layanan')->with('toast_success', 'Data Berhasil Dikembalikan!');
    }

    public function delete($id = null)
    {
        if ($id != null) {
            $layanan = layanan::onlyTrashed()->where('id', $id)->forceDelete();
        } else {
            $layanan = layanan::onlyTrashed()->forceDelete();
        }
        return redirect('layanan')->with('toast_success', 'Data Berhasil Dihapus Permanen!');
    }
}
