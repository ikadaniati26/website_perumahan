<div class="form-floating" style="{{isset($hidden) && $hidden ? 'display: none' : 'text'}}">
    <input type="text" class="form-control" id="{{ $name }}" value="{{ $value }}" name="{{ $name }}" 
    {{isset($disable) && $disable == "true" ? 'disabled' : ""}}>
    <label for="{{ $name }}">{{ $label }}</label>
</div>