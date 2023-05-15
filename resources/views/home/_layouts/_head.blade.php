<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>{{ setting('site_title') }} </title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('alqodsii.png') }}">
    <meta name="keywords" content="Download, Apartment, Premium, Real Estate, HMTL, Site Template, property, mortgage, CSS" />
	<meta name="description" content="Download Apartment - Premium Real Estate HMTL Site Template" />
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap.min.css') }}">
	<!-- Font awesome styles -->
	<link rel="stylesheet" href="{{ asset('apartment-font/css/font-awesome.min.css') }}">
	<!-- Custom styles -->
	<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,500italic,700,700italic&amp;subset=latin,latin-ext'>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/plugins.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/apartment-layout.css') }}">
    <link id="skin" rel="stylesheet" type="text/css" href="{{ asset('css/apartment-colors-orange.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-rtl.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/rtl.css') }}">
    <style>.loader-bg {
        top: 0;
    }</style>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>


        @media only screen and (min-width: 5px) {
            /* table {
                border-collapse: separate !important;
                border-spacing: 0 2em !important; */

            /* border-collapse: collapse !important;
  border-spacing: 0 !important; */
            /* } */


            /*  separate needed      */
            tr {
                display: flex !important;
                white-space: nowrap !important;
                margin-bottom: 22px !important;
            }

            /* tr:not(:first-child) { text-align: center !important; } */
            td {
                /* display: inline-block !important */
            }

            /*  Firefox need inline-block + width  */
            td {
                /* position: relative !important; */
                /* padding: 12px 35px !important; */
                /* border-radius: 15px; */
                /* box-shadow: 10px 5px 5px #aaaaaa; */
                box-shadow: 0px +7px 7px #aaa !important;
                width: 180px !important;
            }

            /*  needed to make td move             */
            /* td {
                left: 10px !important;
                box-shadow: 1px 12px 8px #aaa !important;
            } */

            /*  push all 10px                      */
            td:first-child {
                left: : 0px !important;
                width: 100px !important;
                box-shadow: none !important;

            }

            tr:last-child {
                margin-bottom: 40px !important;

            }

            td.m1 {
                color: transparent;
                position: relative;
                top: 14px;
                transform: skewY(-50deg);
                /* translate: 0px 14px;
                -ms-transform: 0px 14px;
                -webkit-transform:  0px 14px; */
                box-shadow: 0px 6px 8px #aaa !important;
                background: linear-gradient(#cc9933, #d19426, #cc9933);

                width: 20px !important;
            }



            td.m2 {
                color: transparent;
                transform: skewY(50deg);
                background: linear-gradient(#cc9933, #d19426, #cc9933);

                position: relative;
                top: 14px;
                /* translate: 0px 14px;
                -ms-transform: 0px 14px;
                -webkit-transform:  0px 14px; */
                box-shadow: 0px 6px 8px #aaa !important;
                width: 20px !important;

            }

            /*  push 3:rd another extra 10px       */
            td.back {
                position: relative;
                top: 28px;
                /* translate: 0px 28px;

                -ms-transform: 0px 28px;
                -webkit-transform:  0px 28px; */
                /* right: 5px; */
                /* margin-top: 24px; */
                font-size: 13px !important;
                box-shadow: 0px 12px 8px #aaa !important;
                width: 167px !important;
            }

            .table-striped tbody tr:nth-of-type(2n+1) {
                background-color: none !important;
            }


            .td1 {

                text-align: center;
                color: white;
                font-weight: bolder;
                font-size: 16px;
                background: linear-gradient(#cc9933, #d19426, #cc9933);
            }

            .td2 {
                text-align: center;
                color: white;
                font-weight: bolder;
                font-size: 16px;
                background-color: #0aafb6;
            }

            .td3 {
                text-align: center;
                color: white;
                font-weight: bolder;
                font-size: 16px;
                background-color: #094748
            }
    </style>
</head>
