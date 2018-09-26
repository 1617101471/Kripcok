<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeri;
use App\User;
use App\Artikel;
use File;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikels = Artikel::with('galeri','user')->get();
        return view('artikel.index', compact('artikels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $galeris = Galeri::all();
        return view('artikel.create', compact('users', 'galeris'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'id_user' => 'required|max:255',
            'id_galeri' => 'required|max:255',
            'judul'=>'required|max:255',
            'content'=>'required|max:2000'
        ]);

        $artikels = new Artikel;
        $artikels->id_user = $request->id_user;
        $artikels->judul = $request->judul;
        $artikels->content = $request->content;
        $artikels->id_galeri = $request->id_galeri;

        if ($request->hasFile('gambar')){
            $file = $request->file('gambar');
            $destinationPatch = public_path().'/assets/img/gambar/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSucces = $file->move($destinationPatch, $filename);
            $artikels->gambar = $filename;
        }
        $artikels->save();
        return redirect()->route('artikel.index');
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
        $artikels = Artikel::findOrFail($id);
        $galeris = Galeri::all();
        $users = User::all();
        $selectusers = Artikel::findOrFail($id)->id_user;
        $selectgaleris = Artikel::findOrFail($id)->id_galeri;
        return view('artikel.edit', compact('artikels','galeris','users','selectgaleris','selectusers'));
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
        $this->validate($request, [
            'judul' => 'required|max:255',
            'id_user' => 'required',
            'id_galeri' => '',
            'content' => 'required|max:255'
        ]);

        $artikels = Artikel::findOrFail($id);
        $artikels->id_user = $request->id_user;
        $artikels->id_galeri = $request->id_galeri;
        $artikels->judul = $request->judul;
        $artikels->content = $request->content;

        if ($request->hasFile('gambar')){
            $file = $request->file('gambar');
            $destinationPatch = public_path().'/assets/img/gambar/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSucces = $file->move($destinationPatch, $filename);

        if ($artikels->gambar) { 
        $old_gambar = $artikels->gambar;
        $filepath = public_path() . DIRECTORY_SEPARATOR . '/assets/img/gambar/'
        . DIRECTORY_SEPARATOR . $artikels->gambar;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
        // File sudah dihapus/tidak ada
            }    
        }
        $artikels->id_galeri = $filename;
    }
        $artikels->save();
        return redirect()->route('artikel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikels = Artikel::findOrFail($id);
            if ($artikels->gambar) {
                $old_foto = $artikels->gambar;
                $filepath = public_path(). DIRECTORY_SEPARATOR . 'assets/img/gambar/' . DIRECTORY_SEPARATOR . $artikels->gambar;
                try{
                    File::delete($filepath);
                } catch (FileNotFoundException $e){
                    // file sudah dihapus
                }
            }
        $artikels->delete();
        return redirect()->route('artikel.index');
    }
}
