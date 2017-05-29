<!doctype html>
<html lang="fa" dir="rtl" ng-app="SellerApp">
<head>
    <meta charset="UTF-8">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width">
    <title>@yield('title', 'ورود رستوران دارن')</title>
    {{ Html::style('seller/css/all.css') }}
</head>
<body>
@yield('content')
@yield('dashboard')
{{ Html::script('seller/js/jquery-1.11.1.min.js') }}
{{ Html::script('seller/js/chart.min.js') }}
{{ Html::script('seller/js/easypiechart.js') }}
{{ Html::script('seller/js/bootstrap-datepicker.js') }}
{{ Html::script('seller/js/all.js') }}
</body>
</html>