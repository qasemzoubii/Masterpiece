@extends('Layouts.master')
@section('title', 'Home')
@section('Home')
    class="active"
@endsection

@section('content')
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-items set-bg" data-setbg="./img/slider.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <!-- <span>Bag,kids</span> -->
                            <h1>Make Others Happy</h1>
                            <p>
                            <h5>Yesterday's the past, tomorrow's the future but today is a
                                gift. That's why it's called the present.</h5>
                            </p>
                            <a href="{{ route('shop', 1) }}" class="primary-btn">Shop Now</a>
                        </div>
                    </div>
                    <!-- <div class="off-card">
                      <h2>Sale <span>50%</span></h2>
                    </div> -->
                </div>
            </div>
            <div class="single-hero-items set-bg" data-setbg="./img/slider2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <!-- <span>Bag,kids</span> -->
                            <h1>Make Others Happy</h1>
                            <p>
                            <h5> Fully prepared, ready-to-deliver gift boxes, or completely customized!
                                We've got something for any occasion!</h5>
                            </p>
                            <a href="{{ route('shop', 1) }}" class="primary-btn">Build Now</a>
                        </div>
                    </div>
                    <!-- <div class="off-card">
                      <h2>Sale <span>50%</span></h2>
                    </div> -->

                </div>

            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Banner Section Begin -->
    <div class="banner-section spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Gifts for Occasions</h2>
                    </div>
                </div>
                @foreach ($categories as $category)
                    <div class="col-lg-4">
                        <div class="single-banner">
                            <a href="{{ route('shop', $category->id) }}">
                                <img src="{{ $category->image }}" alt="" />
                                <div class="inner-text">
                                    <h4>{{ $category->name }}</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Banner Section End -->
    <center>
        <a href="{{ route('shop', 1) }}" class="primary-btn">See More</a>
    </center>
    <!-- Women Banner Section Begin -->
    <section class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-large set-bg" data-setbg="./img/new_arrival.jpg">
                        <!-- <h2>Women’s</h2> -->
                        <!-- <a href="#">Discover More</a> -->
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="filter-control">
                        <!-- <ul>
                        <li class="active">Fashion</li>
                        <li>Beauty & Self-Care</li>
                        <li>Jewelry & Accessories</li>
                      </ul> -->
                    </div>
                    <div class="product-slider owl-carousel">
                        @foreach ($products as $product)
                            <div class="product-item">
                                <div class="pi-pic">
                                    <img style="max-height: 300px" src="{{ $product->image }}" alt="" />
                                    <!-- <div class="sale">Sale</div> -->
                                    <div class="icon">
                                        {{-- <i class="icon_heart_alt"></i> --}}
                                    </div>
                                    <ul>
                                        <li class="w-icon active">
                                            <a class="product-cart-icon"
                                                href="{{ route('store.add-to-cart', $product->id) }}"><i
                                                    class="icon_bag_alt"></i></a>
                                        </li>
                                        <li class="quick-view"><a href="{{ route('products', $product->id) }}">
                                                View Product</a></li>
                                        <li class="w-icon">
                                            <!-- <a href="#"><i class="fa fa-random"></i></a> -->
                                        </li>
                                    </ul>
                                </div>
                                <div class="pi-text">
                                    <!-- <div class="catagory-name">Coat</div> -->
                                    <a href="#">
                                        <h5>{{ $product->name }}</h5>
                                    </a>
                                    <div class="product-price">
                                        {{ $product->price }} JD
                                        <!-- <span>$35.00</span> -->
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Women Banner Section End -->

    <!-- Deal Of The Week Section Begin-->
    <section class="deal-of-week set-bg spad" style="background-color: #f4f2e6">
        <div class="row container">
            <div class="col-lg-8 text-center">
                <div class="section-title">
                    <h2>{{ $productHero->name }}</h2>
                    <p>
                        {{ $productHero->description }}
                    </p>
                    <div class="product-price">
                        {{ $productHero->price }} JD
                        <span>/ Watch</span>
                    </div>
                </div>
                {{-- <div class="countdown-timer" id="countdown">
                    <div class="cd-item">
                        <span>56</span>
                        <p>Days</p>
                    </div>
                    <div class="cd-item">
                        <span>12</span>
                        <p>Hrs</p>
                    </div>
                    <div class="cd-item">
                        <span>40</span>
                        <p>Mins</p>
                    </div>
                    <div class="cd-item">
                        <span>52</span>
                        <p>Secs</p>
                    </div>
                </div> --}}
                <a href="{{ route('products', $productHero->id) }}" class="primary-btn">Shop Now</a>
            </div>
            <div class="col-lg-4">
                <img src="{{ url($productHero->image) }}" alt="" />
            </div>
        </div>
    </section>
    <!-- Deal Of The Week Section End -->

    <!-- Man Banner Section Begin -->
    <section class="man-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">

                    <div class="product-slider owl-carousel">
                        @foreach ($randomProducts as $item)
                            
                        
                        <div class="product-item">
                            <div class="pi-pic">
                                <img style="max-height: 300px" src="{{ $item->image }}" alt="" />
                                <!-- <div class="sale">Sale</div> -->
                                <div class="icon">
                                    {{-- <i class="icon_heart_alt"></i> --}}
                                </div>
                                <ul>
                                    <li class="w-icon active">
                                        <a href="{{ route('store.add-to-cart' , $item->id) }}"><i class="icon_bag_alt"></i></a>
                                    </li>
                                    <li class="quick-view"><a href="{{ route('products' , $item->id) }}"> View Product</a></li>
                                    <li class="w-icon">
                                        <!-- <a href="#"><i class="fa fa-random"></i></a> -->
                                    </li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <!-- <div class="catagory-name">Coat</div> -->
                                <a href="#">
                                    <h5>{{ $item->name }}</h5>
                                </a>
                                <div class="product-price">
                                    {{ $item->price }} JD
                                    <!-- <span>$35.00</span> -->

                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="product-large set-bg m-large" data-setbg="img/box.jpg">
                        <!-- <h2>Men’s</h2>
                      <a href="#">Discover More</a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Man Banner Section End -->

@endsection
