<header class="header2">
    <div class="top-bar-wrapper">
        <div class="container top-bar">
            <div class="row">
                <div class="col-xs-5 col-sm-8">
                    <div class="top-mail pull-left hidden-xs">
                        <span class="top-icon-circle">
                            <i class="fa fa-envelope fa-sm"></i>
                        </span>
                        <span class="top-bar-text">{{ setting('site_email') }}</span>
                    </div>
                    <div class="top-phone pull-left hidden-xxs">
                        <span class="top-icon-circle">
                            <i class="fa fa-phone"></i>
                        </span>
                        <span class="top-bar-text">{{ setting('site_phone') }}</span>
                    </div>
                    <div class="top-localization pull-left hidden-sm hidden-md hidden-xs">
                        <span class="top-icon-circle ">
                            <i class="fa fa-map-marker"></i>
                        </span>
                        <span class="top-bar-text">{{ setting('site_location') }}</span>
                    </div>
                </div>
                <div class="col-xs-7 col-sm-4">
                    <div class="top-social-last top-dark pull-right" data-toggle="tooltip" data-placement="bottom"
                        title="Login/Register">
                        <a class="top-icon-circle" href="#login-modal" data-toggle="modal">
                            <i class="fa fa-lock"></i>
                        </a>
                    </div>

                    <div class="top-social pull-right">
                        <a class="top-icon-circle" href="{{ setting('twitter_link') }}">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </div>
                    <div class="top-social pull-right">
                        <a class="top-icon-circle" href="{{ setting('instagram_link') }}">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                    <div class="top-social pull-right">
                        <a class="top-icon-circle" href="#">
                            <i class="fa fa-skype"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div><!-- /.top-bar -->
    </div><!-- /.Page top-bar-wrapper -->
    <nav class="navbar main-menu-cont">
        <div class="container">
            <div class="navbar-header" style="float: left;">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar icon-bar1"></span>
                    <span class="icon-bar icon-bar2"></span>
                    <span class="icon-bar icon-bar3"></span>
                </button>
                <a href="{{ route('home') }}" title="" class="navbar-brand">
                    <img src="{{ asset('images/logo-light.png') }}" alt="Apartment - Premium Real Estate Template" />
                </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="">
                        <a href="{{ route('home') }}" class="" role="button" aria-haspopup="true">الرئيسية</a>

                    </li>
                    <li>
                        <a href="{{ route('categories') }}" role="button">المشاريع</a>

                    </li>
                    {{-- <li>
                        <a href="#" role="button">من نحن</a>

                    </li> --}}
                    <li>
                        <a href="{{ route('contactPage') }}" role="button">اتصل بنا</a>

                    </li>
                    <li>
                        @auth
                            <a href="{{ route('admin.home') }}" class="special-color">لوحة التحكم</a>
                        @else
                            <a href="{{ route('login') }}" class="special-color">تسجيل الدخول</a>
                        @endauth
                    </li>
                </ul>
            </div>
        </div>
    </nav><!-- /.mani-menu-cont -->
</header>
