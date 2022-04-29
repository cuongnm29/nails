<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ trans('panel.site_title') }}</title>
    <link rel="stylesheet" href="{{asset('/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('/css/bootstrap-datetimepicker.min.css')}}">
        <link rel="stylesheet" href="{{asset('/css/iconfont.css')}}">
        <link rel="stylesheet" href="{{asset('/css/nx-animation.css')}}">
        <link rel="stylesheet" href="{{asset('/css/nx-tab.css')}}">
        <link rel="stylesheet" href="{{asset('/css/nx-image-comparison.css')}}">
        <link rel="stylesheet" href="{{asset('/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('/css/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{asset('/css/nails.css')}}">
        <link rel="stylesheet" href="{{asset('/css/font-awesome.css')}}">
        <link rel="stylesheet" href="{{asset('/css/custom.css')}}">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
       <link rel="stylesheet" href="{{asset('/css/animations.min.css')}}"> 
    @yield('styles')
    <style>
      .bookbutton {
 background:#2c3145;
  border-radius: 0;
  color: #fff;
  display:inline-block;
  font-size: 1rem;
  height: 50px;
  line-height: 50px;
  position: fixed;
  right: 0;
  text-align: center;
  text-decoration: none;
  text-transform: uppercase;
  -moz-transform:rotate(-90deg);
  -ms-transform:rotate(-90deg);
  -o-transform:rotate(-90deg);
  -webkit-transform:rotate(-90deg);
  transform-origin: bottom right;
  width: 150px;
  top:30%;
  z-index:999;
}
    </style>
</head>

<body>

    <div id="beauty-page">
        <div style="position:relative">
        <!--start header top-->
         <div class="header-fixed">
        @include('partials/frontend/header')
        @include('partials/frontend/signin')
        <!--End header top-->

        <!--start header section -->
        @include('partials/frontend/menu')
        </div>
        </div>
        <!-- end header section -->
        @include('message')
        @yield('content')

        @include('partials/frontend/footer')
        <!--start footer-->
        
		<a href="#" data-toggle="modal" data-target="#ModalLoginForm"><span class="bookbutton" >Book Now</span></a>
		<!-- Modal -->
<!-- Modal HTML Markup -->
<div id="ModalLoginForm" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                 <h1 class="modal-title">Booking Now</h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
               
            </div>
            <div class="modal-body">
                 <form action="{{ route('order.submit')}}" method="POST" enctype="multipart/form-data"
                    autocomplete="off">
                    @csrf
                    <div class="form-group {{ $errors->has('firstname') ? 'has-error' : '' }}">
                        <div>
                             <input type="text" class="form-control input-lg" id="firstname" name="firstname" placeholder="First Name">
                            @if($errors->has('firstname'))
                            <em class="invalid-feedback">
                                {{ $errors->first('firstname') }}
                            </em>
                            @endif
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('lastname') ? 'has-error' : '' }}">
                        <div>
                             <input type="text" class="form-control input-lg" id="lastname" name="lastname" placeholder="Last Name">
                            @if($errors->has('lastname'))
                            <em class="invalid-feedback">
                                {{ $errors->first('lastname') }}
                            </em>
                            @endif
                        </div>
                    </div>
                      <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
                        <div>
                             <input type="text" class="form-control input-lg" id="phone" name="phone" placeholder="Phone">
                            @if($errors->has('phone'))
                            <em class="invalid-feedback">
                                {{ $errors->first('phone') }}
                            </em>
                            @endif
                        </div>
                    </div>
                        <div class="form-group  {{ $errors->has('email') ? 'has-error' : '' }}">
                            <div>
                            <input type="email" name="email" class="form-control input-lg" id="email"
                                placeholder="Your Email...." >
                            @if($errors->has('email'))
                            <em class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </em>
                            @endif
                            </div>
                        </div>
                        <!--input group-->
                        <div class="booking-select">
                            <div class="form-group  {{ $errors->has('catid') ? 'has-error' : '' }}">
                                <div>
                                <select class="form-control input-lg" name="catid" id="catid">
                                    @foreach($services as $key=>$service)
                                    @foreach ($service->child as $index=>$child)
                                    <option value="{{$child->id}}">{{$child->name}}</option>
                                    @endforeach
                                    @endforeach
                                </select>
                                @if($errors->has('catid'))
                                <em class="invalid-feedback">
                                    {{ $errors->first('catid') }}
                                </em>
                                @endif
                            </div>
                            </div>
                        </div>
                        <!--input group-->
                        <!--input group-->
                        <div class="spilit-container">
                            <div class="date-select spilit-select">
                                <div class="form-group  {{ $errors->has('dateOrder') ? 'has-error' : '' }}">
                                    <input type="text" id="dateOrderModal" class="form-control input-lg datepicker form_datetime"
                                        name="dateOrder" placeholder="Date Shedule" >
                                    @if($errors->has('dateOrder'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('dateOrder') }}
                                    </em>
                                    @endif
                                </div>
                                <!--input group-->
                            </div>
                            <!--end date select-->
                            <div class="time-schedule spilit-select">
                                <div class="form-group  {{ $errors->has('timeOrder') ? 'has-error' : '' }}">
                                    <select name="timeOrder" id="timeOrder5" class="form-control" >
                                        <option value="">Time Shedule</option>
                                        <option value="10:00">10:00 AM</option>
                                        <option value="10:30">10:30 AM</option>
                                        <option value="11:00">11:00 AM</option>
                                        <option value="11:30">11:30 AM</option>
                                        <option value="12:00">12:00 AM</option>
                                        <option value="12:30">12:30 AM</option>
                                        <option value="01:00">01:00 AM</option>
                                        <option value="01:30">01:30 AM</option>
                                        <option value="02:00">02:00 AM</option>
                                        <option value="02:30">02:30 AM</option>
                                        <option value="03:00">03:00 AM</option>
                                        <option value="03:30">03:30 AM</option>
                                        <option value="04:00">04:00 AM</option>
                                        <option value="04:30">04:30 AM</option>
                                        <option value="05:00">05:00 AM</option>
                                        <option value="05:30">05:30 AM</option>
                                        <option value="06:00">06:00 AM</option>
                                        <option value="06:30">06:30 AM</option>
                                        <option value="07:00">07:00 AM</option>
                                        <option value="07:30">07:30 AM</option>
                                        <option value="08:00">08:00 AM</option>
                                        <option value="08:30">08:30 AM</option>
                                        <option value="09:00">09:00 AM</option>
                                        <option value="09:30">09:30 AM</option>
                                        <option value="10:00">10:00 AM</option>
                                        <option value="10:30">10:30 AM</option>
                                        <option value="11:00">11:00 AM</option>
                                        <option value="11:30">11:30 AM</option>
                                        <option value="12:00">12:00 PM</option>
                                        <option value="12:30">12:30 PM</option>
                                        <option value="12:00">01:00 PM</option>
                                        <option value="13:30">01:30 PM</option>
                                        <option value="14:00">02:00 PM</option>
                                        <option value="14:30">02:30 PM</option>
                                        <option value="15:00">03:00 PM</option>
                                        <option value="15:30">03:30 PM</option>
                                        <option value="16:00">04:00 PM</option>
                                        <option value="16:30">04:30 PM</option>
                                        <option value="17:00">05:00 PM</option>
                                        <option value="17:30">05:30 PM</option>
                                        <option value="18:00">06:00 PM</option>
                                        <option value="18:30">06:30 PM</option>
                                        <option value="19:00">07:00 PM</option>
                                        <option value="19:30">07:30 PM</option>
                                        <option value="20:00">08:00 PM</option>
                                    </select>
                                    <select name="timeOrder" id="timeOrder3" class="form-control" style="display:none" >
                                        <option value="">Time Shedule</option>
                                        <option value="10:00">10:00 AM</option>
                                        <option value="10:30">10:30 AM</option>
                                        <option value="11:00">11:00 AM</option>
                                        <option value="11:30">11:30 AM</option>
                                        <option value="12:00">12:00 AM</option>
                                        <option value="12:30">12:30 AM</option>
                                        <option value="01:00">01:00 AM</option>
                                        <option value="01:30">01:30 AM</option>
                                        <option value="02:00">02:00 AM</option>
                                        <option value="02:30">02:30 AM</option>
                                        <option value="03:00">03:00 AM</option>
                                        <option value="03:30">03:30 AM</option>
                                        <option value="04:00">04:00 AM</option>
                                        <option value="04:30">04:30 AM</option>
                                        <option value="05:00">05:00 AM</option>
                                        <option value="05:30">05:30 AM</option>
                                        <option value="06:00">06:00 AM</option>
                                        <option value="06:30">06:30 AM</option>
                                        <option value="07:00">07:00 AM</option>
                                        <option value="07:30">07:30 AM</option>
                                        <option value="08:00">08:00 AM</option>
                                        <option value="08:30">08:30 AM</option>
                                        <option value="09:00">09:00 AM</option>
                                        <option value="09:30">09:30 AM</option>
                                        <option value="10:00">10:00 AM</option>
                                        <option value="10:30">10:30 AM</option>
                                        <option value="11:00">11:00 AM</option>
                                        <option value="11:30">11:30 AM</option>
                                        <option value="12:00">12:00 PM</option>
                                        <option value="12:30">12:30 PM</option>
                                        <option value="12:00">01:00 PM</option>
                                        <option value="13:30">01:30 PM</option>
                                        <option value="14:00">02:00 PM</option>
                                        <option value="14:30">02:30 PM</option>
                                        <option value="15:00">03:00 PM</option>
                                        <option value="15:30">03:30 PM</option>
                                        <option value="16:00">04:00 PM</option>
                                        <option value="16:30">04:30 PM</option>
                                        <option value="17:00">05:00 PM</option>
                                        <option value="17:30">05:30 PM</option>
                                        <option value="18:00">06:00 PM</option>
                                        <option value="18:30">06:30 PM</option>
                                        <option value="19:00">07:00 PM</option>
                                        
                                    </select>
                                    <select name="timeOrder" id="timeOrder4" class="form-control" style="display:none" >
                                        <option value="">Time Shedule</option>
                                        <option value="10:00">10:00 AM</option>
                                        <option value="10:30">10:30 AM</option>
                                        <option value="11:00">11:00 AM</option>
                                        <option value="11:30">11:30 AM</option>
                                        <option value="12:00">12:00 AM</option>
                                        <option value="12:30">12:30 AM</option>
                                        <option value="01:00">01:00 AM</option>
                                        <option value="01:30">01:30 AM</option>
                                        <option value="02:00">02:00 AM</option>
                                        <option value="02:30">02:30 AM</option>
                                        <option value="03:00">03:00 AM</option>
                                        <option value="03:30">03:30 AM</option>
                                        <option value="04:00">04:00 AM</option>
                                        <option value="04:30">04:30 AM</option>
                                        <option value="05:00">05:00 AM</option>
                                        <option value="05:30">05:30 AM</option>
                                        <option value="06:00">06:00 AM</option>
                                        <option value="06:30">06:30 AM</option>
                                        <option value="07:00">07:00 AM</option>
                                        <option value="07:30">07:30 AM</option>
                                        <option value="08:00">08:00 AM</option>
                                        <option value="08:30">08:30 AM</option>
                                        <option value="09:00">09:00 AM</option>
                                        <option value="09:30">09:30 AM</option>
                                        <option value="10:00">10:00 AM</option>
                                        <option value="10:30">10:30 AM</option>
                                        <option value="11:00">11:00 AM</option>
                                        <option value="11:30">11:30 AM</option>
                                        <option value="12:00">12:00 PM</option>
                                        <option value="12:30">12:30 PM</option>
                                        <option value="12:00">01:00 PM</option>
                                        <option value="13:30">01:30 PM</option>
                                        <option value="14:00">02:00 PM</option>
                                        <option value="14:30">02:30 PM</option>
                                        <option value="15:00">03:00 PM</option>
                                        <option value="15:30">03:30 PM</option>
                                        <option value="16:00">04:00 PM</option>
                                        <option value="16:30">04:30 PM</option>
                                        <option value="17:00">05:00 PM</option>
                                        <option value="17:30">05:30 PM</option>
                                        <option value="18:00">06:00 PM</option>
                                  
                                    </select>
                                    @if($errors->has('timeOrder'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('timeOrder') }}
                                    </em>
                                    @endif
                                </div>
                                <!--input group-->
                            </div>
                            <!--end time schedule-->
                        </div>
                        <div class="form-group  phone-group {{ $errors->has('vourcherId') ? 'has-error' : '' }}">
                            <input type="text" name="vourcherId" class="form-control" id="vourcherId" maxlength="6"
                                placeholder="Your vourcher...." >
                            @if($errors->has('vourcherId'))
                            <em class="invalid-feedback">
                                {{ $errors->first('vourcherId') }}
                            </em>
                            @endif
                        </div>
                     <div class="form-group button-group btn-wrapper">
                        <input type="hidden" name="accountNumber" value="{{isset($member)?$member->numberAccount:''}}">
                            <button class="btn btn-primary" type="submit"> Booking</button>
                        </div>
                </form>
             
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
    </div>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-201118132-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-201118132-1');
</script>
<script>!function(s,u,b,i,z){var o,t,r,y;s[i]||(s._sbzaccid=z,s[i]=function(){s[i].q.push(arguments)},s[i].q=[],s[i]("setAccount",z),r=["widget.subiz.net","storage.googleapis"+(t=".com"),"app.sbz.workers.dev",i+"a"+(o=function(k,t){var n=t<=6?5:o(k,t-1)+o(k,t-3);return k!==t?n:n.toString(32)})(20,20)+t,i+"b"+o(30,30)+t,i+"c"+o(40,40)+t],(y=function(k){var t,n;s._subiz_init_2094850928430||r[k]&&(t=u.createElement(b),n=u.getElementsByTagName(b)[0],t.async=1,t.src="https://"+r[k]+"/sbz/app.js?accid="+z,n.parentNode.insertBefore(t,n),setTimeout(y,2e3,k+1))})(0))}(window,document,"script","subiz","acqzcasufnwxjpsvknui")</script>
</body>

</html>
