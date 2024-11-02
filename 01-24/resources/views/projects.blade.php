@extends('layout.app')
@section('content')
<section class="project_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Projects
        </h2>
      </div>
      <div class="carousel-wrap ">
        <div class="filter_box">
          <h6>
            Category filter
          </h6>
          <nav class="owl-filter-bar">
            <a href="#" class="item active" data-owl-filter="*">All</a>
            <a href="#" class="item" data-owl-filter=".painting">Painting</a>
            <a href="#" class="item" data-owl-filter=".reconstruction">Reconstruction </a>
            <a href="#" class="item" data-owl-filter=".repair">Repairs </a>
            <a href="#" class="item" data-owl-filter=".residential">Residential </a>
            <a href="#" class="item" data-owl-filter=".styling">Styling </a>
          </nav>
        </div>

        <div class="owl-carousel project_carousel">
          <div class="item painting">
            <div class="box">
              <div class="img-box">
                <img src="images/project1.jpg" alt="" />
                <a href="" class="pin_link">
                  <i class="fa fa-link" aria-hidden="true"></i>
                </a>
              </div>
              <div class="detail-box">
                <h5>
                  Interior work
                </h5>
                <p>
                  alteration in some form, by injected humour, or randomised words which don't look even slightly
                  believable. If you are going to use
                </p>
              </div>
            </div>
          </div>
          <div class="item reconstruction">
            <div class="box">
              <div class="img-box">
                <img src="images/project2.jpg" alt="" />
                <a href="" class="pin_link">
                  <i class="fa fa-link" aria-hidden="true"></i>
                </a>
              </div>
              <div class="detail-box">
                <h5>
                  Interior work
                </h5>
                <p>
                  alteration in some form, by injected humour, or randomised words which don't look even slightly
                  believable. If you are going to use
                </p>
              </div>
            </div>
          </div>
          <div class="item repair">
            <div class="box">
              <div class="img-box">
                <img src="images/project1.jpg" alt="" />
                <a href="" class="pin_link">
                  <i class="fa fa-link" aria-hidden="true"></i>
                </a>
              </div>
              <div class="detail-box">
                <h5>
                  Interior work
                </h5>
                <p>
                  alteration in some form, by injected humour, or randomised words which don't look even slightly
                  believable. If you are going to use
                </p>
              </div>
            </div>
          </div>
          <div class="item residential">
            <div class="box">
              <div class="img-box">
                <img src="images/project1.jpg" alt="" />
                <a href="" class="pin_link">
                  <i class="fa fa-link" aria-hidden="true"></i>
                </a>
              </div>
              <div class="detail-box">
                <h5>
                  Interior work
                </h5>
                <p>
                  alteration in some form, by injected humour, or randomised words which don't look even slightly
                  believable. If you are going to use
                </p>
              </div>
            </div>
          </div>
          <div class="item styling">
            <div class="box">
              <div class="img-box">
                <img src="images/project1.jpg" alt="" />
                <a href="" class="pin_link">
                  <i class="fa fa-link" aria-hidden="true"></i>
                </a>
              </div>
              <div class="detail-box">
                <h5>
                  Interior work
                </h5>
                <p>
                  alteration in some form, by injected humour, or randomised words which don't look even slightly
                  believable. If you are going to use
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end project section -->

  <!-- info section -->
  <section class="info_section ">

    <div class="container">
      <div class="contact_nav">
        <a href="">
          <i class="fa fa-phone" aria-hidden="true"></i>
          <span>
            Call : +01 123455678990
          </span>
        </a>
        <a href="">
          <i class="fa fa-envelope" aria-hidden="true"></i>
          <span>
            Email : demo@gmail.com
          </span>
        </a>
        <a href="">
          <i class="fa fa-map-marker" aria-hidden="true"></i>
          <span>
            Location
          </span>
        </a>
      </div>

      <div class="info_top ">
        <div class="row info_main_row">
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="info_links">
              <h4>
                QUICK LINKS
              </h4>
              <div class="info_links_menu">
                <a class="" href="index.html">Home <span class="sr-only">(current)</span></a>
                <a class="" href="service.html">Services</a>
                <a class="" href="about.html"> About</a>
                <a class="" href="project.html">Project</a>
                <a class="" href="testimonial.html">Testimonial</a>
                <a class="" href="contact.html">Contact Us</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mx-auto">
            <div class="info_post">
              <h5>
                INSTAGRAM FEEDS
              </h5>
              <div class="post_box">
                <div class="img-box">
                  <img src="images/instagram.jpg" alt="">
                </div>
                <div class="img-box">
                  <img src="images/instagram.jpg" alt="">
                </div>
                <div class="img-box">
                  <img src="images/instagram.jpg" alt="">
                </div>
                <div class="img-box">
                  <img src="images/instagram.jpg" alt="">
                </div>
                <div class="img-box">
                  <img src="images/instagram.jpg" alt="">
                </div>
                <div class="img-box">
                  <img src="images/instagram.jpg" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="info_form">
              <h4>
                SIGN UP TO OUR NEWSLETTER
              </h4>
              <form action="">
                <input type="text" placeholder="Enter Your Email" />
                <button type="submit">
                  Subscribe
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="info_bottom">
        <div class="row">
          <div class="col-md-2">
            <div class="info_logo">
              <a href="">
                <img src="images/logo2.png" alt="">
              </a>
            </div>
          </div>
          <div class="col-md-4 ml-auto">
            <div class="social_box">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

@endsection
