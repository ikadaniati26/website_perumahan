@extends('website.main.layout')

@section('content')
    <div class="pagetitle">
        @php
            $text = ['Rumah', 'Rumah', 'View Detail'];
        @endphp
        <x-header-title :text="$text" />

        <section class="section profile">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body pt-3">
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered">

                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab"
                                        data-bs-target="#profile-overview">Overview</button>
                                </li>
                            </ul>
                            <div class="tab-content pt-2">
                                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                    <h5 class="card-title">History Rumah {{$data->no_rumah}} ( {{$data->status}} )</h5>

                                    @php
                                        $headerTable = ['No', 'Nama', 'ktp', 'status', 'no telp', 'menikah','Tanggal Masuk', 'Tanggal Keluar'];
                                    @endphp
                      
                                <x-tabel.tabelView_history 
                                        :data="$data"
                                        :headerTable="$headerTable" 
                                        {{-- showroute="show_penghuni" 
                                        editroute="edit_penghuni" 
                                        hapusroute="hapus_penghuni" 
                                        view="true"
                                        add="false"
                                        edit="true" --}}
                                        />                      
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
    @endsection
