<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\http\Resources\RumahResource;
use App\Models\Penghuni;
use App\Models\Rumah;



class rumahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Rumah::with('penghuni') // Melakukan eager loading relasi penghuni
            ->whereNotNull('penghuni_idpenghuni')
            ->get();
        $data = RumahResource::collection($data)->toArray(request());

        //  $data = Rumah::select('rumah.*', 'penghuni.nama');

        //  ===============Jika menggunakan Elequent Relasi pengecekan data hanya bisa menggunakan format json ================//
        // return response()->json($data);
        //  ===============Jika menggunakan Elequent Relasi pengecekan data hanya bisa menggunakan format json ================//


        // dd($data);
        return view('website.rumah.rumah', compact('data'));
    }


    public function create()
    {
        $penghuni = Penghuni::all();
        return view('website.rumah.formInput', compact('penghuni'));
    }


    public function store(Request $request)
    {
        // dd($request->all());

        $message = [
            'no_rumah.required' => 'nomor rumah harus diisi',
            'status' => 'status rumah harus diisi',
            'nama_penghuni' => 'nama penghuni harus diisi'
        ];
        $validated = $request->validate([
            'no_rumah' => 'required',
            'status' => 'required',
            'nama_penghuni' => 'required',
        ], $message);

        //simpan ke db
        Rumah::create($validated);
        return redirect('/rumah')->with('success', 'data rumah berhasil disimpan');
    }


    public function show(string $id)
    {
        $data = Rumah::where('idrumah', $id)->first();
        // return response()->json($data);
        // return view('website.rumah.detailhistory', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
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
        //
    }
}
