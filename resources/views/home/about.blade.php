@extends('master')
@include('home.header')
@section('title', 'درباره ما')
@section('index')

        <!-- Section Brands -->
<section id="brands" class="text-light">
   {{-- <div class="container text-center">
        <div class="col-lg-8 col-lg-offset-2">
            <!-- Section heading -->
            <div class="section-heading">
                <h2>افتخارات</h2>
            </div>
        </div>
        <div class="col-md-10 col-sm-10 col-centered">
            <!-- brands
            <div id="owl-brands" class="owl-carousel">
                <div class="item">
                    <a href="#"><img src="img/client1.png" alt="Brands"></a>
                </div>
                <div class="item">
                    <a href="#"><img src="img/client2.png" alt="Brands"></a>
                </div>
                <div class="item">
                    <a href="#"><img src="img/client3.png" alt="Brands"></a>
                </div>
                <div class="item">
                    <a href="#"><img src="img/client4.png" alt="Brands"></a>
                </div>
                <div class="item">
                    <a href="#"><img src="img/client5.png" alt="Brands"></a>
                </div>
            </div>
            <!-- /owl-brands -->
        </div>
        <!-- /col-md-10 -->
    </div>
    <!-- /container -->--}}
</section>
<!-- Section ends -->

<!-- Section About -->

<section id="about">
    <div class="container-fluid"  style="padding: 0px">
        <!-- Section Heading -->

                    <img class="img-responsive" src="img/about1.jpg" alt="">

                <!-- Text -->
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <h3 class="text-center">درباره  های پرس</h3>
                <p style="padding: 0 100px">
                    سايت هاي‌پُرس (HiPors.ir) بعد از حدود يک سال تحقيق، بررسي، طراحي و برنامه نويسي در اواخر تابستان سال 1395 به صورت آزمايشي راه اندازي شد. گروهي از کارشناسان کسب و کار الکترونيکي در هاي‌پُرس با کمک متخصصان فناوري اطلاعات <a href="http://logicsims.ir" target="_blank">شرکت شبیه سازان منطق</a> با چندين سال تجربه گردهم آمده اند تا با روندي حرفه اي و تخصصي، مجموعه اي از بهترين ها را به شما معرفي کنند. هاي‌پُرس به منظور ساخت يک مرجع کامل معرفي و اطلاع‌رساني رستوران‌هاي ايران فعاليت خود را آغاز نمود. اين وب‌سايت در نظر دارد تا با معرفي رستوران‌ها، فست‌فود‌ها، مطبخ‌ها، امکان آشنايي کاربران را با اين مکان‌ها و خدماتشان، فراهم کند. همچنين امکان درج و به روز رساني اطلاعات توسط صاحبان آن‌ها در وب‌سايت وجود دارد.
                    اهداف هاي‌پُرس
                    معرفي رستوران‌هاي شهر به عموم مشتريان با اطلاعات دقيق و باکيفيت
                    شناسايي و انتخاب بهترين محل به منظور صرف غذا براي همه ايراني هاي خوش ذائقه
                    انتخاب مناسب يک رستوران براي ثبت خاطره اي دلنشين در حضور اعضاي خانواده يا در جمع دوستان
                    پايين آوردن قيمت‌ها از طريق کاهش واسطه‌هاي فروش
                    پايين آوردن هزينه‌هاي کيفي و تبليغاتي صاحبان کسب و کار
                    ارايه نرم افزارهاي مديريتي ويژه صاحبان کسب و کار
                    پوشش خبري از همايش‌ها، جشنواره‌ها و گردهمآيي‌ها
                </p>
            </div>
            <!-- /col-lg-7 -->

        </div>
        <img class="img-responsive" src="img/bottom-about-banner.jpg" alt="">

    </div>
    <!--/container-->
</section>
<!--/ Section ends -->

<!-- Section Stats -->



<section id="call-to-action" class="small-section" data-0="background-position:-20px 200px" data-100000="background-position:50px -5000px">
    <div class="container text-center">
        <!--<div class="col-lg-7 col-lg-offset-1 col-md-7 white_block">-->
        <!--&lt;!&ndash; Section heading &ndash;&gt;-->
        <!--<h3>Discover our Cafe</h3>-->
        <!--<p>Lorem av ipsum dolor sit amet, dorem ipsuem ore consectetur adipisicing elit. Lorem isuem amorem semprem Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et em explicabo tenetur lore apsuet!</p>-->
        <!--&lt;!&ndash; Buttons &ndash;&gt;-->
        <!--<div class="page-scroll">-->
        <!--<a class="btn btn-primary wow fadeInLeft" data-wow-delay="0.2s" href="#contact">Contact us</a>-->
        <!--<a class="btn btn-primary m-left wow fadeInRight" data-wow-delay="0.2s" href="#about">More about us</a>-->
        <!--</div>-->
        <!--</div>-->
        <!-- /col-md-7 -->
    </div>
    <!-- /container-->
</section>
<!-- Section ends -->
<img class="img-responsive" src="img/bottom-about-banner-2.jpg" alt="">

<!-- Section Team -->
<section id="team">
    <div class="container">
        <div class="col-lg-8 col-lg-offset-2">
            <!-- Section heading -->
        </div>
        <!-- Team -->
        <div id="owl-team" class="owl-carousel">
            <!-- member 1-->
            <div class="col-lg-12">
                <div class="team">
                    <img src="img/team1.jpg" alt=""/>
                    <!-- Caption-->
                    <div class="teamcaption">
                        <h6>موسس</h6>
                        <p>تو ضیحاتی در مورد موسس رستوران </p>
                        <!-- Icons-->
                        <div class="icons"><a href="#" title=""><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
                    </div>
                    <div class="teamname"><h5>نام</h5></div>
                </div>
                <!-- /team-->
            </div>
            <!-- col-lg-12-->
            <!-- member 2-->
            <div class="col-lg-12">
                <div class="team">
                    <img src="img/team2.jpg" alt=""/>
                    <!-- Caption-->
                    <div class="teamcaption">
                        <h6>سرآشپز</h6>
                        <p>توضیحاتی در مورد سرآشپز رستوران....</p>
                        <!-- Icons-->
                        <div class="icons"><a href="#" title=""><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
                    </div>
                    <div class="teamname"><h5>نام</h5></div>
                </div>
                <!-- /team-->
            </div>
            <!-- col-lg-12-->
            <!-- member 3-->
            <div class="col-lg-12">
                <div class="team">
                    <img src="img/team3.jpg" alt=""/>
                    <!-- Caption-->
                    <div class="teamcaption">
                        <h6>آشپز</h6>
                        <p>توضیحاتی در مورد آشپز رستوران...</p>
                        <!-- Icons-->
                        <div class="icons"><a href="#" title=""><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
                    </div>
                    <div class="teamname"><h5>نام</h5></div>
                </div>
                <!-- /team-->
            </div>
            <!-- col-lg-12-->
            <!-- member 4-->
            <div class="col-lg-12">
                <div class="team">
                    <img src="img/team4.jpg" alt=""/>
                    <!-- Caption-->
                    <div class="teamcaption">
                        <h6>دستیار سر آشپز</h6>
                        <p>توضیحاتیدر مورد دستیار سرآشپز رستوران...</p>
                        <!-- Icons-->
                        <div class="icons"><a href="#" title=""><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
                    </div>
                    <div class="teamname"><h5>نام</h5></div>
                </div>
                <!-- /team-->
            </div>
            <!-- col-lg-12-->
            <!-- member 5 -->
            <div class="col-lg-12">
                <div class="team">
                    <img src="img/team5.jpg" alt=""/>
                    <!-- Caption-->
                    <div class="teamcaption">
                        <h6>استاد سرآشپز</h6>
                        <p>توضیحاتی در مورد استاد سرآشپز رستوران...</p>
                        <!-- Icons-->
                        <div class="icons"><a href="#" title=""><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
                    </div>
                    <div class="teamname"><h5>نام</h5></div>
                </div>
                <!-- /team-->
            </div>
            <!-- col-lg-12-->
            <!-- member 6-->
            <div class="col-lg-12">
                <div class="team">
                    <img src="img/team6.jpg" alt=""/>
                    <!-- Caption-->
                    <div class="teamcaption">
                        <h6>سرآشپز</h6>
                        <p>توضیحاتی در مورد سر آشپز رستوران...</p>
                        <!-- Icons-->
                        <div class="icons"><a href="#" title=""><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
                    </div>
                    <div class="teamname"><h5>نام</h5></div>
                </div>
                <!-- /team-->
            </div>
            <!-- col-lg-12-->
        </div>
        <!--/owl-team -->
    </div>
    <!--/container -->
</section>


{{--<section id="stats" class="small-section">
    <div class="container">
        <div class="row col-centered">
            <div class="text-center text-light">
                <div class="col-md-6 col-sm-6">
                    <!-- item 1 -->
                    <i class="flaticon-snacks1"></i>
                    <div class="numscroller" data-slno='1' data-min='0' data-max='1550' data-delay='20' data-increment="19">0</div>
                    <h5>تعداد رستورانها</h5>
                </div>
                <!-- item 2 -->
                --}}{{--<div class="col-md-3 col-sm-6">--}}{{--
                --}}{{--<i class="flaticon-toasted"></i>--}}{{--
                --}}{{--<div class="numscroller" data-slno='1' data-min='0' data-max='90' data-delay='10' data-increment="9">0</div>--}}{{--
                --}}{{--<h5>Breakfasts</h5>--}}{{--
                --}}{{--</div>--}}{{--
                        <!-- item 3 -->
                <div class="col-md-6 col-sm-6">
                    <i class="flaticon-multiple25"></i>
                    <div class="numscroller" data-slno='1' data-min='0' data-max='150' data-delay='0' data-increment="1">0</div>
                    <h5>تعداد کاربران</h5>
                </div>
                <!-- item 4 -->
                --}}{{--<div class="col-md-3 col-sm-6">--}}{{--
                --}}{{--<i class="flaticon-coffee21"></i>--}}{{--
                --}}{{--<div class="numscroller" data-slno='1' data-min='0' data-max='45' data-delay='10' data-increment="9">0</div>--}}{{--
                --}}{{--<h5>تعداد رستورانها</h5>--}}{{--
                --}}{{--</div>--}}{{--
            </div>
            <!--/text-center-->
        </div>
        <!--/row-->
    </div>
    <!-- /container -->
</section>--}}

<!-- Section Gallery -->
{{--<section id="gallery" class="pattern">
    <div class="container">
        <!-- Section heading -->

        <!-- Navigation -->
        <div class="nav-gallery col-md-12">
            <ul class="nav nav-tabs cat text-center" role="tablist" id="tabgallery">
                <li class="active"><a href="#" data-filter="*">همه</a>
                <li><a href="#" data-filter=".snack">جدیدترین ها</a></li>
                <li><a href="#" data-filter=".meal">خاص ترین ها</a></li>
            </ul>
        </div>
        <!-- Gallery -->
        <div class="row">
            <div class="col-md-12">
                <div id="lightbox">
                    <!-- Image 1 -->
                    <div class="col-sm-6 col-md-6 col-lg-4 snack">
                        <div class="portfolio-item">
                            <div class="gallery-thumb">
                                <img class="img-responsive" src="img/gallery1.jpg" alt="">
                                <span class="overlay-mask"></span>
                                <a href="img/gallery1.jpg" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                    <i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Image 2 -->
                    <div class="col-sm-6 col-md-6 col-lg-4 meal">
                        <div class="portfolio-item">
                            <div class="gallery-thumb">
                                <img class="img-responsive" src="img/gallery2.jpg" alt="">
                                <span class="overlay-mask"></span>
                                <a href="img/gallery6.jpg" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                    <i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Image 3 -->
                    <div class="col-sm-6 col-md-6 col-lg-4 meal">
                        <div class="portfolio-item">
                            <div class="gallery-thumb">
                                <img class="img-responsive" src="img/gallery3.jpg" alt="">
                                <span class="overlay-mask"></span>
                                <a href="img/gallery3.jpg" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                    <i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Image 4 -->
                    <div class="col-sm-6 col-md-6 col-lg-4 snack">
                        <div class="portfolio-item">
                            <div class="gallery-thumb">
                                <img class="img-responsive" src="img/gallery4.jpg" alt="">
                                <span class="overlay-mask"></span>
                                <a href="img/gallery4.jpg" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                    <i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Image 5 -->
                    <div class="col-sm-6 col-md-6 col-lg-4 meal">
                        <div class="portfolio-item">
                            <div class="gallery-thumb">
                                <img class="img-responsive" src="img/gallery5.jpg" alt="">
                                <span class="overlay-mask"></span>
                                <a href="img/gallery5.jpg" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                    <i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Image 6 -->
                    <div class="col-sm-6 col-md-6 col-lg-4 meal">
                        <div class="portfolio-item">
                            <div class="gallery-thumb">
                                <img class="img-responsive" src="img/gallery6.jpg" alt="">
                                <span class="overlay-mask"></span>
                                <a href="img/gallery2.jpg" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                    <i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Image 7 -->
                    <div class="col-sm-6 col-md-6 col-lg-4 snack">
                        <div class="portfolio-item">
                            <div class="gallery-thumb">
                                <img class="img-responsive" src="img/gallery7.jpg" alt="">
                                <span class="overlay-mask"></span>
                                <a href="img/gallery7.jpg" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                    <i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Image 8 -->
                    <div class="col-sm-6 col-md-6 col-lg-4 snack">
                        <div class="portfolio-item">
                            <div class="gallery-thumb">
                                <img class="img-responsive" src="img/gallery8.jpg" alt="">
                                <span class="overlay-mask"></span>
                                <a href="img/gallery8.jpg" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                    <i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Image 9 -->
                    <div class="col-sm-6 col-md-6 col-lg-4 meal">
                        <div class="portfolio-item">
                            <div class="gallery-thumb">
                                <img class="img-responsive" src="img/gallery9.jpg" alt="">
                                <span class="overlay-mask"></span>
                                <a href="img/gallery9.jpg" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                    <i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /lightbox-->
            </div>
            <!-- /col-md-12-->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</section>--}}
<!-- Section ends -->

<!-- section ends -->
<!-- Section Call to Action -->

<!-- Section ends -->
@include('home.footer')
@endsection
