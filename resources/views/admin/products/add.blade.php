@extends('admin.partials.master')
@section('title', 'Add Product')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>Add Product</h2>
            </div>
            <div class="panel">
                <div class="panel-body">
                    <div class="tab-pane active" id="details">
                        <form action="{{ route('admin.products.postCreate') }}"
                        class="form-horizontal tabular-form" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('name') ? 'has-error' : '' }}">
                                <label for="" class="control-label col-sm-2">Name</label>
                                <div class="col-sm-9 tabular-border">
                                    @if($errors->has('name'))
                                        <span class="help-block">{{ $errors->first('name') }}</span>
                                    @endif
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                </div>
                            </div>
                            <div class="form-group pb0">
                                <label for="" class="control-label col-sm-2">Category</label>
                                <div class="col-sm-9 tabular-border">
                                    <select class="form-control" name="category_id">
                                        @foreach ($cate as $c)
                                        <option value="{{ $c->id }}">{{ $c->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('description') ? 'has-error' : '' }}">
                                <label for="" class="control-label col-sm-2">Description</label>
                                <div class="col-sm-9 tabular-border">
                                    @if($errors->has('description'))
                                        <span class="help-block">{{ $errors->first('description') }}</span>
                                    @endif
                                    <textarea name="description" class="form-control my-editor" value="{{ old('description') }}">
                                    </textarea>
                                    <p class="help-block">Shown in product listing</p>
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('unit_price') ? 'has-error' : '' }}">
                                <label for="" class="control-label col-sm-2">Price</label>
                                <div class="col-sm-9 tabular-border">
                                    @if($errors->has('unit_price'))
                                        <span class="help-block">{{ $errors->first('unit_price') }}</span>
                                    @endif
                                    <input type="number" class="form-control" name="unit_price"
                                    value="{{ old('unit_price') }}">
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('discount') ? 'has-error' : '' }}">
                                <label for="" class="control-label col-sm-2">Discout</label>
                                <div class="col-sm-9 tabular-border">
                                    @if($errors->has('discount'))
                                        <span class="help-block">{{ $errors->first('discount') }}</span>
                                    @endif
                                    <input type="number" class="form-control" name="discount" value="{{ old('discount') }}">
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('size') ? 'has-error' : '' }}">
                                <label for="" class="control-label col-sm-2">Size</label>
                                <div class="col-sm-9 tabular-border">
                                    @if($errors->has('size'))
                                        <span class="help-block">{{ $errors->first('size') }}</span>
                                    @endif
                                    <input type="text" class="form-control" name="size" value="{{ old('size') }}">
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('guarantee') ? 'has-error' : '' }}">
                                <label for="" class="control-label col-sm-2">Guarantee</label>
                                <div class="col-sm-9 tabular-border">
                                    @if($errors->has('guarantee'))
                                        <span class="help-block">{{ $errors->first('guarantee') }}</span>
                                    @endif
                                    <input type="text" class="form-control" name="guarantee" value="{{ old('guarantee') }}">
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('material') ? 'has-error' : '' }}">
                                <label for="" class="control-label col-sm-2">Material</label>
                                <div class="col-sm-9 tabular-border">
                                    @if($errors->has('material'))
                                        <span class="help-block">{{ $errors->first('material') }}</span>
                                    @endif
                                    <input type="text" class="form-control" name="material" value="{{ old('material') }}">
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('note') ? 'has-error' : '' }}">
                                <label for="" class="control-label col-sm-2">Note</label>
                                <div class="col-sm-9 tabular-border">
                                    @if($errors->has('note'))
                                        <span class="help-block">{{ $errors->first('note') }}</span>
                                    @endif
                                    <input type="text" class="form-control" name="note" value="{{ old('note') }}">
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('image') ? 'has-error' : '' }}">
                                <label for="" class="control-label col-sm-2">Image</label>
                                <div class="col-sm-9 tabular-border">
                                    @if($errors->has('image'))
                                        <span class="help-block">{{ $errors->first('image') }}</span>
                                    @endif
                                    <input type="file" class="form-control" name="image" value="{{ old('image') }}">
                                </div>
                            </div>
                            <div class="panel-footer">
                                <div class="row">
                                    <div class="col-sm-9 col-sm-offset-2">
                                        <button class="btn-success btn">Add</button>
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
    </div>
</div>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

<script>
  var editor_config = {
    path_absolute : "/",
    selector: "textarea.my-editor",
    plugins: [
    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
    'searchreplace wordcount visualblocks visualchars code fullscreen',
    'insertdatetime media nonbreaking save table contextmenu directionality',
    'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc help'
  ],
  toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
  toolbar2: 'print preview media | forecolor backcolor emoticons | codesample help',
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }
  };

  tinymce.init(editor_config);
</script>
@endsection