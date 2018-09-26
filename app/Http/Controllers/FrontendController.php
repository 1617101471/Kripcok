<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Artikel;
use App\Produk;
use App\Galeri;
use App\Testimoni;
use App\Kontak;

class FrontendController extends Controller
{
	public function beranda(){
		$produks = Produk::all();
		$artikels = Artikel::all();
		$galeris = Galeri::all();
		$users = User::all();
        $testimonis = Testimoni::all();
		return view('index', compact('testimonis','produks','artikels','galeris','users'));
	}
    public function produk(){
    	$produks = Produk::all();
    	return view('frontend.produk', compact('produks'));
    }

    public function galeri(){
    	$galeris = Galeri::all();
    	return view('frontend.galeri', compact('galeris'));
    }

    public function artikel(){
        $artikels = Artikel::all();
        return view('frontend.artikel', compact('artikels'));
    }

    public function testimoni(){
        $testimonis = Testimoni::all();
        return view('frontend.testimoni', compact('testimonis'));
    }

}
