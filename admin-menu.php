<!DOCTYPE html>
<div class="card text-capitalize" id="admin-menu">
	<div class="navbar">
		<button type="button" class="navbar-toggler hidden-lg-up 
			navbar-toggler-left pt-3" onclick="contentToggle();"
			data-toggle="collapse" data-target="#sidebar" 
			aria-controls="sidebar"
			 aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon">&#9776;</span>
		</button>
		<div id="navbar-menu" class="navbar navbar-toggleable-md justify-content-between ml-5"
			role="navigation" data-toggle="collapse"
			onClick="event.stopPropagation();">
			<a class="navbar-brand" href="/adpostm/home">ADPOST</a>
			<ul class="navbar-nav collapse" id="admin-menu-toggle">
				<sec:authorize access="hasAnyRole('ADMIN','USER')">
					<li class="nav-item"><a href="/adpostm/home" class="nav-link">home</a>
					</li>
					<li class="nav-item"><a href="#" class="nav-link">post ad</a>
					</li>
					<li class="nav-item"><a href="/adpostm/logout"
						class="nav-link">logout</a></li>

				</sec:authorize>
			</ul>
		</div>
		<button type="button" class="navbar-toggler hidden-lg-up navbar-toggler-right pt-3" 
			data-toggle="collapse" data-target="#admin-menu-toggle" 
			aria-controls="admin-menu-toggle"
			 aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon">&#x2026;</span>
		</button>
	</div>
</div>