<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Aspirasi;
use App\Models\Input_Aspirasi;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class AspirasiController extends Controller
{
    public function index()
    {
        $aspirasi = Aspirasi::latest()->get();
        $noUrut = $aspirasi->max('id_aspirasi');
        $kategori = Kategori::all();
        $id = $noUrut + 1;
        return View('aspirasi', [
            'title' => 'Pengaduan',
            'aspirasi' => Aspirasi::latest()->fillter(request(['search']))->get(),
            'no' => $id,
            'kategori' => $kategori,
            
        ]);
    }
    public function store(Request $request)
    {
        $validate = $request->validate([
            'id_pelaporan' => 'required',
            'nis' => 'required',
            'lokasi' => 'required',
            'id_kategori' => 'required',
            'ket' => 'required',
            'bukti' => 'required|image|file|max:1024'
        ]);
        
        $data = Siswa::all()->where('nis',$request->nis)->count();
        if ($data > 0) {
            if ($request->file('bukti')) {
                $validate['bukti'] =  $request->file('bukti')->store('bukti-pengaduan');
            }
            Input_Aspirasi::create($validate);
            Aspirasi::create([
                'id' => $request->id_pelaporan,
                'id_aspirasi' => $request->id_pelaporan,
                'id_kategori' => $request->id_kategori,
            ]);
            return Redirect("/?id=$request->id_pelaporan");
            } else{
                return Redirect("/?nis=$request->nis");
            }

    }
    public function feedback(Request $request)
    {
        Aspirasi::where('id_aspirasi',  $request->id_aspirasi)
        ->update(['feedback' => $request->feedback]);
        return redirect("/?search=$request->id_aspirasi#pencarian");
    }
}