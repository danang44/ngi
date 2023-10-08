<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\logo;

class logoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logo = logo::latest()->paginate(5);

        return view('logo.logo', compact('logo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('logo.create-logo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nama = $request->logo;
        $namaFile = time() . rand(100, 999) . "." . $nama->getClientOriginalName();

        $Upload = new logo;
        $Upload->nama = $request->nama;
        $Upload->logo = $namaFile;



        $nama->move(public_path() . '/img', $namaFile);
        $Upload->save();


        return redirect('logo')->with('toast_success', 'Data Berhasil Disimpan!');
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
        $logo = logo::findorfail($id);
        return view('logo.update-logo', compact('logo'));
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
        $ubah = logo::findorfail($id);
        $awal = $ubah->logo;

        $logo = [
            'nama' => $request['nama'],
            'logo' => $awal,
        ];

        $request->logo->move(public_path() . '/img', $awal);
        $ubah->update($logo);
        return redirect('logo')->with('toast_success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = logo::findorfail($id);
        $file = public_path('/img/') . $hapus->logo;
        //cek jika ada gambar
        if (file_exists($file)) {

            @unlink($file);
        }
        $hapus->delete();
        return back()->with('toast_success', 'Data Berhasil Dihapus');
    }
    public function softDeleted($id)
    {
        logo::find($id)->delete();
        return back();
    }

    public function trash()
    {
        $logo = logo::onlyTrashed()->paginate(5);
        return view('logo.trash-logo', compact('logo'));
    }

    public function restore($id)
    {
        logo::onlyTrashed()->where('id', $id)->restore();
        return redirect('logo/trash-logo')->with('toast_success', 'Data Berhasil Direstore');
    }

    public function deletePermanent($id)
    {
        $hapus = logo::onlyTrashed()->where('id', $id)->first();
        $hapus->forceDelete();
        return back()->with('toast_success', 'Data Berhasil Dihapus Permanen');
    }
}
