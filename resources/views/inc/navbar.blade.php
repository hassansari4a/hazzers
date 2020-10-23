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
					<a href="{{ Route('cart.index') }}" class="nav-link cart-link">
						<i class="fa  fa-shopping-cart cart-icon"></i>
						<span class="badge badge badge-pill badge-info cartbadge">{{Session::has('cart') ? Session::get('cart')->totalQty:''}}</span>
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


