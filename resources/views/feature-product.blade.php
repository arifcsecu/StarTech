<div class="container">
    <div class="row">
        @foreach ($products as $product)
            <div class="col-6 col-md-4 col-lg-3 mb-4">
                <div class="card position-relative h-100 shadow-sm rounded-3">

                    <!-- Save Badge -->
                    @if ($product->discount_price)
                        <div class="position-absolute top-0 start-0 m-2 p-1 bg-purple text-white small rounded">
                            Save: {{ number_format($product->price - $product->discount_price) }}৳ 
                            ({{ round((($product->price - $product->discount_price) / $product->price) * 100) }}%)
                        </div>
                    @endif

                    <!-- Product Image -->
                    <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top p-3" alt="{{ $product->name }}" style="height: 150px; object-fit: contain;">

                    <!-- Product Details -->
                    <div class="card-body text-center p-2">
                        <h6 class="card-title small">{{ $product->name }}</h6>

                        <div class="mt-2">
                            <span class="fw-bold text-danger">{{ number_format($product->discount_price ?? $product->price) }}৳</span>
                            @if ($product->discount_price)
                                <small class="text-muted text-decoration-line-through ms-2">{{ number_format($product->price) }}৳</small>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        @endforeach
    </div>
</div>
