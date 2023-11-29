<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;

class IndexController extends Controller
{
    public function gejala(){
        return view('gejala');
    }
    public function penyebab(){
        return view('penyebab');
    }
    public function langkah(){
        return view('langkah');
    }
    public function diagnostik(){
        return view('diagnostik');
    }
    public function store(Request $request){
        $diagnostik = $request->except('_token');
        $request->validate([
            'nama' => 'required|string',
            'umur' => 'required|string',
            'kelamin' => 'required|string',
            'diagnostik1',
            'diagnostik2',
            'diagnostik3',
            'diagnostik4',
            'diagnostik5',
            'diagnostik6',
            'diagnostik7',
            'diagnostik8',
            'diagnostik9',
            'diagnostik10',
        ]);

        $data = Data::create($diagnostik);

        $cfdiagnostikakut = '';
        $cfdiagnostikkronis = '';

        $diagnostik1 = 0;
        $diagnostik2 = 0;
        $diagnostik3 = 0;
        $diagnostik4 = 0;
        $diagnostik5 = 0;
        $diagnostik6 = 0;
        $diagnostik7 = 0;
        $diagnostik8 = 0;
        $diagnostik9 = 0;
        $diagnostik10 = 0;


        if ($data->diagnostik1 == 1) {
            $diagnostik1 = 0.7;
        } else {
            $diagnostik1 = 0;
        }
        
        if ($data->diagnostik2 == 1) {
            $diagnostik2 = 0.8;
        } else {
            $diagnostik2 = 0;
        }
        
        if ($data->diagnostik3 == 1) {
            $diagnostik3 = 0.3;
        } else {
            $diagnostik3 = 0;
        }
        
        if ($data->diagnostik4 == 1) {
            $diagnostik4 = 0.8;
        } else {
            $diagnostik4 = 0;
        }
        
        if ($data->diagnostik5 == 1) {
            $diagnostik5 = 0.6;
        } else {
            $diagnostik5 = 0;
        }
        
        $cfdiagnostikakut = $diagnostik1 + $diagnostik2 + $diagnostik3 + $diagnostik4 + $diagnostik5;
        

        if ($data->diagnostik6 == 1) {
            $diagnostik6 = 0.7;
        } else {
            $diagnostik6 = 0;
        }
        
        if ($data->diagnostik7 == 1) {
            $diagnostik7 = 0.8;
        } else {
            $diagnostik7 = 0;
        }
        
        if ($data->diagnostik8 == 1) {
            $diagnostik8 = 0.3;
        } else {
            $diagnostik8 = 0;
        }
        
        if ($data->diagnostik9 == 1) {
            $diagnostik9 = 0.8;
        } else {
            $diagnostik9 = 0;
        }
        
        if ($data->diagnostik10 == 1) {
            $diagnostik10 = 0.5;
        } else {
            $diagnostik10 = 0;
        }
        
        $cfdiagnostikkronis = $diagnostik6 + $diagnostik7 + $diagnostik8 + $diagnostik9 + $diagnostik10;


        $hasilDiagnosis = '';
        if ($data->diagnostik1 || $data->diagnostik2 || $data->diagnostik3 || $data->diagnostik5 || $data->diagnostik10 == 1) {
            $hasilDiagnosis .= 'GERD Akut/Ringan';
        }
        else if ($data->diagnostik4 || $data->diagnostik6 || $data->diagnostik7 || $data->diagnostik9 == 1) {
            $hasilDiagnosis .= 'GERD Kronis';
        }
        $data->update([
            'hasil_diagnosis' => $hasilDiagnosis,
            'GERD_akut' => $cfdiagnostikakut,
            'GERD_kronis' => $cfdiagnostikkronis,
        ]);
    
        return view('hasil', compact('data'))->with('success', 'Data berhasil disimpan.');
    }
    public function hasil(){
        return view('hasil');
    }
}
