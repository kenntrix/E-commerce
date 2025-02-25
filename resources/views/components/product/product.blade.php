@php
    // Decode image URLs safely
    $images = json_decode($product->image_url, true) ?? [];
    $firstImage = $images[0] ?? 'default-image.jpg';

    // Check if the product is new (within the last 5 days)
    $isNew = $product->created_at->greaterThanOrEqualTo(now()->subDays(5));
@endphp

<div class="product__item">
    <div class="product__item__pic set-bg" data-setbg="{{ $firstImage }}">

        @if ($isNew)
            <span class="label">New</span>
        @endif

        <img src="{{ $firstImage }}" alt="{{ $product->name }}" loading="lazy">

        <ul class="product__hover">
            <li>
                <a href="#" aria-label="Add to Wishlist">
                    <img src="img/icon/heart.png" alt="Wishlist">
                </a>
            </li>
            <li>
                <a href="#" aria-label="Compare Product">
                    <img src="img/icon/compare.png" alt="Compare">
                    <span>Compare</span>
                </a>
            </li>
            <li>
                <a href="#" aria-label="View Product">
                    <img src="img/icon/search.png" alt="Search">
                </a>
            </li>
        </ul>
    </div>

    <div class="product__item__text">
        <h6>{{ $product->name }}</h6>
        <a href="" class="add-cart">+ Add To Cart</a>
        <div class="rating">
            <i class="fa fa-star-o"></i>
            <i class="fa fa-star-o"></i>
            <i class="fa fa-star-o"></i>
            <i class="fa fa-star-o"></i>
            <i class="fa fa-star-o"></i>
        </div>

        <h5>${{ number_format($product->price, 2) }}</h5>

        <div class="product__color__select">
            <label for="pc-1">
                <input type="radio" id="pc-1" name="color">
            </label>
            <label class="active black" for="pc-2">
                <input type="radio" id="pc-2" name="color">
            </label>
            <label class="grey" for="pc-3">
                <input type="radio" id="pc-3" name="color">
            </label>
        </div>
    </div>
</div>
