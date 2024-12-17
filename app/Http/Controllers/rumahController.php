<?php

namespace App\Http\Controllers;

use App\Http\Resources\PenghuniResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\http\Resources\RumahResource;
use App\Models\Penghuni;
use App\Models\Rumah;



class rumahController extends Controller
{
    public function index()
    {
        // $data = Rumah::with('penghuni') // melakukan eager loading relasi penghuni
        //     ->whereNotNull('penghuni_idpenghuni') //filter: hanya rumah yang memiliki penghuni
        //     ->get();
        $data = Rumah::all();
        // dd($data);
        $data = RumahResource::collection($data)->toArray(request());
        // ================jika menggunakan relasi pengecekan data hanya bisa menggunakan format json ==============
        return response()->json($data);
        // ================jika menggunakan relasi pengecekan data hanya bisa menggunakan format json ==============

        return view('website.rumah.rumah', compact('data'));
    }


    public function create()
    {
        $rumah = Rumah::all(); 
        $penghuni = Penghuni::all(); 
        $rumah = RumahResource::collection($rumah)->toArray(request());
        $penghuni = PenghuniResource::collection($penghuni)->toArray(request());

        return view('website.rumah.formInput', compact('penghuni', 'rumah'));
    }


    public function store(Request $request)
    {
        // dd($request->all());
        $message = [
            'no_rumah.required' => 'No rumah harus diisi',
            'status_rumah.required' => 'Status rumah harus diisi',
            'nama_penghuni.nullable' => 'Nama penghuni harus diisi'
        ];
        $validated = $request->validate([
            'no_rumah' => 'required',
            'status_rumah' => 'required',
            'nama_penghuni' => 'nullable',
        ], $message);

        // Simpan ke database
        Rumah::create([
            'no_rumah' => $validated['no_rumah'],
            'status' => $validated['status_rumah'], // Sesuaikan nama kolom di database
            'penghuni_idpenghuni' => $validated['nama_penghuni'] ?? null,// Foreign Key
        ]);
        return redirect('/rumah')->with('success', 'data rumah berhasil disimpan');
    }


    public function show(string $id)
    {
        $datarumah = Rumah::where('idrumah', $id)->first();
        return view('website.rumah.rumah', compact('datarumah'));
    }
    
    
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $rumah = Rumah::where('idrumah', $id)->delete();
        return redirect('/rumah')->with('success', 'data rumah berhasil dihapus');
    }
}
