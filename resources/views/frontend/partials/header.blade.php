<header class="header-container">
    <div class="header-top">
      <div class="container">
        <div class="row">
          <!-- Header Language -->
          <div class="col-xs-6">
            <div class="dropdown block-language-wrapper"> <a role="button" data-toggle="dropdown" data-target="#" class="block-language dropdown-toggle" href="#"> <img src="/frontend/images/english.png" alt="language"> English <span class="caret"></span> </a>
              <ul class="dropdown-menu" role="menu">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="/frontend/images/english.png" alt="language"> English </a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="/frontend/images/francais.png" alt="language"> French </a></li>
              </ul>
            </div>
            <!-- End Header Language -->
          </div>
          <div class="col-xs-6">
            <!-- Header Top Links -->
            <div class="toplinks">
              <div class="links">
                <div class="phone hidden-xs">01639.27.72.72</div>
              </div>
            </div>
            <!-- End Header Top Links -->
          </div>
        </div>
      </div>
    </div>
    <div class="header container">
      <div class="row">
        <div class="col-lg-2 col-sm-3 col-md-2 col-xs-12">
          <!-- Header Logo -->
          <a class="logo" title="Magento Commerce" href="{{ route('home') }}"><img alt="Magento Commerce" src="/frontend/images/logo.png"></a>
          <!-- End Header Logo -->
        </div>
        <div class="col-lg-7 col-sm-4 col-md-6 col-xs-12">
          <!-- Search-col -->
          <div class="search-box">
            <form action="http://htmldemo.magikcommerce.com/ecommerce/inspire-html-template/furniture/cat" method="POST" id="search_mini_form" name="Categories">
              <select name="category_id" class="cate-dropdown hidden-xs">
                <option value="0">Tất cả sản phẩm</option>
                <option value="36">Sofa</option>
                <option value="37">Bàn ghế</option>
              </select>
              <input type="text" placeholder="Search here..." value="" maxlength="70" class="" name="search" id="search">
              <button id="submit-button" class="search-btn-bg"><span>Search</span></button>
            </form>
          </div>
          <!-- End Search-col -->
        </div>
        <!-- Top Cart -->
        <div class="col-lg-3 col-sm-5 col-md-4 col-xs-12">
          <div class="top-cart-contain">
            <div class="mini-cart">
              <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"> <a href="shopping_cart.html"> <i class="icon-cart"></i>
                <div class="cart-box"><span class="title">Giỏ hàng</span><span id="cart-total"> {{ $quantity }} </span></div>
                </a></div>
              <div>
                <div class="top-cart-content arrow_box">
                  <div class="block-subtitle">Sản phẩm đã thêm</div>
                  <ul id="cart-sidebar" class="mini-products-list">
                    @foreach($contents as $c)
                    <li class="item even"> <a class="product-image" href="{{ route('product_detail', $c->slug) }}" title="{{ $c->name }}"><img src="photos/shares/products/{{ $c->options->img }}" width="80"></a>
                      <div class="detail-item">
                        <div class="product-details"> <a href="#" title="Remove This Item" onClick="" class="glyphicon glyphicon-remove">&nbsp;</a> <a class="glyphicon glyphicon-pencil" title="Edit item" href="#">&nbsp;</a>
                          <p class="product-name"> <a href="#" title="Downloadable Product">{{ $c->name }} </a> </p>
                        </div>
                        <div class="product-details-bottom"> <span class="price">{{ number_format($c->price) }}đ</span> <span class="title-desc">Số lượng:</span> <strong>{{ $c->qty }}</strong> </div>
                      </div>
                    </li>
                    @endforeach
                  </ul>
                  <div class="top-subtotal">Tổng tiền: <span class="price">{{ $totals }} đ</span></div>
                  <div class="actions">
                    <button class="btn-checkout" type="button"><span><a href="">Mua hàng</a></span></button>
                    <button class="view-cart" type="button"><span><a href="{{ route('cart') }}">Giỏ hàng</a></span></button>
                  </div>
                </div>
              </div>
            </div>
            <div id="ajaxconfig_info" style="display:none"> <a href="#/"></a>
              <input value="" type="hidden">
              <input id="enable_module" value="1" type="hidden">
              <input class="effect_to_cart" value="1" type="hidden">
              <input class="title_shopping_cart" value="Go to shopping cart" type="hidden">
            </div>
          </div>
          <div class="signup"><a title="Login" href="login.html"><span>Đăng ký</span></a></div>
          <span class="or"> | </span>
          <div class="login"><a title="Login" href="login.html"><span>Đăng nhập</span></a></div>
        </div>
      </div>
    </div>
  </header>