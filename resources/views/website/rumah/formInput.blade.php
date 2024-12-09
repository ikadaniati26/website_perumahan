@extends('website.main.layout')
@section('content')
@php
$text = ['Penghuni','Home', 'Form InputRumah'];
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
                      <form class="row g-3" action="{{ url('/storerumah') }}" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="col-md-4">
                            <x-form.validasi name="no_rumah"/>
                            <x-form.input_text name="no_rumah" label="Masukan Nomor Rumah"/>
                        </div>
                        <div class="col-md-4">
                            @php
                                $nilai = ['dihuni','tidak dihuni']
                            @endphp
                            <x-form.input_dropdown name="status_rumah" :nilai="$nilai" label="Masukkan status rumah" text="Pilihan"/>
                        </div>
                        <div class="col-md-4">
                            <x-form.input_dropdowndinamis name="nama_penghuni" :nilai="$penghuni" label="Masukkan nama penghuni" text="Pilihan"/>
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