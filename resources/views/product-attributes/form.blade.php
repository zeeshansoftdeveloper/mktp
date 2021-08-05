<div class="form-group {{ $errors->has('store_id') ? 'has-error' : ''}}">
    <label for="store_id" class="control-label">{{ 'Store' }}</label>
    <select name="store_id" class="form-control" id="store_id" >
            <option value="">Select Store</option>
        @foreach ($stores as $store)
            <option value="{{ $store->id }}">{{ $store->store_name }}</option>
        @endforeach
    </select>
    {!! $errors->first('product_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('product_id') ? 'has-error' : ''}}">
    <label for="product_id" class="control-label">{{ 'Product Id' }}</label>
    <select name="product_id" class="form-control" id="product_id" >
    </select>
    {!! $errors->first('product_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('attribute_id') ? 'has-error' : ''}}">
    <label for="attribute_id" class="control-label">{{ 'Attribute Id' }}</label>
    <select name="attribute_id" class="form-control" id="attribute_id" >
            <option value="">Select Attribute</option>
        @foreach ($attributes as $attr)
            <option value="{{ $attr->id }}" {{ (isset($productattribute->attribute_id) && $productattribute->attribute_id === $attr->id) ? 'selected' : ''}}>{{ $attr->attr_name }}</option>
        @endforeach
    </select>
    {!! $errors->first('attribute_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('vals') ? 'has-error' : ''}}">
    <label for="vals" class="control-label">{{ 'Vals' }}</label>
    <input class="form-control" name="vals" type="text" id="vals" value="{{ isset($productattribute->vals) ? $productattribute->vals : ''}}" >
    {!! $errors->first('vals', '<p class="help-block">:message</p>') !!}
</div>
 
<div class="form-group">
<input name="productattribute_id" type="hidden" id="productattribute_id" value="{{ isset($productattribute->id) ? $productattribute->id : ''}}" >
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>

@push('custom-scripts')
<script>
    $(document).ready(function(){
    $('#store_id').on('change', function(){
        var store_id = $('select#store_id option').filter(":selected").val();
        $.ajax({
            type:"POST",
            url:"{{route('getProductByStore')}}",
            data: {store_id: store_id, _token: '{{csrf_token()}}'},
            success:function(res)
            {    
                $('#product_id').empty();
                $("#product_id").append('<option>Select Product</option>');
                if(res)
                {
                    $.each(res, function(k, v){    
                            console.log(v)
                            $('#product_id').append("<option value='" + v.id + "'>" + v.name + '</option>');
                    });
                }
            }
        });
    });
});
</script>
@endpush
