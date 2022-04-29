@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.order.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.order.update", [$order->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('firstname') ? 'has-error' : '' }}">
                <label for="name">{{ trans('cruds.order.fields.firstname') }}*</label>
                <input type="text" id="firstname" name="firstname" disabled class="form-control"
                value="{{ old('name', isset($order) ? $order->firstname : '') }}">
                @if($errors->has('firstname'))
                <em class="invalid-feedback">
                    {{ $errors->first('firstname') }}
                </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.order.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('lastname') ? 'has-error' : '' }}">
                <label for="name">{{ trans('cruds.order.fields.lastname') }}*</label>
                <input type="text" id="lastname" name="lastname" disabled class="form-control"
                value="{{ old('name', isset($order) ? $order->lastname : '') }}">
                @if($errors->has('lastname'))
                <em class="invalid-feedback">
                    {{ $errors->first('lastname') }}
                </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.order.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
                <label for="name">{{ trans('cruds.order.fields.phone') }}*</label>
                <input type="text" id="phone" name="phone" disabled class="form-control"
                    value="{{ old('phone', isset($order) ? $order->phone : '') }}" required>
                @if($errors->has('phone'))
                <em class="invalid-feedback">
                    {{ $errors->first('phone') }}
                </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.order.fields.phone_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                <label for="name">{{ trans('cruds.order.fields.email') }}*</label>
                <input type="email" id="email" name="email" disabled class="form-control"
                    value="{{ old('email', isset($order) ? $order->email : '') }}" required>
                @if($errors->has('email'))
                <em class="invalid-feedback">
                    {{ $errors->first('email') }}
                </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.order.fields.email_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('dateOrder') ? 'has-error' : '' }}">
                <label for="name">{{ trans('cruds.order.fields.dateOrder') }}*</label>
                <input type="email" id="dateOrder" name="dateOrder" disabled class="form-control"
                    value="{{ old('dateOrder', isset($order) ? $order->dateOrder : '') }}" required>
                @if($errors->has('email'))
                <em class="invalid-feedback">
                    {{ $errors->first('email') }}
                </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.order.fields.email_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('timeOrder') ? 'has-error' : '' }}">
                <label for="name">{{ trans('cruds.order.fields.timeOrder') }}*</label>
                <input type="email" id="timeOrder" name="timeOrder" disabled class="form-control"
                    value="{{ old('timeOrder', isset($order) ? $order->timeOrder : '') }}" required>
                @if($errors->has('email'))
                <em class="invalid-feedback">
                    {{ $errors->first('email') }}
                </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.order.fields.email_helper') }}
                </p>
            </div>
            
            <div class="form-group {{ $errors->has('catid') ? 'has-error' : '' }}">
                <label for="title">{{ trans('cruds.order.fields.service') }}*</label>
                <select class="form-control" name="catid" id="catid" disabled>
                    @foreach($services as $key=>$service)
                        @foreach ($service->child as $index=>$child)
                        <option {{$order->catid==$child->id ?'selected':''}} value="{{$child->id}}">{{$child->name}}</option>
                        @endforeach
                    @endforeach
                </select>
                @if($errors->has('catid'))
                <em class="invalid-feedback">
                    {{ $errors->first('catid') }}
                </em>
                @endif
            </div>
            <div class="form-group {{ $errors->has('note') ? 'has-error' : '' }}">
                <label for="title">{{ trans('cruds.order.fields.note') }}</label>
                <textarea type="text" id="note" class="form-control "
                                        name="note" placeholder="Note" ></textarea>
                @if($errors->has('note'))
                <em class="invalid-feedback">
                    {{ $errors->first('note') }}
                </em>
                @endif
            </div>
            <div class="form-group {{ $errors->has('vourcherId') ? 'has-error' : '' }}">
                <label for="title">{{ trans('cruds.order.fields.vourcher') }}*</label>
                <select class="form-control" name="vourcherId" id="vourcherId">
                    @foreach($vourchers as $key=>$vourcher)
                        <option  value="{{$vourcher->id}}">{{$vourcher->name}}</option>
                       
                    @endforeach
                </select>
                @if($errors->has('catid'))
                <em class="invalid-feedback">
                    {{ $errors->first('catid') }}
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

@section('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>
var route_prefix = "/laravel-filemanager";
lfm('lfm', 'image', {
    prefix: route_prefix
});
</script>

@stop