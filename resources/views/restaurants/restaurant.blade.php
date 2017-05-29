@extends('master')
@section('title', '')
@section('index')
        <!-- Start Switcher -->
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
                    <a href="blueberry" class="styleswitch"><img src="../img/switcher/images/icons/blueberry.png" alt=""></a>
                    <a href="justgreen" class="styleswitch"><img src="../img/switcher/images/icons/justgreen.png" alt=""></a>
                    <a href="limeblue"  class="styleswitch"><img src="../img/switcher/images/icons/limeblue.png" alt=""></a>
                    <a href="orangejuice"  class="styleswitch"><img src="../img/switcher/images/icons/orangejuice.png" alt=""></a>
                    <a href="goldenberry" class="styleswitch"><img src="../img/switcher/images/icons/goldenberry.png" alt=""></a>
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
            <div class="navbar-brand navbar-brand-centered page-scroll"><a href="#page-top"><img src="../img/logo.png" alt=""></a></div>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-brand-centered">
            <ul class="nav navbar-nav page-scroll">
                <li><a href="#page-top">خانه</a></li>
                <li><a href="#services">خدمات</a></li>
                <li><a href="#about">در باره ما</a></li>
                <li><a href="#menu">منو</a></li>
            </ul>
            <ul class="nav navbar-nav  page-scroll navbar-right">
                <li><a href="#gallery">گالری</a></li>
                <li><a href="#team">تیم</a></li>
                <li><a href="#contact">تماس با ما</a></li>
                <li><a href="#opening">ساعت کاری</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Full Page Image Background Slider -->
<div class="slider-container">
    <!-- Controls -->
    <div class="slider-control left inactive"></div>
    <div class="slider-control right"></div>
    <ul class="slider-pagi"></ul>
    <!--Slider -->
    <div class="slider">
        <!-- Slide 1 -->
        <div class="slide slide-0 active" style="background-image:url('../img/slide1.jpg')">
            <div class="slide__bg"></div>
            <div class="slide__content">
                <div class="slide__overlay">
                </div>
                <!-- slide text-->
                <div class="slide__text">
                    <h1 class="slide__text-heading">به سایت ما خوش آمدید</h1>
                    <div class="hidden-sm hidden-xs">
                        <p class="lead">مابه شما بهترین خدمات رو ارائه خوایم داد.</p>
                        <div class="page-scroll">
                            <a href="#services" class="btn btn-default">خدمات ما</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slide 2 -->
        <div class="slide slide-1" style="background-image:url('../img/slide2.jpg')">
            <div class="slide__bg"></div>
            <div class="slide__content">
                <div class="slide__overlay">
                </div>
                <!-- slide text-->
                <div class="slide__text">
                    <h1 class="slide__text-heading">با ما همراه باشید</h1>
                    <div class="hidden-sm hidden-xs">
                        <p class="lead">امروزتون رو با میزبانی ما به یاد ماندنی کنید.</p>
                        <div class="page-scroll">
                            <a href="#contact" class="btn btn-default">رزرو جا</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slide 3-->
        <div class="slide slide-2" style="background-image:url('../img/slide3.jpg')">
            <div class="slide__bg"></div>
            <div class="slide__content">
                <div class="slide__overlay">
                </div>
                <!-- slide text-->
                <div class="slide__text">
                    <h1 class="slide__text-heading">در باره ما</h1>
                    <div class="hidden-sm hidden-xs">
                        <p class="lead">اطلاعات ما را مشاهده  فرمایید</p>
                        <div class="page-scroll">
                            <a href="#about" class="btn btn-default">در باره ما</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slide 4-->
        <div class="slide slide-3" style="background-image:url('../img/slide4.jpg')">
            <div class="slide__bg"></div>
            <div class="slide__content">
                <div class="slide__overlay">
                </div>
                <!-- slide text-->
                <div class="slide__text">
                    <h1 class="slide__text-heading">غذاهای خوشمزه</h1>
                    <div class="hidden-sm hidden-xs">
                        <p class="lead">منوی مارا مشاهده فرمایید و غذاتونو سفارش بدید</p>
                        <div class="page-scroll">
                            <a href="#menu" class="btn btn-default">منو</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--/ Slider ends -->
<!-- Section Opening Times -->
<section id="offer" class="small-section">
    <div class="container" data-0="background-position:3% 80px,98% -70px;" data-100000="background-position:100px -5000px,100px 5000px;">
        <div class="col-centered col-md-5 text-center">
            <h3 class="text-light">پیشنهاد هفته</h3>
            <div class="hr"></div>
            <p class="text-light">انسان شناسان عادات غذایی را به عنوان کلیتی پیچیده از فعالیت های آشپزی ، تمایل ها و تنفرها ، آگاهی جمعی ، اعتقادات ، تابوها ، موهومات وابسته با تولید و تهیه و مصرف غذا و در یک کلام یک مفهوم فرهنگی بزرگ می نگرند.به عنوان یک مفهوم فرهنگی بزرگ ،غذا را در مواجهه و ارتباط با بسیاری از مفاهیم فرهنگی دیگر می بیینند</p>
            <p class="price">9000 تومان</p>
        </div>
    </div>
    <!-- / container -->
</section>
<!-- / section ends-->

<!-- Section Services -->
<section id="services" class="pattern">
    <div class="container">
        <div class="col-lg-8 col-lg-offset-2">
            <!-- Section heading -->
            <div class="section-heading">
                <h2>خدمات ما</h2>
            </div>
        </div>
        <div class="text-center white_block col-sm-12 col-md-7 col-md-offset-5">
            <h3 class="margin8">خوشمزه و تازه</h3>
            <p class="subtitle">از خدمات ما لذت ببرید</p>
            <p>انسان شناسان عادات غذایی را به عنوان کلیتی پیچیده از فعالیت های آشپزی ، تمایل ها و تنفرها ، آگاهی جمعی ، اعتقادات ، تابوها ، موهومات وابسته با تولید و تهیه و مصرف غذا و در یک کلام یک مفهوم فرهنگی بزرگ می نگرند.به عنوان یک مفهوم فرهنگی بزرگ ،غذا را در مواجهه و ارتباط با بسیاری از مفاهیم فرهنگی دیگر می بیینند
            </p>
        </div>
        <!-- Image-->
        <img class="services_image hidden-sm hidden-xs" src="../img/service.png" alt="">
        <div class="row services">
            <!-- item 1-->
            <div class="col-md-4 col-sm-12">
                <div class="service">
                    <div class="img-wrapper">
                        <img src="../img/service1.jpg" alt="" class="img-responsive">
                    </div>
                    <h4>موسیقی زنده</h4>
                    <p>در ابتدا عجیب به نظر می رسد که بپرسیم " غذا چیست؟ " غذا چیزی است که در مزرعه می روید، از دریا می آید ، آن چه که در فروشگاه به فروش می رسد.</p>
                </div>
            </div>
            <!-- /col-md-4-->
            <!-- item 2-->
            <div class="col-md-4 col-sm-12">
                <div class="service">
                    <div class="img-wrapper">
                        <img src="../img/service2.jpg" alt="" class="img-responsive">
                    </div>
                    <h4>منوی بچه ها</h4>
                    <p>در ابتدا عجیب به نظر می رسد که بپرسیم " غذا چیست؟ " غذا چیزی است که در مزرعه می روید، از دریا می آید ، آن چه که در فروشگاه به فروش می رسد</p>
                </div>
            </div>
            <!-- /col-md-4-->
            <!-- item 3-->
            <div class="col-md-4 col-sm-12">
                <div class="service">
                    <div class="img-wrapper">
                        <img src="../img/service3.jpg" alt="" class="img-responsive">
                    </div>
                    <h4>سنگک تازه</h4>
                    <p>در ابتدا عجیب به نظر می رسد که بپرسیم " غذا چیست؟ " غذا چیزی است که در مزرعه می روید، از دریا می آید ، آن چه که در فروشگاه به فروش می رسد</p>
                </div>
            </div>
            <!-- /col-md-4-->
        </div>
        <!-- /row -->
    </div>
    <!-- /container-->
</section>
<!-- /Section ends -->

<!-- Section Newsletter -->
<section id="newsletter" class="small-section" data-0="background-position:82% 0%,82% 0%;" data-end="background-position:82% 100px,82% 0%;">
    <div class="container">
        <div class="col-md-5 col-md-offset-1">
            <div class="text-center">
                <h3 class="text-light">ثبت نظرات</h3>
                <p class="text-light">با نظرات خودتون مارا در ارائه هر چه بهتر خدمات یاری فرمایید.
                </p>
                <!-- Form -->
                <div id="mc_embed_signup">
                    <form action="" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                        <div id="mc_embed_signup_scroll">
                            <div class="mc-field-group">
                                <div class="input-group">
                                    <!--<input class="form-control input-lg required email" type="email" value="" name="EMAIL" placeholder="Your email here" id="mce-EMAIL">-->
                                    <textarea rows="10" placeholder="نظر خود را بنویسید" name="commit"></textarea>
                                 <span class="input-group-btn">
                                 <input type="submit" value="ثبت نظر" name="subscribe" id="mc-embedded-subscribe" class="btn btn-default">
                                 </span>
                                </div>
                                <!-- Subscription results -->
                                <div id="mce-responses" class="mailchimp">
                                    <div class="alert alert-danger response" id="mce-error-response"></div>
                                    <div class="alert alert-success response" id="mce-success-response"></div>
                                </div>
                            </div>
                            <!-- /mc-fiel-group -->
                        </div>
                        <!-- /mc_embed_signup_scroll -->
                    </form>
                    <!-- /form ends -->
                </div>
                <!-- /mc_embed_signup -->
            </div>
            <!-- /text-center -->
        </div>
        <!-- /col-md-6 -->
    </div>
    <!-- /container-->
</section>
<!-- Section Ends-->

<!-- Section Testimonials -->
<section id="testimonials" data-0="background-position:82% 0%,82% 0%;" data-end="background-position:82% 100px,82% 0%">
    <div class="container">
        <div class="col-md-6 col-lg-7">
            <div class="col-md-12">
                <!-- Section Heading -->
                <div class="section-heading">
                    <h2>نظرات بعضی کاربران</h2>
                </div>
            </div>
            <div id="owl-testimonials" class="owl-carousel">
                <!-- testimonial 1-->
                <blockquote>
                    <div class="col-md-4 col-lg-3 col-centered">
                        <!-- testimonial image-->
                        <img src="../img/testimonial1.jpg" alt="" class="img-responsive img-circle">
                    </div>
                    <div class="col-md-10 col-md-offset-1 quote-test">
                        <!-- quote -->
                        <p>نه تنها غذا بلکه مفهوم یک وعده ی غذایی ، زمانی که خورده می شود ، ترکیبات آن و آداب خوردن نیز از نظر فرهنگی تعریف شده است. در میان مردمانی با تغذیه ی متناسب ، فرهنگ تحمیل می کند</p>
                        <small><i class="fa fa-user"></i> امیر بختیاری, فضانورد</small>
                    </div>
                </blockquote>
                <!-- testimonial 2-->
                <blockquote>
                    <div class="col-md-4 col-lg-3 col-centered">
                        <!-- testimonial image-->
                        <img src="../img/testimonial2.jpg" alt="" class="img-responsive img-circle">
                    </div>
                    <div class="col-md-10 col-md-offset-1 quote-test">
                        <!-- quote -->
                        <p>نه تنها غذا بلکه مفهوم یک وعده ی غذایی ، زمانی که خورده می شود ، ترکیبات آن و آداب خوردن نیز از نظر فرهنگی تعریف شده است. در میان مردمانی با تغذیه ی متناسب ، فرهنگ تحمیل می کند</p>
                        <small><i class="fa fa-user"></i> امیر بختیاری, فضانورد</small>
                    </div>
                </blockquote>
                <!-- testimonial 3-->
                <blockquote>
                    <div class="col-md-4 col-lg-3 col-centered">
                        <!-- testimonial image-->
                        <img src="../img/testimonial3.jpg" alt="" class="img-responsive img-circle">
                    </div>
                    <div class="col-md-10 col-md-offset-1 quote-test">
                        <!-- quote -->
                        <p>نه تنها غذا بلکه مفهوم یک وعده ی غذایی ، زمانی که خورده می شود ، ترکیبات آن و آداب خوردن نیز از نظر فرهنگی تعریف شده است. در میان مردمانی با تغذیه ی متناسب ، فرهنگ تحمیل می کند</p>
                        <small><i class="fa fa-user"></i> امیر بختیاری, فضانورد</small>
                    </div>
                </blockquote>
            </div>
            <!--owl testimonials-->
            <div class="col-md-12">
                <!-- Section Heading -->
                <div class="section-heading" id="section-heading-footer">
                    <h2 data-toggle="modal" data-target="#say-people-modal" style="cursor: pointer;">مشاهده تمام نظرات</h2>
                </div>
            </div>
        </div>
        <!-- /col-md-7 -->
    </div>
    <!-- /container-->
    <div class="modal fade" role="dialog" id="say-people-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <blockquote>
                    <div class="col-md-4 col-lg-3 col-centered">
                        <!-- testimonial image-->
                        <img src="../img/testimonial2.jpg" alt="" class="img-responsive img-circle">
                    </div>
                    <div class="quote-test">
                        <!-- quote -->
                        <p>نه تنها غذا بلکه مفهوم یک وعده ی غذایی ، زمانی که خورده می شود ، ترکیبات آن و آداب خوردن نیز از نظر فرهنگی تعریف شده است. در میان مردمانی با تغذیه ی متناسب ، فرهنگ تحمیل می کند</p>
                        <small><i class="fa fa-user"></i> امیر بختیاری, فضانورد</small>
                    </div>
                </blockquote>
                <blockquote>
                    <div class="col-md-4 col-lg-3 col-centered">
                        <!-- testimonial image-->
                        <img src="../img/testimonial2.jpg" alt="" class="img-responsive img-circle">
                    </div>
                    <div class="quote-test">
                        <!-- quote -->
                        <p>نه تنها غذا بلکه مفهوم یک وعده ی غذایی ، زمانی که خورده می شود ، ترکیبات آن و آداب خوردن نیز از نظر فرهنگی تعریف شده است. در میان مردمانی با تغذیه ی متناسب ، فرهنگ تحمیل می کند</p>
                        <small><i class="fa fa-user"></i> امیر بختیاری, فضانورد</small>
                    </div>
                </blockquote>
                <blockquote>
                    <div class="col-md-4 col-lg-3 col-centered">
                        <!-- testimonial image-->
                        <img src="../img/testimonial2.jpg" alt="" class="img-responsive img-circle">
                    </div>
                    <div class="quote-test">
                        <!-- quote -->
                        <p>نه تنها غذا بلکه مفهوم یک وعده ی غذایی ، زمانی که خورده می شود ، ترکیبات آن و آداب خوردن نیز از نظر فرهنگی تعریف شده است. در میان مردمانی با تغذیه ی متناسب ، فرهنگ تحمیل می کند</p>
                        <small><i class="fa fa-user"></i> امیر بختیاری, فضانورد</small>
                    </div>
                </blockquote>
                <blockquote>
                    <div class="col-md-4 col-lg-3 col-centered">
                        <!-- testimonial image-->
                        <img src="../img/testimonial2.jpg" alt="" class="img-responsive img-circle">
                    </div>
                    <div class="quote-test">
                        <!-- quote -->
                        <p>نه تنها غذا بلکه مفهوم یک وعده ی غذایی ، زمانی که خورده می شود ، ترکیبات آن و آداب خوردن نیز از نظر فرهنگی تعریف شده است. در میان مردمانی با تغذیه ی متناسب ، فرهنگ تحمیل می کند</p>
                        <small><i class="fa fa-user"></i> امیر بختیاری, فضانورد</small>
                    </div>
                </blockquote>
            </div>
        </div>
    </div>
</section>
<!-- Section ends-->

<!-- Section Brands -->
<section id="brands" class="text-light">
    <div class="container text-center">
        <div class="col-lg-8 col-lg-offset-2">
            <!-- Section heading -->
            <div class="section-heading">
                <h2>افتخارات</h2>
            </div>
        </div>
        <div class="col-md-10 col-sm-10 col-centered">
            <!-- brands -->
            <div id="owl-brands" class="owl-carousel">
                <div class="item">
                    <a href="#"><img src="../img/client1.png" alt="Brands"></a>
                </div>
                <div class="item">
                    <a href="#"><img src="../img/client2.png" alt="Brands"></a>
                </div>
                <div class="item">
                    <a href="#"><img src="../img/client3.png" alt="Brands"></a>
                </div>
                <div class="item">
                    <a href="#"><img src="../img/client4.png" alt="Brands"></a>
                </div>
                <div class="item">
                    <a href="#"><img src="../img/client5.png" alt="Brands"></a>
                </div>
            </div>
            <!-- /owl-brands -->
        </div>
        <!-- /col-md-10 -->
    </div>
    <!-- /container -->
</section>
<!-- Section ends -->

<!-- Section About -->
<section id="about">
    <div class="container">
        <!-- Section Heading -->
        <div class="section-heading">
            <h2>درباره ما</h2>
        </div>
        <!-- Carousel -->
        <div class="row">
            <div id="owl-about" class="owl-carousel">
                <div class="item">
                    <img class="img-responsive" src="../img/about1.jpg" alt="">
                </div>
                <div class="item">
                    <img class="img-responsive" src="../img/about2.jpg" alt="">
                </div>
                <div class="item">
                    <img class="img-responsive" src="../img/about3.jpg" alt="">
                </div>
            </div>
        </div>
        <!-- Text -->
        <div class="row about-margin">
            <div class="col-lg-7 top-margin col-sm-12">
                <h3 class="text-center">چه جوری شروع کردیم</h3>
                <p>غذاها به راههای گوناگونی طبقه بندی می شوند، آنچه که مختص هر وعده ی غذایی معمول است ، تنقلات میان وعده ، همچنین بر اساس نظرات ، مقام و منزلت ، موقعیت اجتماعی ، سن ، بیماری و سلامتی و ارزش های نمادین و مناسکی. به عنوان مثال هرچند تعدادی افراد قوی بنیه از اینکه برای صبحانه گوشت گاو بخورند لذت می برند و حتی  سوپ ، سالاد و پودینگ شکلاتی را هم نا بجا نمی دانند ،در کل امریکایی ها  درباره ی این که چه غذایی مختص چه وعده ای است  باورهای محکمی دارند
                </p>
                <p>غذاها به راههای گوناگونی طبقه بندی می شوند، آنچه که مختص هر وعده ی غذایی معمول است ، تنقلات میان وعده ، همچنین بر اساس نظرات ، مقام و منزلت ، موقعیت اجتماعی ، سن ، بیماری و سلامتی و ارزش های نمادین و مناسکی. به عنوان مثال هرچند تعدادی افراد قوی بنیه از اینکه برای صبحانه گوشت گاو بخورند لذت می برند و حتی  سوپ ، سالاد و پودینگ شکلاتی را هم نا بجا نمی دانند ،در کل امریکایی ها  درباره ی این که چه غذایی مختص چه وعده ای است  باورهای محکمی دارند
                </p>
            </div>
            <!-- /col-lg-7 -->
            <div class="col-lg-5 col-sm-12 top-margin">
                <!-- Accordion -->
                <div class="panel-group" id="accordion">
                    <!-- Question 1 -->
                    <div class="panel">
                        <div class="panel-heading">
                            <h5 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">مشخصات رستوران</a>
                            </h5>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped" id="restaurant-id-table">
                                        <tr>
                                            <td>نوع رستوران</td>
                                            <td>فست فود</td>
                                        </tr>
                                        <tr>
                                            <td>کلاس قیمت</td>
                                            <td>متوسط</td>
                                        </tr>
                                        <tr>
                                            <td>شیوه پرداخت</td>
                                            <td>آنلاین-نقدی</td>
                                        </tr>
                                        <tr>
                                            <td>ظرفیت</td>
                                            <td>100نفر</td>
                                        </tr>
                                        <tr>
                                            <td>محدوده سرویس دهی</td>
                                            <td>طالقانی- شهدا</td>
                                        </tr>
                                        <tr>
                                            <td>هزینه پیک</td>
                                            <td>داخل محدوده رایگان - ارسال با آژانس و خارج از محدوده با هزینه</td>
                                        </tr>
                                        <tr>
                                            <td>مناسب برای</td>
                                            <td>خانواده-قرار ملاقلات دو وچند نفره ....</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Question 2 -->
                    <div class="panel">
                        <div class="panel-heading">
                            <h5 class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">امکانات</a>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped" id="tools">
                                        <tr>
                                            <td><i class="fa fa-music"></i>موسیقی</td>
                                            <td><i class="fa fa-wifi"></i>وای فای</td>
                                        </tr>
                                        <tr>
                                            <td><i class="fa fa-car"></i>پارکینگ</td>
                                            <td><i class="fa fa-music"></i>موسیقی زنده</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Question 3 -->
                    <!--<div class="panel">-->
                    <!--<div class="panel-heading">-->
                    <!--<h5 class="panel-title">-->
                    <!--<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Value Added Services</a>-->
                    <!--</h5>-->
                    <!--</div>-->
                    <!--<div id="collapseThree" class="panel-collapse collapse">-->
                    <!--<div class="panel-body">-->
                    <!--<p>Patatemp dolupta orem retibusam qui commolu -->
                    <!--les felis tiam non metus ali quam eros Pellentesque turpis lectus, placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies, vest ibulum orci eget, viverra elit. -->
                    <!--</p>-->
                    <!--</div>-->
                    <!--</div>-->
                    <!--</div>-->
                    <!-- Question 4 -->
                    <!--<div class="panel">-->
                    <!--<div class="panel-heading">-->
                    <!--<h5 class="panel-title">-->
                    <!--<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Helping the Enviroment</a>-->
                    <!--</h5>-->
                    <!--</div>-->
                    <!--<div id="collapseFour" class="panel-collapse collapse">-->
                    <!--<div class="panel-body">-->
                    <!--<p>Patatemp dolupta orem retibusam qui commolu -->
                    <!--les felis tiam non metus ali quam eros Pellentesque turpis lectus, placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies, vest ibulum orci eget, viverra elit. -->
                    <!--</p>-->
                    <!--</div>-->
                    <!--</div>-->
                    <!--</div>-->
                </div>
                <!-- /.accordion -->
            </div>
            <!-- /col-lg-5 -->
        </div>
        <!-- /row -->
        <div class="row">
            <!-- Awards -->
            <div class="col-lg-3 col-sm-12">
                <img src="../img/award.jpg" alt="" class="center-block">
                <img src="../img/award2.jpg" alt="" class="center-block">
            </div>
            <!--Images -->
            <div class="col-lg-9">
                <img src="../img/about4.jpg" alt="" class="img-responsive col-md-8 wow fadeInUp">
                <img src="../img/about5.jpg" alt="" class="img-responsive col-md-4 wow fadeInDown">
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!--/container-->
</section>
<!--/ Section ends -->

<!-- Section Stats -->
<section id="stats" class="small-section">
    <div class="container">
        <div class="row col-centered">
            <div class="text-center text-light">
                <div class="col-md-3 col-sm-6">
                    <!-- item 1 -->
                    <i class="flaticon-snacks1"></i>
                    <div class="numscroller" data-slno='1' data-min='0' data-max='50' data-delay='20' data-increment="19">0</div>
                    <h5>Snack Options</h5>
                </div>
                <!-- item 2 -->
                <div class="col-md-3 col-sm-6">
                    <i class="flaticon-toasted"></i>
                    <div class="numscroller" data-slno='1' data-min='0' data-max='90' data-delay='10' data-increment="9">0</div>
                    <h5>Breakfasts</h5>
                </div>
                <!-- item 3 -->
                <div class="col-md-3 col-sm-6">
                    <i class="flaticon-multiple25"></i>
                    <div class="numscroller" data-slno='1' data-min='0' data-max='70' data-delay='20' data-increment="19">0</div>
                    <h5>Seats</h5>
                </div>
                <!-- item 4 -->
                <div class="col-md-3 col-sm-6">
                    <i class="flaticon-coffee21"></i>
                    <div class="numscroller" data-slno='1' data-min='0' data-max='45' data-delay='10' data-increment="9">0</div>
                    <h5>Coffee Types</h5>
                </div>
            </div>
            <!--/text-center-->
        </div>
        <!--/row-->
    </div>
    <!-- /container -->
</section>
<!-- section ends -->

<!-- Section Menu -->
<section id="menu">
    <div class="container text-center">
        <!-- Section Heading -->
        <div class="section-heading">
            <h2>منوی رستوران</h2>
        </div>
        <!--Navigation -->
        <ul class="nav nav-tabs text-center" role="tablist" id="myTab">
            <li class="active"><a href="#tab1" role="tab" data-toggle="tab">غذای اصلی</a></li>
            <li><a href="#tab2" role="tab" data-toggle="tab">پیش غذا</a></li>
            <li><a href="#tab3" role="tab" data-toggle="tab">دسر</a></li>
            <li><a href="#tab4" role="tab" data-toggle="tab">نوشیدنی</a></li>
        </ul>
        <div class="tab-content col-md-11 col-centered  white_block">
            <!--Tab Content 1 -->
            <div class="tab-pane active in fade" id="tab1">
                <div class="row">
                    <!-- Menu: Snacks -->
                    <h3>غذای اصلی</h3>
                    <div class="col-md-5">
                        <!-- image -->
                        <img class="img-responsive center-block" src="../img/meals.png" alt="">
                        <!-- menu body -->
                        <div class="menu-body">
                            <div class="menu-section">
                                <!-- Item starts -->
                                <div class="menu-item featured">
                                    <div class="menu-item-name">
                                        سبد خرید
                                    </div>
                                    <div class="menu-item-price">
                                        0
                                    </div>
                                    <div class="menu-item-description">
                                        سبد خرید خالی است
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <div class="menu-item-name">
                                        چلو کباب کوبیده
                                    </div>
                                    <div class="menu-item-price">
                                        8000
                                    </div>
                                    <div class="menu-item-description">
                                        <h4 class="fa fa-close" id="delete-button"></h4>
                                        <div class="menu-item-num">
                                            <i class="fa fa-plus"></i>
                                            <i class="fa fa-minus"></i>
                                            <span>1</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <div class="menu-item-name">
                                        چلو کباب کوبیده
                                    </div>
                                    <div class="menu-item-price">
                                        8000
                                    </div>
                                    <div class="menu-item-description">
                                        <h4 class="fa fa-close" id="delete-button"></h4>
                                        <div class="menu-item-num">
                                            <i class="fa fa-plus"></i>
                                            <i class="fa fa-minus"></i>
                                            <span>1</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <div class="menu-item-name">
                                        چلو کباب کوبیده
                                    </div>
                                    <div class="menu-item-price">
                                        8000
                                    </div>
                                    <div class="menu-item-description">
                                        <h4 class="fa fa-close" id="delete-button"></h4>
                                        <div class="menu-item-num">
                                            <i class="fa fa-plus"></i>
                                            <i class="fa fa-minus"></i>
                                            <span>1</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="cart-pay-button">
                                    <button  type="submit"><span>پرداخت نهایی</span><span class="hidden">خارج از سرویس</span></button>

                                </div>
                            </div>
                            <!--/ menu section -->
                        </div>
                        <!-- / menu body -->
                    </div>
                    <!-- /col-md-4 -->
                    <!-- second column -->
                    <div class="col-md-7">
                        <div class="menu-body">
                            <div class="menu-section">
                                <div class="row">
                                    <div class="col-md-6 col-xs-6">
                                        <div class="product">
                                            <img src="../img/gallery9.jpg">
                                            <div class="product-hover"></div>
                                            <div class="product-header">
                                                <h5>چلو کباب کوبیده</h5>
                                                <h6>8000 تومان</h6>
                                            </div>
                                            <div class="add-to-cart">
                                                <a><i class="fa fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-6">
                                        <div class="product">
                                            <img src="../img/gallery9.jpg">
                                            <div class="product-hover"></div>
                                            <div class="product-header">
                                                <h5>چلو کباب کوبیده</h5>
                                                <h6>8000 تومان</h6>
                                            </div>
                                            <div class="add-to-cart">
                                                <a><i class="fa fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-6">
                                        <div class="product">
                                            <img src="../img/gallery9.jpg">
                                            <div class="product-hover"></div>
                                            <div class="product-header">
                                                <h5>چلو کباب کوبیده</h5>
                                                <h6>8000 تومان</h6>
                                            </div>
                                            <div class="add-to-cart">
                                                <a><i class="fa fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-6">
                                        <div class="product">
                                            <img src="../img/gallery9.jpg">
                                            <div class="product-hover"></div>
                                            <div class="product-header">
                                                <h5>چلو کباب کوبیده</h5>
                                                <h6>8000 تومان</h6>
                                            </div>
                                            <div class="add-to-cart">
                                                <a><i class="fa fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end row -->
                            </div>
                            <!--/ menu section -->
                        </div>
                        <!-- / menu body -->
                    </div>
                    <!-- /col-md-4 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /#tab1 -->
            <!--Tab Content 2 -->
            <div class="tab-pane fade" id="tab2">
                <div class="row">
                    <!-- Menu: Meals -->
                    <h3>پیش غذا</h3>
                    <div class="col-md-5">
                        <!-- image -->
                        <img class="img-responsive center-block" src="../img/snacks.png" alt="">
                        <!-- menu body -->
                        <div class="menu-body">
                            <div class="menu-section">
                                <!-- Item starts -->
                                <div class="menu-item featured">
                                    <div class="menu-item-name">
                                        سبد خرید
                                    </div>
                                    <div class="menu-item-price">
                                        0
                                    </div>
                                    <div class="menu-item-description">
                                        سبد خرید خالی است
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <div class="menu-item-name">
                                        چلو کباب کوبیده
                                    </div>
                                    <div class="menu-item-price">
                                        8000
                                    </div>
                                    <div class="menu-item-description">
                                        <h4 class="fa fa-close" id="delete-button"></h4>
                                        <div class="menu-item-num">
                                            <i class="fa fa-plus"></i>
                                            <i class="fa fa-minus"></i>
                                            <span>1</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <div class="menu-item-name">
                                        چلو کباب کوبیده
                                    </div>
                                    <div class="menu-item-price">
                                        8000
                                    </div>
                                    <div class="menu-item-description">
                                        <h4 class="fa fa-close" id="delete-button"></h4>
                                        <div class="menu-item-num">
                                            <i class="fa fa-plus"></i>
                                            <i class="fa fa-minus"></i>
                                            <span>1</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <div class="menu-item-name">
                                        چلو کباب کوبیده
                                    </div>
                                    <div class="menu-item-price">
                                        8000
                                    </div>
                                    <div class="menu-item-description">
                                        <h4 class="fa fa-close" id="delete-button"></h4>
                                        <div class="menu-item-num">
                                            <i class="fa fa-plus"></i>
                                            <i class="fa fa-minus"></i>
                                            <span>1</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="cart-pay-button">
                                    <button  type="submit"><span>پرداخت نهایی</span><span class="hidden">خارج از سرویس</span></button>

                                </div>
                            </div>
                            <!--/ menu section -->
                        </div>
                        <!-- / menu body -->
                    </div>
                    <!-- /col-md-4 -->
                    <!-- second column -->
                    <div class="col-md-7">
                        <div class="menu-body">
                            <div class="menu-section">
                                <div class="row">
                                    <div class="col-md-6 col-xs-6">
                                        <div class="product">
                                            <img src="../img/gallery9.jpg">
                                            <div class="product-hover"></div>
                                            <div class="product-header">
                                                <h5>چلو کباب کوبیده</h5>
                                                <h6>8000 تومان</h6>
                                            </div>
                                            <div class="add-to-cart">
                                                <a><i class="fa fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-6">
                                        <div class="product">
                                            <img src="../img/gallery9.jpg">
                                            <div class="product-hover"></div>
                                            <div class="product-header">
                                                <h5>چلو کباب کوبیده</h5>
                                                <h6>8000 تومان</h6>
                                            </div>
                                            <div class="add-to-cart">
                                                <a><i class="fa fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-6">
                                        <div class="product">
                                            <img src="../img/gallery9.jpg">
                                            <div class="product-hover"></div>
                                            <div class="product-header">
                                                <h5>چلو کباب کوبیده</h5>
                                                <h6>8000 تومان</h6>
                                            </div>
                                            <div class="add-to-cart">
                                                <a><i class="fa fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-6">
                                        <div class="product">
                                            <img src="../img/gallery9.jpg">
                                            <div class="product-hover"></div>
                                            <div class="product-header">
                                                <h5>چلو کباب کوبیده</h5>
                                                <h6>8000 تومان</h6>
                                            </div>
                                            <div class="add-to-cart">
                                                <a><i class="fa fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end row -->
                            </div>
                            <!--/ menu section -->
                        </div>
                        <!-- / menu body -->
                    </div>
                    <!-- /col-md-4 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /#tab2 -->
            <!--Tab Content 3 -->
            <div class="tab-pane fade" id="tab3">
                <div class="row">
                    <!--  Menu: Drinks -->
                    <h3>دسر</h3>
                    <div class="col-md-5">
                        <!-- image -->
                        <img class="img-responsive center-block" src="../img/desserts.png" alt="">
                        <!-- menu body -->
                        <div class="menu-body">
                            <div class="menu-section">
                                <!-- Item starts -->
                                <div class="menu-item featured">
                                    <div class="menu-item-name">
                                        سبد خرید
                                    </div>
                                    <div class="menu-item-price">
                                        0
                                    </div>
                                    <div class="menu-item-description">
                                        سبد خرید خالی است
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <div class="menu-item-name">
                                        چلو کباب کوبیده
                                    </div>
                                    <div class="menu-item-price">
                                        8000
                                    </div>
                                    <div class="menu-item-description">
                                        <h4 class="fa fa-close" id="delete-button"></h4>
                                        <div class="menu-item-num">
                                            <i class="fa fa-plus"></i>
                                            <i class="fa fa-minus"></i>
                                            <span>1</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <div class="menu-item-name">
                                        چلو کباب کوبیده
                                    </div>
                                    <div class="menu-item-price">
                                        8000
                                    </div>
                                    <div class="menu-item-description">
                                        <h4 class="fa fa-close" id="delete-button"></h4>
                                        <div class="menu-item-num">
                                            <i class="fa fa-plus"></i>
                                            <i class="fa fa-minus"></i>
                                            <span>1</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <div class="menu-item-name">
                                        چلو کباب کوبیده
                                    </div>
                                    <div class="menu-item-price">
                                        8000
                                    </div>
                                    <div class="menu-item-description">
                                        <h4 class="fa fa-close" id="delete-button"></h4>
                                        <div class="menu-item-num">
                                            <i class="fa fa-plus"></i>
                                            <i class="fa fa-minus"></i>
                                            <span>1</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="cart-pay-button">
                                    <button  type="submit"><span>پرداخت نهایی</span><span class="hidden">خارج از سرویس</span></button>

                                </div>
                            </div>
                            <!--/ menu section -->
                        </div>
                        <!-- / menu body -->
                    </div>
                    <!-- /col-md-4 -->
                    <!-- second column -->
                    <div class="col-md-7">
                        <div class="menu-body">
                            <div class="menu-section">
                                <div class="row">
                                    <div class="col-md-6 col-xs-6">
                                        <div class="product">
                                            <img src="../img/gallery9.jpg">
                                            <div class="product-hover"></div>
                                            <div class="product-header">
                                                <h5>چلو کباب کوبیده</h5>
                                                <h6>8000 تومان</h6>
                                            </div>
                                            <div class="add-to-cart">
                                                <a><i class="fa fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-6">
                                        <div class="product">
                                            <img src="../img/gallery9.jpg">
                                            <div class="product-hover"></div>
                                            <div class="product-header">
                                                <h5>چلو کباب کوبیده</h5>
                                                <h6>8000 تومان</h6>
                                            </div>
                                            <div class="add-to-cart">
                                                <a><i class="fa fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-6">
                                        <div class="product">
                                            <img src="../img/gallery9.jpg">
                                            <div class="product-hover"></div>
                                            <div class="product-header">
                                                <h5>چلو کباب کوبیده</h5>
                                                <h6>8000 تومان</h6>
                                            </div>
                                            <div class="add-to-cart">
                                                <a><i class="fa fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-6">
                                        <div class="product">
                                            <img src="../img/gallery9.jpg">
                                            <div class="product-hover"></div>
                                            <div class="product-header">
                                                <h5>چلو کباب کوبیده</h5>
                                                <h6>8000 تومان</h6>
                                            </div>
                                            <div class="add-to-cart">
                                                <a><i class="fa fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end row -->
                            </div>
                            <!--/ menu section -->
                        </div>
                        <!-- / menu body -->
                    </div>
                    <!-- /col-md-4 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /#tab3 -->
            <!--Tab Content 4 -->
            <div class="tab-pane fade" id="tab4">
                <div class="row">
                    <!-- Menu: Desserts -->
                    <h3>نوشیدنی</h3>
                    <div class="col-md-5">
                        <!-- image -->
                        <img class="img-responsive center-block" src="../img/drinks.png" alt="">
                        <!-- menu body -->
                        <div class="menu-body">
                            <div class="menu-section">
                                <!-- Item starts -->
                                <div class="menu-item featured">
                                    <div class="menu-item-name">
                                        سبد خرید
                                    </div>
                                    <div class="menu-item-price">
                                        0
                                    </div>
                                    <div class="menu-item-description">
                                        سبد خرید خالی است
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <div class="menu-item-name">
                                        چلو کباب کوبیده
                                    </div>
                                    <div class="menu-item-price">
                                        8000
                                    </div>
                                    <div class="menu-item-description">
                                        <h4 class="fa fa-close" id="delete-button"></h4>
                                        <div class="menu-item-num">
                                            <i class="fa fa-plus"></i>
                                            <i class="fa fa-minus"></i>
                                            <span>1</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <div class="menu-item-name">
                                        چلو کباب کوبیده
                                    </div>
                                    <div class="menu-item-price">
                                        8000
                                    </div>
                                    <div class="menu-item-description">
                                        <h4 class="fa fa-close" id="delete-button"></h4>
                                        <div class="menu-item-num">
                                            <i class="fa fa-plus"></i>
                                            <i class="fa fa-minus"></i>
                                            <span>1</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <div class="menu-item-name">
                                        چلو کباب کوبیده
                                    </div>
                                    <div class="menu-item-price">
                                        8000
                                    </div>
                                    <div class="menu-item-description">
                                        <h4 class="fa fa-close" id="delete-button"></h4>
                                        <div class="menu-item-num">
                                            <i class="fa fa-plus"></i>
                                            <i class="fa fa-minus"></i>
                                            <span>1</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="cart-pay-button">
                                    <button  type="submit"><span>پرداخت نهایی</span><span class="hidden">خارج از سرویس</span></button>

                                </div>
                            </div>
                            <!--/ menu section -->
                        </div>
                        <!-- / menu body -->
                    </div>
                    <!-- /col-md-4 -->
                    <!-- second column -->
                    <div class="col-md-7">
                        <div class="menu-body">
                            <div class="menu-section">
                                <div class="row">
                                    <div class="col-md-6 col-xs-6">
                                        <div class="product">
                                            <img src="../img/gallery9.jpg">
                                            <div class="product-hover"></div>
                                            <div class="product-header">
                                                <h5>چلو کباب کوبیده</h5>
                                                <h6>8000 تومان</h6>
                                            </div>
                                            <div class="add-to-cart">
                                                <a><i class="fa fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-6">
                                        <div class="product">
                                            <img src="../img/gallery9.jpg">
                                            <div class="product-hover"></div>
                                            <div class="product-header">
                                                <h5>چلو کباب کوبیده</h5>
                                                <h6>8000 تومان</h6>
                                            </div>
                                            <div class="add-to-cart">
                                                <a><i class="fa fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-6">
                                        <div class="product">
                                            <img src="../img/gallery9.jpg">
                                            <div class="product-hover"></div>
                                            <div class="product-header">
                                                <h5>چلو کباب کوبیده</h5>
                                                <h6>8000 تومان</h6>
                                            </div>
                                            <div class="add-to-cart">
                                                <a><i class="fa fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-6">
                                        <div class="product">
                                            <img src="../img/gallery9.jpg">
                                            <div class="product-hover"></div>
                                            <div class="product-header">
                                                <h5>چلو کباب کوبیده</h5>
                                                <h6>8000 تومان</h6>
                                            </div>
                                            <div class="add-to-cart">
                                                <a><i class="fa fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end row -->
                            </div>
                            <!--/ menu section -->
                        </div>
                        <!-- / menu body -->
                    </div>
                    <!-- /col-md-4 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /#tab4 -->
        </div>
        <!--tab-content-->
    </div>
    <!-- /container -->
</section>
<!-- /Section menu ends -->

<!-- Section Gallery -->
<section id="gallery" class="pattern">
    <div class="container">
        <!-- Section heading -->
        <div class="section-heading">
            <h2>گالری تصاویر</h2>
        </div>
        <!-- Navigation -->
        <div class="nav-gallery col-md-12">
            <ul class="nav nav-tabs cat text-center" role="tablist" id="tabgallery">
                <li class="active"><a href="#" data-filter="*">همه</a>
                <li><a href="#" data-filter=".snack">غذاهای اصلی</a></li>
                <li><a href="#" data-filter=".meal">دسرها</a></li>
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
                                <img class="img-responsive" src="../img/gallery1.jpg" alt="">
                                <span class="overlay-mask"></span>
                                <a href="../img/gallery1.jpg" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                    <i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Image 2 -->
                    <div class="col-sm-6 col-md-6 col-lg-4 meal">
                        <div class="portfolio-item">
                            <div class="gallery-thumb">
                                <img class="img-responsive" src="../img/gallery2.jpg" alt="">
                                <span class="overlay-mask"></span>
                                <a href="../img/gallery6.jpg" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                    <i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Image 3 -->
                    <div class="col-sm-6 col-md-6 col-lg-4 meal">
                        <div class="portfolio-item">
                            <div class="gallery-thumb">
                                <img class="img-responsive" src="../img/gallery3.jpg" alt="">
                                <span class="overlay-mask"></span>
                                <a href="../img/gallery3.jpg" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                    <i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Image 4 -->
                    <div class="col-sm-6 col-md-6 col-lg-4 snack">
                        <div class="portfolio-item">
                            <div class="gallery-thumb">
                                <img class="img-responsive" src="../img/gallery4.jpg" alt="">
                                <span class="overlay-mask"></span>
                                <a href="../img/gallery4.jpg" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                    <i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Image 5 -->
                    <div class="col-sm-6 col-md-6 col-lg-4 meal">
                        <div class="portfolio-item">
                            <div class="gallery-thumb">
                                <img class="img-responsive" src="../img/gallery5.jpg" alt="">
                                <span class="overlay-mask"></span>
                                <a href="../img/gallery5.jpg" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                    <i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Image 6 -->
                    <div class="col-sm-6 col-md-6 col-lg-4 meal">
                        <div class="portfolio-item">
                            <div class="gallery-thumb">
                                <img class="img-responsive" src="../img/gallery6.jpg" alt="">
                                <span class="overlay-mask"></span>
                                <a href="../img/gallery2.jpg" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                    <i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Image 7 -->
                    <div class="col-sm-6 col-md-6 col-lg-4 snack">
                        <div class="portfolio-item">
                            <div class="gallery-thumb">
                                <img class="img-responsive" src="../img/gallery7.jpg" alt="">
                                <span class="overlay-mask"></span>
                                <a href="../img/gallery7.jpg" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                    <i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Image 8 -->
                    <div class="col-sm-6 col-md-6 col-lg-4 snack">
                        <div class="portfolio-item">
                            <div class="gallery-thumb">
                                <img class="img-responsive" src="../img/gallery8.jpg" alt="">
                                <span class="overlay-mask"></span>
                                <a href="../img/gallery8.jpg" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                    <i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Image 9 -->
                    <div class="col-sm-6 col-md-6 col-lg-4 meal">
                        <div class="portfolio-item">
                            <div class="gallery-thumb">
                                <img class="img-responsive" src="../img/gallery9.jpg" alt="">
                                <span class="overlay-mask"></span>
                                <a href="../img/gallery9.jpg" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
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
</section>
<!-- Section ends -->

<!-- Section Call to Action -->
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

<!-- Section Team -->
<section id="team">
    <div class="container">
        <div class="col-lg-8 col-lg-offset-2">
            <!-- Section heading -->
            <div class="section-heading">
                <h2>تیم ما</h2>
            </div>
        </div>
        <!-- Team -->
        <div id="owl-team" class="owl-carousel">
            <!-- member 1-->
            <div class="col-lg-12">
                <div class="team">
                    <img src="../img/team1.jpg" alt=""/>
                    <!-- Caption-->
                    <div class="teamcaption">
                        <h6>موسس</h6>
                        <p>تو ضیحاتی در مورد موسس رستوران </p>
                        <!-- Icons-->
                        <div class="icons"><a href="#" title=""><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
                    </div>
                    <div class="teamname"><h5>امیر بختیاری</h5></div>
                </div>
                <!-- /team-->
            </div>
            <!-- col-lg-12-->
            <!-- member 2-->
            <div class="col-lg-12">
                <div class="team">
                    <img src="../img/team2.jpg" alt=""/>
                    <!-- Caption-->
                    <div class="teamcaption">
                        <h6>سرآشپز</h6>
                        <p>توضیحاتی در مورد سرآشپز رستوران....</p>
                        <!-- Icons-->
                        <div class="icons"><a href="#" title=""><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
                    </div>
                    <div class="teamname"><h5>امیر بختیاری</h5></div>
                </div>
                <!-- /team-->
            </div>
            <!-- col-lg-12-->
            <!-- member 3-->
            <div class="col-lg-12">
                <div class="team">
                    <img src="../img/team3.jpg" alt=""/>
                    <!-- Caption-->
                    <div class="teamcaption">
                        <h6>آشپز</h6>
                        <p>توضیحاتی در مورد آشپز رستوران...</p>
                        <!-- Icons-->
                        <div class="icons"><a href="#" title=""><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
                    </div>
                    <div class="teamname"><h5>امیر بختیاری</h5></div>
                </div>
                <!-- /team-->
            </div>
            <!-- col-lg-12-->
            <!-- member 4-->
            <div class="col-lg-12">
                <div class="team">
                    <img src="../img/team4.jpg" alt=""/>
                    <!-- Caption-->
                    <div class="teamcaption">
                        <h6>دستیار سر آشپز</h6>
                        <p>توضیحاتیدر مورد دستیار سرآشپز رستوران...</p>
                        <!-- Icons-->
                        <div class="icons"><a href="#" title=""><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
                    </div>
                    <div class="teamname"><h5>امیر بختیاری</h5></div>
                </div>
                <!-- /team-->
            </div>
            <!-- col-lg-12-->
            <!-- member 5 -->
            <div class="col-lg-12">
                <div class="team">
                    <img src="../img/team5.jpg" alt=""/>
                    <!-- Caption-->
                    <div class="teamcaption">
                        <h6>استاد سرآشپز</h6>
                        <p>توضیحاتی در مورد استاد سرآشپز رستوران...</p>
                        <!-- Icons-->
                        <div class="icons"><a href="#" title=""><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
                    </div>
                    <div class="teamname"><h5>امیر بختیاری</h5></div>
                </div>
                <!-- /team-->
            </div>
            <!-- col-lg-12-->
            <!-- member 6-->
            <div class="col-lg-12">
                <div class="team">
                    <img src="../img/team6.jpg" alt=""/>
                    <!-- Caption-->
                    <div class="teamcaption">
                        <h6>سرآشپز</h6>
                        <p>توضیحاتی در مورد سر آشپز رستوران...</p>
                        <!-- Icons-->
                        <div class="icons"><a href="#" title=""><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
                    </div>
                    <div class="teamname"><h5>امیر بختیاری</h5></div>
                </div>
                <!-- /team-->
            </div>
            <!-- col-lg-12-->
        </div>
        <!--/owl-team -->
    </div>
    <!--/container -->
</section>
<!-- Section ends -->

<!-- Section Contact -->
<section id="contact" class="pattern">
    <div class="container">
        <div class="col-lg-8 col-lg-offset-2">
            <!-- Section heading -->
            <div class="section-heading">
                <h2>تماس با ما</h2>
            </div>
        </div>
        <!-- Contact Form -->
        <div class="col-md-4 col-md-offset-1 white_block">
            <h4 class="text-center">رزرو میز</h4>
            <div class="form-style" id="contact_form">
                <!-- Contact results -->
                <div id="contact_results"></div>
                <!-- Form Starts -->
                <div class="form-group">
                    <input type="text" name="name" class="form-control input-field" placeholder="نام" required="">
                    <input type="email" name="email" class="form-control input-field" placeholder="ایمیل" required="">
                    <input type="text" name="subject" class="form-control input-field" placeholder="موضوع" required="">
                    <div class="input-group date" id="datetimepicker1">
                        <input type="text" name="date" class="form-control input-field" placeholder="تاریخ" required=""/>
                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                    <textarea name="message" id="message" class="textarea-field form-control" rows="4" placeholder="پیام" required=""></textarea>
                    <button type="submit" id="submit_btn" value="Submit" class="btn btn-primary center-block">ارسال</button>
                </div>
            </div>
            <!--/Contact form -->
        </div>
        <!--/col-md-4 -->

        <!-- Contact info -->
        <div class="col-md-5 col-md-offset-1 text-center white_block">
            <h4>اطلاعات تماس</h4>
            <p><a href="mailto:youremailaddress">coffee@site.com</a></p>
            <p> 021-22222222</p>
            <!-- address info -->
            <p>کرج چهاراه طالقانی برج آذرخش</p>
            <!-- Social Media icons -->
            <div class="social-media">
                <a href="#" title=""><i class="fa fa-twitter"></i></a>
                <a href="#" title=""><i class="fa fa-facebook"></i></a>
                <a href="#" title=""><i class="fa fa-linkedin"></i></a>
                <a href="#" title=""><i class="fa fa-pinterest"></i></a>
                <a href="#" title=""><i class="fa fa-instagram"></i></a>
            </div>
        </div>
        <!-- /col-md-8 -->
    </div>
    <!-- /container-->
</section>
<!--Section ends -->

<!-- Section Opening Times -->
<section id="opening" class="small-section">
    <div class="container text-light">
        <div class="col-lg-5 col-md-4 col-centered text-center">
            <!-- Sign-->
            <div class="sign">
                <h5 class="text-light">ساعات کاری</h5>
                <!-- Table-->
                <table class="table">
                    <tr>
                        <td></td>
                        <td>صبحانه</td>
                        <td>ناهار</td>
                        <td>شام</td>
                    </tr>
                    <tr>
                        <td>شنبه</td>
                        <td>6-9</td>
                        <td>12-3</td>
                        <td>7-11</td>
                    </tr>
                    <tr>
                        <td>یک شنبه</td>
                        <td>6-9</td>
                        <td>12-3</td>
                        <td>7-11</td>
                    </tr>
                    <tr>
                        <td>دوشنبه</td>
                        <td>6-9</td>
                        <td>12-3</td>
                        <td>7-11</td>
                    </tr>
                    <tr>
                        <td>سه شنبه</td>
                        <td>6-9</td>
                        <td>12-3</td>
                        <td>7-11</td>
                    </tr>
                    <tr>
                        <td>چهارشنبه</td>
                        <td>6-9</td>
                        <td>12-3</td>
                        <td>7-11</td>
                    </tr>
                    <tr>
                        <td>پنج شنبه</td>
                        <td>6-9</td>
                        <td>12-3</td>
                        <td>7-11</td>
                    </tr>
                    <tr>
                        <td>جمعه</td>
                        <td>6-9</td>
                        <td>12-3</td>
                        <td>7-11</td>
                    </tr>
                </table>
            </div>
            <!-- /sign ends-->
        </div>
        <!-- / col-md-4 -->
    </div>
    <!-- / container -->
</section>
<!-- / section ends-->

<!-- Map -->
<div class="wow fadeInTop" data-wow-delay="0.2s">
    <div id="map-canvas"></div>
</div>
<!-- / Map ends-->
@endsection