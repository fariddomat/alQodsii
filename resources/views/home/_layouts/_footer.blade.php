<footer class="large-cont">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-12">
                <h4 class="second-color">النشرة البريدية<span class="special-color">.</span></h4>
                <div class="footer-title-separator"></div>
                <p class="footer-p" style="color: white">اشترك بالنشرة البريدية للحصول على آخر تحديثات المشاريع.</p>
                <form action="{{ route('promoters') }}" method="post" class="form-inline footer-newsletter">
                    @csrf
                    <input type="email" name="email" class="form-control" id="exampleInputEmail2" placeholder="أدخل البريد الالكتروني" style="" required>
                    <button type="submit" class="btn"><i class="fa fa-lg fa-paper-plane"></i></button>
                </form>
            </div>
        </div>
    </div>
</footer>
<footer class="small-cont">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6 small-cont">
                <img src="{{ asset('alqodsi.png') }}" style="max-height: 75px" alt="" class="img-responsive footer-logo" />
            </div>

            <div class="col-xs-12 col-md-6 footer-copyrights">
                &copy; Copyright 2023 <a href="https://joudtech.sa/" target="blank">Joudtech</a>. All rights reserved.
            </div>
        </div>
    </div>
</footer>
