<footer class="footer footer-static footer-light navbar-border navbar-shadow">
    <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span
            class="float-md-left d-block d-md-inline-block">2023 &copy; Copyright <a class="text-bold-800 grey darken-2"
                href="https://www.digitsmark.com/" target="_blank">Digitsmark</a></span>
    </div>
</footer>

    <!-- Bootstrap and necessary plugins -->
    <script src="{{ asset('dashboard/js/libs/jquery.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/libs/tether.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/libs/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/libs/pace.min.js') }}"></script>

    <!-- Plugins and scripts required by all views -->
    <script src="{{ asset('dashboard/js/libs/Chart.min.js') }}"></script>

    <!-- CoreUI main scripts -->

    <script src="{{ asset('dashboard/js/app.js') }}"></script>

    <!-- Plugins and scripts required by this views -->
    <!-- Custom scripts required by this view -->
    {{-- <script src="{{ asset('dashboard/js/views/main.js') }}"></script> --}}
    {{-- <script src="{{ asset('dashboard/js/views/charts.js') }}"></script> --}}

    @extends('admin._layouts._noty')
    {{-- @yield('scripts') --}}
    @yield('scripts')
