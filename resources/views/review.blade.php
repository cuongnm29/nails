@extends('layouts.frontend')
@section('content')
<section class="beauty-spa-breadcrumb-area service_bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="breadcrumb-area">
                    <div class="breadcrumb-text">
                        <h1>Review</h1>
                    </div>
                    <!--end breadcrumb text-->
                    <div class="page-breadcrumbs">
                        <ul class="breadcrumbs-list">
                            <li class="item"><a href="beauty-spa.html">Home</a></li>
                            <li class="item"><i class="icon icon-double-right-chevron"></i></li>
                            <li class="item"><a href="#"> Review</a></li>
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
                    <h2 class="section-title"></h2>
                    <div class="section-des">For each good review and high star will get 5% off on next bill </div>
                </div>
                <!--end section heading-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
        <div class="row">
        @foreach($review as $item)
            <div class="col-md-12 col-sm-12 col-xl-6 col-lg-6">
                <div class="review-item">
                    <div class="col-md-3 col-sm-3 col-xl-3 col-lg-3">
                        <div class="review-image"><img width="92" height="92"
                                src="https://ld-wp73.template-help.com/wordpress/prod_12427/v2/wp-content/uploads/2017/10/beauty-salon-testi1.png"
                                class="attachment-full size-full" alt="img"></div>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xl-9 col-lg-9">
                        <div class="review-desc">
                            <div class="review-note">{!! Str::words($item->content, 30, ' ...') !!}</div>
                            <div class="review-name">{{$item->name}} </div>
                            <div class="review-rate">
                            @for ($i = 0; $i < 5; ++$i) 
                            <span class="fa fa-star {{ $item->rate <=$i ? '' : 'checked' }}"></span>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{ $review->links() }}
        <!--end row-->
    </div>
    <!--end container-->
</section>
@endsection