<section class="beauty-spa-header-area">
    <!--header start-->
    <header class="header_area header-classic">
        <div class="container">
            <!--navbar start-->
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="/">
                    <img src="/{{$setting->logo}}" style="width:100px">
                </a>
                <!--end navbar brand-->
                <button class="navbar-toggler nx-nav-open-control" nx-nav-toggle="offcanvas-collapse" type="button"
                    data-toggle="offcanvas">
                    <span class="icon icon-menu"></span>
                </button>
                <!--end navbar toggler-->
                <div class="navbar-collapse offcanvas-collapse">

                    <!--start menu close-->
                    <button class="navbar-toggler menu-close nx-nav-open-control" nx-nav-toggle="offcanvas-collapse"
                        type="button" data-toggle="offcanvas">
                        <span class="icon icon-cross"></span>
                    </button>
                    <!--end menu close-->

                    <!--start menulist-->
                    <ul class="navbar-nav ml-auto main-menu">
                        <li class="menu-item dropdown has-submenu">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        @foreach($categories as $category)
                        <li class="menu-item dropdown has-submenu ">
                            <a class="nav-link" href='
                                @switch($category->istype)
                                        @case(1)
                                            {{"/blog"}}
                                            @break;
                                        @case(2)
                                            {{"/about/$category->id/$category->slug"}}
                                            @break;
                                            @case(3)
                                            {{"/service"}}
                                            @break;
                                            @case(4)
                                            {{"/contact"}}
                                            @break;
                                            
                                        @default
                                            {{"/Blog/$category->id/$category->slug"}}
                                    @endswitch'>{{$category->name}}
                                @if(count($category->child) >0)
                                <span class="submenu-indicator"></span>
                                @endif
                            </a>
                            @if(count($category->child) >0)
                            <!--dropdown menu start-->
                            <ul class="dropdown-menu nav-submenu">
                                @foreach ($category->child as $child)
                                <li>
                                    <a href='
                                @switch($category->istype)
                                        @case(1)
                                            {{"/blog/$child->id/$child->slug"}}
                                            @break;
                                        @case(2)
                                            {{"/about/$child->id/$child->slug"}}
                                            @break;
                                            @case(3)
                                            {{"/service/$child->id/$child->slug"}}
                                            @break;
                                            @case(4)
                                            {{"/contact"}}
                                            @break;
                                            
                                        @default
                                            {{"/Blog/$child->id/$child->slug"}}
                                    @endswitch' class="dropdown-item">{{$child->name}}</a>
                                </li>
                                @endforeach
                            </ul>
                            @endif
                            <!--dropdown menu end-->
                        </li>
                        <!--end menu item-->
                        @endforeach
                    </ul>
                    <!--end menulist-->
                </div>
                <!--end navbar collapse-->
                <div class="beauty-spa-overlay"></div>

                <!--start nav tools-->
                <ul class="nav-tools">
                    <li>
                        <a href="#" class="nx-nav-open-control" nx-nav-toggle="search-bar" data-toggle="collapse"><i
                                class="icon icon-search"></i></a>
                    </li>
                    <div class="nav-sitebar-button nx-nav-open-control" nx-nav-toggle="offcanvas-site-menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </ul>
                <!--nav tools end-->

                <!--start search-bar-->
                <div class="search-bar">
                    <i class="icon icon-cross nx-nav-open-control" nx-nav-toggle="search-bar"></i>
                    <form role="search" method="" class="search-bar-fixed" action="#">
                        <input type="search" placeholder="Search …" value="" name="s">
                        <button type="submit"><i class="icon icon-search"></i></button>
                    </form>
                </div>
                <!--end search-bar-->

                <!--start offcanvas-sitebar-->
                <div class="offcanvas-site-menu">
                    <div class="offcanvas-menu-overlay"></div>
                    <!--end overlay-->
                    <div class="offcanvas-wrapper">
                        <div class="offcanvas-site-container">
                            <button class="site-menu_close-btn nx-nav-open-control" nx-nav-toggle="offcanvas-site-menu">
                                <i class="icon icon-cross"></i>
                            </button>
                            <div class="offcanvas-textinner">
                                <a class="site-logo" href="#">
                                    <img src="img/logo-1.png">
                                </a>
                            </div>
                            <div class="site-heading">
                                <h2 class="site-heading-title">Contact Us</h2>
                            </div>
                            <p class="des">We must explain to you how all seds this mistakens idea off denouncing
                                pleasures and praising pain was born and I will give you a completed accounts off the
                                system and expound.</p>
                            <div class="nextlab-button-wrapper">
                                <a class="nextlab-btn" href="#">Buy Ticket</a>
                            </div>
                        </div>
                        <!--end offcanvas site container-->
                    </div>
                    <!--end offcanvas wrapper-->
                </div>
                <!--end offcanvas-sitebar-->
            </nav>
            <!--navbar end-->
        </div>
        <!--end container-->
    </header>
    <!--header End-->
</section>