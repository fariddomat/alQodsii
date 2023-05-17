@extends('home._layouts._app')
@section('style')
    <style>
        .details-map iframe {
            width: 100% !important;
        }
    </style>
@endsection
@section('content')

    <section class="section-light no-bottom-padding margin-top-135">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-md-9">
                    <div class="row">
                        <div class="details-image pull-right hidden-xs">
                            <i class="fa fa-building"></i>
                        </div>
                        <div class="details-title pull-right">
                            <h4 class="subtitle-margin">المشروع ضمن {{ $project->category->name }}</h4>
                            <h3>{{ $project->name }}<span class="special-color">.</span></h3>
                        </div>
                    </div>
                    <section class="section-dark no-padding margin-top-15">

                        <!-- Slider main container -->
                        <div id="" class="">
                            <!-- Additional required wrapper -->
                            <div class="">
                                <!-- Slides -->
                                <div class="">
                                    <img class="" src="{{ asset('images/slides/1.jpg') }}" style="max-width: 100%" />
                                </div>
                            </div>

                        </div>

                    </section>

                    <div class="row margin-top-30">
                        <div class="col-xs-12 col-sm-5 col-md-4">
                            <div class="clearfix"></div>
                            <div class="details-parameters-price">{{ $project->status }}</div>
                            <div class="details-parameters">
                                <div class="details-parameters-cont">
                                    <div class="details-parameters-val">عدد الأدوار</div>
                                    <div class="details-parameters-name">{{ $project->floors_count }}</div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="details-parameters-cont">
                                    <div class="details-parameters-val">عدد الغرف</div>
                                    <div class="details-parameters-name">{{ $project->floors->count() }}</div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="details-parameters-cont">
                                    <div class="details-parameters-val">الملاحق</div>
                                    <div class="details-parameters-name">
                                        @if ($project->appendix_count > 0)
                                            {{ $project->appendix_count }}
                                        @else
                                            0
                                        @endif

                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-7 col-md-8">
                            <div class="clearfix"></div>
                            <div class="title-separator-primary"></div>
                            <p class="details-desc">
                            <h3>العنوان: {!! $project->address !!}</h3>
                            <h3>الوصف: {!! $project->details !!}</h3>
                            </p>
                        </div>
                    </div>

                    @if ($project->propertie->details)
                        <div class="row margin-top-45">
                            @foreach (preg_split("/((\r?\n)|(\r\n?))/", $project->propertie->details) as $line)
                                <div class="col-xs-6 col-sm-4" style="float: right">
                                    <ul class="details-ticks">
                                        <li><i class="jfont">&#xe815;</i></i>{{ $line }}</li>
                                    </ul>
                                </div>
                            @endforeach
                        </div>
                    @endif
                    <div class="row margin-top-45">
                        <div class="col-xs-12 apartment-tabs">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#tab-map" aria-controls="tab-map" role="tab" data-toggle="tab">
                                        <span>Map</span>
                                        <div class="button-triangle2"></div>
                                    </a>
                                </li>
                                {{-- <li role="presentation">
                                    <a href="#tab-street-view" aria-controls="tab-street-view" role="tab"
                                        data-toggle="tab">
                                        <span>Street view</span>
                                        <div class="button-triangle2"></div>
                                    </a>
                                </li> --}}
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="tab-map">
                                    <div id="estate-map" class="details-map">
                                        {!! $project->address_location !!}
                                    </div>
                                </div>
                                {{-- <div role="tabpanel" class="tab-pane" id="tab-street-view">
                                    <div id="estate-street-view" class="details-map"></div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <section class="section-dark no-padding margin-top-15">

                        <!-- Slider main container -->
                        <div id="swiper-gallery" class="swiper-container">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                @foreach ($project->images_path as $item)
                                    <div class="swiper-slide">
                                        <div class="slide-bg swiper-lazy" data-background="{{ $item }}"
                                            data-sub-html="<strong>this is a caption 1</strong><br/>Second line of the caption">
                                        </div>
                                        <!-- Preloader image -->
                                        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                    </div>
                                @endforeach
                            </div>

                            <div class="slide-buttons slide-buttons-center">
                                <a href="#" class="navigation-box navigation-box-next slide-next">
                                    <div class="navigation-triangle"></div>
                                    <div class="navigation-box-icon"><i class="jfont">&#xe800;</i></div>
                                </a>
                                <div id="slide-more-cont"></div>
                                <a href="#" class="navigation-box navigation-box-prev slide-prev">
                                    <div class="navigation-triangle"></div>
                                    <div class="navigation-box-icon"><i class="jfont">&#xe802;</i></div>
                                </a>
                            </div>

                        </div>

                    </section>

                    <section class="thumbs-slider section-both-shadow">
                        <div class="container" style="  max-width: 100% !important;">
                            <div class="row">
                                <div class="col-xs-1">
                                    <a href="#" class="thumb-box thumb-next pull-left">
                                        <div class="navigation-triangle"></div>
                                        <div class="navigation-box-icon"><i class="jfont">&#xe800;</i></div>
                                    </a>
                                </div>
                                <div class="col-xs-10">
                                    <!-- Slider main container -->
                                    <div id="swiper-thumbs" class="swiper-container">
                                        <!-- Additional required wrapper -->
                                        <div class="swiper-wrapper">
                                            <!-- Slides -->
                                            @foreach ($project->images_path as $item)
                                                <div class="swiper-slide">
                                                    <img class="slide-thumb" src="{{ $item }}"
                                                        alt="" style="max-width: 140px; max-height: 80px">
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-1">
                                    <a href="#" class="thumb-box thumb-prev pull-right">
                                        <div class="navigation-triangle"></div>
                                        <div class="navigation-box-icon"><i class="jfont">&#xe802;</i></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="row margin-top-60">
                        <div class="col-xs-12">
                            <h3 class="title-negative-margin">contact the agent<span class="special-color">.</span></h3>
                            <div class="title-separator-primary"></div>
                        </div>
                    </div>
                    <div class="row margin-top-60">
                        <div class="col-xs-6 col-xs-offset-3 col-sm-offset-0 col-sm-4">
                            <h5 class="subtitle-margin">manager</h5>
                            <h3 class="title-negative-margin">Mark Smith<span class="special-color">.</span></h3>
                            <a href="agent1.html" class="agent-photo">
                                <img src="images/agent1.jpg" alt="" class="img-responsive" />
                            </a>
                        </div>
                        <div class="col-xs-12 col-sm-8">
                            <div class="agent-social-bar">
                                <div class="pull-left">
                                    <span class="agent-icon-circle">
                                        <i class="fa fa-phone"></i>
                                    </span>
                                    <span class="agent-bar-text">123-456-789</span>
                                </div>
                                <div class="pull-left">
                                    <span class="agent-icon-circle">
                                        <i class="fa fa-envelope fa-sm"></i>
                                    </span>
                                    <span class="agent-bar-text">apartment@domain.tld</span>
                                </div>
                                <div class="pull-right">
                                    <div class="pull-right">
                                        <a class="agent-icon-circle" href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </div>
                                    <div class="pull-right">
                                        <a class="agent-icon-circle icon-margin" href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </div>
                                    <div class="pull-right">
                                        <a class="agent-icon-circle icon-margin" href="#">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </div>
                                    <div class="pull-right">
                                        <a class="agent-icon-circle icon-margin" href="#">
                                            <i class="fa fa-skype"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <form name="contact-from" action="#">
                                <input name="name" type="text" class="input-short main-input pull-left"
                                    placeholder="Your name" />
                                <input name="phone" type="text" class="input-short pull-right main-input"
                                    placeholder="Your phone" />
                                <input name="mail" type="email" class="input-full main-input"
                                    placeholder="Your email" />
                                <textarea name="message" class="input-full agent-textarea main-input" placeholder="Your question"></textarea>
                                <div class="form-submit-cont">
                                    <a href="#" class="button-primary pull-right">
                                        <span>send</span>
                                        <div class="button-triangle"></div>
                                        <div class="button-triangle2"></div>
                                        <div class="button-icon"><i class="fa fa-search"></i></div>
                                    </a>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="row margin-top-90">
                        <div class="col-xs-12 col-sm-9 col-sm-push-3">
                            <h5 class="subtitle-margin">hot</h5>
                            <h1>new listings<span class="special-color">.</span></h1>
                        </div>
                        <div class="col-xs-12 col-sm-3 col-sm-push-9">
                            <a href="#" class="navigation-box navigation-box-prev" id="short-offers-owl-prev">
                                <div class="navigation-triangle"></div>
                                <div class="navigation-box-icon"><i class="jfont">&#xe800;</i></div>
                            </a>
                            <a href="#" class="navigation-box navigation-box-next" id="short-offers-owl-next">
                                <div class="navigation-triangle"></div>
                                <div class="navigation-box-icon"><i class="jfont">&#xe802;</i></div>
                            </a>
                        </div>
                        <div class="col-xs-12">
                            <div class="title-separator-primary"></div>
                        </div>
                    </div>

                    <div class="short-offers-container">
                        <div class="owl-carousel" id="short-offers-owl">
                            <div class="grid-offer-col">
                                <div class="grid-offer">
                                    <div class="grid-offer-front">

                                        <div class="grid-offer-photo">
                                            <img src="images/grid-offer1.jpg" alt="" />
                                            <div class="type-container">
                                                <div class="estate-type">apartment</div>
                                                <div class="transaction-type">sale</div>
                                            </div>
                                        </div>
                                        <div class="grid-offer-text">
                                            <i class="fa fa-map-marker grid-offer-localization"></i>
                                            <div class="grid-offer-h4">
                                                <h4 class="grid-offer-title">34 Fort Collins, Colorado 80523, USA</h4>
                                            </div>
                                            <div class="clearfix"></div>
                                            <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et [...]</p>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="price-grid-cont">
                                            <div class="grid-price-label pull-right">Price:</div>
                                            <div class="grid-price pull-left">
                                                $320000
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="grid-offer-params">
                                            <div class="grid-area">
                                                <img src="images/area-icon.png" alt="" />54m<sup>2</sup>
                                            </div>
                                            <div class="grid-rooms">
                                                <img src="images/rooms-icon.png" alt="" />3
                                            </div>
                                            <div class="grid-baths">
                                                <img src="images/bathrooms-icon.png" alt="" />1
                                            </div>
                                        </div>

                                    </div>
                                    <div class="grid-offer-back">
                                        <div id="grid-map1" class="grid-offer-map"></div>
                                        <div class="button">
                                            <a href="estate-details-right-sidebar.html" class="button-primary">
                                                <span>read more</span>
                                                <div class="button-triangle"></div>
                                                <div class="button-triangle2"></div>
                                                <div class="button-icon"><i class="fa fa-search"></i></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-offer-col">
                                <div class="grid-offer">
                                    <div class="grid-offer-front">
                                        <div class="grid-offer-photo">
                                            <img src="images/grid-offer2.jpg" alt="" />
                                            <div class="type-container">
                                                <div class="estate-type">apartment</div>
                                                <div class="transaction-type">sale</div>
                                            </div>
                                        </div>
                                        <div class="grid-offer-text">
                                            <i class="fa fa-map-marker grid-offer-localization"></i>
                                            <div class="grid-offer-h4">
                                                <h4 class="grid-offer-title">West Fourth Street, New York 10003, USA</h4>
                                            </div>
                                            <div class="clearfix"></div>
                                            <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et [...]</p>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="price-grid-cont">
                                            <div class="grid-price-label pull-right">Price:</div>
                                            <div class="grid-price pull-left">
                                                $299000
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="grid-offer-params">
                                            <div class="grid-area">
                                                <img src="images/area-icon.png" alt="" />48m<sup>2</sup>
                                            </div>
                                            <div class="grid-rooms">
                                                <img src="images/rooms-icon.png" alt="" />2
                                            </div>
                                            <div class="grid-baths">
                                                <img src="images/bathrooms-icon.png" alt="" />1
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid-offer-back">
                                        <div id="grid-map2" class="grid-offer-map"></div>
                                        <div class="button">
                                            <a href="estate-details-right-sidebar.html" class="button-primary">
                                                <span>read more</span>
                                                <div class="button-triangle"></div>
                                                <div class="button-triangle2"></div>
                                                <div class="button-icon"><i class="fa fa-search"></i></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-offer-col">
                                <div class="grid-offer">
                                    <div class="grid-offer-front">
                                        <div class="grid-offer-photo">
                                            <img src="images/grid-offer3.jpg" alt="" />
                                            <div class="type-container">
                                                <div class="estate-type">apartment</div>
                                                <div class="transaction-type">sale</div>
                                            </div>
                                        </div>
                                        <div class="grid-offer-text">
                                            <i class="fa fa-map-marker grid-offer-localization"></i>
                                            <div class="grid-offer-h4">
                                                <h4 class="grid-offer-title">E. Elwood St. Phoenix, AZ 85034, USA</h4>
                                            </div>
                                            <div class="clearfix"></div>
                                            <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et [...]</p>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="price-grid-cont">
                                            <div class="grid-price-label pull-right">Price:</div>
                                            <div class="grid-price pull-left">
                                                $400000
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="grid-offer-params">
                                            <div class="grid-area">
                                                <img src="images/area-icon.png" alt="" />93m<sup>2</sup>
                                            </div>
                                            <div class="grid-rooms">
                                                <img src="images/rooms-icon.png" alt="" />4
                                            </div>
                                            <div class="grid-baths">
                                                <img src="images/bathrooms-icon.png" alt="" />2
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid-offer-back">
                                        <div id="grid-map3" class="grid-offer-map"></div>
                                        <div class="button">
                                            <a href="estate-details-right-sidebar.html" class="button-primary">
                                                <span>read more</span>
                                                <div class="button-triangle"></div>
                                                <div class="button-triangle2"></div>
                                                <div class="button-icon"><i class="fa fa-search"></i></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-offer-col">
                                <div class="grid-offer">
                                    <div class="grid-offer-front">
                                        <div class="grid-offer-photo">
                                            <img src="images/grid-offer4.jpg" alt="" />
                                            <div class="type-container">
                                                <div class="estate-type">house</div>
                                                <div class="transaction-type">sale</div>
                                            </div>
                                        </div>
                                        <div class="grid-offer-text">
                                            <i class="fa fa-map-marker grid-offer-localization"></i>
                                            <div class="grid-offer-h4">
                                                <h4 class="grid-offer-title">N. Willamette Blvd., Portland, OR 97203, USA
                                                </h4>
                                            </div>
                                            <div class="clearfix"></div>
                                            <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et [...]</p>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="price-grid-cont">
                                            <div class="grid-price-label pull-right">Price:</div>
                                            <div class="grid-price pull-left">
                                                $800000
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="grid-offer-params">
                                            <div class="grid-area">
                                                <img src="images/area-icon.png" alt="" />300m<sup>2</sup>
                                            </div>
                                            <div class="grid-rooms">
                                                <img src="images/rooms-icon.png" alt="" />8
                                            </div>
                                            <div class="grid-baths">
                                                <img src="images/bathrooms-icon.png" alt="" />3
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid-offer-back">
                                        <div id="grid-map4" class="grid-offer-map"></div>
                                        <div class="button">
                                            <a href="estate-details-right-sidebar.html" class="button-primary">
                                                <span>read more</span>
                                                <div class="button-triangle"></div>
                                                <div class="button-triangle2"></div>
                                                <div class="button-icon"><i class="fa fa-search"></i></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-offer-col">
                                <div class="grid-offer">
                                    <div class="grid-offer-front">
                                        <div class="grid-offer-photo">
                                            <img src="images/grid-offer5.jpg" alt="" />
                                            <div class="type-container">
                                                <div class="estate-type">apartment</div>
                                                <div class="transaction-type">sale</div>
                                            </div>
                                        </div>
                                        <div class="grid-offer-text">
                                            <i class="fa fa-map-marker grid-offer-localization"></i>
                                            <div class="grid-offer-h4">
                                                <h4 class="grid-offer-title">One Brookings Drive St. Louis, Missouri 63130,
                                                    USA</h4>
                                            </div>
                                            <div class="clearfix"></div>
                                            <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et [...]</p>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="price-grid-cont">
                                            <div class="grid-price-label pull-right">Price:</div>
                                            <div class="grid-price pull-left">
                                                $320000
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="grid-offer-params">
                                            <div class="grid-area">
                                                <img src="images/area-icon.png" alt="" />50m<sup>2</sup>
                                            </div>
                                            <div class="grid-rooms">
                                                <img src="images/rooms-icon.png" alt="" />2
                                            </div>
                                            <div class="grid-baths">
                                                <img src="images/bathrooms-icon.png" alt="" />1
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid-offer-back">
                                        <div id="grid-map5" class="grid-offer-map"></div>
                                        <div class="button">
                                            <a href="estate-details-right-sidebar.html" class="button-primary">
                                                <span>read more</span>
                                                <div class="button-triangle"></div>
                                                <div class="button-triangle2"></div>
                                                <div class="button-icon"><i class="fa fa-search"></i></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-offer-col">
                                <div class="grid-offer">
                                    <div class="grid-offer-front">
                                        <div class="grid-offer-photo">
                                            <img src="images/grid-offer7.jpg" alt="" />
                                            <div class="type-container">
                                                <div class="estate-type">house</div>
                                                <div class="transaction-type">sale</div>
                                            </div>
                                        </div>
                                        <div class="grid-offer-text">
                                            <i class="fa fa-map-marker grid-offer-localization"></i>
                                            <div class="grid-offer-h4">
                                                <h4 class="grid-offer-title">One Neumann Drive Aston, Philadelphia 19014,
                                                    USA</h4>
                                            </div>
                                            <div class="clearfix"></div>
                                            <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et [...]</p>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="price-grid-cont">
                                            <div class="grid-price-label pull-right">Price:</div>
                                            <div class="grid-price pull-left">
                                                $500000
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="grid-offer-params">
                                            <div class="grid-area">
                                                <img src="images/area-icon.png" alt="" />210m<sup>2</sup>
                                            </div>
                                            <div class="grid-rooms">
                                                <img src="images/rooms-icon.png" alt="" />6
                                            </div>
                                            <div class="grid-baths">
                                                <img src="images/bathrooms-icon.png" alt="" />2
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid-offer-back">
                                        <div id="grid-map6" class="grid-offer-map"></div>
                                        <div class="button">
                                            <a href="estate-details-right-sidebar.html" class="button-primary">
                                                <span>read more</span>
                                                <div class="button-triangle"></div>
                                                <div class="button-triangle2"></div>
                                                <div class="button-icon"><i class="fa fa-search"></i></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="margin-top-45"></div>
                </div>
                <div class="col-xs-12 col-md-3">
                    <div class="sidebar">
                        <h3 class="sidebar-title">narrow search<span class="special-color">.</span></h3>
                        <div class="title-separator-primary"></div>

                        <div class="sidebar-select-cont">
                            <select name="transaction1" class="bootstrap-select" title="Transaction:" multiple>
                                <option>For sale</option>
                                <option>For rent</option>
                            </select>
                            <select name="conuntry1" class="bootstrap-select" title="Country:" multiple
                                data-actions-box="true">
                                <option>United States</option>
                                <option>Canada</option>
                                <option>Mexico</option>
                            </select>
                            <select name="city1" class="bootstrap-select" title="City:" multiple
                                data-actions-box="true">
                                <option>New York</option>
                                <option>Los Angeles</option>
                                <option>Chicago</option>
                                <option>Houston</option>
                                <option>Philadelphia</option>
                                <option>Phoenix</option>
                                <option>Washington</option>
                                <option>Salt Lake Cty</option>
                                <option>Detroit</option>
                                <option>Boston</option>
                            </select>
                            <select name="location1" class="bootstrap-select" title="Location:" multiple
                                data-actions-box="true">
                                <option>Some location 1</option>
                                <option>Some location 2</option>
                                <option>Some location 3</option>
                                <option>Some location 4</option>
                            </select>
                        </div>
                        <div class="adv-search-range-cont">
                            <label for="slider-range-price-sidebar-value" class="adv-search-label">Price:</label>
                            <span>$</span>
                            <input type="text" id="slider-range-price-sidebar-value" readonly
                                class="adv-search-amount">
                            <div class="clearfix"></div>
                            <div id="slider-range-price-sidebar" data-min="0" data-max="300000" class="slider-range">
                            </div>
                        </div>
                        <div class="adv-search-range-cont">
                            <label for="slider-range-area-sidebar-value" class="adv-search-label">Area:</label>
                            <span>m<sup>2</sup></span>
                            <input type="text" id="slider-range-area-sidebar-value" readonly
                                class="adv-search-amount">
                            <div class="clearfix"></div>
                            <div id="slider-range-area-sidebar" data-min="0" data-max="180" class="slider-range">
                            </div>
                        </div>
                        <div class="adv-search-range-cont">
                            <label for="slider-range-bedrooms-sidebar-value" class="adv-search-label">Bedrooms:</label>
                            <input type="text" id="slider-range-bedrooms-sidebar-value" readonly
                                class="adv-search-amount">
                            <div class="clearfix"></div>
                            <div id="slider-range-bedrooms-sidebar" data-min="1" data-max="10" class="slider-range">
                            </div>
                        </div>
                        <div class="adv-search-range-cont">
                            <label for="slider-range-bathrooms-sidebar-value" class="adv-search-label">Bathrooms:</label>
                            <input type="text" id="slider-range-bathrooms-sidebar-value" readonly
                                class="adv-search-amount">
                            <div class="clearfix"></div>
                            <div id="slider-range-bathrooms-sidebar" data-min="1" data-max="4" class="slider-range">
                            </div>
                        </div>
                        <div class="sidebar-search-button-cont">
                            <a href="#" class="button-primary">
                                <span>search</span>
                                <div class="button-triangle"></div>
                                <div class="button-triangle2"></div>
                                <div class="button-icon"><i class="fa fa-search"></i></div>
                            </a>
                        </div>
                        <div class="sidebar-title-cont">
                            <h4 class="sidebar-title">featured offers<span class="special-color">.</span></h4>
                            <div class="title-separator-primary"></div>
                        </div>
                        <div class="sidebar-featured-cont">
                            <div class="sidebar-featured">
                                <a class="sidebar-featured-image" href="estate-details-right-sidebar.html">
                                    <img src="images/sidebar-featured1.jpg" alt="" />
                                    <div class="sidebar-featured-type">
                                        <div class="sidebar-featured-estate">A</div>
                                        <div class="sidebar-featured-transaction">S</div>
                                    </div>
                                </a>
                                <div class="sidebar-featured-title"><a href="estate-details-right-sidebar.html">Fort
                                        Collins, Colorado 80523, USA</a></div>
                                <div class="sidebar-featured-price">$320000</div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="sidebar-featured">
                                <a class="sidebar-featured-image" href="estate-details-right-sidebar.html">
                                    <img src="images/sidebar-featured2.jpg" alt="" />
                                    <div class="sidebar-featured-type">
                                        <div class="sidebar-featured-estate">A</div>
                                        <div class="sidebar-featured-transaction">S</div>
                                    </div>
                                </a>
                                <div class="sidebar-featured-title"><a href="estate-details-right-sidebar.html">West
                                        Fourth Street, New York 10003, USA</a></div>
                                <div class="sidebar-featured-price">$350000</div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="sidebar-featured">
                                <a class="sidebar-featured-image" href="estate-details-right-sidebar.html">
                                    <img src="images/sidebar-featured3.jpg" alt="" />
                                    <div class="sidebar-featured-type">
                                        <div class="sidebar-featured-estate">A</div>
                                        <div class="sidebar-featured-transaction">S</div>
                                    </div>
                                </a>
                                <div class="sidebar-featured-title"><a href="estate-details-right-sidebar.html">E. Elwood
                                        St. Phoenix, AZ 85034, USA</a></div>
                                <div class="sidebar-featured-price">$410000</div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="sidebar-title-cont">
                            <h4 class="sidebar-title">latest news<span class="special-color">.</span></h4>
                            <div class="title-separator-primary"></div>
                        </div>
                        <div class="sidebar-blog-cont">
                            <article>
                                <a href="blog-right-sidebar.html"><img src="images/footer-blog1.jpg" alt=""
                                        class="sidebar-blog-image" /></a>
                                <div class="sidebar-blog-title"><a href="blog-right-sidebar.html">This post title, lorem
                                        ipsum dolor sit</a></div>
                                <div class="sidebar-blog-date"><i class="fa fa-calendar-o"></i>28/09/15</div>
                                <div class="clearfix"></div>
                            </article>
                            <article>
                                <a href="blog-right-sidebar.html"><img src="images/footer-blog2.jpg" alt=""
                                        class="sidebar-blog-image" /></a>
                                <div class="sidebar-blog-title"><a href="blog-right-sidebar.html">This post title, lorem
                                        ipsum dolor sit</a></div>
                                <div class="sidebar-blog-date"><i class="fa fa-calendar-o"></i>28/09/15</div>
                                <div class="clearfix"></div>
                            </article>
                            <article>
                                <a href="blog-right-sidebar.html"><img src="images/footer-blog3.jpg" alt=""
                                        class="sidebar-blog-image" /></a>
                                <div class="sidebar-blog-title"><a href="blog-right-sidebar.html">This post title, lorem
                                        ipsum dolor sit</a></div>
                                <div class="sidebar-blog-date"><i class="fa fa-calendar-o"></i>28/09/15</div>
                                <div class="clearfix"></div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
