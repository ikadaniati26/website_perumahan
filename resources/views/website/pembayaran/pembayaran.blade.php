@extends('website.main.layout')

@section('content')
@php
$text = ['Pembayaran','Home', 'Pembayaran'];
@endphp

<x-header-title :text="$text" />

<section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Data Pembayaran</h5>
            <!-- Button Tambah Data -->
            <a href="{{ url('/inputpembayaran') }}" class="btn btn-primary mb-2">
              <i class="fas fa-plus"></i> Tambah Data
            </a>
            @if(session('success'))
            <div class="alert alert-success">
              {{ session('success') }}
            </div>
            @endif
            @php
                $headerTable = ['No','jenis_iuran','jumlah','bulan_bayar','status', 'aksi']
            @endphp
  
            <x-tabel :data="$pembayaran" :headerTable="$headerTable" editroute="edit_rumah"
            hapusroute="hapus_rumah" withModal="true" />
            <x-dynamic-modal />
  
          </div>
        </div>
  
      </div>
    </div>
  </section>
@endsection

