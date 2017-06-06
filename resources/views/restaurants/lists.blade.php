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

        <ui-view></ui-view>

        <!-- /container-->
    </section>
    @include('home.footer')
@endsection