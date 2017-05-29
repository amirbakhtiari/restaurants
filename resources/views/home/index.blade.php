@extends('master')
@include('home.header')
@section('index')

        <!-- Full Page Image Background Slider -->
<style>
    .angular-google-map-container { height: 300px; }
</style>
<div class="slider-container" ng-controller="IndexController">
    @if(!Session::has('customer_login'))
        <ul id="slider-container-ul">
            <li><a href="{{route('user.login.page')}}" class="btn btn-default">بخش کاربران</a></li>
        </ul>
    @else
        <li><a href="{{route('show.user.profile')}}" id="slider-container-a" class="btn btn-default">خوش آمدی  {{Session::get('customer_name')}}</a></li>
    @endif
    <div class="slider-search">
        <!--<div class="sentence">شعار سایت</div>-->
        <div class="search">
            <div class="dropdown">
                <button id="button-menu" class="dropdown-toggle" type="button" data-toggle="dropdown"><span class="fa fa-coffee"></span></button>
                <ul class="dropdown-menu pull-right search-sub-menu">
                    <li ><a href="#">همه </a></li>
                    <li class="divider"></li>
                    <li><a href="#">رستوران</a></li>
                    <li><a href="#">کافی شاپ</a></li>
                </ul>
            </div>
            <form method="GET" action="{{ route('restaurants.list') }}">
                <input class="form-control" type="text" placeholder="خوراک مورد علاقه محدوده جغرافیایی رستوران مورد نظر و هر چه میخواهید را جستجو کنید." name="search">
                <input type="submit" value="جستجو" class="btn btn-default" />
            </form>
        </div>
        <!--<input type="button" value="جسجوی پیشرفته" class="btn btn-default" />-->
    </div>

    <div class="sliderF">
        <!-- Slide 1 -->
        <div class="slide slide-0 active wow fadeInUp" data-wow-duration="3s" data-wow-delay=".3s"  style="background-image:url('img/slide1.jpg')">
            <div class="slide__bg"></div>
        </div>


    </div>
    <div id="map-modal" class="modal fade" ng-controller="MapController">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">رستوران های اطراف شما</h4>
                </div>
                <div class="modal-body">
                    <ui-gmap-google-map center="map.center" zoom="map.zoom" draggable="true" options="map.options" events="map.events" bounds="map.bounds">
                        <ui-gmap-markers ng-model="restaurantMarkers" coords="'self'" icon="'icon'"></ui-gmap-markers>
                    </ui-gmap-google-map>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">بستن نقشه</button>
                </div>
            </div>
        </div>
    </div>


    <div id="slider-container-ul-map">
        <li data-toggle="modal"><a class="btn btn-default" ng-click="aroundRestaurants()"><span class="fa fa-location-arrow"></span> </a></li>
    </div>
</div>


<!--/ Slider ends -->

<section id="services" class="pattern">
    <div class="container-fluid" id="service-container">
        <div id="owl-team1" class="">
            <!-- member 1-->
            @foreach($restaurants as $restaurant)
                <div class="col-lg-12">
                    <div class="team">
                        @if($restaurant->oPicture  == null)
                            <img ng-src="{{'img/noimage.jpg'}}"/>
                        @else
                            <img src="data:image/jpeg;base64,{{base64_encode($restaurant->oPicture)}}" alt="{{$restaurant->sName}}"/>
                            @endif
                                    <!-- Caption-->
                            <div class="teamcaption">
                                <p>{{$restaurant->sAddress}}</p>
                                <!-- Icons
                                <div class="icons"><a href="#" title=""><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>-->
                            </div>
                            <a href="{{route('show.restaurant.page', $restaurant->sCompany)}}"><div class="teamname"><h5>{{$restaurant->sName}}</h5></div></a>
                    </div>
                    <!-- /team-->
                </div>
            @endforeach
        </div>
    </div>
</section>
<section id="offer" class="small-section">
</section>
<!-- / section ends-->
<!-- Section Newsletter -->
<section id="newsletter" class="small-section" data-0="background-position:82% 0%,82% 0%;" data-end="background-position:82% 100px,82% 0%;">
    <div class="container">
        <div class="col-md-12 " style="text-align: center">
            <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".9s">
                <img src='img/delivery-truck.png' class="img-responsive img-thumbnail img-circle">
                <p style="text-align: center;color: #fff">ما شما رو از مراحل تهیه و ارسال سفارش مطلع می‌کنیم و با روش تند و سریع های پرس ارسال می‌کنیم.</p>
            </div>
            <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                <img src='img/credit-card.png' class="img-responsive img-thumbnail img-circle">
                <p style="text-align: center;color: #fff">شما می‌تونید با کارت‌های عضو شتاب یا از طریق موجودی حساب و یا هنگام تحویل در محل پرداخت خود را انجام دهید.</p>

            </div>
            <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                <img src='img/menu.png' class="img-responsive img-thumbnail img-circle">
                <p style="text-align: center;color: #fff">رستوران مورد نظرتون رو انتخاب کنید و با مشاهده منوی رستوران غذاهای مورد نظرتون رو انتخاب کنید.</p>

            </div>
            <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                <img src='img/map.png' class="img-responsive img-thumbnail img-circle">
                <p style="text-align: center;color: #fff">شهر و مکان خودتون رو بما بگید تا لیست رستوران‌های اطراف شما رو نمایش بدیم.</p>
            </div>

        </div>
        <!-- /col-md-6 -->
    </div>
    <!-- /container-->
</section>
<!-- Section Ends-->

<!-- Section Testimonials -->
<section id="testimonials" data-0="background-position:82% 0%,82% 0%;" data-end="background-position:82% 100px,82% 0%">
    <div class="container">
        <div class="col-md-12" style="margin-top: -180px">
            <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInRight" style="margin-top: 150px;text-align: center" id="#img-register"  data-wow-duration="1s" data-wow-delay=".5s"><h6>با ثبت رستوران خود در های پرس، بصورت آنلاین سفارش بگیرید</h6>
                <a href="{{route('restaurant.register.page')}}" class="btn btn-primary btn-lg outline">ثبت رستوران </a>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                <img src='img/chef-restaurant.png' class="img-responsive">
            </div>
        </div>
    </div>

    <div class="container-fluid">


        <div id="owl-testimonials" class="owl-carousel">
            <!-- testimonial 1-->
            <blockquote>
                <div class="col-md-12 col-lg-12 col-centered">
                    <!-- testimonial image-->
                    <img src="{{ asset('img/sponsors//testimonial1.png') }}" alt="" class="img-responsive ">
                </div>

            </blockquote>
            <!-- testimonial 2-->
            <blockquote>
                <div class="col-md-12 col-lg-12 col-centered">
                    <!-- testimonial image-->
                    <img src="{{ asset('img/sponsors/testimonial2.png') }}" alt="" class="img-responsive ">
                </div>

            </blockquote>
            <!-- testimonial 3-->
            <blockquote>
                <div class="col-md-12 col-lg-12 col-centered">
                    <!-- testimonial image-->
                    <img src="{{ asset('img/sponsors/testimonial3.png') }}" alt="" class="img-responsive ">
                </div>

            </blockquote>
            <blockquote>
                <div class="col-md-12 col-lg-12 col-centered">
                    <!-- testimonial image-->
                    <img src="{{ asset('img/sponsors/testimonial4.png') }}" alt="" class="img-responsive ">
                </div>

            </blockquote>
            <blockquote>
                <div class="col-md-12 col-lg-12 col-centered">
                    <!-- testimonial image-->
                    <img src="{{ asset('img/sponsors/testimonial5.png') }}" alt="" class="img-responsive ">
                </div>

            </blockquote>
            <blockquote>
                <div class="col-md-12 col-lg-12 col-centered">
                    <!-- testimonial image-->
                    <img src="{{ asset('img/sponsors/testimonial7.jpg') }}" alt="" class="img-responsive ">
                </div>
            </blockquote>
            <blockquote>
                <div class="col-md-12 col-lg-12 col-centered">
                    <!-- testimonial image-->
                    <img src="{{ asset('img/sponsors//testimonial1.png') }}" alt="" class="img-responsive ">
                </div>

            </blockquote>
            <!-- testimonial 2-->
            <blockquote>
                <div class="col-md-12 col-lg-12 col-centered">
                    <!-- testimonial image-->
                    <img src="{{ asset('img/sponsors/testimonial2.png') }}" alt="" class="img-responsive ">
                </div>

            </blockquote>
            <!-- testimonial 3-->
            <blockquote>
                <div class="col-md-12 col-lg-12 col-centered">
                    <!-- testimonial image-->
                    <img src="{{ asset('img/sponsors/testimonial3.png') }}" alt="" class="img-responsive ">
                </div>

            </blockquote>
            <blockquote>
                <div class="col-md-12 col-lg-12 col-centered">
                    <!-- testimonial image-->
                    <img src="{{ asset('img/sponsors/testimonial4.png') }}" alt="" class="img-responsive ">
                </div>

            </blockquote>
            <blockquote>
                <div class="col-md-12 col-lg-12 col-centered">
                    <!-- testimonial image-->
                    <img src="{{ asset('img/sponsors/testimonial5.png') }}" alt="" class="img-responsive ">
                </div>

            </blockquote>
            <blockquote>
                <div class="col-md-12 col-lg-12 col-centered">
                    <!-- testimonial image-->
                    <img src="{{ asset('img/sponsors/testimonial7.jpg') }}" alt="" class="img-responsive ">
                </div>
            </blockquote>
            <blockquote>
                <div class="col-md-12 col-lg-12 col-centered">
                    <!-- testimonial image-->
                    <img src="{{ asset('img/sponsors/testimonial3.png') }}" alt="" class="img-responsive ">
                </div>

            </blockquote>
            <blockquote>
                <div class="col-md-12 col-lg-12 col-centered">
                    <!-- testimonial image-->
                    <img src="{{ asset('img/sponsors/testimonial4.png') }}" alt="" class="img-responsive ">
                </div>

            </blockquote>
            <blockquote>
                <div class="col-md-12 col-lg-12 col-centered">
                    <!-- testimonial image-->
                    <img src="{{ asset('img/sponsors/testimonial5.png') }}" alt="" class="img-responsive ">
                </div>

            </blockquote>
            <blockquote>
                <div class="col-md-12 col-lg-12 col-centered">
                    <!-- testimonial image-->
                    <img src="{{ asset('img/sponsors/testimonial7.jpg') }}" alt="" class="img-responsive ">
                </div>
            </blockquote>

        </div>
    </div>
    <div class="container-fluid">
        <div class="col-md-12" >
            <div class="col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                <img src='img/banner2.jpg' class="img-responsive">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                <img src='img/banner1.jpg' class="img-responsive">
            </div>
        </div>
    </div>
</section>
<section class="pattern">
    <div class="container-fluid" id="service-container" style="padding-bottom: 50px">
        <h3 style="text-align: center">اخبار و اطلاعیه ها</h3>
        <div class="col-md-2 col-sm-4">
            <div class="panel panel-default">

                <div class="panel-heading" style="background-color: #fff"><h6>تیتر خبر در این قسمت</h6><img src='img/banner1.png' class="img-responsive"></div>
                <div class="panel-body text-justify" style="background-color: #fff"> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته</div>
                <div class="panel-footer"><a>جزییات بیشتر خبر</a> </div>
            </div>
        </div>
        <div class="col-md-2  col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #fff"><h6>تیتر خبر در این قسمت</h6><img src='img/banner2.jpg' class="img-responsive"></div>
                <div class="panel-body text-justify" style="background-color: #fff"> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته</div>
                <div class="panel-footer"><a>جزییات بیشتر خبر</a> </div>
            </div>
        </div>

        <div class="col-md-2  col-sm-4">
            <div class="panel panel-default">

                <div class="panel-heading" style="background-color: #fff"><h6>تیتر خبر در این قسمت</h6><img src='img/banner1.png' class="img-responsive"></div>
                <div class="panel-body text-justify" style="background-color: #fff"> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته</div>
                <div class="panel-footer"><a>جزییات بیشتر خبر</a> </div>
            </div>
        </div>
        <div class="col-md-2  col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #fff"><h6>تیتر خبر در این قسمت</h6><img src='img/banner2.jpg' class="img-responsive"></div>
                <div class="panel-body text-justify" style="background-color: #fff"> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته</div>
                <div class="panel-footer"><a>جزییات بیشتر خبر</a> </div>
            </div>
        </div>
        <div class="col-md-2  col-sm-4">
            <div class="panel panel-default">

                <div class="panel-heading" style="background-color: #fff"><h6>تیتر خبر در این قسمت</h6><img src='img/banner1.png' class="img-responsive"></div>
                <div class="panel-body text-justify" style="background-color: #fff"> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته</div>
                <div class="panel-footer"><a>جزییات بیشتر خبر</a> </div>
            </div>
        </div>
        <div class="col-md-2  col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #fff"><h6>تیتر خبر در این قسمت</h6><img src='img/banner2.jpg' class="img-responsive"></div>
                <div class="panel-body text-justify" style="background-color: #fff"> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته</div>
                <div class="panel-footer"><a>جزییات بیشتر خبر</a> </div>
            </div>
        </div>


    </div>
</section>



@include('home.footer')
@endsection
@section('script')
    <script src='//maps.googleapis.com/maps/api/js?sensor=false'></script>
@endsection
