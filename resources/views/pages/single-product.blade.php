@extends('Layouts.master')
@section('title', 'Single')

@section('content')

    <!-- content -->
    <section class="py-5">
      <div class="container">
        <div class="row gx-5">
          <aside class="col-lg-6">
            <div class="border rounded-4 mb-3 d-flex justify-content-center">
              <a
                data-fslightbox="mygalley"
                class="rounded-4"
                target="_blank"
                data-type="image"
                href="img/products/DSC_0010_grande.jpg"
              >
                <img
                  style="max-width: 100%; max-height: 100vh; margin: auto"
                  class="rounded-4 fit"
                  src="img/products/DSC_0010_grande.jpg"
                />
              </a>
            </div>
            <div class="d-flex justify-content-center mb-3">
              <a
                data-fslightbox="mygalley"
                class="border mx-1 rounded-2"
                target="_blank"
                data-type="image"
                href="img/products/DSC_0010_grande.jpg"
                class="item-thumb"
              >
                <img
                  width="60"
                  height="60"
                  class="rounded-2"
                  src="img/products/DSC_0010_grande.jpg"
                />
              </a>
              <a
                data-fslightbox="mygalley"
                class="border mx-1 rounded-2"
                target="_blank"
                data-type="image"
                href="img/products/DSC_0010_grande.jpg"
                class="item-thumb"
              >
                <img
                  width="60"
                  height="60"
                  class="rounded-2"
                  src="img/products/DSC_0012_grande.jpg"
                />
              </a>
              <a
                data-fslightbox="mygalley"
                class="border mx-1 rounded-2"
                target="_blank"
                data-type="image"
                href="img/products/DSC_0010_grande.jpg"
                class="item-thumb"
              >
                <img
                  width="60"
                  height="60"
                  class="rounded-2"
                  src="img/products/DSC_0010_grande.jpg"
                />
              </a>
              <a
                data-fslightbox="mygalley"
                class="border mx-1 rounded-2"
                target="_blank"
                data-type="image"
                href="img/products/DSC_0012_grande.jpg"
                class="item-thumb"
              >
                <img
                  width="60"
                  height="60"
                  class="rounded-2"
                  src="img/products/DSC_0012_grande.jpg"
                />
              </a>
              <a
                data-fslightbox="mygalley"
                class="border mx-1 rounded-2"
                target="_blank"
                data-type="image"
                href="img/products/DSC_0010_grande.jpg"
                class="item-thumb"
              >
                <img
                  width="60"
                  height="60"
                  class="rounded-2"
                  src="img/products/DSC_0010_grande.jpg"
                />
              </a>
            </div>

          </aside>
          <main class="col-lg-6">
            <div class="ps-lg-3">
              <h4 class="title text-dark">
                Flowers Gift Box XL
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
                <span class="text-muted"
                  ><i class="fas fa-shopping-basket fa-sm mx-1"></i>154
                  orders</span
                >
                <span class="text-success ms-2">In stock</span>
              </div>

              <div class="mb-3">
                <span class="h5">35JD</span>
                <!-- <span class="text-muted">/per box</span> -->
              </div>

              <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Delectus, voluptatem explicabo? Cumque mollitia praesentium provident repudiandae distinctio quisquam porro sed deleniti pariatur vero error, laboriosam, dolores magnam alias, accusantium quidem.
              </p>

              <div class="row">
                <dt class="col-3">Type:</dt>
                <dd class="col-9">flowers</dd>

                <dt class="col-3">Color</dt>
                <dd class="col-9">Mix</dd>

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
                  <div class="input-group mb-3" style="width: 170px ;  ">
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
                  </div>
                </div>
              </div>
              <a href="check-out.html" class="btn btn-warning shadow-0"> BUY NOW </a>
              <a href="shopping-cart.html" class="btn btn-primary shadow-0">
                <i class="me-1 fa fa-shopping-basket"></i> ADD TO CART
              </a>
              
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
              <div class="product-item">
                <div class="pi-pic">
                  <img src="img/products/889_grande.jpg" alt="" />
                  <!-- <div class="sale">Sale</div> -->
                  <div class="icon">
                    <i class="icon_heart_alt"></i>
                  </div>
                  <ul>
                    <li class="w-icon active">
                      <!-- <a href="#"><i class="icon_bag_alt"></i></a> -->
                    </li>
                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                    <li class="w-icon">
                      <!-- <a href="#"><i class="fa fa-random"></i></a> -->
                    </li>
                  </ul>
                </div>
                <div class="pi-text">
                  <!-- <div class="catagory-name">Coat</div> -->
                  <a href="#">
                    <h5>Chocolate rose bouquet</h5>
                  </a>
                  <div class="product-price">
                    30JD 
                    <!-- <span>$35.00</span> -->
                  </div>
                </div>
              </div>
              <div class="product-item">
                <div class="pi-pic">
                  <img src="img/products/01_0c622fa3-c6b9-4dc2-be2d-f07caa30d8c0_grande.jpg" alt="" />
                  <div class="icon">
                    <i class="icon_heart_alt"></i>
                  </div>
                  <ul>
                    <li class="w-icon active">
                      <!-- <a href="#"><i class="icon_bag_alt"></i></a> -->
                    </li>
                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                    <li class="w-icon">
                      <!-- <a href="#"><i class="fa fa-random"></i></a> -->
                    </li>
                  </ul>
                </div>
                <div class="pi-text">
                  <!-- <div class="catagory-name">Shoes</div> -->
                  <a href="#">
                    <h5>Graduation hood box</h5>
                  </a>
                  <div class="product-price">20JD</div>
                </div>
              </div>
              <div class="product-item">
                <div class="pi-pic">
                  <img src="img/products/original_CW_grande.jpg" alt="" />
                  <div class="icon">
                    <i class="icon_heart_alt"></i>
                  </div>
                  <ul>
                    <li class="w-icon active">
                      <!-- <a href="#"><i class="icon_bag_alt"></i></a> -->
                    </li>
                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                    <li class="w-icon">
                      <!-- <a href="#"><i class="fa fa-random"></i></a> -->
                    </li>
                  </ul>
                </div>
                <div class="pi-text">
                  <!-- <div class="catagory-name">Towel</div> -->
                  <a href="#">
                    <h5>BOSS Number One 125ml</h5>
                  </a>
                  <div class="product-price">50JD</div>
                </div>
              </div>
              <div class="product-item">
                <div class="pi-pic">
                  <img src="img/products/DSC_0010_grande.jpg" alt="" />
                  <div class="icon">
                    <i class="icon_heart_alt"></i>
                  </div>
                  <ul>
                    <li class="w-icon active">
                      <!-- <a href="#"><i class="icon_bag_alt"></i></a> -->
                    </li>
                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                    <li class="w-icon">
                      <!-- <a href="#"><i class="fa fa-random"></i></a> -->
                    </li>
                  </ul>
                </div>
                <div class="pi-text">
                  <!-- <div class="catagory-name">Towel</div> -->
                  <a href="#">
                    <h5>Flowers Gift Box XL</h5>
                  </a>
                  <div class="product-price">35JD</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <div class="footer-left">
              <div class="footer-logo">
                <!-- <a href="#"><img src="img/logo (2).png" alt="" /></a> -->
              </div>
              <ul>
                <!-- <li>Address: 60-49 Road 11378 New York</li> -->
                <li>Phone: +962-787656330</li>
                <li>Email: qasem.zoubi2000@gmail.com</li>
              </ul>
              <div class="footer-social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-github"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-2 offset-lg-1">
            <div class="footer-widget">
              <h5>Information</h5>
              <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Checkout</a></li>
                <li><a href="#">Contact</a></li>
                <!-- <li><a href="#">Serivius</a></li> -->
              </ul>
            </div>
          </div>
          <div class="col-lg-2">
            <div class="footer-widget">
              <h5>My Account</h5>
              <ul>
                <li><a href="#">My Account</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Shopping Cart</a></li>
                <li><a href="#">Shop</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="newslatter-item">
              <h5>Join Our Newsletter Now</h5>
              <p>
                Get E-mail updates about our latest shop and special offers.
              </p>
              <form action="#" class="subscribe-form">
                <input type="text" placeholder="Enter Your Mail" />
                <button type="button">Subscribe</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="copyright-reserved">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="copyright-text">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;
                <script>
                  document.write(new Date().getFullYear());
                </script>
                All rights reserved | Qasem AL-Zou'bi
                <i class="fa fa-heart-o" aria-hidden="true"></i>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </div>
              <div class="payment-pic">
                <img src="img/payment-method.png" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection