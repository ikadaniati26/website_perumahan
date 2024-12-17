@extends('website.main.layout')

@section('content')
@php
$text = ['Rumah','Home', 'Rumah'];
@endphp
<x-header-title :text="$text" />

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Rumah</h5>
                    <!-- Button Tambah Data -->
                    <a href="{{ url('/inputrumah') }}" class="btn btn-primary mb-2">
                        <i class="fas fa-plus"></i> Tambah Data
                    </a>
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif

                    @php
                    $headerTable = ['No', 'No rumah', 'status', 'nama penghuni','Action'];
                    @endphp
                    <x-tabel :data="$data" :headerTable="$headerTable"  editroute="edit_rumah" 
                        hapusroute="hapus_rumah" withModal="true"/>
                        {{-- <x-dynamic-modal /> --}}
                        <x-dynamic-modal :title="'Detail Rumah'" >
                            <p><strong>No Rumah:</strong> </p>
                            {{-- <p><strong>Status:</strong> {{ $showrumah->status }}</p>
                            <p><strong>Nama Penghuni:</strong> {{ $showrumah->nama_penghuni }}</p>
                            <p><strong>Status Pembayaran:</strong> {{ $showrumah->status_pembayaran }}</p> --}}
                        </x-dynamic-modal>
                        
                        

                </div>
            </div>

        </div>
    </div>
</section>

@endsection