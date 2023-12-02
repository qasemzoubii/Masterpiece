@extends('Layouts.master')
@section('title', 'Single')

@section('content')

    @if (count($Reviews) > 0)
        @php
            $R1 = 0;
            $R2 = 0;
            $R3 = 0;
            $R4 = 0;
            $R5 = 0;
            foreach ($Reviews as $review) {
                if ($review->rating == 1) {
                    $R1++;
                } elseif ($review->rating == 2) {
                    $R2++;
                } elseif ($review->rating == 3) {
                    $R3++;
                } elseif ($review->rating == 4) {
                    $R4++;
                } elseif ($review->rating == 5) {
                    $R5++;
                }
            }
            $AVG = ($R1 + $R2 * 2 + $R3 * 3 + $R4 * 4 + $R5 * 5) / count($Reviews);
            $roundedAVG = round($AVG, 1);
        @endphp
    @endif
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
                    <div class="ps-lg-3 mt-5 pt-5">
                        <h4 class="title text-dark">
                            {{ $product->name }}
                        </h4>
                        <div class="d-flex flex-row my-3">
                            <div class="text-warning mb-1 me-2">
                                @if (count($Reviews) > 0)


                                    @php
                                        $fullStars = floor($AVG);
                                        $hasHalfStar = $AVG - $fullStars > 0;
                                        $emptyStars = 5 - $fullStars - ($hasHalfStar ? 1 : 0);
                                    @endphp

                                    <!-- Full stars -->
                                    @for ($i = 0; $i < $fullStars; $i++)
                                        <i class="fa fa-star"></i>
                                    @endfor

                                    <!-- Half star -->
                                    @if ($hasHalfStar)
                                        <i class="fas fa-star-half-alt"></i>
                                    @endif

                                    <!-- Empty stars -->
                                    @for ($i = 0; $i < $emptyStars; $i++)
                                        <i class="fa fa-star-o"></i>
                                    @endfor
                                @else
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                @endif


                                {{-- <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fas fa-star-half-alt"></i> --}}
                                <span class="ms-1"> {{ count($Reviews) > 0 ? $roundedAVG : '5' }} </span>
                            </div>
                            {{-- <span class="text-muted"><i class="fas fa-shopping-basket fa-sm mx-1"></i>154
                                orders</span> --}}
                            {{-- <span class="text-success ms-2">In stock</span> --}}
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

    <section>
        <div class="text-center">
            <div class="product-tab col-lg-9 mx-auto">
                <div class="tab-item">
                    <ul class="nav" role="tablist">
                        <li class="w-50">
                            <a class="active w-100" data-toggle="tab" href="#tab-1" role="tab">Customer Reviews
                                ({{ count($Reviews) }})</a>
                        </li>

                        <li class="w-50">
                            <a class="w-100" data-toggle="tab" href="#tab-2" role="tab">DESCRIPTION</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-item-content">
                    <div class="tab-content">

                        <div class="tab-pane fade-in active" id="tab-1" role="tabpanel">
                            <div class="customer-review-option">
                                <h4>({{ count($Reviews) }}) Comments</h4>
                                <div class="comment-option col-9 mx-auto">

                                    @foreach ($Reviews as $review)
                                        <div class="co-item text-left">
                                            <div class="avatar-pic">
                                                <img src="{{ url($review->User->image ? $review->User->image : 'images/default.png') }}"
                                                    alt="" />
                                            </div>
                                            <div class="avatar-text">
                                                <div class="at-rating">
                                                    @for ($i = 0; $i < 5; $i++)
                                                        @if ($review->rating > $i)
                                                            <i class="fa fa-star"></i>
                                                        @else
                                                            <i class="fa fa-star-o"></i>
                                                        @endif
                                                    @endfor
                                                </div>
                                                <h5>{{ $review->User->name }}<span>{{ $review->created_at }}</span></h5>
                                                <div class="at-reply">{{ $review->review_text }}</div>
                                            </div>
                                        </div>
                                    @endforeach




























                                </div>
                                <style>
                                    .stars input {
                                        display: none;
                                    }

                                    .stars label {
                                        color: gold;
                                        font-size: 30px;
                                    }
                                </style>

                                <div class="leave-comment">
                                    <h4>Leave A Comment</h4>
                                    @if (!Auth::check())
                                        <h4 style="color: goldenrod">You must be <span class="text-danger">logged
                                                in</span> to leave a comment</h4>
                                    @elseif(!$hasBeenBought)
                                        <h4 style="color: goldenrod">You must <span class="text-danger">Buy</span> this
                                            product to be able to leave a comment</h4>
                                    @else
                                        <form class="comment-form" method="POST" action="{{ route('review') }}">
                                            <input type="hidden" name="product_id" value="{{ $product->id }}">

                                            @csrf
                                            <div class="stars mb-1">
                                                <h4 class="mb-1">Your Ratind</h4>
                                                <label><input type="radio" name="rating" value="1" required><i
                                                        class="fa fa-star-o"></i></label>
                                                <label><input type="radio" name="rating" value="2" required><i
                                                        class="fa fa-star-o"></i></label>
                                                <label><input type="radio" name="rating" value="3" required><i
                                                        class="fa fa-star-o"></i></label>
                                                <label><input type="radio" name="rating" value="4" required><i
                                                        class="fa fa-star-o"></i></label>
                                                <label><input type="radio" name="rating" value="5" required><i
                                                        class="fa fa-star-o"></i></label>
                                            </div>
                                            <div class="row col-9 mx-auto">

                                                <div class="col-lg-12">
                                                    <textarea placeholder="Comment" name="review_text"></textarea>
                                                    <button type="submit" value="submit" class="site-btn">
                                                        Submit Comment
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-2" role="tabpanel">
                            <div class="product-content">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h5>Introduction</h5>
                                        <p>{{ $product->description }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                                <img style="max-height: 300px" src="{{ url($item->image) }}" alt="" />
                                <!-- <div class="sale">Sale</div> -->
                                <div class="icon">
                                    {{-- <i class="icon_heart_alt"></i> --}}
                                </div>
                                <ul>
                                    <li class="w-icon active">
                                        <a href="{{ route('store.add-to-cart', $item->id) }}"><i
                                                class="icon_bag_alt"></i></a>
                                    </li>
                                    <li class="quick-view"><a href="{{ route('products', $item->id) }}"> View
                                            Product</a></li>
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
                    <script>
                        const stars = document.querySelectorAll('.stars i');
                        const ratingInput = document.querySelectorAll('input[name="rating"]');

                        stars.forEach((star, index) => {
                            star.addEventListener('click', () => {
                                resetStars();

                                for (let i = 0; i <= index; i++) {
                                    stars[i].classList.remove('fa-star-o');
                                    stars[i].classList.add('fa-star');
                                    ratingInput[i].checked = true;
                                }
                            });
                        });

                        function resetStars() {
                            stars.forEach(star => {
                                star.classList.remove('fa-star');
                                star.classList.add('fa-star-o');
                            });
                        }
                    </script>

@endsection
