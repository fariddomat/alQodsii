@extends('home._layouts._app')

@section('content')
 <!-- Start 404 Error -->
 <section class="section-light section-top-shadow margin-top-135">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="huge-header">404<span class="special-color">.</span></h1>
                <h1 class="error-subtitle text-color4">الصفحة غير موجودة</h1>

                <p class="margin-top-105 centered-text">الصفحة التي تبحث هنها غير موجودة ربما تم حذفها أو نقلها أو وصلت بالخطأ</p>
                <p class="centered-text">انتقل إلى <strong><a href="{{ route('home') }}">الصفحة الرئيسية</a></strong> أو عودة إلى <strong><a href="{{ url()->previous() }}"> الصفحة السابقة</a></strong></p>
            </div>
        </div>
    </div>
</section>
<!-- End 404 Error -->

@endsection
