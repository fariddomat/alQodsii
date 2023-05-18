@extends('home._layouts._app')

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
								<div class="view-icons-container">
									<a class="view-box view-box-active"><img src="images/grid-icon.png" alt="" /></a>
									<a class="view-box" href="listing-list-right-sidebar.html"><img src="images/list-icon.png" alt="" /></a>
								</div>
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
						<div class="row grid-offer-row">

                    @if ($projects->count() > 0)
                    @foreach ($projects as $project)
							<div class="col-xs-12 col-sm-6 col-lg-4 grid-offer-col" style="float: right">
								<div class="grid-offer">
									<div class="grid-offer-front">

										<div class="grid-offer-photo">
											<img src="{{ $project->image_path }}" alt="" />
											<div class="type-container">
												<div class="estate-type">apartment</div>
												<div class="transaction-type">sale</div>
											</div>
										</div>
										<div class="grid-offer-text">
											<i class="fa fa-map-marker grid-offer-localization"></i>
											<div class="grid-offer-h4"><h4 class="grid-offer-title">{!! $project->address !!}</h4></div>
											<div class="clearfix"></div>
											<p>{!! $project->details !!}</p>
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

											<div class="grid-rooms" style="float: right; padding-right: 15px; text-align: right">
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
												<span>read more</span>
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
							<select name="conuntry1" class="bootstrap-select" title="Country:" multiple data-actions-box="true">
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
							<select name="location1" class="bootstrap-select" title="Location:" multiple data-actions-box="true">
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
								<div id="slider-range-price-sidebar" data-min="0" data-max="300000" class="slider-range"></div>
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
								<input type="text" id="slider-range-bedrooms-sidebar-value" readonly class="adv-search-amount">
								<div class="clearfix"></div>
								<div id="slider-range-bedrooms-sidebar" data-min="1" data-max="10" class="slider-range"></div>
							</div>
							<div class="adv-search-range-cont">
								<label for="slider-range-bathrooms-sidebar-value" class="adv-search-label">Bathrooms:</label>
								<input type="text" id="slider-range-bathrooms-sidebar-value" readonly class="adv-search-amount">
								<div class="clearfix"></div>
								<div id="slider-range-bathrooms-sidebar" data-min="1" data-max="4" class="slider-range"></div>
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
								<div class="sidebar-featured-title"><a href="estate-details-right-sidebar.html">Fort Collins, Colorado 80523, USA</a></div>
								<div class="sidebar-featured-price">$ 320 000</div>
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
								<div class="sidebar-featured-title"><a href="estate-details-right-sidebar.html">West Fourth Street, New York 10003, USA</a></div>
								<div class="sidebar-featured-price">$ 350 000</div>
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
								<div class="sidebar-featured-title"><a href="estate-details-right-sidebar.html">E. Elwood St. Phoenix, AZ 85034, USA</a></div>
								<div class="sidebar-featured-price">$ 410 000</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="sidebar-title-cont">
							<h4 class="sidebar-title">latest news<span class="special-color">.</span></h4>
							<div class="title-separator-primary"></div>
						</div>
						<div class="sidebar-blog-cont">
							<article>
								<a href="blog-right-sidebar.html"><img src="images/footer-blog1.jpg" alt="" class="sidebar-blog-image" /></a>
								<div class="sidebar-blog-title"><a href="blog-right-sidebar.html">This post title, lorem ipsum dolor sit</a></div>
								<div class="sidebar-blog-date"><i class="fa fa-calendar-o"></i>28/09/15</div>
								<div class="clearfix"></div>
							</article>
							<article>
								<a href="blog-right-sidebar.html"><img src="images/footer-blog2.jpg" alt="" class="sidebar-blog-image" /></a>
								<div class="sidebar-blog-title"><a href="blog-right-sidebar.html">This post title, lorem ipsum dolor sit</a></div>
								<div class="sidebar-blog-date"><i class="fa fa-calendar-o"></i>28/09/15</div>
								<div class="clearfix"></div>
							</article>
							<article>
								<a href="blog-right-sidebar.html"><img src="images/footer-blog3.jpg" alt="" class="sidebar-blog-image" /></a>
								<div class="sidebar-blog-title"><a href="blog-right-sidebar.html">This post title, lorem ipsum dolor sit</a></div>
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
