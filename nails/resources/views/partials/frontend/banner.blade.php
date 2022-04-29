<section class="beauty-spa-bannar-section owl-carousel banner-slider">
@foreach($sliders as $key=>$slider)
            <div class="banner-slider-item">
             
                   <a href="{{$slider->link}}"> <img src="{{$slider->photo}}" alt=""></a>
                   
            </div><!--welcome content END -->
            @endforeach
        </section>
<!--end bannar slider-->

<!--start promo -->
<section class="beauty-spa-promo-section">
    <div class="container promo-wrappar">
        <div class="row">
            <div class="col-md-4">
                <div class="single-promo-box media">
                    <div class="promo-thumb">
                        <img src="/img/icon01.png" alt="">
                    </div>
                    <!--end promo thumb-->
                    <div class="promo-content media-body">
                        <h4>Opening Time</h4>
                        <span>{{$setting->openhour}}</span>
                    </div>
                    <!--end promo content-->
                </div>
                <!--end single promo box-->
            </div>
            <!--end col-->
            <div class="col-md-4">
                <div class="single-promo-box media">
                    <div class="promo-thumb">
                        <img src="/img/icon02.png" alt="">
                    </div>
                    <!--end promo thumb-->
                    <div class="promo-content media-body">
                        <h4>Address</h4>
                        <span>{{$setting->address}}</span>
                    </div>
                    <!--end promo content-->
                </div>
                <!--end single promo box-->
            </div>
            <!--end col-->
            <div class="col-md-4">
                <div class="single-promo-box media last">
                    <div class="promo-thumb">
                        <img src="/img/icon03.png" alt="">
                    </div>
                    <!--end promo thumb-->
                    <div class="promo-content media-body">
                        <h4>Telephone</h4>
                        <span>{{$setting->phone}}</span>
                    </div>
                    <!--end promo content-->
                </div>
                <!--end single promo box-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>