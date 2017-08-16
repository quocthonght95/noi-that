@extends('admin.partials.master')
@section('title', 'All products')
@section('content')
<div class="static-content-wrapper">
    <div class="static-content">
        <div class="page-content">
            <div class="page-heading">
                <h1>Bill Detail</h1>
                <div class="options">
                    <div class="btn-toolbar">
                        <a href="#" class="btn btn-default"><i class="fa fa-fw fa-cog"></i></a>
                    </div>
                </div>
            </div>
            <ol class="breadcrumb">
                <li><a href="{{ route('admin.index') }}">Home</a></li>
                <li><a href="{{ route('admin.bill.list') }}">Bill</a></li>
                <li class="active"><a href="{{ route('admin.billdetail.list', $bill->id) }}">Bill Detail</a></li>
            </ol>
            @if(Session::has('success'))
                <div class="alert alert-success">{{ Session::get('success') }}</div>
            @endif
            <div class="container-fluid">
                <div class="row">
                    @if(session('error'))
                    <div class="col-md-3"></div>
                    <div class="col-md-6 alert alert-danger">
                        <button type="button" aria-hidden="true" class="close">×</button>
                        <span>{{ session('error') }}</span>
                    </div>
                    @endif @if(session('success'))
                    <div class="col-md-3"></div>
                    <div class="col-md-6 alert alert-success">
                        <button type="button" aria-hidden="true" class="close">×</button>
                        <span>{{ session('success') }}</span>
                    </div>
                    @endif

                <div class="row">
                    <div class="container-fluid">
                        <div class="card">
                            <div class="card-content">
                                <div class="row" style="border-bottom: 2px #eeeeee solid; margin-bottom: 30px">
                                    <div class="col-md-6">
                                        <div class="card" style="background-color: #eeeeee;">
                                        <div class="card-content">
                                        <h5 style="border-bottom: 1px solid white; padding-bottom: 5px;">Đơn hàng</h5>
                                        <p>ID Đơn hàng: #DH{{ $bill->id }}</p>
                                        <p>Ngày đặt hàng: {{ $bill->date_order }}</p>
                                        <p>Total: {{ number_format($bill->total) }} VNĐ</p>
                                        <p>Phương thức thanh toán: {{ $bill->Payment->payment_name }}</p>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card" style="background-color: #eeeeee;">
                                        <div class="card-content">
                                        <h5 style="border-bottom: 1px solid white; padding-bottom: 5px;">Khách hàng</h5>
                                        <p>Tên khách hàng: {{ $bill->Customer->name }}</p>
                                        <p>Email khách hàng: {{ $bill->Customer->email }}</p>
                                        <p>Địa chỉ giao hàng và thanh toán: {{$bill->Customer->address}}</p>
                                        <P>Số điện thoại: {{ $bill->Customer->phone }}</p>
                                        @if($bill->Customer->note)
                                        <p>Note: {{ $bill->Customer->note }}</p>
                                        @endif
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fresh-table">
                                <table id="fresh-table" class="table table-bordered">
                                    <thead>
                                        <th data-field="stt" data-sortable="true">STT</th>
                                        <th data-field="quantity" data-sortable="true">Quantity</th>
                                        <th data-field="price" data-sortable="true">Price</th>
                                        <th data-field="book" data-sortable="true">Product</th>
                                        <th data-field="img">Image Product</th>
                                    </thead>
                                    <tbody>
                                        <?php $stt = 1; ?>
                                        @foreach($billDetails as $bill_dt)
                                        <tr class="odd gradeX">
                                            <td>{{ $stt++ }}</td>
                                            <td class="text-primary">{{ $bill_dt->quantity }}</td>
                                            <td class="text-primary">{{ number_format($bill_dt->unit_price) }}</td>
                                            <td>{{ $bill_dt->Product->name }}</td>
                                            <td>
                                                <img src="{{ $bill_dt->Product->image }}" style="max-width: 10%;"></img>
                                            </td>
                                            <td>?</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="card-content">
                                    <form action="{{ route('admin.bill.update', [$bill->id]) }}" method="POST">
                                    {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-md-6 col-md-offset-3">
                                                <div class="form-group">
                                                    <label style="font-size: 20px;">Order Status</label> <select
                                                        style="border: 2px solid #3c763d;" class="form-control"
                                                        name="status"> @foreach($status as $st)
                                                        <option @if($bill->status_id == $st->id) {{"selected"}}
                                                            @endif value="{{$st->id}}">{{$st->status_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <br/>
                                                <a href="javascript:history.back()"><button style="border-radius:5px;"
                                                onclick="return confirmCancel()"
                                                class="btn btn-primary pull-right bill">Cancel</button></a>
                                                <button style="border-radius:5px; margin: 0px 5px;" type="submit" class="btn btn-primary pull-right bill">Save</button>
                                                <a class="btnPrint" href="{{ URL::to('admin/bill/print', [$bill->id]) }}"><t style="border-radius:5px;" class="btn btn-primary pull-right bill">
                                                Print Order</i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script src="{{ asset('admin/assets/js/jquery.printPage.js') }}"></script>
<script>
    $(document).ready(function() {
        $(".btnPrint").printPage();
    });
</script>
@endsection