<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penghuni;
use App\http\Resources\PenghuniResource;

class penghuniController extends Controller
{
   
    public function index()
    {
        $penghuni = penghuni::all();
        $penghuni = PenghuniResource::collection($penghuni)->toArray(request());
        // dd($penghuni);
        return view('website.penghuni.penghuni', compact('penghuni'));
    }

    public function create()
    {
        return view('website.penghuni.formInput');
    }

   
    public function store(Request $request)
    {
        // dd($request->all());
        $message = [
            'nama.required' => 'nama harus diisi', 
            'foto_ktp.required' => 'foto harus diisi', 
            'foto_ktp.mimes'=> 'foto harus berektensi jpg',
            'foto_ktp.max'=> 'ukuran foto harus kurang dari 2 MB',
            'status_penghuni.required' => 'status harus diisi', 
            'no_telp.required' => 'notelp harus diisi', 
            'status_menikah.required' => 'status harus diisi', 
        ];
        $validated = $request->validate([
            'nama' => 'required',
            'foto_ktp' => 'nullable|mimes:jpg|max:2048',
            'status_penghuni'=> 'required',
            'no_telp' => 'required',
            'status_menikah' => 'required',
            
        ], $message);

        //  Simpan ke db
        Penghuni::create($validated);

        return redirect('/penghuni')->with('success','data penghuni telah disimpan');
    }

   
    public function show(string $id)
    {
        $showpenghuni = Penghuni::where('idpenghuni', $id)->first();
        return view('website.penghuni.show', compact('showpenghuni'));
    }

 
    public function edit(string $id)
    {
        $editpenghuni = Penghuni::select(
            'penghuni.idpenghuni',
            'penghuni.nama',
            'penghuni.foto_ktp',
            'penghuni.status_penghuni',
            'penghuni.no_telp',
            'penghuni.status_menikah',
        )
            ->where('penghuni.idpenghuni',$id)
            ->first();
        return view ('website.penghuni.edit', compact('editpenghuni'));
    }

  
    public function update(Request $request, string $id)
    {
        $updatepenghuni = Penghuni::where('idpenghuni',$id)
        ->update([
            'nama' => $request->nama,
            'foto_ktp' => $request->foto_ktp,
            'status_penghuni' => $request->status_penghuni,
            'no_telp' => $request->no_telp,
            'status_menikah' => $request->status_menikah,
        ]);
        return redirect('website.penghuni.edit')->with('success','Artikel berhasil diperbarui');
    }

    public function destroy(string $id)
    {
        $penghuni = Penghuni::where('idpenghuni', $id)->delete();
        return redirect('/penghuni')->with('success','data berhasil dihapus');
    }
}
