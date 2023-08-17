<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function catalog()
    {
        $ourproduct = DB::table('catalog')->where('segmen',1)->where('deleted',0)->get();
        $serviceberkala = DB::table('catalog')->where('segmen',2)->where('deleted',0)->get();
        $pekerjaanlain = DB::table('catalog')->where('segmen',3)->where('deleted',0)->get();
        $bp = DB::table('catalog')->where('segmen',4)->where('deleted',0)->get();
        $tco = DB::table('catalog')->where('segmen',5)->where('deleted',0)->get();
        return view('catalog',['ourproduct' => $ourproduct,'bp' => $bp,'tco' => $tco, 'serviceberkala' => $serviceberkala, 'pekerjaanlain' => $pekerjaanlain]);
    }
    public function showcatalog($segmen,$iddata)
    {
        $data = DB::table('catalog')->where('segmen',$segmen)->where('id',$iddata)->where('deleted',0)->first();
        if($data == null)
        {
            return response()->json(['error' => 'Data tidak ditemukan.'], 400);
        }
        else
        {
            return response()->json($data);
        }
    }
}
