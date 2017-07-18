@extends('frontend.partials.master')
@section('title', $product_detail->name)
@section('content')
<div class="breadcrumbs">
	<div class="container">
		<div class="row">
			<ul>
				<li class="home">
					<a href="index.html" title="Go to Home Page">Trang chủ</a>
					<span>&mdash;›</span>
				</li>
				<li class="">Chi tiết sản phẩm<span>&mdash;›</span></li>
				<li class="category13"><strong>{{ $product_detail->name }}</strong></li>
			</ul>
		</div>
	</div>
</div>
<section class="main-container col1-layout">
	<div class="main container">
		<div class="col-main">
			<div class="row">
				<div class="product-view wow">
					<div class="product-essential">
						<form action="#" method="post" id="product_addtocart_form">
							<div class="product-img-box col-lg-6 col-sm-6 col-xs-12">
								<ul class="moreview" id="moreview">
									<li class="moreview_thumb thumb_6">
										<img class="moreview_thumb_image"
											src="../photos/shares/products/{{ $product_detail->image }}">
										<img class="moreview_source_image"
											src="../photos/shares/products/{{ $product_detail->image }}" alt="">
											<span class="roll-over">Di chuyển chuột vào hình để phóng to</span>
										<img style="position: absolute;" class="zoomImg"
											src="frontend/products-images/product8.jpg">
									</li>
								</ul>
								<div class="moreview-control"> <a style="right: 42px;" href="javascript:void(0)" class="moreview-prev"></a> <a style="right: 42px;" href="javascript:void(0)" class="moreview-next"></a> </div>
							</div>

							<!-- end: more-images -->

							<div class="product-shop col-lg-6 col-sm-6 col-xs-12">
								<div class="product-next-prev"> <a class="product-next" href="#"><span></span></a> <a class="product-prev" href="#"><span></span></a> </div>
								<div class="product-name">
									<h1>{{ $product_detail->name }}</h1>
									<p class="availability in-stock"><span>Còn hàng</span></p>
								</div>

								<div class="ratings">
									<p>Chất liệu : {{ $product_detail->material }}</p>
								</div>
								<div class="ratings">
									<p>Size : {{ $product_detail->size }}</p>
								</div>
								<div class="ratings">
									<p>Bảo hành : {{ $product_detail->guarantee }}</p>
								</div>
								<div class="price-block">
									<div class="price-box">
										<p class="special-price">
											<span class="price">Giá :
												{{ number_format(round($product_detail->unit_price *
												(100- $product_detail->discount)*0.01, -3)) }} đ
											</span>
										</p>
										@if($product_detail->discount != 0)
											<p class="old-price">
												<span class="price-sep">-</span>
												<span class="price">
													{{ number_format(round($product_detail->unit_price, -3))}} đ
												</span>
											</p>
										@endif
									</div>
								</div>
								<div class="short-description">
									<h2>Quick Overview</h2>
									<p></p>
									</div>
									<div class="add-to-box">
										<div class="add-to-cart">
											<label for="qty">Số lượng:</label>
											<div class="pull-left">
												<div class="custom pull-left">
													<button onClick="var result = document.getElementById('qty');
													var qty = result.value; if( !isNaN( qty )) result.
													value++;return false;" class="increase items-count" type="button">
														<i class="icon-plus">&nbsp;</i>
													</button>
													<input type="text" class="input-text qty" title="Qty"
													value="1" maxlength="12" id="qty" name="qty">
													<button onClick="var result = document.getElementById('qty');
													var qty = result.value; if( !isNaN( qty ) &amp;&amp;
													qty &gt; 0 ) result.value--;return false;"
													class="reduced items-count" type="button">
														<i class="icon-minus">&nbsp;</i>
													</button>
												</div>
											</div>
											<button onClick="productAddToCartForm.submit(this)" class="button btn-cart"
											title="Thêm vào giỏ hàng" type="button">
												<span><i class="icon-basket"></i> + Giỏ hàng</span>
											</button>
										</div>
										<div class="email-addto-box">
											<ul class="add-to-links">
												<li>
													<a class="link-wishlist" href="#"><span>Add to Wishlist</span></a>
												</li>
												<li><span class="separator">|</span> <a class="link-compare" href="#"><span>Add to Compare</span></a></li>
											</ul>
											<p class="email-friend">
												<a href="#" class=""><span>Email to Friend</span></a>
											</p>
										</div>
									</div>
								</div>
						</form>
					</div>
						<div class="product-collateral">
							<div class="col-sm-12 wow">
								<ul id="product-detail-tab" class="nav nav-tabs product-tabs">
									<li class="active">
										<a href="#product_tabs_description" data-toggle="tab">Thông tin chi tiết </a>
									</li>
									<li><a href="#product_tabs_tags" data-toggle="tab">Bình luận</a></li>
								</ul>
								<div id="productTabContent" class="tab-content">
									<div class="tab-pane fade in active" id="product_tabs_description">
										<div class="std">
											{{ $product_detail->description }}
										</div>
									</div>
									<div class="tab-pane fade" id="product_tabs_tags">
										<div class="box-collateral box-tags">
										<div class="tags">
										</div>
										<p class="note">Comming soon</p>
										</div>
									</div>
								<div class="tab-pane fade" id="reviews_tabs">
							</div>
						</div>
						<div class="col-sm-12">
							<div class="box-additional">
								<div class="related-pro wow">
									<div class="slider-items-products">
										<div class="new_title center">
											<h2>Sản phẩm cùng loại</h2>
										</div>
										<div id="related-products-slider" class="product-flexslider hidden-buttons">
											<div class="slider-items slider-width-col4">
												@foreach($product_related as $p)
													<div class="item">
														<div class="col-item">
															@if($p->discount != 0)
																<div class="sale-label sale-top-right">Sale</div>
															@endif
															<div class="images-container">
																<a class="product-image" title="{{ $p->name }}"
																	href="{{ route('product_detail',
																	$p->slug) }}">
																<img alt="a" class="img-responsive"
																	src="../photos/shares/products/
																	{{ $p->image }}">
																	</a>
																</a>
																<div class="actions">
																	<div class="actions-inner">
																		<button type="button" title="Thêm vào giỏ hàng" class="button btn-cart"><span>+ Giỏ hàng</span></button>
																		<ul class="add-to-links">
																			<li><a title="Yêu thích" class="link-wishlist"><span>Yêu thích</span></a></li>
																			<li><a title="Add to Compare" class="link-compare"><span>So sánh</span></a></li>
																		</ul>
																	</div>
																</div>
																<div class="qv-button-container"> <a class="qv-e-button btn-quickview-1"><span><span>Xem nhanh</span></span></a> </div>
															</div>
															<div class="info">
																<div class="info-inner">
																	<div class="item-title"> <a title="{{ $p->name }}" href="
																		{{ route('product_detail', $p->slug) }}">
																		{{ $p->name }} </a>
																	</div>
																	<!--item-title-->
																	<div class="item-content">
																		<div class="ratings">
																			<div class="rating-box">
																				<div class="rating" style="width:0%"></div>
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
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection