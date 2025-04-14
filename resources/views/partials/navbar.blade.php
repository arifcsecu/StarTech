<nav class="bg-white border-bottom py-2">
    <div class="container d-flex flex-wrap justify-content-start gap-3">
        <div x-data="{ open: false }" @mouseleave="open = false" class="position-relative">
            <a href="#" @mouseover="open = true" class="text-dark text-decoration-none fw-semibold">Desktop</a>
            <div x-show="open"
                 x-transition
                 class="position-absolute bg-white shadow rounded p-2 mt-2"
                 style="z-index: 999;">
                <a href="#" class="d-block text-dark text-decoration-none py-1">Desktop Offer</a>
                <a href="#" class="d-block text-dark text-decoration-none py-1">Star PC</a>
                <a href="#" class="d-block text-dark text-decoration-none py-1">Gaming PC</a>
                <a href="#" class="d-block text-dark text-decoration-none py-1">Brand PC</a>
                <a href="#" class="d-block text-dark text-decoration-none py-1">All-in-One PC</a>
                <a href="#" class="d-block text-dark text-decoration-none py-1">Portable Mini PC</a>
                <a href="#" class="d-block text-dark text-decoration-none py-1">Apple Mac Mini</a>
                <a href="#" class="d-block text-dark text-decoration-none py-1">Apple iMac</a>
                <a href="#" class="d-block text-dark text-decoration-none py-1">Apple Mac Studio</a>
                <a href="#" class="d-block text-dark text-decoration-none py-1">Apple Mac Pro</a>
                <a href="#" class="d-block text-dark text-decoration-none py-1">Show All Desktop</a>
            </div>
        </div>

        <div x-data="{ open: false }" @mouseleave="open = false" class="position-relative">
            <a href="#" @mouseover="open = true" class="text-dark text-decoration-none fw-semibold">Laptop</a>
            <div x-show="open"
                 x-transition
                 class="position-absolute bg-white shadow rounded p-2 mt-2"
                 style="z-index: 999;">
                <a href="#" class="d-block text-dark text-decoration-none py-1">Gaming Laptop</a>
                <a href="#" class="d-block text-dark text-decoration-none py-1">Ultrabook</a>
                <a href="#" class="d-block text-dark text-decoration-none py-1">Business</a>
            </div>
        </div>
     
        <a href="#" class="text-dark text-decoration-none fw-semibold">Component</a>
        <a href="#" class="text-dark text-decoration-none fw-semibold">Monitor</a>
        <a href="#" class="text-dark text-decoration-none fw-semibold">UPS</a>
        <a href="#" class="text-dark text-decoration-none fw-semibold">Phone</a>
        <a href="#" class="text-dark text-decoration-none fw-semibold">Tablet</a>
        <a href="#" class="text-dark text-decoration-none fw-semibold">Office Equipment</a>
        <a href="#" class="text-dark text-decoration-none fw-semibold">Camera</a>
        <a href="#" class="text-dark text-decoration-none fw-semibold">Security</a>
        <a href="#" class="text-dark text-decoration-none fw-semibold">Networking</a>
        <a href="#" class="text-dark text-decoration-none fw-semibold">Software</a>
        <a href="#" class="text-dark text-decoration-none fw-semibold">Server & Storage</a>
        <a href="#" class="text-dark text-decoration-none fw-semibold">Accessories</a>
        <a href="#" class="text-dark text-decoration-none fw-semibold">Gadget</a>
        <a href="#" class="text-dark text-decoration-none fw-semibold">Gaming</a>
        <a href="#" class="text-dark text-decoration-none fw-semibold">TV</a>
        <a href="#" class="text-dark text-decoration-none fw-semibold">Appliance</a>
    </div>
</nav>

<!-- <nav class="category-nav navbar navbar-expand-lg navbar-white bg-light">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCategories">
            <span class="navbar-toggler-icon"></span> All Categories
        </button>
        <div class="collapse navbar-collapse" id="navbarCategories">
            <ul class="navbar-nav me-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#">Desktop</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#">Laptop</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#">Component</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#">Monitor</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#">UPS</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#">Phone</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#">Tablet</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#">Office Equipment</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#">Camera</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#">Security</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#">Networking</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#">Software</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#">Server & Stoarge</a>
                </li>
            </ul>
        </div>
    </div>
</nav> -->

<!-- <nav class="category-nav navbar navbar-expand-lg navbar-white bg-light">
    <div class="container">
        <div class="d-flex flex-nowrap w-100">
            <button class="navbar-toggler me-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCategories">
                <span class="navbar-toggler-icon"></span> All
            </button>
            <div class="collapse navbar-collapse overflow-auto" id="navbarCategories" style="max-height: 60px;">
                <ul class="navbar-nav flex-nowrap">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#">Desktop</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#">Laptop</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#">Component</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#">Monitor</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#">UPS</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#">Phone</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#">Tablet</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#">Office Equipment</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#">Camera</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#">Security</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#">Networking</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#">Software</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#">Server & Stoarge</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav> -->