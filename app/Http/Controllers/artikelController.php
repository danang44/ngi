<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\artikel;

class artikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = artikel::latest()->paginate(5);
        return view('artikel.artikel', compact('artikel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('artikel.create-artikel');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //   dd($request->all());


        $artikel = new artikel;
        $artikel->judul = $request->input('judul');
        $artikel->deskripsi = $request->input('deskripsi');
        $artikel->tanggal = $request->input('tanggal');
        $artikel->author = $request->input('author');
        $artikel->artikellengkap = $request->input('artikellengkap');


        if ($request->hasfile('gambar')) {
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('img/', $filename);
            $artikel->gambar = $filename;
        }
        $artikel->save();
        return redirect('artikel')->with('toast_success', 'Data Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artikel = artikel::findorfail($id);
        return view('artikel.detail-artikel', compact('artikel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artikel = artikel::findorfail($id);
        return view('artikel.update-artikel', compact('artikel'));
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
        $artikel = artikel::findorfail($id);
        $artikel->judul = $request->input('judul');
        $artikel->author = $request->input('author');
        $artikel->tanggal = $request->input('tanggal');
        $artikel->deskripsi = $request->input('deskripsi');
        $artikel->artikellengkap = $request->input('artikellengkap');
        if ($request->hasfile('gambar')) {
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('img/', $filename);
            $artikel->gambar = $filename;
        }
        $artikel->save();
        return redirect('artikel')->with('toast_success', 'Data Berhasil Disimpan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $artikel = artikel::findorfail($id);
        $artikel->delete();
        return back()->with('toast_success', 'Data Berhasil Dihapus');;
    }

    public function trash()
    {

        $artikel = artikel::onlyTrashed()->get();
        return view('artikel.trash-artikel', compact('artikel'));
    }

    public function restore($id = null)
    {
        if ($id != null) {
            $artikel = artikel::onlyTrashed()->where('id', $id)->restore();
        } else {
            $artikel = artikel::onlyTrashed()->restore();
        }
        return redirect('artikel')->with('toast_success', 'Data Berhasil Direstore!');
    }

    public function delete($id = null)
    {
        if ($id != null) {
            $artikel = artikel::onlyTrashed()->where('id', $id)->forceDelete();
        } else {
            $artikel = artikel::onlyTrashed()->forceDelete();
        }
        return redirect()->back()->with('toast_success', 'Data Berhasil Di Hapus Permanen');
    }
}
