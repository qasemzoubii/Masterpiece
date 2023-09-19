@extends('Layouts.master')
@section('title', 'Contact Us')

@section('content')
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="breadcrumb-text">
              <a href="index.html"><i class="fa fa-home"></i> Home</a>
              <span>Contact</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Map Section Begin -->
    <div class="map spad">
      <div class="container">
        <div class="map-inner">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3363.009560388833!2d35.84709387523376!3d32.55259009542224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151c7715f2c2e7ab%3A0x51755840c8ddbefd!2sOrange%20Digital%20Village%20Irbid!5e0!3m2!1sen!2sjo!4v1693408413988!5m2!1sen!2sjo"
            height="610"
            style="border: 0"
            allowfullscreen=""
          >
          </iframe>
          <div class="icon">
            <i class="fa fa-map-marker"></i>
          </div>
        </div>
      </div>
    </div>
    <!-- Map Section Begin -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-5">
            <div class="contact-title">
              <h4>Contacts Us</h4>
              <p>
                Contrary to popular belief, Lorem Ipsum is simply random text.
                It has roots in a piece of classical Latin literature from 45
                BC, maki years old.
              </p>
            </div>
            <div class="contact-widget">
              <div class="cw-item">
                <div class="ci-icon">
                  <i class="ti-location-pin"></i>
                </div>
                <div class="ci-text">
                  <span>Address:</span>
                  <p>Jordan-Irbid</p>
                </div>
              </div>
              <div class="cw-item">
                <div class="ci-icon">
                  <i class="ti-mobile"></i>
                </div>
                <div class="ci-text">
                  <span>Phone:</span>
                  <p>+962 78.765.6330</p>
                </div>
              </div>
              <div class="cw-item">
                <div class="ci-icon">
                  <i class="ti-email"></i>
                </div>
                <div class="ci-text">
                  <span>Email:</span>
                  <p>qasem.zoubi2000@gmail.com</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 offset-lg-1">
            <div class="contact-form">
              <div class="leave-comment">
                <h4>Leave A Comment</h4>
                <p>Our staff will call back later and answer your questions.</p>
                <form action="#" class="comment-form">
                  <div class="row">
                    <div class="col-lg-6">
                      <input type="text" placeholder="Your name" />
                    </div>
                    <div class="col-lg-6">
                      <input type="text" placeholder="Your email" />
                    </div>
                    <div class="col-lg-12">
                      <textarea placeholder="Your message"></textarea>
                      <button type="submit" class="site-btn">
                        Send message
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact Section End -->
    @endsection