<div class="form-floating">
<select class="form-select" id="floatingSelect" aria-label="State" name="{{ $name }}">
    <option selected>{{ $label }}</option>
    @foreach ($nilai as $item)
        <option value="{{$item}}">{{$item}}</option>
    @endforeach
</select>
<label for="floatingSelect">{{ $text }}</label>
</div>


