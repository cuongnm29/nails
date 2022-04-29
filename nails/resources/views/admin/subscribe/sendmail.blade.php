@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
         {{ trans('cruds.subscribe.sendmail_singular') }}
    </div>

    <div class="card-body">
    <form action="{{ route("admin.subscribe.send") }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                <label for="title">{{ trans('cruds.subscribe.fields.email') }}*</label>
                <input type="text" id="email" name="email" class="form-control"
                    value="{{ $email_from }}" >
                @if($errors->has('name'))
                <em class="invalid-feedback">
                    {{ $errors->first('name') }}
                </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.review.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('summary') ? 'has-error' : '' }}">
                <label for="email">{{ trans('cruds.subscribe.fields.summary') }}*</label>
                <textarea id="summary" name="summary" class="form-control"></textarea>
                @if($errors->has('summary'))
                <em class="invalid-feedback">
                    {{ $errors->first('summary') }}
                </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.blog.fields.summary_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.send') }}">
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script>
  var editor_config = {
    path_absolute : "/",
    selector: "#summary",
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
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
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>
var route_prefix = "/laravel-filemanager";
lfm('lfm', 'image', {
    prefix: route_prefix
});
</script>

@stop