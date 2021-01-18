<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="{{url('public')}}/src_client/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{url('public')}}/src_client/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{url('public')}}/src_client/css/prettyPhoto.css" rel="stylesheet">
    <link href="{{url('public')}}/src_client/css/price-range.css" rel="stylesheet">
    <link href="{{url('public')}}/src_client/css/animate.css" rel="stylesheet">
    <link href="{{url('public')}}/src_client/css/main.css" rel="stylesheet">
    <link href="{{url('public')}}/src_client/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{url('public')}}/src_client/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{url('public')}}/src_client/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{url('public')}}/src_client/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{url('public')}}/src_client/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="{{url('public')}}/src_client/images/ico/apple-touch-icon-57-precomposed.png">
    @stack('style')
</head>
<!--/head-->

<body>
    @include('client.section.header')
    <!--/header-->

    @include('client.section.carousel')
    <!--/slider-->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    @include('client.section.sidebar')
                </div>
                

                <div class="col-sm-9 padding-right">
                @yield('content')
                    <!--features_items-->
                </div>
            </div>
        </div>
    </section>
    @include('client.section.footer')
    <!--/Footer-->
    <script src="{{url('public')}}/src_client/js/jquery.js"></script>
    <script src="{{url('public')}}/src_client/js/bootstrap.min.js"></script>
    <script src="{{url('public')}}/src_client/js/jquery.scrollUp.min.js"></script>
    <script src="{{url('public')}}/src_client/js/price-range.js"></script>
    <script src="{{url('public')}}/src_client/js/jquery.prettyPhoto.js"></script>
    <script src="{{url('public')}}/src_client/js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @stack('script')
    <script>
        $(".table-datatable").DataTable();
    </script>
</body>

</html>
