@extends('home._layouts._app')

@section('content')
    <!-- Sign In Area -->
    <div class="sign-in-area pt-100 pb-70 margin-top-135">
        <div class="container margin-top-135" style="  padding: 100px 0 180px;">
            <div class="row align-items-center">
                <div class="col-lg-5" style="">
                    <div class="user-all-content">
                        <div class="section-title-two text-center"><h1 style="color: white">@lang('site.login') <b class="section-color2">إلى @lang('site.Admin_panel')</b></h1>
                            <h3 class="section-span-bg2" style="color: white">@lang('site.login')</h3>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="">
                        <div class="">
                            <form id="" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="row" style="  padding: 0 25px;">
                                    <div class="col-xs-12 ">
                                            <input type="text" name="email" id="name"
                                                class="form-control  @error('email') is-invalid @enderror" required
                                                data-error="Please enter your Username or Email"
                                                placeholder="@lang('site.email')">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert" style="margin-top: 15px;">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>

                                    <div class="col-xs-12 margin-top-15">
                                            <input class="form-control @error('password') is-invalid @enderror"
                                                type="password" name="password" placeholder="@lang('site.password')">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert" style="margin-top: 15px;">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>


                                    <div class="col-xs-12 margin-top-15">
                                        <button type="submit" class="button-primary button-shadow button-full">
                                            <span>دخول</span>
                                            <div class="button-triangle"></div>
                                            <div class="button-triangle2"></div>
                                            <div class="button-icon"><i class="fa fa-user"></i></div>
                                        </button>
                                    </div>


                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sign In Area End -->
@endsection
