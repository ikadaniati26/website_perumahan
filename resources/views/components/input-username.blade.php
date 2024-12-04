<div class="row mb-3">
    <label for="{{ $id }}" class="col-sm-2 col-form-label">{{ $label }}</label>
    <div class="col-sm-10">
        <input 
            class="form-control {{ $class ?? '' }}" 
            type="text" 
            id="{{ $id }}" 
            name="{{ $name }}" 
            value="{{ $value ?? '' }}" 
            placeholder="{{ $placeholder ?? 'Enter your username' }}" 
            {{ $attributes }}
        >
        @error($name)
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
</div>
