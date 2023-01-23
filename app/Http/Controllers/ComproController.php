<?php

namespace App\Http\Controllers;

use App\Models\ComproBlog;
use App\Models\ComproCabang;
use App\Models\ComproGabung;
use App\Models\ComproKontak;
use App\Models\ComproKontakForm;
use App\Models\ComproLegal;
use App\Models\ComproPartner;
use App\Models\ComproPelanggan;
use App\Models\ComproProduk;
use App\Models\ComproSlide;
use App\Models\ComproTentang;
use App\Models\ComproTestimoni;
use App\Models\ComproTim;
use App\Models\LokerData;
use Illuminate\Http\Request;

class ComproController extends Controller
{
  public function index()
  {
    $sejarah = ComproTentang::where('grup', 'abata')->where('nama', 'sejarah')->first();
    $gabung = ComproGabung::where('grup', 'abata')->get();
    $cabang = ComproCabang::where('grup', 'abata')->get();
    $produk = ComproProduk::where('grup', 'abata')->get();
    $testimoni = ComproTestimoni::where('grup', 'abata')->get();
    $tim = ComproTim::where('grup', 'abata')->get();
    $partner = ComproPartner::where('grup', 'abata')->get();
    $pelanggan = ComproPelanggan::where('grup', 'abata')->get();
    $kontak = ComproKontak::where('grup', 'abata')->get();
    $blog_thumbnail = ComproBlog::where('grup', 'abata')->orderBy('id', 'desc')->first();
    $blog_list = ComproBlog::where('grup', 'abata')->orderBy('id', 'desc')->limit(7)->get();
    $slide = ComproSlide::where('grup', 'abata')->get();
    $tentang_gambar = ComproTentang::where('grup', 'abata')->where('nama', 'gambar')->first();

    return view('welcome', [
      'sejarah' => $sejarah,
      'gabungs' => $gabung,
      'cabangs' => $cabang,
      'produks' => $produk,
      'testimonis' => $testimoni,
      'tims' => $tim,
      'partners' => $partner,
      'pelanggans' => $pelanggan,
      'kontaks' => $kontak,
      'blog_thumbnail' => $blog_thumbnail,
      'blog_list' => $blog_list,
      'slide' => $slide,
      'tentang_gambar' => $tentang_gambar
    ]);
  }

  public function tentang()
  {
    $sejarah = ComproTentang::where('grup', 'abata')->where('nama', 'sejarah')->first();
    $visi = ComproTentang::where('grup', 'abata')->where('nama', 'visi')->get();
    $misi = ComproTentang::where('grup', 'abata')->where('nama', 'misi')->get();

    return view('tentang', [
      'sejarah' => $sejarah,
      'visi' => $visi,
      'misi' => $misi
    ]);
  }

  public function privacy()
  {
    $privacy = ComproLegal::where('grup', 'abata')->where('nama', 'privacy')->orderBy('id', 'desc')->first();

    return view('privacy', ['privacy' => $privacy]);
  }

  public function term()
  {
    $term = ComproLegal::where('grup', 'abata')->where('nama', 'term')->orderBy('id', 'desc')->first();

    return view('term', ['term' => $term]);
  }

  public function kontakStore(Request $request)
  {
    $kontak = new ComproKontakForm;
    $kontak->grup = "abata";
    $kontak->nama = $request->nama;
    $kontak->email = $request->email;
    $kontak->subjek = $request->subjek;
    $kontak->pesan = $request->pesan;
    $kontak->save();

    return response()->json([
      'status' => 200
    ]);
  }

  public function blog()
  {
    $blog = ComproBlog::where('grup', 'abata')->orderBy('id', 'desc')->simplePaginate(6);

    return view('blog', ['blogs' => $blog]);
  }

  public function blogDetail($id)
  {
    $blog = ComproBlog::find($id);

    return view('blogDetail', ['blog' => $blog]);
  }

  public function karir()
  {
    $loker = LokerData::where('publish', 'y')->get();

    return view('karir', ['lokers' => $loker]);
  }
}
