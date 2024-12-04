@extends('website.main.layout')
@section('content')
@php
$text = ['Penghuni','Home', 'Form InputPenghuni'];
@endphp

<x-header-title :text="$text" />
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Form input Penghuni</h5>
                    <form method="POST" action="{{ url('/store') }}" enctype="multipart/form-data">
                        @csrf
                     
                        <x-input-username 
                        id="username" 
                        name="Nama" 
                        label="Nama" 
                        placeholder="" 
                        value="{{ old('nama') }}" 
                        class="custom-class" 
                    />
                    
                       {{--  <div class="row mb-3">
                            <label for="formFile" class="col-sm-2 col-form-label">KTP</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" id="ktp" name="ktp">
                                @error('ktp')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <fieldset class="row mb-3">
                            <legend class="col-form-label col-sm-2 pt-0">Status Penghuni</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status_penghuni" id="gridRadios1"
                                        value="Kontrak" {{ old('status_penghuni')=='Kontrak' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="gridRadios1">
                                        Kontrak
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status_penghuni" id="gridRadios2"
                                        value="Tetap" {{ old('status_penghuni')=='Tetap' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="gridRadios2">
                                        Tetap
                                    </label>
                                </div>
                                @error('status_penghuni')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </fieldset>

                        <div class="row mb-3">
                            <label for="no_telp" class="col-sm-2 col-form-label">No Telp</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="no_telp" name="no_telp"
                                    value="{{ old('no_telp') }}">
                                @error('no_telp')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Status Menikah</label>
                            <div class="col-sm-10">
                                <select class="form-select" id="status_menikah" name="status_menikah">
                                    <option selected disabled>Pilih status menikah</option>
                                    <option value="Sudah" {{ old('status_menikah')=='Sudah' ? 'selected' : '' }}>Sudah
                                    </option>
                                    <option value="Belum" {{ old('status_menikah')=='Belum' ? 'selected' : '' }}>Belum
                                    </option>
                                </select>
                                @error('status_menikah')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Submit Form</button>
                            </div>
                        </div> --}}
                    </form>
                   
                

                </div>
            </div>
        </div>
    </div>
</section>

@endsection