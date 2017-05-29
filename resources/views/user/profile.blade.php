@extends('master')
@section('id', 'profile-main')
@section('title', 'پروفایل')
@include('home.header')
@section('index')
        <!-- start main -->
<main id="profile-main" ng-controller="ProfileCtrl">

    <div class="modal fade bs-order-modal-lg" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="gridSystemModalLabel">جزئیات سفارش</h4>
                </div>
                <div class="modal-body">
                    <table class="table table-hover table-striped factorTbl">
                        <thead >
                        <tr>
                            <th>#</th>
                            <th>نام کالا</th>
                            <th>قیمت</th>
                            <th>">تعداد</th>
                            <th>جمع کل</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr ng-repeat="order in orders">
                            <td><% $index + 1 %></td>
                            <td><% order.sName %></td>
                            <td><% order.dPrice|currency:"":0 %></td>
                            <td><% order.dCount %></td>
                            <td><% order.dCount * order.dPrice|currency:"":0 %></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">بستن</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.col-->

    <!-- start section-profile div -->
    <div class="section-profile">
        <div class="row" id="profile-row1">
            <div class="col-md-3 col-sm-3 col-xs-12 pull-right">

                <div class="user-id">
                    <form method="post" enctype="multipart/form-data" ng-submit="upload()" id="profile-form">
                        <img ng-src="data:image/jpeg;base64,<% profile.image %>" id="profile-img"/>
                        <div id="user-photo-change-div">
                            <button type="button"  ng-click="removeProfileImage()" for="user-photo-remove"><i class="fa fa-times-circle"></i></button>
                            <button type="submit"  for="user-photo"><i class="fa fa-check-circle"></i></button>
                            <label  for="profile-image"><i class="fa fa-upload"></i></label>
                            <input  type="file" name="profileimage" id="profile-image">
                        </div>
                    </form>

                    <div ng-repeat="err in errors">
                        <div class="alert alert-success alert-dismissable">
                            <strong><%err[$index]%></strong>
                            <a href="#" class="close" data-dismiss="alert"><span class="fa fa-close"></span></a>
                        </div>
                    </div>
                    <h4>{{Session::get('customer_name')}}</h4>
                    <ul class="nav" role="tablist">
                        <li class="active"  role="presentation"><a href="#settings" data-toggle="tab" area-control="settings" role="tab"><i class="fa fa-cog"></i>تنظیمات پروفایل</a></li>
                        <li role="presentation"><a href="#change-password" data-toggle="tab" area-control="settings" role="tab"><i class="fa fa-lock"></i>تغییر رمزعبور</a></li>
                        <li role="presentation"><a href="#address" data-toggle="tab" area-control="address" role="tab"><i class="fa fa-building-o fa-2x"></i>آدرس ها</a></li>
                        <li role="presentation"><a href="#increase-account" data-toggle="tab" area-control="increase-account" role="tab"><i class="fa fa-google-wallet"></i>افزایش اعتبار</a></li>
                        <li role="presentation"><a href="#user-document" data-toggle="tab" area-control="user-document" role="tab"><i class="fa fa-paperclip"></i>فاکتورها</a></li>
                        <!--<li role="presentation"><a href="#user-transaction" data-toggle="tab" area-control="user-transaction" role="tab"><i class="fa fa-credit-card"></i>تراکنش های من</a></li>-->
                        <li role="presentation"><a href="#user-favorite" data-toggle="tab" area-control="user-favorite" role="tab"><i class="fa fa-heart"></i>علاقه مندی ها</a></li>
                        <li role="presentation"><a href="#user-comment" data-toggle="tab" area-control="user-comment" role="tab"><i class="fa fa-comment"></i>نظرات من</a></li>
                        <li role="presentation"><a href="#user-suggestion" data-toggle="tab" area-control="user-suggestion" role="tab"><i class="fa fa-plus"></i>پیشنهاد رستوران </a></li>
                        <li role="presentation"><a href="#user-complaint" data-toggle="tab" area-control="user-complaint" role="tab"><i class="fa fa-legal"></i>انتقاد/پیشنهاد/شکایات</a></li>
                        <li role="presentation"><a href="{{route('user.logout')}}" area-control="user-favorite" role="tab"><i class="fa fa-arrow-circle-o-right"></i>خروج</a></li>
                    </ul>
                </div>
            </div><!-- end col-md-3 -->
            <div class="col-md-9 col-sm-9 col-xs-12" id="tab-background">
                <div class="tab-content">
                    <!-- start settings div -->
                    <div class="tab-pane active" role="tabpanel1" id="settings">
                        <form id="profile-form-settings" ng-submit="updateProfile()">
                            <div class="row" id="profile-row2">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="input-set">
                                        <i class="fa fa-user "></i>
                                        <input type="text" class="form-control"  name="family" placeholder="نام" ng-model="profile.name"/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="input-set">
                                        <i class="fa fa-user-plus "></i>
                                        <input type="text" name="family" class="form-control" placeholder="نام خانوادگی"  ng-model="profile.family"/>
                                    </div>
                                </div><!-- end col-md-6 -->
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="input-set">
                                        <i class="fa fa-user-md "></i>
                                        <input type="text" class="form-control"  name="username" placeholder="نام کاربری" ng-model="profile.username" readonly/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="input-set">
                                        <i class="fa fa-envelope"></i>
                                        <input type="email" name="email" class="form-control" placeholder="ایمیل"  ng-model="profile.email"/>
                                    </div>
                                </div><!-- end col-md-6 -->
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="input-set">
                                        <i class="fa fa-phone"></i>
                                        <input type="number" class="form-control"  name="phone" placeholder="شماره تلفن ثابت" ng-model="profile.landline"/>
                                    </div>
                                </div><!-- end col-md-6 -->
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="input-set">
                                        <i class="fa fa-mobile-phone"></i>
                                        <input type="number" name="cell-phone" class="form-control" placeholder="شماره همراه"  ng-model="profile.cellphone"/>
                                    </div>
                                </div><!-- end col-md-6 -->

                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="input-set">
                                        <i class="fa fa-birthday-cake"></i>
                                        <input type="text" class="form-control birthday"  name="date" placeholder="تاریخ تولد" id="birthdate" ng-model="profile.birthdate"/>
                                    </div>
                                </div><!-- end col-md-6 -->
                                <!--<div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="input-set">
                                        <i class="fa fa-stumbleupon-circle"></i>
                                        <select class="form-control">
                                            <option>تحصیلات</option>
                                            <option>دیپلم</option>
                                            <option>لیسانس</option>
                                            <option>فوق لیسانس</option>
                                            <option>دکترا</option>
                                        </select>
                                    </div>
                                </div><!-- end col-md-6 -->
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="input-set">
                                        <i class="fa fa-user-secret"></i>
                                        <select class="form-control" name="sex" ng-model="profile.sex">
                                            <option ng-repeat="ss in sexSelect" ng-selected="profile.sex == ss.id" value="<%ss.id%>"><%ss.title%></option>
                                        </select>
                                    </div>
                                </div><!-- end col-md-12 -->
                                <div class="col-md-12  col-xs-12">
                                    <label for="content">در باره من:</label>
                                    <textarea class="form-control noResize" name="content" rows="7" ng-model="profile.about"></textarea>
                                </div><!-- end col-md-12 -->
                                <div class="col-md-12 col-xs-12">
                                    <input type="submit" class="btn profile-submit" value="<%title_btn_update_profile%>" ng-disabled="loading">
                                </div>
                            </div><!-- end row -->
                        </form>
                    </div><!-- end settings div -->
                    <!--start user-favorite div -->
                    <div id="change-password" class="tab-pane" role="tabpanel">
                        <form id="profile-form-settings"  ng-submit="changePassword()">
                            <div class="row" id="profile-row2">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="input-set">
                                        <i class="fa fa-key"></i>
                                        <input type="password" class="form-control"  name="old-password" ng-model="password.old" placeholder="رمز قبلی" autocomplete="off"/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="input-set">
                                        <i class="fa fa-key"></i>
                                        <input type="password" name="new-password" class="form-control"  ng-model="password.new" placeholder="رمز عبورجدید" autocomplete="off"/>
                                    </div>
                                </div><!-- end col-md-6 -->
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="input-set">
                                        <i class="fa fa-key"></i>
                                        <input type="password" class="form-control"  name="re-new-password"  ng-model="password.confirm" placeholder="تکرار رمز عبورجدید" autocomplete="off"/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="input-set">
                                        <input type="submit" class="btn profile-submit" value="تغییر">
                                    </div>
                                </div><!-- end col-md-6 -->
                            </div>
                        </form>
                    </div><!--end user-favorite div -->
                    <!-- start address div -->
                    <div id="address" role="tabpanel" class="tab-pane" ng-controller="AddressCtrl">
                        <div class="user-address">
                            <form id="profile-form-new-address" ng-repeat="pa in person_address">
                                <div class="tab-content">
                                    <div id="address-label" role="tabpanel" class="tab-pane active">
                                        <h4>شهر : <%pa.sCity%></h4>
                                        <p>آدرس : <%pa.sAddress%></p>
                                        <p>تلفن : <%pa.sTel1%></p>
                                    </div>
                                    <!--<div id="edit" role="tabpanel" class="tab-pane" >
                                        <input type="text" class="form-control" placeholder="شهر خود را وارد نمایید" ng-model="address.sCity">
                                        <input type="text" class="form-control" placeholder="آدرس دقیق خود را وارد کنید" ng-model="address.sAddress">
                                        <!--<input type="text" class="form-control" placeholder="برچسب آدرس مانند(خانه دانشگاه...)">
                                    </div>-->
                                </div>
                                <ul role="tablist" class="address-tab-menu">
                                    <!--<li role="presentation"><a href="#address-label" data-toggle="tab" role="tab" aria-controls="address-label">تایید</a></li>-->
                                    <li role="presentation" class="active"><a data-toggle="tab" role="tab" aria-controls="edit" ng-click="edit(pa)">ویرایش</a></li>
                                    <li role="presentation" class="active"><a data-toggle="tab" href="javascript:" role="tab" aria-controls="edit" ng-click="delete(pa.iID, $index)"> حذف</a></li>
                                </ul>
                            </form>
                        </div>
                        <div class="new-address" ng-init="addAddress == false">
                            <input type="button" class="btn btn-primary"  value="آدرس جدید" ng-click="addAddress=true; address={}"/>
                            <form id="profile-form-new-address" ng-show="addAddress" ng-submit="add()" name="addressFrom" novalidate>
                                <a class="pull-left" href="javascript:"><i class="fa fa-remove" ng-click="addAddress=false"></i></a>
                                <!--<div ng-show="addressFrom.$submitted  || addressFrom.city.$touched">
                                    <span ng-show="addressFrom.city.$error.required">نام شهر را خود را وارد نمایید.</span>
                                </div>-->
                                <input type="text" class="form-control" placeholder="شهر خود را وارد نمایید" ng-model="address.sCity" required="" name="city">
                                <!--<div ng-show="addressFrom.$submitted  || addressFrom.address.$touched">
                                    <span ng-show="addressFrom.address.$error.required">آدرس خود را وارد نمایید.</span>
                                </div>-->
                                <input type="text" class="form-control" placeholder="آدرس دقیق خود را وارد کنید" ng-model="address.sAddress" required="" name="address">
                                <!--<div ng-show="addressFrom.$submitted  || addressFrom.tel.$touched">
                                    <span ng-show="addressFrom.tel.$error.required">شماره تلفن خود را وارد نمایید.</span>
                                </div>-->
                                <input type="text" class="form-control" placeholder="تلفن" ng-model="address.sTel1" required="" name="tel">
                                <!--<input type="text" class="form-control" placeholder="برچسب آدرس مانند(خانه دانشگاه...)">-->
                                <input type="submit" name="save-address" value="<%loading_title%>" class="btn btn-primary"  ng-disabled="addressFrom.tel.$error.required || addressFrom.city.$error.required || addressFrom.address.$error.required">
                            </form>
                        </div>
                    </div><!-- end address div -->
                    <!-- start increase-account div -->
                    <div id="increase-account" role="tabpanel" class="tab-pane">
                        <p>با شارژ حساب خود ، در هر بار سفارش به راحتی و سریع‌تر غذای خود را سفارش دهید و دیگر نیازی به وارد کردن اطلاعات کارت بانکی نخواهید داشت.</p>
                        <div class="row" id="increase-account-row">
                            <div class="col-md-8 col-xs-8">
                                <input type="text" class="form-control" placeholder="مبلغ مورد نظر خود را وارد نمایید">
                            </div>
                            <div class="col-md-4 col-xs-4">
                                <input type="submit" value="افزایش اعتبار" class="btn btn-primary" data-toggle="modal" data-target="#increase-modal" style="margin: 0">
                            </div>
                        </div><!-- end row -->
                        <!-- start increase-modal div -->
                        <div class="modal fade" id="increase-modal" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <p>مبلغ <span>20000</span>ریال را تایید میکنید؟</p><br>
                                        <p>
                                            <input type="submit" value="بله" class="btn btn-primary" />
                                            <input type="submit" value="خیر" class="btn btn-danger" data-dismiss="modal" />
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end increase-account div -->
                    <!-- start user-document div -->
                    <div class="tab-pane" role="tabpanel" id="user-document" style="padding-top: 10px">
                        <div class="table-responsive">

                            <table class="table table-bordered table-striped table-hover">
                                <tr>
                                    <th style="direction: rtl;text-align: right">#</th>
                                    <th style="direction: rtl;text-align: right;width: 13%">تاریخ  فاکتور </th>
                                    <th style="direction: rtl;text-align: right">ساعت</th>
                                    <th style="direction: rtl;text-align: right">جمع</th>
                                    <th style="direction: rtl;text-align: right">تاریخ تحویل</th>
                                    <th style="direction: rtl;text-align: right">وضعیت</th>
                                    <th style="direction: rtl;text-align: right">شماره فاکتور</th>
                                    <th style="direction: rtl;text-align: right">آدرس</th>
                                    <th style="direction: rtl;text-align: right">رستوران</th>
                                    <th style="direction: rtl;text-align: right">توضیحات</th>
                                    <th style="direction: rtl;text-align: right">عملیات</th>
                                    <th style="direction: rtl;text-align: right">شکایت</th>
                                </tr>
                                <tr ng-repeat="factor in factors">
                                    <td ><% $index + 1 %></td>
                                    <td><% factor.date %></td>
                                    <td><% factor.time %></td>
                                    <td><% factor.sum|currency:"":0 %></td>
                                    <td></td>
                                    <td><%factor.status == 0 ? 'در حال رسیدگی' : 'تایید شد'%></td>
                                    <td><%factor.num%></td>
                                    <td><%factor.address%></td>
                                    <td></td>
                                    <td><%factor.desc%></td>
                                    <td>
                                        <a title="نمایش جز‍ئیات" ng-click="detail(factor.num)"><span class="fa fa-reorder"></span> </a>
                                    </td>
                                    <td>
                                        <a ng-show="factor.status!=0" ng-click="showComplainFrom(factor)"><span class="fa fa-comments-o"></span> </a>
                                    </td>
                                </tr>
                            </table>

                            <div id="newComForm">
                                <fieldset>
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="row" style="padding: 10px">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="row">
                                                        <form class="form-horizontal col-md-8" name="complaintForm" ng-submit="complaintSave()" id="contact_form" novalidate>
                                                            <fieldset>
                                                                <div class="form-group">
                                                                    <div class="col-md-12 inputGroupContainer">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                                            <input name="title" placeholder=" عنوان خود را وارد کنید" class="form-control" type="text" required ng-model="complaint.title">
                                                                            <div ng-show="complaintForm.$submitted">
                                                                                <div ng-show="complaintForm.title.$invalid && !complaintForm.title.$pristine">
                                                                                    <span>لطفا عنوان را وارد نمایید</span>
                                                                                </div>
                                                                            </div>
                                                                            <input name="person_id" class="form-control" type="hidden" ng-model="complaint.person_id">
                                                                            <input name="peoduct_id" class="form-control" type="hidden"  ng-model="complaint.product_id">
                                                                            <input name="factor_id" class="form-control" type="hidden"  ng-model="complaint.factor_id">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="col-md-12 inputGroupContainer">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                                                            <textarea style="resize: none;" rows="6" class="form-control" ng-model="complaint.body" name="body" required placeholder="موضوع شکایت خود را وارد نمایید."></textarea>
                                                                            <div ng-show="complaintForm.$submitted">
                                                                                <div ng-show="complaintForm.body.$invalid && !complaintForm.body.$pristine && complaintForm.$submitted">
                                                                                    <span>لطفا موضوع شکایت را وارد نمایید</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="col-md-12 inputGroupContainer">
                                                                        <input type="range" max="100" min="0" step="10" ng-model="complaint.score" title="<%complaint.score%>"/>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-md-4 control-label"></label>
                                                                    <div class="col-md-4">
                                                                        <button type="submit" class="btn btn-warning" ng-disabled="!complaintForm.body.$valid || !complaintForm.title.$valid"><%title_button_complaint%><span class="glyphicon glyphicon-send"></span></button>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                        </form>
                                                        <form class="form-horizontal col-md-4" action=" " method=""  id="contact_form">
                                                            <fieldset>
                                                                <br>
                                                                <h6>اطلاعات تماس رستوران جهت انتقادات و پیشنهادات </h6>
                                                                <br>
                                                                <div>
                                                                    <span class="fa fa-phone"></span>&nbsp;&nbsp;&nbsp;<span>تلفن تماس : 02634312845  </span>
                                                                </div>
                                                                <br>
                                                                <div>
                                                                    <span class="fa fa-mobile"></span>&nbsp;&nbsp;&nbsp;<span>تلفن همراه : 09125901065  </span>
                                                                </div>
                                                                <br>
                                                                <div>
                                                                    <span class="fa fa-location-arrow"></span>&nbsp;&nbsp;&nbsp;<span>آدرس : البرز - کرج - خیابان شهید بهشتی - خیابان کمالی (امامی) -پلاک 32  </span>
                                                                </div>
                                                                <br>
                                                                <div>
                                                                    <span class="fa fa-envelope"></span>&nbsp;&nbsp;&nbsp;<span>پست الکترونیک : info@hipors.ir</span>
                                                                </div>
                                                                <br>
                                                                <div>
                                                                    <span class="fa fa-globe"></span>&nbsp;&nbsp;&nbsp;<span>آدرس سایت : www.hipors.ir</span>
                                                                </div>
                                                                <br>

                                                                <div>
                                                                    <span class="fa fa-globe"></span>&nbsp;&nbsp;&nbsp;<span>آدرس سایت : www.hipors.ir</span>
                                                                </div>
                                                                <br>

                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>


                        </div>
                    </div><!-- end user-document div -->
                    <!--start user-favorite div -->
                    <div id="user-favorite" class="tab-pane" role="tabpanel">
                        <div class="col-lg-12 col-md-12 col-sm-12">

                            <div class="favoritefolder col-lg-4 col-md-4 col-sm-4" ng-repeat="group in groups">
                                <a ng-click="showFavorite(group.iID)"><span class="fa fa-folder-open-o"></span>&nbsp;&nbsp;<%group.sName%></a><span style="float: left" class="fa fa-remove" ng-click="deleteGroup(group)"></span>
                            </div>

                            <div class="col-lg-12 col-md-12 favoriteItem" ng-repeat="favorite in favorites">
                                <div class="col-lg-10 col-md-10 favoriteItemText">
                                    <div class="col-lg-1 col-md-1">
                                        <a ng-click="deleteFavorite(favorite)" title="حذف"> <span class="fa fa-remove"></span></a>
                                    </div>
                                    <div class="col-lg-11 col-md-11">
                                        <a href="/restaurant/<%favorite.restaurant.sCompany%>" target="_blank"><div class="teamname"><h6 ng-bind="favorite.restaurant.sName"></h6></div></a>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2">
                                    <img class="img-responsive img-thumbnail" ng-src="data:image/jpeg;base64,<% favorite.restaurant.oPicture %>">
                                </div>
                            </div>
                        </div>
                        <!--<div class="row" style="padding: 10px">
                            <button onclick="showNewFolder()" style="float: left" class="btn btn-success-custom"><span class="fa fa-folder"></span>&nbsp;&nbsp;<span>پوشه جدید </span></button>
                        </div>-->
                        <div id="newFavFolder">
                            <fieldset>
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="row" style="padding: 10px">
                                            <div class="col-lg-7 col-md-7 well">
                                                <h6> نام محصول</h6>
                                                <p> توضیحات اضافی برای محصول</p>
                                                <br>
                                                <form class="">
                                                    <p> پوشه علاقه مندی ها</p>
                                                    <div class="form-group input-group ">
                                                        <span class="input-group-addon"><abbr class="fa fa-chevron-circle-down"></abbr></span>
                                                        <select class="form-control" style="background-color: #f3f3f3;-moz-appearance: none;-webkit-appearance: none" >
                                                            <option>افزودن به پوشه جدید</option>
                                                        </select>
                                                    </div>
                                                    <p> نام پوشه</p>
                                                    <div class="form-group input-group">
                                                        <span class="input-group-addon"><abbr class="fa fa-edit"></abbr></span>
                                                        <input type="text" class="form-control"  style="background-color: #f3f3f3;">
                                                        <span class="input-group-addon"><a style="color: #ffffff">افزودن</a>&nbsp;&nbsp;<span style="font-size: 12px" class="fa fa-chevron-left"></span></span>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-lg-5 col-md-5 " style="border-left: solid #CCCCCC 1px">
                                                <img class="img-responsive img-thumbnail" src="../img/logo-test.jpg" style="margin: 30px">
                                                <button class="btn btn-success-custom pull-left">انتخاب رستوران </button>


                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <textarea style="max-width: 100%;max-height: 100px;border: solid #8c8c8c 1px" class="form-control" rows="5" id="comment" placeholder="توضیحات در مورد محصول"></textarea>
                                                </div>
                                            </div>
                                            <button class="btn btn-success-custom pull-left">ثبت </button>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>


                    </div><!--end user-favorite div -->
                    <div id="user-comment" class="tab-pane" role="tabpanel">

                    </div>
                    <div id="user-suggestion" class="tab-pane" role="tabpanel">
                        <form id="profile-form-settings" ng-submit="suggestionRestaurant()">
                            <div class="row" id="profile-row2">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="input-set">
                                        <i class="fa fa-user "></i>
                                        <input type="text" class="form-control"  name="name" placeholder="نام رستوران" ng-model="restaurant.name"/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="input-set">
                                        <i class="fa fa-map-marker "></i>
                                        <input type="text" name="family" class="form-control" placeholder="آدرس " ng-model="restaurant.address"/>
                                    </div>
                                </div><!-- end col-md-6 -->
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="input-set">
                                        <i class="fa fa-phone"></i>
                                        <input type="number" class="form-control"  name="phone" placeholder="شماره تماس " ng-model="restaurant.tel"/>
                                    </div>
                                </div><!-- end col-md-6 -->
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="input-set">
                                        <i class="fa fa-phone"></i>
                                        <input type="text" class="form-control"  name="state" placeholder="استان" ng-model="restaurant.state"/>
                                    </div>
                                </div><!-- end col-md-6 -->
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="input-set">
                                        <i class="fa fa-phone"></i>
                                        <input type="text" class="form-control"  name="city" placeholder="شهر" ng-model="restaurant.city"/>
                                    </div>
                                </div><!-- end col-md-6 -->
                                <div class="col-md-12  col-xs-12">
                                    <label for="content">اطلاعات بیشتر  :</label>
                                    <textarea class="form-control noResize" name="description" ng-model="restaurant.description" rows="7"></textarea>
                                </div><!-- end col-md-12 -->
                                <div class="col-md-12 col-xs-12">
                                    <input type="submit" class="btn profile-submit" value="ثبت رستوران" ng-disabled="isLoading">
                                </div>
                            </div><!-- end row -->
                        </form>
                    </div>
                    <div id="user-complaint" class="tab-pane" role="tabpanel">
                        <table class="table table-bordered table-striped table-hover factorTbl">
                            <tr>
                                <th >#</th>
                                <th>تاریخ</th>
                                <th>عنوان</th>
                                <th>توضیحات</th>
                                <th>شماره سفارش</th>
                                <th>نام رستوران</th>
                                <th>پاسخ دهنده </th>
                                <th>نتیجه</th>
                                <th>وضعیت</th>
                            </tr>
                            <tr ng-repeat="complain in complains">
                                <td ><% $index + 1 %></td>
                                <td><% complain.dateRegister %></td>
                                <td><% complain.title %></td>
                                <td><% complain.description %></td>
                                <td><% complain.factorNumber %></td>
                                <td><% complain.restaurantName %></td>
                                <td>-</td>
                                <td><%complain.result%></td>
                                <td><%!(complain.result) ? 'درحال رسیدگی' : 'پاسخ داده شد'%></td>
                            </tr>
                        </table>
                    </div>
                </div><!-- end tab-content div -->
            </div><!-- end col-md-9 -->
        </div><!-- end row -->
    </div><!-- end section-profile div -->

</main><!-- end main -->
@include('home.footer')
@endsection
