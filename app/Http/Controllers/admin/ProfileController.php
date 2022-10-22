<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Profile;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
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
            $profile = Profile::get();
            return view('admin.profile.index', compact('profile','profiledata'));
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
            return view('admin.profile.create', compact('profiledata'));
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
            'nama_profile' => 'required|unique:tb_profile',
            'nip_aparatur' => 'required',
            'jabatan_aparatur'=>'required',
            'gambar_aparatur'=>'required',
        ],$messages);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $images = null;
        $profile = new Profile();
        if($request->file('gambar_aparatur')){
            //simpan file
            $file = $request->file('gambar_aparatur');
            $images = time()."_".$file->getClientOriginalName();
            $profile->poto_aparatur = $images;

            $foto_upload = 'img';
            $file->move($foto_upload,$images);
        }
        $profile->nama_profile = $request->nama_profile;
        $profile->nip_aparatur = $request->nip_aparatur;
        $profile->jabatan_aparatur = $request->jabatan_aparatur;
        $profile->save();
        return redirect('admin/profile')->with('success', 'Data Profile Berhasil Ditambahkan');
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
            $profile = Profile::find($id);
            return view('admin.profile.edit', compact('profile','profiledata'));
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
            'nama_profile' => 'required',
            'nip_aparatur' => 'required',
            'jabatan_aparatur'=>'required',
            'gambar_aparatur'=>'required',
        ],$messages);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $images = null;
        $profile = Profile::find($id);
         if($request->file('gambar_aparatur')){
            //simpan file
            $file = $request->file('gambar_aparatur');
            $images = time()."_".$file->getClientOriginalName();
            $profile->poto_aparatur = $images;

            $foto_upload = 'img';
            $file->move($foto_upload,$images);
        }else{
            $profile->poto_aparatur = $profile->poto_aparatur;
        }
        $profile->nama_profile = $request->nama_profile;
        $profile->nip_aparatur = $request->nip_aparatur;
        $profile->jabatan_aparatur = $request->jabatan_aparatur;
        $profile->update();
        return redirect('admin/profile')->with('success', 'Data Profile Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profile = Profile::where('id',$id)->first();
        $profile->delete();
        return redirect()->back()->with('success','Berhasil Menghapus Data Profile');
    }
}
