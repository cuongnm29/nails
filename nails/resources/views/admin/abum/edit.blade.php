@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.abum.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.abum.update", [$abum->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">{{ trans('cruds.abum.fields.name') }}*</label>
                <input type="text" id="name" name="name" class="form-control"
                    value="{{ old('name', isset($abum) ? $abum->name : '') }}" required>
                @if($errors->has('title'))
                <em class="invalid-feedback">
                    {{ $errors->first('name') }}
                </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.abum.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('isorder') ? 'has-error' : '' }}">
                <label for="email">{{ trans('cruds.abum.fields.order') }}</label>
                <input type="text" id="isorder" name="isorder" class="form-control"
                    value="{{ old('isorder', isset($abum) ? $abum->isorder : '') }}">
                @if($errors->has('description'))
                <em class="invalid-feedback">
                    {{ $errors->first('isorder') }}
                </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.abum.fields.link_helper') }}
                </p>
            </div>
            
            <div class="form-group {{ $errors->has('status') ? 'has-error' : '' }}">
                <label for="status">{{ trans('cruds.abum.fields.status') }}
                </label>
                <select name="status" id="status" class="form-control select">
                    <option {{$abum->status==1 ?'selected':''}} value="1">Enable</option>
                    <option {{$abum->status==2 ?'selected':''}} value="2">Disable</option>
                </select>
                @if($errors->has('status'))
                <em class="invalid-feedback">
                    {{ $errors->first('status') }}
                </em>status
                @endif
                <p class="helper-block">
                    {{ trans('cruds.abum.fields.status_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection
