<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\card;
use App\Models\service;

class cardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = service::latest()->get();

        $card = card::latest()->paginate(5);
        return view('card.card', compact('card', 'services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('card.create-card');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $card = new card;
        $card->judul = $request->input('judul');
        $card->tanggal = $request->input('tanggal');

        $card->kategori = $request->input('kategori');
        $card->deskripsi = $request->input('deskripsi');
        $card->kontenlengkap = $request->input('kontenlengkap');


        if ($request->hasfile('gambar')) {
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('img/', $filename);
            $card->gambar = $filename;
        }
        $card->save();

        return redirect('card')->with('toast_success', 'Data Berhasil Disimpan!');
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
        $card = card::findorfail($id);
        return view('card.update-card', compact('card'));
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
        $card = card::findorfail($id);
        $card->judul = $request->input('judul');
        $card->tanggal = $request->input('tanggal');
        $card->kategori = $request->input('kategori');
        $card->deskripsi = $request->input('deskripsi');
        $card->kontenlengkap = $request->input('kontenlengkap');
        if ($request->hasfile('gambar')) {
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('img/', $filename);
            $card->gambar = $filename;
        }
        $card->save();
        return redirect('card')->with('toast_success', 'Data Berhasil Disimpan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $card = card::findorfail($id);
        $card->delete();
        return back()->with('toast_success', 'Data Berhasil Dihapus');;
    }

    public function trash()
    {
        $card = card::onlyTrashed()->get();
        return view('card.trash-card', compact('card'));
    }

    public function restore($id)
    {
        $card = card::onlyTrashed()->where('id', $id);
        $card->restore();
        return back()->with('toast_success', 'Data Berhasil Direstore');
    }

    public function delete($id)
    {
        $card = card::onlyTrashed()->where('id', $id);
        $card->forceDelete();
        return back()->with('toast_success', 'Data Berhasil Dihapus Permanen');
    }
}
