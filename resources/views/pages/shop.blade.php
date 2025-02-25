<x-app-layout>
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Shop</h4>
                        <div class="breadcrumb__links">
                            <a href="{{ route('shop') }}">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shop Section Begin -->
    <section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="shop__sidebar">
                        <div class="shop__sidebar__search">
                            <form action="#">
                                <input type="text" name="name" placeholder="Search...">
                                <button type="submit"><span class="icon_search"></span></button>
                            </form>
                        </div>
                        <div class="shop-sidebar-accordion">
                            <div class="accordion" id="sidebarAccordion">
                                <!-- Categories -->
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                aria-expanded="true" aria-controls="collapseOne">
                                                Categories
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                        data-bs-parent="#sidebarAccordion">
                                        <div class="card-body">
                                            <ul class="list-group nice-scroll"
                                                style="max-height: 300px; overflow-y: auto;">
                                                @foreach ($categories as $category)
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-center">
                                                        <a href="#"
                                                            class="text-dark text-decoration-none">{{ $category->name }}</a>
                                                        <span
                                                            class="badge bg-primary rounded-pill">{{ $category->productsCount() }}</span>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- Branding -->
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                Branding
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#sidebarAccordion">
                                        <div class="card-body">
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="#">Louis Vuitton</a></li>
                                                <li class="list-group-item"><a href="#">Chanel</a></li>
                                                <li class="list-group-item"><a href="#">Hermes</a></li>
                                                <li class="list-group-item"><a href="#">Gucci</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- Filter Price -->
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                Filter Price
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                        data-bs-parent="#sidebarAccordion">
                                        <div class="card-body">
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="#">$0.00 - $50.00</a></li>
                                                <li class="list-group-item"><a href="#">$50.00 - $100.00</a></li>
                                                <li class="list-group-item"><a href="#">$100.00 - $150.00</a></li>
                                                <li class="list-group-item"><a href="#">$150.00 - $200.00</a></li>
                                                <li class="list-group-item"><a href="#">$200.00 - $250.00</a></li>
                                                <li class="list-group-item"><a href="#">250.00+</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- Size -->
                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                aria-expanded="false" aria-controls="collapseFour">
                                                Size
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                        data-bs-parent="#sidebarAccordion">
                                        <div class="card-body">
                                            <div class="d-flex flex-wrap gap-2">
                                                <label class="btn btn-outline-secondary" for="xs">XS</label>
                                                <label class="btn btn-outline-secondary" for="sm">S</label>
                                                <label class="btn btn-outline-secondary" for="md">M</label>
                                                <label class="btn btn-outline-secondary" for="xl">XL</label>
                                                <label class="btn btn-outline-secondary" for="2xl">2XL</label>
                                                <label class="btn btn-outline-secondary" for="xxl">XXL</label>
                                                <label class="btn btn-outline-secondary" for="3xl">3XL</label>
                                                <label class="btn btn-outline-secondary" for="4xl">4XL</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Colors -->
                                <div class="card">
                                    <div class="card-header" id="headingFive">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                                aria-expanded="false" aria-controls="collapseFive">
                                                Colors
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                        data-bs-parent="#sidebarAccordion">
                                        <div class="card-body">
                                            <div class="d-flex flex-wrap gap-2">
                                                <label class="btn btn-outline-secondary" for="sp-1"
                                                    style="background-color: red;"></label>
                                                <label class="btn btn-outline-secondary" for="sp-2"
                                                    style="background-color: blue;"></label>
                                                <label class="btn btn-outline-secondary" for="sp-3"
                                                    style="background-color: green;"></label>
                                                <label class="btn btn-outline-secondary" for="sp-4"
                                                    style="background-color: yellow;"></label>
                                                <label class="btn btn-outline-secondary" for="sp-5"
                                                    style="background-color: purple;"></label>
                                                <label class="btn btn-outline-secondary" for="sp-6"
                                                    style="background-color: orange;"></label>
                                                <label class="btn btn-outline-secondary" for="sp-7"
                                                    style="background-color: pink;"></label>
                                                <label class="btn btn-outline-secondary" for="sp-8"
                                                    style="background-color: brown;"></label>
                                                <label class="btn btn-outline-secondary" for="sp-9"
                                                    style="background-color: gray;"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Tags -->
                                <div class="card">
                                    <div class="card-header" id="headingSix">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                                aria-expanded="false" aria-controls="collapseSix">
                                                Tags
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                                        data-bs-parent="#sidebarAccordion">
                                        <div class="card-body">
                                            <div class="d-flex flex-wrap gap-2">
                                                <a href="#" class="btn btn-outline-secondary">Product</a>
                                                <a href="#" class="btn btn-outline-secondary">Bags</a>
                                                <a href="#" class="btn btn-outline-secondary">Shoes</a>
                                                <a href="#" class="btn btn-outline-secondary">Fashion</a>
                                                <a href="#" class="btn btn-outline-secondary">Clothing</a>
                                                <a href="#" class="btn btn-outline-secondary">Hats</a>
                                                <a href="#" class="btn btn-outline-secondary">Accessories</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="shop__product__option">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__left">
                                    <p>Showing 1–12 of 126 results</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__right">
                                    <p>Sort by Price:</p>
                                    <select>
                                        <option value="">Low To High</option>
                                        <option value="">$0 - $55</option>
                                        <option value="">$55 - $100</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        {{-- Product Component Start --}}
                        @foreach ($products as $product)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                {{-- <x-products.product.product :product="$item" /> --}}
                                @include('components.product.product')
                            </div>
                        @endforeach
                        {{-- Product Component End --}}
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product__pagination">
                                <a class="active" href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <span>...</span>
                                <a href="#">21</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->
</x-app-layout>
