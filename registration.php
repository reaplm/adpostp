<?php 
	/*Template Name: Registration*/
	get_header();
	?>	
	<div  id="pg-register">
			<div class="container">
				<?php include 'logo.php' ?>
				<form id="form-register" action="/adpostm/register" method="post" class="form-horizontal">
						<div class="form-group clearfix has-danger">
							<div class="col-sm-6">
								<input type="text" name="fname"
								class = "form-control" placeholder="First Name" />
								<div class="error-div">
									<label id="fname-error" class="form-control-danger" 
										for="fname"></label>
								</div>
							</div>
							<div class="col-sm-6">
								<input type="text" name="lname"
								class = "form-control" placeholder="Last Name" />
								<div class="error-div">
									<label id="lname-error" class="form-control-danger" 
										for="lname"></label>
								</div>
							</div>
						</div>
						<div class="form-group has-danger">
							<input type="text" name="email"
								class = "form-control" placeholder="Email" />
								<div class="error-div">
									<label id="email-error" class="form-control-danger" 
										for="email"></label>
								</div>
						</div>
						<div class="form-group clearfix has-danger">
							<div class="col-sm-6">
								<input type="password" name="password"
								class = "form-control" placeholder="Password" />
								<div class="error-div">
									<label id="password-error" class="form-control-danger" 
										for="password"></label>
								</div>
							</div>
							<div class="col-sm-6">
								<input type="password" name="passRepeat"
								class = "form-control" placeholder="Re-type Password" />
								<div class="error-div">
									<label id="passRepeat-error" class="form-control-danger" 
										for="passRepeat"></label>
								</div>
							</div>
						</div>
					
						<div class="form-group">
							<button class="btn btn-primary" onclick="SubmitRegistration()" >SUBMIT</button>
						</div>
				</form>
				<div>${msg}</div>
			</div>
		</div>
	</body>
</html>