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
     ->whereNotNull('penghuni_idpenghuni') // Filter: hanya rumah yang memiliki penghuni
     ->get();
     $data = RumahResource::collection($data)->toArray(request());

    dd($data);
    return view('website.rumah.rumah', compact('data'));
        
    }


    public function create()
    {
        $penghuni = Penghuni::all();
        return view('website.rumah.formInput', compact('penghuni'));    }

   
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
        ],$message);

        //simpan ke db
        Rumah::create($validated);
        return redirect('/rumah')->with('success','data rumah berhasil disimpan');
    }

   
    public function show(string $id)
    {
        $data = DB::table('rumah as r')
        ->select(
            'r.idrumah',
            'r.Penghuni_idPenghuni',
            'r.rumah_idrumah',
            'p.nama',
            'p.status_penghuni',
            'h.tanggal_mulai as historical_mulai',
            'h.tanggal_mulai',
            'h.tanggal_berakhir',
        )
        ->leftJoin('penghuni as p', 'p.idpenghuni', '=', 'r.Penghuni_idPenghuni') // Menghubungkan 'rumah' dengan 'penghuni'
        ->leftJoin('historical_penghuni as h', 'h.Penghuni_idPenghuni', '=', 'p.idpenghuni') // Menghubungkan 'historical' dengan 'penghuni'
        ->get();
    // dd($data);
        return view('website.rumah.detailhistory', compact('data'));
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
