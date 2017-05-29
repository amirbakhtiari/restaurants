@extends('seller.app')
@section('title', 'پنل مدیریتی رستوران')
@section('dashboard')
    <style type="text/css">
        #map_canvas {
            height: 260px;
            width: 100%;
            margin: 0px;
            background-color: #cccccc;
        }
        #map_canvas {
            position: relative;
        }
        .angular-google-map-container {
            position: absolute;
            top: 0;
            bottom: 0;
            right: 0;
            left: 0;
        }
    </style>
    <div ng-controller="MainCtrl">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><span> </span>مدیریت</a>
                    <ul class="user-menu">
                        <li class="dropdown pull-right">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> کاربر <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> پروفایل</a></li>
                                <li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> تنظیمات</a></li>
                                <li><a href="{{route('seller.logout')}}"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> خروج</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </div><!-- /.container-fluid -->
        </nav>

        <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
            <form role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="جستجو">
                </div>
            </form>
            <ul class="nav menu">
                <li ng-class="{'active' : 1}"><a ui-sref="dashboard"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> داشبورد</a></li>
                <li><a ui-sref="products"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> محصولات</a></li>
                <li><a ui-sref="setting"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"/></svg> تنظیمات رستوران</a></li>

                <!--<li><a href="charts.html"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> پیام ها</a></li>
                <li><a href="tables.html"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> تنظیمات</a></li>
                <li><a href="forms.html"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Forms</a></li>
                <li><a href="panels.html"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Alerts &amp; Panels</a></li>
                <li><a href="icons.html"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> اسلایدر</a></li>
                <li class="parent ">
                    <a href="#">
                        <span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Dropdown
                    </a>
                    <ul class="children collapse" id="sub-item-1">
                        <li>
                            <a class="" href="#">
                                <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 1
                            </a>
                        </li>
                        <li>
                            <a class="" href="#">
                                <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 2
                            </a>
                        </li>
                        <li>
                            <a class="" href="#">
                                <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 3
                            </a>
                        </li>
                    </ul>
                </li>-->
                <li role="presentation" class="divider"></li>
                <!--<li><a href="login.html"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Login Page</a></li>-->
                <li><a href="{{route('seller.logout')}}"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> خروج</a></li>
            </ul>

        </div><!--/.sidebar-->

        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-0 main">
            <div class="row">
                <ol class="breadcrumb">
                    <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                    <li class="active" ng-bind="title"></li>
                </ol>
            </div><!--/.row-->

            <ui-view></ui-view>
        </div>	<!--/.main-->
    </div>
    {{ Html::script('seller/js/admin.js') }}
    {{ Html::script('js/ckeditor/ckeditor.js') }}
    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWuNU-Ad-VKvL1D2FKLLujPV6pXq1vjF0"></script>
@endsection
