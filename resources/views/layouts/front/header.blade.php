  <header>
      <div class="header-main bg-white sticky-nav ">
          <div class="container position-relative">
              <div class="row">
                  <div class="col-auto align-self-center">
                      <div class="header-logo">
                          <a href="index.html"><img src="assets/images/logo/logo.png" alt="Site Logo" /></a>
                      </div>
                  </div>
                  <div class="col align-self-center d-none d-lg-block">
                      <div class="main-menu">
                          <ul>
                              <li class="dropdown"><a href="{{URL('/')}}">Home</a>

                              </li>
                              <li><a href="{{URL('/site_about')}}">About</a></li>

                              <li class="dropdown position-static"><a href="#">Shop <i class="fa fa-angle-down"></i></a>
                                  <ul class="mega-menu d-block">
                                      <li class="d-flex">
                                          <ul class="d-block">

                                              <li class="title"><a href="#">Shop Page</a></li>
                                              <li><a href="shop-3-column.html">Shop 3 Column</a></li>

                                          </ul>
                                          <ul class="d-block">
                                              <li class="title"><a href="#">product Details Page</a></li>
                                              <li><a href="single-product.html">Product Single</a></li>

                                      </li>
                                  </ul>
                                  <ul class="d-block">
                                      <li class="title"><a href="#">Single Product Page</a></li>
                                      <li><a href="single-product-gallery-right.html">Product Gallery
                                              Right</a> </li>
                                  </ul>
                                  <ul class="d-flex align-items-center p-0 border-0">
                                      <li>
                                          <a class="p-0" href="shop-left-sidebar.html"><img class="img-responsive w-100" src="assets/images/banner/menu-banner-2.png" alt=""></a>
                                      </li>
                                  </ul>
                              </li>
                          </ul>
                          </li>
                          <li><a href="{{URL('/site_contact')}}">Contact</a></li>
                          </ul>
                      </div>
                  </div>
                  <!-- Header Action Start -->
                  <div class="col col-lg-auto align-self-center pl-0">
                      <div class="header-actions">
                          <!-- Single Wedge Start -->
                          <a href="#" class="header-action-btn" data-bs-toggle="modal" data-bs-target="#searchActive">
                              <i class="pe-7s-search"></i>
                          </a>
                          <!-- Single Wedge End -->
                          <div class="header-bottom-set dropdown">
                              <button class="dropdown-toggle header-action-btn" data-bs-toggle="dropdown"><i class="pe-7s-users"></i></button>
                              <ul class="dropdown-menu dropdown-menu-right">
                                  <li><a class="dropdown-item" href="{{URL('/site_member')}}">My account</a></li>
                                  <li><a class="dropdown-item" href="{{URL('/site_cart')}}">Cart</a></li>
                                   @if (Auth::check())
                                    <li> <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item" data-toggle="modal" data-target="#logoutModal">
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                        Logout 
                                    </a></li>
                                   @else 
                                   <li><a class="dropdown-item" href="{{URL('/login')}}">Sign in</a></li>
                                  
                                   @endif
                              </ul>
                          </div>
                          <!-- Single Wedge Start -->
                          <a href="#offcanvas-wishlist" class="header-action-btn offcanvas-toggle">
                              <i class="pe-7s-like"></i>
                          </a>
                          <!-- Single Wedge End -->
                          <a href="#offcanvas-cart" class="header-action-btn header-action-btn-cart offcanvas-toggle pr-0">
                              <i class="pe-7s-shopbag"></i>
                              <span class="header-action-num">01</span>
                              <!-- <span class="cart-amount">€30.00</span> -->
                          </a>
                          <a href="#offcanvas-mobile-menu" class="header-action-btn header-action-btn-menu offcanvas-toggle d-lg-none">
                              <i class="pe-7s-menu"></i>
                          </a>
                      </div>
                      <!-- Header Action End -->
                  </div>
              </div>
          </div>
      </div>
  </header>
  <!-- Header Area End -->
  <div class="offcanvas-overlay"></div>