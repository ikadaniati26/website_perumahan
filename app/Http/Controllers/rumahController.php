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
        $data = Rumah::with('penghuni')->get();
        $data = RumahResource::collection($data)->toArray(request());

        //  ===============Jika menggunakan Elequent Relasi pengecekan data hanya bisa menggunakan format json ================//
        // return response()->json($data);
        //  ===============Jika menggunakan Elequent Relasi pengecekan data hanya bisa menggunakan format json ================//

        return view('website.rumah.rumah', compact('data'));
    }


    public function create($id)
    {   
        $rumah = Rumah::where('idrumah', $id)->first();
        $penghuni = Penghuni::all();
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
            'status' => 'required',
            'nama_penghuni' => 'required',
        ], $message);

        //simpan ke db
        Rumah::create($validated);
        return redirect('/rumah')->with('success', 'data rumah berhasil disimpan');
    }


    public function show(string $id)
    {
        $data = Rumah::with(['historyPenghuni.penghuni'])
            ->where('idrumah', $id)
            ->first();

        // return response()->json($data);
        return view('website.rumah.detailhistory', compact('data'));
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
