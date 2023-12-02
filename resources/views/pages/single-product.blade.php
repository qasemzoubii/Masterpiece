@extends('Layouts.master')
@section('title', 'Single')

@section('content')

    <!-- content -->
    <section class="py-5">
        <div class="container">
            <div class="row gx-5">
                <aside class="col-lg-6">
                    <div class="border rounded-4 mb-3 d-flex justify-content-center">
                        <a data-fslightbox="mygalley" class="rounded-4" target="_blank" data-type="image"
                            href="{{ url($product->image) }}">
                            <img style="max-width: 100%; max-height: 100vh; margin: auto" class="rounded-4 fit"
                                src="{{ url($product->image) }}" />
                        </a>
                    </div>
                    <div class="d-flex justify-content-center mb-3">




                        @for ($i = 1; $i <= 5; $i++)
                            @php
                                $imageKey = 'image' . $i;
                            @endphp
                            @if ($product->$imageKey)
                                <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank"
                                    data-type="image" href="{{ url($product->$imageKey) }}" class="item-thumb">
                                    <img width="60" height="60" class="rounded-2"
                                        src="{{ url($product->$imageKey) }}" />
                                </a>
                            @endif
                        @endfor











                    </div>

                </aside>
                <main class="col-lg-6">
                    <div class="ps-lg-3">
                        <h4 class="title text-dark">
                            {{ $product->name }}
                        </h4>
                        <div class="d-flex flex-row my-3">
                            <div class="text-warning mb-1 me-2">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span class="ms-1"> 4.5 </span>
                            </div>
                            <span class="text-muted"><i class="fas fa-shopping-basket fa-sm mx-1"></i>154
                                orders</span>
                            <span class="text-success ms-2">In stock</span>
                        </div>

                        <div class="mb-3">
                            <span class="h5">{{ $product->price }} JD </span>
                            <!-- <span class="text-muted">/per box</span> -->
                        </div>

                        <p>
                            {{ $product->description }}
                        </p>

                        <div class="row">
                            <dt class="col-3">Occasion:</dt>
                            <dd class="col-9">{{ $category->name }}</dd>

                            {{-- <dt class="col-3">Color</dt> --}}
                            {{-- <dd class="col-9">Mix</dd> --}}

                            <!-- <dt class="col-3">Material</dt>
                                    <dd class="col-9">Cotton, Jeans</dd> -->

                            <!-- <dt class="col-3">Brand</dt>
                                    <dd class="col-9">Reebook</dd> -->
                        </div>

                        <hr />
                        <div class="row mb-4">
                            <!-- <div class="col-md-4 col-6" style="margin-top: 33px;">
                                      <label class="mb-2">Size</label>
                                      <select
                                        class="form-select border border-secondary"
                                        style="height: 35px"
                                      >
                                        <option>Small</option>
                                        <option>Medium</option>
                                        <option>Large</option>
                                      </select>
                                    </div> -->
                            <!-- col.// -->
                            <div class="col-md-4 col-6 mb-3">
                                <label class="mb-2 d-block">Quantity</label>
                                <div class="product-details">
                                    <div class="quantity" style="display: -webkit-box;">
                                        <div class="pro-qty pro-qty-js">
                                            <input type="text" value="1" name="qty">
                                        </div>
                                        <a href="{{ route('store.add-to-cart', $product->id) }}"
                                            style="white-space: nowrap;" class="primary-btn pd-cart">Add to
                                            cart</a>
                                    </div>
                                </div>


                                {{-- <div class="input-group mb-3" style="width: 170px ;  ">
                    <button
                      class="btn btn-white border border-secondary px-3" style= "border-radius : 0 "
                      type="button"
                      id="button-addon1"
                      data-mdb-ripple-color="dark"
                    >
                      <i class="fas fa-minus"></i>
                    </button>
                    <input
                      type="text"
                      class="form-control text-center border border-secondary "
                      placeholder="1"
                      aria-label="Example text with button addon"
                      aria-describedby="button-addon1"
                    />
                    <button
                      class="btn btn-white border border-secondary px-3 " style= "border-radius : 0"
                      type="button"
                      id="button-addon2"
                      data-mdb-ripple-color="dark"
                    >
                      <i class="fas fa-plus"></i>
                    </button>
                  </div> --}}
                            </div>
                        </div>
                        {{-- <a href="check-out.html" class="btn btn-warning shadow-0"> BUY NOW </a> --}}
                        {{-- <a href="{{ route('cart.store', $id = $product->id) }}" class="btn btn-primary shadow-0">
                            <i class="me-1 fa fa-shopping-basket"></i> ADD TO CART
                        </a> --}}

                    </div>
                </main>
            </div>
        </div>
    </section>
    <section class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
                <!-- <div class="col-lg-3"> -->
                <!-- <div class="product-large set-bg" data-setbg="/img/new_arrival.jpg"> -->
                <!-- <h2>Women’s</h2> -->
                <!-- <a href="#">Discover More</a> -->
                <!-- </div> -->
            </div>
            <div class="col-lg-8 offset-lg-2">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>You may also like
                        </h2>
                    </div>
                </div>
                <div class="product-slider owl-carousel">
                    @foreach ($related as $item)
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="{{ url($item->image) }}" alt="" />
                                <!-- <div class="sale">Sale</div> -->
                                <div class="icon">
                                    {{-- <i class="icon_heart_alt"></i> --}}
                                </div>
                                <ul>
                                    <li class="w-icon active">
                                        <a class="product-cart-icon"
                                            href="{{ route('store.add-to-cart', $item->id) }}"><i
                                                class="icon_bag_alt"></i></a>
                                    </li>
                                    <li class="quick-view"><a href="{{ route('products', $item->id) }}">
                                            View Product</a></li>
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
        </div>
    </section>


@endsection
