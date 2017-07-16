@extends('frontend.partials.master')
@section('content')
<div class="breadcrumbs">
	<div class="container">
		<div class="row">
			<ul>
				<li class="home">
					<a href="index.html" title="Go to Home Page">Trang chủ</a><span>&mdash;›</span>
				</li>
				<li class="">
					<a href="grid.html" title="Go to Home Page">Sản phẩm</a><span>&mdash;›</span>
				</li>
				<li class="category13">
					<strong>{{ $get_slug->name }}</strong>
				</li>
			</ul>
		</div>
	</div>
</div>

<section class="main-container col2-left-layout">
	<div class="main container">
		<div class="row">
			<section class="col-main col-sm-9 col-sm-push-3 wow">
				<div class="category-title">
					<h1>{{ $get_slug->name }}</h1>
				</div>

				<div class="category-products">
					<div class="toolbar">
						<div id="sort-by">
							<label class="left">Sắp xếp: </label>
							<ul>
								<li><a href="#">Position<span class="right-arrow"></span></a>
									<ul>
										<li><a href="#">Name</a></li>
										<li><a href="#">Price</a></li>
										<li><a href="#">Position</a></li>
									</ul>
								</li>
							</ul>
							<a class="button-asc left" href="#" title="Set Descending Direction">
								<span style="color:#999;font-size:11px;" class="glyphicon glyphicon-arrow-up"></span>
							</a>
						</div>
						<div class="pager">
							<div id="limiter">
								<label>View: </label>
								<ul>
									<li><a href="#">15<span class="right-arrow"></span></a>
										<ul>
											<li><a href="#">20</a></li>
											<li><a href="#">30</a></li>
											<li><a href="#">35</a></li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="pages">
								<label>Page:</label>
								<ul class="pagination">
									<li><a href="#">&laquo;</a></li>
									<li class="active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li><a href="#">&raquo;</a></li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="products-grid">
						@foreach($product as $p)
							<li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<div class="col-item">
									@if($p->discount != 0)
										<div class="sale-label sale-top-right">Sale</div>
									@endif
									<div class="images-container">
										<a class="product-image" title="{{ $p->name }}" href="">
											<img src="../photos/shares/products/{{$p->image}}" class="img-responsive" alt="a" />
										</a>
										<div class="actions">
											<div class="actions-inner">
												<button type="button" title="Thêm vào giỏ hàng" class="button btn-cart">
													<span>+ Giỏ hàng</span>
												</button>
												<ul class="add-to-links">
													<li>
														<a href="" title="Thêm vào yêu thích" class="link-wishlist">
															<span>Yêu thích</span>
														</a>
													</li>
													<li>
														<a href="" title="Thêm vào so sánh" class="link-compare ">
															<span>So sánh</span>
														</a>
													</li>
												</ul>
											</div>
										</div>
										<div class="qv-button-container">
											<a class="qv-e-button btn-quickview-1" href="">
												<span><span>Xem nhanh</span></span>
											</a>
										</div>
									</div>
									<div class="info">
										<div class="info-inner">
											<div class="item-title">
												<a title="{{ $p->name }}" href="">
													{{ $p->name }}
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
															{{ number_format(round($p->unit_price * (100- $p->discount)
																*0.01, -3)) }} đ
														</span>
													</p>
													@if($p->discount != 0)
														<p class="old-price">
															<span class="price-sep">-</span>
																<span class="price">
																	{{ number_format(round($p->unit_price, -3))}} đ
																</span>
														</p>
													@endif
												</div>
											</div>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
							</li>
						@endforeach
					</ul>
				</div>
			</section>
			<aside class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9 wow">
				<div class="side-nav-categories">
					<div class="block-title"> Top sofa </div>
					<div class="category-products">
						<div class="products small-list">
							@foreach($top_sofa as $ts)
							<div class="item">
								<div class="item-area">
									<div class="product-image-area">
										<a href="#" class="product-image">
											<img src="../photos/shares/products/{{ $ts->image }}" alt="products images">
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
				<div class="side-nav-categories">
					<div class="block-title"> Top bàn ghế </div>
					<div class="category-products">
						<div class="products small-list">
							@foreach($top_banghe as $ts)
							<div class="item">
								<div class="item-area">
									<div class="product-image-area">
										<a href="#" class="product-image">
											<img src="../photos/shares/products/{{ $ts->image }}" alt="products images">
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

				<div class="block block-cart">
					<div class="block-title"><span>My Cart</span></div>
					<div class="block-content">
						<div class="summary">
							<p class="amount">There are <a href="#">2 items</a> in your cart.</p>
							<p class="subtotal"> <span class="label">Cart Subtotal:</span> <span class="price">$27.99</span> </p>
						</div>
						<div class="ajax-checkout">
							<button type="submit" title="Submit" class="button button-checkout">
								<span>Checkout</span>
							</button>
						</div>
						<p class="block-subtitle">Recently added item(s) </p>
						<ul>
							<li class="item">
								<a class="product-image" title="Fisher-Price Bubble Mower" href="#">
									<img width="80" alt="Fisher-Price Bubble Mower" src="../frontend/products-images/product1.jpg">
								</a>
								<div class="product-details">
									<div class="access">
										<a class="btn-remove1" title="Remove This Item" href="#">
											<span class="icon"></span>
											Remove
										</a>
									</div>
									<p class="product-name">
										<a href="#">
											Skater Dress In Leaf Print Grouped Product
										</a>
									</p>
									<strong>1</strong> x <span class="price">$19.99</span>
								</div>
							</li>
						</ul>
					</div>
				</div>

				<div class="block block-banner"><a href="#"><img src="../frontend/images/block-banner.png" alt="block-banner"></a></div>
			</aside>
		</div>
	</div>
</section>
@endsection