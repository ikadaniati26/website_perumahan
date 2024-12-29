<label for="profileImage" class="col-md-4 col-lg-3 col-form-label">KTP</label>
<div class="col-md-8 col-lg-9">
    <img src="{{ isset($value) ? $value : '' }}" alt="Gambar Datadiri" style="width: 200px; height: auto;">
    <div class="pt-2">
        <!-- Input untuk mengunggah gambar baru -->
        <input type="file" class="form-control" name="image" id="image">
    </div>
</div>