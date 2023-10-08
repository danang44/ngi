<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\layanan;
use App\Models\logo;
use App\Models\header;
use App\Models\artikel;
use App\Models\card;
use App\Models\kontak;
use App\Models\image;
use App\Models\video;

use App\Models\compro;
use App\Models\service;
use App\Models\kategori;
use App\Models\travel;
use App\Models\retail;
use App\Models\banking;
use App\Models\productifity;

use Illuminate\Support\Facades\DB;


class webngiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function TampilLayanan()
    {
        $layanan = layanan::latest()->get();
        $logo = logo::latest()->get();
        $header = header::latest()->get();
        $artikel = artikel::latest()->get();

        $kontak = kontak::latest()->get();
        $image = image::latest()->get();
        $video = video::latest()->get();

        $compro = compro::latest()->get();

        $card = card::latest()->get();
        $services = service::latest()->get();
        $kategori = kategori::latest()->get();
        $travel = travel::latest()->get();

        $retails = retail::latest()->get();
        $banking = banking::latest()->get();
        $productifity = productifity::latest()->get();





        return view('webngi', compact(
            'layanan',
            'logo',
            'header',
            'artikel',
            'card',
            'kontak',
            'image',
            'video',

            'compro',
            'services',
            'kategori',
            'travel',
            'retails',
            'banking',
            'productifity'


        ));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function TampilLogo()
    {
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
        //
    }
}
