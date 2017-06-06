@section('header')
    <div class="demo_changer">
        <div class="demo-icon">
            <i class="fa fa-cog  fa-2x"></i>
        </div><!-- end opener icon -->
        <div class="form_holder">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="predefined_styles">
                        <h4>رنگ را انتخاب کنید</h4>
                        <!-- MODULE #3 -->
                        <a href="blueberry" class="styleswitch"><img src="{{ asset('img/switcher/images/icons/blueberry.png') }}" alt=""></a>
                        <a href="justgreen" class="styleswitch"><img src="{{ asset('img/switcher/images/icons/justgreen.png') }}" alt=""></a>
                        <a href="limeblue"  class="styleswitch"><img src="{{ asset('img/switcher/images/icons/limeblue.png') }}" alt=""></a>
                        <a href="orangejuice"  class="styleswitch"><img src="{{ asset('img/switcher/images/icons/orangejuice.png') }}" alt=""></a>
                        <a href="goldenberry" class="styleswitch"><img src="{{ asset('img/switcher/images/icons/goldenberry.png') }}" alt=""></a>
                        <h4>عرض</h4>
                        <a href="boxed" class="btn styleswitch">باکس</a>
                        <a href="full" class="btn styleswitch">تمام صفحه</a>
                    </div><!-- end predefined_styles -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end form_holder -->
    </div><!-- end demo_changer -->
    <!-- End Switcher -->

    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered">
                    <i class="fa fa-bars"></i>
                </button>
                <div class="navbar-brand navbar-brand-centered page-scroll"><a href="#page-top"><img src="{{asset('img/logo1.png')}}" alt=""></a></div>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-brand-centered">
                <ul class="nav navbar-nav page-scroll" style="list-style: none">
                    <li><a href="{{route('home.index')}}">خانه</a></li>
                    <!--<li><a href="#newsletter">نظرات</a></li>-->
                    <li><a href="{{route('about.page')}}">درباره ما</a></li>
                    <!--<li><a href="#gallery">گالری</a></li>-->
                    <li><a href="{{route('contact.page')}}">تماس باما</a></li>
                </ul>
                <ul class="nav navbar-nav  page-scroll navbar-right">
                    @if(Session::has('customer_name'))
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{session()->get('customer_name')}}<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('show.user.profile')}}">پروفایل</a></li>
                                @if(Cart::content()->count() > 0)
                                    <li><a href="{{route('show.restaurant.page', [session()->get('restaurant_name')])}}">سفارش شما : {{Cart::content()->count()}}</a></li>
                                @endif
                                <li><a href="{{route('user.logout')}}">خروج</a></li>
                            </ul>
                        </li>
                    @endif
                    <li><a href="{{route('restaurant.register.page')}}">ثبت رستوران</a></li>
                    <li><a href="{{route('restaurants.list')}}#/lists">رستوران ها</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
@endsection