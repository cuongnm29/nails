@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.review.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.review.update", [$review->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="title">{{ trans('cruds.review.fields.name') }}*</label>
                <input type="text" id="name" name="name" class="form-control"
                    value="{{ old('name', isset($review) ? $review->name : '') }}" disabled>
                @if($errors->has('name'))
                <em class="invalid-feedback">
                    {{ $errors->first('name') }}
                </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.review.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                <label for="title">{{ trans('cruds.review.fields.email') }}*</label>
                <input type="text" id="email" name="email" class="form-control"
                    value="{{ old('name', isset($review) ? $review->email : '') }}" disabled>
                @if($errors->has('email'))
                <em class="invalid-feedback">
                    {{ $errors->first('email') }}
                </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.review.fields.email_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('content') ? 'has-error' : '' }}">
                <label for="title">{{ trans('cruds.review.fields.content') }}*</label>
                <textarea id="content" name="content" class="form-control" >{!! old('content', isset($review) ? $review->content : '')!!}</textarea>
                @if($errors->has('email'))
                <em class="invalid-feedback">
                    {{ $errors->first('email') }}
                </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.review.fields.email_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('status') ? 'has-error' : '' }}">
                <label for="status">{{ trans('cruds.review.fields.status') }}
                </label>
                <select name="status" id="status" class="form-control select">
                    <option {{$review->status==1 ?'selected':''}} value="1">Enable</option>
                    <option {{$review->status==0 ?'selected':''}} value="0">Disable</option>
                </select>
                @if($errors->has('status'))
                <em class="invalid-feedback">
                    {{ $errors->first('status') }}
                </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.blog.fields.status_helper') }}
                </p>
            </div>
            <div>
                
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection

