@extends('master')
@section('title', 'بخش کاربران')
@section('index')
    @include('home.header')
    @section('login-page-background', 'login-back')
    <div id="login-body" ng-app="'UserApp">
        @if($errors->has('message_factor_register'))
            <div class="">{{ $errors->first('message_factor_register') }}</div>
        @endif
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#varood" aria-controls="varood" role="tab" data-toggle="tab">ورود</a></li>
            <li role="presentation"><a href="#sbatnam" aria-controls="sbatnam" role="tab" data-toggle="tab">ثبت نام</a></li>
            <li role="presentation"><a href="#passforget" aria-controls="passforget" role="tab" data-toggle="tab">فراموشی رمز عبور</a></li>
        </ul>
        <div id="login-div">
            <div  class="tab-content">
                <div role="tabpane1" class="tab-pane active" id="varood" ng-controller="LoginCtrl">
                    {!! Form::open(['method' => 'POST', 'ng-submit' => 'loginUser($event)']) !!}
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="input-set">
                                    <i class="fa fa-user"></i>
                                    {!! Form::text('username', null, ['placeholder' => 'نام کاربری', 'ng-model' => 'login.username', 'autocomplete' => "off"]) !!}
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="input-set">
                                    <i class="fa fa-key "></i>
                                    <input type="password" name="password" ng-model="login.password" autocomplete="off" placeholder="رمز"/>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="captcha">
                                    <i class="fa fa-refresh" ng-click="reload_logincaptcha()"></i>
                                    {!! Form::text('securitycode', null, ['placeholder' => 'عبارت امنیتی', 'ng-model' => 'login.captcha', 'autocomplete' => "off"]) !!}
                                    <div><img src="/random" ng-src="<% captcha_new_login %>"></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="input-set">
                                    <input type="submit" value="<%btn_login_title%>"/>
                                </div>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
                <div role="tabpane1" class="tab-pane" id="sbatnam" ng-controller="RegisterCtrl">

                    {!! Form::open(['method' => 'POST', 'ng-submit' => 'register($event)', 'name' => 'registerForm']) !!}
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="input-set">
                                    <i class="fa fa-user"></i>
                                    {!! Form::text('name', null, ['placeholder' => 'نام', 'ng-model'=> 'registerUser.name']) !!}
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="input-set">
                                    <i class="fa fa-user"></i>
                                    {!! Form::text('family', null, ['placeholder' => 'نام خانوادگی', 'ng-model'=> 'registerUser.family']) !!}
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="input-set">
                                    <i class="fa fa-user"></i>
                                    {!! Form::text('username', null, ['placeholder' => 'نام کاربری', 'ng-model'=> 'registerUser.username']) !!}
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="input-set">
                                    <i class="fa fa-envelope"></i>
                                    {!! Form::email('email', null, ['placeholder' => 'ایمیل', 'ng-model'=> 'registerUser.email']) !!}
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="input-set">
                                    <i class="fa fa-phone"></i>
                                    {!! Form::number('phone', null, ['placeholder' => 'تلفن ثابت', 'ng-model'=> 'registerUser.phone']) !!}
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="input-set">
                                    <i class="fa fa-phone-square"></i>
                                    {!! Form::number('mobile', null, ['placeholder' => 'شماره همراه', 'ng-model'=> 'registerUser.mobile']) !!}
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="input-set">
                                    <i class="fa fa-key "></i>
                                    <input type="password" name="password" ng-model="registerUser.password" placeholder="رمز"/>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="input-set">
                                    <i class="fa fa-key"></i>
                                    <input type="password" name="re_password" ng-model="registerUser.rePassword" placeholder="تایید رمز"/>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="input-set">
                                    {!! Form::checkbox('rules', null, false, ['ng-model' => 'registerUser.rules']) !!}
                                    <label>قوانین سایت</label>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="captcha">
                                    <i class="fa fa-refresh" ng-click="reload_regcaptcha()"></i>
                                    {!! Form::text('captcha', null, ['placeholder' => 'کد امنیتی', 'ng-model'=> 'registerUser.captcha']) !!}
                                    <div><img src="/random" ng-src="<% captcha_new %>"></div>
                                </div>
                            </div>
                            <div class=" col-xs-12">
                                <div class="input-set">
                                    <input type="submit" value="<%btn_register_title.title%>" ng-disabled="btn_register_title.loading"/>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div role="tabpane1" class="tab-pane" id="passforget" ng-controller="ForgetPasswrodCtrl">
                    <form>g
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="input-set">
                                    <i class="fa fa-user"></i>
                                    <input type="text" placeholder="نام کاربری">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="captcha">
                                    <i class="fa fa-refresh" ng-click="reload_foregetgcaptcha()"></i>
                                    <input type="text" placeholder="کد امنیتی">
                                    <div><img src="/random" ng-src="<% captcha_new_forget %>"></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="input-set">
                                    <input type="submit" value="دریافت رمز">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection