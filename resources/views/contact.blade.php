@extends('layouts.frontend')
@section('content')
<section class="beauty-spa-breadcrumb-area contact_bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="breadcrumb-area">
                    <div class="breadcrumb-text">
                        <h1>Contact </h1>
                    </div>
                    <!--end breadcrumb text-->
                    <div class="page-breadcrumbs">
                        <ul class="breadcrumbs-list">
                            <li class="item"><a href="beauty-spa.html">Home</a></li>
                            <li class="item"><i class="icon icon-double-right-chevron"></i></li>
                            <li class="item active">Contact</li>
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
<div class="beautybox-content-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading text-center">
                    <h2 class="section-title">GET IN TOUCH</h2>
                    <div class="section-des">From banking and insurance to wealth management and securities</div>
                </div>
                <!--end section heading-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
        <div class="row">
            <div class="col-md-4">
                <div class="beautybox-contact-info text-center res-mb-30">
                    <div class="beautybox-icon">
                        <i class="icon icon-phone"></i>
                    </div>
                    <!--end beautybox icon-->
                    <div class="beautybox-content-body">
                        <h3 class="info-title">Phone</h3>
                        <p>{{$setting->phone}}</p>
                    </div>
                    <!--end beautybox content body-->
                </div>
                <!--end beautybox contact info-->
            </div>
            <!--end col-->
            <div class="col-md-4">
                <div class="beautybox-contact-info text-center res-mb-30">
                    <div class="beautybox-icon">
                        <i class="icon icon-alarm-clock"></i>
                    </div>
                    <!--end beautybox icon-->
                    <div class="beautybox-content-body">
                        <h3 class="info-title">Open hours</h3>
                        <p>{{$setting->openhour}}</p>

                    </div>
                    <!--end beautybox content body-->
                </div>
                <!--end beautybox contact info-->
            </div>
            <!--end col-->
            <div class="col-md-4">
                <div class="beautybox-contact-info text-center">
                    <div class="beautybox-icon">
                        <i class="icon icon icon-map-marker"></i>
                    </div>
                    <!--end beautybox icon-->
                    <div class="beautybox-content-body">
                        <h3 class="info-title">Address</h3>
                        <p>{{$setting->address}}</p>
                    </div>
                    <!--end beautybox content body-->
                </div>
                <!--end beautybox contact info-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</div>
<section class="beautybox-contact-map">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 p-0">
                <div class="mapouter">
                    <div class="gmap_canvas">
                        {!!$setting->map!!}
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<section class="beautybox-contact-form-section section-padding">
    <div class="contact-overlay-image">
        <img src="img/beautybox/overlay.png" alt="">
    </div>
    <div class="container">
        <form action="/contact/saveContact" method="POST" enctype="multipart/form-data" autocomplete="off">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading text-center">
                        <h2 class="section-title">Get a Free Quote</h2>
                        @if(isset($message))
                        <h4 class="section-title-success">{{$message}}</h4>
                        @endif
                    </div>
                    <!--end section heading-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <div class="row contact-form mx-auto">
                <div class="col-lg-4 col-md-12 form-inner">
                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                        <input type="text" id="name" name="name" class="form-control" placeholder="Your Name">
                        @if($errors->has('name'))
                        <em class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </em>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
                        <input class="form-control form-control-phone" placeholder="Phone Number" name="phone"
                            id="number" type="number">
                        @if($errors->has('phone'))
                        <em class="invalid-feedback">
                            {{ $errors->first('phone') }}
                        </em>
                        @endif
                    </div>

                </div>
                <div class="col-lg-4 col-md-12 form-inner">
                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                        <input class="form-control form-control-email" placeholder="Email" name="email" id="email"
                            type="email">
                        @if($errors->has('email'))
                        <em class="invalid-feedback">
                            {{ $errors->first('email') }}
                        </em>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
                        <input class="form-control form-control-name" placeholder="Address" name="address" id="address"
                            type="text">
                        @if($errors->has('address'))
                        <em class="invalid-feedback">
                            {{ $errors->first('address') }}
                        </em>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row mx-auto">
                <div class="col-lg-8 mx-auto form-inner">
                    <div class="form-group {{ $errors->has('note') ? 'has-error' : '' }}">
                        <textarea class="form-control form-control-message" name="note" id="note"
                            placeholder="Message"></textarea>
                            @if($errors->has('note'))
                        <em class="invalid-feedback">
                            {{ $errors->first('note') }}
                        </em>
                        @endif
                    </div>
                </div>
            </div>
            <div class="btn-wrapper">
                <button class="btn btn-primary " type="submit"> Submit now</button>
            </div>
    </div>
    </form>
</section>
@endsection