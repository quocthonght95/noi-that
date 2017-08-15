@extends('frontend.partials.master')
@section('title', 'Giỏ hàng')
@section('content')
<section class="main-container col1-layout">
	<div class="main container">
		<div class="col-main">
			<div class="cart wow">
				<div class="page-title">
					<h2>Giỏ hàng</h2>
				</div>
                @if(Session::has('error'))
                    <span class="alert-warning">{{ Session::get('error') }}</span>
                    <br>
                    <br>
                @endif
				<div class="table-responsive">
					<form method="post" action="#updatePost/">
                        <input name="_token" type="hidden" value="{{csrf_token()}}">
						<input type="hidden" value="Vwww7itR3zQFe86m" name="form_key">
						<fieldset>
							<table class="data-table cart-table" id="shopping-cart-table">
								<colgroup>
								<col width="1">
								<col>
								<col width="1">
								<col width="1">
								<col width="1">
								<col width="2">
							</colgroup>
							<thead>
								<tr class="first last">
									<th rowspan="1">&nbsp;</th>
									<th rowspan="1"><span class="nobr">Tên sản phẩm</span></th>
									<th colspan="1" class="a-center"><span class="nobr">Giá</span></th>
									<th class="a-center" rowspan="1">Số lượng</th>
									<th colspan="1" class="a-center">Tổng giá</th>
									<th class="a-center" rowspan="1">&nbsp;</th>
								</tr>
							</thead>
							{{-- <tfoot>
								<tr class="first last">
									<td class="a-right last" colspan="50">
										<button onclick="setLocation('#')" class="button btn-continue"
										title="Continue Shopping" type="button">
											<span><span>Continue Shopping</span></span>
										</button>
										<button class="button btn-update" title="Update Cart"
											value="update_qty" name="update_cart_action" type="submit">
											<span><span>Update Cart</span></span>
										</button>
										<button id="empty_cart_button" class="button btn-empty"
											title="Clear Cart" value="empty_cart" name="update_cart_action" type="submit">
											<span><span>Clear Cart</span></span>
										</button>
									</td>
								</tr>
							</tfoot> --}}
							<tbody>
								@foreach($content as $c)
									<tr class="first odd">
										<td class="image">
											<a class="product-image" title="{{ $c->name }}"
												href="#/women-s-crepe-printed-black/">
												<img width="75" alt="Sample Product" src="{{ $c->options->img }}">
											</a>
										</td>
										<td>
											<h2 class="product-name">{{ $c->name }}</h2>
										</td>
										<td class="a-right">
											<span class="cart-price">
												<span class="price">
													{{ number_format($c->price) }}đ
												</span>
											</span>
										</td>
										<td class="a-center movewishlist">
											<input class="qty" name="" type="text" max="9"
                                            min="1" step="1" value="{{$c->qty}}" />
										</td>
										<td class="a-right movewishlist">
											<span class="cart-price">
												<span class="price" id="total-price_{{$c->rowId}}">
													{{ number_format($c->price * $c->qty) }}đ
												</span>
											</span>
										</td>
										<td class="a-center last">
                                            <a class="button remove-item" href="{{ route('destroy_cart', $c->rowId) }}">
                                                <span><span>Xóa</span></span>
                                            </a>
                                            <a href="#" id="{{ $c->rowId }}" class="update_cart edit-bnt"></a>
                                        </td>
									</tr>
								@endforeach()
							</tbody>
							</table>
						</fieldset>
					</form>
				</div>
				<div class="cart-collaterals row">
					<div class="col-sm-4">
					</div>
					<div class="col-sm-4">
					</div>
					<div class="totals col-sm-4">
						<h3>Số tiền mua sản phẩm</h3>
						<div class="inner">
							<table class="table shopping-cart-table-total" id="shopping-cart-totals-table">
								<colgroup>
								<col>
								<col width="1">
							</colgroup>
							<tfoot>
								<tr>
									<td colspan="1" class="a-left" style=""><strong>Tổng cộng</strong></td>
									<td class="a-right" style="">
                                        <strong>
                                            <span class="price" id="total_product">{{ $total }} đ</span>
                                        </strong>
                                    </td>
								</tr>
							</tfoot>
						</table>
						<ul class="checkout">
							<li>
                            <a href="{{ route('getOrder') }}">
								<button class="button btn-proceed-checkout" type="button">
                                    <span>Mua hàng ngay</span>
                                </button>
                            </a>
							</li>
							<br>
							<br>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
@endsection