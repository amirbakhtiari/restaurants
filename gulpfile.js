var elixir = require('laravel-elixir');
require('laravel-elixir-browsersync');
/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    // mix.sass('app.scss');
    //mix.sass('style.sass');
    // BrowserSync.init();

    var homeStyles = [
        'home/css/bootstrap.css', 'home/fonts/font-awesome/css/font-awesome.min.css', 'home/fonts/flaticons/flaticon.css',
        'home/fonts/bootstrap-glyphicons.css', 'home/css/montserrat.css',
        'home/css/opensans.css',
        'home/css/style.css', 'home/css/owl.carousel.css', 'home/css/prettyPhoto.css',
        'home/css/datetimepicker.css', 'home/css/animate.css'
    ];

    // var homeScripts = [
    //     'home/jquery.min.js', 'home/bootstrap.min.js', 'home/jquery.isotope.js',
    //     'home/switcher/js/dmss.js', 'home/mc-validate.js', 'home/plugins.js', 'home/contact.js',
    //     'home/moment-with-locales.min.js', 'home/prefixfree.js', 'home/main.js', 'home/bootstrap-datepicker.min.js','home/bootstrap-datepicker.fa.min.js',
    //     'home/resPage.js'
    // ];
    var vendorScript = ['angular.min.js', 'angular-ui-router.min.js', 'angular-resource.min.js'
        , 'angular-toastr.tpls.min.js', 'lodash.min.js', 'angular-simple-logger.min.js', 'angular-google-maps.min.js'];

    var generalScript = ['app.js', 'Restaurant/app.js', 'Restaurant/routes.js', 'Restaurant/directives.js', 'Restaurant/controllers.js', 'Restaurant/filters.js',
        'Restaurant/services.js', 'User/app.js', 'User/controllers.js', 'User/services.js'];

    mix.scripts(vendorScript, 'public/js/vendor.js');
    mix.scripts(generalScript, 'public/js/scripts.js');

    // var script_path = 'seller/js/';
    // var style_path = 'seller/css/';
    // var adminScript = ['angular.min.js', 'angular-resource.min.js', 'angular-ui-router.min.js', 'seller/app.js', 'seller/controllers.js', 'seller/routes.js', 'seller/services.js',
    //     'lodash.min.js', 'angular-simple-logger.min.js', 'angular-google-maps.min.js'];

    // var sellerScript = [script_path + 'lumino.glyphs.js', 'seller/my_script.js', script_path + 'bootstrap.min.js'];
    // var sellerCSS = [style_path + 'bootstrap.min.css', style_path + 'datepicker3.css',style_path + 'styles.css'];

    // mix.styles(sellerCSS, 'public/seller/css/all.css');
    // mix.scripts(sellerScript, 'public/seller/js/all.js');
    // mix.scripts(adminScript, 'public/seller/js/admin.js');


    // mix.styles(homeStyles, 'public/css/home/all.css');
    // mix.scripts(homeScripts, 'public/js/all.js');
    mix.browserSync({
        proxy: "hipors.dev",
    });

});
