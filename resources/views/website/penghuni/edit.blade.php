@extends('website.main.layout')
@section('content')
<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Edit</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
<section class="section profile">
    <div class="row">
        <div class="col-xl-12">
        <div class="card p-4">
            <form action="{{ route('update_penghuni' , ['id' => $editpenghuni->idpenghuni])}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="row mb-3">
                    <x-form_edit.input_text name="nama" :value="$editpenghuni->nama"/>
                </div>

                <div class="row mb-3">
                    <x-form_edit.input_image name="foto_ktp" :value="asset($editpenghuni->foto_ktp)"/>
                </div>

                <div class="row mb-3">
                    <x-form_edit.input_text name="status_penghuni" :value="$editpenghuni->status_penghuni"/>
                </div>

                <div class="row mb-3">
                    <x-form_edit.input_text name="no_telp" :value="$editpenghuni->no_telp"/>
                </div>

                <div class="row mb-3">
                    <x-form_edit.input_text name="status_menikah" :value="$editpenghuni->status_menikah"/>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
</section>
@endsection