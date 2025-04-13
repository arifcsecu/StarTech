<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Star-Tech'}}</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* Custom styles */
        .top-header {
            background-color: #f5f5f5;
        }

        .main-header {
            background-color: #01132D;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .category-nav {
            background-color: #2a41e8;
        }

        .product-card {
            transition: all 0.3s;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .deal-of-the-day {
            background-color: #fff8e6;
        }

        .footer {
            background-color: #01132D;
            color: #ffffff;
        }
    </style>
    @livewireStyles


</head>



<body>
    <!-- Main Header with Logo and Search -->
     @include('header')
    
    <!-- Category Navigation -->
    <nav class="category-nav navbar navbar-expand-lg navbar-white bg-light">
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
    </nav>

    @yield('home')

    <h3>Best Price, Product, After-sales Customer Service, & Fastest Delivery</h3>
    <p>Star Tech Ltd. has taken care of its customers since the beginning. Whether a customer is purchasing or inquiring, our customers get the highest priority. We deliver the best product for the best price with extended after-sales support & the highest standard of customer service. We offer your desired product within the fastest delivery timeframe. With our nationwide presence, we cover all 64 districts of Bangladesh. Our distribution hubs are located in Dhaka, Chattogram, Khulna, Rangpur, Gazipur, Rajshahi, and Mymensingh. We also have over 15 dedicated service centers and are proud to offer computer home service for the first time in Bangladesh. The plan to expand our operations in other cities is already in motion.</p>
    <footer class="footer pt-5 pb-3">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <h5>Information</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white-50">About Us</a></li>
                        <li><a href="#" class="text-white-50">Contact Us</a></li>
                        <li><a href="#" class="text-white-50">Privacy Policy</a></li>
                        <li><a href="#" class="text-white-50">Terms & Conditions</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5>Customer Service</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white-50">FAQ</a></li>
                        <li><a href="#" class="text-white-50">Returns</a></li>
                        <li><a href="#" class="text-white-50">Warranty Policy</a></li>
                        <li><a href="#" class="text-white-50">Shipping Policy</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5>My Account</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white-50">My Account</a></li>
                        <li><a href="#" class="text-white-50">Order History</a></li>
                        <li><a href="#" class="text-white-50">Wish List</a></li>
                        <li><a href="#" class="text-white-50">Newsletter</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5>Contact Us</h5>
                    <address class="text-white-50">
                        <p><i class="fas fa-map-marker-alt me-2"></i> 6th Floor, 28 Kazi Nazrul Islam Ave, Dhaka</p>
                        <p><i class="fas fa-phone-alt me-2"></i> 09678 111 222</p>
                        <p><i class="fas fa-envelope me-2"></i> support@startech.com.bd</p>
                    </address>
                    <div class="social-icons">
                        <a href="#" class="text-white me-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white me-2"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white me-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <hr class="my-4 bg-secondary">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-0 text-white-50">© 2025 StarTech.com Ltd. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <img src="https://www.startech.com.bd/image/catalog/payment-method.png" alt="Payment Methods"
                        class="img-fluid" style="height: 30px;">
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Countdown timer for Deal of the Day
        function updateCountdown() {
            const now = new Date();
            const endOfDay = new Date();
            endOfDay.setHours(23, 59, 59, 999);

            const diff = endOfDay - now;

            const hours = Math.floor(diff / (1000 * 60 * 60));
            const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((diff % (1000 * 60)) / 1000);

            document.getElementById('countdown').textContent =
                `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
        }

        setInterval(updateCountdown, 1000);
        updateCountdown();
    </script>
    @livewireScripts


</body>

</html>