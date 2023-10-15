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
              <span>{{ $category->name }}</span>
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
          <div
            class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter"
          >
            <div class="filter-widget">
              <h4 class="fw-title">Categories</h4>
              <ul class="filter-catagories">
                <!-- <li><a href="cate-bulid.html">Build your Box</a></li> -->
                @foreach ($categories as $category)
                    
                  
                  <li><a href="{{route('shop',$category->id)}}">{{$category->name }}</a></li>
                  @endforeach





                {{-- <li><a href="cate-wedding.html">Wedding</a></li>
                <li><a href="cate-graduation.html">Graduations</a></li> --}}
              </ul>
            </div>
            <div class="filter-widget">
              <h4 class="fw-title">Price</h4>
              <div class="filter-range-wrap">
                <div class="range-slider">
                  <div class="price-input">
                    <input type="text" id="minamount" />
                    <input type="text" id="maxamount" />
                  </div>
                </div>
                <div
                  class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                  data-min="33"
                  data-max="98"
                >
                  <div
                    class="ui-slider-range ui-corner-all ui-widget-header"
                  ></div>
                  <span
                    tabindex="0"
                    class="ui-slider-handle ui-corner-all ui-state-default"
                  ></span>
                  <span
                    tabindex="0"
                    class="ui-slider-handle ui-corner-all ui-state-default"
                  ></span>
                </div>
              </div>
              <a href="#" class="filter-btn">Filter</a>
            </div>
          </div>
          
          <div class="col-lg-9 order-1 order-lg-2">
            <div class="product-show-option">
              <div class="row">
                <div class="col-lg-7 col-md-7">
                  <div class="select-option">
                    <select class="sorting">
                      <option value="">Default Sorting</option>
                    </select>
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




@foreach ($products as $product)
    

                <div class="col-lg-4 col-sm-6">
                  <div class="product-item">
                    <div class="pi-pic">
                      <img
                        src={{ url ($product->image)  }}
                        alt=""
                      />
                      <!-- <div class="sale pp-sale">Sale</div> -->
                      <div class="icon">
                        <i class="icon_heart_alt"></i>
                      </div>
                      <ul>
                        <li class="w-icon active">
                          <a href="#"><i class="icon_bag_alt"></i></a>
                        </li>
                        <li class="quick-view"><a href="{{route('products',$product->id)}}">+ Quick View</a></li>
                        <li class="w-icon">
                          <!-- <a href="#"><i class="fa fa-random"></i></a> -->
                        </li>
                      </ul>
                    </div>
                    <div class="pi-text">
                      <!-- <div class="catagory-name">Towel</div> -->
                      <a href="{{route('products',$product->id)}}">
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






























                
              </div>
            </div>
            <!-- <div class="loading-more">
              <i class="icon_loading"></i>
              <a href="#"> Loading More </a>
            </div> -->
          </div>
        </div>
      </div>
    </section>
    <!-- Product Shop Section End -->

    
@endsection