<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Validator;

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
    public function tradein()
    {
        return view('tradein');
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
    public function merk()
    {
        $merk = DB::table('tradeincar')->select('merk')->where('deleted',0)->groupby('merk')->get();
        return view('merk',['merk' => $merk]);
    }

    public function model($id)
    {
        $model = DB::table('tradeincar')->select('merk','model')->where('merk',$id)->where('deleted',0)->groupby('merk','model')->get();
        return view('tradeinmodel2',['model' => $model]);
    }
    public function year($id,$id2)
    {
        $year = DB::table('tradeincar')->select('merk','model','tahun')->where('deleted',0)->where('merk',$id)->where('model',$id2)->groupby('merk','model','tahun')->get();
        $yearone = DB::table('tradeincar')->select('merk','model','tahun')->where('deleted',0)->where('merk',$id)->where('model',$id2)->groupby('merk','model','tahun')->first();
        return view('tradeinyear',['year' => $year,'yearone' => $yearone]);
    }
    public function variants($id,$id2,$id3)
    {
        $variants = DB::table('tradeincar')->select('merk','model','tahun','type')->where('deleted',0)->where('merk',$id)->where('model',$id2)->where('tahun',$id3)->groupby('merk','model','tahun','type')->get();
        $variantsone = DB::table('tradeincar')->select('merk','model','tahun','type')->where('deleted',0)->where('merk',$id)->where('model',$id2)->where('tahun',$id3)->groupby('merk','model','tahun','type')->first();
        return view('tradeinvariants',['variants' => $variants,'variantsone' => $variantsone]);
    }
    public function transmisi($id,$id2,$id3,$id4)
    {
        $transmisi = DB::table('tradeincar')->select('merk','model','tahun','type','transmisi')->where('deleted',0)->where('merk',$id)->where('model',$id2)->where('tahun',$id3)->where('type',$id4)->groupby('merk','model','tahun','type','transmisi')->get();
        $transmisione = DB::table('tradeincar')->select('merk','model','tahun','type','transmisi')->where('deleted',0)->where('merk',$id)->where('model',$id2)->where('tahun',$id3)->where('type',$id4)->groupby('merk','model','tahun','type','transmisi')->first();
        return view('tradeintransmisi',['transmisi' => $transmisi,'transmisione' => $transmisione]);
    }
    public function detail($id,$id2,$id3,$id4)
    {
        $transmisi = DB::table('tradeincar')->select('model','tahun','type','transmisi')->where('deleted',0)->where('model',$id2)->where('tahun',$id3)->where('type',$id4)->groupby('model','tahun','type','transmisi')->get();
        $transmisione = DB::table('tradeincar')->select('model','tahun','type','transmisi')->where('deleted',0)->where('model',$id2)->where('tahun',$id3)->where('type',$id4)->groupby('model','tahun','type','transmisi')->first();
        return view('tradeintransmisi',['transmisi' => $transmisi,'transmisione' => $transmisione]);
    }
    public function tradeinfinal($id)
    {
        $price = DB::table('tradeincar')->where('deleted',0)->where('ID',$id)->first();
        $insert = DB::table('tradeindata')->where('deleted',0)->where('IDUser',999)->orderBy('ID','desc')->first();
        return view('tradeinfinal',['price' => $price,'tradeinput' => $insert]);
    }
    public function store(Request $request)
    {
        $messages = [
            'required' => ':attribute wajib diinput',
            'min' => ':attribute harus diisi minimal :min karakter',
            'max' => ':attribute harus diisi maksimal :max karakter',
            'numeric' => ':attribute harus diisi angka',
        ];
        $rules = array(
            'merk'        =>  'required',
            'model'        =>  'required',
            'year'     =>  'required',
            'variant'             =>  'required',
            'transmition'             =>  'required',
        );

        $error = Validator::make($request->all(), $rules,$messages);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $data_user = Auth::user();

        $form_data = array(
            'IDUser'                =>  999,
            'merk'        =>  $request->merk,
            'model'        =>  $request->model,
            'year'     =>  $request->year,
            'varian'              =>  $request->variant,
            'transmisi'              =>  $request->transmition,
            'IDUserFollowUp'                =>  0,
            'deleted'               =>  0,
        );

        DB::table('tradeindata')->insert($form_data);

        $harga = DB::table('tradeincar')->where('merk',$request->merk)->where('model',$request->model)->where('tahun',$request->year)->where('type',$request->variant)->where('transmisi',$request->transmition)->first();

        return response()->json(['success' => $harga->ID]);
    }
}
