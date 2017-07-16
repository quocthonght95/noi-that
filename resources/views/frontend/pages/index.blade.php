@extends('frontend.partials.master')
@section('title', 'Trang chủ')
@section('content')
@include('frontend.partials.slide')
<div class="header-service">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-sm-6 col-xs-12">
        <div class="content">
          <div class="icon-truck">&nbsp;</div>
          <span><strong>FREE SHIPPING</strong> on order over $99</span>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 col-xs-12">
        <div class="content">
          <div class="icon-support">&nbsp;</div>
          <span><strong>Customer Support</strong> Service</span>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 col-xs-12">
        <div class="content">
          <div class="icon-money">&nbsp;</div>
          <span><strong>3 days Money Back</strong> Guarantee</span>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 col-xs-12">
        <div class="content">
          <div class="icon-dis">&nbsp;</div>
          <span><strong class="orange">5% discount</strong> on order over $199</span>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="main-container col1-layout home-content-container">
  <div class="container">
    <div class="row">
      <div class="std">
        <div class="col-lg-8 col-xs-12 col-sm-8 best-seller-pro wow">
          <div class="slider-items-products">
            <div class="new_title center">
              <h2>Sofa nổi bật</h2>
            </div>
            <div id="best-seller-slider" class="product-flexslider hidden-buttons">
              <div class="slider-items slider-width-col4"> 
                <!-- Item -->
                @foreach($sofa as $s)
                <div class="item">
                  <div class="col-item">
                    @if($s->discount != 0)
                    <div class="sale-label sale-top-right">Sale</div>
                    @endif
                      {{-- <div class="new-label new-top-left">New</div> --}}
                    <div class="images-container">
                      <a class="product-image" title="{{ $s->name }}" href="product_detail.html">
                        <img src="photos/shares/products/{{ $s->image }}"
                        class="img-responsive" alt="product-image" />
                      </a>
                      <div class="actions">
                        <div class="actions-inner">
                          <button type="button" title="Thêm vào giỏ hàng" class="button btn-cart">
                            <span> + giỏ hàng</span>
                          </button>
                          <ul class="add-to-links">
                            <li><a href="wishlist.html" title="Thêm vào yêu thích" class="link-wishlist">
                              <span>Yêu thích</span></a>
                            </li>
                            <li><a href="compare.html" title="Thêm so sánh" class="link-compare ">
                              <span>So sánh</span></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="qv-button-container">
                        <a href="quick_view.html" class="qv-e-button btn-quickview-1" title="Xem nhanh">
                          <span><span>Xem nhanh</span></span>
                        </a>
                      </div>
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title">
                          <a title="{{ $s->name }}" href="product_detail.html">
                            {{ $s->name }}
                          </a>
                        </div>
                        <!--item-title-->
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div style="width:60%" class="rating"></div>
                            </div>
                          </div>
                          <div class="price-box">
                            <p class="special-price"> 
                              <span class="price">
                                {{ number_format(round($s->unit_price * (100- $s->discount)*0.01, -3)) }} đ
                              </span>
                            </p>
                            @if($s->discount != 0)
                            <p class="old-price">
                            <span class="price-sep">-</span>
                            <span class="price"> {{ number_format(round($s->unit_price, -3))}} đ</span>
                            </p>
                            @endif
                          </div>
                        </div>
                        <!--item-content--> 
                      </div>
                      <!--info-inner--> 

                      <!--actions-->
                      <div class="clearfix"> </div>
                    </div>
                  </div>
                </div>
                @endforeach
                <!-- End Item --> 
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-xs-12 col-sm-4 wow latest-pro small-pr-slider">
          <div class="slider-items-products">
            <div class="new_title center">
              <h2>Sản phẩm mới nhất</h2>
            </div>
            <div id="latest-deals-slider" class="product-flexslider hidden-buttons latest-item">
              <div class="slider-items slider-width-col4">
                @foreach($new as $n)
                <div class="item">
                  <div class="col-item">
                    <div class="new-label new-top-left">New</div>
                    <div class="images-container">
                      <a class="product-image" title="{{$n->name}}" href="product_detail.html">
                        <img src="photos/shares/products/{{$n->image}}"
                        class="img-responsive" alt="product-image" />
                      </a>
                      <div class="actions">
                        <div class="actions-inner">
                          <ul class="add-to-links">
                            <li>
                              <a href="wishlist.html" title="Thêm vào yêu thích" class="link-wishlist">
                                <span>Yêu thích</span>
                              </a>
                            </li>
                            <li>
                              <a href="compare.html" title="Thêm vào so sánh" class="link-compare ">
                                <span>So sánh</span>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="qv-button-container">
                        <a href="quick_view.html" class="qv-e-button btn-quickview-1">
                          <span><span>Xem nhanh</span></span>
                        </a>
                      </div>
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title">
                          <a title="{{$n->name}}" href="product_detail.html">
                            {{$n->name}}
                          </a>
                        </div>
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div style="width:60%" class="rating"></div>
                            </div>
                          </div>
                          <div class="price-box">
                            @if($n->discount !=0)
                            <p class="old-price">
                              <span class="price-sep"></span>
                              <span class="price">
                                {{ number_format(round($n->unit_price, -3))}}
                              </span>
                            </p>
                            @endif
                            <p class="special-price">
                              <span class="price">
                                {{ number_format(round($n->unit_price * (100- $n->discount)*0.01, -3)) }} đ
                              </span>
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="actions">
                        <button class="button btn-cart" title="Thêm vào giỏ hàng" type="button">
                          <span>+ Giỏ hàng</span>
                        </button>
                      </div>
                      <div class="clearfix"> </div>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="recommend container">
  <div class="new-pro-slider small-pr-slider" style="overflow:visible">
    <div class="slider-items-products">
      <div class="new_title center">
        <h2>Bàn ghế nổi bật</h2>
      </div>
      <div id="recommend-slider" class="product-flexslider hidden-buttons">
        <div class="slider-items slider-width-col3">
          @foreach($banghe as $bg)
          <div class="item">
            <div class="col-item">
              @if($bg->discount != 0)
                <div class="sale-label sale-top-right">Sale</div>
              @endif
              <div class="images-container">
                <a class="product-image" title="{{$bg->name}}" href="product_detail.html">
                  <img alt="a" class="img-responsive" src="photos/shares/products/{{$bg->image}}">
                </a>
                <div class="actions">
                  <div class="actions-inner">
                    <ul class="add-to-links">
                      <li>
                        <a href="wishlist.html" title="Thêm vào yêu thích" class="link-wishlist">
                          <span>Yêu thích</span>
                        </a>
                      </li>
                      <li>
                        <a href="compare.html" title="Thêm vào so sánh" class="link-compare ">
                          <span>So Sánh</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="qv-button-container">
                  <a href="quick_view.html" class="qv-e-button btn-quickview-1" title="Xem nhanh">
                    <span><span>Xem nhanh</span></span>
                  </a>
                </div>
              </div>
              <div class="info">
                <div class="info-inner">
                  <div class="item-title">
                    <a title="{{ $bg->name }}" href="product_detail.html">
                      {{ $bg->name }}
                    </a>
                  </div>
                  <div class="item-content">
                    <div class="ratings">
                      <div class="rating-box">
                        <div class="rating" style="width:60%"></div>
                      </div>
                    </div>
                    <div class="price-box">
                      <p class="special-price">
                        <span class="price">
                          {{ number_format(round($bg->unit_price * (100- $bg->discount)*0.01, -3)) }} đ
                        </span>
                      </p>
                      @if($bg->discount != 0)
                        <p class="old-price">
                        <span class="price-sep">-</span>
                        <span class="price"> {{ number_format(round($bg->unit_price, -3))}} đ</span>
                        </p>
                      @endif
                    </div>
                  </div>
                  <!--item-content-->
                </div>
                <!--info-inner-->
                <div class="actions">
                  <button class="button btn-cart" title="Thêm vào giỏ hàng" type="button"><span>+ Giỏ hàng</span></button>
                </div>
                <!--actions-->
                <div class="clearfix"> </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>

<div class="top-offer-banner wow">
  <section class="middle-slider container">
    <div class="row">
      <div class="col-sm-4 custom-slider">
        <div>
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> 
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active"> <img src="frontend/images/slide1.jpg" alt="slide1">
                <div class="carousel-caption">
                  <h3><a href="product_detail.html" title=" Sample Product">Hot collection</a></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus diam arcu.</p>
                </div>
              </div>
              <div class="item"> <img src="frontend/images/slide2.jpg" alt="slide2">
                <div class="carousel-caption">
                  <h3><a href="product_detail.html" title=" Sample Product">Summer collection</a></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus diam arcu.</p>
                </div>
              </div>
              <div class="item"> <img src="frontend/images/slide3.jpg" alt="slide3">
                <div class="carousel-caption">
                  <h3><a href="product_detail.html" title=" Sample Product">New Arrivals</a></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus diam arcu.</p>
                </div>
              </div>
            </div>

            <!-- Controls --> 
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
          </div>
        </div>
        <div class="col-sm-4 pro-block">
          <div class="inner-div">
            <h2 class="category-pro-title"><span>Top Sofa</span></h2>
            <div class="category-products">
              <div class="products small-list">
                @foreach($top_sofa as $ts)
                  <div class="item">
                    <div class="item-area">
                      <div class="product-image-area">
                        <a href="#" class="product-image">
                          <img src="photos/shares/products/{{ $ts->image }}" alt="products images">
                        </a>
                      </div>
                      <div class="details-area">
                        <h2 class="product-name">
                          <a href="#">{{ $ts->name }}</a>
                        </h2>
                        <div class="ratings">
                          <div class="rating-box">
                            <div class="rating"></div>
                          </div>
                        </div>
                        <div class="price-box">
                          <p class="special-price">
                            <span class="price">
                              {{ number_format(round($ts->unit_price * (100- $ts->discount)*0.01, -3)) }} đ
                            </span>
                          </p>
                          @if($ts->discount != 0)
                            <p class="old-price">
                            <span class="price-sep">-</span>
                            <span class="price"> {{ number_format(round($ts->unit_price, -3))}} đ</span>
                            </p>
                          @endif
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4 pro-block1">
          <div class="inner-div1">
            <h2 class="category-pro-title"><span>Top Bàn ghế</span></h2>
            <div class="category-products">
              <div class="products small-list">
                @foreach($top_banghe as $tbg)
                  <div class="item">
                    <div class="item-area">
                      <div class="product-image-area">
                        <a href="#" class="product-image">
                          <img src="photos/shares/products/{{ $tbg->image }}" alt="products images">
                        </a>
                      </div>
                      <div class="details-area">
                        <h2 class="product-name"><a href="#">{{ $tbg->name }}</a></h2>
                        <div class="ratings">
                          <div class="rating-box">
                            <div class="rating"></div>
                          </div>
                        </div>
                        <div class="price-box">
                          <p class="special-price">
                            <span class="price">
                              {{ number_format(round($tbg->unit_price * (100- $tbg->discount)*0.01, -3)) }} đ
                            </span>
                          </p>
                          @if($tbg->discount != 0)
                            <p class="old-price">
                            <span class="price-sep">-</span>
                            <span class="price"> {{ number_format(round($tbg->unit_price, -3))}} đ</span>
                            </p>
                          @endif
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
  <section class="latest-blog container wow">
    <div class="blog-title">
      <h2><span>Tin Tức</span></h2>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-4">
        <div class="blog-img"> <img src="frontend/images/blog-img1.jpg" alt="Image"> 
          <!--<div class="mask"> <a class="info" href="blog-detail.html">Read More</a> </div>--> 
        </div>
        <h3><a href="blog-detail.html">Pellentesque habitant morbi</a> </h3>
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce sit  ... </p>
        <div class="post-date"><i class="icon-calendar"></i> Apr 10, 2014</div>
      </div>
      <div class="col-xs-12 col-sm-4 wow">
        <div class="blog-img"> <img src="frontend/images/blog-img2.jpg" alt="Image"> 
          <!--<div class="mask"> <a class="info" href="blog-detail.html">Read More</a> </div>--> 
        </div>
        <h3><a href="blog-detail.html">Pellentesque habitant morbi</a> </h3>
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce sit  ... </p>
        <div class="post-date"><i class="icon-calendar"></i> Apr 10, 2014</div>
      </div>
      <div class="col-xs-12 col-sm-4">
        <div class="blog-img"> <img src="frontend/images/blog-img3.jpg" alt="Image"> 
          <!--<div class="mask"> <a class="info" href="blog-detail.html">Read More</a> </div>--> 
        </div>
        <h3><a href="blog-detail.html">Pellentesque habitant morbi</a> </h3>
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce sit  ... </p>
        <div class="post-date"><i class="icon-calendar"></i> Apr 10, 2014</div>
      </div>
    </div>
  </section>

  <section class="featured-pro wow animated parallax parallax-2">
    <div class="container">
      <div class="std">
        <div class="slider-items-products">
          <div class="featured_title center">
            <h2>Sản phẩm bán chạy</h2>
          </div>
          <div id="featured-slider" class="product-flexslider hidden-buttons">
            <div class="slider-items slider-width-col4">
              @foreach($banghe as $bg)
                <div class="item">
                  <div class="col-item">
                    @if($bg->discount != 0)
                      <div class="sale-label sale-top-right">Sale</div>
                    @endif
                    <div class="images-container">
                      <a class="product-image" title="{{$bg->name}}" href="product_detail.html">
                        <img alt="a" class="img-responsive" src="photos/shares/products/{{$bg->image}}">
                      </a>
                      <div class="actions">
                        <div class="actions-inner">
                          <ul class="add-to-links">
                            <li>
                              <a href="wishlist.html" title="Thêm vào yêu thích" class="link-wishlist">
                                <span>Yêu thích</span>
                              </a>
                            </li>
                            <li>
                              <a href="compare.html" title="Thêm vào so sánh" class="link-compare ">
                                <span>So Sánh</span>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="qv-button-container">
                        <a href="quick_view.html" class="qv-e-button btn-quickview-1" title="Xem nhanh">
                          <span><span>Xem nhanh</span></span>
                        </a>
                      </div>
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title">
                          <a title="{{ $bg->name }}" href="product_detail.html">
                            {{ $bg->name }}
                          </a>
                        </div>
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating" style="width:60%"></div>
                            </div>
                          </div>
                          <div class="price-box">
                            <p class="special-price">
                              <span class="price">
                                {{ number_format(round($bg->unit_price * (100- $bg->discount)*0.01, -3)) }} đ
                              </span>
                            </p>
                            @if($bg->discount != 0)
                              <p class="old-price">
                              <span class="price-sep">-</span>
                              <span class="price"> {{ number_format(round($bg->unit_price, -3))}} đ</span>
                              </p>
                            @endif
                          </div>
                        </div>
                        <!--item-content-->
                      </div>
                      <!--info-inner-->
                      <div class="actions">
                        <button class="button btn-cart" title="Thêm vào giỏ hàng" type="button"><span>+ Giỏ hàng</span></button>
                      </div>
                      <!--actions-->
                      <div class="clearfix"> </div>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection