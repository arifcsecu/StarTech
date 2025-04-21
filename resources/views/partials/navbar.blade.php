<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom py-2">
    <div class="container">

        <button class = "navbar-toggler" 
                type = "button" 
                data-bs-toggle = "collapse"
                data-bs-target = "#navbarCategories"
                aria-controls = "navbarCategories" 
                aria-expanded = "false" 
                aria-label = "Toggle categories"
            >
            <span class = "navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCategories">
            <div class="d-flex flex-wrap justify-content-start gap-1">
                
                <div x-data="{ open: false }" class="position-relative" @mouseenter="open = true"
                    @mouseleave="open = false" style="display: inline-block;">
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

                <div x-data="{ open: false }" class="position-relative" @mouseenter="open = true"
                    @mouseleave="open = false" style="display: inline-block;">
                    <a href="#" class="text-dark text-decoration-none fw-semibold pe-1">Laptop</a>

                    <div x-show="open" x-transition class="position-absolute bg-white shadow rounded mt-2 p-3"
                        style="z-index: 1050; min-width: 200px; width: 250px;" @mouseenter="open = true"
                        @mouseleave="open = false">
                        <a href="#" class="d-block text-dark text-decoration-none py-1">All Laptop</a>

                        <div x-data="{ subOpen: false }" class="position-relative" @mouseenter="subOpen = true"
                            @mouseleave="subOpen = false">
                            <a href="#"
                                class="d-flex justify-content-between align-items-center text-dark text-decoration-none py-1">
                                Gaming Laptop
                                <span class="ms-2">▶</span>
                            </a>

                            <!-- Sub-subcategory -->
                            <div x-show="subOpen" x-transition class="position-absolute bg-white shadow rounded p-2"
                                style="top: 0; left: 100%; min-width: 200px; z-index: 1060;">
                                <a href="#" class="d-block text-dark text-decoration-none py-1">Lenovo</a>
                                <a href="#" class="d-block text-dark text-decoration-none py-1">Asus</a>
                                <a href="#" class="d-block text-dark text-decoration-none py-1">Acer</a>
                                <a href="#" class="d-block text-dark text-decoration-none py-1">MSI</a>
                                <a href="#" class="d-block text-dark text-decoration-none py-1">Dell</a>
                                <a href="#" class="d-block text-dark text-decoration-none py-1">HP</a>
                                <a href="#" class="d-block text-dark text-decoration-none py-1">Apple</a>
                                <a href="#" class="d-block text-dark text-decoration-none py-1">Microsoft</a>
                                <a href="#" class="d-block text-dark text-decoration-none py-1">Toshiba</a>
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
                                <a href="#" class="d-block text-dark text-decoration-none py-1">Asus</a>
                                <a href="#" class="d-block text-dark text-decoration-none py-1">Acer</a>
                                <a href="#" class="d-block text-dark text-decoration-none py-1">HP</a>
                                <a href="#" class="d-block text-dark text-decoration-none py-1">Microsoft</a>
                                <a href="#" class="d-block text-dark text-decoration-none py-1">Dell</a>
                                <a href="#" class="d-block text-dark text-decoration-none py-1">Lenovo</a>
                                <a href="#" class="d-block text-dark text-decoration-none py-1">MSI</a>
                            </div>
                        </div>

                        <a href="#" class="d-block text-dark text-decoration-none py-1">Laptop Bag</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Laptop Accessories</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Show All Laptop</a>
                    </div>
                </div>

                <div x-data="{ open: false }" class="position-relative" @mouseenter="open = true"
                    @mouseleave="open = false" style="display: inline-block;">
                    <a href="#" class="text-dark text-decoration-none fw-semibold pe-1">Component</a>

                    <div x-show="open" x-transition class="position-absolute bg-white shadow rounded mt-2 p-3"
                        style="z-index: 1050; min-width: 200px; width: 250px;" @mouseenter="open = true"
                        @mouseleave="open = false">
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Processor</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">CPU Cooler</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Water/Liquid Cooling</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Motherboard</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Graphics Card</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">RAM (Desktop)</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">RAM (Laptop)</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Power Supply</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Hard Disk Drive</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Portable Hard Disk Drive</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">SSD</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Portable SSD</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Casing</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Casing Cooler</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Optical Disk Drive</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Vertical Grapics Card Holder</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">SSD Cooler</a>
                    </div>
                </div>

                <div x-data="{ open: false }" class="position-relative" @mouseenter="open = true"
                    @mouseleave="open = false" style="display: inline-block;">
                    <a href="#" class="text-dark text-decoration-none fw-semibold pe-1">Monitor</a>

                    <div x-show="open" x-transition class="position-absolute bg-white shadow rounded mt-2 p-3"
                        style="z-index: 1050; min-width: 200px; width: 250px;" @mouseenter="open = true"
                        @mouseleave="open = false">
                        <a href="#" class="d-block text-dark text-decoration-none py-1">AOC</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">MSI</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">LG</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Asus</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">HP</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Dell</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Samsung</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">GIGABYTE</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Viewsonic</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Corsair</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Lenovo</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Acer</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">BenQ</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">PHILIPS</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Dahua</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Value-Top</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">PC Power</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Hikvision</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">AIWA</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">PHILIPS</a>

                    </div>
                </div>

                <div x-data="{ open: false }" class="position-relative" @mouseenter="open = true"
                    @mouseleave="open = false" style="display: inline-block;">
                    <a href="#" class="text-dark text-decoration-none fw-semibold pe-1">UPS</a>

                    <div x-show="open" x-transition class="position-absolute bg-white shadow rounded mt-2 p-3"
                        style="z-index: 1050; min-width: 200px; width: 250px;" @mouseenter="open = true"
                        @mouseleave="open = false">
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Online UPS</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Offline UPS</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Mini UPS</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">UPS Battery</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Voltage Stabilizer</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">IPS</a>
                    </div>
                </div>

                <div x-data="{ open: false }" class="position-relative" @mouseenter="open = true"
                    @mouseleave="open = false" style="display: inline-block;">
                    <a href="#" class="text-dark text-decoration-none fw-semibold pe-1">Phone</a>

                    <div x-show="open" x-transition class="position-absolute bg-white shadow rounded mt-2 p-3"
                        style="z-index: 1050; min-width: 200px; width: 250px;" @mouseenter="open = true"
                        @mouseleave="open = false">
                        <a href="#" class="d-block text-dark text-decoration-none py-1">iPhone</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Google</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Samsung</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Xiaomi</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Huawei</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Nokia</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Oppo</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Vivo</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Realme</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Lenovo</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">OnePlus</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Motorola</a>
                    </div>
                </div>


                <div x-data="{ open: false }" class="position-relative" @mouseenter="open = true"
                    @mouseleave="open = false" style="display: inline-block;">
                    <a href="#" class="text-dark text-decoration-none fw-semibold pe-1">Tablet</a>

                    <div x-show="open" x-transition class="position-absolute bg-white shadow rounded mt-2 p-3"
                        style="z-index: 1050; min-width: 200px; width: 250px;" @mouseenter="open = true"
                        @mouseleave="open = false">
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Grapics Tablet</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">iPad</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Black Shark</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Lenovo</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Samsung</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">HONOR</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Xiaomi</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Huion</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Walton</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">HUAWEI</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Chuwi</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Amazon</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Google</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">OnePlus</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Stylus</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Teclast</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Symphony</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">ZTE</a>
                    </div>
                </div>

                <div x-data="{ open: false }" class="position-relative" @mouseenter="open = true"
                    @mouseleave="open = false" style="display: inline-block;">
                    <a href="#" class="text-dark text-decoration-none fw-semibold pe-1">Office Equipment</a>

                    <div x-show="open" x-transition class="position-absolute bg-white shadow rounded mt-2 p-3"
                        style="z-index: 1050; min-width: 200px; width: 250px;" @mouseenter="open = true"
                        @mouseleave="open = false">
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Projector</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Conference System</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">PA System</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Interactive Flat Panel</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Video Wall</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Signage</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Kiosk</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Printer</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Laser Printer</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Large Format Printer</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">ID Card Printer</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">POS Printer</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Label Printer</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Photocopier</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Toner</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Cartridge</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Ink Bottle</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Printer Paper</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Ribbon</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Printer Drum</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Scanner</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Barcode Scanner</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Cash Drawer</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Telephone Set</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">IP Phone</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">PABX System</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Money Counting Machine</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Paper Shredder</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Laminating Machine</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Binding Machine</a>
                    </div>
                </div>

                <div x-data="{ open: false }" class="position-relative" @mouseenter="open = true"
                    @mouseleave="open = false" style="display: inline-block;">
                    <a href="#" class="text-dark text-decoration-none fw-semibold pe-1">Camera</a>

                    <div x-show="open" x-transition class="position-absolute bg-white shadow rounded mt-2 p-3"
                        style="z-index: 1050; min-width: 200px; width: 250px;" @mouseenter="open = true"
                        @mouseleave="open = false">
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Action Camera</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Camera Lenses</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Digital Camera</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">DSLR</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">HandyCam</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Mirrorless Camera</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Dash Cam</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Video Camera</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Instant Camera</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Camera Accessories</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Camera Tripod</a>
                    </div>
                </div>

                <div x-data="{ open: false }" class="position-relative" @mouseenter="open = true"
                    @mouseleave="open = false" style="display: inline-block;">
                    <a href="#" class="text-dark text-decoration-none fw-semibold pe-1">Security</a>

                    <div x-show="open" x-transition class="position-absolute bg-white shadow rounded mt-2 p-3"
                        style="z-index: 1050; min-width: 200px; width: 250px;" @mouseenter="open = true"
                        @mouseleave="open = false">
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Portable WiFi Camera</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">IP Camera</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">CC Camera</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">PTZ Camera</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">CC Camera Package</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">IP Camera Package</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">DVR</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">NVR</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">XVR</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">CC Camera Accessories</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Door Lock</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Smart Door Bell</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Access Control</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Entrance Control</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Digital Locker & Vault</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">KVM Switch</a>
                    </div>
                </div>

                <div x-data="{ open: false }" class="position-relative" @mouseenter="open = true"
                    @mouseleave="open = false" style="display: inline-block;">
                    <a href="#" class="text-dark text-decoration-none fw-semibold pe-1">Networking</a>

                    <div x-show="open" x-transition class="position-absolute bg-white shadow rounded mt-2 p-3"
                        style="z-index: 1050; min-width: 200px; width: 250px;" @mouseenter="open = true"
                        @mouseleave="open = false">
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Router</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Pocket Router</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Access Point & Range
                            Extender</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Network Switch</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Firewall</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">WiFi Adapter</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">LAN Card</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Networking Cable</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Patch Cord</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Connector</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">OLT</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">ONU</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Splicer Machine</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Crimping Tool</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">OTDR</a>
                    </div>
                </div>

                <div x-data="{ open: false }" class="position-relative" @mouseenter="open = true"
                    @mouseleave="open = false" style="display: inline-block;">
                    <a href="#" class="text-dark text-decoration-none fw-semibold pe-1">Software</a>

                    <div x-show="open" x-transition class="position-absolute bg-white shadow rounded mt-2 p-3"
                        style="z-index: 1050; min-width: 200px; width: 250px;" @mouseenter="open = true"
                        @mouseleave="open = false">
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Operating System</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Office Application</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Database Server Solution</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Mail Server Solution</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Cloud Solutions</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Antivirus</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Bangla Typing Software</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Adobe</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">VMware</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">AutoDesk</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">AnyDesk</a>
                    </div>
                </div>


                <div x-data="{ open: false }" class="position-relative" @mouseenter="open = true"
                    @mouseleave="open = false" style="display: inline-block;">
                    <a href="#" class="text-dark text-decoration-none fw-semibold pe-1">Server & Storage</a>

                    <div x-show="open" x-transition class="position-absolute bg-white shadow rounded mt-2 p-3"
                        style="z-index: 1050; min-width: 200px; width: 250px;" @mouseenter="open = true"
                        @mouseleave="open = false">
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Server</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">GPU Server</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Server Rack</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Workstation</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">NAS Storage</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">SAN Storage</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">DAS Storage</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Server HDD</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Server HDD Bay</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Server RAM</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Server SSD</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Server Power Supply</a>
                    </div>
                </div>

                <div x-data="{ open: false }" class="position-relative" @mouseenter="open = true"
                    @mouseleave="open = false" style="display: inline-block;">
                    <a href="#" class="text-dark text-decoration-none fw-semibold pe-1">Accessories</a>

                    <div x-show="open" x-transition class="position-absolute bg-white shadow rounded mt-2 p-3"
                        style="z-index: 1050; min-width: 200px; width: 250px;" @mouseenter="open = true"
                        @mouseleave="open = false">
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Keyboard</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Mouse</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Headphone</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Bluetooth Headphone</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Mouse Pad</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Wrist Rest</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Headphone Stand</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Speaker & Home Theater</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Bluetooth Speakers</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">SoundBar</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">WebCam</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Cable</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Converter</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Card Reader</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Hubs & Docks</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Microphone</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Digital Voice Recorder</a>
                    </div>
                </div>

                <div x-data="{ open: false }" class="position-relative" @mouseenter="open = true"
                    @mouseleave="open = false" style="display: inline-block;">
                    <a href="#" class="text-dark text-decoration-none fw-semibold pe-1">Gadget</a>

                    <div x-show="open" x-transition class="position-absolute bg-white shadow rounded mt-2 p-3"
                        style="z-index: 1050; min-width: 200px; width: 250px;" @mouseenter="open = true"
                        @mouseleave="open = false">
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Smart Watch</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Smart Band</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Earphone</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Earbuds</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Neckband</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Power Bank</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Portable Power Station</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">TV Box</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Studio Equipment</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Drones</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Gimbal</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Daily Lifestyle</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Calculator</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Blower Machine</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Stream Deck</a>
                    </div>
                </div>

                <div x-data="{ open: false }" class="position-relative" @mouseenter="open = true"
                    @mouseleave="open = false" style="display: inline-block;">
                    <a href="#" class="text-dark text-decoration-none fw-semibold pe-1">Gaming</a>

                    <div x-show="open" x-transition class="position-absolute bg-white shadow rounded mt-2 p-3"
                        style="z-index: 1050; min-width: 200px; width: 250px;" @mouseenter="open = true"
                        @mouseleave="open = false">
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Gaming Chair</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Gaming Desk</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Keyboard</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Mouse</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Headphone</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Mouse Pad</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Gamepad</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">VR</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Gaming Console</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Gaming Sofa</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Games</a>
                    </div>
                </div>
                <div x-data="{ open: false }" class="position-relative" @mouseenter="open = true"
                    @mouseleave="open = false" style="display: inline-block;">
                    <a href="#" class="text-dark text-decoration-none fw-semibold pe-1">TV</a>

                    <div x-show="open" x-transition class="position-absolute bg-white shadow rounded mt-2 p-3"
                        style="z-index: 1050; min-width: 200px; width: 250px;" @mouseenter="open = true"
                        @mouseleave="open = false">
                        <a href="#" class="d-block text-dark text-decoration-none py-1">ALL TV</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">LED TV</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Smart TV</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Android TV</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">4k TV</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">AKASH Digital TV</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">TV Stand & Wall Mount</a>
                    </div>
                </div>

                <div x-data="{ open: false }" class="position-relative" @mouseenter="open = true"
                    @mouseleave="open = false" style="display: inline-block;">
                    <a href="#" class="text-dark text-decoration-none fw-semibold pe-1">Appliance</a>

                    <div x-show="open" x-transition class="position-absolute bg-white shadow rounded mt-2 p-3"
                        style="z-index: 1050; min-width: 200px; width: 250px;" @mouseenter="open = true"
                        @mouseleave="open = false">
                        <a href="#" class="d-block text-dark text-decoration-none py-1">AC</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Fan</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Geyser</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Oven</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Room Heater</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Air Fryer</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Washing Machine</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Sewing Machine</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Air Purifier</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Vacuum Cleaner</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Blender</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Cooker</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Electric Kettle</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Iron</a>
                        <a href="#" class="d-block text-dark text-decoration-none py-1">Refrigerator</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- <div x-data="{ open: false }" …>…</div>
<div x-data="{ open: false }" …>…</div> -->