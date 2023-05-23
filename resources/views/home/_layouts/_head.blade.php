<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>{{ setting('site_title') }} </title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('alqodsii.png') }}">
    <meta name="keywords"
        content="Download, Apartment, Premium, Real Estate, HMTL, Site Template, property, mortgage, CSS" />
    <meta name="description" content="Download Apartment - Premium Real Estate HMTL Site Template" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap.min.css') }}">
    <!-- Font awesome styles -->
    <link rel="stylesheet" href="{{ asset('apartment-font/css/font-awesome.min.css') }}">
    <!-- Custom styles -->
    <link rel='stylesheet' type='text/css'
        href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,500italic,700,700italic&amp;subset=latin,latin-ext'>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/plugins.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/apartment-layout.css') }}">
    <link id="skin" rel="stylesheet" type="text/css" href="{{ asset('css/apartment-colors-orange.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-rtl.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/rtl.css') }}">
    <style>
        .loader-bg {
            top: 0;
        }
    </style>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        body {
            font-family: 'Cairo';
        }
        header.header2 .navbar-nav > li > a {
            font-size: 18px;
        }
        h5{
            letter-spacing: 0.5px;
        }

        @media only screen and (min-width: 5px) {
            /* table {
                border-collapse: separate !important;
                border-spacing: 0 2em !important; */



            /*  separate needed      */
            tr {
                display: flex !important;
                white-space: nowrap !important;
                margin-bottom: 10px !important;
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
                margin: 5px;
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
                top: 20px;
                /* translate: 0px 28px;

                -ms-transform: 0px 28px;
                -webkit-transform:  0px 28px; */
                /* right: 5px; */
                /* margin-top: 24px; */
                font-size: 13px !important;
                box-shadow: 0px 8px 8px #aaa !important;
                width: 125px !important;
            }

            .table-striped tbody tr:nth-of-type(2n+1) {
                background-color: none !important;
            }


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
                background-color: #dd5452
            }
        }

        .main-timeline {
            position: relative
        }

        .main-timeline:before {
            content: "";
            width: 5px;
            height: 100%;
            border-radius: 20px;
            margin: 0 auto;
            background: #242922;
            position: absolute;
            top: 0;
            left: 0;
            right: 0
        }

        .main-timeline .timeline {
            display: inline-block;
            margin-bottom: 50px;
            position: relative
        }

        .main-timeline .timeline:before {
            content: "";
            width: 20px;
            height: 20px;
            border-radius: 50%;
            border: 4px solid #fff;
            background: #ec496e;
            position: absolute;
            top: 50%;
            left: 50%;
            z-index: 1;
            transform: translate(-50%, -50%)
        }

        .main-timeline .timeline-icon {
            display: inline-block;
            width: 130px;
            height: 130px;
            border-radius: 50%;
            border: 3px solid #ec496e;
            padding: 13px;
            text-align: center;
            position: absolute;
            top: 50%;
            left: 30%;
            transform: translateY(-50%)
        }

        .main-timeline .timeline-icon i {
            display: block;
            border-radius: 50%;
            background: #ec496e;
            font-size: 64px;
            color: #fff;
            line-height: 100px;
            z-index: 1;
            position: relative
        }

        .main-timeline .timeline-icon:after,
        .main-timeline .timeline-icon:before {
            content: "";
            width: 100px;
            height: 4px;
            background: #ec496e;
            position: absolute;
            top: 50%;
            right: -100px;
            transform: translateY(-50%)
        }

        .main-timeline .timeline-icon:after {
            width: 70px;
            height: 50px;
            background: #fff;
            top: 89px;
            right: -30px
        }

        .main-timeline .timeline-content {
            width: 50%;
            padding: 0 50px;
            margin: 52px 0 0;
            float: right;
            position: relative
        }

        .main-timeline .timeline-content:before {
            content: "";
            width: 70%;
            height: 100%;
            border: 3px solid #ec496e;
            border-top: none;
            border-right: none;
            position: absolute;
            bottom: -13px;
            left: 35px
        }

        .main-timeline .timeline-content:after {
            content: "";
            width: 37px;
            height: 3px;
            background: #ec496e;
            position: absolute;
            top: 13px;
            left: 0
        }

        .main-timeline .title {
            font-size: 20px;
            font-weight: 600;
            color: #ec496e;
            text-transform: uppercase;
            margin: 0 0 5px
        }

        .main-timeline .description {
            display: inline-block;
            font-size: 16px;
            color: #404040;
            line-height: 20px;
            letter-spacing: 1px;
            margin: 0
        }

        .main-timeline .timeline:nth-child(even) .timeline-icon {
            left: auto;
            right: 30%
        }

        .main-timeline .timeline:nth-child(even) .timeline-icon:before {
            right: auto;
            left: -100px
        }

        .main-timeline .timeline:nth-child(even) .timeline-icon:after {
            right: auto;
            left: -30px
        }

        .main-timeline .timeline:nth-child(even) .timeline-content {
            float: left
        }

        .main-timeline .timeline:nth-child(even) .timeline-content:before {
            left: auto;
            right: 35px;
            transform: rotateY(180deg)
        }

        .main-timeline .timeline:nth-child(even) .timeline-content:after {
            left: auto;
            right: 0
        }

        .main-timeline .timeline:nth-child(2n) .timeline-content:after,
        .main-timeline .timeline:nth-child(2n) .timeline-icon i,
        .main-timeline .timeline:nth-child(2n) .timeline-icon:before,
        .main-timeline .timeline:nth-child(2n):before {
            background: #f9850f
        }

        .main-timeline .timeline:nth-child(2n) .timeline-icon {
            border-color: #f9850f
        }

        .main-timeline .timeline:nth-child(2n) .title {
            color: #f9850f
        }

        .main-timeline .timeline:nth-child(2n) .timeline-content:before {
            border-left-color: #f9850f;
            border-bottom-color: #f9850f
        }

        .main-timeline .timeline:nth-child(3n) .timeline-content:after,
        .main-timeline .timeline:nth-child(3n) .timeline-icon i,
        .main-timeline .timeline:nth-child(3n) .timeline-icon:before,
        .main-timeline .timeline:nth-child(3n):before {
            background: #8fb800
        }

        .main-timeline .timeline:nth-child(3n) .timeline-icon {
            border-color: #8fb800
        }

        .main-timeline .timeline:nth-child(3n) .title {
            color: #8fb800
        }

        .main-timeline .timeline:nth-child(3n) .timeline-content:before {
            border-left-color: #8fb800;
            border-bottom-color: #8fb800
        }

        .main-timeline .timeline:nth-child(4n) .timeline-content:after,
        .main-timeline .timeline:nth-child(4n) .timeline-icon i,
        .main-timeline .timeline:nth-child(4n) .timeline-icon:before,
        .main-timeline .timeline:nth-child(4n):before {
            background: #2fcea5
        }

        .main-timeline .timeline:nth-child(4n) .timeline-icon {
            border-color: #2fcea5
        }

        .main-timeline .timeline:nth-child(4n) .title {
            color: #2fcea5
        }

        .main-timeline .timeline:nth-child(4n) .timeline-content:before {
            border-left-color: #2fcea5;
            border-bottom-color: #2fcea5
        }

        @media only screen and (max-width:1200px) {
            .main-timeline .timeline-icon:before {
                width: 50px;
                right: -50px
            }

            .main-timeline .timeline:nth-child(even) .timeline-icon:before {
                right: auto;
                left: -50px
            }

            .main-timeline .timeline-content {
                margin-top: 75px
            }
        }

        @media only screen and (max-width:990px) {
            .main-timeline .timeline {
                margin: 0 0 10px
            }

            .main-timeline .timeline-icon {
                left: 25%
            }

            .main-timeline .timeline:nth-child(even) .timeline-icon {
                right: 25%
            }

            .main-timeline .timeline-content {
                margin-top: 115px
            }
        }

        @media only screen and (max-width:767px) {
            .main-timeline {
                padding-top: 50px
            }

            .main-timeline:before {
                left: 80px;
                right: 0;
                margin: 0
            }

            .main-timeline .timeline {
                margin-bottom: 70px
            }

            .main-timeline .timeline:before {
                top: 0;
                left: 83px;
                right: 0;
                margin: 0
            }

            .main-timeline .timeline-icon {
                width: 60px;
                height: 60px;
                line-height: 40px;
                padding: 5px;
                top: 0;
                left: 0
            }

            .main-timeline .timeline:nth-child(even) .timeline-icon {
                left: 0;
                right: auto
            }

            .main-timeline .timeline-icon:before,
            .main-timeline .timeline:nth-child(even) .timeline-icon:before {
                width: 25px;
                left: auto;
                right: -25px
            }

            .main-timeline .timeline-icon:after,
            .main-timeline .timeline:nth-child(even) .timeline-icon:after {
                width: 25px;
                height: 30px;
                top: 44px;
                left: auto;
                right: -5px
            }

            .main-timeline .timeline-icon i {
                font-size: 30px;
                line-height: 45px
            }

            .main-timeline .timeline-content,
            .main-timeline .timeline:nth-child(even) .timeline-content {
                width: 100%;
                margin-top: -15px;
                padding-left: 130px;
                padding-right: 5px
            }

            .main-timeline .timeline:nth-child(even) .timeline-content {
                float: right
            }

            .main-timeline .timeline-content:before,
            .main-timeline .timeline:nth-child(even) .timeline-content:before {
                width: 50%;
                left: 120px
            }

            .main-timeline .timeline:nth-child(even) .timeline-content:before {
                right: auto;
                transform: rotateY(0)
            }

            .main-timeline .timeline-content:after,
            .main-timeline .timeline:nth-child(even) .timeline-content:after {
                left: 85px
            }
        }

        @media only screen and (max-width:479px) {

            .main-timeline .timeline-content,
            .main-timeline .timeline:nth-child(2n) .timeline-content {
                padding-left: 110px
            }

            .main-timeline .timeline-content:before,
            .main-timeline .timeline:nth-child(2n) .timeline-content:before {
                left: 99px
            }

            .main-timeline .timeline-content:after,
            .main-timeline .timeline:nth-child(2n) .timeline-content:after {
                left: 65px
            }
        }

        /******************* Timeline Demo - 2 *****************/
        .main-timeline2 {
            padding-top: 50px;
            overflow: hidden;
            position: relative
        }

        .main-timeline2:before {
            content: "";
            width: 7px;
            height: 100%;
            background: #084772;
            margin: 0 auto;
            position: absolute;
            top: 80px;
            left: 0;
            right: 0
        }

        .main-timeline2 .timeline {
            width: 50%;
            float: left;
            padding: 20px 60px;
            border-top: 7px solid #084772;
            border-right: 7px solid #084772;
            border-radius: 0 30px 0 0;
            position: relative;
            right: -3.5px
        }

        .main-timeline2 .icon {
            display: block;
            width: 50px;
            height: 50px;
            line-height: 50px;
            border-radius: 50%;
            background: #e84c47;
            border: 1px solid #fff;
            text-align: center;
            font-size: 25px;
            color: #fff;
            box-shadow: 0 0 0 2px #e84c47;
            position: absolute;
            top: -30px;
            left: 0
        }

        .main-timeline2 .timeline-content {
            display: block;
            padding: 30px 10px 10px;
            border-radius: 20px;
            background: #e84c47;
            color: #fff;
            position: relative
        }

        .main-timeline2 .timeline-content:hover {
            text-decoration: none;
            color: #fff
        }

        .main-timeline2 .timeline-content:after,
        .main-timeline2 .timeline-content:before {
            content: "";
            display: block;
            width: 10px;
            height: 50px;
            border-radius: 10px;
            background: #e84c47;
            border: 1px solid #fff;
            position: absolute;
            top: -35px;
            left: 50px
        }

        .main-timeline2 .timeline-content:after {
            left: auto;
            right: 50px
        }

        .main-timeline2 .title {
            font-size: 24px;
            margin: 0
        }

        .main-timeline2 .description {
            font-size: 15px;
            letter-spacing: 1px;
            margin: 0 0 5px
        }

        .main-timeline2 .timeline:nth-child(2n) {
            border-right: none;
            border-left: 7px solid #084772;
            border-radius: 30px 0 0;
            right: auto;
            left: -3.5px
        }

        .main-timeline2 .timeline:nth-child(2n) .icon {
            left: auto;
            right: 0;
            box-shadow: 0 0 0 2px #4bd9bf
        }

        .main-timeline2 .timeline:nth-child(2) {
            margin-top: 130px
        }

        .main-timeline2 .timeline:nth-child(odd) {
            margin: -130px 0 30px
        }

        .main-timeline2 .timeline:nth-child(even) {
            margin-bottom: 80px
        }

        .main-timeline2 .timeline:first-child,
        .main-timeline2 .timeline:last-child:nth-child(even) {
            margin: 0 0 30px
        }

        .main-timeline2 .timeline:nth-child(2n) .icon,
        .main-timeline2 .timeline:nth-child(2n) .timeline-content,
        .main-timeline2 .timeline:nth-child(2n) .timeline-content:after,
        .main-timeline2 .timeline:nth-child(2n) .timeline-content:before {
            background: #4bd9bf
        }

        .main-timeline2 .timeline:nth-child(3n) .icon,
        .main-timeline2 .timeline:nth-child(3n) .timeline-content,
        .main-timeline2 .timeline:nth-child(3n) .timeline-content:after,
        .main-timeline2 .timeline:nth-child(3n) .timeline-content:before {
            background: #ff9e09
        }

        .main-timeline2 .timeline:nth-child(3n) .icon {
            box-shadow: 0 0 0 2px #ff9e09
        }

        .main-timeline2 .timeline:nth-child(4n) .icon,
        .main-timeline2 .timeline:nth-child(4n) .timeline-content,
        .main-timeline2 .timeline:nth-child(4n) .timeline-content:after,
        .main-timeline2 .timeline:nth-child(4n) .timeline-content:before {
            background: #3ebae7
        }

        .main-timeline2 .timeline:nth-child(4n) .icon {
            box-shadow: 0 0 0 2px #3ebae7
        }

        @media only screen and (max-width:767px) {
            .main-timeline2:before {
                left: 0;
                right: auto
            }

            .main-timeline2 .timeline,
            .main-timeline2 .timeline:nth-child(even),
            .main-timeline2 .timeline:nth-child(odd) {
                width: 100%;
                float: none;
                padding: 20px 30px;
                margin: 0 0 30px;
                border-right: none;
                border-left: 7px solid #084772;
                border-radius: 30px 0 0;
                right: auto;
                left: 0
            }

            .main-timeline2 .icon {
                left: auto;
                right: 0
            }
        }

        @media only screen and (max-width:480px) {
            .main-timeline2 .title {
                font-size: 18px
            }
        }

        /******************* Timeline Demo - 3 *****************/
        .main-timeline3 {
            overflow: hidden;
            position: relative
        }

        .main-timeline3:before {
            content: "";
            width: 10px;
            height: 100%;
            border: 3px solid #959595;
            position: absolute;
            top: 40px;
            left: 50%;
            transform: translateX(-50%)
        }

        .main-timeline3 .timeline {
            width: 50%;
            padding: 10px 60px 10px 100px;
            float: right;
            position: relative
        }

        .main-timeline3 .timeline:before {
            content: "";
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #c47c48;
            border: 5px solid #fff;
            box-shadow: 0 0 1px 5px #c47c48;
            position: absolute;
            top: 42px;
            left: -20px
        }

        .main-timeline3 .timeline-content {
            display: block;
            background: #e9e9e7;
            padding: 70px 30px 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, .2) inset;
            position: relative
        }

        .main-timeline3 .timeline-content:hover {
            text-decoration: none
        }

        .main-timeline3 .year {
            display: block;
            width: 80%;
            height: 50px;
            background: #c47c48;
            padding: 0 0 0 50px;
            font-size: 30px;
            font-weight: 800;
            color: #fff;
            line-height: 50px;
            box-shadow: 0 0 20px rgba(0, 0, 0, .4) inset;
            border-radius: 10px 10px 10px 0;
            position: absolute;
            top: 20px;
            left: -20px
        }

        .main-timeline3 .year:before {
            content: "";
            border-top: 40px solid #c47c48;
            border-left: 20px solid transparent;
            border-bottom: 20px solid transparent;
            position: absolute;
            bottom: -60px;
            left: 0
        }

        .main-timeline3 .title {
            font-size: 18px;
            font-weight: 600;
            text-transform: uppercase;
            color: #4a4a4a
        }

        .main-timeline3 .description {
            font-size: 14px;
            color: #6f6f6f;
            margin: 0 0 5px
        }

        .main-timeline3 .timeline:nth-child(2n) {
            padding: 10px 100px 10px 60px;
            text-align: right
        }

        .main-timeline3 .timeline:nth-child(2n):before {
            left: auto;
            right: -20px;
            background: #bf3fc8;
            box-shadow: 0 0 1px 5px #bf3fc8
        }

        .main-timeline3 .timeline:nth-child(2n) .year {
            padding-right: 50px;
            border-radius: 10px 10px 0;
            left: auto;
            right: -20px;
            background: #bf3fc8
        }

        .main-timeline3 .timeline:nth-child(2n) .year:before {
            border-left: none;
            border-right: 20px solid transparent;
            left: auto;
            right: 0;
            border-top-color: #bf3fc8
        }

        .main-timeline3 .timeline:nth-child(2) {
            margin-top: 140px
        }

        .main-timeline3 .timeline:nth-child(odd) {
            margin: -140px 0 0
        }

        .main-timeline3 .timeline:nth-child(even) {
            margin-bottom: 60px
        }

        .main-timeline3 .timeline:first-child,
        .main-timeline3 .timeline:last-child:nth-child(even) {
            margin: 0
        }

        .main-timeline3 .timeline:nth-child(3n):before {
            background: #ce3c41;
            box-shadow: 0 0 1px 5px #ce3c41
        }

        .main-timeline3 .timeline:nth-child(3n) .year {
            background: #ce3c41
        }

        .main-timeline3 .timeline:nth-child(3n) .year:before {
            border-top-color: #ce3c41
        }

        .main-timeline3 .timeline:nth-child(4n):before {
            background: #8cc43d;
            box-shadow: 0 0 1px 5px #8cc43d
        }

        .main-timeline3 .timeline:nth-child(4n) .year {
            background: #8cc43d
        }

        .main-timeline3 .timeline:nth-child(4n) .year:before {
            border-top-color: #8cc43d
        }

        @media only screen and (max-width:990px) {
            .main-timeline3:before {
                top: 8%
            }

            .main-timeline3 .timeline {
                padding: 10px 10px 10px 100px
            }

            .main-timeline3 .timeline:nth-child(2n) {
                padding: 10px 100px 10px 10px
            }
        }

        @media only screen and (max-width:767px) {
            .main-timeline3:before {
                width: 8px;
                top: 0;
                left: 12px;
                transform: translateX(0)
            }

            .main-timeline3 .timeline,
            .main-timeline3 .timeline:nth-child(even),
            .main-timeline3 .timeline:nth-child(odd) {
                width: 100%;
                float: none;
                text-align: left;
                padding: 0 0 0 60px;
                margin: 0 0 30px
            }

            .main-timeline3 .timeline:before,
            .main-timeline3 .timeline:nth-child(2n):before {
                width: 20px;
                height: 20px;
                border: 3px solid #fff;
                top: 38px;
                left: 6px
            }

            .main-timeline3 .timeline:nth-child(2n) .year {
                right: auto;
                left: -20px;
                border-radius: 10px 10px 10px 0
            }

            .main-timeline3 .timeline:nth-child(2n) .year:before {
                border-left: 20px solid transparent;
                border-bottom: 20px solid transparent;
                border-right: none;
                right: auto;
                left: 0
            }
        }

        /******************* Timeline Demo - 4 *****************/
        .main-timeline4 {
            overflow: hidden;
            position: relative
        }

        .main-timeline4:before {
            content: "";
            width: 5px;
            height: 70%;
            background: #333;
            position: absolute;
            top: 70px;
            left: 50%;
            transform: translateX(-50%)
        }

        .main-timeline4 .timeline-content:before,
        .main-timeline4 .timeline:before {
            top: 50%;
            transform: translateY(-50%);
            content: ""
        }

        .main-timeline4 .timeline {
            width: 50%;
            padding-left: 100px;
            float: right;
            position: relative
        }

        .main-timeline4 .timeline:before {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: #fff;
            border: 5px solid #333;
            position: absolute;
            left: -10px
        }

        .main-timeline4 .timeline-content {
            display: block;
            padding-left: 150px;
            position: relative
        }

        .main-timeline4 .timeline-content:before {
            width: 90px;
            height: 10px;
            border-top: 7px dotted #333;
            position: absolute;
            left: -92px
        }

        .main-timeline4 .year {
            display: inline-block;
            width: 120px;
            height: 120px;
            line-height: 100px;
            border-radius: 50%;
            border: 10px solid #f54957;
            font-size: 30px;
            color: #f54957;
            text-align: center;
            box-shadow: inset 0 0 10px rgba(0, 0, 0, .4);
            position: absolute;
            top: 0;
            left: 0
        }

        .main-timeline4 .year:before {
            content: "";
            border-left: 20px solid #f54957;
            border-top: 10px solid transparent;
            border-bottom: 10px solid transparent;
            position: absolute;
            bottom: -13px;
            right: 0;
            transform: rotate(45deg)
        }

        .main-timeline4 .inner-content {
            padding: 20px 0
        }

        .main-timeline4 .title {
            font-size: 24px;
            font-weight: 600;
            color: #f54957;
            text-transform: uppercase;
            margin: 0 0 5px
        }

        .main-timeline4 .description {
            font-size: 14px;
            color: #6f6f6f;
            margin: 0 0 5px
        }

        .main-timeline4 .timeline:nth-child(2n) {
            padding: 0 100px 0 0
        }

        .main-timeline4 .timeline:nth-child(2n) .timeline-content:before,
        .main-timeline4 .timeline:nth-child(2n) .year,
        .main-timeline4 .timeline:nth-child(2n):before {
            left: auto;
            right: -10px
        }

        .main-timeline4 .timeline:nth-child(2n) .timeline-content {
            padding: 0 150px 0 0
        }

        .main-timeline4 .timeline:nth-child(2n) .timeline-content:before {
            right: -92px
        }

        .main-timeline4 .timeline:nth-child(2n) .year {
            right: 0
        }

        .main-timeline4 .timeline:nth-child(2n) .year:before {
            right: auto;
            left: 0;
            border-left: none;
            border-right: 20px solid #f54957;
            transform: rotate(-45deg)
        }

        .main-timeline4 .timeline:nth-child(2) {
            margin-top: 110px
        }

        .main-timeline4 .timeline:nth-child(odd) {
            margin: -110px 0 0
        }

        .main-timeline4 .timeline:nth-child(even) {
            margin-bottom: 80px
        }

        .main-timeline4 .timeline:first-child,
        .main-timeline4 .timeline:last-child:nth-child(even) {
            margin: 0
        }

        .main-timeline4 .timeline:nth-child(2n) .year {
            border-color: #1ebad0;
            color: #1ebad0
        }

        .main-timeline4 .timeline:nth-child(2) .year:before {
            border-right-color: #1ebad0
        }

        .main-timeline4 .timeline:nth-child(2n) .title {
            color: #1ebad0
        }

        .main-timeline4 .timeline:nth-child(3n) .year {
            border-color: #7cba01;
            color: #7cba01
        }

        .main-timeline4 .timeline:nth-child(3) .year:before {
            border-left-color: #7cba01
        }

        .main-timeline4 .timeline:nth-child(3n) .title {
            color: #7cba01
        }

        .main-timeline4 .timeline:nth-child(4n) .year {
            border-color: #f8781f;
            color: #f8781f
        }

        .main-timeline4 .timeline:nth-child(4) .year:before {
            border-right-color: #f8781f
        }

        .main-timeline4 .timeline:nth-child(4n) .title {
            color: #f8781f
        }

        @media only screen and (max-width:1200px) {
            .main-timeline4 .year {
                top: 50%;
                transform: translateY(-50%)
            }
        }

        @media only screen and (max-width:990px) {
            .main-timeline4 .timeline {
                padding-left: 75px
            }

            .main-timeline4 .timeline:nth-child(2n) {
                padding: 0 75px 0 0
            }

            .main-timeline4 .timeline-content {
                padding-left: 130px
            }

            .main-timeline4 .timeline:nth-child(2n) .timeline-content {
                padding: 0 130px 0 0
            }

            .main-timeline4 .timeline-content:before {
                width: 68px;
                left: -68px
            }

            .main-timeline4 .timeline:nth-child(2n) .timeline-content:before {
                right: -68px
            }
        }

        @media only screen and (max-width:767px) {
            .main-timeline4 {
                overflow: visible
            }

            .main-timeline4:before {
                height: 100%;
                top: 0;
                left: 0;
                transform: translateX(0)
            }

            .main-timeline4 .timeline:before,
            .main-timeline4 .timeline:nth-child(2n):before {
                top: 60px;
                left: -9px;
                transform: translateX(0)
            }

            .main-timeline4 .timeline,
            .main-timeline4 .timeline:nth-child(even),
            .main-timeline4 .timeline:nth-child(odd) {
                width: 100%;
                float: none;
                text-align: center;
                padding: 0;
                margin: 0 0 10px
            }

            .main-timeline4 .timeline-content,
            .main-timeline4 .timeline:nth-child(2n) .timeline-content {
                padding: 0
            }

            .main-timeline4 .timeline-content:before,
            .main-timeline4 .timeline:nth-child(2n) .timeline-content:before {
                display: none
            }

            .main-timeline4 .timeline:nth-child(2n) .year,
            .main-timeline4 .year {
                position: relative;
                transform: translateY(0)
            }

            .main-timeline4 .timeline:nth-child(2n) .year:before,
            .main-timeline4 .year:before {
                border: none;
                border-right: 20px solid #f54957;
                border-top: 10px solid transparent;
                border-bottom: 10px solid transparent;
                top: 50%;
                left: -23px;
                bottom: auto;
                right: auto;
                transform: rotate(0)
            }

            .main-timeline4 .timeline:nth-child(2n) .year:before {
                border-right-color: #1ebad0
            }

            .main-timeline4 .timeline:nth-child(3n) .year:before {
                border-right-color: #7cba01
            }

            .main-timeline4 .timeline:nth-child(4n) .year:before {
                border-right-color: #f8781f
            }

            .main-timeline4 .inner-content {
                padding: 10px
            }
        }

        /******************* Timeline Demo - 5 *****************/
        .main-timeline5 {
            overflow: hidden;
            position: relative
        }

        .main-timeline5 .timeline {
            position: relative;
            margin-top: -79px
        }

        .main-timeline5 .timeline:first-child {
            margin-top: 0
        }

        .main-timeline5 .timeline-icon,
        .main-timeline5 .year {
            margin: auto;
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0
        }

        .main-timeline5 .timeline:after,
        .main-timeline5 .timeline:before {
            content: "";
            display: block;
            width: 100%;
            clear: both
        }

        .main-timeline5 .timeline:before {
            content: "";
            width: 100%;
            height: 100%;
            box-shadow: -8px 0 5px -5px rgba(0, 0, 0, .5) inset;
            position: absolute;
            top: 0;
            right: 0;
            z-index: 2
        }

        .main-timeline5 .timeline-icon {
            width: 210px;
            height: 210px;
            border-radius: 50%;
            border: 25px solid transparent;
            border-top-color: #f44556;
            border-right-color: #f44556;
            z-index: 1;
            transform: rotate(45deg)
        }

        .main-timeline5 .year {
            display: block;
            width: 110px;
            height: 110px;
            line-height: 110px;
            border-radius: 50%;
            background: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, .4);
            font-size: 30px;
            font-weight: 700;
            color: #f44556;
            text-align: center;
            transform: rotate(-45deg)
        }

        .main-timeline5 .timeline-content {
            width: 35%;
            float: right;
            background: #f44556;
            padding: 30px 20px;
            margin: 50px 0;
            z-index: 1;
            position: relative
        }

        .main-timeline5 .timeline-content:before {
            content: "";
            width: 20%;
            height: 15px;
            background: #f44556;
            position: absolute;
            top: 50%;
            left: -20%;
            z-index: -1;
            transform: translateY(-50%)
        }

        .main-timeline5 .title {
            font-size: 20px;
            font-weight: 700;
            color: #fff;
            margin: 0 0 10px
        }

        .main-timeline5 .description {
            font-size: 16px;
            color: #fff;
            line-height: 24px;
            margin: 0
        }

        .main-timeline5 .timeline:nth-child(2n):before {
            box-shadow: 8px 0 5px -5px rgba(0, 0, 0, .5) inset
        }

        .main-timeline5 .timeline:nth-child(2n) .timeline-icon {
            transform: rotate(-135deg);
            border-top-color: #e97e2e;
            border-right-color: #e97e2e
        }

        .main-timeline5 .timeline:nth-child(2n) .year {
            transform: rotate(135deg);
            color: #e97e2e
        }

        .main-timeline5 .timeline:nth-child(2n) .timeline-content {
            float: left
        }

        .main-timeline5 .timeline:nth-child(2n) .timeline-content:before {
            left: auto;
            right: -20%
        }

        .main-timeline5 .timeline:nth-child(2n) .timeline-content,
        .main-timeline5 .timeline:nth-child(2n) .timeline-content:before {
            background: #e97e2e
        }

        .main-timeline5 .timeline:nth-child(3n) .timeline-icon {
            border-top-color: #13afae;
            border-right-color: #13afae
        }

        .main-timeline5 .timeline:nth-child(3n) .year {
            color: #13afae
        }

        .main-timeline5 .timeline:nth-child(3n) .timeline-content,
        .main-timeline5 .timeline:nth-child(3n) .timeline-content:before {
            background: #13afae
        }

        .main-timeline5 .timeline:nth-child(4n) .timeline-icon {
            border-top-color: #105572;
            border-right-color: #105572
        }

        .main-timeline5 .timeline:nth-child(4n) .year {
            color: #105572
        }

        .main-timeline5 .timeline:nth-child(4n) .timeline-content,
        .main-timeline5 .timeline:nth-child(4n) .timeline-content:before {
            background: #105572
        }

        @media only screen and (max-width:1199px) {
            .main-timeline5 .timeline {
                margin-top: -103px
            }

            .main-timeline5 .timeline-content:before {
                left: -18%
            }

            .main-timeline5 .timeline:nth-child(2n) .timeline-content:before {
                right: -18%
            }
        }

        @media only screen and (max-width:990px) {
            .main-timeline5 .timeline {
                margin-top: -127px
            }

            .main-timeline5 .timeline-content:before {
                left: -2%
            }

            .main-timeline5 .timeline:nth-child(2n) .timeline-content:before {
                right: -2%
            }
        }

        @media only screen and (max-width:767px) {
            .main-timeline5 .timeline {
                margin-top: 0;
                overflow: hidden
            }

            .main-timeline5 .timeline:before,
            .main-timeline5 .timeline:nth-child(2n):before {
                box-shadow: none
            }

            .main-timeline5 .timeline-icon,
            .main-timeline5 .timeline:nth-child(2n) .timeline-icon {
                margin-top: -30px;
                margin-bottom: 20px;
                position: relative;
                transform: rotate(135deg)
            }

            .main-timeline5 .timeline:nth-child(2n) .year,
            .main-timeline5 .year {
                transform: rotate(-135deg)
            }

            .main-timeline5 .timeline-content,
            .main-timeline5 .timeline:nth-child(2n) .timeline-content {
                width: 100%;
                float: none;
                border-radius: 0 0 20px 20px;
                text-align: center;
                padding: 25px 20px;
                margin: 0 auto
            }

            .main-timeline5 .timeline-content:before,
            .main-timeline5 .timeline:nth-child(2n) .timeline-content:before {
                width: 15px;
                height: 25px;
                position: absolute;
                top: -22px;
                left: 50%;
                z-index: -1;
                transform: translate(-50%, 0)
            }
        }

        /******************* Timeline Demo - 6 *****************/
        .demo {
            background: #f2f2f2
        }

        .main-timeline6 {
            overflow: hidden;
            position: relative
        }

        .main-timeline6 .timeline {
            width: 50%;
            float: right;
            position: relative;
            z-index: 1
        }

        .main-timeline6 .timeline:after,
        .main-timeline6 .timeline:before {
            position: absolute;
            top: 50%;
            content: "";
            display: block;
            clear: both
        }

        .main-timeline6 .timeline:before {
            width: 40%;
            height: 6px;
            background: #9f005d;
            left: 0;
            z-index: -1;
            transform: translateY(-50%)
        }

        .main-timeline6 .timeline:after {
            width: 6px;
            height: 70%;
            background: #9f005d;
            left: -3px
        }

        .main-timeline6 .timeline-content {
            width: 65%;
            float: right;
            padding: 0 0 30px 30px;
            margin-right: 15px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 3px 3px 5px 6px #ccc
        }

        .main-timeline6 .timeline-content:after,
        .main-timeline6 .timeline-content:before {
            content: "";
            width: 26px;
            height: 26px;
            border-radius: 50%;
            background: #9f005d;
            position: absolute;
            top: 50%;
            left: -13px;
            z-index: 1;
            transform: translateY(-50%)
        }

        .main-timeline6 .timeline-content:after {
            left: 30%;
            transform: translate(-50%, -50%)
        }

        .main-timeline6 .year {
            display: block;
            font-size: 28px;
            font-weight: 700;
            color: #9f005d;
            text-align: center;
            padding-left: 50px
        }

        .main-timeline6 .content-inner {
            padding: 35px 15px 35px 110px;
            margin-right: -15px;
            background: #9f005d;
            border-radius: 150px 0 0 150px;
            position: relative
        }

        .main-timeline6 .content-inner:after,
        .main-timeline6 .content-inner:before {
            content: "";
            border-left: 15px solid #640026;
            border-top: 10px solid transparent;
            position: absolute;
            top: -10px;
            right: 0
        }

        .main-timeline6 .content-inner:after {
            border-top: none;
            border-bottom: 10px solid transparent;
            top: auto;
            bottom: -10px
        }

        .main-timeline6 .icon {
            width: 110px;
            height: 100%;
            text-align: center;
            position: absolute;
            top: 0;
            left: 0
        }

        .main-timeline6 .icon i {
            font-size: 60px;
            font-weight: 700;
            color: #fff;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%)
        }

        .main-timeline6 .title {
            font-size: 22px;
            font-weight: 700;
            color: #fff;
            margin: 0 0 5px
        }

        .main-timeline6 .description {
            font-size: 14px;
            color: #fff;
            margin: 0
        }

        .main-timeline6 .timeline:nth-child(2n) .icon,
        .main-timeline6 .timeline:nth-child(2n):after,
        .main-timeline6 .timeline:nth-child(2n):before {
            left: auto;
            right: 0
        }

        .main-timeline6 .timeline:nth-child(2n):after {
            right: -3px
        }

        .main-timeline6 .timeline:nth-child(2n) .timeline-content {
            float: left;
            padding: 0 30px 30px 0;
            margin: 0 0 0 15px
        }

        .main-timeline6 .timeline:nth-child(2n) .timeline-content:after,
        .main-timeline6 .timeline:nth-child(2n) .timeline-content:before {
            left: auto;
            right: -13px
        }

        .main-timeline6 .timeline:nth-child(2n) .timeline-content:after {
            right: 30%;
            margin-right: -25px
        }

        .main-timeline6 .timeline:nth-child(2n) .year {
            padding: 0 50px 0 0;
            color: #05b1ff
        }

        .main-timeline6 .timeline:nth-child(2n) .content-inner {
            padding: 35px 110px 35px 15px;
            margin: 0 0 0 -15px;
            border-radius: 0 150px 150px 0
        }

        .main-timeline6 .timeline:nth-child(2n) .content-inner:after,
        .main-timeline6 .timeline:nth-child(2n) .content-inner:before {
            border: none;
            border-right: 15px solid #027dcd;
            border-top: 10px solid transparent;
            right: auto;
            left: 0
        }

        .main-timeline6 .timeline:nth-child(2n) .content-inner:after {
            border-top: none;
            border-bottom: 10px solid transparent
        }

        .main-timeline6 .timeline:nth-child(2) {
            margin-top: 200px
        }

        .main-timeline6 .timeline:nth-child(odd) {
            margin: -190px 0 0
        }

        .main-timeline6 .timeline:nth-child(even) {
            margin-bottom: 70px
        }

        .main-timeline6 .timeline:first-child,
        .main-timeline6 .timeline:last-child:nth-child(even) {
            margin: 0
        }

        .main-timeline6 .timeline:nth-child(2n) .content-inner,
        .main-timeline6 .timeline:nth-child(2n) .timeline-content:after,
        .main-timeline6 .timeline:nth-child(2n) .timeline-content:before,
        .main-timeline6 .timeline:nth-child(2n):after,
        .main-timeline6 .timeline:nth-child(2n):before {
            background: #05b1ff
        }

        .main-timeline6 .timeline:nth-child(3n) .content-inner,
        .main-timeline6 .timeline:nth-child(3n) .timeline-content:after,
        .main-timeline6 .timeline:nth-child(3n) .timeline-content:before,
        .main-timeline6 .timeline:nth-child(3n):after,
        .main-timeline6 .timeline:nth-child(3n):before {
            background: #00a3a9
        }

        .main-timeline6 .timeline:nth-child(3n) .content-inner:after,
        .main-timeline6 .timeline:nth-child(3n) .content-inner:before {
            border-left-color: #006662
        }

        .main-timeline6 .timeline:nth-child(3n) .year {
            color: #00a3a9
        }

        .main-timeline6 .timeline:nth-child(4n) .content-inner,
        .main-timeline6 .timeline:nth-child(4n) .timeline-content:after,
        .main-timeline6 .timeline:nth-child(4n) .timeline-content:before,
        .main-timeline6 .timeline:nth-child(4n):after,
        .main-timeline6 .timeline:nth-child(4n):before {
            background: #f92534
        }

        .main-timeline6 .timeline:nth-child(4n) .content-inner:after,
        .main-timeline6 .timeline:nth-child(4n) .content-inner:before {
            border-right-color: #92070e
        }

        .main-timeline6 .timeline:nth-child(4n) .year {
            color: #f92534
        }

        @media only screen and (max-width:990px) and (min-width:768px) {
            .main-timeline6 .timeline:after {
                height: 80%
            }
        }

        @media only screen and (max-width:767px) {

            .main-timeline6 .timeline:last-child,
            .main-timeline6 .timeline:nth-child(even),
            .main-timeline6 .timeline:nth-child(odd) {
                margin: 0
            }

            .main-timeline6 .timeline {
                width: 95%;
                margin: 15px 15px 15px 0 !important
            }

            .main-timeline6 .timeline .timeline-content:after,
            .main-timeline6 .timeline .timeline-content:before,
            .main-timeline6 .timeline:after,
            .main-timeline6 .timeline:before {
                display: none
            }

            .main-timeline6 .timeline-content,
            .main-timeline6 .timeline:nth-child(2n) .timeline-content {
                width: 100%;
                float: none;
                padding: 0 0 30px 30px;
                margin: 0
            }

            .main-timeline6 .content-inner,
            .main-timeline6 .timeline:nth-child(2n) .content-inner {
                padding: 35px 15px 35px 110px;
                margin: 0 -15px 0 0;
                border-radius: 150px 0 0 150px
            }

            .main-timeline6 .timeline:nth-child(2n) .content-inner:after,
            .main-timeline6 .timeline:nth-child(2n) .content-inner:before {
                border: none;
                border-left: 15px solid #027dcd;
                border-top: 10px solid transparent;
                right: 0;
                left: auto
            }

            .main-timeline6 .timeline:nth-child(2n) .content-inner:after {
                border-top: none;
                border-bottom: 10px solid transparent
            }

            .main-timeline6 .timeline:nth-child(2n) .icon {
                top: 0;
                left: 0
            }

            .main-timeline6 .timeline:nth-child(4n) .content-inner:after,
            .main-timeline6 .timeline:nth-child(4n) .content-inner:before {
                border-left-color: #92070e
            }
        }

        /******************* Timeline Demo - 7 *****************/
        .main-timeline7 {
            overflow: hidden;
            position: relative
        }

        .main-timeline7 .timeline {
            width: 50%;
            float: left;
            z-index: 1;
            position: relative
        }

        .main-timeline7 .timeline:after,
        .main-timeline7 .timeline:before {
            content: "";
            display: block;
            clear: both
        }

        .main-timeline7 .timeline:before {
            content: "";
            width: 40px;
            height: 90%;
            background: #727cb6;
            position: absolute;
            top: 10%;
            right: -20px
        }

        .main-timeline7 .timeline:last-child:before {
            height: 0
        }

        .main-timeline7 .timeline-icon {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: #727cb6;
            overflow: hidden;
            text-align: center;
            position: absolute;
            top: 0;
            right: -40px;
            z-index: 3
        }

        .main-timeline7 .timeline-icon:before {
            content: "";
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: #fff;
            border: 2px solid #727cb6;
            box-shadow: 0 0 0 4px #a5afe4;
            margin: auto;
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0
        }

        .main-timeline7 .timeline-icon i {
            font-size: 35px;
            color: #303a3b;
            line-height: 80px;
            z-index: 1;
            position: relative
        }

        .main-timeline7 .year {
            display: block;
            padding: 0 60px 0 30px;
            font-size: 30px;
            color: #303a3b;
            text-align: right;
            border-bottom: 2px solid #303a3b;
            z-index: 2;
            position: relative
        }

        .main-timeline7 .year:before {
            content: "";
            display: block;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: #727cb6;
            border: 5px solid #fff;
            box-shadow: 0 0 0 4px #727cb6;
            margin: auto;
            position: absolute;
            bottom: -15px;
            left: 4px
        }

        .main-timeline7 .year:after {
            content: "";
            border-left: 10px solid #303a3b;
            border-top: 10px solid transparent;
            border-bottom: 10px solid transparent;
            position: absolute;
            bottom: -11px;
            left: 50px
        }

        .main-timeline7 .timeline-content {
            padding: 18px 60px 18px 40px;
            text-align: right;
            position: relative;
            z-index: 1
        }

        .main-timeline7 .timeline-content:after,
        .main-timeline7 .timeline-content:before {
            content: "";
            width: 80px;
            height: 150px;
            border-radius: 50%;
            background: #fff;
            position: absolute;
            top: -7%;
            right: 15px;
            z-index: -1
        }

        .main-timeline7 .timeline-content:after {
            left: auto;
            right: -95px
        }

        .main-timeline7 .timeline:last-child .timeline-content:after,
        .main-timeline7 .timeline:last-child .timeline-content:before {
            width: 0;
            height: 0
        }

        .main-timeline7 .title {
            font-size: 22px;
            font-weight: 700;
            color: #727cb6;
            margin-top: 0
        }

        .main-timeline7 .description {
            font-size: 15px;
            color: #7f8386;
            line-height: 25px
        }

        .main-timeline7 .timeline:nth-child(2) {
            margin-top: 140px
        }

        .main-timeline7 .timeline:nth-child(even) {
            margin-bottom: 80px
        }

        .main-timeline7 .timeline:nth-child(odd) {
            margin: -140px 0 0
        }

        .main-timeline7 .timeline:first-child,
        .main-timeline7 .timeline:last-child:nth-child(even) {
            margin: 0 !important
        }

        .main-timeline7 .timeline:nth-child(2n) .timeline-icon,
        .main-timeline7 .timeline:nth-child(2n):before {
            right: auto;
            left: -20px;
            background: #e77e21
        }

        .main-timeline7 .timeline:nth-child(2n) .timeline-icon {
            left: -40px
        }

        .main-timeline7 .timeline:nth-child(2n) .year {
            padding: 0 30px 0 60px;
            text-align: left
        }

        .main-timeline7 .timeline:nth-child(2n) .year:before {
            left: auto;
            right: 3px
        }

        .main-timeline7 .timeline:nth-child(2n) .year:after {
            border-left: none;
            border-right: 10px solid #303a3b;
            right: 50px
        }

        .main-timeline7 .timeline:nth-child(2n) .timeline-content {
            padding: 18px 40px 18px 60px;
            text-align: left
        }

        .main-timeline7 .timeline:nth-child(2n) .timeline-content:before {
            left: -95px
        }

        .main-timeline7 .timeline:nth-child(2n) .timeline-content:after {
            left: 15px
        }

        .main-timeline7 .timeline:nth-child(2n) .timeline-icon:before {
            border-color: #e77e21;
            box-shadow: 0 0 0 4px #f1a563
        }

        .main-timeline7 .timeline:nth-child(2n) .year:before {
            background: #e77e21;
            box-shadow: 0 0 0 4px #e77e21
        }

        .main-timeline7 .timeline:nth-child(2n) .title {
            color: #e77e21
        }

        .main-timeline7 .timeline:nth-child(3n) .timeline-icon,
        .main-timeline7 .timeline:nth-child(3n):before {
            background: #008b8b
        }

        .main-timeline7 .timeline:nth-child(3n) .timeline-icon:before {
            border-color: #008b8b;
            box-shadow: 0 0 0 4px #50b5b4
        }

        .main-timeline7 .timeline:nth-child(3n) .year:before {
            background: #008b8b;
            box-shadow: 0 0 0 4px #008b8b
        }

        .main-timeline7 .timeline:nth-child(3n) .title {
            color: #008b8b
        }

        .main-timeline7 .timeline:nth-child(4n) .timeline-icon,
        .main-timeline7 .timeline:nth-child(4n):before {
            background: #ed687c
        }

        .main-timeline7 .timeline:nth-child(4n) .timeline-icon:before {
            border-color: #ed687c;
            box-shadow: 0 0 0 4px #f798a8
        }

        .main-timeline7 .timeline:nth-child(4n) .year:before {
            background: #ed687c;
            box-shadow: 0 0 0 4px #ed687c
        }

        .main-timeline7 .timeline:nth-child(4n) .title {
            color: #ed687c
        }

        @media only screen and (max-width:990px) {
            .main-timeline7 .timeline {
                width: 100%
            }

            .main-timeline7 .timeline:nth-child(even),
            .main-timeline7 .timeline:nth-child(odd) {
                margin: 0
            }

            .main-timeline7 .timeline:before,
            .main-timeline7 .timeline:nth-child(2n):before {
                width: 30px;
                height: 100%;
                left: 25px
            }

            .main-timeline7 .timeline-icon,
            .main-timeline7 .timeline:nth-child(2n) .timeline-icon {
                left: 0
            }

            .main-timeline7 .timeline:nth-child(2n) .year,
            .main-timeline7 .year {
                text-align: left;
                padding: 0 30px 0 100px
            }

            .main-timeline7 .timeline:nth-child(2n) .year:before,
            .main-timeline7 .year:before {
                left: auto;
                right: 4px
            }

            .main-timeline7 .year:after {
                left: auto;
                right: 50px;
                border-right: 10px solid #303a3b;
                border-left: none
            }

            .main-timeline7 .timeline-content .description {
                color: #666
            }

            .main-timeline7 .timeline-content,
            .main-timeline7 .timeline:nth-child(2n) .timeline-content {
                text-align: left;
                padding: 18px 40px 18px 100px
            }

            .main-timeline7 .timeline-content:after,
            .main-timeline7 .timeline-content:before {
                width: 0;
                height: 0
            }
        }

        /******************* Timeline Demo - 8 *****************/
        .main-timeline8 {
            overflow: hidden;
            position: relative
        }

        .main-timeline8:after,
        .main-timeline8:before {
            content: "";
            display: block;
            width: 100%;
            clear: both
        }

        .main-timeline8:before {
            content: "";
            width: 3px;
            height: 100%;
            background: #d6d5d5;
            position: absolute;
            top: 30px;
            left: 50%
        }

        .main-timeline8 .timeline {
            width: 50%;
            float: left;
            padding-right: 30px;
            position: relative
        }

        .main-timeline8 .timeline-icon {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: #fff;
            border: 3px solid #fe6847;
            position: absolute;
            top: 5.5%;
            right: -17.5px
        }

        .main-timeline8 .year {
            display: block;
            padding: 10px;
            margin: 0;
            font-size: 30px;
            color: #fff;
            border-radius: 0 50px 50px 0;
            background: #fe6847;
            text-align: center;
            position: relative
        }

        .main-timeline8 .year:before {
            content: "";
            border-top: 35px solid #f59c8b;
            border-left: 35px solid transparent;
            position: absolute;
            bottom: -35px;
            left: 0
        }

        .main-timeline8 .timeline-content {
            padding: 30px 20px;
            margin: 0 45px 0 35px;
            background: #f2f2f2
        }

        .main-timeline8 .title {
            font-size: 19px;
            font-weight: 700;
            color: #504f54;
            margin: 0 0 10px
        }

        .main-timeline8 .description {
            font-size: 14px;
            color: #7d7b7b;
            margin: 0
        }

        .main-timeline8 .timeline:nth-child(2n) {
            padding: 0 0 0 30px
        }

        .main-timeline8 .timeline:nth-child(2n) .timeline-icon {
            right: auto;
            left: -14.5px
        }

        .main-timeline8 .timeline:nth-child(2n) .year {
            border-radius: 50px 0 0 50px;
            background: #7eda99
        }

        .main-timeline8 .timeline:nth-child(2n) .year:before {
            border-left: none;
            border-right: 35px solid transparent;
            left: auto;
            right: 0
        }

        .main-timeline8 .timeline:nth-child(2n) .timeline-content {
            text-align: right;
            margin: 0 35px 0 45px
        }

        .main-timeline8 .timeline:nth-child(2) {
            margin-top: 170px
        }

        .main-timeline8 .timeline:nth-child(odd) {
            margin: -175px 0 0
        }

        .main-timeline8 .timeline:nth-child(even) {
            margin-bottom: 80px
        }

        .main-timeline8 .timeline:first-child,
        .main-timeline8 .timeline:last-child:nth-child(even) {
            margin: 0
        }

        .main-timeline8 .timeline:nth-child(2n) .timeline-icon {
            border-color: #7eda99
        }

        .main-timeline8 .timeline:nth-child(2n) .year:before {
            border-top-color: #92efad
        }

        .main-timeline8 .timeline:nth-child(3n) .timeline-icon {
            border-color: #8a5ec1
        }

        .main-timeline8 .timeline:nth-child(3n) .year {
            background: #8a5ec1
        }

        .main-timeline8 .timeline:nth-child(3n) .year:before {
            border-top-color: #a381cf
        }

        .main-timeline8 .timeline:nth-child(4n) .timeline-icon {
            border-color: #f98d9c
        }

        .main-timeline8 .timeline:nth-child(4n) .year {
            background: #f98d9c
        }

        .main-timeline8 .timeline:nth-child(4n) .year:before {
            border-top-color: #f2aab3
        }

        @media only screen and (max-width:767px) {
            .main-timeline8 {
                overflow: visible
            }

            .main-timeline8:before {
                top: 0;
                left: 0
            }

            .main-timeline8 .timeline:nth-child(2),
            .main-timeline8 .timeline:nth-child(even),
            .main-timeline8 .timeline:nth-child(odd) {
                margin: 0
            }

            .main-timeline8 .timeline {
                width: 100%;
                float: none;
                padding: 0 0 0 30px;
                margin-bottom: 20px !important
            }

            .main-timeline8 .timeline:last-child {
                margin: 0 !important
            }

            .main-timeline8 .timeline-icon {
                right: auto;
                left: -14.5px
            }

            .main-timeline8 .year {
                border-radius: 50px 0 0 50px
            }

            .main-timeline8 .year:before {
                border-left: none;
                border-right: 35px solid transparent;
                left: auto;
                right: 0
            }

            .main-timeline8 .timeline-content {
                margin: 0 35px 0 45px
            }
        }

        /******************* Timeline Demo - 9 *****************/
        .main-timeline9 {
            position: relative
        }

        .main-timeline9:after,
        .main-timeline9:before {
            content: "";
            display: block;
            width: 100%;
            clear: both
        }

        .main-timeline9:before {
            content: "";
            width: 3px;
            height: 100%;
            background: #302124;
            position: absolute;
            top: 0;
            left: 50%
        }

        .main-timeline9 .timeline {
            width: 50%;
            float: left;
            position: relative;
            z-index: 1
        }

        .main-timeline9 .timeline:after,
        .main-timeline9 .timeline:before {
            content: "";
            display: block;
            width: 100%;
            clear: both
        }

        .main-timeline9 .timeline:first-child:before,
        .main-timeline9 .timeline:last-child:before {
            content: "";
            width: 25px;
            height: 25px;
            border-radius: 50%;
            background: #fff;
            border: 4px solid #ec8d38;
            position: absolute;
            top: 0;
            right: -14px;
            z-index: 1
        }

        .main-timeline9 .timeline:last-child:before {
            top: auto;
            bottom: 0
        }

        .main-timeline9 .timeline:last-child:nth-child(even):before {
            right: auto;
            left: -12px;
            bottom: -2px
        }

        .main-timeline9 .timeline-content {
            text-align: center;
            margin-top: 8px;
            position: relative;
            transition: all .3s ease 0s
        }

        .main-timeline9 .timeline-content:before {
            content: "";
            width: 100%;
            height: 5px;
            background: #ec8d38;
            position: absolute;
            top: 88px;
            left: 0;
            z-index: -1
        }

        .main-timeline9 .circle {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            background: #fff;
            border: 8px solid #ec8d38;
            float: left;
            margin-right: 25px;
            position: relative
        }

        .main-timeline9 .circle span:after,
        .main-timeline9 .circle span:before,
        .main-timeline9 .circle:before {
            content: "";
            margin: auto;
            position: absolute;
            right: -33px;
            bottom: 0;
            z-index: -1
        }

        .main-timeline9 .circle:before {
            width: 26px;
            height: 30px;
            background: #ec8d38;
            top: 0;
            box-shadow: inset 7px 0 9px -7px #444
        }

        .main-timeline9 .circle span {
            display: block;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            line-height: 160px;
            border: 3px solid #adabab;
            font-size: 80px;
            color: #454344
        }

        .main-timeline9 .circle span:after,
        .main-timeline9 .circle span:before {
            width: 28px;
            height: 50px;
            background: #fff;
            border-radius: 0 0 0 21px;
            top: -54px
        }

        .main-timeline9 .circle span:after {
            border-radius: 21px 0 0;
            top: 0;
            bottom: -56px
        }

        .main-timeline9 .content {
            display: table;
            padding-right: 40px;
            position: relative
        }

        .main-timeline9 .year {
            display: block;
            padding: 10px;
            margin: 10px 0 50px;
            background: #ec8d38;
            border-radius: 7px;
            font-size: 25px;
            color: #fff
        }

        .main-timeline9 .title {
            font-size: 25px;
            font-weight: 700;
            color: #ec8d38;
            margin-top: 0
        }

        .main-timeline9 .icon span:after,
        .main-timeline9 .icon span:before,
        .main-timeline9 .icon:before {
            content: "";
            height: 25px;
            margin: auto;
            position: absolute;
            bottom: 0;
            z-index: -1;
            left: -15px
        }

        .main-timeline9 .description {
            font-size: 14px;
            color: #a6a6a6;
            text-align: justify
        }

        .main-timeline9 .icon {
            width: 25px;
            height: 25px;
            border-radius: 50%;
            background: #fff;
            border: 4px solid #ec8d38;
            position: absolute;
            top: 78px;
            right: -14px
        }

        .main-timeline9 .icon:before {
            width: 15px;
            background: #ec8d38;
            top: -1px
        }

        .main-timeline9 .icon span:after,
        .main-timeline9 .icon span:before {
            width: 21px;
            background: #fff;
            border-radius: 0 0 21px;
            top: -30px
        }

        .main-timeline9 .icon span:after {
            border-radius: 0 21px 0 0;
            top: 0;
            left: -15px;
            bottom: -30px
        }

        .main-timeline9 .timeline:nth-child(2n) .circle,
        .main-timeline9 .timeline:nth-child(2n) .timeline-content {
            float: right
        }

        .main-timeline9 .timeline:nth-child(2n) .circle {
            margin: 0 0 0 25px
        }

        .main-timeline9 .timeline:nth-child(2n) .circle:before {
            right: auto;
            left: -33px;
            box-shadow: -7px 0 9px -7px #444 inset
        }

        .main-timeline9 .timeline:nth-child(2n) .circle span:after,
        .main-timeline9 .timeline:nth-child(2n) .circle span:before {
            right: auto;
            left: -33px;
            border-radius: 0 0 21px
        }

        .main-timeline9 .timeline:nth-child(2n) .circle span:after {
            border-radius: 0 21px 0 0
        }

        .main-timeline9 .timeline:nth-child(2n) .content {
            padding: 0 0 0 40px;
            margin-left: 2px
        }

        .main-timeline9 .timeline:nth-child(2n) .icon {
            right: auto;
            left: -14px
        }

        .main-timeline9 .timeline:nth-child(2n) .icon span:after,
        .main-timeline9 .timeline:nth-child(2n) .icon span:before,
        .main-timeline9 .timeline:nth-child(2n) .icon:before {
            left: auto;
            right: -15px
        }

        .main-timeline9 .timeline:nth-child(2n) .icon span:before {
            border-radius: 0 0 0 21px
        }

        .main-timeline9 .timeline:nth-child(2n) .icon span:after {
            border-radius: 21px 0 0
        }

        .main-timeline9 .timeline:nth-child(2) {
            margin-top: 180px
        }

        .main-timeline9 .timeline:nth-child(odd) {
            margin: -175px 0 0
        }

        .main-timeline9 .timeline:nth-child(even) {
            margin-bottom: 80px
        }

        .main-timeline9 .timeline:first-child,
        .main-timeline9 .timeline:last-child:nth-child(even) {
            margin: 0
        }

        @media only screen and (max-width:990px) {
            .main-timeline9:before {
                left: 100%
            }

            .main-timeline9 .timeline {
                width: 100%;
                float: none;
                margin-bottom: 20px !important
            }

            .main-timeline9 .timeline:first-child:before,
            .main-timeline9 .timeline:last-child:before {
                left: auto !important;
                right: -13px !important
            }

            .main-timeline9 .timeline:nth-child(2n) .circle {
                float: left;
                margin: 0 25px 0 0
            }

            .main-timeline9 .timeline:nth-child(2n) .circle:before {
                right: -33px;
                left: auto;
                box-shadow: 7px 0 9px -7px #444 inset
            }

            .main-timeline9 .timeline:nth-child(2n) .circle span:after,
            .main-timeline9 .timeline:nth-child(2n) .circle span:before {
                right: -33px;
                left: auto;
                border-radius: 0 0 0 21px
            }

            .main-timeline9 .timeline:nth-child(2n) .circle span:after {
                border-radius: 21px 0 0
            }

            .main-timeline9 .timeline:nth-child(2n) .content {
                padding: 0 40px 0 0;
                margin-left: 0
            }

            .main-timeline9 .timeline:nth-child(2n) .icon {
                right: -14px;
                left: auto
            }

            .main-timeline9 .timeline:nth-child(2n) .icon span:after,
            .main-timeline9 .timeline:nth-child(2n) .icon span:before,
            .main-timeline9 .timeline:nth-child(2n) .icon:before {
                left: -15px;
                right: auto
            }

            .main-timeline9 .timeline:nth-child(2n) .icon span:before {
                border-radius: 0 0 21px
            }

            .main-timeline9 .timeline:nth-child(2n) .icon span:after {
                border-radius: 0 21px 0 0
            }

            .main-timeline9 .timeline:nth-child(2),
            .main-timeline9 .timeline:nth-child(even),
            .main-timeline9 .timeline:nth-child(odd) {
                margin: 0
            }
        }

        @media only screen and (max-width:480px) {
            .main-timeline9:before {
                left: 0
            }

            .main-timeline9 .timeline:first-child:before,
            .main-timeline9 .timeline:last-child:before {
                left: -12px !important;
                right: auto !important
            }

            .main-timeline9 .circle,
            .main-timeline9 .timeline:nth-child(2n) .circle {
                width: 130px;
                height: 130px;
                float: none;
                margin: 0 auto
            }

            .main-timeline9 .timeline-content:before {
                width: 99.5%;
                top: 68px;
                left: .5%
            }

            .main-timeline9 .circle span {
                line-height: 115px;
                font-size: 60px
            }

            .main-timeline9 .circle span:after,
            .main-timeline9 .circle span:before,
            .main-timeline9 .circle:before,
            .main-timeline9 .icon {
                display: none
            }

            .main-timeline9 .content,
            .main-timeline9 .timeline:nth-child(2n) .content {
                padding: 0 10px
            }

            .main-timeline9 .year {
                margin-bottom: 15px
            }

            .main-timeline9 .description {
                text-align: center
            }
        }

        /******************* Timeline Demo - 10 *****************/
        .main-timeline10:after,
        .main-timeline10:before {
            content: "";
            display: block;
            width: 100%;
            clear: both
        }

        .main-timeline10 .timeline {
            padding: 0;
            display: -webkit-inline-box
        }

        .main-timeline10 .col-md-3 {
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 24%
        }

        .main-timeline10 .timeline-inner {
            text-align: center;
            margin: 20px 20px 35px 35px;
            position: relative
        }

        .main-timeline10 .timeline-inner:after {
            content: "";
            width: 120%;
            height: 3px;
            background: #555;
            position: absolute;
            bottom: 0;
            left: 10%
        }

        .main-timeline10 .timeline:last-child .timeline-inner:after {
            width: 0
        }

        .main-timeline10 .year {
            background: #58b25e;
            padding: 5px 0;
            border-radius: 30px 0;
            font-size: 26px;
            font-weight: 700;
            color: #fff;
            z-index: 1;
            position: relative
        }

        .main-timeline10 .year:after,
        .main-timeline10 .year:before {
            position: absolute;
            top: -19px;
            content: ""
        }

        .main-timeline10 .year:before {
            right: 0;
            border: 10px solid transparent;
            border-bottom: 10px solid #58b25e;
            border-right: 10px solid #58b25e
        }

        .main-timeline10 .year:after {
            width: 25px;
            height: 19px;
            border-radius: 0 0 20px;
            background: #fff;
            right: 1px
        }

        .main-timeline10 .timeline-content {
            padding: 10px 10px 30px;
            border-left: 3px solid #58b25e;
            position: relative
        }

        .main-timeline10 .timeline-content:before {
            content: "";
            position: absolute;
            top: 0;
            left: -1px;
            border: 10px solid transparent;
            border-top: 10px solid #58b25e;
            border-left: 10px solid #58b25e
        }

        .main-timeline10 .timeline-content:after {
            content: "";
            width: 25px;
            height: 19px;
            border-radius: 20px 0 0;
            background: #fff;
            position: absolute;
            top: 0;
            left: 0
        }

        .main-timeline10 .post {
            font-size: 26px;
            color: #333
        }

        .main-timeline10 .description {
            font-size: 14px;
            color: #333
        }

        .main-timeline10 .timeline-icon {
            width: 70px;
            height: 70px;
            line-height: 65px;
            border-radius: 50%;
            border: 5px solid #58b25e;
            background: #fff;
            font-size: 30px;
            color: #555;
            z-index: 1;
            position: absolute;
            bottom: -35px;
            left: -35px
        }

        .main-timeline10 .timeline:nth-child(2n) .year {
            background: #9f84c4
        }

        .main-timeline10 .timeline:nth-child(2n) .year:before {
            border-bottom-color: #9f84c4;
            border-right-color: #9f84c4
        }

        .main-timeline10 .timeline:nth-child(2n) .timeline-content {
            border-left-color: #9f84c4
        }

        .main-timeline10 .timeline:nth-child(2n) .timeline-content:before {
            border-top-color: #9f84c4;
            border-left-color: #9f84c4
        }

        .main-timeline10 .timeline:nth-child(2n) .timeline-icon {
            border-color: #9f84c4
        }

        .main-timeline10 .timeline:nth-child(3n) .year {
            background: #f35958
        }

        .main-timeline10 .timeline:nth-child(3n) .year:before {
            border-bottom-color: #f35958;
            border-right-color: #f35958
        }

        .main-timeline10 .timeline:nth-child(3n) .timeline-content {
            border-left-color: #f35958
        }

        .main-timeline10 .timeline:nth-child(3n) .timeline-content:before {
            border-top-color: #f35958;
            border-left-color: #f35958
        }

        .main-timeline10 .timeline:nth-child(3n) .timeline-icon {
            border-color: #f35958
        }

        .main-timeline10 .timeline:nth-child(4n) .year {
            background: #e67e49
        }

        .main-timeline10 .timeline:nth-child(4n) .year:before {
            border-bottom-color: #e67e49;
            border-right-color: #e67e49
        }

        .main-timeline10 .timeline:nth-child(4n) .timeline-content {
            border-left-color: #e67e49
        }

        .main-timeline10 .timeline:nth-child(4n) .timeline-content:before {
            border-top-color: #e67e49;
            border-left-color: #e67e49
        }

        .main-timeline10 .timeline:nth-child(4n) .timeline-icon {
            border-color: #e67e49
        }

        @media only screen and (max-width:990px) {
            .main-timeline10 .timeline-inner:after {
                width: 110%
            }

            .main-timeline10 .timeline:nth-child(2n) .timeline-inner:after {
                width: 0
            }
        }

        @media only screen and (max-width:767px) {
            .main-timeline10 .timeline {
                margin-bottom: 50px
            }

            .main-timeline10 .timeline-inner:after,
            .main-timeline10 .timeline:nth-child(2n) .timeline-inner:after {
                width: 100%;
                height: 3px;
                left: 0
            }
        }

        /******************* Timeline Demo - 11 *****************/
        .main-timeline11 {
            overflow: hidden;
            position: relative
        }

        .main-timeline11:before {
            content: "";
            width: 7px;
            height: 100%;
            background: #909090;
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%)
        }

        .main-timeline11 .timeline {
            width: 50%;
            padding-left: 50px;
            float: right;
            position: relative
        }

        .main-timeline11 .timeline:after,
        .main-timeline11 .timeline:before {
            position: absolute;
            content: "";
            top: 50%;
            transform: translateY(-50%)
        }

        .main-timeline11 .timeline:before {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: #909090;
            border: 7px solid #fff;
            left: -15px
        }

        .main-timeline11 .timeline:after {
            display: block;
            border-right: 30px solid #ee4423;
            border-top: 20px solid transparent;
            border-bottom: 20px solid transparent;
            left: 24px
        }

        .main-timeline11 .timeline-content {
            display: block;
            padding: 25px;
            border-radius: 100px;
            background: #ee4423;
            position: relative
        }

        .main-timeline11 .timeline-content:after,
        .main-timeline11 .timeline-content:before {
            content: "";
            display: block;
            width: 100%;
            clear: both
        }

        .main-timeline11 .timeline-content:hover {
            text-decoration: none
        }

        .main-timeline11 .inner-content {
            width: 70%;
            float: right;
            padding: 15px 20px 15px 15px;
            background: #fff;
            border-radius: 0 100px 100px 0;
            color: #ee4423
        }

        .main-timeline11 .year {
            display: inline-block;
            font-size: 50px;
            font-weight: 600;
            color: #fff;
            position: absolute;
            top: 50%;
            left: 7%;
            transform: translateY(-50%)
        }

        .main-timeline11 .title {
            font-size: 24px;
            font-weight: 600;
            text-transform: uppercase;
            margin: 0 0 5px
        }

        .main-timeline11 .description {
            font-size: 14px;
            margin: 0 0 5px
        }

        .main-timeline11 .timeline:nth-child(2n) {
            padding: 0 50px 0 0
        }

        .main-timeline11 .timeline:nth-child(2n) .year,
        .main-timeline11 .timeline:nth-child(2n):before {
            left: auto;
            right: -15px
        }

        .main-timeline11 .timeline:nth-child(2n) .year {
            right: 7%
        }

        .main-timeline11 .timeline:nth-child(2n):after {
            border-right: none;
            border-left: 30px solid #ee4423;
            left: auto;
            right: 24px;
            border-left-color: #f68829
        }

        .main-timeline11 .timeline:nth-child(2n) .inner-content {
            float: none;
            border-radius: 100px 0 0 100px;
            text-align: right
        }

        .main-timeline11 .timeline:nth-child(2) {
            margin-top: 130px
        }

        .main-timeline11 .timeline:nth-child(odd) {
            margin: -130px 0 0
        }

        .main-timeline11 .timeline:nth-child(even) {
            margin-bottom: 80px
        }

        .main-timeline11 .timeline:first-child,
        .main-timeline11 .timeline:last-child:nth-child(even) {
            margin: 0
        }

        .main-timeline11 .timeline:nth-child(2n) .timeline-content {
            background: #f68829
        }

        .main-timeline11 .timeline:nth-child(2n),
        .main-timeline11 .timeline:nth-child(2n) .inner-content {
            color: #f68829
        }

        .main-timeline11 .timeline:nth-child(3n) .timeline-content {
            background: #2991d0
        }

        .main-timeline11 .timeline:nth-child(3n),
        .main-timeline11 .timeline:nth-child(3n) .inner-content {
            color: #2991d0
        }

        .main-timeline11 .timeline:nth-child(3n):after {
            border-right-color: #2991d0
        }

        .main-timeline11 .timeline:nth-child(4n) .timeline-content {
            background: #9361aa
        }

        .main-timeline11 .timeline:nth-child(4n),
        .main-timeline11 .timeline:nth-child(4n) .inner-content {
            color: #9361aa
        }

        .main-timeline11 .timeline:nth-child(4n):after {
            border-left-color: #9361aa
        }

        .main-timeline11 .timeline:nth-child(5n) .timeline-content {
            background: #a7be26
        }

        .main-timeline11 .timeline:nth-child(5n),
        .main-timeline11 .timeline:nth-child(5n) .inner-content {
            color: #a7be26
        }

        .main-timeline11 .timeline:nth-child(5n):after {
            border-right-color: #a7be26
        }

        @media only screen and (max-width:1200px) {
            .main-timeline11 .inner-content {
                width: 80%
            }

            .main-timeline11 .year {
                font-size: 45px;
                left: 10px;
                transform: translateY(-50%) rotate(-90deg)
            }

            .main-timeline11 .timeline:nth-child(2n) .year {
                right: 10px
            }
        }

        @media only screen and (max-width:990px) {
            .main-timeline11 .year {
                font-size: 40px;
                left: 0
            }

            .main-timeline11 .timeline:nth-child(2n) .year {
                right: 0
            }
        }

        @media only screen and (max-width:767px) {

            .main-timeline11 .timeline:before,
            .main-timeline11:before {
                left: 10px;
                transform: translateX(0)
            }

            .main-timeline11 .timeline:nth-child(2n):after {
                border-left: none;
                border-right: 30px solid #ee4423;
                right: auto;
                left: 24px;
                border-right-color: #f68829
            }

            .main-timeline11 .timeline,
            .main-timeline11 .timeline:nth-child(even),
            .main-timeline11 .timeline:nth-child(odd) {
                width: 100%;
                float: none;
                margin: 0 0 30px
            }

            .main-timeline11 .timeline:last-child {
                margin-bottom: 0
            }

            .main-timeline11 .timeline:nth-child(2n) {
                padding: 0 0 0 50px
            }

            .main-timeline11 .timeline:before,
            .main-timeline11 .timeline:nth-child(2n):before {
                left: -2px
            }

            .main-timeline11 .inner-content {
                width: 85%
            }

            .main-timeline11 .timeline:nth-child(2n) .inner-content {
                float: right;
                border-radius: 0 100px 100px 0;
                text-align: left
            }

            .main-timeline11 .timeline:nth-child(2n) .year {
                right: auto;
                left: 0
            }

            .main-timeline11 .timeline:nth-child(3n):after {
                border-left-color: #2991d0
            }

            .main-timeline11 .timeline:nth-child(4n):after {
                border-right-color: #9361aa
            }

            .main-timeline11 .timeline:nth-child(5n):after {
                border-left-color: #a7be26
            }
        }

        @media only screen and (max-width:479px) {
            .main-timeline11 .timeline-content {
                padding: 15px
            }

            .main-timeline11 .inner-content {
                width: 80%
            }

            .main-timeline11 .year {
                font-size: 30px
            }
        }

        /******************* Timeline Demo - 12 *****************/
        .main-timeline12 .timeline {
            padding: 0 2px;
            position: relative;
            display: inline-block
        }

        .main-timeline12 .col-md-2 {
            -ms-flex: 0 0 15.666667%;
            flex: 0 0 15.666667%;
            max-width: 15.666667%
        }

        .main-timeline12 .timeline-icon {
            display: block;
            text-align: center;
            padding: 20px 0 55px;
            z-index: 1;
            position: relative
        }

        .main-timeline12 .timeline:nth-child(2n) .timeline-icon {
            padding: 55px 0 20px
        }

        .main-timeline12 .timeline-icon:before {
            content: "";
            width: 1px;
            height: 75%;
            background: #39ae99;
            margin: 0 auto;
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: -1;
            transition: all .3s ease 0s
        }

        .main-timeline12 .timeline:nth-child(2n) .timeline-icon:before {
            bottom: auto;
            top: 0
        }

        .main-timeline12 .timeline:hover .timeline-icon:before {
            background: #555
        }

        .main-timeline12 .timeline-icon i {
            width: 45px;
            height: 45px;
            line-height: 45px;
            border-radius: 50%;
            background: #39ae99;
            font-size: 14px;
            color: #fff;
            transition: all .3s ease 0s
        }

        .main-timeline12 .timeline:hover .timeline-icon i {
            background: #555;
            animation: icon-load 2.5s ease 0s infinite
        }

        .main-timeline12 .border {
            height: 15px;
            background: #39ae99;
            margin-bottom: 0;
            transition: all .3s ease 0s
        }

        .main-timeline12 .timeline:hover .border {
            background: #555
        }

        .main-timeline12 .timeline:first-child .border {
            border-radius: 4px 0 0 4px
        }

        .main-timeline12 .timeline:last-child .border {
            border-radius: 0 4px 4px 0
        }

        .main-timeline12 .timeline:nth-child(2n) .border {
            margin: 18px 0 0
        }

        .main-timeline12 .timeline-content {
            padding: 15px;
            border: 1px solid #ddd;
            background: #f9f9f9;
            border-radius: 3px;
            transition: all .3s ease 0s
        }

        .main-timeline12 .timeline:hover .timeline-content {
            background: #555
        }

        .main-timeline12 .title {
            font-size: 18px;
            font-weight: 700;
            color: #39ae99;
            text-transform: uppercase;
            margin: 0 0 10px;
            transition: all .3s ease 0s
        }

        .main-timeline12 .timeline:hover .title {
            color: #fff
        }

        .main-timeline12 .timeline-content .description {
            font-size: 14px;
            color: #888;
            margin: 0;
            transition: all .3s ease 0s
        }

        .main-timeline12 .timeline:hover .description {
            color: #fff
        }

        @keyframes icon-load {
            0% {
                transform: rotate(-12deg)
            }

            8% {
                transform: rotate(12deg)
            }

            10%,
            28%,
            30%,
            48%,
            50%,
            68% {
                transform: rotate(24deg)
            }

            18%,
            20%,
            38%,
            40%,
            58%,
            60% {
                transform: rotate(-24deg)
            }

            100%,
            75% {
                transform: rotate(0)
            }
        }

        @media only screen and (max-width:990px) {
            .main-timeline12 .timeline {
                margin-bottom: 20px
            }
        }

        @media only screen and (max-width:767px) {
            .main-timeline12 .timeline-icon {
                padding-top: 0
            }

            .main-timeline12 .timeline:nth-child(2n) .timeline-icon {
                padding-bottom: 0
            }

            .main-timeline12 .border {
                margin-bottom: 10px
            }

            .main-timeline12 .timeline:nth-child(2n) .border {
                margin: 10px 0 0
            }

            .main-timeline12 .timeline-content {
                text-align: center
            }
        }

        .navbar-right {
  float: right;
}

header.header2 .navbar-collapse, header.header3 .navbar-collapse {
    min-width: 140px;
  direction: rtl;
}
    </style>

    <style>
         @media only screen and (max-width: 720px) {
            .navbar-header{
                width: 100%
            }
         }
         @media only screen and (min-width: 768px)
{header.header2.sticky {
  height: 160px !important;
}}
    </style>
    @yield('style')

</head>
