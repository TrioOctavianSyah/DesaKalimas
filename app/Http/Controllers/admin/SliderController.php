<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
// use App\Http\Requests\SliderFormRequest;
use App\Models\Admin;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SliderController extends Controller
{
    public function index(Request $request){
         if(!$request->session()->has('admin')){
            return redirect('/login')->with('expired','Session Telah Berakhir');
        }else{
            $user = $request->session()->get('admin.data');
            $profiledata = Admin::where('username','=', $user["username"])->first();
            $slider = Slider::get();
            return view('admin.slider.index', compact('slider','profiledata'));
        }
    }

    public function create(Request $request){
       if(!$request->session()->has('admin')){
            return redirect('/login')->with('expired','Session Telah Berakhir');
        }else{
            $user = $request->session()->get('admin.data');
            $profiledata = Admin::where('username','=', $user["username"])->first();
            return view('admin.slider.create', compact('profiledata'));
        }
    }

    public function store(Request $request){
        $messages = [
            'required' => 'Kolom :attribute Wajib Diisi!',
            'unique' => 'Kolom :attribute Tidak Boleh Sama!',
            'numeric' => 'Kolom :attribute wajib diisi!',
		];

        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:tb_slider',
            'description' => 'required',
            'poto_slider'=>'required',
            'status'=>'required',
        ],$messages);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $images = null;
        $slider = new Slider();
        if($request->file('poto_slider')){
            //simpan file
            $file = $request->file('poto_slider');
            $images = time()."_".$file->getClientOriginalName();
            $slider->image_slider = $images;

            $foto_upload = 'img';
            $file->move($foto_upload,$images);
        }
        $slider->title = $request->title;
        $slider->description = $request->description;
        $slider->status = $request->status;
        $slider->save();
        return redirect('admin/slider')->with('success', 'Data Slider Berhasil Ditambahkan');

    }
    public function show ($id){
        //
    }

     public function edit($id, Request $request)
    {
        if(!$request->session()->has('admin')){
            return redirect('/login')->with('expired','Session Telah Berakhir');
        }else{
            $user = $request->session()->get('admin.data');
            $profiledata = Admin::where('username','=', $user["username"])->first();
            $slider = Slider::find($id);
            return view('admin.slider.edit', compact('slider','profiledata'));
        }
    }

    public function update(Request $request, $id){
        $messages = [
            'required' => 'Kolom :attribute Wajib Diisi!',
            'unique' => 'Kolom :attribute Tidak Boleh Sama!',
            'numeric' => 'Kolom :attribute wajib diisi!',
		];

        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:tb_slider',
            'description' => 'required',
            'poto_slider'=>'required',
            'status'=>'required',
        ],$messages);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $images = null;
        $slider = new Slider();
        if($request->file('poto_slider')){
            //simpan file
            $file = $request->file('poto_slider');
            $images = time()."_".$file->getClientOriginalName();
            $slider->image_slider = $images;

            $foto_upload = 'img';
            $file->move($foto_upload,$images);
        }else{
            $slide->image_slider = $slider->image_slider;
        }
        $slider->title = $request->title;
        $slider->description = $request->description;
        $slider->status = $request->status;
        $slider->update();
        return redirect('admin/slider')->with('success', 'Data Slider Berhasil Diupdate');
    }

    public function destroy($id){
        $slider = Slider::where('id',$id)->first();
        $slider->delete();
        return redirect()->back()->with('success','Berhasil Menghapus Data Slider');
    }

}


    // $validatedData = $request->validatedd();
    // if($request->hashFile('image')){
    //     $file = $request->file('image');
    //     $ext =$file->getClientOriginalExtension();
    //     $filename =time().'.'.$ext;
    //     $file->move('uploads/slider',$filename);
    //     $validatedData['image'] ="uploads/slider $filename";
    // }
    // $validatedData['status'] = $request->status == true ? '1':'0';

    // Slider::create([
    //     'title'=>$validatedData['title'],
    //     'description'=>$validatedData['description'],
    //     'image'=>$validatedData['image'],
    //     'status'=>$validatedData['status'],
    // ]);

    // return redirect ('admin/slider')->with('message','Slider Berhasil Ditambahkan');
    // }

