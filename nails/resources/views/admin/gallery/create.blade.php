@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.gallery.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.gallery.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                <label for="title">{{ trans('cruds.gallery.fields.name') }}*</label>
                <select id="abumid" name="abumid" class="form-control">
                @foreach ($abums as $abum)
                    <option value="{{ $abum->id }}">{{ $abum->name }}</option>
                    @endforeach
                </select>
                @if($errors->has('title'))
                <em class="invalid-feedback">
                    {{ $errors->first('name') }}
                </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.gallery.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('isorder') ? 'has-error' : '' }}">
                <label for="email">{{ trans('cruds.gallery.fields.order') }}*</label>
                <input type="text" id="isorder" name="isorder" class="form-control"
                    value="{{ old('isorder', isset($gallery) ? $gallery->isorder : '') }}">
                @if($errors->has('isorder'))
                <em class="invalid-feedback">
                    {{ $errors->first('isorder') }}
                </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.gallery.fields.order_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('photo') ? 'has-error' : '' }}">
                <label for="photo" required>{{ trans('cruds.banners.fields.photo') }}</label>
                <div class="input-group">
                <div class="dropzone" id="file-dropzone" style="width:100%"></div>
                </div>
               
                @if($errors->has('photo'))
                <em class="invalid-feedback">
                    {{ $errors->first('photo') }}
                </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.banners.fields.photo_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('status') ? 'has-error' : '' }}">
                <label for="status">{{ trans('cruds.gallery.fields.status') }}
                </label>
                <select name="status" id="status" class="form-control select">
                    <option value="1">Enable</option>
                    <option value="2">Disable</option>
                </select>
                @if($errors->has('status'))
                <em class="invalid-feedback">
                    {{ $errors->first('status') }}
                </em>status
                @endif
                <p class="helper-block">
                    {{ trans('cruds.banners.fields.status_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>
@endsection
@section('scripts')
<script>
    // Turn off auto discovery
    Dropzone.autoDiscover = false;
    $(function () {
        // Attach dropzone on element
        $("#file-dropzone").dropzone({
            url: '{{ route('admin.gallery.storeMedia') }}',
            maxFilesize: 2, // MB
            addRemoveLinks: true,
            headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            success: function (file, response) {
            $('form').append('<input type="hidden" name="image[]" value="' + response.name + '">')
            uploadedDocumentMap[file.name] = response.name
            },
            removedfile: function (file) {
            file.previewElement.remove()
            var name = ''
            if (typeof file.file_name !== 'undefined') {
                name = file.file_name
            } else {
                name = uploadedDocumentMap[file.name]
            }
            $('form').find('input[name="documimageent[]"][value="' + name + '"]').remove()
            },
            init: function () {
            @if(isset($project) && $project->document)
                var files =
                {!! json_encode($project->document) !!}
                for (var i in files) {
                var file = files[i]
                this.options.addedfile.call(this, file)
                file.previewElement.classList.add('dz-complete')
                $('form').append('<input type="hidden" name="image[]" value="' + file.file_name + '">')
                }
            @endif
            }
        });
    });

</script>
@stop
