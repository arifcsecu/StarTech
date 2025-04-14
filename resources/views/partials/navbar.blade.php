<nav class="bg-white border-bottom py-2">
    <div class="container d-flex flex-wrap justify-content-start gap-1">

        <div x-data="{ open: false }" class="position-relative" @mouseenter="open = true" @mouseleave="open = false"
            style="display: inline-block;">
            <a href="#" class="text-dark text-decoration-none fw-semibold pe-1">Desktop</a>

            <div x-show="open" x-transition class="position-absolute bg-white shadow rounded mt-2 p-3"
                style="z-index: 1050; min-width: 200px; width: 250px;" @mouseenter="open = true"
                @mouseleave="open = false">
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

        <div x-data="{ open: false }" class="position-relative" @mouseenter="open = true" @mouseleave="open = false"
            style="display: inline-block;">
            <a href="#" class="text-dark text-decoration-none fw-semibold pe-1">Laptop</a>

            <div x-show="open" x-transition class="position-absolute bg-white shadow rounded mt-2 p-3"
                style="z-index: 1050; min-width: 200px; width: 250px;" @mouseenter="open = true"
                @mouseleave="open = false">
                <a href="#" class="d-block text-dark text-decoration-none py-1">All Laptop</a>

                <div x-data="{ subOpen: false }" class="position-relative" @mouseenter="subOpen = true"
                    @mouseleave="subOpen = false">
                    <a href="#" class="d-block text-dark text-decoration-none py-1 pe-4">
                        Gaming Laptop ▶
                    </a>

                    <!-- Sub-subcategory -->
                    <div x-show="subOpen" x-transition class="position-absolute bg-white shadow rounded p-2"
                        style="top: 0; left: 100%; min-width: 200px; z-index: 1060;">
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Entry-Level Gaming</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">High-End Gaming</a>
                    </div>
                </div>

                <div x-data="{ subOpen: false }" class="position-relative" @mouseenter="subOpen = true"
                    @mouseleave="subOpen = false">

                    <a href="#"
                        class="d-flex justify-content-between align-items-center text-dark text-decoration-none py-1">
                        Premium Ultrabook
                        <span class="ms-2">▶</span>
                    </a>

                    <!-- Sub-subcategory -->
                    <div x-show="subOpen" x-transition class="position-absolute bg-white shadow rounded p-2"
                        style="top: 0; left: 100%; min-width: 200px; z-index: 1060;">
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Entry-Level Gaming</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">High-End Gaming</a>
                    </div>
                </div>

                <a href="#" class="d-block text-dark text-decoration-none py-1">Laptop Bag</a>
                <a href="#" class="d-block text-dark text-decoration-none py-1">Laptop Accessories</a>
                <a href="#" class="d-block text-dark text-decoration-none py-1">Show All Laptop</a>
            </div>
        </div>

        <div x-data="{ open: false }" class="position-relative" @mouseenter="open = true" @mouseleave="open = false"
            style="display: inline-block;">
            <a href="#" class="text-dark text-decoration-none fw-semibold pe-1">Component</a>

            <div x-show="open" x-transition class="position-absolute bg-white shadow rounded mt-2 p-3"
                style="z-index: 1050; min-width: 200px; width: 250px;" @mouseenter="open = true"
                @mouseleave="open = false">
                <a href="#" class="d-block text-dark text-decoration-none py-1">Gaming Laptop</a>
                <a href="#" class="d-block text-dark text-decoration-none py-1">Ultrabook</a>
                <a href="#" class="d-block text-dark text-decoration-none py-1">Business</a>
                <a href="#" class="d-block text-dark text-decoration-none py-1">Student Laptop</a>
            </div>
        </div>

        <div x-data="{ open: false }" class="position-relative" @mouseenter="open = true" @mouseleave="open = false"
            style="display: inline-block;">
            <a href="#" class="text-dark text-decoration-none fw-semibold pe-1">Monitor</a>

            <div x-show="open" x-transition class="position-absolute bg-white shadow rounded mt-2 p-3"
                style="z-index: 1050; min-width: 200px; width: 250px;" @mouseenter="open = true"
                @mouseleave="open = false">
                <a href="#" class="d-block text-dark text-decoration-none py-1">Gaming Laptop</a>
                <a href="#" class="d-block text-dark text-decoration-none py-1">Ultrabook</a>
                <a href="#" class="d-block text-dark text-decoration-none py-1">Business</a>
                <a href="#" class="d-block text-dark text-decoration-none py-1">Student Laptop</a>
            </div>
        </div>

        <div x-data="{ open: false }" class="position-relative" @mouseenter="open = true" @mouseleave="open = false"
            style="display: inline-block;">
            <a href="#" class="text-dark text-decoration-none fw-semibold pe-1">UPS</a>

            <div x-show="open" x-transition class="position-absolute bg-white shadow rounded mt-2 p-3"
                style="z-index: 1050; min-width: 200px; width: 250px;" @mouseenter="open = true"
                @mouseleave="open = false">
                <a href="#" class="d-block text-dark text-decoration-none py-1">Gaming Laptop</a>
                <a href="#" class="d-block text-dark text-decoration-none py-1">Ultrabook</a>
                <a href="#" class="d-block text-dark text-decoration-none py-1">Business</a>
                <a href="#" class="d-block text-dark text-decoration-none py-1">Student Laptop</a>
            </div>
        </div>

        <div x-data="{ open: false }" class="position-relative" @mouseenter="open = true" @mouseleave="open = false"
            style="display: inline-block;">
            <a href="#" class="text-dark text-decoration-none fw-semibold pe-1">Phone</a>

            <div x-show="open" x-transition class="position-absolute bg-white shadow rounded mt-2 p-3"
                style="z-index: 1050; min-width: 200px; width: 250px;" @mouseenter="open = true"
                @mouseleave="open = false">
                <a href="#" class="d-block text-dark text-decoration-none py-1">Gaming Laptop</a>
                <a href="#" class="d-block text-dark text-decoration-none py-1">Ultrabook</a>
                <a href="#" class="d-block text-dark text-decoration-none py-1">Business</a>
                <a href="#" class="d-block text-dark text-decoration-none py-1">Student Laptop</a>
            </div>
        </div>


        <div x-data="{ open: false }" class="position-relative" @mouseenter="open = true" @mouseleave="open = false"
            style="display: inline-block;">
            <a href="#" class="text-dark text-decoration-none fw-semibold pe-1">Tablet</a>

            <div x-show="open" x-transition class="position-absolute bg-white shadow rounded mt-2 p-3"
                style="z-index: 1050; min-width: 200px; width: 250px;" @mouseenter="open = true"
                @mouseleave="open = false">
                <a href="#" class="d-block text-dark text-decoration-none py-1">Gaming Laptop</a>
                <a href="#" class="d-block text-dark text-decoration-none py-1">Ultrabook</a>
                <a href="#" class="d-block text-dark text-decoration-none py-1">Business</a>
                <a href="#" class="d-block text-dark text-decoration-none py-1">Student Laptop</a>
            </div>
        </div>

        <div x-data="{ open: false }" class="position-relative" @mouseenter="open = true" @mouseleave="open = false"
            style="display: inline-block;">
            <a href="#" class="text-dark text-decoration-none fw-semibold pe-1">Office Equipment</a>

            <div x-show="open" x-transition class="position-absolute bg-white shadow rounded mt-2 p-3"
                style="z-index: 1050; min-width: 200px; width: 250px;" @mouseenter="open = true"
                @mouseleave="open = false">
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

        <div x-data="{ open: false }" class="position-relative" @mouseenter="open = true" @mouseleave="open = false"
            style="display: inline-block;">
            <a href="#" class="text-dark text-decoration-none fw-semibold pe-1">Camera</a>

            <div x-show="open" x-transition class="position-absolute bg-white shadow rounded mt-2 p-3"
                style="z-index: 1050; min-width: 200px; width: 250px;" @mouseenter="open = true"
                @mouseleave="open = false">
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

        <div x-data="{ open: false }" class="position-relative" @mouseenter="open = true" @mouseleave="open = false"
            style="display: inline-block;">
            <a href="#" class="text-dark text-decoration-none fw-semibold pe-1">Security</a>

            <div x-show="open" x-transition class="position-absolute bg-white shadow rounded mt-2 p-3"
                style="z-index: 1050; min-width: 200px; width: 250px;" @mouseenter="open = true"
                @mouseleave="open = false">
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

        <div x-data="{ open: false }" class="position-relative" @mouseenter="open = true" @mouseleave="open = false"
            style="display: inline-block;">
            <a href="#" class="text-dark text-decoration-none fw-semibold pe-1">Networking</a>

            <div x-show="open" x-transition class="position-absolute bg-white shadow rounded mt-2 p-3"
                style="z-index: 1050; min-width: 200px; width: 250px;" @mouseenter="open = true"
                @mouseleave="open = false">
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

        <div x-data="{ open: false }" class="position-relative" @mouseenter="open = true" @mouseleave="open = false"
            style="display: inline-block;">
            <a href="#" class="text-dark text-decoration-none fw-semibold pe-1">Software</a>

            <div x-show="open" x-transition class="position-absolute bg-white shadow rounded mt-2 p-3"
                style="z-index: 1050; min-width: 200px; width: 250px;" @mouseenter="open = true"
                @mouseleave="open = false">
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


        <div x-data="{ open: false }" class="position-relative" @mouseenter="open = true" @mouseleave="open = false"
            style="display: inline-block;">
            <a href="#" class="text-dark text-decoration-none fw-semibold pe-1">Server & Storage</a>

            <div x-show="open" x-transition class="position-absolute bg-white shadow rounded mt-2 p-3"
                style="z-index: 1050; min-width: 200px; width: 250px;" @mouseenter="open = true"
                @mouseleave="open = false">
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

        <div x-data="{ open: false }" class="position-relative" @mouseenter="open = true" @mouseleave="open = false"
            style="display: inline-block;">
            <a href="#" class="text-dark text-decoration-none fw-semibold pe-1">Accessories</a>

            <div x-show="open" x-transition class="position-absolute bg-white shadow rounded mt-2 p-3"
                style="z-index: 1050; min-width: 200px; width: 250px;" @mouseenter="open = true"
                @mouseleave="open = false">
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

        <div x-data="{ open: false }" class="position-relative" @mouseenter="open = true" @mouseleave="open = false"
            style="display: inline-block;">
            <a href="#" class="text-dark text-decoration-none fw-semibold pe-1">Gadget</a>

            <div x-show="open" x-transition class="position-absolute bg-white shadow rounded mt-2 p-3"
                style="z-index: 1050; min-width: 200px; width: 250px;" @mouseenter="open = true"
                @mouseleave="open = false">
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

        <div x-data="{ open: false }" class="position-relative" @mouseenter="open = true" @mouseleave="open = false"
            style="display: inline-block;">
            <a href="#" class="text-dark text-decoration-none fw-semibold pe-1">Gaming</a>

            <div x-show="open" x-transition class="position-absolute bg-white shadow rounded mt-2 p-3"
                style="z-index: 1050; min-width: 200px; width: 250px;" @mouseenter="open = true"
                @mouseleave="open = false">
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

        <div x-data="{ open: false }" class="position-relative" @mouseenter="open = true" @mouseleave="open = false"
            style="display: inline-block;">
            <a href="#" class="text-dark text-decoration-none fw-semibold pe-1">TV</a>

            <div x-show="open" x-transition class="position-absolute bg-white shadow rounded mt-2 p-3"
                style="z-index: 1050; min-width: 200px; width: 250px;" @mouseenter="open = true"
                @mouseleave="open = false">
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

        <div x-data="{ open: false }" class="position-relative" @mouseenter="open = true" @mouseleave="open = false"
            style="display: inline-block;">
            <a href="#" class="text-dark text-decoration-none fw-semibold pe-1">Appliance</a>

            <div x-show="open" x-transition class="position-absolute bg-white shadow rounded mt-2 p-3"
                style="z-index: 1050; min-width: 200px; width: 250px;" @mouseenter="open = true"
                @mouseleave="open = false">
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