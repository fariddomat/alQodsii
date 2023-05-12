@extends('home._layouts._app')

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
                <div class="swiper-slide swiper-lazy" data-background="images/slides/1.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-8 col-xs-offset-2 animated fadeInDown slide2-desc slide2-desc-1">
                                <h1 class="second-color">Fort Collins, Colorado 80523<span class="special-color">.</span>
                                </h1>
                                <div class="clearfix"></div>
                                <p class="swiper2-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <div class="swiper2-buttons margin-top-45">
                                    <div class="swiper2-price-button">$320 000</div>

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
                    <div class="slider-overlay"></div>
                </div>
                <div class="swiper-slide swiper-lazy" data-background="images/slides/2.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-8 col-xs-offset-2 animated slide2-desc slide2-desc-2">
                                <h1 class="second-color">West Fourth Street, New York 10003<span
                                        class="special-color">.</span></h1>
                                <div class="clearfix"></div>
                                <p class="swiper2-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <div class="swiper2-buttons margin-top-45">
                                    <div class="swiper2-price-button">$550 000</div>

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
                    <div class="slider-overlay"></div>
                    <div class="video-slide">
                        <video poster="images/slides/2.jpg" preload="auto" loop autoplay muted>
                            <source src='images/slides/2.mp4' type='video/mp4' />
                        </video>
                    </div>
                </div>
                <div class="swiper-slide swiper-lazy" data-background="images/slides/3.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-8 col-xs-offset-2 animated slide2-desc slide2-desc-3">
                                <h1 class="second-color">E. Elwood St. Phoenix, AZ 85034<span class="special-color">.</span>
                                </h1>
                                <div class="clearfix"></div>
                                <p class="swiper2-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <div class="swiper2-buttons margin-top-45">
                                    <div class="swiper2-price-button">$395 000</div>

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
                    <div class="slider-overlay"></div>
                </div>
            </div>
        </div>

        <form class="simple-search-form" action="#">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="simple-search-cont">
                            <select name="transaction1" class="bootstrap-select" title="Transaction:" multiple>
                                <option>For sale</option>
                                <option>For rent</option>
                            </select>
                            <input type="text" name="simple-search" class="simple-search-input"
                                placeholder="... Write localization, eg. New York ..." />
                            <a href="estate-details-right-sidebar.html" class="button-primary pull-right">
                                <span>search</span>
                                <div class="button-triangle"></div>
                                <div class="button-triangle2"></div>
                                <div class="button-icon"><i class="fa fa-search"></i></div>
                            </a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>

    <section class="section-light bottom-padding-45 section-both-shadow">
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
    </section>

    <section class="featured-offers parallax">

        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-9 col-sm-push-3">
                    <h5 class="subtitle-margin second-color">highly recommended</h5>
                    <h1 class="second-color">featured offers<span class="special-color">.</span></h1>
                </div>
                <div class="col-xs-12 col-sm-3 col-sm-pull-9">
                    <a href="#" class="navigation-box navigation-box-prev" id="featured-offers-owl-prev">
                        <div class="navigation-triangle"></div>
                        <div class="navigation-box-icon"><i class="jfont">&#xe800;</i></div>
                    </a>
                    <a href="#" class="navigation-box navigation-box-next" id="featured-offers-owl-next">
                        <div class="navigation-triangle"></div>
                        <div class="navigation-box-icon"><i class="jfont">&#xe802;</i></div>
                    </a>
                </div>
                <div class="col-xs-12">
                    <div class="title-separator-secondary"></div>
                </div>
            </div>
        </div>
        <div class="featured-offers-container">
            <div class="owl-carousel" id="featured-offers-owl">
                <div class="featured-offer-col wow fadeInLeft">
                    <div class="featured-offer-front">
                        <div class="featured-offer-photo">
                            <img src="images/featured-offer1.jpg" alt="" />
                            <div class="type-container">
                                <div class="estate-type">apartment</div>
                                <div class="transaction-type">sale</div>
                            </div>
                        </div>
                        <div class="featured-offer-text">
                            <h4 class="featured-offer-title">250 South Dr, Fort Collins, Colorado 80523, USA</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua.</p>
                        </div>
                        <div class="featured-offer-params">
                            <div class="featured-area">
                                <img src="images/area-icon.png" alt="" />54m<sup>2</sup>
                            </div>
                            <div class="featured-rooms">
                                <img src="images/rooms-icon.png" alt="" />3
                            </div>
                            <div class="featured-baths">
                                <img src="images/bathrooms-icon.png" alt="" />1
                            </div>
                        </div>
                        <div class="featured-price">
                            $320000
                        </div>
                    </div>
                    <div class="featured-offer-back">
                        <div id="featured-map1" class="featured-offer-map"></div>
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
                <div class="featured-offer-col wow fadeInUp">
                    <div class="featured-offer-front">
                        <div class="featured-offer-photo">
                            <img src="images/featured-offer2.jpg" alt="" />
                            <div class="type-container">
                                <div class="estate-type">apartment</div>
                                <div class="transaction-type">sale</div>
                            </div>
                        </div>
                        <div class="featured-offer-text">
                            <h4 class="featured-offer-title">West Fourth Street, New York 10003, USA</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua.</p>
                        </div>
                        <div class="featured-offer-params">
                            <div class="featured-area">
                                <img src="images/area-icon.png" alt="" />70m<sup>2</sup>
                            </div>
                            <div class="featured-rooms">
                                <img src="images/rooms-icon.png" alt="" />4
                            </div>
                            <div class="featured-baths">
                                <img src="images/bathrooms-icon.png" alt="" />1
                            </div>
                        </div>
                        <div class="featured-price">
                            $350000
                        </div>
                    </div>
                    <div class="featured-offer-back">
                        <div id="featured-map2" class="featured-offer-map"></div>
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
                <div class="featured-offer-col wow fadeInRight">
                    <div class="featured-offer-front">
                        <div class="featured-offer-photo">
                            <img src="images/featured-offer3.jpg" alt="" />
                            <div class="type-container">
                                <div class="estate-type">house</div>
                                <div class="transaction-type">sale</div>
                            </div>
                        </div>
                        <div class="featured-offer-text">
                            <h4 class="featured-offer-title">500 E. Elwood St. Phoenix, AZ 85034, USA</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua.</p>
                        </div>
                        <div class="featured-offer-params">
                            <div class="featured-area">
                                <img src="images/area-icon.png" alt="" />250m<sup>2</sup>
                            </div>
                            <div class="featured-rooms">
                                <img src="images/rooms-icon.png" alt="" />7
                            </div>
                            <div class="featured-baths">
                                <img src="images/bathrooms-icon.png" alt="" />3
                            </div>
                        </div>
                        <div class="featured-price">
                            $650000
                        </div>
                    </div>
                    <div class="featured-offer-back">
                        <div id="featured-map3" class="featured-offer-map"></div>
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
                <div class="featured-offer-col">
                    <div class="featured-offer-front">
                        <div class="featured-offer-photo">
                            <img src="images/featured-offer4.jpg" alt="" />
                            <div class="type-container">
                                <div class="estate-type">apartment</div>
                                <div class="transaction-type">sale</div>
                            </div>
                        </div>
                        <div class="featured-offer-text">
                            <h4 class="featured-offer-title">N. Willamette Blvd., Portland, OR 97203-5798, USA</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua.</p>
                        </div>
                        <div class="featured-offer-params">
                            <div class="featured-area">
                                <img src="images/area-icon.png" alt="" />40m<sup>2</sup>
                            </div>
                            <div class="featured-rooms">
                                <img src="images/rooms-icon.png" alt="" />2
                            </div>
                            <div class="featured-baths">
                                <img src="images/bathrooms-icon.png" alt="" />1
                            </div>
                        </div>
                        <div class="featured-price">
                            $299000
                        </div>
                    </div>
                    <div class="featured-offer-back">
                        <div id="featured-map4" class="featured-offer-map"></div>
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
                <div class="featured-offer-col">
                    <div class="featured-offer-front">
                        <div class="featured-offer-photo">
                            <img src="images/featured-offer5.jpg" alt="" />
                            <div class="type-container">
                                <div class="estate-type">apartment</div>
                                <div class="transaction-type">sale</div>
                            </div>
                        </div>
                        <div class="featured-offer-text">
                            <h4 class="featured-offer-title">One Brookings Drive St. Louis, Missouri 63130-4899, USA</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua.</p>
                        </div>
                        <div class="featured-offer-params">
                            <div class="featured-area">
                                <img src="images/area-icon.png" alt="" />80m<sup>2</sup>
                            </div>
                            <div class="featured-rooms">
                                <img src="images/rooms-icon.png" alt="" />3
                            </div>
                            <div class="featured-baths">
                                <img src="images/bathrooms-icon.png" alt="" />1
                            </div>
                        </div>
                        <div class="featured-price">
                            $390000
                        </div>
                    </div>
                    <div class="featured-offer-back">
                        <div id="featured-map5" class="featured-offer-map"></div>
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
                <div class="featured-offer-col">
                    <div class="featured-offer-front">
                        <div class="featured-offer-photo">
                            <img src="images/featured-offer6.jpg" alt="" />
                            <div class="type-container">
                                <div class="estate-type">apartment</div>
                                <div class="transaction-type">sale</div>
                            </div>
                        </div>
                        <div class="featured-offer-text">
                            <h4 class="featured-offer-title">One Neumann Drive Aston, Philadelphia 19014-1298, USA</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua.</p>
                        </div>
                        <div class="featured-offer-params">
                            <div class="featured-area">
                                <img src="images/area-icon.png" alt="" />54m<sup>2</sup>
                            </div>
                            <div class="featured-rooms">
                                <img src="images/rooms-icon.png" alt="" />3
                            </div>
                            <div class="featured-baths">
                                <img src="images/bathrooms-icon.png" alt="" />1
                            </div>
                        </div>
                        <div class="featured-price">
                            $320000
                        </div>
                    </div>
                    <div class="featured-offer-back">
                        <div id="featured-map6" class="featured-offer-map"></div>
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
                <div class="featured-offer-col">
                    <div class="featured-offer-front">
                        <div class="featured-offer-photo">
                            <img src="images/featured-offer7.jpg" alt="" />
                            <div class="type-container">
                                <div class="estate-type">house</div>
                                <div class="transaction-type">sale</div>
                            </div>
                        </div>
                        <div class="featured-offer-text">
                            <h4 class="featured-offer-title">200 South Dr, Fort Collins, Colorado 80523, USA</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua.</p>
                        </div>
                        <div class="featured-offer-params">
                            <div class="featured-area">
                                <img src="images/area-icon.png" alt="" />54m<sup>2</sup>
                            </div>
                            <div class="featured-rooms">
                                <img src="images/rooms-icon.png" alt="" />3
                            </div>
                            <div class="featured-baths">
                                <img src="images/bathrooms-icon.png" alt="" />1
                            </div>
                        </div>
                        <div class="featured-price">
                            $320000
                        </div>
                    </div>
                    <div class="featured-offer-back">
                        <div id="featured-map7" class="featured-offer-map"></div>
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
    </section>

    <section class="team section-light section-both-shadow">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-9 col-sm-push-3">
                    <h5 class="subtitle-margin">meet our</h5>
                    <h1>proffesional team<span class="special-color">.</span></h1>
                </div>
                <div class="col-xs-12 col-sm-3 col-sm-push-9">
                    <a href="#" class="navigation-box navigation-box-prev" id="team-owl-prev">
                        <div class="navigation-triangle"></div>
                        <div class="navigation-box-icon"><i class="jfont">&#xe800;</i></div>
                    </a>
                    <a href="#" class="navigation-box navigation-box-next" id="team-owl-next">
                        <div class="navigation-triangle"></div>
                        <div class="navigation-box-icon"><i class="jfont">&#xe802;</i></div>
                    </a>
                </div>
                <div class="col-xs-12">
                    <div class="title-separator-primary"></div>
                </div>
            </div>
        </div>
        <div class="team-container animated-section">
            <div class="owl-carousel" id="team-owl">
                <div class="team-member-cont">
                    <div class="team-member wow fadeInLeft">
                        <div class="team-photo">
                            <img src="images/agent1.jpg" alt="" />
                            <div class="big-triangle"></div>
                            <div class="big-triangle2"></div>
                            <a class="big-icon big-icon-plus" href="agent-right-sidebar.html"><i
                                    class="jfont">&#xe804;</i></a>
                            <div class="team-description">
                                <div>
                                    <div class="team-desc-line">
                                        <span class="team-icon-circle pull-right">
                                            <i class="fa fa-phone"></i>
                                        </span>
                                        <span class="pull-right">(0)-123-456-789</span>
                                    </div>
                                    <div class="team-desc-line">
                                        <span class="team-icon-circle pull-right">
                                            <i class="fa fa-envelope fa-sm"></i>
                                        </span>
                                        <span class="pull-right">apartment@domain.tld</span>
                                    </div>
                                    <div class="team-social-cont">
                                        <div class="team-social">
                                            <a class="team-icon-circle" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </div>
                                        <div class="team-social">
                                            <a class="team-icon-circle" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </div>
                                        <div class="team-social">
                                            <a class="team-icon-circle" href="#">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </div>
                                        <div class="team-social">
                                            <a class="team-icon-circle" href="#">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <p class="team-text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="team-name">
                            <h5>manager</h5>
                            <h4>Mark Smith<span class="special-color">.</span></h4>
                        </div>
                    </div>
                </div>
                <div class="team-member-cont">
                    <div class="team-member wow fadeInUp">
                        <div class="team-photo">
                            <img src="images/agent2.jpg" alt="" />
                            <div class="big-triangle"></div>
                            <div class="big-triangle2"></div>
                            <a class="big-icon big-icon-plus" href="agent-right-sidebar.html"><i
                                    class="jfont">&#xe804;</i></a>
                            <div class="team-description">
                                <div>
                                    <div class="team-desc-line">
                                        <span class="team-icon-circle pull-right">
                                            <i class="fa fa-phone"></i>
                                        </span>
                                        <span class="pull-right">(0)-123-456-789</span>
                                    </div>
                                    <div class="team-desc-line">
                                        <span class="team-icon-circle pull-right">
                                            <i class="fa fa-envelope fa-sm"></i>
                                        </span>
                                        <span class="pull-right">apartment@domain.tld</span>
                                    </div>
                                    <div class="team-social-cont">
                                        <div class="team-social">
                                            <a class="team-icon-circle" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </div>
                                        <div class="team-social">
                                            <a class="team-icon-circle" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </div>
                                        <div class="team-social">
                                            <a class="team-icon-circle" href="#">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </div>
                                        <div class="team-social">
                                            <a class="team-icon-circle" href="#">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <p class="team-text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="team-name">
                            <h5>Agent</h5>
                            <h4>Michelle Jackson<span class="special-color">.</span></h4>
                        </div>
                    </div>
                </div>
                <div class="team-member-cont">
                    <div class="team-member wow fadeInUp">
                        <div class="team-photo">
                            <img src="images/agent3.jpg" alt="" />
                            <div class="big-triangle"></div>
                            <div class="big-triangle2"></div>
                            <a class="big-icon big-icon-plus" href="agent-right-sidebar.html"><i
                                    class="jfont">&#xe804;</i></a>
                            <div class="team-description">
                                <div>
                                    <div class="team-desc-line">
                                        <span class="team-icon-circle pull-right">
                                            <i class="fa fa-phone"></i>
                                        </span>
                                        <span class="pull-right">(0)-123-456-789</span>
                                    </div>
                                    <div class="team-desc-line">
                                        <span class="team-icon-circle pull-right">
                                            <i class="fa fa-envelope fa-sm"></i>
                                        </span>
                                        <span class="pull-right">apartment@domain.tld</span>
                                    </div>
                                    <div class="team-social-cont">
                                        <div class="team-social">
                                            <a class="team-icon-circle" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </div>
                                        <div class="team-social">
                                            <a class="team-icon-circle" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </div>
                                        <div class="team-social">
                                            <a class="team-icon-circle" href="#">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </div>
                                        <div class="team-social">
                                            <a class="team-icon-circle" href="#">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <p class="team-text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="team-name">
                            <h5>specialist</h5>
                            <h4>Robert Duncan<span class="special-color">.</span></h4>
                        </div>
                    </div>
                </div>
                <div class="team-member-cont">
                    <div class="team-member wow fadeInRight">
                        <div class="team-photo">
                            <img src="images/agent4.jpg" alt="" />
                            <div class="big-triangle"></div>
                            <div class="big-triangle2"></div>
                            <a class="big-icon big-icon-plus" href="agent-right-sidebar.html"><i
                                    class="jfont">&#xe804;</i></a>
                            <div class="team-description">
                                <div>
                                    <div class="team-desc-line">
                                        <span class="team-icon-circle pull-right">
                                            <i class="fa fa-phone"></i>
                                        </span>
                                        <span class="pull-right">(0)-123-456-789</span>
                                    </div>
                                    <div class="team-desc-line">
                                        <span class="team-icon-circle pull-right">
                                            <i class="fa fa-envelope fa-sm"></i>
                                        </span>
                                        <span class="pull-right">apartment@domain.tld</span>
                                    </div>
                                    <div class="team-social-cont">
                                        <div class="team-social">
                                            <a class="team-icon-circle" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </div>
                                        <div class="team-social">
                                            <a class="team-icon-circle" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </div>
                                        <div class="team-social">
                                            <a class="team-icon-circle" href="#">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </div>
                                        <div class="team-social">
                                            <a class="team-icon-circle" href="#">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <p class="team-text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="team-name">
                            <h5>agent</h5>
                            <h4>Veronica Green<span class="special-color">.</span></h4>
                        </div>
                    </div>
                </div>
                <div class="team-member-cont">
                    <div class="team-member">
                        <div class="team-photo">
                            <img src="images/agent5.jpg" alt="" />
                            <div class="big-triangle"></div>
                            <div class="big-triangle2"></div>
                            <a class="big-icon big-icon-plus" href="agent-right-sidebar.html"><i
                                    class="jfont">&#xe804;</i></a>
                            <div class="team-description">
                                <div>
                                    <div class="team-desc-line">
                                        <span class="team-icon-circle pull-right">
                                            <i class="fa fa-phone"></i>
                                        </span>
                                        <span class="pull-right">(0)-123-456-789</span>
                                    </div>
                                    <div class="team-desc-line">
                                        <span class="team-icon-circle pull-right">
                                            <i class="fa fa-envelope fa-sm"></i>
                                        </span>
                                        <span class="pull-right">apartment@domain.tld</span>
                                    </div>
                                    <div class="team-social-cont">
                                        <div class="team-social">
                                            <a class="team-icon-circle" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </div>
                                        <div class="team-social">
                                            <a class="team-icon-circle" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </div>
                                        <div class="team-social">
                                            <a class="team-icon-circle" href="#">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </div>
                                        <div class="team-social">
                                            <a class="team-icon-circle" href="#">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <p class="team-text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="team-name">
                            <h5>agent</h5>
                            <h4>Timothe Lee<span class="special-color">.</span></h4>
                        </div>
                    </div>
                </div>
                <div class="team-member-cont">
                    <div class="team-member">
                        <div class="team-photo">
                            <img src="images/agent6.jpg" alt="" />
                            <div class="big-triangle"></div>
                            <div class="big-triangle2"></div>
                            <a class="big-icon big-icon-plus" href="agent-right-sidebar.html"><i
                                    class="jfont">&#xe804;</i></a>
                            <div class="team-description">
                                <div>
                                    <div class="team-desc-line">
                                        <span class="team-icon-circle pull-right">
                                            <i class="fa fa-phone"></i>
                                        </span>
                                        <span class="pull-right">(0)-123-456-789</span>
                                    </div>
                                    <div class="team-desc-line">
                                        <span class="team-icon-circle pull-right">
                                            <i class="fa fa-envelope fa-sm"></i>
                                        </span>
                                        <span class="pull-right">apartment@domain.tld</span>
                                    </div>
                                    <div class="team-social-cont">
                                        <div class="team-social">
                                            <a class="team-icon-circle" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </div>
                                        <div class="team-social">
                                            <a class="team-icon-circle" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </div>
                                        <div class="team-social">
                                            <a class="team-icon-circle" href="#">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </div>
                                        <div class="team-social">
                                            <a class="team-icon-circle" href="#">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <p class="team-text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="team-name">
                            <h5>agent</h5>
                            <h4>Joanne Doe<span class="special-color">.</span></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials parallax">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-9 col-sm-push-3">
                    <h5 class="subtitle-margin second-color">recommendations</h5>
                    <h1 class="second-color">our clients say<span class="special-color">.</span></h1>
                </div>
                <div class="col-xs-12 col-sm-3 col-sm-push-9">
                    <a href="#" class="navigation-box navigation-box-prev" id="testimonials-owl-prev">
                        <div class="navigation-triangle"></div>
                        <div class="navigation-box-icon"><i class="jfont">&#xe800;</i></div>
                    </a>
                    <a href="#" class="navigation-box navigation-box-next" id="testimonials-owl-next">
                        <div class="navigation-triangle"></div>
                        <div class="navigation-box-icon"><i class="jfont">&#xe802;</i></div>
                    </a>
                </div>
                <div class="col-xs-12">
                    <div class="title-separator-secondary"></div>
                </div>
            </div>
        </div>

        <div class="container margin-top-90">
            <div class="row">
                <div class="col-xs-12 owl-carousel" id="testimonials-owl">
                    <div class="testimonial">
                        <img src="images/testimonials1.jpg" alt="" class="testimonials-photo" />
                        <div class="testimonials-content">
                            <p class="lead">Smith’s Family</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                        </div>
                        <div class="big-triangle">
                        </div>
                        <div class="big-icon"><i class="fa fa-quote-right fa-lg"></i></div>
                    </div>
                    <div class="testimonial">
                        <img src="images/testimonials2.jpg" alt="" class="testimonials-photo" />
                        <div class="testimonials-content">
                            <p class="lead">Meggy Johnson</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <div class="big-triangle">
                            </div>
                            <div class="big-icon"><i class="fa fa-quote-right fa-lg"></i></div>
                        </div>
                    </div>
                    <div class="testimonial">
                        <img src="images/testimonials3.jpg" alt="" class="testimonials-photo" />
                        <div class="testimonials-content">
                            <p class="lead">Paola Brown &amp; Tommy</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <div class="big-triangle">
                            </div>
                            <div class="big-icon"><i class="fa fa-quote-right fa-lg"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-light no-bottom-padding section-top-shadow">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-9 col-sm-push-3">
                    <h5 class="subtitle-margin">hot</h5>
                    <h1>new listings<span class="special-color">.</span></h1>
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
                <div class="grid-offer-col">
                    <div class="grid-offer wow fadeInLeft">
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
                                <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et [...]</p>
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
                    <div class="grid-offer wow fadeInUp">
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
                                <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et [...]</p>
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
                    <div class="grid-offer wow fadeInUp">
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
                                <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et [...]</p>
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
                    <div class="grid-offer wow fadeInRight">
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
                                    <h4 class="grid-offer-title">N. Willamette Blvd., Portland, OR 97203, USA</h4>
                                </div>
                                <div class="clearfix"></div>
                                <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et [...]</p>
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
                                    <h4 class="grid-offer-title">One Brookings Drive St. Louis, Missouri 63130, USA</h4>
                                </div>
                                <div class="clearfix"></div>
                                <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et [...]</p>
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
                                    <h4 class="grid-offer-title">One Neumann Drive Aston, Philadelphia 19014, USA</h4>
                                </div>
                                <div class="clearfix"></div>
                                <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et [...]</p>
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

    </section>

    <section class="section-dark">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-12">
                    <h5 class="subtitle-margin">latest from</h5>
                    <h1 class="">our blog<span class="special-color">.</span></h1>
                </div>
                <div class="col-xs-12">
                    <div class="title-separator-primary"></div>
                </div>
            </div>
        </div>
        <div class="container blog-grid1-container">
            <div class="row">
                <div class="col-md-12 col-lg-6 blog-grid1-left-col wow fadeInLeft">
                    <article class="blog-grid1-item zoom-cont">
                        <div class="blog-grid1-post-content">
                            <div class="blog-grid1-topline">
                                <div class="blog-grid1-author pull-left"><i class="fa fa-user"></i>Admin</div>
                                <div class="blog-grid1-date pull-right"><i class="fa fa-calendar-o"></i>28/09/15</div>
                                <div class="clearfix"></div>
                            </div>
                            <a href="#" class="blog-grid1-title">
                                <h4>It’s much cheaper to buy than to rent</h4>
                            </a>
                            <div class="blog-grid1-separator"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et. Lorem ipsum dolor sit amet...</p>
                            <a href="#" class="blog-grid1-button">
                                <span>read more</span>
                                <div class="blog-grid1-triangle"></div>
                            </a>
                        </div>
                        <figure class=""><a href="#"><img src="images/blog-grid1a.jpg" alt=""
                                    class="zoom" /></a></figure>
                    </article>
                </div>
                <div class="col-md-12 col-lg-6 blog-grid1-right-col wow fadeInRight">
                    <article class="blog-grid1-item zoom-cont">
                        <div class="blog-grid1-post-content">
                            <div class="blog-grid1-topline">
                                <div class="blog-grid1-author pull-left"><i class="fa fa-user"></i>Admin</div>
                                <div class="blog-grid1-date pull-right"><i class="fa fa-calendar-o"></i>28/09/15</div>
                                <div class="clearfix"></div>
                            </div>
                            <a href="#" class="blog-grid1-title">
                                <h4>It’s much cheaper to buy than to rent</h4>
                            </a>
                            <div class="blog-grid1-separator"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et. Lorem ipsum dolor sit amet...</p>
                            <a href="#" class="blog-grid1-button">
                                <span>read more</span>
                                <div class="blog-grid1-triangle"></div>
                            </a>
                        </div>
                        <figure class=""><a href="#"><img src="images/blog-grid1b.jpg" alt=""
                                    class="zoom" /></a></figure>
                    </article>
                </div>
                <div class="col-md-12 col-lg-6 blog-grid1-left-col wow fadeInLeft">
                    <article class="blog-grid1-item zoom-cont">
                        <figure class=""><a href="#"><img src="images/blog-grid1e.jpg" alt=""
                                    class="zoom" /></a></figure>
                        <div class="blog-grid1-post-content">
                            <div class="blog-grid1-topline">
                                <div class="blog-grid1-author pull-left"><i class="fa fa-user"></i>Admin</div>
                                <div class="blog-grid1-date pull-right"><i class="fa fa-calendar-o"></i>28/09/15</div>
                                <div class="clearfix"></div>
                            </div>
                            <a href="#" class="blog-grid1-title">
                                <h4>It’s much cheaper to buy than to rent</h4>
                            </a>
                            <div class="blog-grid1-separator"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et. Lorem ipsum dolor sit amet...</p>
                            <a href="#" class="blog-grid1-button-right">
                                <span>read more</span>
                                <div class="blog-grid1-triangle"></div>
                            </a>
                        </div>
                    </article>
                </div>
                <div class="col-md-12 col-lg-6 blog-grid1-right-col wow fadeInRight">
                    <article class="blog-grid1-item zoom-cont">
                        <figure class=""><a href="#"><img src="images/blog-grid1d.jpg" alt=""
                                    class="zoom" /></a></figure>
                        <div class="blog-grid1-post-content">
                            <div class="blog-grid1-topline">
                                <div class="blog-grid1-author pull-left"><i class="fa fa-user"></i>Admin</div>
                                <div class="blog-grid1-date pull-right"><i class="fa fa-calendar-o"></i>28/09/15</div>
                                <div class="clearfix"></div>
                            </div>
                            <a href="#" class="blog-grid1-title">
                                <h4>It’s much cheaper to buy than to rent</h4>
                            </a>
                            <div class="blog-grid1-separator"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et. Lorem ipsum dolor sit amet...</p>
                            <a href="#" class="blog-grid1-button-right">
                                <span>read more</span>
                                <div class="blog-grid1-triangle"></div>
                            </a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="section-light top-padding-45 bottom-padding-45">
        <div class="container">
            <div class="row count-container">
                <div class="col-xs-6 col-lg-3">
                    <div class="number" id="number1">
                        <div class="number-img">
                            <i class="fa fa-building"></i>
                        </div>
                        <span class="number-label text-color2">APARTMENTS</span>
                        <span class="number-big text-color3 count" data-from="0" data-to="130"
                            data-speed="2000"></span>
                    </div>
                </div>
                <div class="col-xs-6 col-lg-3 number_border">
                    <div class="number" id="number2">
                        <div class="number-img">
                            <i class="fa fa-home"></i>
                        </div>
                        <span class="number-label text-color2">HOUSES</span>
                        <span class="number-big text-color3 count" data-from="0" data-to="107"
                            data-speed="2000"></span>
                    </div>
                </div>
                <div class="col-xs-6 col-lg-3 number_border3">
                    <div class="number" id="number3">
                        <div class="number-img">
                            <i class="fa fa-industry"></i>
                        </div>
                        <span class="number-label text-color2">COMMERCIAL</span>
                        <span class="number-big text-color3 count" data-from="0" data-to="149"
                            data-speed="2000"></span>
                    </div>
                </div>
                <div class="col-xs-6 col-lg-3 number_border">
                    <div class="number" id="number4">
                        <div class="number-img">
                            <i class="fa fa-tree"></i>
                        </div>
                        <span class="number-label text-color2">LAND</span>
                        <span class="number-big text-color3 count" data-from="0" data-to="25"
                            data-speed="2000"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
