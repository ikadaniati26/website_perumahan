<label for="profileImage" class="col-md-4 col-lg-3 col-form-label">KTP</label>
<div class="col-md-8 col-lg-9">
    <img src="{{ asset($value) ? $value : '' }}) }}" alt="Gambar Datadiri" style="width: 100px; height: auto;">
    <div class="pt-2">
        <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
        <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
    </div>
</div>