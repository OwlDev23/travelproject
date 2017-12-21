function showdialogmodal()
{
	var modal = document.getElementById('myModal');
	var modal1 = document.getElementById('myModal1');
	var modal2 = document.getElementById('myModal2');
	var btn = document.getElementById("myBtn");
	var btn1 = document.getElementById("myBtn1");
	var btn2 = document.getElementById("myBtn2");
	var span = document.getElementsByClassName("close")[0];
	var span1 = document.getElementsByClassName("close")[1];
	var span2 = document.getElementsByClassName("close")[2];

		btn.onclick = function() {
		    modal.style.display = "block";
		}

		btn1.onclick = function() {
		    modal1.style.display = "block";
		}

		btn2.onclick = function() {
		    modal2.style.display = "block";
		}

		span.onclick = function() {
		    modal.style.display = "none";
		}

		span1.onclick = function() {
		    modal1.style.display = "none";
		}

		span2.onclick = function() {
		    modal2.style.display = "none";
		} 
		window.onclick = function(event) {
		    if (event.target == modal) {
		        modal.style.display = "none";
		    }
		    else if(event.target == modal1) {
		        modal1.style.display = "none";
		    }
		    else if(event.target == modal2) {
		        modal2.style.display = "none";
		    }
		}
}

var LatLngX = 0;
var LatLngY = 0;
var text = "";
var setdefault = true;
var zoom = 9;
function myMap() 
{
	/*var mapProp= 
	{
		center:new google.maps.LatLng(-2.991449, 104.763306),
		zoom:8,
	};
	var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);*/
	if(setdefault)
	{
		LatLngX = -2.991449;
		LatLngY = 104.763306;
	}
	var myCenter = new google.maps.LatLng(LatLngX, LatLngY);
  	var mapCanvas = document.getElementById("googleMap");
  	var mapOptions = {center: myCenter, zoom: zoom};
 	var map = new google.maps.Map(mapCanvas, mapOptions);
  	var marker = new google.maps.Marker({position:myCenter});
  	marker.setMap(map);

  	if (text !== "") {
  		var infowindow = new google.maps.InfoWindow({
    	content: text
		});
	infowindow.open(map,marker);
  	}
  	setdefault = true;
}

function temampoint(){
	setdefault = false;
	LatLngX = -3.300161;
	LatLngY = 102.857344;
	text = "Air Terjun Temam"
	zoom = 10;
	myMap();
}

function ampera(){
	setdefault = false;
	LatLngX = -2.991849;
	LatLngY = 104.763617;
	text = "Jembatan Ampera"
	zoom = 10;
	myMap();
}

function kemaro(){
	setdefault = false;
	LatLngX = -2.978750;
	LatLngY = 104.817430;
	text = "Pulau kemaro"
	zoom = 10;
	myMap();
}

function punti(){
	setdefault = false;
	LatLngX = -2.943844;
	LatLngY = 104.728262;
	text = "Hutan Punti Kayu"
	zoom = 10;
	myMap();
}

