<div>
    <div class="glider-contain">
        <ul class="glider">
            @foreach ($design->products as $product)
                <li>
                    <figure>
                        <img src="{{ Storage::url($product->images->first()->url) }}" alt="" width="200px">
                    </figure>
                </li>
            @endforeach
        </ul>
        <button aria-label="Previous" class="glider-prev">«</button>
        <button aria-label="Next" class="glider-next">»</button>
        <div role="tablist" class="dots"></div>
  </div>
</div>
