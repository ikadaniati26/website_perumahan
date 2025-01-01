@php
    $hiden = isset($hidden) && $hidden == 'true' ? 'd-none' : '';
@endphp

<div class="form-floating {{$hiden}}">
    <input type="date" class="form-control" id="{{ $name }}" placeholder="{{ $label }}" name="{{ $name }}" 
    value="{{ $value ?? '' }}" {{isset($disable) && $disable == "true" ? 'disabled' : ""}}>
    <label for="{{ $name }}">{{ $label }}</label>
</div>