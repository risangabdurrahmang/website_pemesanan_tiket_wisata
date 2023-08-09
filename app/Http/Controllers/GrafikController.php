<?php

namespace App\Http\Controllers;

use App\Models\Grafik;
use Illuminate\Http\Request;

class GrafikController extends Controller
{
    public function index()
    {
        // variabel pembantu untuk memanggil fungsi dari model
        // hutan pinus limpakuwus
        $jmlAnakHPL = new Grafik();
        $jmlDewasaHPL = new Grafik();
        // curug bayan
        $jmlAnakCB = new Grafik();
        $jmlDewasaCB = new Grafik();
        // telaga kumpe
        $jmlAnakTK = new Grafik();
        $jmlDewasaTK = new Grafik();
        // curug jenggala
        $jmlAnakCJ = new Grafik();
        $jmlDewasaCJ = new Grafik();
        // bukit agaran
        $jmlAnakBA = new Grafik();
        $jmlDewasaBA = new Grafik();
        // pagubugan melung
        $jmlAnakPM = new Grafik();
        $jmlDewasaPM = new Grafik();

        // data daftar wisata
        $categories = ['Hutan Pinus Limpakuwus', 'Curug Bayan', 'Telaga Kumpe', 'Curug Jenggala', 'Bukit Agaran', 'Pagubugan Melung'];

        // data grafik
        $chart = [
            'series' => [
                [
                    'colorByPoint' => true,
                    'name' => 'jumlah',
                    'data' => [
                        ($jmlAnakHPL->jumlahAnakHutanPinus() + $jmlDewasaHPL->jumlahDewasaHutanPinus()),
                        ($jmlAnakCB->jumlahAnakCurugBayan() + $jmlDewasaCB->jumlahDewasaCurugBayan()),
                        ($jmlAnakTK->jumlahAnakTelagaKumpe() + $jmlDewasaTK->jumlahDewasaTelagaKumpe()),
                        ($jmlAnakCJ->jumlahAnakCurugJenggala() + $jmlDewasaCJ->jumlahDewasaCurugJenggala()),
                        ($jmlAnakBA->jumlahAnakBukitAgaran() + $jmlDewasaBA->jumlahDewasaBukitAgaran()),
                        ($jmlAnakPM->jumlahAnakPagubuganMelung() + $jmlDewasaPM->jumlahDewasaPagubuganMelung())
                    ]
                ]
            ]
        ];

        return view(('grafik'), compact('chart', 'categories'));
    }
}
