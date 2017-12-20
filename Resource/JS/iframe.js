var x = false;


window.addEventListener("scroll", function(event){
	// dapatin posisi scroll
	if(window.pageYOffset > 700)
	{
		x = true;
		navbar();
	}
	else if(window.pageYOffset < 600)
	{
		x = false;
		navbar();
	}
}, false);

function navbar()
{
	var a = document.getElementById("navigationoff");
	var a1 = document.getElementById("navigation");
	var b = document.getElementById("mom");
	var c = document.getElementById("child");
	if(x)
	{
		// a dijadikan anak dari b
		b.appendChild(a);
		// dirubah idnya
		a.id = "navigation";
	}
	else
	{
		a1.id = "navigationoff";
		c.appendChild(a1);
	}
	
}

/* ganti ncontent iframe */

function chagecontent(x)
{
	switch(x)
	{
		case 0:
			document.getElementById("frameContent").src = "home/home.html";
			setheight(0);
		break;
		case 1:
			document.getElementById("frameContent").src = "palembang/palembang.html";
			setheight(1);
		break;
		case 2:
			document.getElementById("frameContent").src = "GunungKidul.html";
			setheight(2);
		break;
		case 3:
			document.getElementById("frameContent").src = "RekomendasiDestinasi.html";
			setheight(3);
		break;
		case 4:
			document.getElementById("frameContent").src = "coba/web.html";
			setheight(4);
		break;

	}
}


/*ganti size containernya*/
function setheight(x){
	if(document.getElementById("frameContent").classList.contains('height0'))
	{
		document.getElementById("frameContent").classList.remove('height0');
	}
	else if(document.getElementById("frameContent").classList.contains('height1'))
	{
		document.getElementById("frameContent").classList.remove('height1');
	}
	else if(document.getElementById("frameContent").classList.contains('height2'))
	{
		document.getElementById("frameContent").classList.remove('height2');
	}
	else if(document.getElementById("frameContent").classList.contains('height3'))
	{
		document.getElementById("frameContent").classList.remove('height3');
	}
	else if(document.getElementById("frameContent").classList.contains('height4'))
	{
		document.getElementById("frameContent").classList.remove('height4');
	}

	switch(x){
		case 0:
			document.getElementById("frameContent").classList.add('height0');
		break;
		case 1:
			document.getElementById("frameContent").classList.add('height1');
		break;
		case 2:
			document.getElementById("frameContent").classList.add('height2');
		break;
		case 3:
			document.getElementById("frameContent").classList.add('height3');
		break;
		case 4:
			document.getElementById("frameContent").classList.add('height4');
		break;
	}
}

function resizeIframe(obj) {
    obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
  }
