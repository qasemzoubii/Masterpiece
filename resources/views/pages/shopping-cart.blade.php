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
                        <a href="./shop.html">Shop</a>
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
                                <tr>
                                  <div id="cartUPdate" class="alert alert-warning" style="display: none; text-align: center;"> Please Click On <b> UPDATE CART </b> To Save The Changes </div>
                                </tr>
                                <form action="{{ isset($cart[0]->Product) ? route('cartUpdateD') : route('cartUpdateS') }}"
                                    method="POST">
                                    @csrf
                                    @foreach ($cart as $item)
                                        <tr>
                                            <td class="cart-pic first-row">
                                                <img src="{{ isset($item->product) ? $item->product->image : $item['image'] }}"
                                                    alt="" />
                                            </td>
                                            <td class="cart-title first-row">
                                                <h5>{{ isset($item->product) ? $item->product->name : $item['productname'] }}
                                                </h5>
                                            </td>
                                            <td class="p-price first-row">
                                                {{ isset($item->product) ? $item->product->price : $item['price'] }} JD</td>
                                            <td class="qua-col first-row">
                                                <div class="quantity">
                                                    <div class="pro-qty">
                                                        <span class="dec qtybtn" onclick="decrementQuantity('quantity{{ isset($item->Product) ? $item->Product->id : $item['productId'] }}', {{ isset($item->Product) ? $item->Product->price : $item['price'] }})">-</span>
                                                        <input type="text"
                                                            onchange="updateTotal({{ isset($item->Product) ? $item->Product->id : $item['productId'] }},{{ isset($item->Product) ? $item->Product->price : $item['price'] }})"
                                                            id="quantity{{ isset($item->Product) ? $item->Product->id : $item['productId'] }}"
                                                            value="{{ isset($item->product) ? $item->quantity : $item['quantity'] }}"
                                                            name="quantity{{ isset($item->Product) ? $item->Product->id : $item['productId'] }}" />
                                                            <span class="inc qtybtn" onclick="incrementQuantity('quantity{{ isset($item->Product) ? $item->Product->id : $item['productId'] }}', {{ isset($item->Product) ? $item->Product->price : $item['price'] }})">+</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="total-price first-row">
                                                <span id="total{{ isset($item->Product) ? $item->Product->id : $item['productId'] }}">{{ isset($item->product) ? $item->product->price * $item->quantity : $item['price'] * $item['quantity'] }}</span>
                                                JD
                                            </td>
                                            <td class="close-td first-row"><i class="ti-close"></i></td>
                                        </tr>
                                    @endforeach
                                 


                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="cart-buttons">
                                <a href="#" class="primary-btn continue-shop">Continue shopping</a>
                                <button type="submit" class="primary-btn up-cart">Update cart</button>
                            </div>
                            </form>
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
                                    <li class="subtotal">Subtotal <span>35JD</span></li>
                                    <li class="cart-total">Total <span>35JD</span></li>
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
            document.getElementById('cartUPdate').style.display="block";
        }

        function decrementQuantity(inputId, price) {
            var result = document.getElementById(inputId);
            var quantity = parseInt(result.value, 10);
            if (!isNaN(quantity) && quantity > 0) {
                result.value = quantity - 1;
                var id = inputId.substring(8);
                updateTotal(id, price);
            }
            document.getElementById('cartUPdate').style.display="block";
        }
    </script>


    <!-- Shopping Cart Section End -->
@endsection
