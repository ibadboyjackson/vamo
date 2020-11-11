<?php
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
|--------------------------------------------------------------------------------------
 * Pages Routes
*/
Route::get('/', 'Pages\IndexController@index');
Route::get('/hotels', 'Pages\HotelsController@index')->name('hotels');
Route::get('/vols', 'Pages\VolsController@index')->name('vols');
Route::get('/vacances', 'Pages\VacancesController@index')->name('vacances');
Route::get('/croisieres', 'Pages\CroisieresController@index')->name('croisieres');
Route::get('/voitures', 'Pages\VoituresController@index')->name('voitures');
Route::get('/offres', 'Pages\OffresController@index')->name('offers');
Route::get('/circuits', 'Pages\CircuitsController@index')->name('circuits');
Route::get('/medicales', 'Pages\MedicalsController@index')->name('medicals');
Route::get('/contact', 'Pages\ContactsController@index')->name('contact');
Route::get('/blog', 'Pages\BlogsController@index')->name('blog');
Route::get('/blog/detail', 'Pages\BlogDetailController@index')->name('detail');

/*
|--------------------------------------------------------------------------------------
 * Search Routes access only with Ajax
*/

Route::get('/home', 'Dashboard\UsersController@index')->name('users');
Route::get('/find', 'Search\SearchController@find');
Route::get('/hotel/find', 'Search\HotelController@find');
Route::get('/car/find', 'Search\CarController@find');
Route::get('/cruise/find', 'Search\CruiseController@find');

/*
|--------------------------------------------------------------------------------------
 * Authentications Routes
*/
Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
    Route::get('/connexion', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('/connexion', 'Auth\LoginController@login')->name('login');
    Route::get('/inscription', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('/inscription', 'Auth\RegisterController@register')->name('post.register');
    Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

    /*
     * Users Dashboard
     */
    Route::get('/dashboard', 'Dashboard\UsersController@index')->middleware('isUser');
});
/*
 |--------------------------------------------------------------------------------------
 * Administration Routes
 */

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
   Route::get('/dashboard', 'Dashboard\AdminsController@index')->name('dashboard');
   Route::resource('flight', 'Admin\Flight\FlightsController');
   Route::resource('hotel', 'Admin\Hotel\HotelsController');
   Route::resource('car', 'Admin\Car\CarsController');
   Route::resource('cruise', 'Admin\Cruise\CruisesController');
   Route::resource('circuit', 'Admin\Circuit\CircuitsController');
});

/*
|--------------------------------------------------------------------------------------
 * Search Routes
 */
Route::post('/recherche/vols', 'Search\FlightController@search')->name('recherche');
Route::get('/recherche/vols/{id}', 'Search\FlightController@detail')->name('recherche.detail');
Route::get('/recherche/vol/reserver', 'Search\FlightController@select')->name('recherche.select');
Route::get('/recherche/vol/confirmed', 'Search\FlightController@confirmed')->name('recherche.select.confirmed');

Route::post('/recherche/hotels', 'Search\HotelsController@search')->name('recherche.hotel');
Route::get('/recherche/hotels/{id}', 'Search\HotelsController@detail')->name('recherche.hotel.detail');
Route::get('/recherche/hotel/reserver', 'Search\HotelsController@select')->name('recherche.hotel.select');
Route::get('/recherche/hotel/confirmed', 'Search\HotelsController@confirmed')->name('recherche.hotel.select.confirmed');


Route::post('/recherche/voitures', 'Search\CarsController@search')->name('recherche.cars');
Route::get('/recherche/detail/{id}', 'Search\CarsController@detail')->name('recherche.cars.detail');
Route::get('/recherche/voitures/reserver', 'Search\CarsController@select')->name('recherche.cars.select');
Route::get('/recherche/voitures/confirmed', 'Search\CarsController@confirmed')->name('recherche.cars.select.confirmed');


Route::post('/recherche/croisieres', 'Search\CruisesController@search')->name('recherche.cruise');
Route::get('/recherche/croisieres/{id}', 'Search\CruisesController@detail')->name('recherche.cruise.detail');
Route::get('/recherche/croisiere/reserver', 'Search\CruisesController@select')->name('recherche.cruise.select');
Route::get('/recherche/croisiere/confirmed', 'Search\CruisesController@confirmed')->name('recherche.cruise.select.confirmed');
