@extends('master')
@section('title', 'ثبت رستوران')
@section('index')
    @include('home.header')

    <style type="text/css">
        #map_canvas {
            height: 350px;
            /*width: 500px;*/
            margin: 0px;
            background-color: #cccccc;
        }
        #map_canvas {
            position: relative;
        }
        .angular-google-map-container { height: 300px; }
    </style>
    <!--start row div -->
    <section id="services" class="pattern" ng-controller="RestaurantRegisterCtrl">
        <div class="container" id="service-container">
            <!-- start form -->
            <div id="login-restaurants">
                {!! Form::open(['ng-submit' => 'restaurantRegister($event)']) !!}
                <div class="row">
                    <div class="col-lg-6 col-lg-push-6">
                        <div class="input-set">
                            <label>
                                نام و نام خانوادگی(مدیر) * :
                            </label>
                            <i class="fa fa-user"></i>
                            {!! Form::text('name', null, ['class' => 'form-control', 'autocomplete' => 'off', 'ng-model' => 'registerForm.name']) !!}
                        </div>
                    </div>
                    <!--<div class="col-sm-6 col-xs-12">
                        <div class="input-set">
                            <label>نام خانوادگی * :
                                {!!  $errors->has('family') ? '<span class="warning">ورود نام خانوادگی الزامی است</span>' : '' !!}
                            </label>
                            <i class="fa fa-user"></i>
                            {!! Form::text('family', null, ['class' => 'form-control', 'autocomplete' => 'off', 'ng-model' => 'registerForm.family']) !!}
                            </div>
                        </div>-->
                    <div class="col-lg-6 col-lg-pull-6">
                        <div class="input-set">
                            <label>شماره موبایل(نام کاربری)* :</label>
                            <i class="fa fa-user-plus"></i>
                            {!! Form::text('username', null, ['class' => 'form-control', 'autocomplete' => 'off', 'digit', 'cellphone', "placeholder" => "09", 'ng-model' => 'registerForm.username']) !!}
                        </div>
                    </div>

                    <!--<div class="col-sm-6 col-xs-12">
                        <div class="input-set">
                            <label>شماره ملی * :
                                {!!  $errors->has('nationalCode') ? '<span class="warning">ورود شماره ملی الزامی است</span>' : '' !!}
                            </label>
                            <i class="fa fa-info"></i>
                            {!! Form::text('nationalCode', null, ['class' => 'form-control', 'autocomplete' => 'off', 'digit' => "", 'ng-model' => 'registerForm.nationalCode']) !!}
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="input-set">
                                <label>شماره مجوز کسب  :
                                </label>
                                <i class="fa fa-info"></i>
                                {!! Form::text('licenseCode', null, ['class' => 'form-control', 'autocomplete' => 'off', 'digit' => "", 'ng-model' => 'registerForm.licenseCode']) !!}
                            </div>
                        </div>-->
                    <div class="col-lg-6 col-lg-push-6">
                        <div class="input-set">
                            <label>رمز * :</label>
                            <i class="fa fa-lock"></i>
                            <input type="password" name="password" ng-model="registerForm.password" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-lg-6 col-lg-pull-6">
                        <div class="input-set">
                            <label>تایید رمز * :</label>
                            <i class="fa fa-lock"></i>
                            <input type="password" name="passwordconfirm" ng-model="registerForm.passwordconfirm" class="form-control"/>

                        </div>
                    </div>
                    <div class="col-lg-6 col-lg-push-6">
                        <div class="input-set">
                            <label>استان * :</label>
                            <i class="fa fa-area-chart"></i>
                            <select class="selectMyTheme" ng-model="registerForm.state" ng-change="selectedaction()">
                                <option ng-selected="true">نام استان</option>
                                <option value="1">البرز</option>
                                <option value="2">هرمزگان</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-lg-pull-6">
                        <div class="input-set">
                            <label>شهر * :</label>
                            <i class="fa fa-circle-thin"></i>
                            <select class="selectMyTheme" ng-model="registerForm.city">
                                <option ng-selected="true">نام شهر</option>
                                <option ng-repeat="name in city" value="<%name%>"><%name%></option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12 ">
                        <div class="input-set">
                            <label>آدرس * :</label>
                            <i class="fa fa-university"></i>
                            {!! Form::text('address', null, ['class' => 'form-control', 'autocomplete' => 'off', 'ng-model' => 'registerForm.address']) !!}
                        </div>
                    </div>

                    <div class="col-lg-6 col-lg-push-6">
                        <div class="input-set">
                            <label>نام رستوران * :</label>
                            <i class="fa fa-cutlery"></i>
                            {!! Form::text('restaurantName', null, ['class' => 'form-control', 'autocomplete' => 'off', 'ng-model' => 'registerForm.restaurantName']) !!}
                        </div>
                    </div>
                    <div class="col-lg-6 col-lg-pull-6">
                        <div class="input-set">
                            <label>نام رستوران(انگلیسی) * :</label>
                            <i class="fa fa-cutlery"></i>
                            {!! Form::text('restaurantEnName', null, ['class' => 'form-control', 'autocomplete' => 'off', 'ng-model' => 'registerForm.restaurantEnName']) !!}
                        </div>
                    </div>
                    <div class="col-lg-6 col-lg-push-6">
                        <div class="input-set">
                            <label>ایمیل  :</label>
                            <i class="fa fa-envelope"></i>
                            {!! Form::email('email', null, ['class' => 'form-control', 'autocomplete' => 'off', 'ng-model' => 'registerForm.email']) !!}
                        </div>
                    </div>
                    <!--<div class="col-sm-6 col-xs-12">
                        <div class="input-set">
                            <label>شماره همراه * :
                                <span class="warning">{{$errors->has('mobile') ? "ورود شماره همراه الزامی است." : ""}}</span>
                                <span class="warning">{{$errors->has('mobile_exists') ? $errors->first('mobile_exists') : ""}}</span>
                            </label>
                            <i class="fa fa-mobile-phone"></i>
                            {!! Form::text('mobile', null, ['class' => 'form-control', 'autocomplete' => 'off', 'cellphone', 'digit', "placeholder" => "09"]) !!}
                            </div>
                        </div>--->
                    <div class="col-lg-6 col-lg-pull-6">
                        <div class="input-set">
                            <label>شماره تلفن ثابت * :</label>
                            <i class="fa fa-phone"></i>
                            {!! Form::text('landlinePhone', null, ['class' => 'form-control', 'autocomplete' => 'off', 'digit', 'ng-model' => 'registerForm.landlinePhone']) !!}
                        </div>
                    </div>
                    <div class="col-md-12 ">
                        <div class="input-set">
                            <label>توضیحات  : </label>
                            {!! Form::textarea('desc', null, ['class' => 'form-control noResize', 'ng-model' => 'registerForm.desc']) !!}
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="input-set">
                            <input type="hidden" ng-model="position.latitude"/>
                            <input type="hidden" ng-model="position.longitude"/>
                            <label>آدرس رستوران روی نقشه  : </label>
                            <div class="well">
                                <ui-gmap-google-map center="map.center" zoom="map.zoom" draggable="true" options="map.options" events="map.events" bounds="map.bounds">
                                    <ui-gmap-marker idkey="marker.id" coords="marker.coords" click="marker.click" options="marker.options" events="marker.events" control="marker.control">
                                    </ui-gmap-marker>
                                </ui-gmap-google-map>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        {!!  $errors->has('security_code') ? '<span class="warning">لطفا کد امنیتی را وارد نمایید.</span>' : '' !!}
                        <div class="captcha">
                            <i class="fa fa-refresh" id="refresh_captcha" ng-click="reload_captcha()"></i>
                            <input type="text" name="security_code" placeholder="کد امنیتی" autocomplete="off" ng-model="registerForm.security_code"/>
                            <div><img ng-src="<% captcha_new %>"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        {!! Form::submit('ثبت رستوران', ['class' => 'btn btn-primary', 'ng-disabled' => 'registerLoading']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div><!--end row div -->
        </div>
    </section>
    @section('script')
        <script src='//maps.googleapis.com/maps/api/js'></script>
@endsection
        @include('home.footer')
@endsection