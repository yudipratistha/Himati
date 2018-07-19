<?php

namespace App\Http\Controllers;

use App\Slideshow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use File;

class SlideshowController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $slideshow = Slideshow::all();

        return view('admin.slideshow.index',compact('slideshow'));
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
        $this->validate($request,[
            'judul' => 'required|max:255'
            // 'deskripsi' => 'required',
        ]);

        $activ = new Slideshow();
        $activ -> judul_slideshow = $request->judul;
        // $activ -> desk_slideshow = $request->deskripsi;

        $image = $request->file('slideshow');
        if ($image) {
            $filename = $activ->judul_slideshow . "_" . date('m-d-Y', time()) . '.' . $image->getClientOriginalExtension();
            $activ->media_slideshow = $filename;
            $image->move(public_path('assets/images/slideshow'), $filename);

        }

        $activ->save();
       /* $nama_foto = time().'.'.$request->foto_slideshow->getClientOriginalExtension();
        $request->foto_slideshow->move(public_path('assets/images'), $nama_foto);
        $activ->media_slideshow = $nama_foto; */

        session()->flash('message', 'Sukses Memasukkan Slideshow, '.$request->nama);
        return redirect('/admin/slideshow');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slideshow  $slideshow
     * @return \Illuminate\Http\Response
     */
    public function show(Slideshow $slideshow)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slideshow  $slideshow
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slideshow = Slideshow::find($id);

        return view('admin.slideshow.update',compact('slideshow'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slideshow  $slideshow
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'nama' => 'required|max:255',
            'deskripsi' => 'required',
            'foto_slideshow' => 'image',
        ]);

        $activ = Slideshow::find($id);
        $activ -> nama_slideshow = $request->input('nama');
        $activ -> desk_slideshow = $request->input('deskripsi');

        /*if ($request->hasFile('foto_slideshow')) {
            $image = $request->file('foto_slideshow');
            $filename = $activ->nama_slideshow . "_" . date('m-d-Y', time()) . '.' . $image->getClientOriginalExtension();
            $oldFilename = $activ->media_slideshow;
            Storage::delete($oldFilename);
            $activ->media_slideshow = $filename;
            $image->move(public_path('assets/images'), $filename);

        }*/
        $image = $request->file('foto_slideshow');
        if ($image) {
            $filename = $activ->nama_slideshow . "_" . date('m-d-Y', time()) . '.' . $image->getClientOriginalExtension();
            $oldFilename = $activ->media_slideshow;
            Storage::delete($oldFilename);
            $activ->media_slideshow = $filename;
            $image->move(public_path('assets/images/slideshow'), $filename);

        }
        $activ->save();

        session()->flash('message', 'Sukses Mengupdate Slideshow, '.$request->nama);
        return redirect('/admin/slideshow');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slideshow  $slideshow
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        // $activ = Slideshow::find($id);
        // File::delete("assets/images/aw_07-17-2018.jpg");
        Storage::delete('slideshow/aaaa_07-18-2018.jpg');
        // Storage::delete(public_path('aaaa_07-18-2018.jpg'));
        // $activ->delete();
        // return redirect($activ);

        session()->flash('delete', 'Sukses Menghapus Data Slideshow');
        // Session::flash('delete', 'Sukses Menghapus Data Slideshow');
        return redirect('/admin/slideshow');
    }
}
