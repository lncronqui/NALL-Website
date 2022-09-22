<header>
    <nav class="userHeader navbar navbar-expand-lg navbar-dark d-block sticky-top position-relative p-0">
        <div class="container-lg">
            <a href="#" class="navbar-brand mx-3">
                <img src="{{ url('img/nall_logo.png') }}" alt="NALL Logo" style="width:3rem;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler"
                aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse mx-lg-0 mx-3 h-100" id="navbarToggler">
                <ul class="navbar-nav mx-auto">
                    @auth
                        <li class="nav-item mx-5 py-2">
                            <a href="" class="nav-link py-4">Search</a>
                        </li>
                    @else
                        <li class="nav-item mx-5 py-2">
                            <a href="" class="nav-link py-4">Home</a>
                        </li>
                    @endauth

                    <li class="nav-item mx-5 py-2">
                        <a href="" class="nav-link py-4">About Us</a>
                    </li>
                    <li class="nav-item mx-5 py-2">
                        <a href="" class="nav-link py-4">Contact Us</a>
                    </li>

                </ul>
                <ul class="navbar-nav justify-content-end">
                    @auth
                        <li class="nav-item dropdown dropdown-hover">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                My Account
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end dropdownAccount m-0 p-0 border-0"
                                id="dropdownAccount">
                                <li class="p-0"><a href="#" class="dropdown-item text-light py-2 px-4">Settings
                                        & Privacy</a></li>
                                <li class="p-0"><a href="#" class="dropdown-item text-light py-2 px-4">Help &
                                        Support</a></li>
                                <li class="p-0">
                                    <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <button class="dropdown-item text-light py-2 px-4 pe-auto" :href="route('logout')"
                                            onclick="event.preventDefault();this.closest('form').submit();">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li><a href="/login" class="nav-link py-4 me-4">Log In</a></li>
                        <li><a href="/register" class="nav-link py-4">Register</a></li>
                    @endauth

                </ul>

            </div>
        </div>
    </nav>
</header>
