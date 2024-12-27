<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penghuni;
use App\http\Resources\PenghuniResource;
use Illuminate\Support\Facades\Storage;

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
            'foto_ktp.mimes' => 'foto harus berektensi jpg',
            'foto_ktp.max' => 'ukuran foto harus kurang dari 2 MB',
            'status_penghuni.required' => 'status harus diisi',
            'no_telp.required' => 'notelp harus diisi',
            'status_menikah.required' => 'status harus diisi',
        ];
        $validated = $request->validate([
            'nama' => 'required',
            'foto_ktp' => 'nullable|mimes:jpg|max:2048',
            'status_penghuni' => 'required',
            'no_telp' => 'required',
            'status_menikah' => 'required',
        ], $message);
        
        // Proses penyimpanan file
        if ($request->hasFile('foto_ktp')) {
            $file = $request->file('foto_ktp'); // Mengambil input file
            $originalName = time() . '_' . $file->getClientOriginalName(); // Menambahkan timestamp untuk menghindari duplikasi nama
            $file->move(public_path('assets/img/datadiri'), $originalName); // Memindahkan file ke folder tujuan

            // Simpan path file ke dalam database
            $validated['foto_ktp'] = 'assets/img/datadiri/' . $originalName;
        } else {
            $validated['foto_ktp'] = null; // Jika tidak ada file, biarkan null atau berikan default
        }
        //  Simpan ke db
        Penghuni::create($validated);

        return redirect('/penghuni')->with('success', 'data penghuni telah disimpan');
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
            ->where('penghuni.idpenghuni', $id)
            ->first();
            // dd($editpenghuni);
        return view('website.penghuni.edit', compact('editpenghuni'));
    }


    public function update(Request $request, string $id)
    {
        $penghuni = Penghuni::where('idpenghuni', $id)
            ->update([
                'nama' => $request->nama,
                'foto_ktp' => $request->foto_ktp,
                'status_penghuni' => $request->status_penghuni,
                'no_telp' => $request->no_telp,
                'status_menikah' => $request->status_menikah,
            ]);
    
        return redirect('edit_penghuni')->with('success', 'Artikel berhasil diperbarui');
    }
    

    public function destroy(string $id)
    {
        $penghuni = Penghuni::where('idpenghuni', $id)->delete();
        return redirect('/penghuni')->with('success', 'data penghuni berhasil dihapus');
    }
}
