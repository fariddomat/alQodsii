@extends('home._layouts._app')

@section('style')
@endsection

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
    <section class="short-image no-padding agency margin-top-135"">
        <div class="container">
            <div class="row >
                <div class="col-xs-12 col-lg-12 short-image-title">
                <h5 class="subtitle-margin second-color">AlQodsi</h5>
                <h1 class="second-color"> المشاريع</h1>
                <div class="short-title-separator"></div>
            </div>
        </div>
        </div>
    </section>

    <section class="section-light section-top-shadow">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-9">
                    <div class="row">
                        <div class="col-xs-12 col-lg-6">
                            <h5 class="subtitle-margin">apartments for sale, colorodo, usa</h5>
                            <h1>42 estates found<span class="special-color">.</span></h1>
                        </div>
                        <div class="col-xs-12 col-lg-6">

                            <div class="order-by-container">
                                <select name="sort" class="bootstrap-select" title="Order By:">
                                    <option>Price low to high</option>
                                    <option>Price high to low</option>
                                    <option>Area high to low</option>
                                    <option>Area high to low</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="title-separator-primary"></div>
                        </div>
                    </div>
                    <div class="row grid-offer-row" style="display: flex; flex-wrap: wrap;">


                        @if ($projects->count() > 0)
                            @foreach ($projects as $project)
                                <div class="col-xs-12 col-sm-6 col-lg-4 grid-offer-col" style="float: right">
                                    <div class="grid-offer">
                                        <div class="grid-offer-front">

                                            <div class="grid-offer-photo">
                                                <img src="{{ $project->poster_path }}" alt="" />
                                                <div class="type-container">
                                                    <div class="estate-type">apartment</div>
                                                    <div class="transaction-type">sale</div>
                                                </div>
                                            </div>
                                            <div class="grid-offer-text">
                                                <i class="fa fa-map-marker grid-offer-localization"></i>
                                                <div class="grid-offer-h4">
                                                    <h4 class="grid-offer-title">{!! $project->address !!}</h4>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            {{-- <div class="price-grid-cont">
											<div class="grid-price-label pull-left">Price:</div>
											<div class="grid-price pull-right">
												$ 320 000
											</div>
											<div class="clearfix"></div>
										</div> --}}
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
                        @else
                            <h4>لايوجد مشاريع في هذا القسم</h4>
                        @endif
                    </div>

                    <div class="row col-xs-12" style="width: 100%;margin: 0 auto; text-align: center">
                        <ul>{{ $projects->links() }}</ul>
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
