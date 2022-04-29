<section class="beauty-spa-about-section section-padding ">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xl-6 align-self-center">
                <div class="beauty-spa-about-content-innar">
                    <div class="beauty-spa-watermark-title animated fadeInLeft" >
                        <h2  class="watermark-title">{{$about->title}}</h2>
                        <span class="separetor"></span>
                        <div class="about-des">{!!$about->summary!!}</div>
                        <div class="btn-wrapper appoinment">
                            <a href="/about/{{$about->catid}}/{{$about->slug}}" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                    <!--end watermark title-->
                </div>
                <!--end about content-->
            </div>
            <!--end col-->
            <div class="col-lg-6 col-md-12 col-sm-12 col-xl-6">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/{{$setting->video}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <!--end about img wrapper-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>