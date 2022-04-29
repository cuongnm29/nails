@extends('layouts.frontend')
@section('content')
<section class="beauty-spa-breadcrumb-area contact_bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="breadcrumb-area">
                    <div class="breadcrumb-text">
                        <h1>Forgot Password </h1>
                    </div>
                    <!--end breadcrumb text-->
                    <div class="page-breadcrumbs">
                        <ul class="breadcrumbs-list">
                            <li class="item"><a href="beauty-spa.html">Home</a></li>
                            <li class="item"><i class="icon icon-double-right-chevron"></i></li>
                            <li class="item active">Forgot Password</li>
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
        <form action="{{ route('member.password.submit') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading text-center">
                        <h2 class="section-title">Forgot Password</h2>
                    </div>
                    <!--end section heading-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <div class="row mx-auto">
                <div class="col-lg-8 mx-auto form-inner">
                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                        <lable>Email</lable>
                       <input type="email" name="email" id="email" class="form-control" require>
                            @if($errors->has('email'))
                        <em class="invalid-feedback">
                            {{ $errors->first('email') }}
                        </em>
                        @endif
                    </div>
                </div>
            </div>
            <div class="btn-wrapper">
                <button class="btn btn-primary " type="submit"> Submit</button>
            </div>
           
    </form>
</section>
@endsection