<?php

namespace App\Http\Controllers;

use app\Models\dtinput;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Validator;
use app\Models\datainputdetail;

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
        return view('reservasi2', ['nama' => $nama]);
    }
    public function reservasi3($nama, $nomorplat)
    {
        $kendaraan = DB::table('kendaraan')->where('deleted', 0)->where('show', 1)->orderby('nama', 'asc')->get();
        return view('reservasi3', ['nama' => $nama, 'nomorplat' => $nomorplat, 'kendaraan' => $kendaraan]);
    }
    public function reservasi3ext($nama, $nomorplat, $kendaraancari)
    {
        $kendaraan = DB::table('kendaraan')->where('deleted', 0)->where('namashow', 'LIKE', '%' . $kendaraancari . '%')->where('show', 1)->orderby('nama', 'asc')->get();
        return view('reservasi3ext', ['nama' => $nama, 'nomorplat' => $nomorplat, 'kendaraan' => $kendaraan, 'kendaraancari' => $kendaraancari]);
    }
    public function reservasi4($nama, $nomorplat, $kendaraan)
    {
        return view('reservasi4', ['nama' => $nama, 'nomorplat' => $nomorplat, 'kendaraan' => $kendaraan]);
    }
    public function reservasi5($nama, $nomorplat, $kendaraan, $kilometer, $transmisi, $kat)
    {
        $jasa = DB::table('jasa')->leftjoin('kendaraan', 'kendaraan.id', 'jasa.IDKendaraan')->where('nama', $kendaraan)->where('km', $kilometer)->first();
        // $opl = DB::table('opl')->leftjoin('kendaraan','kendaraan.id','opl.IDKendaraan')->where('nama',$kendaraan)->where('km',$kilometer)->get();
        return view('reservasi5', ['nama' => $nama, 'nomorplat' => $nomorplat, 'kendaraan' => $kendaraan, 'kilometer' => $kilometer, 'transmisi' => $transmisi, 'kat' => $kat, 'jasa' => $jasa]);
    }
    public function reservasi6($nama, $nomorplat, $kendaraan, $kilometer, $transmisi, $kat, $paket)
    {
        $jasa = DB::table('jasa')->leftjoin('kendaraan', 'kendaraan.id', 'jasa.IDKendaraan')->where('nama', $kendaraan)->where('km', $kilometer)->first();
        // $opl = DB::table('opl')->leftjoin('kendaraan','kendaraan.id','opl.IDKendaraan')->where('nama',$kendaraan)->where('km',$kilometer)->get();
        return view('reservasi6', ['nama' => $nama, 'nomorplat' => $nomorplat, 'kendaraan' => $kendaraan, 'kilometer' => $kilometer, 'transmisi' => $transmisi, 'kat' => $kat, 'jasa' => $jasa, 'paket' => $paket]);
    }
    public function showpaket($kendaraan, $paket)
    {
        $opl = DB::table('opl')->leftjoin('kendaraan', 'kendaraan.id', 'opl.IDKendaraan')->where('nama', $kendaraan)->where('paket', $paket)->select('*', DB::raw('FORMAT(opl.harga,0) as hargaformat'))->get();
        return response()->json($opl);
    }
    public function sumpaket($kendaraan, $paket, $jasa)
    {
        $opl = DB::table('opl')->leftjoin('kendaraan', 'kendaraan.id', 'opl.IDKendaraan')->where('nama', $kendaraan)->where('paket', $paket)->select(DB::raw('FORMAT(SUM(opl.harga)+' . $jasa . ',0) as hargaformat'), DB::raw('SUM(opl.harga)+' . $jasa . ' as hargasum'))->first();
        return response()->json($opl);
    }
    public function showmaterial($kendaraan, $paket)
    {
        $material = DB::table('material')->leftjoin('kendaraan', 'kendaraan.id', 'material.IDKendaraan')->where('nama', $kendaraan)->where('paket', $paket)->select('*', DB::raw('FORMAT(material.harga,0) as hargaformat'))->get();
        return response()->json($material);
    }
    public function summaterial($kendaraan, $paket)
    {
        $material2 = DB::table('material')->leftjoin('kendaraan', 'kendaraan.id', 'material.IDKendaraan')->where('nama', $kendaraan)->where('paket', $paket)->select(DB::raw('FORMAT(SUM(material.harga),0) as hargaformat'), DB::raw('SUM(material.harga) as hargasum'))->first();
        return response()->json($material2);
    }
    public function showpart($kendaraan, $paket, $km, $transmisi, $kat)
    {
        $part = DB::table('part')->leftjoin('kendaraan', 'kendaraan.id', 'part.IDKendaraan')->where('nama', $kendaraan)->where('kategori', $kat)->where('paket', $paket)->where('km', $km)->where('transmisi', $transmisi)->select('*', DB::raw('FORMAT(part.harga,0) as hargaformat'))->get();
        return response()->json($part);
    }
    public function sumpart($kendaraan, $paket, $km, $transmisi, $kat)
    {
        $part = DB::table('part')->leftjoin('kendaraan', 'kendaraan.id', 'part.IDKendaraan')->where('nama', $kendaraan)->where('kategori', $kat)->where('paket', $paket)->where('km', $km)->where('transmisi', $transmisi)->select(DB::raw('FORMAT(SUM(part.harga),0) as hargaformat'), DB::raw('SUM(part.harga) as hargasum'))->first();
        return response()->json($part);
    }
    public function sumparmat($kendaraan, $paket, $km, $transmisi, $kat)
    {
        $part = DB::table('part')->leftjoin('kendaraan', 'kendaraan.id', 'part.IDKendaraan')->where('nama', $kendaraan)->where('kategori', $kat)->where('paket', $paket)->where('km', $km)->where('transmisi', $transmisi)->select(DB::raw('FORMAT(SUM(part.harga),0) as hargaformat'), DB::raw('SUM(part.harga) as hargasum'))->first();
        $material2 = DB::table('material')->leftjoin('kendaraan', 'kendaraan.id', 'material.IDKendaraan')->where('nama', $kendaraan)->where('paket', $paket)->select(DB::raw('FORMAT(SUM(material.harga),0) as hargaformat'), DB::raw('SUM(material.harga) as hargasum'))->first();
        $total = $part->hargasum + $material2->hargasum;
        $totalformat = number_format($part->hargasum + $material2->hargasum, 0);
        return response()->json(['hargasum' => $total, 'hargaformat' => $totalformat]);
    }
    public function showkendaraan()
    {
        $kendaraan = DB::table('kendaraan')->where('deleted', 0)->get();
        return response()->json($kendaraan);
    }
    public function showkendaraanfilter($ketik)
    {
        $kendaraan = DB::table('kendaraan')->where('namashow', 'LIKE', '%' . $ketik . '%')->where('deleted', 0)->get();
        return response()->json($kendaraan);
    }
    public function simpanreservasi(request $request)
    {
        $messages = [
            'required' => ':attribute harus diisi',
        ];

        $rules = array(
            'opl.*' => 'required',
            'material.*' => 'required',
            'part.*' => 'required',
            'paketservice' => 'required',
        );

        $error = Validator::make($request->all(), $rules, $messages);

        if ($error->fails()) {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $data_user = Auth::user();
        $dataselect = explode('_', $request->paketservice);

        //mark delete data sebelumnya
        DB::table('datainput')->where('nomorplat', $request->nomorplat)->update(['deleted_by' => 999, 'deleted_at' => date('Y-m-d H:i:s'),]);
        DB::table('datainputdetail')->where('nomorplat', $request->nomorplat)->update(['deleted_by' => 999, 'deleted_at' => date('Y-m-d H:i:s'),]);

        $form_data = array(
            'nama' => $request->nama,
            'nomorplat' => $request->nomorplat,
            'kendaraan' => $dataselect[0],
            'paket' => $dataselect[1],
            'km' => $dataselect[2],
            'tranmisi' => $dataselect[3],
            'created_by' => 999,
        );

        $ins = DB::table('datainput')->insertGetId($form_data);

        //define data opl
        $opl = $request->opl;
        $harga = $request->harga;
        $jasaqty = $request->jasaqty;

        //define data material
        $material = $request->material;
        $harga2 = $request->harga2;
        $materialqty = $request->materialqty;

        //define data part
        $part = $request->part;
        $harga3 = $request->harga3;
        $partqty = $request->partqty;

        if($opl){
            for ($i = 0; $i < count($opl); $i++) {
                $form_data2 = array(
                    'datainput_id' => $ins,
                    'nomorplat' => $request->nomorplat,
                    'segmen' => 'jasa',
                    'opl' => $opl[$i],
                    'qty' => $jasaqty[$i],
                    'harga' => $harga[$i],
                    'total' => $jasaqty[$i] * $harga[$i],
                    'created_by' => 999,
                );

                $bulkinsert2[] = $form_data2;
            }
            DB::table('datainputdetail')->insert($bulkinsert2);
        }
        if($material){
            for ($ii = 0; $ii < count($material); $ii++) {
                $form_data3 = array(
                    'datainput_id' => $ins,
                    'nomorplat' => $request->nomorplat,
                    'segmen' => 'material',
                    'material' => $material[$ii],
                    'qty' => $materialqty[$ii],
                    'harga' => $harga2[$ii],
                    'total' => $materialqty[$ii] * $harga2[$ii],
                    'created_by' => 999,
                );

                $bulkinsert3[] = $form_data3;
            }
            DB::table('datainputdetail')->insert($bulkinsert3);
        }
        if($part){
            for ($iii = 0; $iii < count($part); $iii++) {
                $form_data4 = array(
                    'datainput_id' => $ins,
                    'nomorplat' => $request->nomorplat,
                    'segmen' => 'part',
                    'part' => $part[$iii],
                    'qty' => $partqty[$iii],
                    'harga' => $harga3[$iii],
                    'total' => $partqty[$iii] * $harga2[$iii],
                    'created_by' => 999,
                );

                $bulkinsert4[] = $form_data4;
            }
            DB::table('datainputdetail')->insert($bulkinsert4);
        }

        return response()->json(['success' => 'Data berhasil disimpan']);
    }
    public function konfirmasi($nomorplat)
    {
        $datainput = DB::table('datainput')->where('nomorplat',$nomorplat)->where('deleted_by',0)->first();
        $datainputdetail = DB::table('datainputdetail')
            ->where('datainput_id',$datainput->id)
            ->where('deleted_by',0)
            ->select(DB::raw('SUM(IF(segmen="jasa",total,0)) AS totaljasa'),DB::raw('SUM(IF(segmen="material",total,0) + IF(segmen="part",total,0)) AS totalmatpart'),DB::raw('SUM(total) AS total'))
            ->first();
        // $opl = DB::table('opl')->leftjoin('kendaraan','kendaraan.id','opl.IDKendaraan')->where('nama',$kendaraan)->where('km',$kilometer)->get();
        return view('reservasi6', ['datainput' => $datainput, 'datainputdetail' => $datainputdetail,]);
    }
}
