<label for="fullName" class="col-md-4 col-lg-3 col-form-label">{{$name}}</label>
<div class="col-md-8 col-lg-9">
    <input name="{{$name}}" type="text" class="form-control" id="fullName"
        value="{{ isset($value) ? $value : '' }}">
</div>
