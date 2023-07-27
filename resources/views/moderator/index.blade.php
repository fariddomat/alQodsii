@extends('moderator._layouts._app')


@section('content')
    <div class="row" style="text-align: right; direction: rtl">
        <div class="col-xl-3 col-lg-6 col-md-12">
            <div class="card pull-up ecom-card-1 bg-white">
                <div class="card-content ecom-card2 height-180">
                    <h5 class="text-muted success  p-1">@lang('site.categories') {{ $categories }} <i
                            class="fa fa-building-o success font-large-1 float-right pl-1"></i></h5>

                    <h5 class="text-muted info  p-1">@lang('site.projects') {{ $projects }}
                        <i class="fa fa-institution info font-large-1 float-right pl-1"></i>
                    </h5>

                </div>
            </div>
        </div>

    </div>

@endsection
