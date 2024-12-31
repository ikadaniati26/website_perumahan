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
                            <form class="row g-3" action="{{ url('/storerumah') }}" method="post">
                                @csrf
                                <div class="col-md-6">
                                    <x-form.validasi name="no_rumah" />
                                    <x-form.input_text name="no_rumah" label="Masukan Nomor Rumah"/>
                                </div>
                                <div class="col-md-6">
                                    @php
                                        $nilai = ['tidak dihuni'];
                                    @endphp
                                    <x-form.input_dropdown name="status" :nilai="$nilai"
                                        label="Masukkan status rumah" text="Pilihan" />
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
