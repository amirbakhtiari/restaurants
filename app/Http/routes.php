<?php
define('CUSTOMER' , 0);
define('SELLER' , 1);
define('USERS', 0);
define('PERSONS', 1);
define('FAVORITE', 708);
define('PERSONNEL', 2);
define('ACTIVE_STATE', 1);
define('INACTIVE_STATE', 0);
/**
 * custom field type
 */
define('INTEGER_FILED', 0);
define('INTEGER_64_FILED', 1);
define('DOUBLE_FILED', 2);
define('STRING_FILED', 3);
define('BOOLEAN_FILED', 4);
define('DATE_FILED', 5);
define('TIME_FILED', 6);
define('LIST_ITEM_FIELD', 7);

define('STUFF_KIND_NORMAL', 0);
define('STUFF_KIND_PRODUCT', 1);
define('STUFF_KIND_BOTH', 2);
define('COUNT_ITEMS_PER_PAGE', 30);
/**
 * home route
 */
Route::get('/', ['as' => 'home.index', 'uses' => 'HomeController@index']);
Route::get('/about', ['as' => 'about.page', 'uses' => 'HomeController@about']);
Route::get('/contact', ['as' => 'contact.page', 'uses' => 'HomeController@contact']);
Route::get('/rules', ['as' => 'home.rules', 'uses' => 'HomeController@rules']);
/**
 * restaurant routes
 */
Route::group(['namespace' => 'Restaurant'], function() {
   Route::get('/register', ['as' => 'restaurant.register.page', 'uses' => 'RestaurantController@showRegister']);
   Route::post('/register', ['as' => 'restaurant.register', 'uses' => 'RestaurantController@register']);
   Route::get('/login', ['as' => 'restaurant.login.page', 'uses' => 'RestaurantController@showLogin']);
   Route::post('/login', ['as' => 'restaurant.login', 'uses' => 'RestaurantController@login']);
   Route::get('/restaurants', ['as' => 'restaurants.list', 'uses' => 'RestaurantController@showAllRestaurant']);
   Route::post('/restaurants', 'RestaurantController@listOfRestaurant');
//   Route::get('/restaurant/{name}', ['as' => 'restaurant.showRestaurant', 'uses' => 'RestaurantController@showRestaurant']);
   Route::get('/restaurant/{name}', ['as' => 'show.restaurant.page', 'uses' => 'RestaurantController@showRestaurantPage']);
   Route::get('/search', ['as' => '', 'uses' => 'RestaurantController@search']);
   Route::get('/filter', 'RestaurantController@loadFilter');
   Route::get('/checkout', ['as' => 'restaurants.checkout', 'uses' => 'RestaurantController@checkout']);
   Route::post('/factorregister', ['factor.register', 'uses' => 'RestaurantController@factorRegister']);
   Route::any('activation', 'RestaurantController@activation');
   Route::get('findRestaurants', 'RestaurantController@findRestaurants');
   Route::get('/recipe', ['as' => 'recipe.page', 'uses' => 'RestaurantController@recipe']);
   Route::get('/showRecipe/{id}', 'RestaurantController@showRecipe');
   Route::resource('complaint', 'ComplaintController', ['except' => ['create']]);
});
/**.
 * user routes
 */
Route::group(['prefix' => 'user', 'namespace' => 'User'], function() {
   Route::get('/login', ['as' => 'user.login.page', 'uses' => 'UserController@showLogin']);
   Route::get('/forget', ['as' => 'user.forget.password', 'uses' => 'UserController@forget']);
   Route::post('/login', 'UserController@login');
   Route::post('/register', 'UserController@register');
   Route::get('/profile', ['as' => 'show.user.profile', 'uses' => 'UserController@showProfile']);
   Route::get('/profile/detail', ['as' => 'user.profile', 'uses' => 'UserController@profile']);
   Route::get('/logout', ['as' => 'user.logout', 'uses' => 'UserController@logout']);
   Route::post('/updateProfile', ['as' => 'user.profile.update', 'uses' => 'UserController@updateProfile']);
   Route::resource('/favorite', 'FavoriteController', ['only' =>
       ['index', 'store', 'destroy'] ]);
   Route::resource('/group', 'GroupController', ['only' => ['index', 'store', 'edit', 'update', 'destroy']]);
   Route::get('/detailorder/{num}', 'UserController@showDetailOrder');
   Route::post('/profileimage', 'UserController@uploadImageProfile');
   Route::post('/changepassword', 'UserController@changepassword');
   Route::post('/suggestionRestaurant', 'UserController@suggestionRestaurant');
});
/**
 * address
 */
Route::group(['namespace' => 'User'], function() {
   Route::resource('address', 'AddressController', ['except' => 'create']);
});
/**
 * seller routes
 */
Route::group(['prefix' => 'seller', 'namespace' => 'Seller'], function() {
   Route::get('/login', ['as' => 'seller.login.show', 'uses' => 'SellerController@index']);
   Route::post('/login', ['as' => 'seller.login', 'uses' => 'SellerController@login']);
   Route::get('/main', ['middleware' => 'seller', 'as' => 'seller.dashboard', 'uses' => 'SellerController@main']);
   Route::get('/logout', ['as' => 'seller.logout', 'uses' => 'SellerController@logout']);
});
/**
 * Products routes
 */
Route::group(['namespace' => 'Products'], function() {
   Route::resource('product', 'ProductController', ['only' => 'index']);
});
/**
 * return captcha
 */
Route::get('/random', function() {
   return \App\Utility\Utility::random_code();
});
/**
 * cart routes
 */
Route::group(['namespace' => 'Cart'], function() {
   Route::resource('cart', 'CartController');
});

Route::resource('news', 'NewsController');


