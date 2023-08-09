<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class ReservasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function reservasi1(request $request)
    {
        return view('reservasi1');
    }
    public function reservasi2($nama)
    {
        return view('reservasi2',['nama' => $nama]);
    }
    public function reservasi3($nama, $nomorplat)
    {
        return view('reservasi3',['nama' => $nama, 'nomorplat' => $nomorplat]);
    }
    public function reservasi4($nama, $nomorplat, $kendaraan)
    {
        return view('reservasi4',['nama' => $nama, 'nomorplat' => $nomorplat, 'kendaraan' => $kendaraan]);
    }
    public function reservasi5($nama, $nomorplat, $kendaraan, $kilometer, $transmisi)
    {
        $jasa = DB::table('jasa')->leftjoin('kendaraan','kendaraan.id','jasa.IDKendaraan')->where('nama',$kendaraan)->where('km',$kilometer)->first();
        // $opl = DB::table('opl')->leftjoin('kendaraan','kendaraan.id','opl.IDKendaraan')->where('nama',$kendaraan)->where('km',$kilometer)->get();
        return view('reservasi5',['nama' => $nama, 'nomorplat' => $nomorplat, 'kendaraan' => $kendaraan, 'kilometer' => $kilometer, 'transmisi' => $transmisi, 'jasa' => $jasa]);
    }
    public function reservasi6($nama, $nomorplat, $kendaraan, $kilometer, $transmisi, $paket)
    {
        $jasa = DB::table('jasa')->leftjoin('kendaraan','kendaraan.id','jasa.IDKendaraan')->where('nama',$kendaraan)->where('km',$kilometer)->first();
        // $opl = DB::table('opl')->leftjoin('kendaraan','kendaraan.id','opl.IDKendaraan')->where('nama',$kendaraan)->where('km',$kilometer)->get();
        return view('reservasi6',['nama' => $nama, 'nomorplat' => $nomorplat, 'kendaraan' => $kendaraan, 'kilometer' => $kilometer, 'transmisi' => $transmisi, 'jasa' => $jasa, 'paket' => $paket]);
    }
    public function showpaket($kendaraan,$paket)
    {
        $opl = DB::table('opl')->leftjoin('kendaraan','kendaraan.id','opl.IDKendaraan')->where('nama',$kendaraan)->where('paket',$paket)->select('*',DB::raw('FORMAT(opl.harga,0) as hargaformat'))->get();
        return response()->json($opl);
    }
    public function sumpaket($kendaraan,$paket)
    {
        $opl = DB::table('opl')->leftjoin('kendaraan','kendaraan.id','opl.IDKendaraan')->where('nama',$kendaraan)->where('paket',$paket)->select(DB::raw('FORMAT(SUM(opl.harga),0) as hargaformat'),DB::raw('SUM(opl.harga) as hargasum'))->first();
        return response()->json($opl);
    }
    public function showmaterial($kendaraan,$paket)
    {
        $material = DB::table('material')->leftjoin('kendaraan','kendaraan.id','material.IDKendaraan')->where('nama',$kendaraan)->where('paket',$paket)->select('*',DB::raw('FORMAT(material.harga,0) as hargaformat'))->get();
        return response()->json($material);
    }
    public function summaterial($kendaraan,$paket)
    {
        $material2 = DB::table('material')->leftjoin('kendaraan','kendaraan.id','material.IDKendaraan')->where('nama',$kendaraan)->where('paket',$paket)->select(DB::raw('FORMAT(SUM(material.harga),0) as hargaformat'),DB::raw('SUM(material.harga) as hargasum'))->first();
        return response()->json($material2);
    }
    public function showpart($kendaraan,$paket,$km,$transmisi)
    {
        $part = DB::table('part')->leftjoin('kendaraan','kendaraan.id','part.IDKendaraan')->where('nama',$kendaraan)->where('paket',$paket)->where('km',$km)->where('transmisi',$transmisi)->select('*',DB::raw('FORMAT(part.harga,0) as hargaformat'))->get();
        return response()->json($part);
    }
    public function sumpart($kendaraan,$paket,$km,$transmisi)
    {
        $part = DB::table('part')->leftjoin('kendaraan','kendaraan.id','part.IDKendaraan')->where('nama',$kendaraan)->where('paket',$paket)->where('km',$km)->where('transmisi',$transmisi)->select(DB::raw('FORMAT(SUM(part.harga),0) as hargaformat'),DB::raw('SUM(part.harga) as hargasum'))->first();
        return response()->json($part);
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
    }
}
