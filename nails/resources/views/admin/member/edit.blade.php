@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.category.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.member.update", [$member->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('firstname') ? 'has-error' : '' }}">
                <label for="name">{{ trans('cruds.member.fields.firstname') }}*</label>
                <input type="text" id="firstname" name="firstname" class="form-control"
                value="{{ old('name', isset($member) ? $member->firstname : '') }}">
                @if($errors->has('firstname'))
                <em class="invalid-feedback">
                    {{ $errors->first('firstname') }}
                </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.member.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('lastname') ? 'has-error' : '' }}">
                <label for="name">{{ trans('cruds.member.fields.lastname') }}*</label>
                <input type="text" id="lastname" name="lastname" class="form-control"
                value="{{ old('name', isset($member) ? $member->lastname : '') }}">
                @if($errors->has('lastname'))
                <em class="invalid-feedback">
                    {{ $errors->first('lastname') }}
                </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.member.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
                <label for="name">{{ trans('cruds.member.fields.phone') }}*</label>
                <input type="text" id="phone" name="phone" class="form-control"
                    value="{{ old('phone', isset($member) ? $member->phone : '') }}" required>
                @if($errors->has('phone'))
                <em class="invalid-feedback">
                    {{ $errors->first('phone') }}
                </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.member.fields.phone_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                <label for="name">{{ trans('cruds.member.fields.email') }}*</label>
                <input type="email" id="email" name="email" class="form-control"
                    value="{{ old('email', isset($member) ? $member->email : '') }}" required>
                @if($errors->has('email'))
                <em class="invalid-feedback">
                    {{ $errors->first('email') }}
                </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.member.fields.email_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('numberAccount') ? 'has-error' : '' }}">
                <label for="name">{{ trans('cruds.member.fields.accountNumber') }}*</label>
                <input type="text" id="numberAccount" name="numberAccount" disabled class="form-control"
                    value="{{ old('numberAccount', isset($member) ? $member->numberAccount : '') }}" required>
                @if($errors->has('email'))
                <em class="invalid-feedback">
                    {{ $errors->first('email') }}
                </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.member.fields.email_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('status') ? 'has-error' : '' }}">
                <label for="status">{{ trans('cruds.member.fields.status') }}
                </label>
                <input type="text" id="status" name="status" class="form-control"
                    value="{{ old('email', isset($member->numberAccount) ? 'Active' : 'Guest') }}" required>
                @if($errors->has('email'))
                <em class="invalid-feedback">
                    {{ $errors->first('email') }}
                </em>
                @endif
                @if($errors->has('status'))
                <em class="invalid-feedback">
                    {{ $errors->first('status') }}
                </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.member.fields.status_helper') }}
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
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>
var route_prefix = "/laravel-filemanager";
lfm('lfm', 'image', {
    prefix: route_prefix
});
</script>

@stop