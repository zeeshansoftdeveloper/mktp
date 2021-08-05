<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($service->name) ? $service->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('service_code') ? 'has-error' : ''}}">
    <label for="service_code" class="control-label">{{ 'Service Code' }}</label>
    <input class="form-control" name="service_code" type="text" id="service_code" value="{{ isset($service->service_code) ? $service->service_code : ''}}" >
    {!! $errors->first('service_code', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('service_detail') ? 'has-error' : ''}}">
    <label for="service_detail" class="control-label">{{ 'Service Detail' }}</label>
    <input class="form-control" name="service_detail" type="text" id="service_detail" value="{{ isset($service->service_detail) ? $service->service_detail : ''}}" >
    {!! $errors->first('service_detail', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('service_img') ? 'has-error' : ''}}">
    <label for="service_img" class="control-label">{{ 'Service Img' }}</label>
    <input class="form-control" name="service_img" type="file" id="service_img" value="{{ isset($service->service_img) ? $service->service_img : ''}}" >
    {!! $errors->first('service_img', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('store_id') ? 'has-error' : ''}}">
    <label for="store_id" class="control-label">{{ 'Store Id' }}</label>
    <select name="store_id" class="form-control" id="store_id" >
        <option value="">Select Store</option>
    @foreach ($stores as $store)
        <option value="{{ $store->id }}" {{ (isset($service->store_id) && $service->store_id == $store->id) ? 'selected' : ''}}>{{ $store->store_name }}</option>
    @endforeach
</select>
    {!! $errors->first('store_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('category_id') ? 'has-error' : ''}}">
    <label for="category_id" class="control-label">{{ 'Category Id' }}</label>
    <select name="category_id" class="form-control" id="category_id" >
        <option value="">Select Category</option>
    @foreach ($cats as $cat)
        <option value="{{ $cat->id }}" {{ (isset($service->category_id) && $service->category_id == $cat->id) ? 'selected' : ''}}>{{ $cat->cat_name }}</option>
    @endforeach
</select>
    {!! $errors->first('category_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('price_type_id') ? 'has-error' : ''}}">
    <label for="price_type_id" class="control-label">{{ 'Price Type Id' }}</label>
    <select name="price_type_id" class="form-control" id="price_type_id" >
        <option value="">Select Pricing Type</option>
    @foreach ($pricingType as $pt)
        <option value="{{ $pt->id }}" {{ (isset($service->store_id) && $service->store_id == $pt->id) ? 'selected' : ''}}>{{ $pt->type_name }}</option>
    @endforeach
</select>
    {!! $errors->first('price_type_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input name="service_id" type="hidden" id="service_id" value="{{ isset($service->id) ? $service->id : ''}}" >
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
