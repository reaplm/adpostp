<?php 
	/*Template Name: Login*/
	get_header();
	?>	
	
 

 

<div id="pg-login">
	<div class="container">
		<?php include 'logo.php'; ?>	

		<form id="form-login" action="/adpostm/login" method="post" class="form-horizontal">
			<div class="form-group has-danger">
				<input type="text" name="username" id="username"
					class = "form-control" placeholder="Username" />
				<div class="error-div">
					<label id="username-error" class="form-control-danger" for="username">
					</label>
				</div>
			</div>

			<div class="form-group has-danger">
				<input type="password" name="password" id="password"
					class = "form-control" placeholder="Password" />
				<div class="error-div">
					<label id="password-error" class="form-control-danger"
						for="password"></label>
				</div>
			</div>

			<div class="form-group">
				<button class="btn btn-primary" onclick="submitLogin()" role="button">SUBMIT</button>
			</div>
			
			<div class="form-group">
				<a href="#">Forgot Password?</a>
				<a href="/adpostm/register" class="float-right">Register</a>
			</div>
		</form>
		<div class="font-weight-bold text-danger">${msg}</div>
		</div>

	</div>

</body>
</html>
