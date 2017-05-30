@extends('master')
@section('title', 'لیست رستوران ها')
@section('index')

    @include('home.header')
    <section id="services" class="pattern" ng-controller="RestListCtrl">
        <div class="modal fade" id="fav-modal">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header" >
                        <i style="float: left" class="fa fa-close" type="button" class="close" data-dismiss="modal"></i>
                        <h6> اضافه به علاقه مندی ها</h6>
                        <h6><%message%></h6>
                    </div>
                    <div class="modal-body listComplainModal">
                        <div class="row" style="padding: 10px">
                            <div class="col-lg-7 col-md-7 well">
                                <h6><%product.name%></h6>
                                <p><%product.description%></p>

                                <input type="text" style="display: none;" ng-model="favorite.person_id">
                                <br>
                                <form class="">
                                    <p> پوشه علاقه مندی ها</p>
                                    <div class="form-group input-group ">
                                        <span class="input-group-addon"><abbr class="fa fa-chevron-circle-down"></abbr></span>
                                        <select class="form-control favSelectStyle" ng-model="favorite.folder">
                                            <option selected value="0">افزودن به پوشه جدید</option>
                                            <option ng-repeat="group in groups" value="<%group.iID%>"><%group.sName%></option>
                                        </select>
                                    </div>
                                    <p> نام پوشه</p>
                                    <div class="form-group input-group" ng-show="favorite.folder == 0">
                                        <span class="input-group-addon"><abbr class="fa fa-edit"></abbr></span>
                                        <input type="text" class="form-control favSelectStyle"  ng-model="favorite.folderName">
                                        <span class="input-group-addon"><a class="input-addon-style" ng-click="addGroup()" ng-show="favorite.folderName"><%btn_folder_title%></a>&nbsp;&nbsp;<span style="font-size: 12px" class="fa fa-chevron-left"></span></span>
                                    </div>
                                </form>

                            </div>
                            <div class="col-lg-5 col-md-5" style="border-left: solid #CCCCCC 1px">
                                <img class="img-responsive img-thumbnail" ng-src="data:image/jpeg;base64,<% product.picture %>" style="margin: 30px">
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea style="border: solid #8c8c8c 1px;resize: none" class="form-control " rows="5" id="comment" placeholder="توضیحات" ng-model="favorite.description"></textarea>
                                </div>
                            </div>
                            <button type="button" ng-click="addFavorite()" class="btn btn-success-custom pull-left"><%favorite_button_title%></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="complain-modal">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header" >
                        <i style="float: left" class="fa fa-close" type="button" class="close" data-dismiss="modal"></i>
                        <h6>گزارش آگهی</h6>
                    </div>
                    <div class="modal-body listComplainModal">
                        <div class="row" style="padding: 10px">
                            <div class="col-lg-12 col-md-12 well">
                                <h6><%product.name%></h6>
                                <p>چنانچه معتقدید این آگهی به هر دلیلی مبهم و گمراه کننده است می توانید آن را با تیم باما در میان بگذارید. ما بوسیله ابزارهایی که در اختیار داریم سطح کیفی این آگهی را مورد سنجش قرار داده و پس از بررسی های لازم نتیجه را اعمال خواهیم کرد.</p>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="radio">
                                    <label><input type="radio" name="optradio"> عدم تایید کیفیت </label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio">   عدم وجود پیک</label>
                                </div>
                                <div class="radio ">
                                    <label><input type="radio" name="optradio" >عدم تایید ارسال </label>
                                </div>
                                <div class="form-group">
                                    <textarea style="border: solid #8c8c8c 1px;resize: none" class="form-control " rows="5" id="comment" placeholder="توضیحات" ng-model="favorite.description"></textarea>
                                </div>
                            </div>
                            <button type="button" ng-click="addFavorite()" class="btn btn-success-custom pull-left"><%favorite_button_title%></button>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div class="container-fluid" id="service-container-restaurants">
            <div class="row">
                <form>
                    <div class="form-group input-group col-md-4 col-sm-4 col-xs-12">
                        <input class="form-control" style="border-right: solid 4px #a7221a" type="text" placeholder="نام رستوران را جستجو کنید." ng-model="condition.company" ng-keyup="search()">
                    </div>
                    <div class="form-group input-group col-md-4 col-sm-4 col-xs-12">
                        <select class="form-control" style="-moz-appearance: none;-webkit-appearance: none;" ng-model="condition.state" ng-change="search()">
                            <option  ng-selected="true" value="0"> انتخاب استان</option>
                            <option value="البرز">البرز</option>
                            <option value="هرمزگان">هرمزگان</option>
                        </select>
                    </div>
                    <div class="form-group input-group col-md-4 col-sm-4 col-xs-12">
                        <select class="form-control" style="-moz-appearance: none;-webkit-appearance: none;" ng-model="condition.city" ng-change="search()">
                            <option ng-selected="true"> انتخاب شهر</option>
                            <option ng-repeat="city in condition.cities"><%city%></option>
                        </select>
                    </div>
                </form>

                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 listSidebar">
                    <div id="checkout-cart">
                        <header style="padding: 10px">
                            <i class="fa fa-bars"></i>جستجو بر اساس
                        </header><!-- start header cart -->
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="search-restaurant">
                            <div ng-repeat="cf_list in cf_lists">
                                <div class="inputs-search-services" ng-if="cf_list.iType=={{STRING_FILED}}">
                                    <input class="form-control string-style" type="text" ng-keyup="search()" placeholder="<%cf_list.sName%>" ng-model="condition.name[cf_list.iID]"/>
                                </div>
                                <div ng-if="cf_list.iType=={{LIST_ITEM_FIELD}}">
                                    <strong ng-bind="cf_list.sName"></strong>
                                    <select ng-change="search()" ng-model="condition.type[cf_list.iID]">
                                        <option value="0" selected>انتخاب کنید</option>
                                        <option ng-repeat="cf_item in cf_items" ng-if="cf_list.iID==cf_item.iFieldID" value="<%cf_item.iID%>"><%cf_item.sValue%></option>
                                    </select>
                                </div>
                                <div ng-if="cf_list.iType=={{BOOLEAN_FILED}}" >
                                    <div class="checkbox-section">
                                        <div class="checkbox">
                                            <input class="form-control" type="checkbox" id="checked-car-<%$index%>" ng-model="condition.check[cf_list.iID]" ng-false-value="'0'" ng-true-value="'1'" ng-change="search()">
                                            <label for="checked-car-<% $index %>"></label>
                                        </div>
                                        <span ng-bind="cf_list.sName"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end aside -->
                <div  class="col-md-9 col-lg-9 col-sm-12 col-xs-12" style="padding: 0">
                    <div class=" col-lg-12 col-md-12 col-xs-12 xol-sm-12 col-centered white_block">

                        <div class="services_panel" ng-repeat="restaurant in restaurants">
                            <div class="col-md-3">
                                <div class="panel text-center">
                                    <a href="restaurant/<%restaurant.company%>"></a>

                                    <img ng-if="restaurant.picture" ng-src="data:image/jpeg;base64,<% restaurant.picture %>"/>
                                    <img ng-if="!restaurant.picture" ng-src="{{'img/noimage.jpg'}}"/>
                                    <p ng-bind="restaurant.address"></p>

                                        <a style="font-size: 20px" data-target="#fav-modal" data-toggle="modal"  ng-click="productSelect(restaurant)"><i class="fa fa-star"></i></a>
                                        <a style="font-size: 20px" data-target="#complain-modal" data-toggle="modal"  ng-click="productSelect(restaurant)"><i class="fa fa-comments-o"></i></a>

                                    <button class="btn center-block btn-success">
                                        <a class="list-text" href="restaurant/<%restaurant.company%>"><div class="teamname"><h5 ng-bind="restaurant.name"></h5></div></a>

                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class=" col-md-12">
                        <ul class="pagination">
                            <li ng-class="{disabled: current_page == 1}"><a class="fa fa-chevron-right" ng-click="getPage(current_page - 1)"></a></li>
                            <li ng-repeat="page in pages" ng-class="{active: current_page == page}">
                                <a ng-click="getPage(page)"><%$index + 1%></a>
                            </li>
                            <li ng-class="{disabled: current_page >= last_page}"><a class="fa fa-chevron-left" ng-click="getPage(current_page + 1)"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div style="text-align: center;">
                <img ng-src="img/ajax-loader.png" ng-show="loading_list && restaurants" style="height: 100px;" />
            </div>
        </div><!-- end .row div -->
        <!-- /container-->
    </section>
    @include('home.footer')
@endsection