<!DOCTYPE html>
	<div class="" id="top-menu">
		<button type="button" class="navbar-toggler" data-toggle="collapse" 
			data-target="#top-menu-toggle" aria-controls="top-menu-toggle" 
			aria-expanded="false" aria-label="toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		<ul  id = "top-menu-toggle"class="nav justify-content-end" >
			<sec:authorize access="hasRole('ROLE_ANONYMOUS')">
				<li class="nav-item">
					<a href="/adpostm/login" class="nav-link">sign in</a>
				</li>
				<li class="nav-item">
					<a href="/adpostm/register" class="nav-link">register</a>
				</li>
			</sec:authorize>
			
			<sec:authorize access="hasAnyRole('ADMIN','USER')">
					<li class="nav-item">
						<a href="/adpostm/home" class="nav-link">home</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">post ad</a>
					</li>
					<li class="nav-item">
						<a href="/adpostm/admin/dashboard" class="nav-link">my account</a>
					</li>
					<li class="nav-item">
						<a href="/adpostm/logout" class="nav-link">logout</a>
					</li>
					
			</sec:authorize>
		</ul>
	</div>