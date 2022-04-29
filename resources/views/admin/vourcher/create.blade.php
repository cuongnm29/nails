@use Illuminate\Support\Str;
@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.vourcher.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.vourcher.store") }}" method="POST" enctype="multipart/form-data" autocomplete="off">
            @csrf
            <div class="form-group {{ $errors->has('firstname') ? 'has-error' : '' }}">
                <label for="title">{{ trans('cruds.vourcher.fields.name') }}*</label>
                <input type="text" id="name" name="name" class="form-control"
                    value="{{ Str::random(6) }}" readonly="true">
                @if($errors->has('name'))
                <em class="invalid-feedback">
                    {{ $errors->first('name') }}
                </em>
                @endif
               
            </div>
            <div class="form-group {{ $errors->has('discount') ? 'has-error' : '' }}">
                <label for="title">{{ trans('cruds.vourcher.fields.discount') }} % *</label>
                <input type="number" id="discount" name="discount" class="form-control"
                    value="{{ old('discount', isset($vourcher) ? $vourcher->discount : '') }}" require>
                @if($errors->has('discount'))
                <em class="invalid-feedback">
                    {{ $errors->first('discount') }}
                </em>
                @endif
              
            </div>

            <div class="form-group {{ $errors->has('expried') ? 'has-error' : '' }}">
                <label for="title">{{ trans('cruds.vourcher.fields.expired') }}*</label>
                <input type="text" id="expried" class="form-control datepicker form_datetime"
                                        name="expried" placeholder="expried" >
                @if($errors->has('expried'))
                <em class="invalid-feedback">
                    {{ $errors->first('expried') }}
                </em>
                @endif
            </div>
            
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection