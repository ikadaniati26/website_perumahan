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
            <form action="{{ route('update_penghuni', ['id' => $editpenghuni->id]) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="row mb-3">
                    <x-form_edit.input_text name="nama" :value="$editpenghuni->nama"/>
                </div>

                <div class="row mb-3">
<<<<<<< HEAD
                    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">KTP</label>
                    <div class="col-md-8 col-lg-9">
                      <img src="{{ asset('/public/assets/img/datadiri/'.$editpenghuni->foto_ktp) }}" alt="Gambar Datadiri" style="width: 100px; height: auto;">
                        <div class="pt-2">
                            <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                            <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                        </div>
                    </div>
                </div>
                

                <div class="row mb-3">
                    <label for="about" class="col-md-4 col-lg-3 col-form-label">Status Penghuni</label>
                    <div class="col-md-8 col-lg-9">
                        <input name="status_penghuni" type="text" class="form-control" id="fullName"
                            value="{{isset($editpenghuni->status_penghuni)?$editpenghuni->status_penghuni: ''}}">
                    </div>
=======
                    <x-form_edit.input_image name="foto_ktp" :value="$editpenghuni->foto_ktp"/>
>>>>>>> b7b6ff8c08febdea1ef1c897550247c0b0ddf0de
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