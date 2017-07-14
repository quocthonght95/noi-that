@extends('frontend.partials.master')
@section('title', 'San-Pham')
@section('content')
<!-- breadcrumbs -->
<div class="breadcrumbs">
	<div class="container">
		<div class="row">
			<ul>
				<li class="home"> <a href="index.html" title="Go to Home Page">Home</a><span>&mdash;›</span></li>
				<li class=""> <a href="grid.html" title="Go to Home Page">Women</a><span>&mdash;›</span></li>
				<li class="category13"><strong>Tops &amp; Tees</strong></li>
			</ul>
		</div>
	</div>
</div>
<!-- End breadcrumbs --> 
<!-- Two columns content -->
<section class="main-container col2-left-layout">
	<div class="main container">
		<div class="row">
			<section class="col-main col-sm-9 col-sm-push-3 wow">
				<!-- category banner -->
				<div class="category-products">
					<div class="toolbar">
						<div class="sorter">
							<div class="view-mode"> <span title="Grid" class="button button-active button-grid">Grid</span><a href="list.html" title="List" class="button button-list">List</a> </div>
						</div>
						<div id="sort-by">
							<label class="left">Sort By: </label>
							<ul>
								<li><a href="#">Position<span class="right-arrow"></span></a>
									<ul>
										<li><a href="#">Name</a></li>
										<li><a href="#">Price</a></li>
										<li><a href="#">Position</a></li>
									</ul>
								</li>
							</ul>
							<a class="button-asc left" href="#" title="Set Descending Direction"><span style="color:#999;font-size:11px;" class="glyphicon glyphicon-arrow-up"></span></a> </div>
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
							<li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<div class="col-item">
									<div class="sale-label sale-top-right">Sale</div>
									<div class="images-container"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img src="products-images/product1.jpg" class="img-responsive" alt="a" /> </a>
										<div class="actions">
											<div class="actions-inner">
												<button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
												<ul class="add-to-links">
													<li><a href="wishlist.html" title="Add to Wishlist" class="link-wishlist"><span>Add to Wishlist</span></a></li>
													<li><a href="compare.html" title="Add to Compare" class="link-compare "><span>Add to Compare</span></a></li>
												</ul>
											</div>
										</div>
										<div class="qv-button-container"> <a class="qv-e-button btn-quickview-1" href="quick_view.html"><span><span>Quick View</span></span></a> </div>
									</div>
									<div class="info">
										<div class="info-inner">
											<div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
											<!--item-title-->
											<div class="item-content">
												<div class="ratings">
													<div class="rating-box">
														<div style="width:60%" class="rating"></div>
													</div>
												</div>
												<div class="price-box">
													<p class="special-price"> <span class="price"> $45.00 </span> </p>
													<p class="old-price"> <span class="price-sep">-</span> <span class="price"> $50.00 </span> </p>
												</div>
											</div>
											<!--item-content--> 
										</div>
										<!--info-inner--> 

										<!--actions-->

										<div class="clearfix"> </div>
									</div>
								</div>
							</li>
							<li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<div class="col-item">
									<div class="new-label new-top-right">New</div>
									<div class="images-container"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img src="frontend/products-images/product2.jpg" class="img-responsive" alt="a" /> </a>
										<div class="actions">
											<div class="actions-inner">
												<button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
												<ul class="add-to-links">
													<li><a href="wishlist.html" title="Add to Wishlist" class="link-wishlist"><span>Add to Wishlist</span></a></li>
													<li><a href="compare.html" title="Add to Compare" class="link-compare "><span>Add to Compare</span></a></li>
												</ul>
											</div>
										</div>
										<div class="qv-button-container"> <a class="qv-e-button btn-quickview-1" href="quick_view.html"><span><span>Quick View</span></span></a> </div>
									</div>
									<div class="info">
										<div class="info-inner">
											<div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
											<!--item-title-->
											<div class="item-content">
												<div class="ratings">
													<div class="rating-box">
														<div style="width:60%" class="rating"></div>
													</div>
												</div>
												<div class="price-box"> <span class="regular-price"> <span class="price">$422.00</span> </span> </div>
											</div>
											<!--item-content--> 
										</div>
										<!--info-inner--> 

										<!--actions-->

										<div class="clearfix"> </div>
									</div>
								</div>
							</li>
							<li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<div class="col-item">
									<div class="sale-label sale-top-right">Sale</div>
									<div class="images-container"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="frontend/products-images/product4.jpg"> </a>
										<div class="actions">
											<div class="actions-inner">
												<button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
												<ul class="add-to-links">
													<li><a href="wishlist.html" title="Add to Wishlist" class="link-wishlist"><span>Add to Wishlist</span></a></li>
													<li><a href="compare.html" title="Add to Compare" class="link-compare "><span>Add to Compare</span></a></li>
												</ul>
											</div>
										</div>
										<div class="qv-button-container"> <a class="qv-e-button btn-quickview-1" href="quick_view.html"><span><span>Quick View</span></span></a> </div>
									</div>
									<div class="info">
										<div class="info-inner">
											<div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
											<!--item-title-->
											<div class="item-content">
												<div class="ratings">
													<div class="rating-box">
														<div class="rating" style="width:0%"></div>
													</div>
												</div>
												<div class="price-box"> <span class="regular-price"> <span class="price">$50.00</span> </span> </div>
											</div>
											<!--item-content--> 
										</div>
										<!--info-inner-->

										<div class="clearfix"> </div>
									</div>
								</div>
							</li>
							<li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<div class="col-item">
									<div class="sale-label sale-top-right">Sale</div>
									<div class="images-container"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="frontend/products-images/product5.jpg"> </a>
										<div class="actions">
											<div class="actions-inner">
												<button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
												<ul class="add-to-links">
													<li><a href="wishlist.html" title="Add to Wishlist" class="link-wishlist"><span>Add to Wishlist</span></a></li>
													<li><a href="compare.html" title="Add to Compare" class="link-compare "><span>Add to Compare</span></a></li>
												</ul>
											</div>
										</div>
										<div class="qv-button-container"> <a class="qv-e-button btn-quickview-1" href="quick_view.html"><span><span>Quick View</span></span></a> </div>
									</div>
									<div class="info">
										<div class="info-inner">
											<div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
											<!--item-title-->
											<div class="item-content">
												<div class="ratings">
													<div class="rating-box">
														<div class="rating" style="width:50%"></div>
													</div>
												</div>
												<div class="price-box">
													<p class="special-price"> <span class="price"> $45.00 </span> </p>
													<p class="old-price"> <span class="price-sep">-</span> <span class="price"> $50.00 </span> </p>
												</div>
											</div>
											<!--item-content--> 
										</div>
										<!--info-inner-->

										<div class="clearfix"> </div>
									</div>
								</div>
							</li>
							<li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<div class="col-item">
									<div class="sale-label sale-top-right">Sale</div>
									<div class="images-container"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="frontend/products-images/product6.jpg"> </a>
										<div class="actions">
											<div class="actions-inner">
												<button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
												<ul class="add-to-links">
													<li><a href="wishlist.html" title="Add to Wishlist" class="link-wishlist"><span>Add to Wishlist</span></a></li>
													<li><a href="compare.html" title="Add to Compare" class="link-compare "><span>Add to Compare</span></a></li>
												</ul>
											</div>
										</div>
										<div class="qv-button-container"> <a class="qv-e-button btn-quickview-1" href="quick_view.html"><span><span>Quick View</span></span></a> </div>
									</div>
									<div class="info">
										<div class="info-inner">
											<div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
											<!--item-title-->
											<div class="item-content">
												<div class="ratings">
													<div class="rating-box">
														<div class="rating" style="width:60%"></div>
													</div>
												</div>
												<div class="price-box">
													<p class="special-price"> <span class="price"> $45.00 </span> </p>
													<p class="old-price"> <span class="price-sep">-</span> <span class="price"> $50.00 </span> </p>
												</div>
											</div>
											<!--item-content--> 
										</div>
										<!--info-inner-->

										<div class="clearfix"> </div>
									</div>
								</div>
							</li>
							<li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<div class="col-item">
									<div class="new-label new-top-right">New</div>
									<div class="images-container"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="frontend/products-images/product13.jpg"> </a>
										<div class="actions">
											<div class="actions-inner">
												<button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
												<ul class="add-to-links">
													<li><a href="wishlist.html" title="Add to Wishlist" class="link-wishlist"><span>Add to Wishlist</span></a></li>
													<li><a href="compare.html" title="Add to Compare" class="link-compare "><span>Add to Compare</span></a></li>
												</ul>
											</div>
										</div>
										<div class="qv-button-container"> <a class="qv-e-button btn-quickview-1" href="quick_view.html"><span><span>Quick View</span></span></a> </div>
									</div>
									<div class="info">
										<div class="info-inner">
											<div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
											<!--item-title-->
											<div class="item-content">
												<div class="ratings">
													<div class="rating-box">
														<div class="rating" style="width:60%"></div>
													</div>
												</div>
												<div class="price-box"> <span class="regular-price"> <span class="price">$422.00</span> </span> </div>
											</div>
											<!--item-content--> 
										</div>
										<!--info-inner-->

										<div class="clearfix"> </div>
									</div>
								</div>
							</li>
							<li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<div class="col-item">
									<div class="sale-label sale-top-right">Sale</div>
									<div class="images-container"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="frontend/products-images/product15.jpg"> </a>
										<div class="actions">
											<div class="actions-inner">
												<button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
												<ul class="add-to-links">
													<li><a href="wishlist.html" title="Add to Wishlist" class="link-wishlist"><span>Add to Wishlist</span></a></li>
													<li><a href="compare.html" title="Add to Compare" class="link-compare "><span>Add to Compare</span></a></li>
												</ul>
											</div>
										</div>
										<div class="qv-button-container"> <a class="qv-e-button btn-quickview-1" href="quick_view.html"><span><span>Quick View</span></span></a> </div>
									</div>
									<div class="info">
										<div class="info-inner">
											<div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
											<!--item-title-->
											<div class="item-content">
												<div class="ratings">
													<div class="rating-box">
														<div class="rating" style="width:0%"></div>
													</div>
												</div>
												<div class="price-box"> <span class="regular-price"> <span class="price">$50.00</span> </span> </div>
											</div>
											<!--item-content--> 
										</div>
										<!--info-inner-->

										<div class="clearfix"> </div>
									</div>
								</div>
							</li>
							<li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<div class="col-item">
									<div class="sale-label sale-top-right">Sale</div>
									<div class="images-container"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="frontend/products-images/product11.jpg"> </a>
										<div class="actions">
											<div class="actions-inner">
												<button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
												<ul class="add-to-links">
													<li><a href="wishlist.html" title="Add to Wishlist" class="link-wishlist"><span>Add to Wishlist</span></a></li>
													<li><a href="compare.html" title="Add to Compare" class="link-compare "><span>Add to Compare</span></a></li>
												</ul>
											</div>
										</div>
										<div class="qv-button-container"> <a class="qv-e-button btn-quickview-1" href="quick_view.html"><span><span>Quick View</span></span></a> </div>
									</div>
									<div class="info">
										<div class="info-inner">
											<div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
											<!--item-title-->
											<div class="item-content">
												<div class="ratings">
													<div class="rating-box">
														<div class="rating" style="width:50%"></div>
													</div>
												</div>
												<div class="price-box">
													<p class="special-price"> <span class="price"> $45.00 </span> </p>
													<p class="old-price"> <span class="price-sep">-</span> <span class="price"> $50.00 </span> </p>
												</div>
											</div>
											<!--item-content--> 
										</div>
										<!--info-inner-->

										<div class="clearfix"> </div>
									</div>
								</div>
							</li>
							<li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<div class="col-item">
									<div class="sale-label sale-top-right">Sale</div>
									<div class="images-container"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img src="frontend/products-images/product7.jpg" class="img-responsive" alt="a" /> </a>
										<div class="actions">
											<div class="actions-inner">
												<button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
												<ul class="add-to-links">
													<li><a href="wishlist.html" title="Add to Wishlist" class="link-wishlist"><span>Add to Wishlist</span></a></li>
													<li><a href="compare.html" title="Add to Compare" class="link-compare "><span>Add to Compare</span></a></li>
												</ul>
											</div>
										</div>
										<div class="qv-button-container"> <a class="qv-e-button btn-quickview-1" href="quick_view.html"><span><span>Quick View</span></span></a> </div>
									</div>
									<div class="info">
										<div class="info-inner">
											<div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
											<!--item-title-->
											<div class="item-content">
												<div class="ratings">
													<div class="rating-box">
														<div style="width:60%" class="rating"></div>
													</div>
												</div>
												<div class="price-box">
													<p class="special-price"> <span class="price"> $45.00 </span> </p>
													<p class="old-price"> <span class="price-sep">-</span> <span class="price"> $50.00 </span> </p>
												</div>
											</div>
											<!--item-content--> 
										</div>
										<!--info-inner--> 

										<!--actions-->

										<div class="clearfix"> </div>
									</div>
								</div>
							</li>
							<li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<div class="col-item">
									<div class="new-label new-top-right">New</div>
									<div class="images-container"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="frontend/products-images/product8.jpg"> </a>
										<div class="actions">
											<div class="actions-inner">
												<button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
												<ul class="add-to-links">
													<li><a href="wishlist.html" title="Add to Wishlist" class="link-wishlist"><span>Add to Wishlist</span></a></li>
													<li><a href="compare.html" title="Add to Compare" class="link-compare "><span>Add to Compare</span></a></li>
												</ul>
											</div>
										</div>
										<div class="qv-button-container"> <a class="qv-e-button btn-quickview-1" href="quick_view.html"><span><span>Quick View</span></span></a> </div>
									</div>
									<div class="info">
										<div class="info-inner">
											<div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
											<!--item-title-->
											<div class="item-content">
												<div class="ratings">
													<div class="rating-box">
														<div class="rating" style="width:60%"></div>
													</div>
												</div>
												<div class="price-box"> <span class="regular-price"> <span class="price">$422.00</span> </span> </div>
											</div>
											<!--item-content--> 
										</div>
										<!--info-inner-->

										<div class="clearfix"> </div>
									</div>
								</div>
							</li>
							<li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<div class="col-item">
									<div class="sale-label sale-top-right">Sale</div>
									<div class="images-container"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="frontend/products-images/product9.jpg"> </a>
										<div class="actions">
											<div class="actions-inner">
												<button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
												<ul class="add-to-links">
													<li><a href="wishlist.html" title="Add to Wishlist" class="link-wishlist"><span>Add to Wishlist</span></a></li>
													<li><a href="compare.html" title="Add to Compare" class="link-compare "><span>Add to Compare</span></a></li>
												</ul>
											</div>
										</div>
										<div class="qv-button-container"> <a class="qv-e-button btn-quickview-1" href="quick_view.html"><span><span>Quick View</span></span></a> </div>
									</div>
									<div class="info">
										<div class="info-inner">
											<div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
											<!--item-title-->
											<div class="item-content">
												<div class="ratings">
													<div class="rating-box">
														<div class="rating" style="width:0%"></div>
													</div>
												</div>
												<div class="price-box"> <span class="regular-price"> <span class="price">$50.00</span> </span> </div>
											</div>
											<!--item-content--> 
										</div>
										<!--info-inner-->

										<div class="clearfix"> </div>
									</div>
								</div>
							</li>
							<li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<div class="col-item">
									<div class="sale-label sale-top-right">Sale</div>
									<div class="images-container"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="frontend/products-images/product10.jpg"> </a>
										<div class="actions">
											<div class="actions-inner">
												<button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
												<ul class="add-to-links">
													<li><a href="wishlist.html" title="Add to Wishlist" class="link-wishlist"><span>Add to Wishlist</span></a></li>
													<li><a href="compare.html" title="Add to Compare" class="link-compare "><span>Add to Compare</span></a></li>
												</ul>
											</div>
										</div>
										<div class="qv-button-container"> <a class="qv-e-button btn-quickview-1" href="quick_view.html"><span><span>Quick View</span></span></a> </div>
									</div>
									<div class="info">
										<div class="info-inner">
											<div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
											<!--item-title-->
											<div class="item-content">
												<div class="ratings">
													<div class="rating-box">
														<div class="rating" style="width:50%"></div>
													</div>
												</div>
												<div class="price-box">
													<p class="special-price"> <span class="price"> $45.00 </span> </p>
													<p class="old-price"> <span class="price-sep">-</span> <span class="price"> $50.00 </span> </p>
												</div>
											</div>
											<!--item-content--> 
										</div>
										<!--info-inner-->

										<div class="clearfix"> </div>
									</div>
								</div>
							</li>
							<li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<div class="col-item">
									<div class="sale-label sale-top-right">Sale</div>
									<div class="images-container"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img src="frontend/products-images/product20.jpg" class="img-responsive" alt="a" /> </a>
										<div class="actions">
											<div class="actions-inner">
												<button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
												<ul class="add-to-links">
													<li><a href="wishlist.html" title="Add to Wishlist" class="link-wishlist"><span>Add to Wishlist</span></a></li>
													<li><a href="compare.html" title="Add to Compare" class="link-compare "><span>Add to Compare</span></a></li>
												</ul>
											</div>
										</div>
										<div class="qv-button-container"> <a class="qv-e-button btn-quickview-1" href="quick_view.html"><span><span>Quick View</span></span></a> </div>
									</div>
									<div class="info">
										<div class="info-inner">
											<div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
											<!--item-title-->
											<div class="item-content">
												<div class="ratings">
													<div class="rating-box">
														<div style="width:60%" class="rating"></div>
													</div>
												</div>
												<div class="price-box">
													<p class="special-price"> <span class="price"> $45.00 </span> </p>
													<p class="old-price"> <span class="price-sep">-</span> <span class="price"> $50.00 </span> </p>
												</div>
											</div>
											<!--item-content--> 
										</div>
										<!--info-inner--> 

										<!--actions-->

										<div class="clearfix"> </div>
									</div>
								</div>
							</li>
							<li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<div class="col-item">
									<div class="new-label new-top-right">New</div>
									<div class="images-container"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="frontend/products-images/product21.jpg"> </a>
										<div class="actions">
											<div class="actions-inner">
												<button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
												<ul class="add-to-links">
													<li><a href="wishlist.html" title="Add to Wishlist" class="link-wishlist"><span>Add to Wishlist</span></a></li>
													<li><a href="compare.html" title="Add to Compare" class="link-compare "><span>Add to Compare</span></a></li>
												</ul>
											</div>
										</div>
										<div class="qv-button-container"> <a class="qv-e-button btn-quickview-1" href="quick_view.html"><span><span>Quick View</span></span></a> </div>
									</div>
									<div class="info">
										<div class="info-inner">
											<div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
											<!--item-title-->
											<div class="item-content">
												<div class="ratings">
													<div class="rating-box">
														<div class="rating" style="width:60%"></div>
													</div>
												</div>
												<div class="price-box"> <span class="regular-price"> <span class="price">$422.00</span> </span> </div>
											</div>
											<!--item-content--> 
										</div>
										<!--info-inner-->

										<div class="clearfix"> </div>
									</div>
								</div>
							</li>
							<li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<div class="col-item">
									<div class="sale-label sale-top-right">Sale</div>
									<div class="images-container"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="frontend/products-images/product22.jpg"> </a>
										<div class="actions">
											<div class="actions-inner">
												<button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
												<ul class="add-to-links">
													<li><a href="wishlist.html" title="Add to Wishlist" class="link-wishlist"><span>Add to Wishlist</span></a></li>
													<li><a href="compare.html" title="Add to Compare" class="link-compare "><span>Add to Compare</span></a></li>
												</ul>
											</div>
										</div>
										<div class="qv-button-container"> <a class="qv-e-button btn-quickview-1" href="quick_view.html"><span><span>Quick View</span></span></a> </div>
									</div>
									<div class="info">
										<div class="info-inner">
											<div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
											<!--item-title-->
											<div class="item-content">
												<div class="ratings">
													<div class="rating-box">
														<div class="rating" style="width:0%"></div>
													</div>
												</div>
												<div class="price-box"> <span class="regular-price"> <span class="price">$50.00</span> </span> </div>
											</div>
											<!--item-content--> 
										</div>
										<!--info-inner-->

										<div class="clearfix"> </div>
									</div>
								</div>
							</li>
							<li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<div class="col-item">
									<div class="sale-label sale-top-right">Sale</div>
									<div class="images-container"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="frontend/products-images/product23.jpg"> </a>
										<div class="actions">
											<div class="actions-inner">
												<button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
												<ul class="add-to-links">
													<li><a href="wishlist.html" title="Add to Wishlist" class="link-wishlist"><span>Add to Wishlist</span></a></li>
													<li><a href="compare.html" title="Add to Compare" class="link-compare "><span>Add to Compare</span></a></li>
												</ul>
											</div>
										</div>
										<div class="qv-button-container"> <a class="qv-e-button btn-quickview-1" href="quick_view.html"><span><span>Quick View</span></span></a> </div>
									</div>
									<div class="info">
										<div class="info-inner">
											<div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
											<!--item-title-->
											<div class="item-content">
												<div class="ratings">
													<div class="rating-box">
														<div class="rating" style="width:50%"></div>
													</div>
												</div>
												<div class="price-box">
													<p class="special-price"> <span class="price"> $45.00 </span> </p>
													<p class="old-price"> <span class="price-sep">-</span> <span class="price"> $50.00 </span> </p>
												</div>
											</div>
											<!--item-content--> 
										</div>
										<!--info-inner-->

										<div class="clearfix"> </div>
									</div>
								</div>
							</li>
							<li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<div class="col-item">
									<div class="sale-label sale-top-right">Sale</div>
									<div class="images-container"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img src="frontend/products-images/product24.jpg" class="img-responsive" alt="a" /> </a>
										<div class="actions">
											<div class="actions-inner">
												<button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
												<ul class="add-to-links">
													<li><a href="wishlist.html" title="Add to Wishlist" class="link-wishlist"><span>Add to Wishlist</span></a></li>
													<li><a href="compare.html" title="Add to Compare" class="link-compare "><span>Add to Compare</span></a></li>
												</ul>
											</div>
										</div>
										<div class="qv-button-container"> <a class="qv-e-button btn-quickview-1" href="quick_view.html"><span><span>Quick View</span></span></a> </div>
									</div>
									<div class="info">
										<div class="info-inner">
											<div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
											<!--item-title-->
											<div class="item-content">
												<div class="ratings">
													<div class="rating-box">
														<div style="width:60%" class="rating"></div>
													</div>
												</div>
												<div class="price-box">
													<p class="special-price"> <span class="price"> $45.00 </span> </p>
													<p class="old-price"> <span class="price-sep">-</span> <span class="price"> $50.00 </span> </p>
												</div>
											</div>
											<!--item-content--> 
										</div>
										<!--info-inner--> 

										<!--actions-->

										<div class="clearfix"> </div>
									</div>
								</div>
							</li>
							<li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<div class="col-item">
									<div class="new-label new-top-right">New</div>
									<div class="images-container"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="frontend/products-images/product25.jpg"> </a>
										<div class="actions">
											<div class="actions-inner">
												<button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
												<ul class="add-to-links">
													<li><a href="wishlist.html" title="Add to Wishlist" class="link-wishlist"><span>Add to Wishlist</span></a></li>
													<li><a href="compare.html" title="Add to Compare" class="link-compare "><span>Add to Compare</span></a></li>
												</ul>
											</div>
										</div>
										<div class="qv-button-container"> <a class="qv-e-button btn-quickview-1" href="quick_view.html"><span><span>Quick View</span></span></a> </div>
									</div>
									<div class="info">
										<div class="info-inner">
											<div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
											<!--item-title-->
											<div class="item-content">
												<div class="ratings">
													<div class="rating-box">
														<div class="rating" style="width:60%"></div>
													</div>
												</div>
												<div class="price-box"> <span class="regular-price"> <span class="price">$422.00</span> </span> </div>
											</div>
											<!--item-content--> 
										</div>
										<!--info-inner-->

										<div class="clearfix"> </div>
									</div>
								</div>
							</li>
						</ul>
					</div>
			</section>
			@include('frontend.partials.side-bar')
		</div>
	</div>
</section>
@endsection