<!-- jQuery (required for Owl Carousel) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Owl Carousel CSS & JS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!-- Initialize Owl Carousel -->
<script>
    $(document).ready(function() {
        $(".set-bg").each(function() {
            var bg = $(this).attr("data-setbg");
            $(this).css("background-image", "url(" + bg + ")");
        });
    });



    $(document).ready(function() {
        $(".hero__slider").owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            nav: true,
            dots: true
        });
    });
</script>


<x-app-layout>
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__items set-bg" data-setbg="{{ asset('img/hero/hero-1.jpg') }}">

                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 col-md-8">
                            <div class="hero__text">
                                <h6>Male Collection</h6>
                                <h2>Collections Vision 2030</h2>
                                <p>A specialist label creating luxury essentials. Ethically crafted with an unwavering
                                    commitment to exceptional quality.</p>
                                <a href="{{ route('shop') }}" class="primary-btn">Shop now <span class="arrow_right"></span></a>
                                <div class="hero__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__items set-bg" data-setbg="img/hero/hero-2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 col-md-8">
                            <div class="hero__text">
                                <h6>Male Collection</h6>
                                <h2>Collections Vision 2030</h2>
                                <p>A specialist label creating luxury essentials. Ethically crafted with an unwavering
                                    commitment to exceptional quality.</p>
                                <a href="#" class="primary-btn">Shop now <span class="arrow_right"></span></a>
                                <div class="hero__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Banner Section -->
    <section class="banner spad">
        <div class="container">
            <div class="row">
                @foreach ([1, 2, 3] as $banner)
                    <div class="col-lg-{{ $banner == 2 ? '5' : '7' }} {{ $banner == 1 ? 'offset-lg-4' : '' }}">
                        <div
                            class="banner__item {{ $banner == 2 ? 'banner__item--middle' : ($banner == 3 ? 'banner__item--last' : '') }}">
                            <div class="banner__item__pic">
                                <img src="{{ asset('img/banner/banner-' . $banner . '.jpg') }}" alt="">
                            </div>
                            <div class="banner__item__text">
                                <h2>{{ ['Clothing Collections 2030', 'Accessories', 'Shoes Spring 2030'][$banner - 1] }}
                                </h2>
                                <a href="#">Shop now</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Product Section -->
    {{-- <x-products.products :product="$product"/> --}}

    <!-- Categories Section -->
    <section class="categories spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="categories__text">
                        <h2>Clothings Hot <br /><span>Shoe Collection</span> <br />Accessories</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories__hot__deal">
                        <img src="{{ asset('img/product-sale.png') }}" alt="">
                        <div class="hot__deal__sticker">
                            <span>Sale Of</span>
                            <h5>$29.99</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Instagram Section -->
    <section class="instagram spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="instagram__pic">
                        @foreach (range(1, 6) as $num)
                            <div class="instagram__pic__item set-bg"
                                data-setbg="{{ asset('img/instagram/instagram-' . $num . '.jpg') }}"></div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="instagram__text">
                        <h2>Instagram</h2>
                        <p>Stay connected with the latest trends and styles.</p>
                        <h3>#Male_Fashion</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest Blog Section -->
    <section class="latest spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Latest News</span>
                        <h2>Fashion New Trends</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ([['date' => '16 February 2020', 'title' => 'What Curling Irons Are The Best Ones', 'image' => 1], ['date' => '21 February 2020', 'title' => 'Eternity Bands Do Last Forever', 'image' => 2], ['date' => '28 February 2020', 'title' => 'The Health Benefits Of Sunglasses', 'image' => 3]] as $blog)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="blog__item">
                            <div class="blog__item__pic set-bg"
                                data-setbg="{{ asset('img/blog/blog-' . $blog['image'] . '.jpg') }}"></div>
                            <div class="blog__item__text">
                                <span><img src="{{ asset('img/icon/calendar.png') }}" alt="">
                                    {{ $blog['date'] }}</span>
                                <h5>{{ $blog['title'] }}</h5>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-app-layout>
