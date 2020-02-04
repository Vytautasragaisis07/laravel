<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="{!! asset ('https://fonts.googleapis.com/css?family=Nanum+Gothic:400,700,800') !!}" rel="stylesheet">
    <link rel="stylesheet" href="{!! asset ('fonts/icomoon/style.css') !!}">
    <link rel="stylesheet" href="{!! asset ('css/bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset ('css/magnific-popup.css') !!}">
    <link rel="stylesheet" href="{!! asset ('css/jquery-ui.css') !!}">
    <link rel="stylesheet" href="{!! asset ('css/owl.carousel.min.css') !!}">
    <link rel="stylesheet" href="{!! asset ('css/owl.theme.default.min.css') !!}">
    <link rel="stylesheet" href="{!! asset ('css/bootstrap-datepicker.css') !!}">
    <link rel="stylesheet" href="{!! asset ('fonts/flaticon/font/flaticon.css') !!}">
    <link rel="stylesheet" href="{!! asset ('css/aos.css') !!}">
    <link rel="stylesheet" href="{!! asset ('css/rangeslider.css') !!}">
    <link rel="stylesheet" href="{!! asset ('css/style.css') !!}" />
    <title>Template</title>
</head>
<body>
<div class="site-wrap">

    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

@include('skelbimai/_partials/header')
@yield('content')
@include('skelbimai/_partials/newletter')
@include('skelbimai/_partials/footer')

</div>

<script src="{!! asset ('js/jquery-3.3.1.min.js') !!}"></script>
<script src="{!! asset ('js/jquery-migrate-3.0.1.min.js') !!}"></script>
<script src="{!! asset ('js/jquery-ui.js') !!}"></script>
<script src="{!! asset ('js/popper.min.js') !!}"></script>
<script src="{!! asset ('js/bootstrap.min.js') !!}"></script>
<script src="{!! asset ('js/owl.carousel.min.js') !!}"></script>
<script src="{!! asset ('js/jquery.stellar.min.js') !!}"></script>
<script src="{!! asset ('js/jquery.countdown.min.js') !!}"></script>
<script src="{!! asset ('js/jquery.magnific-popup.min.js') !!}"></script>
<script src="{!! asset ('js/bootstrap-datepicker.min.js') !!}"></script>
<script src="{!! asset ('js/aos.js') !!}"></script>
<script src="{!! asset ('js/rangeslider.min.js') !!}"></script>
<script src="{!! asset ('js/main.js') !!}"></script>


<script src="js/main.js"></script>
</body>
</html>