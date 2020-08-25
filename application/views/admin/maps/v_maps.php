<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>COVID-19</title>
	<link rel="icon" href="<?php echo base_url()?>img/favicon.png" type="image/png">

  <link rel="stylesheet" href="<?php echo base_url()?>vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="<?php echo base_url()?>vendors/linericon/style.css">
  <link rel="stylesheet" href="<?php echo base_url()?>vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>css/magnific-popup.css">
  <link rel="stylesheet" href="<?php echo base_url()?>vendors/flat-icon/font/flaticon.css">

  <link rel="stylesheet" href="<?php echo base_url()?>css/style.css">
</head>
<body>

  

<!-- ================ Peta Sebaran section start ================= -->
<section class="section-margin--large" id="peta" style="margin: 50px 0 0 0">
  <div class="container">
	  <div class="section-intro text-center pb-98px" style="padding: 0px 0 0 0">
        <h2 class="primary-text">Peta Sebaran</h2>
        <div class="clockdiv-content text-center">
          <p class="h4 primary-text2 mb-2">Update Terakhir : Kamis, 26 Mar 2020 </p>
          <a class="button button-link">(Data dapat berubah sewaktu-waktu)</a>
        </div>
      </div>
      <div class="d-none d-sm-block mb-5 pb-4">
        <div id="map" style="height: 580px;"></div>
        <span class="dot-black"></span> <label>Tidak ada kasus</label> &nbsp;&nbsp; 
        <span class="dot-green"></span> <label>Ada ODP</label> &nbsp;&nbsp;
        <span class="dot-orange"></span> <label>Ada PDP</label> &nbsp;&nbsp;
        <span class="dot-red"></span> <label>Ada Covid-19</label>

        <img class="card-img" src="<?php echo base_url()?>asset/img/sebaran_20200328.png" alt="">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/map-icons/dist/css/map-icons.css">
        <script type="text/javascript" src="<?php echo base_url()?>assets/map-icons/dist/js/map-icons.js"></script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0LfB5UExfSE_dd1tESwwngDexJ4W3lbY&callback=initMap" type="text/javascript"></script>
        <script>
          function initMap(){
              var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 11.2,
                center: new google.maps.LatLng(-6.7074669,111.0394578),
                mapTypeId: google.maps.MapTypeId.ROADMAP
              });

              // // permits json
              // var permits = 'map-polygon/json/pati-kab.json';
              // // load GeoJSON.
              // map.data.loadGeoJson(permits, null, function () {
              //   // create empty bounds object
              //   var bounds = new google.maps.LatLngBounds();

              //   // loop through features
              //   map.data.forEach(function(feature) {

              //       var geo = feature.getGeometry();

              //       geo.forEachLatLng(function(LatLng) {
              //           bounds.extend(LatLng);
              //       });

              //   });

              //   // fit data to bounds
              //   map.fitBounds(bounds);

              // });
  
              var infowindow = new google.maps.InfoWindow();

              var marker, i;
              var locations = [{
                                    id: 1,
                                    nama_kecamatan: "Sukolilo",
                                    odg: "0",
                                    oad: "0",
                                    odp: "11",
                                    pdp: "0",
                                    covid: "0",
                                    lat: "-6.9309357",
                                    lng: "110.915947"
                                },
                                {
                                    id: 2,
                                    nama_kecamatan: "Kayen",
                                    odg: "0",
                                    oad: "0",
                                    odp: "25",
                                    pdp: "0",
                                    covid: "0",
                                    lat: "-6.8900061",
                                    lng: "110.9873989"
                                },
                                {
                                    id: 3,
                                    nama_kecamatan: "Tambakromo",
                                    odg: "0",
                                    oad: "0",
                                    odp: "29",
                                    pdp: "0",
                                    covid: "0",
                                    lat: "-6.8731699",
                                    lng: "111.043649"
                                },
                                {
                                    id: 4,
                                    nama_kecamatan: "Winong",
                                    odg: "0",
                                    oad: "0",
                                    odp: "6",
                                    pdp: "0",
                                    covid: "0",
                                    lat: "-6.8090478",
                                    lng: "111.0987144"
                                },
                                {
                                    id: 5,
                                    nama_kecamatan: "Pucakwangi",
                                    odg: "0",
                                    oad: "0",
                                    odp: "41",
                                    pdp: "0",
                                    covid: "0",
                                    lat: "-6.8375185",
                                    lng: "111.1685759"
                                },
                                {
                                    id: 6,
                                    nama_kecamatan: "Gabus",
                                    odg: "0",
                                    oad: "0",
                                    odp: "24",
                                    pdp: "0",
                                    covid: "0",
                                    lat: "-6.8330817",
                                    lng: "111.0531673"
                                },
                                {
                                    id: 7,
                                    nama_kecamatan: "Jaken",
                                    odg: "0",
                                    oad: "0",
                                    odp: "15",
                                    pdp: "0",
                                    covid: "0",
                                    lat: "-6.7734669",
                                    lng: "111.2215821"
                                },
                                {
                                    id: 8,
                                    nama_kecamatan: "Jakenan",
                                    odg: "0",
                                    oad: "0",
                                    odp: "83",
                                    pdp: "0",
                                    covid: "0",
                                    lat: "-6.762379",
                                    lng: "111.1618828"
                                },
                                {
                                    id: 9,
                                    nama_kecamatan: "Batangan",
                                    odg: "0",
                                    oad: "0",
                                    odp: "20",
                                    pdp: "0",
                                    covid: "0",
                                    lat: "-6.7092433",
                                    lng: "111.2211837"
                                },
                                {
                                    id: 10,
                                    nama_kecamatan: "Juwana",
                                    odg: "0",
                                    oad: "0",
                                    odp: "2",
                                    pdp: "0",
                                    covid: "0",
                                    lat: "-6.7205305",
                                    lng: "111.1438986"
                                },
                                {
                                    id: 11,
                                    nama_kecamatan: "Pati",
                                    odg: "0",
                                    oad: "0",
                                    odp: "23",
                                    pdp: "0",
                                    covid: "0",
                                    lat: "-6.7550009",
                                    lng: "111.0327113"
                                },
                                {
                                    id: 12,
                                    nama_kecamatan: "Margorejo",
                                    odg: "0",
                                    oad: "0",
                                    odp: "0",
                                    pdp: "0",
                                    covid: "0",
                                    lat: "-6.7673775",
                                    lng: "111.0057394"
                                },
                                {
                                    id: 13,
                                    nama_kecamatan: "Gembong",
                                    odg: "0",
                                    oad: "0",
                                    odp: "13",
                                    pdp: "0",
                                    covid: "0",
                                    lat: "-6.7046658",
                                    lng: "110.9417408"
                                },
                                {
                                    id: 14,
                                    nama_kecamatan: "Wedarijaksa",
                                    odg: "0",
                                    oad: "0",
                                    odp: "111",
                                    pdp: "1",
                                    covid: "0",
                                    lat: "-6.6822781",
                                    lng: "111.0698455"
                                },
                                {
                                    id: 15,
                                    nama_kecamatan: "Tlogowungu",
                                    odg: "0",
                                    oad: "0",
                                    odp: "1",
                                    pdp: "0",
                                    covid: "0",
                                    lat: "-6.7066556",
                                    lng: "111.0116439"
                                },
                                {
                                    id: 16,
                                    nama_kecamatan: "Trangkil",
                                    odg: "0",
                                    oad: "0",
                                    odp: "21",
                                    pdp: "0",
                                    covid: "0",
                                    lat: "-6.657985",
                                    lng: "111.0736584"
                                },
                                {
                                    id: 17,
                                    nama_kecamatan: "Margoyoso",
                                    odg: "0",
                                    oad: "0",
                                    odp: "11",
                                    pdp: "0",
                                    covid: "0",
                                    lat: "-6.6027118",
                                    lng: "111.0504081"
                                },
                                {
                                    id: 18,
                                    nama_kecamatan: "Tayu",
                                    odg: "0",
                                    oad: "0",
                                    odp: "0",
                                    pdp: "0",
                                    covid: "0",
                                    lat: "-6.540154",
                                    lng: "111.0500331"
                                },
                                {
                                    id: 19,
                                    nama_kecamatan: "Gunungwungkal",
                                    odg: "0",
                                    oad: "0",
                                    odp: "0",
                                    pdp: "0",
                                    covid: "0",
                                    lat: "-6.565954",
                                    lng: "110.9867835"
                                },                                
                                {
                                    id: 20,
                                    nama_kecamatan: "Cluwak",
                                    odg: "0",
                                    oad: "0",
                                    odp: "0",
                                    pdp: "0",
                                    covid: "0",
                                    lat: "-6.5345479",
                                    lng: "110.9436593"
                                },
                                {
                                    id: 21,
                                    nama_kecamatan: "Dukuhseti",
                                    odg: "0",
                                    oad: "0",
                                    odp: "11",
                                    pdp: "0",
                                    covid: "0",
                                    lat: "-6.4754513",
                                    lng: "111.0352786"
                                }
                            ];
              for (i = 0; i < locations.length; i++) {  
                var icon = '';
                if(locations[i].odp == 0 && locations[i].pdp == 0 && locations[i].covid == 0){
                  icon = '<span class="map-icon map-icon-circle" id="icon-marker-black"></span>';
                }else if(locations[i].covid > 0){
                  icon = '<span class="map-icon map-icon-circle" id="icon-marker-red"></span>';
                }else if(locations[i].pdp > 0){
                  icon = '<span class="map-icon map-icon-circle" id="icon-marker-orange"></span>';
                }else if(locations[i].odp > 0){
                  icon = '<span class="map-icon map-icon-circle" id="icon-marker-green"></span>';
                }
                marker = new mapIcons.Marker({
                  position: new google.maps.LatLng(locations[i].lat, locations[i].lng),
                  map: map,
                  icon: {
                    path: mapIcons.shapes.MAP_PIN,
                    fillColor: 'white',
                    fillOpacity: 1,
                    strokeColor: '',
                    strokeWeight: 0,
                    scale: 0.4

                  },
                  map_icon_label: icon,
                  label: {
                    text: locations[i].nama_kecamatan,
                    //color: "#C70E20",
                    color: "black",
                    fontWeight: "bold",
                    fontSize : "9px"
                  }
                });

                google.maps.event.addListener(marker, 'click', (function(marker, i) {
                  return function() {
                    //var content = '<b><u>Kecamatan '+locations[i].nama_kecamatan+'</u></b> <br/> ODP Dengan Gejala:<b> '+locations[i].odg+'</b><br/> ODP Asal Datang:<b> '+locations[i].oad+'</b><br/> PDP :<b> '+locations[i].pdp+'</b><br/> Covid-19 :<b> '+locations[i].covid+'</b>';
                    var content = '<b><u>Kecamatan '+locations[i].nama_kecamatan+'</u></b> <br/> ODP :<b> '+locations[i].odp+'</b><br/> PDP :<b> '+locations[i].pdp+'</b><br/>';
                    infowindow.setContent(content);
                    infowindow.open(map, marker);
                  }
                })(marker, i));
              }
          }
            
          </script>
      </div>
    </div>
  </section>
  <!-- ================ Peta Sebaran section end ================= -->

  


  <script src="<?php echo base_url()?>vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="<?php echo base_url()?>vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url()?>vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="<?php echo base_url()?>vendors/Magnific-Popup/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo base_url()?>js/jquery.ajaxchimp.min.js"></script>
  <script src="<?php echo base_url()?>js/mail-script.js"></script>
  <script src="<?php echo base_url()?>js/countdown.js"></script>
  <script src="<?php echo base_url()?>js/jquery.magnific-popup.min.js"></script>	
  <script src="<?php echo base_url()?>js/main.js"></script>



</body>
</html>

<style>
.hero-banner-sm {
    padding-top: 20px;
    padding-bottom: 10px;
}
/* .map-icon-label .map-icon {
	font-size: 14px;
	color: red;
	line-height: 24px;
	text-align: center;
	white-space: nowrap;
} */
#icon-marker-black {
	font-size: 14px;
	color: black;
	line-height: 24px;
	text-align: center;
	white-space: nowrap;
}

#icon-marker-green {
	font-size: 14px;
	color: green;
	line-height: 24px;
	text-align: center;
	white-space: nowrap;
}

#icon-marker-orange {
	font-size: 14px;
	color: orange;
	line-height: 24px;
	text-align: center;
	white-space: nowrap;
}

#icon-marker-red {
	font-size: 14px;
	color: red;
	line-height: 24px;
	text-align: center;
	white-space: nowrap;
}

.dot-black {
  height: 15px;
  width: 15px;
  background-color: black;
  border-radius: 50%;
  display: inline-block;
}

.dot-green {
  height: 15px;
  width: 15px;
  background-color: green;
  border-radius: 50%;
  display: inline-block;
}

.dot-orange {
  height: 15px;
  width: 15px;
  background-color: orange;
  border-radius: 50%;
  display: inline-block;
}

.dot-red {
  height: 15px;
  width: 15px;
  background-color: red;
  border-radius: 50%;
  display: inline-block;
}

.hero-banner {
    position: relative;
    background: linear-gradient( rgba(150, 150, 150, 0.8), rgba(0, 0, 0, 0.7)),url(<?php echo base_url()?>img/banner/hero-banner.png) left center no-repeat;
    background-size: cover;
}
</style>
