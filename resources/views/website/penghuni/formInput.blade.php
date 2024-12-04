@extends('website.main.layout')
@section('content')
@php
$text = ['Penghuni','Home', 'Form Input Penghuni'];
@endphp

<x-header-title :text="$text" />
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Form input Penghuni</h5>

                    
                </div>
            </div>
        </div>
    </div>
</section>

@endsection