<section class="beauty-spa-booking-section">

    <div class="row">
        <div class="col-md-12">
            {!!$setting->map!!}
        </div>
        <!--end col-->
    </div>
    <!--end row-->
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-6 col-xl-6 appointment-container ">
            <div class="booking-form-wraper">
                <form action="{{ route('order.submit')}}" method="POST" enctype="multipart/form-data"
                    autocomplete="off">
                    @csrf
                    <div class="personal-information">
                        <div class="input-group phone-group {{ $errors->has('firstname') ? 'has-error' : '' }}">
                            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name"
                                >
                            @if($errors->has('firstname'))
                            <em class="invalid-feedback">
                                {{ $errors->first('firstname') }}
                            </em>
                            @endif
                        </div>
                        <div class="input-group phone-group {{ $errors->has('lastname') ? 'has-error' : '' }}">
                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name"
                                >
                            @if($errors->has('lastname'))
                            <em class="invalid-feedback">
                                {{ $errors->first('lastname') }}
                            </em>
                            @endif
                        </div>
                        <!--input group-->
                        <div class="input-group phone-group {{ $errors->has('phone') ? 'has-error' : '' }}">
                            <input type="number" name="phone" class="form-control" id="phone"
                                placeholder="Phone Number...." >
                            @if($errors->has('phone'))
                            <em class="invalid-feedback">
                                {{ $errors->first('phone') }}
                            </em>
                            @endif
                        </div>
                        <div class="input-group phone-group {{ $errors->has('email') ? 'has-error' : '' }}">
                            <input type="email" name="email" class="form-control" id="email"
                                placeholder="Your Email...." >
                            @if($errors->has('email'))
                            <em class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </em>
                            @endif
                        </div>
                        <!--input group-->
                        <div class="booking-select">
                            <div class="input-group {{ $errors->has('catid') ? 'has-error' : '' }}">
                                <select class="form-control" name="catid" id="catid">
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
                        <!--input group-->
                        <!--input group-->
                        <div class="spilit-container">
                            <div class="date-select spilit-select">
                                <div class="input-group {{ $errors->has('dateOrder') ? 'has-error' : '' }}">
                                    <input type="text" id="dateOrder" class="form-control datepicker form_datetime"
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
                                <div class="input-group {{ $errors->has('timeOrder') ? 'has-error' : '' }}">
                                    <select name="timeOrder" id="timeOrder" class="form-control" >
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
                                    <select name="timeOrder" id="timeOrder1" class="form-control" style="display:none" >
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
                                    <select name="timeOrder" id="timeOrder2" class="form-control" style="display:none" >
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
                        <div class="input-group phone-group {{ $errors->has('vourcherId') ? 'has-error' : '' }}">
                            <input type="text" name="vourcherId" class="form-control" id="vourcherId" maxlength="6"
                                placeholder="Your vourcher...." >
                            @if($errors->has('vourcherId'))
                            <em class="invalid-feedback">
                                {{ $errors->first('vourcherId') }}
                            </em>
                            @endif
                        </div>
                        <!--input group-->
                        <div class="input-group button-group btn-wrapper">
                        <input type="hidden" name="accountNumber" value="{{isset($member)?$member->numberAccount:''}}">
                            <button class="btn btn-primary" type="submit"> Booking</button>
                        </div>
                        <!--input group-->
                    </div>
                    <!--end personal information-->
                </form>
                <!--end booking form-->
            </div>
            <!--end booking form wraper-->
        </div>
    </div>
    <!--end container-->
</section>