function init_map(){
	var styles = [{
		// stylers:[
		// { "saturation": -100 },
  //       { "lightness": -7 },
  //       { "gamma": 0.8 }
		// ]
	}]

	var var_location = new google.maps.LatLng(42.280621, -83.740200);

	var var_mapoptions = {
		center:var_location,
		zoom: 14,
		disableDefaultUI: true,
		mapTypeControlOptions: {
      mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
    }
	};

	// Create a new StyledMapType object, passing it the array of styles,
 	// as well as the name to be displayed on the map type control.
 	var styledMap = new google.maps.StyledMapType(styles, {name: "Styled Map"});

	var var_marker = new google.maps.Marker({
		position:var_location,
		map:var_map,
		title:"Yang Li",
		stylers:[
		{ "saturation": -100 },
        { "lightness": -7 },
        { "gamma": 0.8 }
		],
		url:"https://www.google.com/maps/place/North+Quadrangle+Residential+and+Academic+Complex/@42.2734325,-83.7142224,13z/data=!4m2!3m1!1s0x883cae406bf1f7cb:0xefd29040373a695a"

	});

	var var_map = new google.maps.Map(document.getElementById("map-container"), var_mapoptions);

	var_map.mapTypes.set('map_style', styledMap);
	var_map.setMapTypeId('map_style');
	var_marker.setMap(var_map);

	google.maps.event.addListener(var_marker, 'click', function(){
	window.open(this.url,"_blank");
});
}


google.maps.event.addDomListener(window, 'load', init_map);