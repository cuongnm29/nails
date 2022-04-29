<?php
use App\Blog;
?>
<section class="beauty-spa-about-section section-padding ">

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-12 ">
                <div class="beauty-spa-about-content-innar">
                    <div class="beauty-spa-watermark-title-service">
                       
                        <h2 class="watermark-title"><a href="/service">Our Services</a></h2>
                    </div>
                </div>
                <nav>
                    <div class="nav nav-tabs nav-fill nav-tabs-responsive" id="nav-tab" role="tablist">
                        @foreach($services as $key=>$service)
                        @foreach ($service->child as $index=>$child)
                        @if($index==0)
                        <a class="nav-item nav-link active" id="nav-{{$child->slug}}-tab" data-toggle="tab"
                            href="#nav-{{$child->slug}}" role="tab" aria-controls="nav-{{$child->slug}}"
                            aria-selected="true">{{$child->name}}</a>
                        @else
                        <a class="nav-item nav-link" id="nav-{{$child->slug}}-tab" data-toggle="tab"
                            href="#nav-{{$child->slug}}" role="tab" aria-controls="nav-{{$child->slug}}"
                            aria-selected="false">{{$child->name}}</a>
                        @endif
                        @endforeach
                        @endforeach
                    </div>
                </nav>
                <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                    @foreach($services as $key=>$service)
                    @foreach ($service->child as $index=>$child)
                    <?php $post = Blog::where('catid',$child->id)->orderby('id','desc')->first()?>
                    @if(isset($post))
                    @if($index==0)
                    <div class="tab-pane fade show active" id="nav-{{$child->slug}}" role="tabpanel"
                        aria-labelledby="nav-{{$child->slug}}-tab">
                        <section class="beauty-spa-img-comparison-section section-padding animated fadeInRight">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xl-6 col-lg-6">
                                        <div class="simple-text-wrapper "  style="padding:0px">
                                            <div class="des" >{!!$post->summary!!}</div>
                                            <div class="btn-wrapper">

                                                <a href="/service/{{$child->id}}/{{$child->slug}}" class="btn btn-secondary">Read more <i
                                                        class="icon icon-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xl-6 col-lg-6">
                                        <div class="res-mb-30">
                                            <div class="img-comp-overlay">
                                                <img src="{{$post->photo}}">
                                            </div>
                                        </div>
                                        <!--end nx image comparison-->
                                    </div>
                                    <!--end col-->
                                    
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end container-->
                        </section>
                    </div>
                    @else
                    <div class="tab-pane fade" id="nav-{{$child->slug}}" role="tabpanel"
                        aria-labelledby="nav-{{$child->slug}}-tab">
                        <section class="beauty-spa-img-comparison-section section-padding animated fadeInRight">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xl-6 col-lg-6">
                                        <div class="simple-text-wrapper " style="padding:0x">
                                            <div class="des" >{!!$post->summary!!}</div>
                                            <div class="btn-wrapper">

                                                <a href="/service/{{$child->id}}/{{$child->slug}}" class="btn btn-secondary">Read more <i
                                                        class="icon icon-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xl-6 col-lg-6">
                                        <div class="res-mb-30">
                                            <div class="img-comp-overlay">
                                                <img src="{{$post->photo}}">
                                            </div>
                                        </div>
                                        <!--end nx image comparison-->
                                    </div>
                                    <!--end col-->
                                    
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end container-->
                        </section>
                    </div>
                    @endif
                    @endif
                    @endforeach
                    @endforeach

                </div>

            </div>
        </div>
    </div>
</section>