@extends('website.main.layout')

@section('content')
@php
$text = ['Penghuni','Home', 'Penghuni'];
@endphp

<x-header-title :text="$text" />

<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Data Penghuni</h5>
          <!-- Button Tambah Data -->
          <a href="{{ url('/inputpenghuni') }}" class="btn btn-primary mb-2">
            <i class="fas fa-plus"></i> Tambah Data
          </a>
          @if(session('success'))
          <div class="alert alert-success">
            {{ session('success') }}
          </div>
          @endif

          @php
              $headerTable = ['No', 'Nama', 'ktp', 'status', 'no telp', 'status menikah','Action'];
              // dd($penghuni);
          @endphp

          <x-tabel :data="$penghuni" :headerTable="$headerTable" route="show_penghuni"/>

        </div>
      </div>

    </div>
  </div>
</section>

@endsection