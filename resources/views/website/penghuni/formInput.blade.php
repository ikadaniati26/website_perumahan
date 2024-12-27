@extends('website.main.layout')
@section('content')
@php
$text = ['Penghuni','Home', 'Form InputPenghuni'];
@endphp

<x-header-title :text="$text" />
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Floating labels Form</h5>
                      <!-- Floating Labels Form -->
                      <form class="row g-3" action="{{ url('/store') }}" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="col-md-12">
                            <x-form.validasi name="nama"/>
                            <x-form.input_text name="nama" label="Masukan Nama Anda"/>
                        </div>
                        <div class="col-md-6">
                            <x-form.validasi name="foto_ktp"/>
                            <x-form.input_file name="foto_ktp" label="Masukkan foto ktp"/>
                        </div>
                        <div class="col-md-6">
                            @php
                                $nilai = ['kontrak','tetap']
                            @endphp
                            <x-form.input_dropdown name="status_penghuni" :nilai="$nilai" label="Masukkan status penghuni" text="Pilihan"/>
                        </div>
                        <div class="col-md-6">
                            <x-form.input_number name="no_telp" label="Masukan Nomor telp"/>
                        </div>
                        <div class="col-md-6">
                            @php
                                $status_menikah = ['belum','sudah']
                            @endphp
                            <x-form.input_dropdown name="status_menikah" :nilai="$status_menikah" label="Masukkan status pernikahan" text="Pilihan"/>
                        </div>
                        <div class="col-md-4">
                            <x-form.input_file id="122" label="Masukkan File" name="abc" />
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