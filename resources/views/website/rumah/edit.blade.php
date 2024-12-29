@extends('website.main.layout')
@section('content')
    @php
        $text = ['Rumah', 'Rumah', 'Edit Rumah'];
    @endphp
    <x-header-title :text="$text" />
    <section class="section profile">
        <div class="row">
            <div class="col-xl-12">
                <div class="card p-4">
                    <form action="" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="row mb-3">
                            <x-form_edit.input_text name="no_rumah" :value="$rumah->no_rumah" disable="true"/>
                        </div>

                        <div class="row mb-3">
                            <x-form_edit.input_dropdown />
                        </div>

                        <div class="text-center">
                            <x-button.button_submit btn="btn btn-primary" icon="" messege="Kirim data"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
