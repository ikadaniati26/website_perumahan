@extends('website.main.layout')

@section('content')
<div class="pagetitle">
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active">Show</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<section class="section profile">
    <div class="row">
      {{-- <div class="col-xl-4">
        <div class="card">
          <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <h2>{{ $showpenghuni->nama}}</h2>
            <h3>Web Designer</h3>
          </div>
        </div>
      </div> --}}

      <div class="col-xl-12">

        <div class="card">
          <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered">

              <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
              </li>
            </ul>
            <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Detail Penghuni</h5>
            
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Nama</div>
                    <div class="col-lg-9 col-md-8">{{ $showpenghuni->nama}}</div>
                  </div>
            
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Foto KTP</div>
                    <div class="col-lg-9 col-md-8">{{ $showpenghuni->foto_ktp}}</div>
                  </div>
            
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Status Penghuni</div>
                    <div class="col-lg-9 col-md-8">{{ $showpenghuni->status_penghuni}}</div>
                  </div>
            
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">No Telp</div>
                    <div class="col-lg-9 col-md-8">{{ $showpenghuni->no_telp}}</div>
                  </div>
            
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Status Menikah</div>
                    <div class="col-lg-9 col-md-8">{{ $showpenghuni->status_menikah}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">dibuat pada</div>
                    <div class="col-lg-9 col-md-8">{{ $showpenghuni->created_at}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">diubah pada</div>
                    <div class="col-lg-9 col-md-8">{{ $showpenghuni->updated_at}}</div>
                  </div>
                </div>
              </div>

          </div>
        </div>

      </div>
    </div>
  </section>


@endsection
