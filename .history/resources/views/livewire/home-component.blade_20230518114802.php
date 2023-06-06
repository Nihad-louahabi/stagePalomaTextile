<div>
    <main class="main">
        <section class="home-slider position-relative pt-50">
            <div class="hero-slider-1 dot-style-1 dot-style-1-position-1">
                @foreach($slides as $slide)
                    <div class="single-hero-slider single-animation-wrap">
                         <div class="container">
                                <div class="row align-items-center slider-animated-1">
                                    <div class="col-lg-5 col-md-6">
                                        <div class="hero-slider-content-2">
                                            <h4 class="animated">{{$slide->top_title}}</h4>
                                            <h2 class="animated fw-900">{{$slide->title}}</h2>
                                            <h1 class="animated fw-900 text-7">{{$slide->sub_title}}</h1>
                                            <p class="animated">{{$slide->Offre}}</p>
                                            <a class="animated btn btn-brush btn-brush-2" href="{{$slide->link}}">@lang('public.Shop now')</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-6">
                                        <div class="single-slider-img single-slider-img-1">
                                            <img class="animated slider-1-1" src="{{asset('assets/imgs/slider')}}/{{$slide->image}}"  alt="{{$slide->title}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="slider-arrow hero-slider-1-arrow"></div>
        </section>
        <section class="featured section-padding position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="assets/imgs/theme/icons/feature-1.png" alt="">
                            <h4 class="bg-1">@lang('public.Free Shipping')</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="assets/imgs/theme/icons/feature-2.png" alt="">
                            <h4 class="bg-3">@lang('public.Online Order')</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="assets/imgs/theme/icons/feature-3.png" alt="">
                            <h4 class="bg-2">@lang('public.Save to 50%')</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="assets/imgs/theme/icons/feature-4.png" alt="">
                            <h4 class="bg-4">@lang('public.Promotions')</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="assets/imgs/theme/icons/feature-5.png" alt="">
                            <h4 class="bg-5">@lang('public.Happy Sell')</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="assets/imgs/theme/icons/feature-6.png" alt="">
                            <h4 class="bg-6">@lang('public.24/7 Support')</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="product-tabs section-padding position-relative wow fadeIn animated">
            <div class="bg-square"></div>
            <div class="container">
                <div class="tab-header">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="nav-tab-one" data-bs-toggle="tab" data-bs-target="#tab-one" type="button" role="tab" aria-controls="tab-one" aria-selected="true">@lang('public.Featured products')</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-two" data-bs-toggle="tab" data-bs-target="#tab-two" type="button" role="tab" aria-controls="tab-two" aria-selected="false">@lang('public.Popular')</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-three" data-bs-toggle="tab" data-bs-target="#tab-three" type="button" role="tab" aria-controls="tab-three" aria-selected="false">@lang('public.New added')</button>
                        </li>
                    </ul>
                    <a href="{{ route('shop') }}" class="view-more d-none d-md-flex">@lang('public.View More')<i class="fi-rs-angle-double-small-right"></i></a>
                </div>
                <!--End nav-tabs-->
                <div class="tab-content wow fadeIn animated" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                        <div class="row product-grid-4">
                            @foreach ( $fproducts as $fproduct )
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('product.details',['slug'=>$fproduct->slug]) }}">
                                                        <img class="default-img" src="{{asset('assets/imgs/products')}}/{{ $fproduct->image }}" alt="">
                                                        {{--<img class="hover-img" src="assets/imgs/shop/product-1-2.jpg" alt="">
                                                         --}}
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    {{--<a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                                     --}}
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">@lang('public.Hot')</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">

                                                <div class="product-category">

                                                        <a href="shop.html" >{{$fproduct->name}}</a>

                                                </div>
                                                <h2><a href="product-details.html">{{$fproduct->name}}</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>90%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>DH{{$fproduct->regular_price}}</span>
                                                    {{--<span class="old-price">$245.8</span>--}}
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up" href="#" wire:click.prevent="store({{$fproduct->id}},'{{$fproduct->name}}',{{$fproduct->regular_price}})"><i class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            @endforeach

                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab one (Featured)-->
                    <div class="tab-pane fade" id="tab-two" role="tabpanel" aria-labelledby="tab-two">
                        <div class="row product-grid-4">
                            @foreach ( $fproducts as $fproduct )
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                    <div class="product-cart-wrap mb-30">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="{{ route('product.details',['slug'=>$fproduct->slug]) }}">
                                                    <img class="default-img" src="{{asset('assets/imgs/shop/product-9-1.png')}}" alt="">
                                                    <img class="hover-img" src="{{asset('assets/imgs/shop/product-9-2.png')}}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-action-1">
                                                <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="hot">@lang('public.Hot')</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="shop.html">@lang('public.Donec') </a>
                                            </div>
                                            <h2><a href="product-details.html">Lorem ipsum dolor</a></h2>
                                            <div class="rating-result" title="90%">
                                                <span>
                                                    <span>90%</span>
                                                </span>
                                            </div>
                                            <div class="product-price">
                                                <span>$238.85 </span>
                                                <span class="old-price">$245.8</span>
                                            </div>
                                            <div class="product-action-1 show">
                                                <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                    <div class="product-cart-wrap mb-30">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="{{ route('product.details',['slug'=>$fproduct->slug]) }}">
                                                    <img class="default-img" src="{{asset('assets/imgs/shop/product-10-1.png')}}" alt="">
                                                    <img class="hover-img" src="{{asset('assets/imgs/shop/product-10-2.jpg')}}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-action-1">
                                                <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="new">@lang('public.New')</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="shop.html">Music</a>
                                            </div>
                                            <h2><a href="product-details.html">Sed tincidunt interdum</a></h2>
                                            <div class="rating-result" title="90%">
                                                <span>
                                                    <span>50%</span>
                                                </span>
                                            </div>
                                            <div class="product-price">
                                                <span>$138.85 </span>
                                                <span class="old-price">$255.8</span>
                                            </div>
                                            <div class="product-action-1 show">
                                                <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                    <div class="product-cart-wrap mb-30">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="{{ route('product.details',['slug'=>$fproduct->slug]) }}">
                                                    <img class="default-img" src="{{asset('assets/imgs/shop/product-11-1.png')}}" alt="">
                                                    <img class="hover-img" src="{{asset('assets/imgs/shop/product-11-2.png')}}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-action-1">
                                                <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="best">Best Sell</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="shop.html">Watch</a>
                                            </div>
                                            <h2><a href="product-details.html">Fusce metus orci</a></h2>
                                            <div class="rating-result" title="90%">
                                                <span>
                                                    <span>95%</span>
                                                </span>
                                            </div>
                                            <div class="product-price">
                                                <span>$338.85 </span>
                                                <span class="old-price">$445.8</span>
                                            </div>
                                            <div class="product-action-1 show">
                                                <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                    <div class="product-cart-wrap mb-30">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="{{ route('product.details',['slug'=>$fproduct->slug]) }}">
                                                    <img class="default-img" src="{{asset('assets/imgs/shop/product-12-1.png')}}" alt="">
                                                    <img class="hover-img" src="{{asset('assets/imgs/shop/product-12-2.png')}}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-action-1">
                                                <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="sale">Sale</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="shop.html">Music</a>
                                            </div>
                                            <h2><a href="product-details.html">Integer venenatis libero</a></h2>
                                            <div class="rating-result" title="90%">
                                                <span>
                                                    <span>70%</span>
                                                </span>
                                            </div>
                                            <div class="product-price">
                                                <span>$123.85 </span>
                                                <span class="old-price">$235.8</span>
                                            </div>
                                            <div class="product-action-1 show">
                                                <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                    <div class="product-cart-wrap mb-30">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="{{ route('product.details',['slug'=>$fproduct->slug]) }}">
                                                    <img class="default-img" src="{{asset('assets/imgs/shop/product-13-1.png')}}" alt="">
                                                    <img class="hover-img" src="{{asset('assets/imgs/shop/product-13-2.png')}}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-action-1">
                                                <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="hot">-30%</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="shop.html">Speaker</a>
                                            </div>
                                            <h2><a href="product-details.html">Cras tempor orci id</a></h2>
                                            <div class="rating-result" title="90%">
                                                <span>
                                                    <span>70%</span>
                                                </span>
                                            </div>
                                            <div class="product-price">
                                                <span>$28.85 </span>
                                                <span class="old-price">$45.8</span>
                                            </div>
                                            <div class="product-action-1 show">
                                                <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                    <div class="product-cart-wrap mb-30">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="{{ route('product.details',['slug'=>$fproduct->slug]) }}">
                                                    <img class="default-img" src="{{asset('assets/imgs/shop/product-14-1.png')}}" alt="">
                                                    <img class="hover-img" src="{{asset('assets/imgs/shop/product-14-2.png')}}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-action-1">
                                                <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="hot">-22%</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="shop.html">Camera</a>
                                            </div>
                                            <h2><a href="product-details.html">Nullam cursus mi qui</a></h2>
                                            <div class="rating-result" title="90%">
                                                <span>
                                                    <span>70%</span>
                                                </span>
                                            </div>
                                            <div class="product-price">
                                                <span>$238.85 </span>
                                                <span class="old-price">$245.8</span>
                                            </div>
                                            <div class="product-action-1 show">
                                                <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                    <div class="product-cart-wrap mb-30">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="{{ route('product.details',['slug'=>$fproduct->slug]) }}">
                                                    <img class="default-img" src="{{asset('assets/imgs/shop/product-15-1.png')}}" alt="">
                                                    <img class="hover-img" src="{{asset('assets/imgs/shop/product-15-2.png')}}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-action-1">
                                                <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="new">New</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="shop.html">Phone</a>
                                            </div>
                                            <h2><a href="product-details.html">Fusce fringilla ultrices</a></h2>
                                            <div class="rating-result" title="90%">
                                                <span>
                                                    <span>98%</span>
                                                </span>
                                            </div>
                                            <div class="product-price">
                                                <span>$1275.85 </span>
                                            </div>
                                            <div class="product-action-1 show">
                                                <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                    <div class="product-cart-wrap mb-30">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="{{ route('product.details',['slug'=>$fproduct->slug]) }}">
                                                    <img class="default-img" src="{{asset('assets/imgs/shop/product-1-1.png')}}" alt="">
                                                    <img class="hover-img" src="{{asset('assets/imgs/shop/product-1-2.png')}}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-action-1">
                                                <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="shop.html">Accessories </a>
                                            </div>
                                            <h2><a href="product-details.html">Sed sollicitudin est</a></h2>
                                            <div class="rating-result" title="90%">
                                                <span>
                                                    <span>70%</span>
                                                </span>
                                            </div>
                                            <div class="product-price">
                                                <span>$238.85 </span>
                                                <span class="old-price">$245.8</span>
                                            </div>
                                            <div class="product-action-1 show">
                                                <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab two (Popular)-->
                    <div class="tab-pane fade" id="tab-three" role="tabpanel" aria-labelledby="tab-three">
                        <div class="row product-grid-4">
                            @foreach ( $fproducts as $fproduct )
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                    <div class="product-cart-wrap mb-30">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="{{ route('product.details',['slug'=>$fproduct->slug]) }}">
                                                    <img class="default-img" src="{{asset('assets/imgs/shop/product-2-1.png')}}" alt="">
                                                    <img class="hover-img" src="{{asset('assets/imgs/shop/product-2-2.png')}}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-action-1">
                                                <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="hot">Hot</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="shop.html">Music</a>
                                            </div>
                                            <h2><a href="product-details.html">Donc ut nisl rutrum</a></h2>
                                            <div class="rating-result" title="90%">
                                                <span>
                                                    <span>90%</span>
                                                </span>
                                            </div>
                                            <div class="product-price">
                                                <span>$238.85 </span>
                                                <span class="old-price">$245.8</span>
                                            </div>
                                            <div class="product-action-1 show">
                                                <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                    <div class="product-cart-wrap mb-30">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="{{ route('product.details',['slug'=>$fproduct->slug]) }}">
                                                    <img class="hover-img" src="{{asset('assets/imgs/shop/product-3-1.png')}}" alt="">
                                                    <img class="default-img" src="{{asset('assets/imgs/shop/product-3-2.png')}}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-action-1">
                                                <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="new">New</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="shop.html">Music</a>
                                            </div>
                                            <h2><a href="product-details.html">Nullam dapibus pharetra</a></h2>
                                            <div class="rating-result" title="90%">
                                                <span>
                                                    <span>50%</span>
                                                </span>
                                            </div>
                                            <div class="product-price">
                                                <span>$138.85 </span>
                                                <span class="old-price">$255.8</span>
                                            </div>
                                            <div class="product-action-1 show">
                                                <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                    <div class="product-cart-wrap mb-30">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="{{ route('product.details',['slug'=>$fproduct->slug]) }}">
                                                    <img class="hover-img" src="{{asset('assets/imgs/shop/product-4-1.png')}}" alt="">
                                                    <img class="default-img" src="{{asset('assets/imgs/shop/product-4-2.png')}}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-action-1">
                                                <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="best">Best Sell</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="shop.html">Watch</a>
                                            </div>
                                            <h2><a href="product-details.html">Morbi dictum finibus</a></h2>
                                            <div class="rating-result" title="90%">
                                                <span>
                                                    <span>95%</span>
                                                </span>
                                            </div>
                                            <div class="product-price">
                                                <span>$338.85 </span>
                                                <span class="old-price">$445.8</span>
                                            </div>
                                            <div class="product-action-1 show">
                                                <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                    <div class="product-cart-wrap mb-30">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="{{ route('product.details',['slug'=>$fproduct->slug]) }}">
                                                    <img class="hover-img" src="{{asset('assets/imgs/shop/product-5-1.png')}}" alt="">
                                                    <img class="default-img" src="{{asset('assets/imgs/shop/product-5-2.png')}}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-action-1">
                                                <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="sale">Sale</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="shop.html">Music</a>
                                            </div>
                                            <h2><a href="product-details.html">Nunc volutpat massa</a></h2>
                                            <div class="rating-result" title="90%">
                                                <span>
                                                    <span>70%</span>
                                                </span>
                                            </div>
                                            <div class="product-price">
                                                <span>$123.85 </span>
                                                <span class="old-price">$235.8</span>
                                            </div>
                                            <div class="product-action-1 show">
                                                <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                    <div class="product-cart-wrap mb-30">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="{{ route('product.details',['slug'=>$fproduct->slug]) }}">
                                                    <img class="hover-img" src="{{asset('assets/imgs/shop/product-6-1.png')}}" alt="">
                                                    <img class="default-img" src="{{asset('assets/imgs/shop/product-6-2.png')}}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-action-1">
                                                <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="hot">-30%</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="shop.html">Speaker</a>
                                            </div>
                                            <h2><a href="product-details.html">Nullam ultricies luctus</a></h2>
                                            <div class="rating-result" title="90%">
                                                <span>
                                                    <span>70%</span>
                                                </span>
                                            </div>
                                            <div class="product-price">
                                                <span>$28.85 </span>
                                                <span class="old-price">$45.8</span>
                                            </div>
                                            <div class="product-action-1 show">
                                                <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                    <div class="product-cart-wrap mb-30">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="{{ route('product.details',['slug'=>$fproduct->slug]) }}">
                                                    <img class="hover-img" src="{{asset('assets/imgs/shop/product-7-1.png')}}" alt="">
                                                    <img class="default-img" src="{{asset('assets/imgs/shop/product-7-2.png')}}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-action-1">
                                                <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="hot">-22%</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="shop.html">Camera</a>
                                            </div>
                                            <h2><a href="product-details.html">Nullam mattis enim</a></h2>
                                            <div class="rating-result" title="90%">
                                                <span>
                                                    <span>70%</span>
                                                </span>
                                            </div>
                                            <div class="product-price">
                                                <span>$238.85 </span>
                                                <span class="old-price">$245.8</span>
                                            </div>
                                            <div class="product-action-1 show">
                                                <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                    <div class="product-cart-wrap mb-30">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="{{ route('product.details',['slug'=>$fproduct->slug]) }}">
                                                    <img class="hover-img" src="{{asset('assets/imgs/shop/product-8-1.png')}}" alt="">
                                                    <img class="default-img" src="{{asset('assets/imgs/shop/product-8-2.png')}}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-action-1">
                                                <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="new">New</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="shop.html">Phone</a>
                                            </div>
                                            <h2><a href="product-details.html">Vivamus sollicitudin</a></h2>
                                            <div class="rating-result" title="90%">
                                                <span>
                                                    <span>98%</span>
                                                </span>
                                            </div>
                                            <div class="product-price">
                                                <span>$1275.85 </span>
                                            </div>
                                            <div class="product-action-1 show">
                                                <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                    <div class="product-cart-wrap mb-30">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="{{ route('product.details',['slug'=>$fproduct->slug]) }}">
                                                    <img class="hover-img" src="{{asset('assets/imgs/shop/product-9-1.png')}}" alt="">
                                                    <img class="default-img" src="{{asset('assets/imgs/shop/product-9-2.png')}}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-action-1">
                                                <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="shop.html">Accessories </a>
                                            </div>
                                            <h2><a href="product-details.html"> Donec ut nisl rutrum</a></h2>
                                            <div class="rating-result" title="90%">
                                                <span>
                                                    <span>70%</span>
                                                </span>
                                            </div>
                                            <div class="product-price">
                                                <span>$238.85 </span>
                                                <span class="old-price">$245.8</span>
                                            </div>
                                            <div class="product-action-1 show">
                                                <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab three (New added)-->
                </div>
                <!--End tab-content-->
            </div>
        </section>
        <section class="banner-2 section-padding pb-0">
            <div class="container">
                <div class="banner-img banner-big wow fadeIn animated f-none">
                    <img src="assets/imgs/banner/banner-3.png" alt="">
                    <div class="banner-text d-md-block d-none">
                        <h4 class="mb-15 mt-40 text-brand">Return and Echange Policy</h4>
                        <h1 class="fw-600 mb-20">Because life is unpredicatable <br>now you have 60 days to <br>change your mind.</h1>
                        <a href="{{ route('shop') }}" class="btn">Learn More <i class="fi-rs-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <section class="popular-categories section-padding mt-15 mb-25">
            <div class="container wow fadeIn animated">
                <h3 class="section-title mb-20"><span>Popular</span> Categories</h3>
                <div class="carausel-6-columns-cover position-relative">
                    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-arrows"></div>
                    <div class="carausel-6-columns" id="carausel-6-columns">
                        @foreach ($pcategories as $pcategory )
                                 <div class="card-1">
                                    <figure class=" img-hover-scale overflow-hidden">
                                        <a href="{{route('product.category',['slug'=>$pcategory->slug]) }}"><img src="{{asset('assets/imgs/categories')}}/{{$pcategory->image}}" alt="{{$pcategory->name}}"></a>
                                    </figure>
                                    <h5><a href="{{route('product.category',['slug'=>$pcategory->slug])}}">{{$pcategory->name}}</a></h5>
                                </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <section class="banners mb-15">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-img wow fadeIn animated">
                            <img src="assets/imgs/banner/banner-5.jpg" alt="">
                            <div class="banner-text">
                                <span>@lang('public.Smart Offer')</span>
                                <h4>@lang('public.Save 25% in') <br>@lang('public.yours first order')</h4>
                                <a href="{{ route('shop') }}">@lang('public.Shop now') <i class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-img wow fadeIn animated">
                            <img src="assets/imgs/banner/banner-2.png" alt="">
                            <div class="banner-text">
                                <span>@lang('public.Sale')</span>
                                <h4>@lang('public.Great Curtains ') <br>@lang('public.Collections')</h4>
                                <a href="{{ route('shop') }}">@lang('public.Shop now')<i class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-md-none d-lg-flex">
                        <div class="banner-img wow fadeIn animated  mb-sm-0">
                            <img src="assets/imgs/banner/banner-1.png" alt="">
                            <div class="banner-text">
                                <span>@lang('public.New Arrivals')</span>
                                <h4>@lang('public.Shop Today’s ') <br>@lang('public.Deals & Offers')</h4>
                                <a href="{{ route('shop') }}">@lang('public.Shop now') <i class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding">
            <div class="container wow fadeIn animated">
                <h3 class="section-title mb-20"><span>@lang('public.New')</span> @lang('public.Arrivals')</h3>
                <div class="carausel-6-columns-cover position-relative">
                    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow " id="carausel-6-columns-2-arrows"></div>
                        <div class="carausel-6-columns carausel-arrow-center" id="carausel-6-columns-2">
                            @foreach($lproducts as $lproduct )
                               <div class="product-cart-wrap small hover-up ">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ route('product.details',['slug'=>$lproduct->slug]) }}">
                                                <img class="default-img  " src="{{ asset('assets/imgs/products')}}/{{ $lproduct->image}}" alt="" >
                                                {{--<img class="hover-img" src="assets/imgs/shop/product-2-2.jpg" alt="">--}}
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            {{--<a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="wishlist.php" tabindex="0"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn small hover-up" href="compare.php" tabindex="0"><i class="fi-rs-shuffle"></i></a>--}}
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="new">@lang('public.New')</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <h2><a href="product-details.html">{{$lproduct->name}}</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>{{$lproduct->price}}</span>
                                            {{--<span class="old-price">$245.8</span>--}}
                                        </div>
                                    </div>
                                </div>
                        @endforeach
                        <!--End product-cart-wrap-2-->
                    </div>
                </div>
            </div>
        </section>


    </main>
</div>
