@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.order.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.order.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('firstname') ? 'has-error' : '' }}">
                <label for="title">{{ trans('cruds.order.fields.firstname') }}*</label>
                <input type="text" id="firstname" name="firstname" class="form-control"
                    value="{{ old('firstname', isset($order) ? $order->firstname : '') }}" required>
                @if($errors->has('firstname'))
                <em class="invalid-feedback">
                    {{ $errors->first('firstname') }}
                </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.permission.fields.title_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('lastname') ? 'has-error' : '' }}">
                <label for="title">{{ trans('cruds.order.fields.lastname') }}*</label>
                <input type="text" id="lastname" name="lastname" class="form-control"
                    value="{{ old('lastname', isset($order) ? $order->lastname : '') }}" required>
                @if($errors->has('lastname'))
                <em class="invalid-feedback">
                    {{ $errors->first('lastname') }}
                </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.permission.fields.title_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
                <label for="title">{{ trans('cruds.order.fields.phone') }}*</label>
                <input type="text" id="phone" name="phone" class="form-control"
                    value="{{ old('phone', isset($order) ? $order->phone : '') }}" required>
                @if($errors->has('phone'))
                <em class="invalid-feedback">
                    {{ $errors->first('phone') }}
                </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.permission.fields.title_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                <label for="title">{{ trans('cruds.order.fields.email') }}*</label>
                <input type="text" id="email" name="email" class="form-control"
                    value="{{ old('phone', isset($order) ? $order->email : '') }}" required>
                @if($errors->has('phone'))
                <em class="invalid-feedback">
                    {{ $errors->first('email') }}
                </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.permission.fields.title_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('catid') ? 'has-error' : '' }}">
                <label for="title">{{ trans('cruds.order.fields.service') }}*</label>
                <select class="form-control" name="catid" id="catid">
                    @foreach($services as $key=>$service)
                        @foreach ($service->child as $index=>$child)
                        <option value="{{$child->id}}">{{$child->name}}</option>
                        @endforeach
                    @endforeach
                </select>
                @if($errors->has('catid'))
                <em class="invalid-feedback">
                    {{ $errors->first('catid') }}
                </em>
                @endif
            </div>
            <div class="form-group {{ $errors->has('dateOrder') ? 'has-error' : '' }}">
                <label for="title">{{ trans('cruds.order.fields.dateOrder') }}*</label>
                <input type="text" id="dateOrder" class="form-control datepicker form_datetime"
                                        name="dateOrder" placeholder="Date Shedule" >
                @if($errors->has('dateOrder'))
                <em class="invalid-feedback">
                    {{ $errors->first('dateOrder') }}
                </em>
                @endif
            </div>
            
            <div class="form-group {{ $errors->has('timeOrder') ? 'has-error' : '' }}">
                <label for="title">{{ trans('cruds.order.fields.timeOrder') }}*</label>
                <select name="timeOrder" id="timeOrder" class="form-control" >
                                        <option value="">Time Shedule</option>
                                        <option value="22:00">10:00 AM</option>
                                        <option value="22:30">10:30 AM</option>
                                        <option value="23:00">11:00 AM</option>
                                        <option value="23:30">11:30 AM</option>
                                        <option value="12:00">12:00 AM</option>
                                        <option value="12:30">12:30 AM</option>
                                        <option value="01:00">01:00 AM</option>
                                        <option value="01:30">01:30 AM</option>
                                        <option value="02:00">02:00 AM</option>
                                        <option value="02:30">02:30 AM</option>
                                        <option value="03:00">03:00 AM</option>
                                        <option value="03:30">03:30 AM</option>
                                        <option value="04:00">04:00 AM</option>
                                        <option value="04:30">04:30 AM</option>
                                        <option value="05:00">05:00 AM</option>
                                        <option value="05:30">05:30 AM</option>
                                        <option value="06:00">06:00 AM</option>
                                        <option value="06:30">06:30 AM</option>
                                        <option value="07:00">07:00 AM</option>
                                        <option value="07:30">07:30 AM</option>
                                        <option value="08:00">08:00 AM</option>
                                        <option value="08:30">08:30 AM</option>
                                        <option value="09:00">09:00 AM</option>
                                        <option value="09:30">09:30 AM</option>
                                        <option value="10:00">10:00 AM</option>
                                        <option value="10:30">10:30 AM</option>
                                        <option value="11:00">11:00 AM</option>
                                        <option value="11:30">11:30 AM</option>
                                        <option value="12:00">12:00 PM</option>
                                        <option value="12:30">12:30 PM</option>
                                        <option value="12:00">01:00 PM</option>
                                        <option value="13:30">01:30 PM</option>
                                        <option value="14:00">02:00 PM</option>
                                        <option value="14:30">02:30 PM</option>
                                        <option value="15:00">03:00 PM</option>
                                        <option value="15:30">03:30 PM</option>
                                        <option value="16:00">04:00 PM</option>
                                        <option value="16:30">04:30 PM</option>
                                        <option value="17:00">05:00 PM</option>
                                        <option value="17:30">05:30 PM</option>
                                        <option value="18:00">06:00 PM</option>
                                        <option value="18:30">06:30 PM</option>
                                        <option value="19:00">07:00 PM</option>
                                        <option value="19:30">07:30 PM</option>
                                        <option value="20:00">08:00 PM</option>
                                        
                                    </select>
                @if($errors->has('timeOrder'))
                <em class="invalid-feedback">
                    {{ $errors->first('timeOrder') }}
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
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection