@extends('website.main.layout')
@section('content')
    @php
        $text = ['Penghuni', 'Home', 'Form InputRumah'];
    @endphp

    <x-header-title :text="$text" />
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Floating labels Form</h5>
                            <form class="row g-3" action="{{ route('rumah.riwayatpenghuni') }}" method="post">
                                @csrf
                                <div class="col-md-4">
                                    <x-form_edit.input_text name="idRumah" :value="$rumah->no_rumah"  label="Nomor Rumah" disable="true"/>

                                    <x-form_edit.input_text name="idRumah" :value="$rumah->idrumah"  label="Nomor Rumah" hidden="true"/>
                                    <x-form.validasi name="no_rumah"/>
                                </div>
                                <div class="col-md-4">
                                    <x-form.input_tanggal name="tanggal_mulai" label="Tanggal Mulai"/>
                                </div>
                                <div class="col-md-4">
                                    <x-form.input_tanggal name="tanggal_berakhir" label="Tanggal Berakhir"/>
                                </div>
                                <div class="col-md-6">
                                    @php
                                        $nilai = ['dihuni'];
                                    @endphp
                                    <x-form_edit.input_dropdown name="status_rumah" :nilai="$nilai"
                                        label="Dihuni" text="Pilihan" disable="true" />

                                        <x-form_edit.input_dropdown name="status_rumah" :nilai="$nilai"
                                        label="dihuni" text="Pilihan" hidden="true" />
                                </div>
                                <div class="col-md-6">
                                    <x-form.input_dropdowndinamis name="idPenghuni" :nilai="$penghuni"
                                        label="Masukkan nama penghuni" text="Pilihan"/>
                                </div>
                                <div class="text-center">
                                    <x-button.button_submit btn="btn btn-primary" icon="" messege="Kirim data"/>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </section>
@endsection
