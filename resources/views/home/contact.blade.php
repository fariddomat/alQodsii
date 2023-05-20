@extends('home._layouts._app')

@section('content')
    <section class="section-light section-both-shadow top-padding-45 margin-top-135">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 margin-top-45">
                    <p class="negative-margin">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <img src="images/contact-image.jpg" alt="" class="pull-left margin-top-45" />
                    <address class="contact-info pull-left">
                        <span><i class="fa fa-map-marker"></i>00456 Some Address line</span>
                        <span><i class="fa fa-envelope"></i><a href="#">email@domain.tld</a></span>
                        <span><i class="fa fa-phone"></i>01-23456789</span>
                        <span><i class="fa fa-globe"></i><a href="#">http://somedmain.tld</a></span>
                        <span><i class="fa fa-clock-o"></i>mon-fri: 8:00 - 18:00</span>
                        <span class="span-last">sat: 10:00 - 16:00</span>
                    </address>
                </div>
                <div class="col-xs-12 col-md-6 margin-top-45">
                    <form name="contact-from" id="contact-form" action="{{ route('contact') }}" method="post">
                        @csrf
                        @extends('admin._layouts._error')
                        <div id="form-result"></div>
                        <input name="name" id="name" type="text" class="input-short main-input required,all"
                            placeholder="الاسم بالكامل *"
                            style="  float: right;
                            margin-left: 15px;" required/>
                        <input name="phone" id="phone" type="text" class="input-short pull-right main-input ,all"
                            placeholder="رقم الهاتف *" required />
                        <input name="email" id="mail" type="email" class="input-full main-input ,email"
                            placeholder="البريد الالكتروني" />
                        <textarea name="message" id="message" class="input-full contact-textarea main-input required,email"
                            placeholder="رسالتك *" required></textarea>
                        <div class="form-submit-cont">
                            <button type="submit" class="button-primary pull-right" id="form-submit">
                                <span>ارسال</span>
                                <div class="button-triangle"></div>
                                <div class="button-triangle2"></div>
                                <div class="button-icon"><i class="fa fa-paper-plane"></i></div>
                            </button>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </section>
@endsection
