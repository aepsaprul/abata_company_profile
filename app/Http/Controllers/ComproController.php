<?php

namespace App\Http\Controllers;

use App\Models\ComproCabang;
use App\Models\ComproGabung;
use App\Models\ComproKontak;
use App\Models\ComproKontakForm;
use App\Models\ComproLegal;
use App\Models\ComproPartner;
use App\Models\ComproPelanggan;
use App\Models\ComproProduk;
use App\Models\ComproTentang;
use App\Models\ComproTestimoni;
use App\Models\ComproTim;
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

    return view('welcome', [
      'sejarah' => $sejarah,
      'gabungs' => $gabung,
      'cabangs' => $cabang,
      'produks' => $produk,
      'testimonis' => $testimoni,
      'tims' => $tim,
      'partners' => $partner,
      'pelanggans' => $pelanggan,
      'kontaks' => $kontak
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
}
