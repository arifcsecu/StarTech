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

    @livewireStyles

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


</head>



<body>
    <!-- Main Header with Logo and Search -->
    @include('header')
    
    <!-- Category Navigation -->
    @include('navbar')

    @yield('home')

    <!--footer section -->
    @include('footer')

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