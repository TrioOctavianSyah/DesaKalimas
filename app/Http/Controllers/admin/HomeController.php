<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Desa;
use App\Models\Sekolah;
use App\Models\TempatIbadah;
use App\Models\TempatWisata;
use App\Models\Pasar;
class HomeController extends Controller
{
    public function home(Request $request){
        if(!$request->session()->has('admin')){
            return redirect('/login')->with('expired','Session Telah Berakhir');
        }else{
            $user = $request->session()->get('admin.data');
            $profiledata = Admin::where('username','=', $user["username"])->first();
            $desa = Desa::get();
            $sekolah = Sekolah::get();
            $pasar = Pasar::get();
            $tempatwisata = TempatWisata::get();
            $tempatibadah = TempatIbadah::get();
            return view('admin.homeadmin', compact('desa','sekolah','pasar','tempatwisata','tempatibadah','profiledata'));
        }
    }

    public function loadDataDesa($id){
        $desa = Desa::find($id);
        $jumlah_sekolah = Sekolah::where('id_desa', $id)->count();
        $jumlah_pasar = Pasar::where('id_desa', $id)->count();
        $jumlah_ibadah = TempatIbadah::where('id_desa', $id)->count();
        $jumlah_wisata = TempatWisata::where('id_desa', $id)->count();
        return response()->json(['success' => 'Berhasil', 'desa' => $desa, 'jumlah_pasar' => $jumlah_pasar , 'jumlah_sekolah' => $jumlah_sekolah, 'jumlah_ibadah' => $jumlah_ibadah, 'jumlah_wisata' => $jumlah_wisata]);
    }
}
