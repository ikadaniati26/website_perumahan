@extends('website.main.layout')
@section('content')
@php
$text = ['Penghuni','Home', 'FormInputPembayaran'];
@endphp

<x-header-title :text="$text" />
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Form input pembayaran</h5>
                      <!-- Floating Labels Form -->
                      <form class="row g-3" action="{{ url('/store') }}" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="col-md-12">
                            <x-form.input_dropdowndinamis name="nama" :nilai="$penghuni" label="Masukkan nama pembayar" text="Pilihan"/>
                        </div>
                        
                        <div class="col-md-6">
                            @php
                                $nilai = ['kebersihan','iuran satpam']
                            @endphp
                            <x-form.input_dropdown name="status_pembayaran" :nilai="$nilai" label="Masukkan status penghuni" text="Pilihan"/>
                        </div>
                        <div class="col-md-6">
                            <x-form.validasi name="nama"/>
                            <x-form.input_text name="jumlah" label="Masukan Jumlah uang"/>
                        </div>
                        <div class="col-md-6">
                            <x-form.validasi name="nama"/>
                            <x-form.input_text name="bulan_bayar" label="Masukan bulan bayar"/>
                        </div>
                        <div class="col-md-6">
                            @php
                                $nilai = ['lunas','belum']
                            @endphp
                            <x-form.input_dropdown name="status_pembayaran" :nilai="$nilai" label="Masukkan status pembayaran" text="Pilihan"/>
                        </div>
                        

                        <div class="text-center">
                          <button type="submit" class="btn btn-primary">Submit</button>
                          <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                      </form><!-- End floating Labels Form -->
        
                    </div>
                  </div>
            </div>
        </div>
    </div>
</section>

@endsection