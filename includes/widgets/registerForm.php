<form action="../public/register.php" method="POST" id="register" onmouseover="shadeOnReg()" onmouseout="shadeOffReg()" style="display:none; opacity: 0;">
<fieldset>
<legend> Become a Member </legend>
	<ul>
		<li> 
			<label for="username">Username*:</label>
			<input type="text" name="username" class="infoInput" />
		</li> <br />
		<li> 
			<label for="password">Password*:</label>
			<input type="password" name="password" class="infoInput" />
		</li> <br />
		<li> 
			<label for="re_password">Re-Password*:</label>
			<input type="password" name="re_password" class="infoInput" />
		</li> <br />
		<li>
			<label for="firstName">First Name*:</label>
			<input type="text" name="first_name" class="infoInput" />
		</li> <br />
		<li>
			<label for="lastName">Last Name :</label>
			<input type="text" name="last_name" class="infoInput" /> 
		</li> <br />
		<li>
			<label for="lastName">Email*:</label>
			<input type="text" name="email" class="infoInput" />
		</li>
	</ul>
	<input type="submit" value="Register" id="reg" /> 
	<input type="reset" value="Reset" id="res" />
</fieldset>
</form>

