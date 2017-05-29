@extends('seller.app')
@section('content')
    <div class="">
        <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">ورود رستوران دارن</div>
                @if($errors->has('captcha_incorrect'))
                    <div class="panel-heading">{{ $errors->first('captcha_incorrect') }}</div>
                @endif
                @if($errors->has('login_incorrect'))
                    <div class="panel-heading">{{ $errors->first('login_incorrect') }}</div>
                @endif
                <div class="panel-body">
                    {!! Form::open(['route' => 'seller.login', 'method' => 'POST']) !!}
                        <fieldset>
                            <div class="form-group {{ $errors->has('username') ? "has-error" : "" }}">
                                {!! Form::text('username', null, ['placeholder' => 'نام کاربری', 'autocomplete' => 'off', 'class' => 'form-control']) !!}
                            </div>
                            <div class="form-group {{ $errors->has('password') ? "has-error" : "" }}">
                                <input class="form-control" placeholder="رمز" name="password" type="password" value="">
                            </div>
                            <div class="form-group">
                                <img src="/random" id="captcha" style="position: relative;margin-right: 270px;" data-toggle="tooltip" data-placement="top" title="برای تغییر کد امنیتی کلیک کنید">
                            </div>
                            <div class="form-group {{ $errors->has('security_code') ? "has-error" : "" }}">
                                <input class="form-control" placeholder="عبارت امنیتی" name="security_code" type="text" value="" style="width: 64%;margin-top: -50px;">
                            </div>
                            <div class="checkbox">
                                <input name="remember" type="checkbox" value="Remember Me">
                                <label>مرا به خاطر داشته باش؟</label>
                            </div>
                            {!! Form::submit('ورود', ['class' => 'btn btn-primary']) !!}
                        </fieldset>
                    </form>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->
@endsection