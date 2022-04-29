@extends('layouts.frontend')
@section('content')
<section class="beauty-spa-breadcrumb-area contact_bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="breadcrumb-area">
                    <div class="breadcrumb-text">
                        <h1>Sign up </h1>
                    </div>
                    <!--end breadcrumb text-->
                    <div class="page-breadcrumbs">
                        <ul class="breadcrumbs-list">
                            <li class="item"><a href="beauty-spa.html">Home</a></li>
                            <li class="item"><i class="icon icon-double-right-chevron"></i></li>
                            <li class="item active">Sign up</li>
                        </ul>
                        <!--end breadcrumbs list-->
                    </div>
                    <!--end page breadcrumbs-->
                </div>
                <!--end breadcrumb area-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
    <div class="beauty-spa-black-overlay"></div>
</section>

<section class="beautybox-contact-form-section section-padding">
    <div class="contact-overlay-image">
        <img src="img/beautybox/overlay.png" alt="">
    </div>
    <div class="container">
        <form action="{{ route('member.register.submit') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading text-center">
                        <h2 class="section-title">Sign up</h2>
                        @if(isset($message))
                        <h4 class="section-title-success">{{$message}}</h4>
                        @endif
                    </div>
                    <!--end section heading-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <div class="row mx-auto">
                <div class="col-lg-8 mx-auto form-inner">
                    <div class="form-group {{ $errors->has('firstname') ? 'has-error' : '' }}">
                        <lable>First Name</lable>
                       <input type="text" name="firstname" id="firstname" class="form-control" value="{{ old('firstname', isset($member) ? $member->firstname : '') }}" require>
                            @if($errors->has('firstname'))
                        <em class="invalid-feedback">
                            {{ $errors->first('firstname') }}
                        </em>
                        @endif
                    </div>
                </div>
                <div class="col-lg-8 mx-auto form-inner">
                    <div class="form-group {{ $errors->has('lastname') ? 'has-error' : '' }}">
                        <lable>Last Name</lable>
                       <input type="text" name="lastname" id="lastname" class="form-control" value="{{ old('lastname', isset($member) ? $member->lastname : '') }}" require>
                            @if($errors->has('lastname'))
                        <em class="invalid-feedback">
                            {{ $errors->first('lastname') }}
                        </em>
                        @endif
                    </div>
                </div>
                <div class="col-lg-8 mx-auto form-inner">
                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                        <lable>Email</lable>
                       <input type="text" name="email" id="email" class="form-control" value="{{ old('email', isset($member) ? $member->email : '') }}" require>
                            @if($errors->has('email'))
                        <em class="invalid-feedback">
                            {{ $errors->first('email') }}
                        </em>
                        @endif
                    </div>
                </div>
                <div class="col-lg-8 mx-auto form-inner">
                    <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                    <lable>Password</lable>
                       <input type="password" name="password" id="password" class="form-control" require>
                            @if($errors->has('password'))
                        <em class="invalid-feedback">
                            {{ $errors->first('password') }}
                        </em>
                        @endif
                    </div>
                </div>
            </div>
            <div class="btn-wrapper">
            <input type="hidden" value={{rand(1,999999999)}} name="numberAccount">
                <button class="btn btn-primary " type="submit"> Sign up</button>
            </div>
    </div>
    </form>
</section>
@endsection