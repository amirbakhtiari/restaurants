@extends('master')
@section('title', 'پرداخت نهایی')
@section('index')
@include('home.header')
        <!-- start #checkout main -->
<main id="checkout" ng-controller="CheckoutCtrl">
    <!-- start .row dev -->
    <div class="row">
        <!-- start aside -->
        {!! Form::open(['method' => 'POST', 'url' => 'factorregister']) !!}
        <aside class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
            <!-- start #checkout-cart div -->
            <div id="checkout-cart">
                <!-- start header cart -->
                <header>
                    <i class="fa fa-shopping-cart"></i>سبد خرید
                </header><!-- start header cart -->
                <!-- start section in #checkout-cart -->
                <section>
                    <!-- start .checkout-cart-order  div -->
                    @foreach($carts as $cart)
                        <div class="checkout-cart-order">
                            <p class="checkout-cart-name">{{$cart->name}}</p>
                            <p class="checkout-cart-detail">
                                <span class="checkbox-cart-price">{{number_format($cart->price)}}</span>
                                <span class="checkout-cart-number">{{$cart->qty}}</span>
                            </p>
                        </div><!-- end .checkout-cart-order  div -->
                    @endforeach
                </section><!-- end section in #checkout-cart -->
                <!-- start .checkout-cart-footer in #checkout-cart -->
                <div class="checkout-cart-footer">
                    <!-- start checkout-cart-prices -->
                    <div class="checkout-cart-prices">
                        <p>
                            <span>مجموع</span>
                            <span>{{Cart::total()}}</span>
                        </p>
                        <p>
                            <span>هزینه ارسال</span>
                            <span>0</span>
                        </p>
                        <p>
                            <span>مالیات</span>
                            <span>0</span>
                        </p>
                    </div><!-- end checkout-cart-prices -->

                    <!-- start .checkout-cart-total div -->
                    <div class="checkout-cart-total">
                        <p>
                            <span>جمع کل</span>
                            <span>{{Cart::total()}}</span>
                        </p>
                    </div><!-- end .checkout-cart-total div -->
                    <div class="checkout-cart-total">
                        <p>
                            <span style="float: right;"> توضیحات</span>
                        <div class="form-group">
                            <textarea style="max-width: 100%" class="form-control" rows="5" id="comment" name="description" placeholder="توضیحات در مورد سفارش محصول"></textarea>
                        </div>
                        </p>
                    </div><!-- end .checkout-cart-total div -->

                </div><!-- end .checkout-cart-footer in #checkout-cart -->
            </div><!-- end #checkout-cart div -->
        </aside><!-- end aside -->
        <!-- start section -->
        <section class="col-md-9 col-lg-9 col-sm-8 col-xs-12">

            <!-- start #checkout-info div -->
            <div id="checkout-info">
                <h3>اطلاعات شما</h3>
                <!-- start .row div in #checkout-info -->
                <div class="row">
                    {{session('message')}}
                    @if($errors->has('error'))
                        <div class="alert alert-danger alert-dismissable">
                            <strong>{{$errors->first('error')}}!</strong>
                            <a style="float: left;" href="#" class="close" data-dismiss="alert"><span class="fa fa-close"></span></a>
                        </div>
                        @endif
                                <!-- start .col-md-6 in #checkout-info -->
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <table>
                                <tr>
                                    <td><span class="fa fa-user">&nbsp;&nbsp;</span>نام و نام خانوادگی: </td>
                                    <td>{{\Illuminate\Support\Facades\Session::get('customer_name')}}</td>
                                </tr>
                                <tr>
                                    <td><span class="fa fa-phone">&nbsp;&nbsp;</span>شماره تلفن: </td>
                                    <td>{{\Illuminate\Support\Facades\Session::get('customer')['sMobile1']}}</td>
                                </tr>
                                <tr>
                                    <td><span class="fa fa-envelope">&nbsp;&nbsp;</span>ایمیل: </td>
                                    <td>{{\Illuminate\Support\Facades\Session::get('customer')['sEmail']}}</td>
                                </tr>
                            </table>
                        </div><!-- end .col-md-6 in #checkout-info -->
                        <!-- start .col-md-6 in #checkout-info -->
                        @if(session()->has('customer_login') && session()->get('customer_login') == 1)
                            <div class="col-md-5 address col-sm-11 col-xs-11">
                                <div id="select-address">
                                    <span class="fa fa-caret-down"></span>
                                    <select name="address" id="address">
                                        <option value="0">____آدرس خود را انتخاب کنید____</option>
                                        @foreach($addresses as $address)
                                            <option value="{{$address->iID}}">{{$address->sAddress}}</option>
                                        @endforeach
                                    </select>
                                    <button type="button" id="edit-address" class="fa fa-pencil"></button>
                                </div><!-- end .select-address div -->

                                <div class="new-address-button">
                                    <button type="button" id="show-new-address"><span class="fa fa-plus-circle"></span>افزودن آدرس جدید</button>
                                </div><!-- end .new-address-button div -->

                                <div class="new-address" style="display: none">
                                    {!! csrf_field() !!}
                                    <div class="address-input">
                                        <i class="fa fa-map-marker"></i>
                                        <input type="text" name="addressinput" placeholder="آدرس" id="address-input">
                                    </div>
                                    <div class="address-input">
                                        <i class="fa fa-map-marker"></i>
                                        <input type="text" name="cityinput" placeholder="شهر" id="city-input">
                                    </div>

                                    <div class="address-input">
                                        <i class="fa fa-map-marker"></i>
                                        <input type="text" name="telinput" placeholder="تلفن" id="tel-input">
                                    </div>
                                    <div class="new-address-button">
                                        <button type="button" id="add-new-address">ثبت</button>
                                        <button type="button"  id="hide-new-address">لغو</button>
                                    </div><!-- end .new-address-button div -->
                                </div>
                            </div>
                            @endif
                                    <!--<div class="col-md-1 col-lg-1">
                            <div class="new-address-button">
                                <button type="button" id="edit-address">ویرایش</button>
                            </div>
                        </div>-->

                </div><!-- end .row div in #checkout-info -->
            </div><!-- end #checkout-info div -->
            <!-- start .checkout-pay div -->
            <div class="checkout-pay">
                {{--<div class="row discount">--}}
                {{--<p class="col-md-6 col-sm-12 col-xs-12">.در صورت داشتن کد تخفیف آن را در این قسمت ثبت کنید سپس دکمه اعمال کد تخفیف را کلیک کنید</p>--}}
                {{--<div class="col-md-6 col-xs-12 col-sm-12">--}}
                {{--<input type="text" placeholder="کد تخیخف"><input type="button" value="اعمال کد">--}}
                {{--</div>--}}
                {{--</div>--}}

                <div class="pay">
                    <button>تایید نهایی و پرداخت</button>
                </div>
                {!! Form::close() !!}
            </div><!-- end .checkout-pay div -->
        </section><!-- end section -->
    </div><!-- end .row dev -->
</main><!-- end #checkout main -->
@include('home.footer')
@endsection