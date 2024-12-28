
	<nav class="navbar navbar-expand-lg navbar-light bg-white">
		<i class="fa fa-bars mobile-menu"></i>
 		 <a class="navbar-brand" href="#">Logo</a>
		  	<form class="form-inline search-form">
		  		<i class="fa fa-search"></i>
		      <input class="form-control " type="search" placeholder="Search..." >
		    </form>
			<div class="col-md-2 align-self-end">
				<a class="btn btn-theme" href="{{route('logout')}}">Logout</a>
				<!-- <button type="button" class="btn btn-theme">Logout</button> -->
			</div>
			<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
			     <li class="drop">
				      <a class="nav-link bell-icon-badge" href="#">
			        	<i class="fa fa-bell-o" aria-hidden="true"></i>
			        	<span class="bell-badge">10</span>
			        </a>

				      <ul class="drop-menu">
				        <li><a href="#">Art</a></li>
				        <li><a href="">Coding</a></li>
				        <li><a href="">Design</a></li>
				        <li><a href="">Web Development</a></li>
				    </ul>
				</li>

			    <li class="nav-item">
			        <a class="nav-link user-prfile" href="#">
			        	<img src="image/user.jpg" alt="">
			        </a>
			    </li>
		</ul>
	</nav>

