@extends('admin.partials.master')
@section('title', 'All products')
@section('content')
<div class="static-content-wrapper">
    <div class="static-content">
        <div class="page-content">
            <div class="page-heading">
                <h1>Bill</h1>
                <div class="options">
                    <div class="btn-toolbar">
                        <a href="#" class="btn btn-default"><i class="fa fa-fw fa-cog"></i></a>
                    </div>
                </div>
            </div>
            <ol class="breadcrumb">
                <li><a href="{{ route('admin.index') }}">Home</a></li>
                <li><a href="{{ route('admin.bill.list') }}">Bill</a></li>
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
                    @endif

                    @if(session('success'))
                    <div class="col-md-3"></div>
                    <div class="col-md-6 alert alert-success">
                        <button type="button" aria-hidden="true" class="close">×</button>
                        <span>{{ session('success') }}</span>
                    </div>
                    @endif

                    <div class="col-md-12">
                        <div class="card">

                            <div class="card-header" data-background-color="purple">
                                <h4 class="title">Management</h4>
                                <p class="category">Orders List</p>
                            </div>

                            <div class="fresh-table">
                            <!--    Available colors for the full background: full-color-blue, full-color-azure, full-color-green, full-color-red, full-color-orange
                                    Available colors only for the toolbar: toolbar-color-blue, toolbar-color-azure, toolbar-color-green, toolbar-color-red, toolbar-color-orange
                                -->
                                <div class="toolbar">
                                    <select style="border: 2px solid #3c763d;" class="form-control" id="status_order" onchange="selectStatus()"
                                    name="status_order">
                                        @foreach($status as $st)
                                            <option value="{{$st->status_name}}">{{$st->status_name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <table id="fresh-table" class="table table-bordered">
                                    <thead>
                                        <th data-field="id" data-sortable="true">STT</th>
                                        <th data-field="date_order" data-sortable="true">Date order</th>
                                        <th data-field="payment" data-sortable="true">Payment Method</th>
                                        <th data-field="status" data-sortable="true">Status</th>
                                        <th data-field="note" data-sortable="true">Note</th>
                                        <th data-field="customer" data-sortable="true">Customer</th>
                                        <th data-field="total" data-sortable="true">Total</th>
                                        <th>Xem chi tiết</th>
                                    </thead>
                                    <tbody>
                                        <?php $stt = 1; ?>
                                        @foreach($bills as $bill)
                                        <tr class="odd gradeX">
                                            <td>{{ $stt++ }}</td>
                                            <td>{{ $bill->date_order }}</td>
                                            <td>{{ $bill->Payment->payment_name }}</td>
                                            <td>{{ $bill->Status->status_name }}</td>
                                            <td>{{ $bill->note }}</td>
                                            <td>{{ $bill->Customer->name }}</td>
                                            <td class="text-primary">{{ $bill->total }}</td>
                                            <td>
                                                <a href="{{ route('admin.billdetail.list', [$bill->id]) }}" title="Details">
                                                    <i class="material-icons" style="font-size: 17px; color: #9f39b5">details</i>
                                                </a>
                                                <a class="remove" href="{{ route('admin.bill.remove', [$bill->id]) }}" title="Remove" type="button" onclick="return confirmRemove()" >
                                                    <i class="fa fa-remove"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <input id="in" type="text" name="in" autofocus="autofocus" class="form-control">
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function selectStatus() {
        var x = document.getElementById('status_order').value;
        document.getElementsByTagName("INPUT")[1].value = x;
    }
</script>
@endsection