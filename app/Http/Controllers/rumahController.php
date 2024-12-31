<?php

namespace App\Http\Controllers;

use App\Http\Resources\PenghuniResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\http\Resources\RumahResource;
use App\Models\historypenghuni;
use App\Models\Penghuni;
use App\Models\Rumah;



class rumahController extends Controller
{
    public function index()
    {
        $data = Rumah::with('penghuni')->orderBy('no_rumah', 'ASC')->get();
        $data = RumahResource::collection($data)->toArray(request());

        return view('website.rumah.rumah', compact('data'));
    }

    public function create_rumah()
    {   
        return view('website.rumah.form_tambahRumah');
    }

    public function create($id)
    {   
        $rumah = Rumah::where('idrumah', $id)->first();
        $penghuni = Penghuni::all();
        return view('website.rumah.form_tambahPenghuni', compact('penghuni', 'rumah'));
    }

    public function store(Request $request)
    {
        $message = [
            'no_rumah.required' => 'No rumah harus diisi',
            'status.required' => 'Status rumah harus diisi',        ];
        $validated = $request->validate([
            'no_rumah' => 'required',
            'status' => 'required',
        ], $message);

        //simpan ke db
        Rumah::create($validated);
        return redirect('/rumah')->with('success', 'data rumah berhasil disimpan');
    }

    public function store_riwayatPenghuni(Request $request)
    {        
        $penghuni = Penghuni::where('idpenghuni', $request->idPenghuni)->first();
        historypenghuni::create([
            'rumah_idrumah' => $request->idRumah,
            'Penghuni_idPenghuni' => $request->idPenghuni,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_berakhir' => $request->tanggal_berakhir,
        ]);

        Rumah::where('idrumah', $request->idRumah)->update([
            'status' => 'dihuni',
            'penghuni_idpenghuni' => $request->idPenghuni,
        ]);        

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
        $rumah = Rumah::where('idrumah', $id)->first();
        // dd($rumah);
        return view('website.rumah.edit', compact('rumah'));
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
