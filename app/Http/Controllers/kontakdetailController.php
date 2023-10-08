<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\logo;
use App\Models\contactus;
use App\Models\header;
use App\Models\image;
use App\Models\kontak;

class kontakdetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logo = logo::latest()->get();
        $header = header::latest()->get();
        $image = image::latest()->get();
        $kontak = kontak::latest()->get();
        return view('contact-detail', compact('logo', 'header', 'image', 'kontak'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function TampilLogo()
    {
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contactus = new contactus();
        $contactus->nama = $request->nama;
        $contactus->email = $request->email;
        $contactus->isi = $request->isi;
        $contactus->save();

        return redirect('https://formspree.io/f/mjvqpoqp');
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
        //
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
        $contactus = contactus::find($id);
        $contactus->delete();
        return redirect('detailkontak')->with('toast_success', 'Data Pesan Berhasil Dihapus!');
    }
}
