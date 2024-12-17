<?php

namespace App\Http\Controllers;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use App\http\Resources\PembayaranResource;
use App\Models\Penghuni;

class pembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pembayaran = pembayaran::all();
        // dd($pembayaran);
        $pembayaran = PembayaranResource::collection($pembayaran)->toArray(request());
        // return response()->json($pembayaran);
        return view('website.pembayaran.pembayaran', compact('pembayaran'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $pembayaran = Pembayaran::all();
        // $penghuni = Penghuni::all();
        // $penghuni = Penghuni
        return view('website.pembayaran.formInput');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
