@extends('admin.partials.master')
@section('title', 'All products')
@section('content')
<div class="static-content-wrapper">
    <div class="static-content">
        <div class="page-content">
            <div class="page-heading">
                <h1>Products</h1>
                <div class="options">
                    <div class="btn-toolbar">
                        <a href="#" class="btn btn-default"><i class="fa fa-fw fa-cog"></i></a>
                    </div>
                </div>
            </div>
            <ol class="breadcrumb">
                <li><a href="{{ route('admin.index') }}">Home</a></li>
                <li><a href="{{ route('admin.products.show') }}">Manager products</a></li>
                <li class="active"><a href="{{ route('admin.products.getCreate') }}">Add</a></li>
            </ol>
            @if(Session::has('success'))
                <div class="alert alert-success">{{ Session::get('success') }}</div>
            @endif
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="options">
                                </div>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Name</th>
                                            <th>Image</th>
                                            <th>Category</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                            <th>Discount</th>
                                            <th>Note</th>
                                            <th>Size</th>
                                            <th>Guarantee</th>
                                            <th>Material</th>
                                            <th>Hot</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($product as $key => $c)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $c->name }}</td>
                                            <td><img src="{{ $c->image }}" style="max-width: 100%;"></td>
                                            <td>{{ $c->Category->name }}</td>
                                            <td>{{ $c->getShortDec() }}</td>
                                            <td>{{ $c->unit_price }}</td>
                                            <td>{{ $c->discount }}</td>
                                            <td>{{ $c->note }}</td>
                                            <td>{{ $c->size }}</td>
                                            <td>{{ $c->guarantee }}</td>
                                            <td>{{ $c->material }}</td>
                                            <td>{{ $c->hot }}</td>
                                            <td>Status</td>
                                            <td>
                                                <a href="{{ route('admin.products.getEdit', $c->slug) }}">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a href="{{ route('admin.products.destroy', $c->slug) }}" type="button"
                                                onclick="return confirm_delete('are you sure delete')">
                                                    <i class="fa fa-times-circle"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        {{ $product->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection