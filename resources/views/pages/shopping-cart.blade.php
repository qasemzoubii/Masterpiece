@extends('Layouts.master')
@section('title', 'Cart')

@section('content')
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a>
                        {{-- <a href="./shop.html">Shop</a> --}}
                        <span>Shopping Cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-table">
                        @if (!Cart::Count() == 0)
                        <table>

                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th class="p-name">Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th><i class="ti-close"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                        @foreach (Cart::content() as $product)
                                            <tr>
                                                <td class="cart-pic first-row">
                                                    <a href="{{ route('products', $product->id) }}"><img width="150"
                                                            src="{{ asset($product->options->image) }}"
                                                            alt="" /></a>
                                                </td>
                                                <td class="cart-title first-row">
                                                    <h5>{{ $product->name }}</h5>
                                                </td>
                                                <td class="p-price first-row">
                                                    {{ $product->price }} JD</td>
                                                <td class="qua-col first-row">
                                                    <div class="quantity">
                                                        <div class="pro-qty">
                                                            <a href="{{ route('qty-decrement', $product->rowId) }}"
                                                                class="dec qtybtn">-</a>
                                                            <input style="width:50px" type="text" class="form-control"
                                                                value="{{ $product->qty }}" min="1" max="21">
                                                            <a href="{{ route('qty-increment', $product->rowId) }}"
                                                                class="inc qtybtn">+</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="total-price first-row">
                                                    <span>{{ $product->price * $product->qty }}</span>
                                                </td>
                                                <td class="close-td first-row"><a
                                                        href="{{ route('remove-product', $product->rowId) }}"><i
                                                            class="ti-close"></i></a></td>
                                            </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                                @else
                                    <div class="text-center w-100 my-5 py-5">
                                        <p class="h4">The Cart Is Empty </p>
                                    </div>
                                @endif
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="cart-buttons">
                                <a href="#" class="primary-btn continue-shop">Continue shopping</a>
                                {{-- <button type="submit" class="primary-btn up-cart">Update cart</button> --}}
                            </div>
                            <div class="discount-coupon">
                                <h6>Discount Codes</h6>
                                <form action="#" class="coupon-form">
                                    <input type="text" placeholder="Enter your codes" />
                                    <button type="submit" class="site-btn coupon-btn">
                                        Apply
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 offset-lg-4">
                            <div class="proceed-checkout">
                                <ul>
                                    <li class="subtotal">Subtotal <span> {{ Cart::subtotal() }} JD</span></li>
                                    <li class="cart-total">Total <span> {{ Cart::total() }} JD</span></li>
                                </ul>
                                <a href="{{ route('checkout') }}" class="proceed-btn">PROCEED TO CHECK OUT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script>
        function updateTotal(id, price) {
            var quantity = document.getElementById('quantity' + id).value;
            var totalElement = document.getElementById('total' + id);
            var total = price * quantity;
            totalElement.textContent = total;
            document.getElementById('cartUPdate').style.display = "block";
        }

        function incrementQuantity(inputId, price) {
            var result = document.getElementById(inputId);
            var quantity = parseInt(result.value, 10);
            if (!isNaN(quantity)) {
                result.value = quantity + 1;
                var id = inputId.substring(8);
                updateTotal(id, price);
            }
            document.getElementById('cartUPdate').style.display = "block";
        }

        function decrementQuantity(inputId, price) {
            var result = document.getElementById(inputId);
            var quantity = parseInt(result.value, 10);
            if (!isNaN(quantity) && quantity > 0) {
                result.value = quantity - 1;
                var id = inputId.substring(8);
                updateTotal(id, price);
            }
            document.getElementById('cartUPdate').style.display = "block";
        }
    </script>


    <!-- Shopping Cart Section End -->
@endsection
