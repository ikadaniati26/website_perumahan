@extends('website.main.layout')

@section('content')
@php
$text = ['Penghuni','Home', 'Pembayaran'];
@endphp

<x-header-title :text="$text" />

<section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Data Penghuni</h5>
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
                $headerTable = ['No','jenis_iuran','jumlah','bulan_bayar','status','create_at','update_at']
            @endphp
  
            <x-tabel :data="$pembayaran" :headerTable="$headerTable"  />
  
          </div>
        </div>
  
      </div>
    </div>
  </section>
@endsection

