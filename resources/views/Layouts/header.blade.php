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
    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css" />
    <link rel="stylesheet" href="css/nice-select.css" type="text/css" />
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css" />
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
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
                        <a href="./index.html">
                            <img class="logo" src="./img/logo_2.png" alt="" />
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7" style="margin-top: 40px">
                    <div class="advanced-search">
                        <button type="button" class="category-btn">All Categories</button>
                        <div class="input-group">
                            <input type="text" placeholder="What do you need?" />
                            <button type="button"><i class="ti-search"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 text-right col-md-3">
                    <ul class="nav-right">
                        <li class="heart-icon">
                            <a href="#">
                                <i class="icon_heart_alt"></i>
                                <span>1</span>
                            </a>
                        </li>
                        <li class="cart-icon">
                            <a href="#">
                                <i class="icon_bag_alt"></i>
                                <span>3</span>
                            </a>
                            <div class="cart-hover">
                                <div class="select-items">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td class="si-pic">
                                                    <img src="img/select-product-1.jpg" alt="" />
                                                </td>
                                                <td class="si-text">
                                                    <div class="product-selected">
                                                        <p>$60.00 x 1</p>
                                                        <h6>Kabino Bedside Table</h6>
                                                    </div>
                                                </td>
                                                <td class="si-close">
                                                    <i class="ti-close"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="si-pic">
                                                    <img src="img/select-product-2.jpg" alt="" />
                                                </td>
                                                <td class="si-text">
                                                    <div class="product-selected">
                                                        <p>$60.00 x 1</p>
                                                        <h6>Kabino Bedside Table</h6>
                                                    </div>
                                                </td>
                                                <td class="si-close">
                                                    <i class="ti-close"></i>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="select-total">
                                    <span>total:</span>
                                    <h5>$120.00</h5>
                                </div>
                                <div class="select-button">
                                    <a href="#" class="primary-btn view-card">VIEW CARD</a>
                                    <a href="#" class="primary-btn checkout-btn">CHECK OUT</a>
                                </div>
                            </div>
                        </li>
                        <li class="cart-price">$150.00</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="nav-item">
        <div class="container">
            <nav class="nav-menu mobile-menu">
                <ul>
                    <li class="active"><a href="./index.html">Home</a></li>
                    <li>
                        <a href="./shop.html">Shop</a>
                        <ul class="dropdown">

                            <li><a href="cate-bulid.html">Build your Box</a></li>
                            <li><a href="/cate-birthday.html">Birthday</a></li>
                            <li><a href="/cate-wedding.html">Wedding</a></li>
                            <li><a href="/cate-graduation.html">Graduations</a></li>


                        </ul>
                    </li>
                    <li><a href="./contact.html">Contact</a></li>


                    <li><a href="./about-us.html">About us</a></li>

                    @if (Auth::check())
                        <li> <a href="{{ route('profile.edit', [Auth::user()]) }}"
                                class="nav-item">{{ Auth::user()->name }}</a></li>
                        <form style="display: inline-block" method="POST" class="nav-item"
                            action="{{ route('logout') }}">
                            @csrf

                            <li> <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </a></li>
                        </form>
                    @else
                        <li><a href="/login" class="login-panel"></i>Login</a></li>
                        <li><a href="/register" class="login-panel"></i>Register</a></li>
                    @endif
        </div>
        </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
    </div>
    </div>
