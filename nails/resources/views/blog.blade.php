@extends('layouts.frontend')
@section('content')
<section class="beauty-spa-breadcrumb-area service_bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="breadcrumb-area">
                    <div class="breadcrumb-text">
                        <h1> Blog</h1>
                    </div>
                    <!--end breadcrumb text-->
                    <div class="page-breadcrumbs">
                        <ul class="breadcrumbs-list">
                            <li class="item"><a href="beauty-spa.html">Home</a></li>
                            <li class="item"><i class="icon icon-double-right-chevron"></i></li>
                            <li class="item"><a href="#"> Blog</a></li>
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
<section class="beauty-spa-post-layout blog-list section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <div class="single-post-wrapper">
                            @foreach($blogs as $blog)
                            <div class="content-wrapper media">
                               <div class="entry-thumbnail">
                                    <img src="{{$blog->photo}}" alt="">
                                </div><!--end entry thumbnail-->
                                <div class="entry-header media-body">
                                    <ul class="post-meta-info">
                                        <li><i class="icon icon-clock"></i> {{$blog->created_at}}</li>
                                       
                                    </ul><!--end post meta info-->
                                    <h2 class="post-title"><a href="/blog/{{$blog->id}}/{{$blog->slug}}"> {{$blog->title}}</a></h2>
                                    <div class="post-des">{!!$blog->summary!!}</div>
                                    <div class="post-footer">
                                        <a class="btn-readmore" href="#">Read More
                                             <i class="icon icon-arrow-right"></i>
                                        </a>
                                    </div><!--end post footer-->
                                </div><!--end entry header-->
                            </div><!--end content wrapper-->
                            
                            @endforeach
                            
                        </div><!--end sidebar right-->
                        <!--start pagination -->
                        {{ $blogs->links() }}
                        <!--end pagination -->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section>
@endsection