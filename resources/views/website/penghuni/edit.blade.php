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
                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                    <div class="col-md-8 col-lg-9">
                        <input name="nama" type="text" class="form-control" id="fullName"
                            value="{{isset($editpenghuni->nama)?$editpenghuni->nama : ''}}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">KTP</label>
                    <div class="col-md-8 col-lg-9">
                      <img src="{{ asset($editpenghuni->foto_ktp) }}" alt="Gambar Datadiri" style="width: 100px; height: auto;">
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
                </div>

                <div class="row mb-3">
                    <label for="company" class="col-md-4 col-lg-3 col-form-label">No Telp</label>
                    <div class="col-md-8 col-lg-9">
                        <input name="no_telp" type="text" class="form-control" id="company"
                            value="{{isset($editpenghuni->no_telp)?$editpenghuni->no_telp: ''}}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="Job" class="col-md-4 col-lg-3 col-form-label">Status Menikah</label>
                    <div class="col-md-8 col-lg-9">
                        <input name="status_menikah" type="text" class="form-control" id="Job"
                            value="{{isset($editpenghuni->status_menikah)?$editpenghuni->status_menikah: ''}}">
                    </div>
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