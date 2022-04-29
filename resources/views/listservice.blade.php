@extends('layouts.frontend')
@section('content')
<section class="beauty-spa-breadcrumb-area service_bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="breadcrumb-area">
                    <div class="breadcrumb-text">
                        <h1> Services</h1>
                    </div>
                    <!--end breadcrumb text-->
                    <div class="page-breadcrumbs">
                        <ul class="breadcrumbs-list">
                            <li class="item"><a href="beauty-spa.html">Home</a></li>
                            <li class="item"><i class="icon icon-double-right-chevron"></i></li>
                            <li class="item"><a href="#"> Services</a></li>
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
<section class="beauty-spa-service-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading text-center">
                    <h2 class="section-title">Our Service</h2>
                    <div class="section-des">When an unknown printer took a galley of type and scrambled it to make a
                        type specimen book.</div>
                </div>
                <!--end section heading-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
        <div class="row">
            @foreach($services as $key=>$service)
                @foreach ($service->child as $index=>$child)
                <div class="col-lg-3 col-md-6 col-sm-6 mb-5">
                    <div class="service-box-item text-center">
                        <figure>
                            <img src="{{$child->photo}}" alt="">
                            <figcaption>
                                <div class="btn-wrapper">
                                    <a href="/service/{{$child->id}}/{{$child->slug}}" class="btn btn-primary">Details</a>
                                </div>
                            </figcaption>
                        </figure>
                        <h4>{{$child->name}}</h4>
                    </div>
                    <!--end service box item-->
                </div>
                <!--end col-->
                @endforeach
            @endforeach
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
@endsection