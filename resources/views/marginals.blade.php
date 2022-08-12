    <header>
        <nav class="userHeader navbar navbar-expand-lg navbar-dark d-block sticky-top position-relative">
            <div class="container-lg">
                <a href="#" class="navbar-brand mx-3">
                    <img src="{{ url('img/nall_logo.png') }}" alt="NALL Logo" style="width:3rem;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler"
                    aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse mx-lg-0 mx-3" id="navbarToggler">
                    <ul class="navbar-nav ms-lg-5">
                        <li class="nav-item my-lg-0 mt-2 me-4">
                            <a href="" class="nav-link">Explore</a>
                        </li>
                        <li class="nav-item my-lg-0 me-4 mt-2">
                            <a href="" class="nav-link">About Us</a>
                        </li>
                        <li class="nav-item my-lg-0 me-4 mt-2">
                            <a href="" class="nav-link">Contact Us</a>
                        </li>

                    </ul>
                    <ul class="navbar-nav ms-auto my-lg-0 me-0 mt-2 justify-content-end">
                        <li class="nav-item dropdown dropdown-hover">
                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                My Account
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end dropdownAccount m-0 p-0 border-0"
                                id="dropdownAccount">
                                <li class="p-0"><a href="#" class="dropdown-item text-light py-2 px-4">Settings
                                        & Privacy</a></li>
                                <li class="p-0"><a href="#" class="dropdown-item text-light py-2 px-4">Help &
                                        Support</a></li>
                                <li class="p-0"><a href="#"
                                        class="dropdown-item text-light py-2 px-4">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="nallHeader text-light mx-auto py-3">
            <div class="container-lg d-flex justify-content-center">
                <img src="{{ url('img/nall_logo.png') }}" class="mx-2" alt="NALL Logo" style="width:3rem;">
                <div class="nallHeader-title mx-2 my-auto">
                    Network of Academic<br>Law Librarians, Inc.
                </div>
            </div>
        </div>
    </header>
    <footer>
        <div class="userFooter fixed-bottom text-light text-center py-3">
            <p class="p-0 m-0">©2022 A Gateway to Open Access Legal<br class="d-lg-none d-block"> Resources in the
                Philippines All rights reserved.</p>
        </div>
    </footer>
