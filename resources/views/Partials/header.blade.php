<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <img src="assets/images/klassy-logo.png" align="klassy cafe html template">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="#about">

                            @if (Route::has('login'))

                                @auth


                                        @else

                                    @if (Route::has('register'))
                                        <li class="submenu"><a href="{{ route('register') }}">Register</a>
                                        <ul>
                                            <li>
                                                <a href="{{ route('login') }}" >Log in</a>
                                            </li>
                                        </ul>
                                        </li>
                                    @endif
                                @endauth
                                @endif

                                </a>
                        </li>
                        @auth


                        <li class="scroll-to-section submenu">
                            <a href="{{ url('/dashboard') }}" >Dashboard</a>

                            <ul>
                                <li><a href="{{ route('profile.show') }}">
                                    {{ __('Profile') }}</a>
                                </li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <li>
                                    <a href="{{ route('logout') }}"
                                             onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </a>
                                </li>
                                </form>
                            </ul>
                        </li>
                        @endauth
                        <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                        <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                        <li class="scroll-to-section"><a href="#chefs">Chefs</a></li>
                        <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li>
                        <li class="scroll-to-section">
                            @auth
                            <a href="{{ url('/showcart',Auth::user()->id) }}">
                            Cart
                            [{{ $count }}]
                            </a>
                            @endauth

                            @guest
                                Add Cart
                            @endguest
                       </li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>

                </nav>
            </div>
        </div>
    </div>
</header>

