<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="">
    <meta name="keywords" content="admin">
    <meta name="author" content="ThemeSelect">
    <title>لوحة التحكم - القدسي</title>
    <link rel="apple-touch-icon" href="theme-assets/images/ico/apple-icon-120.png">


    <meta name="csrf-token" content="{{ csrf_token() }}">
     <!-- Icons -->
     <link href="{{ asset('dashboard/css/font-awesome.min.css') }}" rel="stylesheet">
     <link href="{{ asset('dashboard/css/simple-line-icons.css') }}" rel="stylesheet">
     <!-- Main styles for this application -->
     <link href="{{ asset('dashboard/dest/style.css') }}" rel="stylesheet">

     <link rel="stylesheet" href="{{ asset('noty/noty.css') }}">
     <script src="{{ asset('noty/noty.min.js') }}" defer></script>

     <!-- Include jQuery library -->
     <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>

     <!-- Include ajaxForm library -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" ></script>

     {{-- select2 --}}

     <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
     <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" defer></script>

     @yield('styles')
    <style>
        .td1 {
            text-align: center;
            color: white;
            font-weight: bolder;
            font-size: 16px;
            background: #4a716f;
        }

        .td2 {
            text-align: center;
            color: white;
            font-weight: bolder;
            font-size: 16px;

            background-color: #ba8e42;
        }

        .td3 {
            text-align: center;
            color: white;
            font-weight: bolder;
            font-size: 16px;
            background-color: #dd5452;
        }

        .td {

            background-color: #fdb901;
        }

</style>

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

    <link rel="icon" type="image/png" href="{{ asset('alqodsii.png') }}">
    @yield('head')
</head>
