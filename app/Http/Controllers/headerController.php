<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\header;

class headerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $header = header::all();
        return view('header.header', compact('header'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('header.create-header');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        header::create([
            'judul' => $request->judul,
            'subjudul' => $request->subjudul,
            'section' => $request->section,
        ]);
        return redirect('header')->with('toast_success', 'Data Header Berhasil Ditambahkan!');
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
        $header = header::find($id);
        return view('header.update-header', compact('header'));
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
        $header = header::find($id);
        $header->update($request->all());
        return redirect('header')->with('toast_success', 'Data Header Berhasil Diubah!');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $header = header::find($id);
        $header->delete();
        return redirect('header')->with('toast_success', 'Data Header Berhasil Dihapus!');
    }

    public function trash()
    {
        $header = header::onlyTrashed()->get();
        return view('header.trash-header', compact('header'));
    }

    public function restore($id)
    {
        $header = header::onlyTrashed()->where('id', $id);
        $header->restore();
        return redirect('header/trash')->with('toast_success', 'Data Header Berhasil Dikembalikan!');
    }

    public function restore_all()
    {
        $header = header::onlyTrashed();
        $header->restore();
        return redirect('header/trash')->with('toast_success', 'Semua Data Header Berhasil Dikembalikan!');
    }

    public function delete($id)
    {
        $header = header::onlyTrashed()->where('id', $id);
        $header->forceDelete();
        return redirect('header/trash')->with('toast_success', 'Data Header Berhasil Dihapus Permanen!');
    }

    public function delete_all()
    {
        $header = header::onlyTrashed();
        $header->forceDelete();
        return redirect('header/trash')->with('toast_success', 'Semua Data Header Berhasil Dihapus Permanen!');
    }
}
