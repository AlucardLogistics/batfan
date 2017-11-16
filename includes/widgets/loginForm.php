<form action="login.php" method="POST" id="login" onmouseover="shadeOn()" onmouseout="shadeOff()">
<fieldset>
<legend> Login / Register </legend>
	<ul class="reg_form">
		<li> 
			<label class="login_display" for="username">Username:</label>
			<input type="text" name="username" class="infoInput" />
		</li> <br />
		<li> 
			<label class="login_display" for="password">Password:</label>
			<input type="password" name="password" class="infoInput" />
		</li> <br />
		<li>
			<p class="recovery">Forgotten <a href="recover.php?mode=username">username</a> or <a href="recover.php?mode=password">password</a></p>
		</li>
	</ul>	
	<input name="Submit" type="submit" value="Log in" id="sub" /> 
	<input name="button" type="button" value="Register" id="reg" onClick="showRegisterForm()" />
</fieldset>
</form>