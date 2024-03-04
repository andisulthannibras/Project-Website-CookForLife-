<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use App\Models\Resep;
// use App\Models\Resep_2;
// use App\Models\Resep_3;
// use App\Models\Resep_4;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ResepController extends Controller
{
    public function index()
    {
        // $resep = Resep::all();
        // $resep_2 = Resep_2::all();
        // $resep_3 = Resep_3::all();
        // $resep_4 = Resep_4::all();        


        // $data = [
        //     'resep' => $resep,
            //     'resep_2' => $resep_2,
        //     'resep_3' => $resep_3,
        //     'resep_4' => $resep_4,
        // ];
        // return view('resep.all', $data);        
        
        // $detail = Detail::find();
        // Ambil data detail yang sesuai dari tabel lain
        // return view('resep.all', ['data' => $resep]);
        // $detail = Resep::all();
        // $detailView = view('detail resep.all', ['data' => $resep]);
        // return view('resep.all', ['data' => $resep, 'detail resep' => $detailView]);

        // return view('resep.all', ['data' => $resep, 'detail resep' => view('detail resep.all', ['data' => $resep])]);
        // return view('resep.all',['data' => $resep]);        
        // ->with('detail resep', view('detail resep.all', ['data' => $resep]));
        $resep = Resep::all();
        return view('resep.all', ['resep' => $resep]);
        // $details = Detail::all(); // Mengambil semua data detail (disarankan menggunakan model yang sesuai)
        // return view('resep.all', ['data' => $resep, 'details' => $details]);    
    }

    public function show($id)
    {
        // $resep = Resep::find($id); // Mengambil resep berdasarkan ID        
        // return view('detail resep.all', ['data' => $resep]);
        $resep = Resep::find($id); // Mengambil resep berdasarkan ID
        
        // Periksa apakah resep ditemukan
        if (!$resep) {
            // Tampilkan pesan atau alihkan ke halaman lain jika resep tidak ditemukan
            return redirect()->route('resep.all')->with('error', 'Resep tidak ditemukan.');
        }
        
        return view('detail resep.all', ['resep' => $resep]);
    }
}