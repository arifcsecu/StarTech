
<div>
    <!-- Search box -->
    <div class="input-group">
      <span class="input-group-text"><i class="fas fa-search"></i></span>
      <input
        wire:model.debounce.300ms="search"
        type="text"
        class="form-control"
        placeholder="Search products..."
      >
    </div>
  
    <!-- Results grid -->
    <div class="row g-4">
      @forelse($products as $product)
        <div class="col-6 col-md-4 col-lg-3">
          <div class="card h-100 shadow-sm rounded-3">
            <img src="{{ asset('storage/'.$product->image) }}"
                 class="card-img-top p-3"
                 style="height:150px;object-fit:contain;"
                 alt="{{ $product->name }}">
            <div class="card-body text-center p-2">
              <h6 class="card-title small">{{ $product->name }}</h6>
              <p class="fw-bold mb-1">
                {{ number_format($product->discount_price ?? $product->price) }}৳
              </p>
            </div>
          </div>
        </div>
      @empty
        <div class="col-12 text-center text-muted">
          No products found<strong>{{ $search }}</strong>”
        </div>
      @endforelse
    </div>
  
    <!-- Pagination -->
    <div class="mt-4">
      {{ $products->links() }}
    </div>
  </div>
  