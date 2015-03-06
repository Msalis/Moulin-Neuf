<?php require("_head.php"); ?>
<?php require("_header.php"); ?>

<div class="main-container col col-12">
	<div class="teaser contact">

	</div>
	<div class="content">
		<div class="left-side col col-4 home">
<h1><?php echo $content['home_contact_tilte'];  ?></h1>
            <?php echo $content['home_contact_txt'];  ?>
            			<form id="contactgForm" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
                       
				<fieldset>
					<input type="text" id="name" name="name" placeholder="<?php echo $content['formName'];  ?>">
					<input type="text" id="firstName" name="firstName" placeholder="<?php echo $content['formFirstName'];  ?>">
					<input type="text" id="mail" name="mail" placeholder="<?php echo $content['formMail'];  ?>">
					
				</fieldset>
				<fieldset>
					<textarea id="specialReq" placeholder="<?php echo $content['formTextarea']; ?>"></textarea>
				</fieldset>
				<fieldset>
					<input type="submit" value="<?php echo $content['formSubmit-contact']; ?>">
				</fieldset>
			</form>  
		</div>
		<div class="right-side col col-8">
<div id='map'></div>
		</div>
	</div>
	</div>

</div>


<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyAuST7sgo_FGlZKOrNFQ7jb9PKe-W4BfAE&sensor=false&extension=.js'></script> 
 
<script> 
    google.maps.event.addDomListener(window, 'load', init);
    var map;
    function init() {
        var mapOptions = {
            center: new google.maps.LatLng(45.25483,0.164865),
            zoom: 13,
            zoomControl: true,
            zoomControlOptions: {
                style: google.maps.ZoomControlStyle.DEFAULT,
            },
            disableDoubleClickZoom: false,
            mapTypeControl: false,
            scaleControl: true,
            scrollwheel: true,
            panControl: false,
            streetViewControl: true,
            draggable : true,
            overviewMapControl: false,
            overviewMapControlOptions: {
                opened: false,
            },
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            styles: [{

        "featureType": "water",

        "elementType": "geometry",

        "stylers": [{

            "color": "#a0d6d1"

        }, {

            "lightness": 17

        }]

    }, {

        "featureType": "landscape",

        "elementType": "geometry",

        "stylers": [{

            "color": "#ffffff"

        }, {

            "lightness": 20

        }]

    }, {

        "featureType": "road.highway",

        "elementType": "geometry.fill",

        "stylers": [{

            "color": "#dedede"

        }, {

            "lightness": 17

        }]

    }, {

        "featureType": "road.highway",

        "elementType": "geometry.stroke",

        "stylers": [{

            "color": "#dedede"

        }, {

            "lightness": 29

        }, {

            "weight": 0.2

        }]

    }, {

        "featureType": "road.arterial",

        "elementType": "geometry",

        "stylers": [{

            "color": "#dedede"

        }, {

            "lightness": 18

        }]

    }, {

        "featureType": "road.local",

        "elementType": "geometry",

        "stylers": [{

            "color": "#ffffff"

        }, {

            "lightness": 16

        }]

    }, {

        "featureType": "poi",

        "elementType": "geometry",

        "stylers": [{

            "color": "#f1f1f1"

        }, {

            "lightness": 21

        }]

    }, {

        "elementType": "labels.text.stroke",

        "stylers": [{

            "visibility": "on"

        }, {

            "color": "#ffffff"

        }, {

            "lightness": 16

        }]

    }, {

        "elementType": "labels.text.fill",

        "stylers": [{

            "saturation": 36

        }, {

            "color": "#333333"

        }, {

            "lightness": 40

        }]

    }, {

        "elementType": "labels.icon",

        "stylers": [{

            "visibility": "off"

        }]

    }, {

        "featureType": "transit",

        "elementType": "geometry",

        "stylers": [{

            "color": "#f2f2f2"

        }, {

            "lightness": 19

        }]

    }, {

        "featureType": "administrative",

        "elementType": "geometry.fill",

        "stylers": [{

            "color": "#fefefe"

        }, {

            "lightness": 20

        }]

    }, {

        "featureType": "administrative",

        "elementType": "geometry.stroke",

        "stylers": [{

            "color": "#fefefe"

        }, {

            "lightness": 17

        }, {

            "weight": 1.2

        }]

    }]

,
        }
        var mapElement = document.getElementById('map');
        var map = new google.maps.Map(mapElement, mapOptions);
        var locations = [
['Moulin Neuf sur Dronne', 'undefined', '04 38 49 05 05', 'undefined', 'www.moulin-neuf-sur-dronne.com', 45.233186, 0.15176789999998164, 'https://mapbuildr.com/assets/img/markers/default.png']
        ];
        for (i = 0; i < locations.length; i++) {
			if (locations[i][1] =='undefined'){ description ='';} else { description = locations[i][1];}
			if (locations[i][2] =='undefined'){ telephone ='';} else { telephone = locations[i][2];}
			if (locations[i][3] =='undefined'){ email ='';} else { email = locations[i][3];}
           if (locations[i][4] =='undefined'){ web ='';} else { web = locations[i][4];}
           if (locations[i][7] =='undefined'){ markericon ='';} else { markericon = locations[i][7];}
            marker = new google.maps.Marker({
                icon: markericon,
                position: new google.maps.LatLng(locations[i][5], locations[i][6]),
                map: map,
                title: locations[i][0],
                desc: description,
                tel: telephone,
                email: email,
                web: web
            });
if (web.substring(0, 7) != "http://") {
link = "http://" + web;
} else {
link = web;
}
            bindInfoWindow(marker, map, locations[i][0], description, telephone, email, web, link);
     }
 function bindInfoWindow(marker, map, title, desc, telephone, email, web, link) {
      var infoWindowVisible = (function () {
              var currentlyVisible = false;
              return function (visible) {
                  if (visible !== undefined) {
                      currentlyVisible = visible;
                  }
                  return currentlyVisible;
               };
           }());
           iw = new google.maps.InfoWindow();
           google.maps.event.addListener(marker, 'click', function() {
               if (infoWindowVisible()) {
                   iw.close();
                   infoWindowVisible(false);
               } else {
                   var html= "<div style='color:#000;background-color:#fff;padding:5px;width:150px;'><h4>"+title+"</h4><p>"+telephone+"<p><a href='"+link+"'' >"+web+"<a></div>";
                   iw = new google.maps.InfoWindow({content:html});
                   iw.open(map,marker);
                   infoWindowVisible(true);
               }
        });
        google.maps.event.addListener(iw, 'closeclick', function () {
            infoWindowVisible(false);
        });
 }
}
</script>
<style>
    #map {
       height: 50vh;
    width: 100%;
    }
    .gm-style-iw * {
        display: block;
        width: 100%;
    }
    .gm-style-iw h4, .gm-style-iw p {
        margin: 0;
        padding: 0;
    }
    .gm-style-iw a {
        color: #4272db;
    }
</style>


<?php require("_footer.php"); ?>