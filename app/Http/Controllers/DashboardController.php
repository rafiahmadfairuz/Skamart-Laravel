<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Master_Barang;
use App\Models\Master_Kategori;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class DashboardController extends Controller
{
    public function index()
    {
        return view('Dashboard.index');
    }



    public function formUtama()
    {
        return view('Dashboard.form');
    }
    public function formUtamaStore(Request $request)
    {
          $validasi = $request->validate([
             'kode' => 'required|unique:master_barangs,kode_barang',
             'kategori' => 'required',
             'nama' => 'required|max:100',
             'deskripsi' => 'required|max:255',
             'satuan' => 'required',
             'diskon' => 'required',
          ]);

          DB::beginTransaction();

          try {
            $namaKategori = Master_Kategori::create([
                'nama_kategori' => $request->kategori,
                'url_gambar' => null,
            ]);

            $createDataBarang = Master_Barang::create([
                'kode_barang' => $request->kode,
                'nama_barang' => $request->nama,
                'keterangan_detail' => $request->deskripsi,
                'satuan' => $request->satuan,
                'diskon' => $request->diskon,
            ]);
            $kode_produk = $request->kode;
            DB::commit();
            return redirect()->route('form.dua', ['kode_produk' => $kode_produk]);
          } catch(\Exception $e) {
            DB::rollBack();
            return redirect()->route('form.utama')->with('eror', 'Gagal menyimpan Produk');
          }
    }


    public function formDua()
    {
        return view('Dashboard.form2');
    }
    public function formDuaStore(Request $request)
    {
        return view('Dashboard.form2');
    }



    public function formTiga()
    {
        return view('Dashboard.form3');
    }
    public function formTigaStore(Request $request)
    {
        return view('Dashboard.form2');
    }




}
