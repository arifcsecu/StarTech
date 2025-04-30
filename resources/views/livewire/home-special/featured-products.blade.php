<section class="py-5 bg-light">
    <div class="container">
      <!-- Header -->
      <h2 class="text-center fw-bold mb-1">Featured Products</h2>
      <p class="text-center text-muted mb-4">Check & Get Your Desired Product!</p>
  
      <!-- Products Grid -->
      <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-4">
        @foreach($products as $product)
          @php
            $save = $product->price - ($product->discount_price ?? $product->price);
            $pct  = $product->discount_price
                      ? round($save / $product->price * 100)
                      : 0;
          @endphp
  
          <div class="col">
            <div class="card h-100 border-0 shadow-sm position-relative">
              @if($product->discount_price)
                <span class="badge position-absolute top-0 start-0 m-2 text-white"
                      style="background-color:#6f42c1;">
                  Save: {{ number_format($save) }}৳ (−{{ $pct }}%)
                </span>
              @endif
  
              <img src="{{ asset('storage/'.$product->image) }}"
                   class="card-img-top p-3"
                   alt="{{ $product->name }}"
                   style="height:150px; object-fit:contain;">
  
              <div class="card-body p-3">
                <h6 class="card-title small">{{ $product->name }}</h6>
  
                @if($product->discount_price)
                  <p class="mb-1">
                    <span class="fw-bold text-danger">
                      {{ number_format($product->discount_price) }}৳
                    </span>
                    <span class="text-muted text-decoration-line-through ms-2">
                      {{ number_format($product->price) }}৳
                    </span>
                  </p>
                @else
                  <p class="fw-bold text-danger mb-1">
                    {{ number_format($product->price) }}৳
                  </p>
                @endif
              </div>
            </div>
          </div>
        @endforeach
      </div>
  
      <!-- optional pagination -->
      <div class="mt-4">
        {{ $products->links() }}
      </div>
    </div>
  </section>
  
