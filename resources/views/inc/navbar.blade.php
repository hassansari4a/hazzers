<nav class="navbar navbar-expand-md navbar-light bg-white border-bottom shadow-sm sticky-top" style="margin-bottom: 10px">
  	<div class="container-fluid padding ">
	  <a href="{{route('/')}}" class="navbar-brand"><img src="{{asset('/img/LogoReal.png')}}" width="126" height="50" alt="Hazzers"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse">
			<ul class="navbar-nav ml-auto">
				@if (Auth::guest())
				<li class="nav-item">
					<a href="/login" class="nav-link">Login</a>
				</li>
				<li class="nav-item">
					<a href="/register" class="nav-link btn btn-outline-primary">Sign up</a>
				</li>
				@else
				<li class="nav-item">
					<a href="{{ Route('cart.index') }}" class="nav-link btn btn-outline-primary mx-2">
						<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            				<path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z">	
							</path>
						</svg>
					</a>
				</li>
				<li class="nav-item dropdown">
					<a href="#" class="nav-link dropdown-toggle" id="dropdownMenubutton" type="button" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
        				{{ Auth::user()->name }} <span class="caret"></span>
        			</a>
					<ul class="dropdown-menu" role="menu">
						<li>
							<a href="{{ route('newproduct')}}" class="dropdown-item text-reset font-weight-light">Add a Product</a>
						</li>
						<li>
							<a href="{{ route('myproducts')}}" class="dropdown-item text-reset font-weight-light">My Products</a>
						</li>
						<li>
							<a href="/logout" class=" dropdown-item  text-reset font-weight-light"
								onclick="event.preventDefault();
								document.getElementById('logout-form').submit();">
									Log out
							</a>

							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                				{{ csrf_field() }}
            				</form>
						</li>
						
					</ul>
				</li>
				@endif
			</ul>
		</div>
	</div>
</nav>


