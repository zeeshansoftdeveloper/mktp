<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($product->name) ? $product->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('store_id') ? 'has-error' : ''}}">
    <label for="store_id" class="control-label">{{ 'Store Id' }}</label>
    <select name="store_id" class="form-control" id="store_id" >
        <option value="">Select Store</option>
    @foreach ($stores as $store)
        <option value="{{ $store->id }}" {{ (isset($product->store_id) && $product->store_id === $store->id) ? 'selected' : ''}}>{{ $store->store_name }}</option>
    @endforeach
</select>
    {!! $errors->first('store_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
