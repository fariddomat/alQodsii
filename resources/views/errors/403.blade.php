@extends('home._layouts._app')

@section('content')
 <!-- Start 403 Error -->
 <section class="section-light section-top-shadow margin-top-135">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="huge-header">403<span class="special-color">.</span></h1>
                <h1 class="error-subtitle text-color4">لايمكنك الوصول إلى هذه الصفحة</h1>

                <p class="margin-top-105 centered-text">لا تملك الصلاحيات أو السماحيات الكافية للوصول إلى هذه الصفحة</p>
                <p class="centered-text">انتقل إلى <strong><a href="{{ route('home') }}">الصفحة الرئيسية</a></strong> أو عودة إلى <strong><a href="{{ url()->previous() }}"> الصفحة السابقة</a></strong></p>
            </div>
        </div>
    </div>
</section>
<!-- End 403 Error -->

@endsection
