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
              <h5 class="card-title text-primary fw-bold">
              <i class="bi bi-person-lines-fill"></i>Detail Penghuni
              </h5>

              <div class="row">
                  <div class="row mb-3">
                    <div class="col-lg-4 col-md-5 label fw-bold">Nama </div>
                    <div class="col-lg-8 col-md-7">: {{ $showpenghuni->nama }}</div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-lg-4 col-md-5 label fw-bold">Foto KTP</div>
                    <div class="col-lg-8 col-md-7">
                      <img src="{{ asset($showpenghuni->foto_ktp) }}" alt="Gambar Datadiri"
                        class="img-fluid rounded shadow" style="width: 250px; height: auto;">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <div class="col-lg-4 col-md-5 label fw-bold">Status Penghuni</div>
                    <div class="col-lg-8 col-md-7">: {{ $showpenghuni->status_penghuni }}</div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-lg-4 col-md-5 label fw-bold">No Telp</div>
                    <div class="col-lg-8 col-md-7">: {{ $showpenghuni->no_telp }}</div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-lg-4 col-md-5 label fw-bold">Status Menikah</div>
                    <div class="col-lg-8 col-md-7">: {{ $showpenghuni->status_menikah }}</div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-lg-4 col-md-5 label fw-bold">Dibuat Pada</div>
                    <div class="col-lg-8 col-md-7">: {{ $showpenghuni->created_at }}</div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-lg-4 col-md-5 label fw-bold">Diubah Pada</div>
                    <div class="col-lg-8 col-md-7">: {{ $showpenghuni->updated_at }}</div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


@endsection