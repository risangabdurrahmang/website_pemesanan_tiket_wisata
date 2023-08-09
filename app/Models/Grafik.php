<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Grafik extends Model
{
    // use HasFactory;

    // fungsi hitung jumlah pengunjung anak hutan pinus limpakuwus
    public function jumlahAnakHutanPinus()
    {
        $hitungJumlahAnakHPL = DB::table('tikets')
            ->where('tempat_wisata', 'Hutan Pinus Limpakuwus')
            ->sum('pengunjung_anakanak');
        return $hitungJumlahAnakHPL;
    }

    // fungsi hitung jumlah pengunjung dewasa hutan pinus limpakuwus
    public function jumlahDewasaHutanPinus()
    {
        $hitungJumlahDewasaHPL = DB::table('tikets')
            ->where('tempat_wisata', 'Hutan Pinus Limpakuwus')
            ->sum('pengunjung_dewasa');
        return $hitungJumlahDewasaHPL;
    }

    // fungsi hitung jumlah pengunjung anak curug bayan
    public function jumlahAnakCurugBayan()
    {
        $hitungJumlahAnakCB = DB::table('tikets')
            ->where('tempat_wisata', 'Curug Bayan')
            ->sum('pengunjung_anakanak');
        return $hitungJumlahAnakCB;
    }

    // fungsi hitung jumlah pengunjung dewasa curug bayan
    public function jumlahDewasaCurugBayan()
    {
        $hitungJumlahDewasaCB = DB::table('tikets')
            ->where('tempat_wisata', 'Curug Bayan')
            ->sum('pengunjung_dewasa');
        return $hitungJumlahDewasaCB;
    }

    // fungsi hitung jumlah pengunjung anak telaga kumpe
    public function jumlahAnakTelagaKumpe()
    {
        $hitungJumlahAnakTK = DB::table('tikets')
            ->where('tempat_wisata', 'Telaga Kumpe')
            ->sum('pengunjung_anakanak');
        return $hitungJumlahAnakTK;
    }

    // fungsi hitung jumlah pengunjung dewasa telaga kumpe
    public function jumlahDewasaTelagaKumpe()
    {
        $hitungJumlahDewasaTK = DB::table('tikets')
            ->where('tempat_wisata', 'Telaga Kumpe')
            ->sum('pengunjung_dewasa');
        return $hitungJumlahDewasaTK;
    }

    // fungsi hitung jumlah pengunjung anak curug jenggala
    public function jumlahAnakCurugJenggala()
    {
        $hitungJumlahAnakCJ = DB::table('tikets')
            ->where('tempat_wisata', 'Curug Jenggala')
            ->sum('pengunjung_anakanak');
        return $hitungJumlahAnakCJ;
    }

    // fungsi hitung jumlah pengunjung dewasa curug jenggala
    public function jumlahDewasaCurugJenggala()
    {
        $hitungJumlahDewasaCJ = DB::table('tikets')
            ->where('tempat_wisata', 'Curug Jenggala')
            ->sum('pengunjung_dewasa');
        return $hitungJumlahDewasaCJ;
    }

    // fungsi hitung jumlah pengunjung anak bukit agaran
    public function jumlahAnakBukitAgaran()
    {
        $hitungJumlahAnakBA = DB::table('tikets')
            ->where('tempat_wisata', 'Bukit Agaran')
            ->sum('pengunjung_anakanak');
        return $hitungJumlahAnakBA;
    }

    // fungsi hitung jumlah pengunjung dewasa bukit agaran
    public function jumlahDewasaBukitAgaran()
    {
        $hitungJumlahDewasaBA = DB::table('tikets')
            ->where('tempat_wisata', 'Bukit Agaran')
            ->sum('pengunjung_dewasa');
        return $hitungJumlahDewasaBA;
    }

    // fungsi hitung jumlah pengunjung anak pagubugan melung
    public function jumlahAnakPagubuganMelung()
    {
        $hitungJumlahAnakPM = DB::table('tikets')
            ->where('tempat_wisata', 'Pagubugan Melung')
            ->sum('pengunjung_anakanak');
        return $hitungJumlahAnakPM;
    }

    // fungsi hitung jumlah pengunjung dewasa pagubugan melung
    public function jumlahDewasaPagubuganMelung()
    {
        $hitungJumlahDewasaPM = DB::table('tikets')
            ->where('tempat_wisata', 'Pagubugan Melung')
            ->sum('pengunjung_dewasa');
        return $hitungJumlahDewasaPM;
    }
}
