<div class="form-floating" style="{{isset($hidden) && $hidden ? 'display: none' : 'text'}}">
    <select class="form-select" id="floatingSelect" aria-label="State" name="{{ $name }}"
    {{isset($disable) && $disable == "true" ? 'disabled' : ""}}>
        <option selected>{{ $label }}</option>
        @foreach ($nilai as $item)
            <option value="{{ $item }}">{{ $item }}</option>
        @endforeach
    </select>
    <label for="floatingSelect">{{ $text }}</label>
</div>