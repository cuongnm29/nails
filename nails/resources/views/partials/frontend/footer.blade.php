<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 ">
                <div class="widget widget_about res-mb-30">
                    <div class="footer-logo">
                        <img src="{{$setting->logo}}" alt="" style="width:90px">
                    </div>
                    <!--end footer logo-->
                   
                    <ul class="widget-info">
                        <li><i class="icon icon-map-marker"></i>{{$setting->address}}</li>
                        <li><i class="icon icon-phone"></i>{{$setting->phone}}</li>
                        <li><i class="icon icon-envelope"></i>{{$setting->email}}</li>
                    </ul>
                    <!--end widget info-->
                    <ul class="widget-social-list">
                        <li>
                            <a href="{{$setting->facebook}}" class="facebook"><i class="icon icon-facebook"></i></a>
                        </li>
                        <!--end li-->
                        <li>
                            <a href="{{$setting->twitter}}" class="twitter"><i class="icon icon-twitter"></i></a>
                        </li>
                        <!--end li-->
                        <li>
                            <a href="#" class="{{$setting->linkedin}}"><i class="icon icon-linkedin"></i></a>
                        </li>
                        <!--end li-->
                        <li>
                            <a href="#" class="instagram"><i class="icon icon-instagram"></i></a>
                        </li>
                        <!--end li-->
                    </ul>
                    <!--end social list-->
                </div>
                <!--end widget about-->
            </div>
            <!--end col-->
            @if(isset($blogfooter))
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="widget widget_latest res-mb-30">
                    <h4 class="widget-title">
                        <img src="img/beautybox/footer-heading-icon.png" alt="">Latest News
                    </h4>
                    <!--end title-->
                   
                    @foreach($blogfooter as $item)
                    <div class="latest-news-wraper media">
                        <div class="latest-news-thumb">
                            <img src="{{$item->photo}}" alt="">
                        </div>
                        <!--end thumb-->
                        <div class="media-body">
                            <h4 class="post-title">
                                <a href="#">{{$item->title}}</a>
                            </h4>
                            <!--end post title-->
                            <div class="post-meta">
                                <span class="post-date">{{$item->created_at}}</span>
                            </div>
                            <!--end post meta-->
                        </div>
                        <!--end media body-->
                    </div>
                    @endforeach
                
                <!--end widget latest-->
            </div>
            </div>
            @endif
            <!--end col-->
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="widget widget_links res-mb-30">
                    <h4 class="widget-title">
                        <img src="img/beautybox/footer-heading-icon.png" alt="">Quick Link
                    </h4>
                    <!--end title-->
                    <ul>
                        @foreach($categories as $category)
                        <li><a href='
                                @switch($category->istype)
                                        @case(1)
                                            {{"/blog/$category->id/$category->slug"}}
                                            @break;
                                        @case(2)
                                            {{"/about/$category->id/$category->slug"}}
                                            @break;
                                            @case(3)
                                            {{"/service/$category->id/$category->slug"}}
                                            @break;
                                            @case(4)
                                            {{"/contact/$category->id/$category->slug"}}
                                            @break;
                                            
                                        @default
                                            {{"/Blog/$category->id/$category->slug"}}
                                    @endswitch'>{{$category->name}}</a></li>
                        <!--end li-->
                        @endforeach

                    </ul>
                    <!--end ul-->

                </div>
                <!--end widget latest-->
            </div>
            <!--end col-->
            
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</footer>
<!--end footer-->

<!--start footer copyright-->


</div>

<script src="{{asset('/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('/js/bootstrap.min.js')}}"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="{{asset('/js/nx-counter-timer.js')}}"></script>
<script src="{{asset('/js/nx-fun-fact.js')}}"></script>
<script src="{{asset('/js/nx-progress-bar.js')}}"></script>
<script src="{{asset('/js/nx-nav-menu.js')}}"></script>
<script src="{{asset('/js/nx-tab.js')}}"></script>
<script src="{{asset('/js/nx-image-comparison.js')}}"></script>
<script src="{{asset('/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('/js/main.js')}}"></script>
<script src="{{asset('/js/wow.min.js')}}"></script>
<script>
window.addEventListener("load", function() {
    nx_count_down_start_mult(['nx-count-down', 'nx-count-down2']);
});
$( function() {
    $( "#dateOrder" ).datepicker({
        changeYear: true,
        changeMonth: true,
        dateFormat: "yy-mm-dd",
        yearRange: "-100:+20",
        minDate: '0',
        onSelect: function (selectedDate) {
        var date = $(this).datepicker('getDate');
        var day = date.getDay();
        if (day === 6) {
            $("#timeOrder").hide();
            $("#timeOrder2").hide();
            $("#timeOrder1").show();
        }
        else if(day === 0)
        {
            $("#timeOrder").hide();
            $("#timeOrder2").show();
            $("#timeOrder1").hide();
        }
        else{
            $("#timeOrder").show();
            $("#timeOrder2").hide();
            $("#timeOrder1").hide();
        }
    }
    });
  } );
  $( function() {
    $( "#dateOrderModal" ).datepicker({
        changeYear: true,
        changeMonth: true,
        dateFormat: "yy-mm-dd",
        yearRange: "-100:+20",
        minDate: '0',
        onSelect: function (selectedDate) {
         
        var date = $(this).datepicker('getDate');
        var day = date.getDay();
        if (day === 6) {
            $("#timeOrder5").hide();
            $("#timeOrder3").hide();
            $("#timeOrder4").show();
        }
        else if(day === 0)
        {
            $("#timeOrder5").hide();
            $("#timeOrder3").show();
            $("#timeOrder4").hide();
        }
        else{
            $("#timeOrder5").show();
            $("#timeOrder3").hide();
            $("#timeOrder4").hide();
        }
    }
    });
  } );
//menu
window.addEventListener("load", function() {
    nx_nav_manu('.nx-nav-open-control');
    nx_nav_manu_sub('.nx-dropdown-toggle');

});
//funfact
window.addEventListener("load", function() {
    nx_fun_fact_start('#fan-fact-1');
    nx_fun_fact_start('#fan-fact-2');
    nx_fun_fact_start('#fan-fact-3');
    nx_fun_fact_start('#fan-fact-4');
});
window.addEventListener("load", function() {
    nx_progress_start_mult(['.nx-skill-bar', '.nx-skill-bar2', '.nx-skill-bar3', '.nx-skill-bar4']);
});
//tab
window.addEventListener("load", function() {
    nx_tab_start('#nx-tab-style', 'nx-tab-style2');
});
//image comparison
window.addEventListener("load", function() {
    nx_image_comparison('img-comp-overlay');
});
//wow
var wow = new WOW({
    animateClass: 'animated',
    mobile: false
});
wow.init();
</script>