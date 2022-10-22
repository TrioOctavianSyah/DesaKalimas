<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArtikelController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(!$request->session()->has('admin')){
            return redirect('/login')->with('expired','Session Telah Berakhir');
        }else{
            $user = $request->session()->get('admin.data');
            $profiledata = Admin::where('username','=', $user["username"])->first();
            $artikel = Artikel::get();
            return view('admin.artikel.index', compact('artikel','profiledata'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if(!$request->session()->has('admin')){
            return redirect('/login')->with('expired','Session Telah Berakhir');
        }else{
            $user = $request->session()->get('admin.data');
            $profiledata = Admin::where('username','=', $user["username"])->first();
            return view('admin.artikel.create', compact('profiledata'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => 'Kolom :attribute Wajib Diisi!',
            'unique' => 'Kolom :attribute Tidak Boleh Sama!',
            'numeric' => 'Kolom :attribute wajib diisi!',
		];

        $validator = Validator::make($request->all(), [
            'nama_artikel' => 'required|unique:tb_artikel',
            'isi_artikel' => 'required',
            'author'=>'required',
            'poto_artikel'=>'required',
        ],$messages);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $images = null;
        $artikel = new Artikel();
        if($request->file('poto_artikel')){
            //simpan file
            $file = $request->file('poto_artikel');
            $images = time()."_".$file->getClientOriginalName();
            $artikel->gambar_artikel = $images;

            $foto_upload = 'img';
            $file->move($foto_upload,$images);
        }
        $artikel->nama_artikel = $request->nama_artikel;
        $artikel->isi_artikel = $request->isi_artikel;
        $artikel->author = $request->author;
        $artikel->save();
        return redirect('admin/artikel')->with('success', 'Data Artikel Berhasil Ditambahkan');
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
    public function edit($id, Request $request)
    {
        if(!$request->session()->has('admin')){
            return redirect('/login')->with('expired','Session Telah Berakhir');
        }else{
            $user = $request->session()->get('admin.data');
            $profiledata = Admin::where('username','=', $user["username"])->first();
            $artikel = Artikel::find($id);
            return view('admin.artikel.edit', compact('artikel','profiledata'));
        }
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
        $messages = [
            'required' => 'Kolom :attribute Wajib Diisi!',
            'unique' => 'Kolom :attribute Tidak Boleh Sama!',
            'numeric' => 'Kolom :attribute wajib diisi!',
		];

        $validator = Validator::make($request->all(), [
            'nama_artikel' => 'required',
            'isi_artikel' => 'required',
            'author'=>'required',
            'poto_artikel'=>'required',
        ],$messages);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $images = null;
        $artikel = Artikel::find($id);
         if($request->file('poto_artikel')){
            //simpan file
            $file = $request->file('poto_artikel');
            $images = time()."_".$file->getClientOriginalName();
            $artikel->gambar_artikel = $images;

            $foto_upload = 'img';
            $file->move($foto_upload,$images);
        }else{
            $artikel->gambar_artikel = $artikel->gambar_artikel;
        }
        $artikel->nama_artikel = $request->nama_artikel;
        $artikel->isi_artikel = $request->isi_artikel;
        $artikel->author = $request->author;
        $artikel->update();
        return redirect('admin/artikel')->with('success', 'Data Artikel Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel = Artikel::where('id',$id)->first();
        $artikel->delete();
        return redirect()->back()->with('success','Berhasil Menghapus Data Artikel');
    }
}
