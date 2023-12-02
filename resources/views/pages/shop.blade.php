@extends('Layouts.master')
@section('title', 'Shop')
@section('Shop')
    class="active"
@endsection

@section('content')

    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a>
                        {{-- <span>{{ $category->name }}</span> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Product Shop Section Begin -->
    <section class="product-shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
                    <div class="filter-widget">
                        <h4 class="fw-title">Categories</h4>
                        <ul class="filter-catagories">
                            <!-- <li><a href="cate-bulid.html">Build your Box</a></li> -->
                            @foreach ($categories as $category)
                                <li><a href="{{ route('shop', $category->id) }}">{{ $category->name }}</a></li>
                            @endforeach





                            {{-- <li><a href="cate-wedding.html">Wedding</a></li>
                <li><a href="cate-graduation.html">Graduations</a></li> --}}
                        </ul>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Price</h4>
                        <form action="{{ route('shop', ['category_id' => $category_id]) }}" method="GET">
                            <!-- Update the form action -->
                            @csrf
                            <div class="widget-desc">
                                <div class="slider-range">
                                    <div data-min="0" data-max="100" data-unit="JD"
                                        class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"
                                        data-value-min="0" data-value-max="100" data-label-result="Price:">
                                        <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                    </div>
                                    <div class="range-price">Price: JD 0 - JD 100</div>
                                </div>
                            </div>
                            <!-- Add hidden input fields to capture price range -->
                            <input type="hidden" name="min_price" id="min_price" value="">
                            <input type="hidden" name="max_price" id="max_price" value="">
                            <button type="submit" class="filter-btn">Filter</button>
                        </form>
                    </div>

                </div>

                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="product-show-option">
                        <div class="row">
                            <div class="col-lg-7 col-md-7">
                                <div class="select-option">
                                    {{-- <select class="sorting">
                                        <option value="">Default Sorting</option>
                                    </select> --}}
                                    <form method="get" action="{{ route('shop', ['category_id' => $category_id]) }}"
                                        class="form-inline">
                                        <select class="sorting" name="sort" id="sortSelect"
                                            onchange="this.form.submit()">
                                            <option selected disabled for="sortSelect">Sort by:</option>

                                            <option value="az" {{ Request::get('sort') === 'az' ? 'selected' : '' }}>A -
                                                Z
                                            </option>

                                            <option value="za" {{ Request::get('sort') === 'za' ? 'selected' : '' }}>Z -
                                                A
                                            </option>
                                            <option value="high_price"
                                                {{ Request::get('sort') === 'high_price' ? 'selected' : '' }}>High Price
                                            </option>
                                            <option value="low_price"
                                                {{ Request::get('sort') === 'low_price' ? 'selected' : '' }}>
                                                Low Price
                                        </select>
                                    </form>
                                    <select class="p-show">
                                        <option value="">Show:</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 text-right">
                                <p>Show 01- 09 Of 36 Product</p>
                            </div>
                        </div>
                    </div>
                    <div class="product-list">
                        <div class="row">



                            @if ($products[0])
                            
                            @foreach ($products as $product)
                                <div class="col-lg-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="pi-pic">
                                            <img src={{ url($product->image) }} alt="" />
                                            <!-- <div class="sale pp-sale">Sale</div> -->
                                            <div class="icon">
                                                {{-- <i class="icon_heart_alt"></i> --}}
                                            </div>
                                            <ul>
                                                <li class="w-icon active">
                                                    <a class="product-cart-icon"
                                                        href="{{ route('store.add-to-cart', $product->id) }}"><i
                                                            class="icon_bag_alt"></i></a>
                                                </li>
                                                <li class="quick-view"><a href="{{ route('products', $product->id) }}">+
                                                        Quick View</a></li>
                                                <li class="w-icon">
                                                    {{-- <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>  --}}

                                                </li>
                                            </ul>
                                        </div>
                                        <div class="pi-text">
                                            <!-- <div class="catagory-name">Towel</div> -->
                                            <a href="{{ route('products', $product->id) }}">
                                                <h5>{{ $product->name }}</h5>
                                            </a>
                                            <div class="product-price">
                                                {{ $product->price }} JD
                                                <!-- <span>$35.00</span> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            @else
                                <div class="text-center w-100 my-5 py-5">
                                    <p class="h4">There Is No Products</p>
                                </div>
                            @endif
                        </div>
                    </div>
                    <!-- <div class="loading-more">
                                              <i class="icon_loading"></i>
                                              <a href="#"> Loading More </a>
                                            </div> -->
                </div>
            </div>
        </div>
        <div class="pagination-links">
            {{ $products->links() }}
        </div>
    </section>
    <!-- Product Shop Section End -->

    <!-- Your HTML content -->

    <!-- Include jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            $(".slider-range-price").each(function() {
                var min = 0; // Set the minimum value to $0
                var max = $(this).data("max");
                var unit = $(this).data("unit");
                var value_min = $(this).data("value-min");
                var value_max = $(this).data("value-max");
                var label_result = $(this).data("label-result");
                var t = $(this);

                $(this).slider({
                    range: true,
                    min: min,
                    max: max,
                    values: [value_min, value_max],
                    slide: function(event, ui) {
                        // Update the range price display
                        $(".range-price").text(
                            "Price: $" + ui.values[0] + " - $" + ui.values[1]
                        );

                        // Update the hidden input values with the slider's values
                        $("#min_price").val(ui.values[0]);
                        $("#max_price").val(ui.values[1]);
                    },
                });
            });

            // Prevent default anchor click
            $('a[href="#"]').on('click', function(e) {
                e.preventDefault();
            });

            // Initiate WOW.js
            if ($(window).width() > 767) {
                new WOW().init();
            }
        });
    </script>

    <!-- Rest of your HTML content -->

@endsection
