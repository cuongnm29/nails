@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
       {{ trans('cruds.mail.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.mail.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="form-group {{ $errors->has('displayname') ? 'has-error' : '' }}" style="display:none">
                <label for="name">{{ trans('cruds.mail.fields.displayname') }}*</label>
                <input type="text" id="displayname" name="displayname" class="form-control"   value="{{ old('email', isset($mail) ? $mail->displayname : '') }}"
                    >
                @if($errors->has('displayname'))
                <em class="invalid-feedback"> 

                    {{ $errors->first('displayname') }}
                </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.mail.fields.displayname_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('driver') ? 'has-error' : '' }}">
                <label for="email">{{ trans('cruds.mail.fields.driver') }}*</label>
                <input type="text" id="driver" name="driver" class="form-control" value="{{ old('driver', isset($mail) ? $mail->driver : '')}}">
                @if($errors->has('driver'))
                <em class="invalid-feedback">
                    {{ $errors->first('driver') }}
                </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.mail.fields.driver_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('host') ? 'has-error' : '' }}" >
                <label for="address">{{ trans('cruds.mail.fields.host') }}*</label>
                <input type="text" id="host" name="host" class="form-control" value="{{old('host', isset($mail) ? $mail->host: '')}}">
                @if($errors->has('host'))
                <em class="invalid-feedback">
                    {{ $errors->first('host') }}
                </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.mail.fields.host_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('port') ? 'has-error' : '' }}" style="display:none">
                <label for="address">{{ trans('cruds.mail.fields.port') }}*</label>
                <input type="text" id="port" name="port" class="form-control" value="{{old('port', isset($mail) ? $mail->port: '')}}">
                @if($errors->has('port'))
                <em class="invalid-feedback">
                    {{ $errors->first('port') }}
                </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.mail.fields.port_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('username') ? 'has-error' : '' }}" style="display:none">
                <label for="name">{{ trans('cruds.mail.fields.username') }}*</label>
                <input type="text" id="username" name="username" class="form-control" value="{{ old('username', isset($mail) ? $mail->username : '') }}"
                     >
                @if($errors->has('username'))
                <em class="invalid-feedback">
                    {{ $errors->first('username') }}
                </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.mail.fields.username_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}" style="display:none">
                <label for="name">{{ trans('cruds.mail.fields.password') }}</label>
                <input type="password" id="password" name="password" class="form-control"
                value="{{ old('password', isset($mail) ? $mail->password : '') }}">
                @if($errors->has('password'))
                <em class="invalid-feedback">
                    {{ $errors->first('password') }}
                </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.mail.fields.password_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('encryption') ? 'has-error' : '' }}" style="display:none">
                <label for="name">{{ trans('cruds.mail.fields.encryption') }}</label>
                <select name="encryption" id="encryption" class="form-control select">
                    <option value="ssl">SSL</option>
                    <option value="tls">TLS</option>
                </select>
                @if($errors->has('encryption'))
                <em class="invalid-feedback">
                    {{ $errors->first('encryption') }}
                </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.mail.fields.encryption_helper') }}
                </p>
            </div>
            
            <input type="hidden" id="id" name="id" class="form-control" value="{{ old('id', isset($mail) ? $mail->id : '') }}"
                     >
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection

