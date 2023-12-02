@extends('Layouts.master')
@section('title', 'Check Out')

@section('content')
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                        <a href="./shop.html">Shop</a>
                        <span>Check Out</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Shopping Cart Section Begin -->


    <section class="checkout-section spad">
        <div class="container">
            {{-- <form action="#" class="checkout-form"> --}}
            <form action="{{ route('pay') }}" method="POST" class="checkout-form">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        {{-- <div class="checkout-content">
                <a href="login.html" class="content-btn">Click Here To Login</a>
              </div> --}}
                        <h4>Billing Details</h4>
                        <div class="row">
                            {{-- <div class="col-lg-6">
                  <label for="fir">First Name<span>*</span></label>
                  <input type="text" id="fir" />
                </div>
                <div class="col-lg-6">
                  <label for="last">Last Name<span>*</span></label>
                  <input type="text" id="last" />
                </div> --}}
                            <!-- <div class="col-lg-12">
                                  <label for="cun-name">Company Name</label>
                                  <input type="text" id="cun-name" />
                                </div> -->
                            <div class="col-lg-12">
                                <label for="country">Country<span>*</span></label>
                                <input type="text" id="country" name="country" required />
                            </div>
                            <div class="col-lg-12">
                                <label for="street">Street Address<span>*</span></label>
                                <input type="text" id="street" class="street-first" name="street_address" required />
                                <!-- <input type="text" /> -->
                            </div>
                            <div class="col-lg-12">
                                <label for="zip">Postcode / ZIP (optional)</label>
                                <input type="text" id="zip" name="post_code" />
                            </div>
                            <div class="col-lg-12">
                                <label for="town">Town / City<span>*</span></label>
                                <input type="text" id="city" name="city" required />
                            </div>
                            {{-- <div class="col-lg-6">
                  <label for="email">Email Address<span>*</span></label>
                  <input type="text" id="email" />
                </div> --}}
                            <div class="col-lg-12">
                                <label for="phone">Phone<span>*</span></label>
                                <input type="text" id="phone" name="phone" required />
                            </div>
                            <div class="col-lg-12">
                                <div class="create-item">
                                    <!-- <label for="acc-create">
                                      Create an account?
                                      <input type="checkbox" id="acc-create" />
                                      <span class="checkmark"></span>
                                    </label> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        {{-- <div class="checkout-content">
                <input type="text" placeholder="Enter Your Coupon Code" name="discount_id" />
              </div> --}}
                        <div class="place-order">
                            <h4>Your Order</h4>

                            <div class="order-total">
                                <ul class="order-table">
                                    <li>Product <span>Total</span></li>

                                    @php
                                        $total = 0;
                                    @endphp


                                    @foreach (Cart::content() as $product)
                                        <li class="fw-normal">
                                            {{ $product->name }} <span> {{ $product->qty }} <b style="color: #e7ab3c">X</b>
                                                {{ $product->price }} JD </span>
                                        </li>
                                    @endforeach







                                    {{-- <!-- <li class="fw-normal">
                      Combination x 1 <span>$60.00</span>
                    </li>
                    <li class="fw-normal">
                      Combination x 1 <span>$120.00</span>
                    </li> --> --}}
                                    {{-- <li class="fw-normal">Subtotal <span>35JD</span></li> --}}
                                    <li class="total-price">Total <span>{{ Cart::total() }} JD</span></li>
                                </ul>
                                <div class="payment-check">
                                    <div class="pc-item">
                                        <!-- <label for="pc-check">
                                        Cheque Payment
                                        <input type="checkbox" id="pc-check" />
                                        <span class="checkmark"></span>
                                      </label> -->
                                    </div>
                                    <div class="pc-item">
                                        <label for="Cash">
                                            Cash
                                            <input type="radio" id="Cash" value="Cash" name="payment_method"
                                                required />
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label for="paypal">
                                            Paypal
                                            <input type="radio" id="paypal" value="paypal" name="payment_method"
                                                required />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="order-btn">
                                    <button type="submit" class="site-btn place-btn">
                                        Place Order
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- Shopping Cart Section End -->
@endsection
