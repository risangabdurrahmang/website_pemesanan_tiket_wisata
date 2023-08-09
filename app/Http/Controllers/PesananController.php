<?php

namespace App\Http\Controllers;

use App\Models\Tiket;
use Illuminate\Http\Request;

class PesananController extends Controller
{   // fungsi untuk menampilkan halaman daftar pesanan
    public function index()
    {   // mengambil data dari database
        $pesanan = Tiket::all();
        // mengatur tampilan
        return view('pesan.index', compact('pesanan'));
    }

    // fungsi untuk menampilkan halaman form pemesanan
    public function create()
    {
        return view('pesan.create');
    }

    // fungsi untuk validasi fom pemesanan
    public function store(Request $request)
    {
        //validasi form
        $this->validate($request, [
            'nama' => 'required',
            'nomer_identitas' => 'required|min:16|max:16',
            'no_hp' => 'required|min:11|max:13',
            'tempat_wisata' => 'required',
            'tanggal_kunjungan' => 'required',
            'pengunjung_dewasa' => 'required',
            'pengunjung_anakanak' => 'required',
            'harga_tiket' => 'required',
            'total_bayar' => 'required'
        ]);

        //membuat form pemesanan
        Tiket::create([
            'nama'                  => $request->nama,
            'nomer_identitas'       => $request->nomer_identitas,
            'no_hp'                 => $request->no_hp,
            'tempat_wisata'         => $request->tempat_wisata,
            'tanggal_kunjungan'     => $request->tanggal_kunjungan,
            'pengunjung_dewasa'     => $request->pengunjung_dewasa,
            'pengunjung_anakanak'   => $request->pengunjung_anakanak,
            'harga_tiket'           => $request->harga_tiket,
            'total_bayar'           => $request->total_bayar
        ]);

        //menampilkan halaman daftar pesanan setelah mengisi form pesanan
        return redirect()->route('pesanan.index');
    }
}
