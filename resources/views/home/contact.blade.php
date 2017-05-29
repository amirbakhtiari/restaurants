@extends('master')
@include('home.header')
@section('title', 'تماس با ما')
@section('index')
        <!-- Section Contact -->
<section id="contact" class="pattern">
    <div class="container-fluid" style="padding:80px 0px">
        <div class="col-lg-8 col-lg-offset-2">
            <!-- Section heading -->
            {{--<div class="section-heading">--}}
            {{--<h2>تماس با ما</h2>--}}
            {{--</div>--}}
        </div>



        <div id="map" style="width:100%;height:450px"></div>

        <script>
            function myMap() {


                var map = new google.maps.Map(document.getElementById('map'), {
                    center: {lat: 35.815572, lng: 51.002283},
                    zoom: 17,
                    scrollwheel: false,


                    styles: [
                        {
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#f5f5f5"
                                }
                            ]
                        },
                        {
                            "elementType": "labels.icon",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#616161"
                                }
                            ]
                        },
                        {
                            "elementType": "labels.text.stroke",
                            "stylers": [
                                {
                                    "color": "#f5f5f5"
                                }
                            ]
                        },
                        {
                            "featureType": "administrative.land_parcel",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#bdbdbd"
                                }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#eeeeee"
                                }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#757575"
                                }
                            ]
                        },
                        {
                            "featureType": "poi.park",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#e5e5e5"
                                }
                            ]
                        },
                        {
                            "featureType": "poi.park",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#9e9e9e"
                                }
                            ]
                        },
                        {
                            "featureType": "road",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#ffffff"
                                }
                            ]
                        },
                        {
                            "featureType": "road.arterial",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#757575"
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#dadada"
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#616161"
                                }
                            ]
                        },
                        {
                            "featureType": "road.local",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#9e9e9e"
                                }
                            ]
                        },
                        {
                            "featureType": "transit.line",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#e5e5e5"
                                }
                            ]
                        },
                        {
                            "featureType": "transit.station",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#eeeeee"
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#c9c9c9"
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#9e9e9e"
                                }
                            ]
                        }
                    ]
                });

                var iconBase = 'https://image.ibb.co/jQFHo5/';
                var marker = new google.maps.Marker({
                    position: {lat: 35.815572, lng: 51.002283},
                    map: map,
                    icon: iconBase + 'hipors_location.png'
                });
                marker.setAnimation(google.maps.Animation.BOUNCE);

                var marker = new google.maps.Marker({
                    position: {lat: 35.816899, lng: 50.997434},
                    map: map,
                    icon:'https://image.ibb.co/gD8yvk/shohasa.png'
                });
                var marker2 = new google.maps.Marker({
                    position: {lat: 35.815931, lng: 51.004837},
                    map: map,
                    icon: 'https://image.ibb.co/caVYT5/baraghan.png'
                });
                var marker3 = new google.maps.Marker({
                    position: {lat: 35.814139, lng: 51.003775},
                    map: map,
                    icon:'https://image.ibb.co/mtSQak/beheshti.png'
                });
                var marker4 = new google.maps.Marker({
                    position: {lat: 35.814609, lng: 50.998572},
                    map: map,
                    icon: 'https://image.ibb.co/dTPA85/mazaheri.png'
                });


            }

        </script>


        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDxhelUqvdI-t-9O4KQzj5uexpdAWTZYTY&callback=myMap"></script>



        {{--<div class="col-md-12  white_block white_block_contact">--}}
        {{--<p>سايت در حال طراحي و تکميل مراحل ساخت و مجوزهاي لازم ميباشد. لذا امکان خريد وجود ندارد.--}}
        {{--تاريخ افتتاح سايت پس از تکميل دقيق تمام مراحل اعلام ميگردد</p>--}}
        {{--</div>--}}


                <!-- Contact Form -->
        <div class="container-fluid" style="padding: 40px ;background-color: white">
            <form class="well form-horizontal col-md-6" action=" " method=""  id="contact_form">
                <fieldset>
                    <div class="form-group">
                        <label class="col-md-12 control-label"> نام و نام خانوادگی</label>
                        <div class="col-md-12 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input  name="first_name" placeholder=" نام خود را وارد کنید" class="form-control"  type="text">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12 control-label">پست الکترونیک</label>
                        <div class="col-md-12 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input name="email" placeholder="ادرس ایمیل خود را وارد کنید" class="form-control"  type="text">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12 control-label"> شماره تماس</label>
                        <div class="col-md-12 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                <input name="phone" placeholder="شماره تماس" class="form-control" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12 control-label">متن پیام</label>
                        <div class="col-md-12 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                <textarea class="form-control" name="comment" placeholder="متن پیام خود را در این قسمت وارد کنید"></textarea>
                            </div>
                        </div>
                    </div>

                    {{--<div class="alert alert-success" role="alert" id="success_message"> <i class="glyphicon glyphicon-thumbs-up"></i> پیام شما با موفقیت ارسال شد . با تشکر </div>--}}

                    <div class="form-group">
                        <label class="col-md-4 control-label"></label>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-warning" >ارسال  پیام <span class="glyphicon glyphicon-send"></span></button>
                        </div>
                    </div>

                </fieldset>
            </form>
            <form class="well form-horizontal col-md-6" action=" " method=""  id="contact_form">
                <fieldset>
              <h5>اطلاعات تماس</h5>
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

                </fieldset>
            </form>
            <form class="well form-horizontal col-md-6" action=" " method=""  id="contact_form">
                <fieldset>
                    <h5>اطلاعات تماس دفتر مرکزی</h5>
                    <br>
                    <div>
                        <span class="fa fa-phone"></span>&nbsp;&nbsp;&nbsp;<span>تلفن تماس : 02634312845  </span>
                    </div>
                    <br>
                    <div>
                        <span class="fa fa-mobile"></span>&nbsp;&nbsp;&nbsp;<span>تلفن همراه : 09125901065  </span>
                    </div>
                    <br>


                </fieldset>
            </form>
        </div>

    </div><!-- /.container -->
</section>
<!--Section ends -->
@include('home.footer')
@endsection