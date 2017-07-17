<nav>
    <div class="container">
      <div class="nav-inner">
        <!-- mobile-menu -->
        <div class="hidden-desktop" id="mobile-menu">
          <ul class="navmenu">
            <li>
              <div class="menutop">
                <div class="toggle"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></div>
                <h2>Menu</h2>
              </div>
              <ul style="display:none;" class="submenu">
                <li>
                  <ul class="topnav">
                    <li class="level0 nav-6 level-top first parent"> <a class="level-top" href="{{ route('home') }}">
                      <span>Trang chủ</span> </a>
                    </li>
                    @foreach($category as $c)
                    <li class="level0 nav-6 level-top"> <a class="level-top" href="{{ route('products', $c->slug) }}">
                      <span>{{ $c->name }}</span> </a>
                    </li>
                    @endforeach
                    <li class="level0 nav-8 level-top parent"> <a class="level-top" href="grid.html"> <span></span> Giới thiệu</a> </li>
                    <li class="level0 nav-9 level-top last parent "> <a class="level-top" href="contact.html"> <span>Liên hệ</span> </a> </li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
          <!--navmenu--> 
        </div>
        <!--End mobile-menu --> 
        <a class="logo-small" title="Magento Commerce" href="{{ route('home') }}"><img alt="Magento Commerce" src="/frontend/images/logo-small.png"></a>
        <ul id="nav" class="hidden-xs">
          <li class="level0 parent drop-menu"><a href="{{ route('home') }}" class="active"><span>Trang chủ</span> </a>
          </li>
          @foreach($category as $v)
            <li class="level0 nav-6 level-top"> <a class="level-top" href="{{ route('products',$v->slug) }}">
              <span>{{ $v->name }}</span> </a>
            </li>
          @endforeach
          </li>
          <li class="level0 nav-7 level-top parent"> <a href="grid.html" class="level-top"> <span>Tin tức</span> </a>
          </li>
          <li class="level0 nav-5 level-top first"> <a class="level-top" href="grid.html"> <span>Giới thiệu</span> </a>
          </li>
          <li class="level0 nav-5 level-top parent"><a href="grid.html"><span>Liên hệ </span> </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>