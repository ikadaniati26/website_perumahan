@extends('website.main.layout')

@section('content')
    @php
        $text = ['Rumah', 'Home', 'Rumah'];
    @endphp
    <x-header-title :text="$text" />

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Rumah</h5>
                        <!-- Button Tambah Data -->
                        <a href="{{ url('/inputrumah') }}" class="btn btn-primary mb-3">
                            <i class="fas fa-plus"></i> Tambah Data
                        </a>
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @php
                            $headerTable = ['No', 'No rumah', 'status Rumah', 'nama penghuni', 'Action'];
                        @endphp
                        <x-tabel 
                                :data="$data" 
                                :headerTable="$headerTable" 
                                showroute="show_rumah"
                                editroute="edit_penghuni" 
                                hapusroute="hapus_penghuni" 
                                view="true" 
                                add="true"
                                edit="true" />
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
