<header class="main-header py-4">
    <div class="container-fluid">
        <!-- flex row that won't wrap -->
        <div class="d-flex align-items-center flex-nowrap">

            <!-- Logo (fixed size) -->
            <div class="flex-shrink-0 me-3">
                <a href="/">
                    <img src="https://www.startech.com.bd/image/catalog/logo.png" alt="StarTech Logo" class="img-fluid"
                        style="max-height: 40px;">
                </a>
            </div>

            <!-- Search (flexible) -->
            <div class="flex-grow-1 me-3">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>

            <!-- 4‑item menu (fixed size) -->
            <div class="flex-shrink-0">         
                    <ul class="nav gap-4 align-items-center">
                        <!-- Offers -->
                        <li class="nav-item">
                            <a href="/offers" class="d-flex align-items-start text-white text-decoration-none">
                                <i class="bi bi-bag-fill fs-4 me-2" style="color: #EF4A23;"></i>
                                <div class="lh-sm">
                                    <div class="fw-semibold">Offers</div>
                                    <small class="text-white-50">Latest Offers</small>
                                </div>
                            </a>
                        </li>

                        <!-- Happy Hour -->
                        <li class="nav-item">
                            <a href="/happy-hour" class="d-flex align-items-start text-white text-decoration-none">
                                <i class="bi bi-lightning-fill fs-4 me-2" style="color: #EF4A23;"></i>
                                <div class="lh-sm">
                                    <div class="fw-semibold">Happy Hour</div>
                                    <small class="text-white-50">Special Deals</small>
                                </div>
                            </a>
                        </li>

                        <!-- Account -->
                        <li class="nav-item">
                            <a href="/login" class="d-flex align-items-start text-white text-decoration-none">
                                <i class="bi bi-person-fill fs-4 me-2" style="color: #EF4A23;"></i>
                                <div class="lh-sm">
                                    <div class="fw-semibold">Account</div>
                                    <small class="text-white-50">Register or Login</small>
                                </div>
                            </a>
                        </li>

                        <!-- PC Builder -->
                        <li class="nav-item text-center">
                            <a href="/pc-builder" class="btn fw-bold text-white px-4 py-2 rounded"
                                style="background: linear-gradient(135deg, #00BFFF, #1E90FF); border: none;">
                                PC Builder
                            </a>
                        </li>
                    </ul>
            </div>
        </div>
    </div>
</header>