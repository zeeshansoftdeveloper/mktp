<div class="form-group {{ $errors->has('store_id') ? 'has-error' : ''}}">
    <label for="store_id" class="control-label">{{ 'Store Id' }}</label>
    <select name="store_id" class="form-control" id="store_id" >
        <option value="">Select Store</option>
    @foreach ($stores as $store)
        <option value="{{ $store->id }}" {{ (isset($store_image->store_id) && $store_image->store_id === $store->id) ? 'selected' : ''}}>{{ $store->store_name }}</option>
    @endforeach
</select>
    {!! $errors->first('store_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('banner') ? 'has-error' : ''}}">
    <label for="banner" class="control-label">{{ 'Banner' }}</label>
    <input class="form-control" name="banner" type="file" id="banner" value="{{ isset($store_image->banner) ? $store_image->banner : ''}}" >
    {!! $errors->first('banner', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('logo') ? 'has-error' : ''}}">
    <label for="logo" class="control-label">{{ 'Logo' }}</label>
    <input class="form-control" name="logo" type="file" id="logo" value="{{ isset($store_image->logo) ? $store_image->logo : ''}}" >
    {!! $errors->first('logo', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
