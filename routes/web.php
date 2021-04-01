<?php

use App\Http\Controllers\ClientsController;
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
	Route::get('subcategories/{id}', 'App\Http\Controllers\CategoryController@subcategories');
Route::redirect('/', '/en');

Route::group(['prefix' => '{language}'], function () {
	Route::get('/', function () {
		
		$categories = 'App\Models\Category'::with("childs")->where('parent_id', 0)->get(); 
        $subcategories = 'App\Models\Category'::where('parent_id', '!=', 0)->get(); 
		$clients = DB::table('clients')->select(DB::raw('business_name as name, location, category_id, subcategory_id, website, c1.name as category, c2.name as subcategory'))
			->leftJoin('categories as c1', 'c1.id', 'clients.category_id')
			->leftJoin('categories as c2', 'c2.id', 'clients.subcategory_id')
			->get();
		
		return view("home", ['categories' => $categories, 'subcategories' => $subcategories, 'clients' => $clients]);
	})->name('home1');

	Route::get('/clients', 'App\Http\Controllers\ClientsController@index');

	Route::get('/business_categories', 'App\Http\Controllers\CategoryController@index')->name('specialBusiness1');
	Route::get('/business_categories/{category_id}/{subcategory_id?}', 'App\Http\Controllers\ClientsController@clientsByCategory');

	Route::resource("clients", ClientsController::class);
	Route::get('/search', 'App\Http\Controllers\ClientsController@search')->name('search');

	/* Routes to HTML Pages */

	Route::get('specialBusiness', function () {
	    return view('specialBusiness');
	});

	Route::get('listBusiness', function () {
	    return view('listBusiness');
	})->name('listBusiness1');

	Route::get('ourTeam', function () {
	    return view('ourTeam');
	})->name('ourTeam1');

	Route::get('contact', function () {
	    return view('contact');
	})->name('contact1');

	Route::get('signup_business', 'App\Http\Controllers\ClientsController@signupRequest')->name('contact.request');
	Route::get('contact_us', 'App\Http\Controllers\ClientsController@contactRequest')->name('contact.us');
});

