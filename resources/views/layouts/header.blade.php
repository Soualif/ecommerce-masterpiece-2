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

                    @if(false)
                        <h1>test working</h1>                    
                    @endif        

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav mr-auto ml-5">
							<li @if(Request::route()->getName() === "home") class="nav-item active" @else class="nav-item" @endif>
                                 <a class="nav-link" href="{{ route('home') }}"> 
                                    <i class="fa-solid fa-house"></i>
                                    Home
                                </a>
                            </li>
							
                            <li @if(Request::route()->getName() === "shop.index") class="nav-item submenu dropdown active" @else class="nav-item submenu dropdown" @endif>

								 <a href="{{ route('shop.index') }}" class="nav-link"> 
                                 <i class="fa-solid fa-shopping-bag"></i>
                                 Shop
                                </a> 
							</li>
                            <li @if(Request::route()->getName() === "contact") class="nav-item active" @else class="nav-item" @endif>

                                 <a class="nav-link" href="{{ route('contact') }}">
                                    <i class="fa-solid fa-envelope"></i>
                                    Contact
                                </a>
                            </li>
                            
						</ul>

                        <ul class="nav navbar-nav menu_nav ml-auto">
                        @guest
                        <li @if(Request::route()->getName() === "register") class="nav-item active" @else class="nav-item" @endif>
                                <a class="nav-link" href="{{ route('register')}}">
                                    <i class="fa-solid fa-user-plus"></i>
                                    Sign Up
                                </a>
                            </li>
                            <li @if(Request::route()->getName() === "login") class="nav-item submenu dropdown active" @else class="nav-item submenu dropdown" @endif>
                                <a class="nav-link" href="{{ route('login')}}">
                                    <i class="fa-solid fa-sign-in-alt"></i>
                                    Login
                                </a>
                            </li> 
                        @else
							
                        <li @if(Request::route()->getName() === "orders") class="nav-item active" @else class="nav-item" @endif>
                                 <a class="nav-link" href="{{ route('orders') }}">
                                    <i class="fa-solid fa-truck"></i>
                                    Orders
                                </a>
                            </li>
                            <li @if(Request::route()->getName() === "logout") class="nav-item active" @else class="nav-item" @endif>
                                <a class="nav-link" href="{{ route('logout') }}">
                                    <i class="fa-solid fa-sign-out-alt"></i>
                                    Logout
                                </a>
                            </li>
                        @endguest
                        <li @if(Request::route()->getName() === "cart.index") class="nav-item active" @else class="nav-item" @endif>
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
