<!-- Start Header Area -->
<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav mr-auto ml-5">
							<li class="nav-item active">
                                 <a class="nav-link" href="{{ route('home') }}"> 
                                    <i class="fa-solid fa-house"></i>
                                    Home
                                </a>
                            </li>
							<li class="nav-item submenu dropdown">
								 <a href="{{ route('shop.index') }}" class="nav-link"> 
                                 <i class="fa-solid fa-shopping-bag"></i>
                                 Shop
                                </a> 
							</li>
							<li class="nav-item">
                                 <a class="nav-link" href="{{ route('contact') }}">
                                    <i class="fa-solid fa-envelope"></i>
                                    Contact
                                </a>
                            </li>
                            
						</ul>

                        <ul class="nav navbar-nav menu_nav ml-auto">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register')}}">
                                    <i class="fa-solid fa-user-plus"></i>
                                    Sign Up
                                </a>
                            </li>
                            <li class="nav-item submenu dropdown">
                                <a class="nav-link" href="{{ route('login')}}">
                                    <i class="fa-solid fa-sign-in-alt"></i>
                                    Login
                                </a>
                            </li> 
                        @else
							<li class="nav-item submenu dropdown">
								<a href="{{ route('login') }}" class="nav-link "><i class="fa-solid fa-sign-in-alt"></i>Login</a>
							</li>
							<li class="nav-item">
                                 <a class="nav-link" href="{{ route('orders') }}">
                                    <i class="fa-solid fa-truck"></i>
                                    Orders
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}">
                                    <i class="fa-solid fa-sign-out-alt"></i>
                                    Logout
                                </a>
                            </li>
                        @endguest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('cart.index') }}"> 
                                    <i class="fa-solid fa-shopping-cart"></i>
                                    Cart
                                    @if(Cart::instance('default')->count() > 0)
                                        <span class="badge badge-primary">{{ Cart::instance('default')->count() }}</span>
                                    @endif
                                </a>
                            </li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		
	</header>
	<!-- End Header Area -->
