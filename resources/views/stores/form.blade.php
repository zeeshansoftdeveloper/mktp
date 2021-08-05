<div class="form-group {{ $errors->has('store_name') ? 'has-error' : ''}}">
    <label for="store_name" class="control-label">{{ 'Store Name' }}</label>
    <input class="form-control" name="store_name" type="text" id="store_name" value="{{ isset($store->store_name) ? $store->store_name : ''}}" >
    {!! $errors->first('store_name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('store_address') ? 'has-error' : ''}}">
    <label for="store_address" class="control-label">{{ 'Store Address' }}</label>
    <input class="form-control" name="store_address" type="text" id="store_address" value="{{ isset($store->store_address) ? $store->store_address : ''}}" >
    {!! $errors->first('store_address', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('store_address2') ? 'has-error' : ''}}">
    <label for="store_address2" class="control-label">{{ 'Store Address2' }}</label>
    <input class="form-control" name="store_address2" type="text" id="store_address2" value="{{ isset($store->store_address2) ? $store->store_address2 : ''}}" >
    {!! $errors->first('store_address2', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('store_phone') ? 'has-error' : ''}}">
    <label for="store_phone" class="control-label">{{ 'Store Phone' }}</label>
    <input class="form-control" name="store_phone" type="text" id="store_phone" value="{{ isset($store->store_phone) ? $store->store_phone : ''}}" >
    {!! $errors->first('store_phone', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('owner_mobile') ? 'has-error' : ''}}">
    <label for="owner_mobile" class="control-label">{{ 'Owner Mobile' }}</label>
    <input class="form-control" name="owner_mobile" type="text" id="owner_mobile" value="{{ isset($store->owner_mobile) ? $store->owner_mobile : ''}}" >
    {!! $errors->first('owner_mobile', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group {{ $errors->has('owner_mobile') ? 'has-error' : ''}}">
    <label for="map" class="control-label">{{ 'Map' }}</label>
    <div id="map"></div>

    <input type="hidden" id="mlat" name="mlat"></input>
    <input type="hidden" id="mlong" name="mlong"></input>

</div>


<div class="form-group">
    <input name="store_id" type="hidden" id="store_id" value="{{ isset($store->id) ? $store->id : ''}}" >
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTYF-ukbLcUQgTx9puVo5UlvjZ1rtFoqo"></script>

<script>
    const LAT = 55.296249;
    const LONG = 25.276987;
    var map;
        var markersArray = [];

        function initMap()
        {
            var latlng = new google.maps.LatLng(LONG, LAT);
            var myOptions = {
                zoom: 14,
                center: latlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            map = new google.maps.Map(document.getElementById("map"), myOptions);

            // add a click event handler to the map object
            google.maps.event.addListener(map, "click", function(event)
            {
                // place a marker
                placeMarker(event.latLng);

                // display the lat/lng in your form's lat/lng fields
                document.getElementById("mlat").value = event.latLng.lat();
                document.getElementById("mlong").value = event.latLng.lng();
            });
        }
        
        function placeMarker(location) {
            // first remove all markers if there are any
            deleteOverlays();

            var marker = new google.maps.Marker({
                position: location, 
                map: map
            });

            // add marker in markers array
            markersArray.push(marker);

            //map.setCenter(location);
        }

        // Deletes all markers in the array by removing references to them
        function deleteOverlays() {
            if (markersArray) {
                for (i in markersArray) {
                    markersArray[i].setMap(null);
                }
            markersArray.length = 0;
            }
        }

        initMap();
</script>