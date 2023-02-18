<main>
    <nav class="navbar navbar-expand-lg">
        <div class=" container">
            <div class="d-flex flex-row">
                <a class="navbar-brand logo-unicon" href="/tiket">
                    <img src="{{asset('assets/tema')}}/images/uniconweb.png?07022023.001" type="png" poster="">
                </a>

                <p class="navbar-brand text-by">by</p>

                <a class="navbar-brand logo-kalsel-unite" href="/tiket">
                    <img src="{{asset('assets/tema')}}/images/kalselunite.png?07022023.001" type="png" poster="">
                </a>
            </div>

            <a href="/tiket" class="btn custom-btn d-lg-none ms-auto me-4 button-beli">Beli Ticket!</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav align-items-lg-center ms-auto me-lg-5 text-center">
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_1">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_2">Guest Stars</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_3">Sneak Peak</a>
                    </li>

                    <li class="nav-item section_4_navbar">
                        <a class="nav-link click-scroll " href="#section_4">Events Hub</a>
                    </li>

                    <li class="nav-item section_5_navbar">
                        <a class="nav-link click-scroll " href="#section_5">Ticket</a>
                    </li>


                    <div class="dropdown">
                        <button class="nav-itembtn nav-item dropdown-toggle text-white border-0 bg-transparent" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            More
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item section_4_dropdown" href="#section_4">Events Hub</a></li>
                            <li><a class="dropdown-item section_5_dropdown" href="#section_5">Ticket</a></li>
                            <li><a class="dropdown-item" href="/daftar-booth">Daftar Booth</a></li>
                        </ul>
                    </div>

                </ul>

                <a href="/tiket" class="btn custom-btn d-lg-block d-none button-beli">Beli Tiket!</a>
            </div>
        </div>
    </nav>