@extends('master')
@section('title')
    {{$restaurant->sPerson}}
@stop
@section('index')
    @include('home.header')
    <div ng-controller="RestCtrl">
        <main id="menu">
            <div class="row res-page container">
                <div class="container-fluid noPaddingCon">
                    <div class="row menu_top_banner" >
                        <div class="col-md-6" style="position: absolute">
                            @if($restaurant->oPicture != null)
                                <img class="" src="data:image/jpeg;base64,<?php echo base64_encode($restaurant->oPicture); ?>">
                            @else
                                <img style="width:18%;" class="img-thumbnail" src="{{asset('img/noimage.jpg')}}" >
                            @endif
                            <span>
                                <h2 style="font-size: 16px;color: #fff">{{$restaurant->sDesc}}</h2>
                            </span>
                        </div>
                    </div>
                </div>
                <section  class="col-md-9 col-lg-9 col-sm-8 col-xs-12">
                    <div class="container text-center">
                        <!--Navigation -->
                        <div class="container-fluid" style="padding: 10px 0">
                            <a href="#tab1" role="tab" data-toggle="tab"><div class="col-md-4 menu-top-tabs"><i  class="fa fa-file-text-o"></i>&nbsp;&nbsp;&nbsp;منو</div></a>
                            <a href="#tab2"  id="information" role="tab" data-toggle="tab"> <div class="col-md-4 menu-top-tabs"><i  class="fa fa-info-circle"></i>&nbsp;&nbsp;&nbsp;اطلاعات</div></a>
                            <a href="#tab3 " role="tab" data-toggle="tab"> <div class="col-md-4 menu-top-tabs"><i class="fa fa-comments-o"></i>&nbsp;&nbsp;&nbsp;نظرات</div></a>
                        </div>
                        <div class="tab-content col-md-12 col-lg-12 col-centered  white_block">
                            <!--Tab Content 1 -->
                            <div class="tab-pane active in fade" id="tab1">
                                <div class="row">
                                    <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12 pull-right menu-food-right-parent">
                                        <h6>دسته بندی </h6>
                                        <hr>
                                        <ul id="menu-food-right">
                                            <li>
                                            @foreach($generalGroup as $gg)
                                                <li><a href="{{$gg->iID}}">{{$gg->sName}}<span></span></a></li>
                                                @endforeach
                                                </li>
                                        </ul>
                                    </div>
                                    <!-- second column -->
                                    <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12 pull-left">
                                        <div class="res-menu-body">
                                            @foreach($generalGroup as $gg)
                                                <div id="{{$gg->iID}}">
                                                    <h6>{{$gg->sName}}
                                                        <hr></h6>
                                                    <div class="menu-section">
                                                        <div class="row">
                                                            <?php
                                                            $stuffs = \App\Model\Stuff::select('iID', 'sName', 'oPicture', 'dSellPrice', 'iGroupID')->where('iGroupID', $gg->iID)->where('iWebPersonID', $restaurant->iID)->get();
                                                            ?>
                                                            @foreach($stuffs as $stuff)
                                                                <div class="col-md-6 col-sm-6 col-xs-12 col-lg-4 product-parent">
                                                                    <div class="product team-menu">
                                                                        <figure>
                                                                            <img src="data:image/jpeg;base64,<?php echo base64_encode($stuff->oPicture); ?>" />
                                                                            <div class="teamcaption">
                                                                                <div>
                                                                                    <h6>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="teamcaption">
                                                                                    @if($stuffs != null)
                                                                                        @foreach(App\Model\ProductStuff::manufacturing($stuff->iID) as $manufactur)
                                                                                            <p>{{$manufactur->sName}}</p>
                                                                                        @endforeach
                                                                                    @endif
                                                                                    <hr>
                                                                                    <p>{{$stuff->sDesc}}</p>
                                                                                </div>
                                                                            </div>
                                                                        </figure>
                                                                        <div class="detail-product">

                                                                            <p class="name">{{$stuff->sName}}</p>
                                                                            {{--<p style="font-size: 13px" class="des">{{$stuff->sDesc}}</p>--}}

                                                                            <p class="price">{{number_format($stuff->dSellPrice)}}</p>

                                                                            <div ng-click="add({{$stuff}})">
                                                                                <a class="add"><i class="fa fa-plus"></i></a>
                                                                            </div>
                                                                            {{--<div data-toggle="modal" data-target="#fav-modal">--}}
                                                                            {{--<a  title="اضافه به علاقه مندی ها" class="like-icon"><i class="fa fa-star"></i></a>--}}
                                                                            {{--</div>--}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div><!--/ menu section -->
                                                    </div><!-- end pre-food div -->
                                                </div><!-- end drinks div -->
                                            @endforeach
                                        </div>
                                    </div><!-- /col-md-4 -->
                                </div><!-- /.row -->
                            </div><!-- /#tab1 -->
                            <!--Tab Content 2 -->
                            <div class="tab-pane fade" id="tab2">
                                <div id="info">
                                    <h3>{{$restaurant->sName}}</h3>
                                    <div id="info-detail">
                                        <ul>
                                            <li><span>نوع رستوران : </span> ایرانی</li>
                                            <li><span>زمان ارسال : </span> 30 دقیقه</li>
                                            <li><span>هزینه ارسال : </span>رایگان</li>
                                            <li><span>روشهای پرداخت : </span>نقدی - کارت</li>
                                            <li><span>آدرس رستوران : </span>{{$restaurant->sAddress}}</li>
                                        </ul>
                                    </div>
                                </div><!-- end #info div -->
                                <!-- Sign-->
                                <div class="sign">
                                    <h5 class="text-light">ساعات کاری</h5>
                                    <!-- Table-->
                                    <table class="table">
                                        <tr>
                                            <td>ایام هفته</td>
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
                                <input type="hidden" name="mapLat" id="mapLat" value="{{$restaurant->dGPSx}}"/>
                                <input type="hidden" name="mapLng" id="mapLng" value="{{$restaurant->dGPSy}}"/>
                                <div id="res-map"></div>
                            </div>
                            <!-- /#tab2 -->
                            <!--Tab Content 3 -->
                            <div class="tab-pane fade" id="tab3">
                                <div class="row">
                                    <div class="col-md-12">
                                        <section class="comment-list">

                                            <article class="row">
                                                <div class="col-lg-10 col-md-10 col-sm-10">
                                                    <div class="panel panel-default arrow right">
                                                        <div class="panel-body">
                                                            <header class="text-right">
                                                                <div class=""><i class="fa fa-user"></i> فرشاد حسینی</div>
                                                                <time class="" ><i class="fa fa-clock-o"></i>تاریخ نظر</time>
                                                            </header>
                                                            <div class="comment-post">
                                                                <p>
                                                                    غذا خوردن به شیوه متکبران مثلاً در حال «تکیه زده»، «خوابیده به شکم»، «دراز کشیده»، «ایستاده» همچنین غذا خوردن در حال راه رفتن و جنابت نیز بسیار نهی شده است.

                                                                </p>
                                                            </div>
                                                            <p class="text-right"><a href="#" class="btn btn-success-custom btn-sm"><i class="fa fa-reply"></i> جواب</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 hidden-xs">
                                                    <figure class="thumbnail">
                                                        <img class="img-responsive" src="http://www.keita-gaming.com/assets/profile/default-avatar-c5d8ec086224cb6fc4e395f4ba3018c2.jpg" />
                                                        <figcaption class="text-center">نام کاربری</figcaption>
                                                    </figure>
                                                </div>
                                            </article>

                                            <article class="row">
                                                <div class="col-lg-10 col-md-10 col-sm-10">
                                                    <div class="panel panel-default arrow right">
                                                        <div class="panel-body">
                                                            <header class="text-right">
                                                                <div class=""><i class="fa fa-user"></i> فرشاد حسینی</div>
                                                                <time class="" ><i class="fa fa-clock-o"></i>تاریخ نظر</time>
                                                            </header>
                                                            <div class="comment-post">
                                                                <p>

                                                                    غذا خوردن به شیوه متکبران مثلاً در حال «تکیه زده»، «خوابیده به شکم»، «دراز کشیده»، «ایستاده» همچنین غذا خوردن در حال راه رفتن و جنابت نیز بسیار نهی شده است.
                                                                    غذا خوردن به شیوه متکبران مثلاً در حال «تکیه زده»، «خوابیده به شکم»، «دراز کشیده»، «ایستاده» همچنین غذا خوردن در حال راه رفتن و جنابت نیز بسیار نهی شده است.

                                                                </p>
                                                            </div>
                                                            <p class="text-right"><a href="#" class="btn btn-success-custom btn-sm"><i class="fa fa-reply"></i> جواب</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 hidden-xs">
                                                    <figure class="thumbnail">
                                                        <img class="img-responsive" src="http://www.keita-gaming.com/assets/profile/default-avatar-c5d8ec086224cb6fc4e395f4ba3018c2.jpg" />
                                                        <figcaption class="text-center">نام کاربری</figcaption>
                                                    </figure>
                                                </div>
                                            </article>


                                        </section>
                                    </div>
                                </div>

                            </div>
                            <!-- /#tab3 -->
                            <!--Tab Content 4 -->
                            <div class="tab-pane fade" id="tab4">
                            </div><!-- /#tab4 -->
                        </div>
                        <!--tab-content-->
                    </div>
                    <!-- /container -->
                </section>

                <aside class="col-md-3 col-lg-3 col-sm-4 col-xs-12" style="padding: 15px">
                    <!-- start #checkout-cart div -->
                    <div id="checkout-cart">
                        <!-- start header cart -->
                        <header>
                            <i class="fa fa-shopping-cart"></i>سبد خرید
                        </header><!-- start header cart -->
                        <!-- start section in #checkout-cart -->

                        <!-- start .checkout-cart-footer in #checkout-cart -->
                        <div class="checkout-cart-footer">
                            <!-- start checkout-cart-prices -->
                            <div class="menu-item featured">

                                <div class="cart-header-price">
                                    <strong>قیمت کل : </strong>
                                <span>
                                    <%carts_total%>
                                                                        ریال
                                </span>
                                </div>
                                <div class="menu-item-description" ng-show="carts_total == 0">
                                    سبد خرید خالی است
                                </div>
                            </div>

                            <!-- start .checkout-cart-total div -->
                            <div class="checkout-cart-total">
                                <div id="items" ng-repeat="cart in carts"  ng-animate="{enter: 'animate-enter', leave: 'animate-leave'}">
                                    <div class="menu-item">
                                        <div class="menu-item-name">
                                            <%cart.name%>
                                            <span><%cart.price * cart.qty|currency:"":0%> ریال</span>
                                        </div>
                                        <div class="menu-item-description">
                                            <h4 class="fa fa-remove" id="delete-button" ng-click="remove(cart.rowId)"></h4>
                                            <div class="menu-item-num">
                                                <i class="fa fa-plus" ng-click="update(cart.rowId, true, cart.qty)"></i>
                                                <span><%cart.qty%></span>
                                                <i class="fa fa-minus" ng-click="update(cart.rowId, false, cart.qty)"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end items div -->
                            </div><!-- end .checkout-cart-total div -->
                            <div class="checkout-cart-total">
                                <p>
                                <div class="cart-pay-button">
                                    <a class="btn btn-success-custom" href="{{route('restaurants.checkout')}}"><span>پرداخت نهایی</span><span class="hidden">خارج از سرویس</span></a>
                                </div>
                                </p>
                            </div><!-- end .checkout-cart-total div -->

                        </div><!-- end .checkout-cart-footer in #checkout-cart -->
                    </div><!-- end #checkout-cart div -->
                </aside><!-- end aside -->
                <!-- /Section menu ends -->
            </div>
            <div class="res-page-mobile visible-xs">
                <div class="mobile-shop-set">
                    <i class="fa fa-cart-plus"></i>
                    <a>0</a>
                </div>
            </div>
        </main>
    </div>
    @include('home.footer')
@endsection
@section('script')
    <script src='//maps.googleapis.com/maps/api/js?key=AIzaSyBXACQBavdBb9r_GxJBiio7W3cQ_tFKKPo'></script>
    {{ Html::script('js/resPage.js') }}
@endsection