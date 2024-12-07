<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rumah;
use Illuminate\Support\Facades\DB;
use App\http\Resources\RumahResource;


class rumahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data = DB::table('rumah as r')
        ->select(
            'r.idrumah',
            'r.no_rumah',
            'r.status as status_rumah',
            'h.nama as nama_penghuni',
        )
        ->leftJoin('penghuni as h', 'h.idpenghuni', '=', 'r.penghuni_idpenghuni')
        ->whereNotNull('h.nama')
        ->get();
       $data = RumahResource::collection($data)->toArray(request());
    //    dd($data);

        return view('website.rumah.rumah', compact('data'));
        
    }


    public function create()
    {
        return view('website.rumah.formInput');    }

   
    public function store(Request $request)
    {
        
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
