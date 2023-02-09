<?php

namespace App\Http\Controllers;

use App\Http\Requests\KomplainRequest;
use App\Http\Requests\ValidasiRequest;
use App\Models\Komplain;
use App\Models\Valid;
use Illuminate\Http\Request;
use Illuminate\Support\Facedes\DB;

class KomplainController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        
        if($request->search)
        {
            $komplains = Komplain::withTrashed()->where('is_active', true)->get()->paginate(5);;
            // $komplains = Komplain::where('unit', 'LIKE', "%$request->search%")
            // ->paginate(5);
            

            return view('komplain.index', [
                'data' =>$komplains
            ]);
        }

        $komplains = Komplain::paginate(5);
        return view('komplain.index', [
            'data' =>$komplains
        ]);
        
    }

    public function create()
    {
        return view('komplain.create');
    }

    public function store(KomplainRequest $request)
    {
        $request->validate([
        'tgl_masuk' => ['required'],
        'unit' => ['required'],
        'jenis' => ['required'],
        'isi' => ['required']
       
        ]);
        Komplain::create([
        'tgl_masuk' => $request->tgl_masuk,
        'unit' => $request->unit,
        'jenis' => $request->jenis,
        'isi' => $request->isi
        
    ]);
    
    return redirect('/komplains');
    
    }

    public function show($id)
    {
        $komplain = Komplain::find($id);
        return $komplain;
    }

    public function edit($id)
    {
        $komplain = Komplain::find($id);

        return view('komplain.edit', compact('komplain'));
    }
    
    public function update(KomplainRequest $request, $id)
    {

        $komplain = Komplain::find($id);
    
        $komplain->update([
            'tgl_masuk' => $request->tgl_masuk,
            'unit' => $request->unit,
            'jenis' => $request->jenis,
            'isi' => $request->isi,
            'tgl_ditangani' => $request->tgl_ditangani,
            'respon' => $request->respon,
            'penyelesaian' => $request->penyelesaian,
            'level' => $request->level,
            'tgl_selesai' => $request->tgl_selesai,
            'capaian' => $request->capaian,
            'petugas' => $request->petugas
        ]);
        return redirect('/komplains'); 
    }

    public function destroy($id)
    {
        $komplain = Komplain::find($id);

        $komplain->delete();
        
        return redirect('/komplains'); 

    }

    public function valid($id)
    {   
        $komplain = Komplain::findOrFail($id);
        return view('komplain.valid', compact('komplain'));

    }

    public function store_valid(ValidasiRequest $request)
    {
        // $valid = new Valid();
        // $valid->keterangan = $request->input('keterangan');
        // $valid->id_komp = $request->input('id_komp');
        // $valid->save();
        // return redirect()->route('valids.index');

        $valid = new Valid();
        $valid->id_komp = $request->input('id_komp');
        $valid->tgl_ditangani = $request->input('tgl_ditangani');
        $valid->respon = $request->input('respon');
        $valid->penyelesaian = $request->input('penyelesaian');
        $valid->level = $request->input('level');
        $valid->tgl_selesai = $request->input('tgl_selesai');
        $valid->capaian = $request->input('capaian');
        $valid->petugas = $request->input('petugas');
        $valid->save();

        $complain = Komplain::find($valid->id_komp);
        $complain->delete();
        return redirect('/komplains');
    
    }
}
