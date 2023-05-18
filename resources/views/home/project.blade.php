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
                                    <img class="" src="{{ $project->image_path }}" style="max-width: 100%" />
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
                                <div class="col-xs-6 col-sm-6" style="float: right">
                                    <ul class="details-ticks">
                                        <li style="font-size: 22px"><i class="jfont">&#xe815;</i></i>{{ $line }}
                                        </li>
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
                    <div class="row margin-top-60">
                        <div class="col-xs-12 col-lg-12 text-center">
                            <h1 class="">معرض الصور<span class="special-color">.</span></h1>
                        </div>
                        <div class="col-xs-8 col-xs-offset-2 col-sm-offset-4 col-sm-4">
                            <div class="title-separator-primary2"></div>
                        </div>
                    </div>
                    <section class="section-dark no-padding margin-top-30">

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
                                                    <img class="slide-thumb" src="{{ $item }}" alt=""
                                                        style="max-width: 140px; max-height: 80px">
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

                    {{-- Facilities --}}
                    <div class="row">
                        <div class="row margin-top-60">
                            <div class="col-xs-12 col-lg-12 text-center">
                                <h1 class="">الضمانات<span class="special-color">.</span></h1>
                            </div>
                            <div class="col-xs-8 col-xs-offset-2 col-sm-offset-4 col-sm-4">
                                <div class="title-separator-primary2"></div>
                            </div>
                        </div>
                        <div class="col-md-12 margin-top-30">
                            <div class="main-timeline9">
                                <div class="timeline">
                                    <div class="timeline-content">
                                        <div class="circle"><span><i class="fa fa-home"></i></span></div>
                                        <div class="content">
                                            <span class="year">{{ $project->facility->f1 }}</span>
                                            <h4 class="title">على الهيكل الإنشائي</h4>
                                            <div class="icon"><span></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline">
                                    <div class="timeline-content">
                                        <div class="circle"><span><i class="fa fa-plug"></i></span></div>
                                        <div class="content">
                                            <span class="year">{{ $project->facility->f2 }}</span>
                                            <h4 class="title">على القواطع والأفياش</h4>
                                            <div class="icon"><span></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline">
                                    <div class="timeline-content">
                                        <div class="circle"><span><i class="fa fa-cog"></i></span></div>
                                        <div class="content">
                                            <span class="year">{{ $project->facility->f3 }}</span>
                                            <h4 class="title">على الكهرباء والسباكة</h4>
                                            <div class="icon"><span></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline">
                                    <div class="timeline-content">
                                        <div class="circle"><span><i class="fa fa-user"></i></span></div>
                                        <div class="content">
                                            <span class="year">{{ $project->facility->f3 }}</span>
                                            <h4 class="title">اتحــاد المـلاك مجانـــا</h4>
                                            <div class="icon"><span></span></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    {{-- Apartments Reservation --}}
                    <div class="row">
                        @if ($project->floors->count() > 0)
                            <!-- apartment check Area-->
                            <div class="room-details-area pt-100 pb-70  ">
                                <div class="container-fluid m-0 p-0">
                                    <div class="section-title-two text-center">
                                        <div class="row margin-top-60">
                                            <div class="col-xs-12 col-lg-12 text-center">
                                                <h1 class="">حالة الشقق<span class="special-color">.</span></h1>
                                            </div>
                                            <div class="col-xs-8 col-xs-offset-2 col-sm-offset-4 col-sm-4">
                                                <div class="title-separator-primary2"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container margin-top-30" style="color: white; width: 100%">
                                        <div class="table-responsive">



                                            <table class="table mt-2 center"
                                                style="  margin-left: auto !important;
                                    margin-right: auto !important;
                                    width: fit-content;
                                    margin-bottom: 35px;">
                                                @if ($project->FloorRow($project->floors_count)->count() > 0)
                                                    <tr>
                                                        <td style="color: #2f2e33; border-top: none">
                                                            الملاحق
                                                        </td>
                                                        @foreach ($project->FloorRow($project->floors_count) as $key => $floor)
                                                            <td
                                                                class=" @if ($floor->status == 'متاح') td1
                                                @elseif ($floor->status == 'محجوز')
                                                td2
                                                @else
                                                td3 @endif">
                                                                {{-- {{ $floor->apartment->count() }} --}}
                                                                {{ $floor->apartment->type }}
                                                                {{-- -
                                                        {{ $floor->apartment->code }} --}}
                                                            </td>

                                                            {{-- @if ($key == 0)
                                                        <td
                                                            style="width: 33% !important; color:transparent!important;box-shadow: none !important; translate: 0px 24px;">
                                                            .</td>
                                                    @endif --}}
                                                        @endforeach
                                                    </tr>
                                                @endif

                                                @for ($i = $project->floors_count - 1; $i >= 1; $i--)
                                                    <tr>
                                                        <td style="color: #2f2e33; border-top: none">
                                                            الدور {{ $i }}
                                                        </td>
                                                        @php
                                                            $check = false;
                                                        @endphp
                                                        @foreach ($project->FloorRow($i) as $key => $floor)
                                                            {{-- @if ($key == $project->FloorRow($i)->count() - 1 && $floor->apartment->type == 'أمامية' && $project->backCount2($i) > 0)
                                                        <td class="m2">.</td>
                                                    @endif --}}

                                                            {{-- @if (!$check && $floor->apartment->type == 'خلفية')
                                                        <td class="m1">.</td>
                                                    @endif --}}
                                                            <td style="   border-radius: @if ($key == 0) 0 15px 15px 0px
                                                    @elseif ($key == $project->FloorRow($i)->count() - 1)
                                                    15px 0 0 15px @endif;"
                                                                class=" @if ($floor->status == 'متاح') td1
                                                    @elseif ($floor->status == 'محجوز')
                                                    td2
                                                    @else
                                                    td3 @endif @if ($floor->apartment->type == 'خلفية') back @endif">
                                                                {{ $floor->apartment->type }}
                                                                {{ $floor->apartment->code }}
                                                            </td>


                                                            {{-- @if ($project->backCount2($i) == 2 && $check == false && $floor->apartment->type == 'خلفية')
                                                        @php
                                                            $check = true;
                                                        @endphp
                                                        <td
                                                            style="color: transparent; width: 10px !important; border:none !important; box-shadow: none !important;">
                                                            .</td>
                                                    @endif --}}
                                                        @endforeach
                                                    </tr>
                                                @endfor
                                            </table>


                                        </div>
                                        <div style="text-align: center">

                                            {{-- <img src="{{ asset('1.png') }}" style="width: 60%; min-width: 300px; margin-top: 5px"> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End -->
                        @endif
                    </div>

                    {{-- Apartment Details --}}

                    @if ($project->apartments->count() > 0)
                        <section class="parallax">

                            <div class="container" style="width: 100%">
                                <div class="row">
                                    <div class="col-xs-12 col-lg-12 text-center">
                                        <h5 class="subtitle-margin">تفاصيل</h5>
                                        <h1 class="">الشقق<span class="special-color">.</span></h1>
                                    </div>
                                    <div class="col-xs-8 col-xs-offset-2 col-sm-offset-4 col-sm-4">
                                        <div class="title-separator-primary2"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="container margin-top-60" style="width: 100%; padding: 0">
                                <div class="row">
                                    <div class="col-xs-12 col-lg-10 col-lg-offset-1">
                                        <div class="panel-group panel-apartment" id="accordion" role="tablist"
                                            aria-multiselectable="true">

                                            @foreach ($project->apartments as $index => $item)
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab"
                                                        id="heading{{ $index }}">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion"
                                                            href="#collaps{{ $index }}" aria-expanded="true"
                                                            aria-controls="collaps{{ $index }}">
                                                            <span style="padding-right: 50px">تفاصيل {{ $item->type }}
                                                                ({{ $item->code }})</span>
                                                            <div class="button-triangle"></div>
                                                            <div class="button-triangle2"></div>
                                                            <div class="button-icon" style="right: unset; left: 10px;"><i
                                                                    class="jfont">&#xe801;</i></div>
                                                        </a>
                                                    </div>
                                                    <div id="collaps{{ $index }}" class="panel-collapse collapse"
                                                        role="tabpanel" aria-labelledby="heading{{ $index }}">
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-xs-12 col-sm-6">
                                                                    <img src="{{ $item->image_path }}" alt=""
                                                                        class="p-image img-responsive" />
                                                                </div>
                                                                <div class="col-xs-12 col-sm-6">
                                                                    <p class="negative-margin">
                                                                    <ul class="house-list">
                                                                        <li>عدد الغرف: <b>
                                                                                {{ $item->room_count }}</b>
                                                                        </li>
                                                                        @if ($item->price)
                                                                            <li>السعر : <b>{{ $item->price }} ريال</b>
                                                                            </li>
                                                                        @endif
                                                                        <li> المساحة : <b>{{ $item->area }} متر</b></li>
                                                                    </ul>
                                                                    </p>
                                                                    <div class="row margin-top-30">
                                                                        @foreach (preg_split("/((\r?\n)|(\r\n?))/", $item->details) as $line)
                                                                            <div class="col-xs-12" style="float: right">
                                                                                <ul class="ticks-ul">
                                                                                    <li><i
                                                                                            class="jfont">&#xe815;</i>{{ $line }}
                                                                                    </li>

                                                                                </ul>
                                                                            </div>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    @endif


                    <div class="row margin-top-90">
                        <div class="col-xs-12 col-sm-9">
                            <h5 class="subtitle-margin">hot</h5>
                            <h1>new listings<span class="special-color">.</span></h1>
                        </div>
                        <div class="col-xs-12 col-sm-3">
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
                                            <img src="{{ asset('images/grid-offer1.jpg') }}" alt="" />
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
                                                <img src="{{ asset('images/area-icon.png') }}" alt="" />54m<sup>2</sup>
                                            </div>
                                            <div class="grid-rooms">
                                                <img src="{{ asset('images/rooms-icon.png') }}" alt="" />3
                                            </div>
                                            <div class="grid-baths">
                                                <img src="{{ asset('images/bathrooms-icon.png') }}" alt="" />1
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
                                    <img src="{{ asset('images/sidebar-featured1.jpg') }}" alt="" />
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
                                    <img src="{{ asset('images/sidebar-featured2.jpg') }}" alt="" />
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
                                    <img src="{{ asset('images/sidebar-featured3.jpg') }}" alt="" />
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
                                <a href="blog-right-sidebar.html"><img src="{{ asset('images/footer-blog1.jpg') }}" alt=""
                                        class="sidebar-blog-image" /></a>
                                <div class="sidebar-blog-title"><a href="blog-right-sidebar.html">This post title, lorem
                                        ipsum dolor sit</a></div>
                                <div class="sidebar-blog-date"><i class="fa fa-calendar-o"></i>28/09/15</div>
                                <div class="clearfix"></div>
                            </article>
                            <article>
                                <a href="blog-right-sidebar.html"><img src="{{ asset('images/footer-blog2.jpg') }}" alt=""
                                        class="sidebar-blog-image" /></a>
                                <div class="sidebar-blog-title"><a href="blog-right-sidebar.html">This post title, lorem
                                        ipsum dolor sit</a></div>
                                <div class="sidebar-blog-date"><i class="fa fa-calendar-o"></i>28/09/15</div>
                                <div class="clearfix"></div>
                            </article>
                            <article>
                                <a href="blog-right-sidebar.html"><img src="{{ asset('images/footer-blog3.jpg') }}" alt=""
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
