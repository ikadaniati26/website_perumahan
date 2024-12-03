@extends('website.main.layout')

@section('content')
@php
    $text = ['Rumah','Home', 'Rumah'];
@endphp
<x-header-title :text="$text"/>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Rumah</h5>
                    <!-- Button Tambah Data -->
                    <a href=" " class="btn btn-primary mb-2">
                        <i class="fas fa-plus"></i> Tambah Data
                    </a>
                    {{-- @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif --}}
                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>
                                    <b>No.</b>rumah
                                </th>
                                <th>Status</th>
                                <th>Nama Penghuni</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no=1
                            @endphp
                            @foreach($data as $d)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $d->no_rumah }}</td>
                                <td>{{ $d->status_rumah }}</td>
                                <td>{{ $d->nama_penghuni,5 }}</td>
                                <td>
                                    <form method="POST" action=""
                                        style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <a href="" class="text-info me-2"><i
                                                class="fas fa-eye"></i></a>
                                        <a href=""
                                            class="text-warning me-2"><i class="fas fa-edit"></i></a>
                                        <button type="submit" class="btn btn-link text-danger p-0"><i
                                                class="fas fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection