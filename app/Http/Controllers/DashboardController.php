<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Gambar;
use App\Models\Rating;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class DashboardController extends Controller
{
    public function index()
    {
        $barangs = Barang::with('kategori', 'gambar')->get();
        return view('Dashboard.index', compact('barangs'));
    }
    public function formUtama()
    {
        return view('Dashboard.form');
    }
    public function formUtamaStore(Request $request)
    {
          $request->validate([
             'kode' => 'required|unique:master_barangs,kode_barang',
             'kategori' => 'required',
             'nama' => 'required|max:100',
             'deskripsi' => 'required|max:255',
             'satuan' => 'required',
             'diskon' => 'required',
          ]);

          DB::beginTransaction();

          try {
            Kategori::create([
                'nama_kategori' => $request->kategori,
                'url_gambar' => null,
            ]);
            $kodeKategori = Kategori::latest()->value('kode_kategori');
                 Barang::create([
                'kode_barang' => $request->kode,
                'nama_barang' => $request->nama,
                'kode_kategori' => $kodeKategori,
                'keterangan_detail' => $request->deskripsi,
                'satuan' => $request->satuan,
                'diskon' => $request->diskon,
            ]);
            DB::commit();
            $kode_barang = $request->kode;
            return redirect()->route('form.dua', ['kode_barang' => $kode_barang, 'kode_kategori' => $kodeKategori]);
          } catch(\Exception $e) {
            DB::rollBack();
            return redirect()->route('form.utama')->with('eror', 'Gagal menyimpan Produk '  . $e->getMessage());
          }
    }
    public function formDua(Request $request)
    {
        $kode_barang = $request->query('kode_barang');
        $kodeKategori = $request->query('kode_kategori');
        return view('Dashboard.form2', compact('kode_barang', 'kodeKategori'));
    }
    public function formDuaStore(Request $request)
    {

        $request->validate([
            'gambar' => 'required|min:6|max:355',
            'varian' => 'required',
            'harga' => 'required',
            'stok' => 'required',
        ], [
            'gambar.min' => 'Wajib Memasukkan 6 Gambar'
        ]);
        DB::beginTransaction();
        try {
        $tbImage = new Gambar();
        $tbImage->kode_barang = $request->kode;
        if($request->hasFile('gambar')){
            foreach ($request->file('gambar') as $gambar){
                $imagePath = $gambar->store('img', 'public');
               $semuaGambar[] = $imagePath;
            }
        }
        $gambarString = implode(',', $semuaGambar);
        $tbImage->url_gambar = $gambarString;
        $tbImage->varian = $request->varian;
        $tbImage->harga = $request->harga;
        $tbImage->stok = $request->stok;
        $tbImage->save();
        $updateNullUrlTBKategori = Kategori::findOrFail($request->kodeKategori);
        $updateNullUrlTBKategori->update(['url_gambar' => $gambarString,]);
        $kode_barang = $request->kode;
        DB::commit();
        return redirect()->route('form.tiga', ['kode_barang' => $kode_barang]);
        } catch(\Exception $e) {
        DB::rollBack();
        return redirect()->route('form.dua')->with('gagal', 'Gagal Menambahkan Data ' . $e->getMessage());
        }

    }
    public function formTiga(Request $request)
    {
        $kode_barang = $request->query('kode_barang');
        return view('Dashboard.form3', compact('kode_barang'));
    }
    public function formTigaStore(Request $request)
    {
        $request->validate([
              'nilai' => 'required',
        ]);
        try{
            Rating::create([
                'kode_barang' => $request->kode,
                'nilai' => $request->nilai,
            ]);
            DB::commit();
            return redirect()->route('dashboard')->with('sukses', 'Sukses Menambahkan Produk Baru');
        } catch (\Exception $e){
            DB::rollBack();
            return redirect()->route('form.tiga')->with('gagal', 'Gagal Menambahkan Data ' . $e->getMessage());
        }
    }


    public function lihatDetail($kode)
    {
       $dataBarang = Barang::findOrFail($kode);
       $dataGambar = explode(',',  $dataBarang->gambar->url_gambar);
       return view('Dashboard.detail', compact('dataBarang', 'dataGambar'));
    }
    public function updateGambar($kode)
    {
        $dataGambar = Gambar::where('kode_barang', $kode)->first();
        return view('Dashboard.formUpGambar', compact('dataGambar'));
    }
    public function storeUpdateGambar(Request $request, $kode)
    {
        $dataGambar = Gambar::where('kode_barang', $kode)->first();
        $hapusGambar = explode(',', $dataGambar->url_gambar);
        foreach($hapusGambar as $gambarH){
           Storage::disk('public')->delete($gambarH);
        }
        $request->validate([
             'gambar' => 'required|min:6'
        ]);
       if($request->hasFile('gambar')){
        foreach($request->file('gambar') as $gambar){
              $imagePath = $gambar->store('img', 'public');
              $semuaGambar[] = $imagePath;
        }
        $gambarString = implode(',', $semuaGambar);
        $dataGambar->update([
           'url_gambar' => $gambarString,
        ]);
        return redirect()->route('dashboard')->with('sukses', 'Sukses Update Gambar Barang');
       }
    }
    public function updateRating($kode)
    {
        $dataRating = Rating::where('kode_barang', $kode)->first();
        return view('Dashboard.formUpRating', compact('dataRating'));
    }
    public function storeUpdateRating(Request $request, $kode)
    {
        $dataRating = Rating::where('kode_barang', $kode)->first();
        $dataRating->update([
            'nilai' => $request->nilai,
        ]);
        return redirect()->route('dashboard')->with('sukses', 'Sukses Update Rating Barang');
    }
    public function hapusBarang($kode)
    {
        $barang = Barang::find($kode);
        $barang->delete();
        return redirect()->route('dashboard')->with('sukses', 'Sukses Hapus Barang');
    }




}
