@extends('home._layouts._app')

@section('content')
    <section class="short-image no-padding agency margin-top-135">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-12 short-image-title">
                    <h5 class="subtitle-margin second-color">AlQodsi</h5>
                    <h1 class="second-color">تصنيفات المشاريع</h1>
                    <div class="short-title-separator"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-light section-top-shadow">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-9">

                    <div class=""></div>
                    <div class="row team-member-row">
                        @if ($categories->count() > 0)
                        @foreach ($categories as $category)
                        <div class="col-xs-12 col-sm-6 col-lg-4 team-member-col" style="float: right !important">
                            <div class="team-member">
                                <div class="team-photo">
                                    <img src="{{ $category->image_path }}" alt="" />
                                    <div class="big-triangle"></div>
                                    <div class="big-triangle2"></div>
                                    <a class="big-icon " href="{{ route('category', $category->id) }}"><i
                                            class="fa fa-search"></i></a>
                                    <div class="team-description">
                                        <div>
                                            
                                            <p class="team-text">
                                                {{$category->description}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-name">
                                    <h4>{{ $category->name }}<span class="special-color">.</span></h4>
                                    <h5 class="margin-top-15">
                                        عدد المشاريع {{ $category->projects->count() }}
                                    </h5>
                                </div>
                            </div>
                        </div>

                        @endforeach
                        @else
                            <h4>لم يتم إضافة تصنيفات بعد</h4>
                        @endif
                        
                        <div class="row col-xs-12" style="width:100%; margin: 0 auto; text-align: center">
                            <ul>{{ $categories->links() }}</ul>
                        </div>
                    </div>
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
                            <select name="city1" class="bootstrap-select" title="City:" multiple data-actions-box="true">
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
                            <input type="text" id="slider-range-price-sidebar-value" readonly class="adv-search-amount">
                            <div class="clearfix"></div>
                            <div id="slider-range-price-sidebar" data-min="0" data-max="300000" class="slider-range">
                            </div>
                        </div>
                        <div class="adv-search-range-cont">
                            <label for="slider-range-area-sidebar-value" class="adv-search-label">Area:</label>
                            <span>m<sup>2</sup></span>
                            <input type="text" id="slider-range-area-sidebar-value" readonly class="adv-search-amount">
                            <div class="clearfix"></div>
                            <div id="slider-range-area-sidebar" data-min="0" data-max="180" class="slider-range"></div>
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
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
