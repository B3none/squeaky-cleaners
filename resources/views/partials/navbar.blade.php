<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
        <a class="navbar-brand" href="/">
            Squeaky Cleaners
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item {{ Request::path() == 'about' ? 'active' : '' }}">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item {{ Request::path() == 'services' ? 'active' : '' }}">
                    <a class="nav-link" href="/services">Services</a>
                </li>
                <li class="nav-item {{ Request::path() == 'contact' ? 'active' : '' }}">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>