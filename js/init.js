$(document).ready(function(){
	$(".contact_button").click(contact);
	if(document.getElementById("mobile_menu_icon")){
		document.getElementById("mobile_menu_icon").addEventListener("click", function(){
			document.getElementById("mobile_menu_container").style.display="block";
		}, false);
	}
	if(document.getElementById("menu_drawer_cancel")){
		document.getElementById("menu_drawer_cancel").addEventListener("click", function(){
			document.getElementById("mobile_menu_container").style.display="none";
		}, false);
	}
});

var buffer=new Buffer();
buffer.render=function(cont){
	buffer.setAttribute("id", "buffer");
	buffer.style.display="block";//remains with none attribute, so we either set this display or remove it on done()
	var statements=new Array("Sending Request", "In Just a Moment", "Stream Live");
	var thisStatement=0;
	buffer.innerHTML=statements[thisStatement];
	setInterval(function (){
		thisStatement++;
		if(thisStatement==statements.length){
			thisStatement=0;
		}
		buffer.innerHTML=statements[thisStatement];
	}, 5000);
	document.getElementById(cont).appendChild(buffer);//we don't use the jquery selector here bcoz it'll think thisz an elem
}
buffer.done=function(){
	buffer.style.display="none";
}

function Buffer(){
	return _("div");
}

function _(tag_name){
	return document.createElement(tag_name);
}

function $(x){
	return document.getElementById(x);
}
