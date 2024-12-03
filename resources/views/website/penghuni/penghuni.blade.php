@extends('website.main.layout')

@section('content')
@php
    $text = ['Penghuni','Home', 'Penghuni'];
@endphp
<x-header-title :text="$text"/>

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
            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th>No</th>
                  <th>
                    <b>N</b>ama
                  </th>
                  <th>ktp</th>
                  <th>status</th>
                  {{-- <th data-type="date" data-format="YYYY/DD/MM">Start Date</th> --}}
                  <th>no telp</th>
                  <th>status_menikah</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                  @php
                      $no=1
                  @endphp
                  @foreach($penghuni as $p)
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $p->nama,5 }}</td>
                    <td>
                      {{ Str::limit($p->foto_ktp, 10) }}
                    </td>
                    <td>{{ $p->status_penghuni }}</td>
                    <td>{{ Str::limit($p->no_telp,10)}}</td>
                    <td>{{ $p->status_menikah }}</td>
                    <td>
                      <form method="POST" action="{{ route('hapus',['id'=>$p->idpenghuni])}}" style="display:inline-block;">
                          @csrf
                          @method('DELETE')
                          <a href="{{ route('show',['id'=> $p->idpenghuni])}}" class="text-info me-2"><i class="fas fa-eye"></i></a>
                      <a href="{{ route('edit',['id'=> $p->idpenghuni])}}" class="text-warning me-2"><i class="fas fa-edit"></i></a>
                          <button type="submit" class="btn btn-link text-danger p-0"><i class="fas fa-trash-alt"></i></button>
                      </form>
                  </td>
                  </tr>
                  @endforeach
               
              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>

@endsection
