<div class="move-top">
    <div class="big-triangle-second-color"></div>
    <div class="big-icon-second-color"><i class="jfont fa-lg">&#xe803;</i></div>
</div>

<!-- Login modal -->
<div class="modal fade apartment-modal" id="login-modal">
    <div class="modal-dialog">
        <div class="modal-content">

            <form id="" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <div class="modal-title">
                        <h1>تسجيل الدخول<span class="special-color">.</span></h1>
                        <div class="short-title-separator"></div>
                    </div>
                    <input name="email" type="email" class="input-full main-input" placeholder="البريد الإلكتروني" />
                    @error('email')
                        <span class="invalid-feedback" role="alert" style="margin-top: 25px;">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input name="password" type="password" class="input-full main-input" placeholder="كلمة المرور" />

                    @error('password')
                        <span class="invalid-feedback" role="alert" style="margin-top: 25px;">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <button type="submit" class="button-primary button-shadow button-full">
                        <span>دخول</span>
                        <div class="button-triangle"></div>
                        <div class="button-triangle2"></div>
                        <div class="button-icon"><i class="fa fa-user"></i></div>
                    </button>
                    <div class="clearfix"></div>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- jQuery  -->
<script type="text/javascript" src="{{ asset('js/jQuery/jquery.min.js') }}" ></script>
<script type="text/javascript" src="{{ asset('js/jQuery/jquery-ui.min.js') }}" ></script>

<!-- Bootstrap-->
<script type="text/javascript" src="{{ asset('bootstrap/bootstrap.min.js') }}" defer></script>

<!-- plugins script -->
<script type="text/javascript" src="{{ asset('js/plugins.js') }}" defer></script>

<!-- template scripts -->
{{-- <script type="text/javascript" src="{{ asset('mail/validate.js') }}"></script> --}}
<script type="text/javascript" src="{{ asset('js/apartment.js') }}" defer></script>

@yield('scripts')
