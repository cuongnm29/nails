@extends('layouts.frontend')
@section('content')
<section class="beauty-spa-breadcrumb-area service_bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="breadcrumb-area">
                    <div class="breadcrumb-text">
                        <h1> {{$blog->title}}</h1>
                    </div>
                    <!--end breadcrumb text-->
                    <div class="page-breadcrumbs">
                        <ul class="breadcrumbs-list">
                            <li class="item"><a href="beauty-spa.html">Home</a></li>
                            <li class="item"><i class="icon icon-double-right-chevron"></i></li>
                            <li class="item"><a href="#"> Blog</a></li>
                            <li class="item"><i class="icon icon-double-right-chevron"></i></li>
                            <li class="item"><a href="#"> {{$blog->title}}</a></li>
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
<section class="beauty-spa-post-layout section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="single-post-wrapper blog-details">
                    <div class="content-wrapper ">
                        <div class="entry-header">
                            <h2 class="post-title"><a href="#">{{$blog->title}}</a></h2>
                            <ul class="post-meta-info">
                                <li><i class="icon icon-clock"></i> {{$blog->created_at}}</li>
                            </ul>
                            <!--end post meta info-->
                        </div>
                        <!--end entry header-->
                        <div class="post-content-area">
                            <article class="post-details">
                                <div class="post-body-content">
                                    <div class="post-des">{!!$blog->summary!!}</div>

                                    <div class="post-des">{!!$blog->content!!}</div>


                                </div>
                                <!--end post body content-->
                            </article>

                        </div>
                    </div>
                </div>
                <!--end single post wrapper-->
            </div>
            <!--end col-->
            <div class="col-lg-4">
                <!--start sidebar left -->
                <aside class="sidebar" id="sidebar">

                    <!--end widget search-->

                    <!--end widget apsc widget-->
                    <div class="widget post-list-item">
                        <h4 class="widget-title">
                            <img src="img/beautybox/footer-heading-icon.png" alt="">Recent Post
                        </h4>
                        <!--end title-->
                        @foreach($recentPost as $blog)
                        <div class="post-content media">
                            <div class="post-thumb">
                                <img class="sidebar-img" src="{{$blog->photo}}" alt="">
                            </div>
                            <!--end post thumb-->
                            <div class="media-body">
                                <h4 class="post-title">
                                    <a href="/blog/{{$blog->catid}}/{{$blog->catslug}}">{{$blog->title}}</a>
                                </h4>
                                <!--end post title-->
                                <div class="post-meta">
                                    <span class="post-date">
                                        <i class="icon icon-clock" aria-hidden="true"></i>
                                        {{$blog->created_at}}
                                    </span>
                                    <!--end post date-->
                                </div>
                                <!--end post meta-->
                            </div>
                            <!--end media body-->
                        </div>
                        @endforeach
                    </div>
                    <!--end post list item-->
                    <div class="widget category">
                        <h4 class="widget-title">
                            <img src="img/beautybox/footer-heading-icon.png" alt="">CATEGORIES
                        </h4>
                        <!--end title-->
                        <ul class="category-list">
                            @foreach($categoriesService as $key=>$service)
                                @foreach ($service->child as $index=>$child)
                                <li>
                                    <a href="/service/{{$child->id}}/{{$child->slug}}">{{$child->name}}</a>
                                  
                                </li>
                                @endforeach
                            @endforeach
                            <!--end li-->
                        </ul>
                        <!--end category list-->
                    </div>
                    <!--end category-->


                    <!--end widget tag cloud-->
                </aside>
                <!--end aside-->
                <!--end sidebar left-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
        <div class="row">

        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
@endsection