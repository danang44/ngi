<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\image;

class imageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //$image = image ::withTrashed()->get();
        $image = image::latest()->get();

        return view('slider.image', compact('image'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('slider.create-image');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $image = new image;
        $image->logo = $request->input('logo');
        $image->fixed_gambar = $request->input('fixed_gambar');
        $image->banner = $request->input('banner');

        if ($request->hasfile('slide')) {
            $file = $request->file('slide');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('img/', $filename);
            $image->slide = $filename;
        }
        $image->save();
        return redirect('image')->with('toast_success', 'Data Berhasil Disimpan!');
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
        $image = image::findorfail($id);
        return view('slider.update-image', compact('image'));
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
        $image = image::findorfail($id);
        $image->logo = $request->input('logo');
        $image->fixed_gambar = $request->input('fixed_gambar');
        $image->banner = $request->input('banner');
        if ($request->hasfile('slide')) {
            $file = $request->file('slide');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('img/', $filename);
            $image->slide = $filename;
        }
        $image->save();
        return redirect('image')->with('toast_success', 'Data Berhasil Disimpan!');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = image::findorfail($id);
        $file = public_path('/img/') . $hapus->gambar;
        //cek jika ada gambar
        if (file_exists($file)) {

            @unlink($file);
        }
        $hapus->delete();
        return back()->with('toast_success', 'Data Berhasil Dihapus');
    }

    public function trash()
    {
        $image = image::onlyTrashed()->get();
        return view('slider.trash-image', compact('image'));
    }

    public function restore($id = null)
    {
        if ($id != null) {
            $image = image::onlyTrashed()->where('id', $id)->restore();
        } else {
            $image = image::onlyTrashed()->restore();
        }
        return back()->with('toast_success', 'Data Berhasil Direstore');
    }

    public function delete($id = null)
    {
        if ($id != null) {
            $image = image::onlyTrashed()->where('id', $id)->forceDelete();
        } else {
            $image = image::onlyTrashed()->forceDelete();
        }
        return back()->with('toast_success', 'Data Berhasil Dihapus Permanen');
    }
}
