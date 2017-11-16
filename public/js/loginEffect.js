<script>
	function shadeOn(){
	var shader = document.getElementById("login");
	shader.style.boxShadow = "15px 40px 100px #202020";
	shader.style.transition = "1s";
	}
	
	function shadeOff(){
	var shader = document.getElementById("login");
	shader.style.boxShadow = "0px 0px 0px #202020";
	}
	
	function shadeOnReg(){
	var shader = document.getElementById("register");
	shader.style.boxShadow = "15px 40px 100px #202020";
	shader.style.transition = "1s";
	}
	
	function shadeOffReg(){
	var shader = document.getElementById("register");
	shader.style.boxShadow = "0px 0px 0px #202020";
	}
	
	function shadeChangeUIOn(){
	var shader = document.getElementById("changeUserInfo");
	shader.style.boxShadow = "15px 40px 100px #202020";
	shader.style.transition = "1s";
	}
	
	function shadeChangeUIOff(){
	var shader = document.getElementById("changeUserInfo");
	shader.style.boxShadow = "0px 0px 0px #202020";
	}
		
	function regFormFade(){
		var regForm = document.getElementById("register");
		regForm.style.opacity = "1";
		regForm.style.transition = "2s";
		
	}
	
	function shadeChangePassOn(){
	var shader = document.getElementById("changePass");
	shader.style.boxShadow = "15px 40px 100px #202020";
	shader.style.transition = "1s";
	}
	
	function shadeChangePassOff(){
	var shader = document.getElementById("changePass");
	shader.style.boxShadow = "0px 0px 0px #202020";
	}
	
	function showRegisterForm() {
		var regForm = document.getElementById("register");
		regForm.style.display = "block";
		regForm.style.opacity = "0";
		window.setTimeout(regFormFade, 10);
		
	}
	
	function shadeMassMailOn(){
	var shader = document.getElementById("massMail");
	shader.style.boxShadow = "15px 40px 100px #202020";
	shader.style.transition = "1s";
	}
	
	function shadeMassMailOff(){
	var shader = document.getElementById("massMail");
	shader.style.boxShadow = "0px 0px 0px #202020";
	}
</script>