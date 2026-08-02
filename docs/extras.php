<?php
// // Change this depending on the name of your PHP or XML file
// downloadUrl('https://storage.googleapis.com/mapsdevsite/json/mapmarkers2.xml', function(data) {
//   var xml = data.responseXML;
//   var markers = xml.documentElement.getElementsByTagName('marker');
//   Array.prototype.forEach.call(markers, function(markerElem) {
//     var id = markerElem.getAttribute('id');
//     var name = markerElem.getAttribute('name');
//     var address = markerElem.getAttribute('address');
//     var type = markerElem.getAttribute('type');
//     var point = new google.maps.LatLng(
//         parseFloat(markerElem.getAttribute('lat')),
//         parseFloat(markerElem.getAttribute('lng')));
//
//     var infowincontent = document.createElement('div');
//     var strong = document.createElement('strong');
//     strong.textContent = name
//     infowincontent.appendChild(strong);
//     infowincontent.appendChild(document.createElement('br'));
//
//     var text = document.createElement('text');
//     text.textContent = address
//     infowincontent.appendChild(text);
//     var icon = customLabel[type] || {};
//     var marker = new google.maps.Marker({
//       map: map,
//       position: point,
//       label: icon.label
//     });
//     marker.addListener('click', function() {
//       infoWindow.setContent(infowincontent);
//       infoWindow.open(map, marker);
//     });
//   });
// });
// }

// var mapProp= {
//   center:new google.maps.LatLng(51.508742,-0.120850),
//   zoom:5
// };
// var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
//
// 


 ?>
