<section class="mt-4">  
  <div class="container-fluid px-4">
    <div class="row gx-4 gy-0">
      <!-- LEFT: Hero Carousel -->
      <div class="col-lg-9 px-0">
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
          
          <!-- Slides -->
          <div class="carousel-inner" style="height:400px;">
            <!-- Slide 1 -->
            <div class="carousel-item active h-100">
              <img
                src="{{ asset('images/hero/slide3.jpg') }}"
                class="d-block w-100 h-100"
                style="object-fit: cover;"
                alt="Slide 1">
            </div>
            <!-- Slide 2 -->
            <div class="carousel-item h-100">
              <img
                src="{{ asset('images/hero/slide2.jpg') }}"
                class="d-block w-100 h-100"
                style="object-fit: cover;"
                alt="Slide 2">
            </div>
            <!-- Slide 3 -->
            <div class="carousel-item h-100">
              <img
                src="{{ asset('images/hero/slide1.jpg') }}"
                class="d-block w-100 h-100"
                style="object-fit: cover;"
                alt="Slide 3">
            </div>
          </div>

          <!-- Indicators -->
          <div class="carousel-indicators position-absolute bottom-0 start-50 translate-middle-x mb-3">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
          </div>
        </div>
      </div>

      <!-- RIGHT: Compare & Career (sticky) -->
      <div class="col-lg-3">
        <div class="sticky-top" style="top:100px;">
          <div class="bg-warning p-3 rounded-3 shadow-sm mb-4">
            <h5 class="fw-bold text-dark mb-3">Compare Products</h5>
            <input class="form-control mb-2" placeholder="Search and Select Product">
            <input class="form-control mb-3" placeholder="Search and Select Product">
            <button class="btn btn-outline-dark w-100">View Comparison</button>
          </div>
          <div class="p-3 rounded-3 shadow-sm text-white" style="background-color:#6f42c1;">
            <h5 class="fw-bold mb-2">Shape Your Career</h5>
            <p class="mb-2">Join us!</p>
            <a href="#" class="btn btn-light btn-sm">Apply Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
