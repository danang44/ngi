<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subheader;

class subheaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subheader = subheader::all();
        return view('subheader.subheader', compact('subheader'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('subheader.create-subheader');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        subheader::create([
            'judul' => $request->judul,
            'subjudul' => $request->subjudul,
        ]);
        return redirect('subheader')->with('toast_success', 'Data Header Berhasil Ditambahkan!');
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
        $subheader = subheader::find($id);
        return view('subheader.update-subheader', compact('subheader'));
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
        $subheader = subheader::find($id);
        $subheader->update($request->all());
        return redirect('subheader')->with('toast_success', 'Data SubHeader Berhasil Diubah!');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subheader = subheader::find($id);
        $subheader->delete();
        return redirect('subheader')->with('toast_success', 'Data Header Berhasil Dihapus!');
    }
}
