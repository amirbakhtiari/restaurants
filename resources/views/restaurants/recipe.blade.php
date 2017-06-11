@extends('master')

@section('index')
    @include('home.header')
    <div ng-controller="RecipeController">
        <main id="menu">
            <div class="row res-page container">

                <aside class="col-md-3 col-lg-3 col-sm-4 col-xs-12" style="padding: 15px 0">
                    <ul class="food-cat">
                        <h5> دسته بندی</h5>
                        <hr>

                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                @foreach($recipes as $recipe)
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a ng-href="#" ng-click="show({{$recipe->iID}})">{{$recipe->sName}}</a>
                                            <a data-toggle="collapse" data-parent="#accordion" href="#{{$recipe->iID}}"></a>
                                        </h4>
                                    </div>
                                    <div id="{{$recipe->iID}}" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul>
                                                @foreach(\App\Model\Stuff::where('iOrgStuffID', $recipe->iID)->get() as $stuff)
                                                    <li><a href="#">{{$stuff->sName}}</a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </ul>
                </aside>

                <section  class="col-md-9 col-lg-9 col-sm-8 col-xs-12">
                    <div class="container text-center">
                        <!--Navigation -->
                        <div class="container-fluid" style="padding: 10px 0">
                            <a href="#tab1" role="tab" data-toggle="tab"><div class="col-md-6 col-xs-12 menu-top-tabs"><i  class="fa fa-file-text-o ten-padding"></i> مواد مورد نیاز </div></a>
                            <a href="#tab2"  id="information" role="tab" data-toggle="tab"> <div class="col-md-6 col-xs-12 menu-top-tabs"><i  class="fa fa-info-circle ten-padding"></i>دستور پخت غذا</div></a>
                        </div>
                        <div class="tab-content col-md-12 col-lg-12 col-centered  white_block">
                            <!--Tab Content 1 -->
                            <div class="tab-pane active in fade" id="tab1">
                                <div class="row">
                                    <h6 class="right"> مواد مورد نیاز برای تهیه <%recipe.sName%></h6>
                                    <br>
                                    <hr>

                                    <div class="col-lg-8 col-md-8 "style="text-align: right">
                                        <h6 class="right"><i class="fa fa-user"></i> مواد لازم برای 4 نفر</h6>
                                        <h6 class="left"><i class="fa fa-clock-o"></i> زمان آماده سازی : 20 دقیقه</h6>
                                        <br>
                                        <hr>
                                        <ul>
                                            <li><i class="fa fa-check"></i><a href="#"> کنسرو نخود یا نخود پخته شده 420 گرم  </a></li>
                                            <li><i class="fa fa-check"></i><a href="#"> آب لیموی تازه 1/4 پیمانه </a></li>
                                            <li><i class="fa fa-check"></i><a href="#"> جعفری تازه خرد شده 1/3 پیمانه </a></li>
                                            <li><i class="fa fa-check"></i><a href="#"> شکر 1 قاشق چایخوری </a></li>
                                            <li><i class="fa fa-check"></i><a href="#"> فلفل دلمه‌ای قرمز (خرد شده) 1 عدد </a></li>
                                            <li><i class="fa fa-check"></i><a href="#"> بلغور گندم 1 پیمانه </a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <img class="img-responsive" ng-src="{{'img/noimage.jpg'}}"/>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab2">
                                <div class="row">
                                    <h6 class="right">دستور پخت <%recipe.sName%></h6>
                                    <br>
                                    <hr>
                                    <p>
                                        <%recipe.sDesc%>
                                    </p>
                                </div>
                            </div>

                        </div>
                        <!--tab-content-->
                    </div>
                    <!-- /container -->
                </section>
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
