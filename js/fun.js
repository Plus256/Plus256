$(document).ready(function(){
	$("#signup_button").click(signUp);
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

function signUp(){
	document.getElementById("signup_footer").innerHTML="Sending...";
	var xhr;
	var url="inc/fun.php?signup_req";
	var email=document.getElementById("signup_email").value;
	var fd="email="+email+"";
	if(window.XMLHttpRequest){
		xhr=new XMLHttpRequest();
	}
	else{
		xhr=new ActiveXObject("Microsoft:XMLHTTP");
	}
	xhr.open("POST", url);
	xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhr.onreadystatechange=function(){
		if(xhr.readyState==4 && xhr.status==200){
			var data=xhr.responseText;
			//console.log(data);
			var fed_b;
			switch(data){
				case "0":
					fed_b="Sala Pulesa, you're already subscribed."
					document.getElementById("signup_footer").style.color="#09F";
				break;
				case "2":
					fed_b="Congratulations! Check your mail for cool stuff."
					document.getElementById("signup_footer").style.color="#090";
				break;
				case "3":
					fed_b="Sorry, something went wrong! Please try again later."
					document.getElementById("signup_footer").style.color="#F00";
				break;
				case "4":
					fed_b="Please enter an Email Address."
					document.getElementById("signup_footer").style.color="#F00";
				break;
				case "1":
					fed_b="Make sure the Email Address is valid."
					document.getElementById("signup_footer").style.color="#F00";
				break;
			}
			document.getElementById("signup_footer").innerHTML=fed_b;
			setTimeout(function (){
					document.getElementById("signup_footer").innerHTML="&nbsp;";
					//document.getElementById("signup_email").value="";
			}, 2000);
		}
	}
	xhr.send(fd);
}