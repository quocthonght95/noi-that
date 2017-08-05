@extends('admin.partials.master')
@section('title', 'Manager Category')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>Add Category</h2>
            </div>
            <div class="panel-body">
                <form role="form" class="form-horizontal" method="POST"
                    action="{{ route('admin.category.postEdit', $cate->id) }}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="form-group{{ $errors->has('name') ? 'has-error' : '' }}">
                            <label class="col-md-2 control-label">Name: </label>

                            <div class="col-md-8">
                                <input type="text" class="form-control" placeholder="Name" name="name" value="{{ $cate->name }}">
                                @if($errors->has('name'))
                                <strong><span class="help-block">{{ $errors->first('name') }}</span></strong>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <button class="btn-success btn">Update</button>
                                <button class="btn-default btn">Cancel</button>
                                <button class="btn-inverse btn">Reset</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection