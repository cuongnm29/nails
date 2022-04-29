@if(isset($review))
<section class="beauty-spa-how-it-work-section section-padding beautybox">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading text-center">
                    <h2 class="section-title" data-title="Satisfaction makes value">Satisfaction makes value</h2>
                </div>
                <!--end section heading-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
        <div class="row">
            @foreach($review as $item)
            <div class="col-md-12 col-sm-12 col-xl-6 col-lg-6">
                <div class="review-item animated fadeInDown">
                   
                        <div class="review-image"><img width="92" height="92"
                                src="https://ld-wp73.template-help.com/wordpress/prod_12427/v2/wp-content/uploads/2017/10/beauty-salon-testi1.png"
                                class="attachment-full size-full" alt="img"></div>
                        <div class="review-desc " >
                            <div class="review-note">{!! Str::words($item->content, 30, ' ...') !!}</div>
                            <div class="review-name">{{$item->name}} </div>
                            <div class="review-rate">
                                @for ($i = 0; $i < 5; ++$i) <span
                                    class="fa fa-star {{ $item->rate <=$i ? '' : 'checked' }}"></span>
                                    @endfor

                            </div>
                        
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="btn-wrapper" style="margin:0 auto">
                <a href="/review" class="btn btn-primary">Learn More</a>
            </div>
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
@endif
   @include('partials/frontend/adv')
<section class="beautybox-contact-form-section section-padding">
    <form action="{{ route('renew.submit') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading text-center">
                        <h2 class="section-title">What do you think about us</h2>
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
                    <div class="form-group">
                        <span>Please rate us 1 (bad) to 5 (excelent)</span>

                    </div>
                </div>
                <div class="col-lg-8 mx-auto form-inner">
                    <div class="form-group">
                        <div class="star-rating">
                            <input type="radio" id="5-stars" name="rate" value="5" />
                            <label for="5-stars" class="star">&#9733;</label>
                            <input type="radio" id="4-stars" name="rate" value="4" />
                            <label for="4-stars" class="star">&#9733;</label>
                            <input type="radio" id="3-stars" name="rate" value="3" />
                            <label for="3-stars" class="star">&#9733;</label>
                            <input type="radio" id="2-stars" name="rate" value="2" />
                            <label for="2-stars" class="star">&#9733;</label>
                            <input type="radio" id="1-stars" name="rate" value="1" />
                            <label for="1-star" class="star">&#9733;</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row contact-form mx-auto">
                <div class="col-lg-4 col-md-12 form-inner">
                    <div class="form-group">
                        <input class="form-control form-control-name" placeholder="Your Name" name="name" id="name"
                            type="text" required="">
                    </div>

                </div>
                <div class="col-lg-4 col-md-12 form-inner">
                    <div class="form-group">
                        <input class="form-control form-control-email" placeholder="Email" name="email" id="email"
                            type="email" required="">
                        <input name="status" id="status" type="hidden" value="0">
                    </div>

                </div>
            </div>
            <div class="row mx-auto">
                <div class="col-lg-8 mx-auto form-inner">
                    <div class="form-group">
                        <textarea class="form-control form-control-message" name="content" id="content"
                            placeholder="Message" required=""></textarea>
                    </div>
                </div>
            </div>
            <div class="btn-wrapper">
                <input type="hidden" name="accountNumber" value="{{isset($member)?$member->numberAccount:''}}">
                <button class="btn btn-primary " type="submit"> Submit now</button>
            </div>
        </div>
    </form>
</section>