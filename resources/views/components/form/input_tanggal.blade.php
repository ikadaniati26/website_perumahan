<div class="form-floating">
    <input type="date" class="form-control" id="{{ $name }}" placeholder="{{ $label }}" name="{{ $name }}" 
    {{isset($disable) && $disable == "true" ? 'disabled' : ""}}>
    <label for="{{ $name }}">{{ $label }}</label>
</div>