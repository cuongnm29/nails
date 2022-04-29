<div class="top-bar topbar-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 text-left">
                        <!--start topbar info-->
                        <div class="topbar-info">
                            <span>
                                <i class="icon icon-clock"></i> Opening Hours - {{$setting->openhour}}
                            </span>
                            <!--start topbar socila-->
                            <div class="topbar-social">
                                <ul>
                                    <li>
                                        <a href="{{$setting->facebook}}"><i class="icon icon-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{$setting->twitter}}"><i class="icon icon-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{$setting->instagram}}"><i class="icon icon-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{$setting->linkedin}}"><i class="icon icon-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <!--end topbar socila-->
                        </div>
                        <!--end topbar info-->
                    </div>
                    <!--end col -->
                    <div class="col-lg-6 col-md-6 text-right">
                        <div class="header-top-right">
                            <ul>
                                <li>
                                   <i class="icon icon-envelope"></i>{{$setting->email}}
                                </li>
                                @if(!isset($member))
                                <li>
                                    <i class="icon icon-lock"></i><a href="#"  data-toggle="modal" data-target="#signin-modal">Sign in</a>
                                </li>
                                <li>
                                    <i class="icon icon-user"></i><a href="#"  data-toggle="modal" data-target="#signin-modal">Sign up</a>
                                </li>
                                @else
                                <li>
                                    <a href="/member/profile"  >Hello :{{$member->firstname}} {{$member->lastname}}</a>
                                </li>
                                <li>
                                   <a href="/member/logout"  >Sign out</a>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    <!--end col -->
                </div>
                <!--end row -->
            </div>
            <!--end container  -->
        </div>