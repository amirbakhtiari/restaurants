<!-- Footer -->
<footer id="footer" ng-controller="FooterController">

    <div class="container-fluid" id="footer-delivery">
        <div class="col-md-12" style="margin-top: -80px">
            <img src='{{asset("img/dlivery-free.png")}}' class="img-responsive">
        </div>
    </div>
    <div class="container footer-section">
        <!-- Bottom Credits -->
        <div class="col-md-12 text-center">

        </div>

        <div class="col-md-12" style="color: #ffffff">

            <div class="col-md-4 col-sm-6">
                <li>جدیدترین رستوران <%footer.areaName%></li>
                <hr>
                <div class="col-md-4">
                    <li></span>&nbsp;&nbsp;&nbsp;<span><%footer.restaurantName%></span></li>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <li>دسترسی سریع</li>
                <hr>
                <li><span><a href="{{route('home.index')}}">صفحه اصلی </a></span></li>
                <li><span><a href="{{route('restaurant.register.page')}}">ثبت رستوران</a></span></li>
                <li><span><a href="{{route('restaurants.list')}}">لیست رستوران ها</a></span></li>
                <li><span><a href="{{route('about.page')}}">درباره های پرس</a></span></li>
                <li><span><a href="{{route('contact.page')}}">تماس با های پرس</a></span></li>
                <li><span><a href="{{route('home.rules')}}">قوانین سایت</a></span></li>
                <li><span>سوالات متداول</span></li>
            </div>
            <div class="col-md-3 col-sm-6">
                <li>اطلاعات تماس</li>
                <hr>
                <li><span class="fa fa-location-arrow"></span>&nbsp;&nbsp;&nbsp;<span>02634312845 </span></li>
                <li><span class="fa fa-phone"></span>&nbsp;&nbsp;&nbsp;<span>استان البرز، کرج، باغستان، گلستان 2</span></li>
                <li><span class="fa fa-envelope"></span>&nbsp;&nbsp;&nbsp;<span>info@hipors.ir</span></li>
                <li><span class="fa fa-laptop"></span>&nbsp;&nbsp;&nbsp;<span>www.hipors.ir</span></li>
                <li><span class="fa fa-mobile"></span>&nbsp;&nbsp;&nbsp;<span>09125901065</span></li>
            </div>
            <div class="col-md-2 col-sm-6">
                <li> شبکه ها</li>
                <hr>
                <li><span class="fa fa-facebook"></span>&nbsp;&nbsp;<span>فیسبوک</span></li>
                <li><span class="fa fa-twitter"></span>&nbsp;&nbsp;<span>توییتر</span></li>
                <li><span class="fa fa-instagram"></span>&nbsp;&nbsp;<span>اینستاگرام</span></li>
                <li><span class="fa fa-youtube"></span>&nbsp;&nbsp;<span>یوتیوب</span></li>
                <li><span class="fa fa-youtube-play"></span>&nbsp;&nbsp;<span>آپارات</span></li>
                <li><span class="fa fa fa-paper-plane "></span>&nbsp;&nbsp;<span>تلگرام</span></li>

            </div>
        </div>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="col-md-12 footer-container">
            <p>تمامی حقوق مادی و معنوی این سایت برای های پرس محفوظ می باشد  All right reserved 2017</p>
        </div>

        @if(config('app.debug') == false)
            <div class="text-center">
                <a href="http://www.alexa.com/siteinfo/hipors.ir" target="_blank">رتبه در الکسا</a>
                <!— Begin WebGozar.com Counter code —>
                <script type="text/javascript" language="javascript" src="http://www.webgozar.ir/c.aspx?Code=3657781&amp;t=counter" ></script>
                <noscript><a href="http://www.webgozar.com/counter/stats.aspx?code=3657781" target="_blank">&#1570;&#1605;&#1575;&#1585;</a></noscript>
                <!— End WebGozar.com Counter code —>
            </div>
        @endif
    </div>
    <!-- /container -->
    <!-- Go To Top Link -->
    <div class="page-scroll hidden-sm hidden-xs">
        <a href="#page-top" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    </div>
</footer>
