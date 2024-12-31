<div class="form-floating">
    <select class="form-select" id="floatingSelect" aria-label="State" name="{{ $name }}">
        @foreach ($nilai as $item)
            <option value="A">{{ $label }}</option>
            <option value="{{ $item->idpenghuni }}">{{ $item->nama }}</option>
        @endforeach
    </select>
    <label for="floatingSelect">{{ $text }}</label>
</div>


