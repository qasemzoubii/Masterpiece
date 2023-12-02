<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Present Perfect" />
    <meta name="keywords" content="gift, giftshop, present, occasion" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title')</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap"
        rel="stylesheet" />
    <link rel="icon" href="#">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/elegant-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" />
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->

    <div class="container">
        <div class="inner-header">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="logo">
                        <a href="/">
                            <img class="logo" src="{{ asset('./img/logo_2.png') }}" alt="" />
                        </a>
                    </div>
                </div>
                @php
                    $defaultCategoryId = isset($category_id) ? $category_id : 1;
                @endphp
                <div class="col-lg-7 col-md-7" style="margin-top: 40px">
                    <form action="{{ route('search', ['category_id' => $defaultCategoryId]) }}" method="get">
                        <div class="advanced-search">
                            {{-- <button type="button" class="category-btn">All Categories</button> --}}
                            <div class="input-group" style="width: 100%">
                                <input name="name" type="text" placeholder="What do you need?" />
                                <button name="submit" type="submit"><i class="ti-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                {{-- @livewire('header-search-component') --}}
                <div class="col-lg-3 text-right col-md-3">
                    <ul class="nav-right">
                        {{-- <li class="heart-icon">
                            <a href="#">
                                <i class="icon_heart_alt"></i>
                                <span>1</span>
                            </a>
                        </li> --}}
                        <li class="cart-icon">
                            <a href="{{ route('cart') }}">
                                <i class="icon_bag_alt"></i>
                                <span>{{ Cart::count() }}</span>
                            </a>
                            <div class="cart-hover">
                                <div class="select-items">
                                    <table>
                                        <tbody>
                                            @foreach (Cart::content() as $product)
                                                <tr>
                                                    <td class="si-pic">
                                                        <img height="71px" width="71px"
                                                            src="{{ asset($product->options->image) }}"
                                                            alt="" />
                                                    </td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>
                                                                {{ $product->price }} JD</p>
                                                            <h6>
                                                                {{ $product->name }}
                                                            </h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <a href="{{ route('remove-product', $product->rowId) }}"><i
                                                                class="ti-close"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                                <div class="select-total">
                                    <span>total:</span>
                                    <h5>{{ Cart::total() }} JD</h5>
                                </div>
                                <div class="select-button">
                                    <a href="{{ route('cart') }}" class="primary-btn view-card">VIEW CARD</a>
                                    <a href="{{ route('checkout') }}" class="primary-btn checkout-btn">CHECK OUT</a>
                                </div>
                            </div>
                        </li>
                        <li class="cart-price">{{ Cart::total() }} JD</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="nav-item">
        <div class="container">
            <nav class="nav-menu mobile-menu">
                <ul>
                    <li @yield('Home')><a href="/">Home</a></li>
                    {{-- <li class="active"><a href="/">Home</a></li> --}}
                    <li @yield('Shop')>
                        <a href="#" disabled>Shop</a>
                        <ul class="dropdown">
                            @foreach ($navCategories as $navCat)
                                <li><a href="{{ route('shop', $navCat->id) }}">{{ $navCat->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li @yield('Contact')><a href="/contact">Contact</a></li>


                    <li @yield('About')><a href="/about">About us</a></li>

                    @if (Auth::check())
                        <li @yield('Profile')> <a href="{{ route('profile.edit', [Auth::user()]) }}"
                                class="nav-item @yield('Profile')"> <i class="fa-solid fa-user"
                                    style="color: #e7ab3c;"></i> {{ Auth::user()->name }}</a></li>
                        <form style="display: inline-block" method="POST" class="nav-item"
                            action="{{ route('logout') }}">
                            @csrf

                            <li> <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();this.closest('form').submit();">
                                    {{ __('Log Out') }} <i class="fa-solid fa-arrow-right-from-bracket"
                                        style="color: #e7ab3c;"></i>
                                </a></li>
                        </form>
                    @else
                        <li @yield('Login')><a href="/login" class="login-panel"></i>Login</a></li>
                        <li @yield('Register')><a href="/register" class="login-panel"></i>Register</a></li>
                    @endif
        </div>
        </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
    </div>
    </div>
