@extends('home._layouts._app')
@section('scripts')
    <script>
        $(window).on('load', function() {
            var maxHeight = 0;
            $('.grid-offer-text').each(function() {
                if ($(this).height() > maxHeight) {
                    maxHeight = $(this).height();
                }
            });
            $('.grid-offer-text').height(maxHeight);
        });
    </script>
@endsection
@section('content')

    <section class="no-padding adv-search-section">
        <!-- Slider main container -->
        <div id="swiper2" class="swiper-container">
            <div class="container swiper2-navigation">
                <div class="row">
                    <div class="col-xs-2">
                        <a href="#" class="navigation-box2 navigation-box-prev slide-prev">
                            <div class="navigation-triangle"></div>
                            <div class="navigation-box-icon2"><i class="jfont">&#xe800;</i></div>
                        </a>
                    </div>
                    <div class="col-xs-2 col-xs-offset-8">
                        <a href="#" class="navigation-box2 navigation-box-next slide-next">
                            <div class="navigation-triangle"></div>
                            <div class="navigation-box-icon2"><i class="jfont">&#xe802;</i></div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide swiper-lazy" data-background="{{ asset('home/images/1.jpg') }}">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-8 col-xs-offset-2 animated fadeInDown slide2-desc slide2-desc-1">
                                <h1 class="second-color" style="line-height: 55px;">{{ setting('cover1_text') }}<span
                                        class="special-color">.</span></h1>
                                <div class="clearfix"></div>

                            </div>
                        </div>
                    </div>
                    <div class="slider-overlay"></div>
                </div>
                <div class="swiper-slide swiper-lazy" data-background="{{ asset('home/images/2.jpg') }}">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-8 col-xs-offset-2 animated slide2-desc slide2-desc-2">
                                <h1 class="second-color" style="line-height: 55px;">{{ setting('cover2_text') }}<span
                                        class="special-color">.</span></h1>
                                <div class="clearfix"></div>

                            </div>
                        </div>
                    </div>
                    <div class="slider-overlay"></div>

                </div>
                <div class="swiper-slide swiper-lazy" data-background="{{ asset('home/images/3.jpg') }}">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-8 col-xs-offset-2 animated slide2-desc slide2-desc-3">
                                <h1 class="second-color" style="line-height: 55px;">{{ setting('cover3_text') }}<span
                                        class="special-color">.</span></h1>
                                <div class="clearfix"></div>

                            </div>
                        </div>
                    </div>
                    <div class="slider-overlay"></div>
                </div>
            </div>
        </div>

        <form action="{{ route('category', ['id' => 1]) }}" method="get">
            <div class="adv-search-cont">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-lg-11 adv-search-icons">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs adv-search-tabs" role="tablist">
                                <li role="presentation" class="active" data-toggle="tooltip" data-placement="top"
                                    title="apartments"><a href="#apartments" aria-controls="apartments" role="tab"
                                        data-toggle="tab" id="adv-search-tab1"><i class="fa fa-building"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-lg-1 visible-lg">
                            <a id="adv-search-hide" href="#"><i class="jfont">&#xe801;</i></a>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row tab-content">
                        <div role="tabpanel" class="col-xs-12 adv-search-outer tab-pane fade in active" id="apartments">

                            <div class="row" dir="rtl">
                                <div class="col-xs-12 col-sm-6 col-lg-3" style="float: right">
                                    <select name="category_id" class="bootstrap-select" title="التصنيف" multiple>
                                        @foreach ($category_list as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-lg-4">
                                    <div class="adv-search-range-cont">
                                        <label for="slider-range-price-sidebar-value"
                                            class="adv-search-label">السعر:</label>
                                        <span></span>
                                        <input type="text" name="price" id="slider-range-price-sidebar-value" readonly
                                            class="adv-search-amount">
                                        <div class="clearfix"></div>
                                        <div id="slider-range-price-sidebar" data-min="0" data-max="{{ $max_price }}"
                                            class="slider-range">
                                        </div>
                                    </div>

                                </div>
                                <div class="col-xs-12 col-sm-6 col-lg-4">
                                    <div class="adv-search-range-cont">
                                        <label for="slider-range-area-sidebar-value"
                                            class="adv-search-label">المساحة:</label>
                                        <span>m<sup>2</sup></span>
                                        <input type="text" name="area" id="slider-range-area-sidebar-value" readonly
                                            class="adv-search-amount">
                                        <div class="clearfix"></div>
                                        <div id="slider-range-area-sidebar" data-min="0" data-max="{{ $max_area }}"
                                            class="slider-range"></div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-lg-4">
                                    <div class="adv-search-range-cont">
                                        <label for="slider-range-bedrooms-sidebar-value"
                                            class="adv-search-label">الغرف:</label>
                                        <input type="text" name="room_count" id="slider-range-bedrooms-sidebar-value"
                                            readonly class="adv-search-amount">
                                        <div class="clearfix"></div>
                                        <div id="slider-range-bedrooms-sidebar" data-min="1"
                                            data-max="{{ $max_room_count }}" class="slider-range">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-3 col-md-offset-6 col-lg-offset-9 adv-search-button-cont">
                            <button type="submit" class="button-primary pull-right">
                                <span>بحث</span>
                                <div class="button-triangle"></div>
                                <div class="button-triangle2"></div>
                                <div class="button-icon"><i class="fa fa-search"></i></div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>

    {{-- <section class="section-light bottom-padding-45 section-both-shadow">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="feature wow fadeInLeft" id="feature1">
                        <div class="feature-icon center-block"><i class="fa fa-building"></i></div>
                        <div class="feature-text">
                            <h5 class="subtitle-margin">PIXEL PERFECT</h5>
                            <h3>DESIGN<span class="special-color">.</span></h3>
                            <div class="title-separator center-block feature-separator"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="feature wow fadeInUp" id="feature2">
                        <div class="feature-icon center-block"><i class="fa fa-home"></i></div>
                        <div class="feature-text">
                            <h5 class="subtitle-margin">FIFTY</h5>
                            <h3>HTML FILES<span class="special-color">.</span></h3>
                            <div class="title-separator center-block feature-separator"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="feature wow fadeInUp" id="feature3">
                        <div class="feature-icon center-block"><i class="fa fa-industry"></i></div>
                        <div class="feature-text">
                            <h5 class="subtitle-margin">MASONRY, LIST &amp; GRID</h5>
                            <h3>LAYOUTS<span class="special-color">.</span></h3>
                            <div class="title-separator center-block feature-separator"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="feature wow fadeInRight" id="feature4">
                        <div class="feature-icon center-block"><i class="fa fa-tree"></i></div>
                        <div class="feature-text">
                            <h5 class="subtitle-margin">MODERN &amp; CLEAN</h5>
                            <h3>PROJECT<span class="special-color">.</span></h3>
                            <div class="title-separator center-block feature-separator"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}


    <section class="testimonials parallax">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <h1 class="second-color">من نحن؟<span class="special-color">.</span></h1>
                </div>
                <div class="col-xs-12">
                    <div class="title-separator-secondary" style="background-color: #fff0;"></div>
                </div>
            </div>
        </div>

        <div class="container margin-top-90">
            <div class="row">
                <div class="col-xs-12" id="testimonials-owl">
                    <div class="testimonial">
                        <img src="{{ asset('home/images/who_are_we.jpg') }}" alt="" class="testimonials-photo" />
                        <div class="testimonials-content margin-top-45" style="  min-height: 200px;">
                            <p class="lead">{!! $about->who_are_we !!}</p>

                        </div>
                        <div class="big-triangle">
                        </div>
                        <div class="big-icon"><i class="fa fa-quote-right fa-lg"></i></div>
                    </div>

                </div>
            </div>
        </div>


    </section>

    <section class=" parallax">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <h1 class="second-color">رسالتنا<span class="special-color">.</span></h1>
                </div>
                <div class="col-xs-12">
                    <div class="title-separator-secondary" style="background-color: #fff0;"></div>
                </div>
            </div>
        </div>

        <div class="container margin-top-90">
            <div class="row">
                <div class="col-xs-12" id="testimonials-owl">
                    <div class="testimonial">
                        <img src="{{ asset('home/images/massage.jpg') }}" alt="" class="testimonials-photo"
                            style="float: right" />
                        <div class="testimonials-content margin-top-45" style="  min-height: 200px;">
                            <p class="lead">{!! $about->massage !!}</p>

                        </div>
                    </div>

                </div>
            </div>
        </div>


    </section>

    <section class="testimonials parallax">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <h1 class="second-color">رؤيتنا<span class="special-color">.</span></h1>
                </div>
                <div class="col-xs-12">
                    <div class="title-separator-secondary" style="background-color: #fff0;"></div>
                </div>
            </div>
        </div>

        <div class="container margin-top-90">
            <div class="row">
                <div class="col-xs-12" id="testimonials-owl">
                    <div class="testimonial">
                        <img src="{{ asset('home/images/vision.jpg') }}" alt="" class="testimonials-photo" />
                        <div class="testimonials-content margin-top-45" style="  min-height: 200px;">
                            <p class="lead">{!! $about->vision !!}</p>

                        </div>
                        <div class="big-triangle" style="right: 15px;">
                        </div>
                        <div class="big-icon" style="right: 25px;"><i class="fa fa-quote-right fa-lg"></i></div>
                    </div>

                </div>
            </div>
        </div>


    </section>

    <section class="section-light no-bottom-padding section-top-shadow">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-9 col-sm-push-3">
                    <h1>آخر المشاريع<span class="special-color">.</span></h1>
                </div>
                <div class="col-xs-12 col-sm-3 col-sm-push-9">
                    <a href="#" class="navigation-box navigation-box-prev" id="grid-offers-owl-prev">
                        <div class="navigation-triangle"></div>
                        <div class="navigation-box-icon"><i class="jfont">&#xe800;</i></div>
                    </a>
                    <a href="#" class="navigation-box navigation-box-next" id="grid-offers-owl-next">
                        <div class="navigation-triangle"></div>
                        <div class="navigation-box-icon"><i class="jfont">&#xe802;</i></div>
                    </a>
                </div>
                <div class="col-xs-12">
                    <div class="title-separator-primary"></div>
                </div>
            </div>
        </div>
        <div class="grid-offers-container">
            <div class="owl-carousel" id="grid-offers-owl">
                @if ($projects->count() > 0)
                    @foreach ($projects as $project)
                        <div class="grid-offer-col" style="">
                            <div class="grid-offer wow fadeInLeft" style="min-height: 50vh">
                                <div class="grid-offer-front">
                                    <div class="grid-offer-photo">
                                        <img src="{{ $project->poster_path }}" alt="" />
                                        <div class="type-container">
                                            <span
                                                        class="badge @if ($project->status == 'مكتمل') btn-success
                                                        @elseif($project->status == 'على وشك الانتهاء')
                                                        btn-secondary
                                                        @elseif($project->status == 'غير متاح للعرض')
                                                        btn-danger
                                                        @else
                                                        btn-warning text-white @endif"
                                                                            style="padding: 5px 15px; font-size: 14px;  top: 5px;
                                                        position: relative;">{{ $project->status }}
                                                        @if ($project->status == 'على وشك الانتهاء' || $project->status == 'غير متاح للعرض')
                                                            <i class="bx bx-lock"></i>
                                                        @endif
                                                    </span>
                                        </div>
                                    </div>
                                    <div class="grid-offer-text">
                                        <i class="fa fa-map-marker grid-offer-localization"></i>
                                        <div class="grid-offer-h4">
                                            <h4 class="grid-offer-title">{!! $project->address !!}</h4>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="grid-offer-params">
                                        <div class="grid-rooms"
                                            style="float: right; padding-right: 15px; text-align: right">
                                            {{ $project->name }}
                                        </div>
                                    </div>

                                </div>
                                <div class="grid-offer-back">
                                    <div id="grid-map1" class="grid-offer-map">
                                        {!! $project->address_location !!}
                                    </div>
                                    <div class="button">
                                        <a href="{{ route('project', $project->id) }}" class="button-primary">
                                            <span>تفاصيل المشروع</span>
                                            <div class="button-triangle"></div>
                                            <div class="button-triangle2"></div>
                                            <div class="button-icon"><i class="fa fa-search"></i></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>

    </section>

    <section class="testimonials parallax">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <h1 class="second-color">سياسة الجودة والأمان<span class="special-color">.</span></h1>
                </div>
                <div class="col-xs-12">
                    <div class="title-separator-secondary" style="background-color: #fff0;"></div>
                </div>
            </div>
        </div>

        <div class="container margin-top-90">
            <div class="row">
                <div class="col-xs-12" id="testimonials-owl">
                    <div class="testimonial">
                        <img src="{{ asset('home/images/quality_safty.jpg') }}" alt=""
                            class="testimonials-photo" style="width: 350px;" />
                        <div class="testimonials-content margin-top-45" style="  min-height: 200px; max-width:780px;">
                            <p class="lead">{!! $about->quality_safty !!}</p>

                        </div>
                    </div>

                </div>
            </div>
        </div>


    </section>

    <section class="section-light top-padding-45 bottom-padding-45">
        <div class="container">
            <div class="row count-container">
                <div class="col-xs-6 col-lg-3" style="  height: 200px;">
                    <div class="number" id="number1">
                        <div class="number-img">
                            <i class="fa fa-line-chart "></i>
                        </div>
                        <span class="number-label text-color2">الحد الأعلى للأرباح التي سلمت</span>
                        <span class="number-big text-color3 count" data-from="0" data-to="{{ setting('chart_0') }}"
                            data-speed="2000"></span>
                        <span
                            style="position: relative;
                            top: -22px;
                            left: 60px;
                            font-size: 26px;">%</span>
                    </div>
                </div>
                <div class="col-xs-6 col-lg-3 number_border" style="  height: 200px;">
                    <div class="number" id="number2">
                        <div class="number-img">
                            <i class="fa fa-line-chart "></i>
                        </div>
                        <span class="number-label text-color2">الحد الأدنى للأرباح في الشقق</span>
                        <span class="number-big text-color3 count" data-from="0" data-to="{{ setting('chart_1') }}"
                            data-speed="2000"></span>
                        <span
                            style="position: relative;
                            top: -22px;
                            left: 60px;
                            font-size: 26px;">%</span>
                    </div>
                </div>
                <div class="col-xs-6 col-lg-3 number_border3" style="  height: 200px;">
                    <div class="number" id="number3">
                        <div class="number-img">
                            <i class="fa fa-line-chart "></i>
                        </div>
                        <span class="number-label text-color2">أعلى نسبة ارباح للأسهم</span>
                        <span class="number-big text-color3 count" data-from="0" data-to="{{ setting('chart_2') }}"
                            data-speed="2000"></span>
                        <span
                            style="position: relative;
                            top: -22px;
                            left: 60px;
                            font-size: 26px;">%</span>
                    </div>
                </div>
                <div class="col-xs-6 col-lg-3 number_border" style="  height: 200px;">
                    <div class="number" id="number4">
                        <div class="number-img">
                            <i class="fa fa-line-chart "></i>
                        </div>
                        <span class="number-label text-color2">الحد الأدنى للأسهم</span>
                        <span class="number-big text-color3 count" data-from="0" data-to="{{ setting('chart_3') }}"
                            data-speed="2000"></span>
                        <span
                            style="position: relative;
                            top: -22px;
                            left: 60px;
                            font-size: 26px;">%</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
