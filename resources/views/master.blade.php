<!doctype html>
<html lang="fa" ng-app="RestaurantApp" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'صفحه نخست')  ::هاي پُرس - راهنماي رستوران هاي کشور</title>

    <meta name="description" content="های پرس,های پرس سریعترین راه سفارش آنلاین غذا در ایران است. منو عکس دار رستوران های اطرافتان را بر اساس محله خود به راحتی مشاهده کنید و سفارش دهید" />
    <meta name="keywords" content= "های پرس,سفارش آنلاین غذا,بهترین رستوران ها,رستوران های ایرانی,رستوران ایتالیایی,فست فود,رستوران های ایران,رستوران های کرج,رستوران های تهران,رستوران های رشت" />
    <meta name="author" content="هاي پُرس"/>
    <meta name="copyright" content="هاي پُرس"/>
    <meta name="application-name" content="هاي پُرس"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{ Html::style('css/home/all.css') }}
    {{ Html::style('css/angular-toastr.min.css') }}
    {{ Html::style('css/sweetalert.css') }}

            <!-- Color Style CSS -->
    <link href="{{ asset('assets/css/home/styles/goldenberry.css') }}" rel="stylesheet">
    <link rel="stylesheet" id="switcher-css" type="text/css" href="{{ asset('assets/css/home/switcher/css/switcher.css') }}" media="all" />
    <!--Alternate CSS -->
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/css/home/styles/goldenberry.css') }}" title="goldenberry" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/css/home/styles/blueberry.css') }}" title="blueberry" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/css/home/styles/justgreen.css') }}" title="justgreen" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/css/home/styles/limeblue.css') }}" title="limeblue" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/css/home/styles/orangejuice.css') }}" title="orangejuice" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/css/home/switcher/css/boxed.css') }}" title="boxed" media="all" />
    <link rel="icon" type="image/x-icon" href="{{asset('favicon.ico')}}">

</head>
<body class="boxed" @yield('id') id="@yield('login-page-background')" ng-cloak="">
@yield('header')
@yield('index')
@yield('footer')

{{ Html::script('js/all.js') }}
{{ Html::script('js/sweetalert.min.js') }}
{{ Html::script('js/vendor.js') }}
{{ Html::script('js/scripts.js') }}

<script>
    $(document).ready(function () {
        $("#sortingby1").click(function () {
            if($("#col1").fadeOut()){
                $("#col1").fadeIn();
                $("#col2").fadeOut();
            }
            else {

            }
        });
        $("#sortingby2").click(function () {
            if($("#col1").fadeIn()){
                $("#col1").fadeOut();
                $("#col2").fadeIn();
            }
            else {

            }
        });
    });
    function showNewComment() {
        $("#newComments").slideToggle();
    }
    function showNewFolder() {
        $("#newFavFolder").slideToggle();
    }
</script>
@yield('script')
</body>
</html>