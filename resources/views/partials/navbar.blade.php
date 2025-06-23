<nav class="navbar navbar-expand-lg navbar-dark bg-black">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('img/prs.png') }}" alt="PRS Logo" style="height: 40px;">
            Sean's Guitars
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
            aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Shop
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">All Guitars</a></li>
                        <li><a class="dropdown-item" href="#">Electric Guitars</a></li>
                        <li><a class="dropdown-item" href="#">Acoustic Guitars</a></li>
                        <li><a class="dropdown-item" href="#">Bass Guitars</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Accessories</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link active" href="#">About</a></li>
                <li class="nav-item"><a class="nav-link active" href="#">Blog</a></li>
                <li class="nav-item"><a class="nav-link active" href="#">Contact</a></li>
            </ul>

            <div class="d-flex align-items-center gap-2">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                </form>
                <button class="btn btn-outline-info"><i class="bi bi-cart4"></i> Cart</button>
                <button class="btn btn-outline-info"><i class="bi bi-person-circle"></i> Login</button>
            </div>
        </div>
    </div>
</nav>
