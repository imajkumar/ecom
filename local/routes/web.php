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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');

//admin route 
Route::get('/master-settings', 'UserController@masterSettingsLayout')->name('masterSettingsLayout');
Route::get('/item-master', 'UserController@itemMasterLayout')->name('itemMasterLayout');
Route::post('/saveItem', 'UserController@saveItem')->name('saveItem');

Route::Post('/saveMasterGroup', 'UserController@saveMasterGroup')->name('saveMasterGroup'); 
Route::Post('/saveGroupAttribute', 'UserController@saveGroupAttribute')->name('saveGroupAttribute'); 
Route::Post('/saveAttributeValue', 'UserController@saveAttributeValue')->name('saveAttributeValue'); 

Route::get('/add-gallery-image', 'UserController@addGalleryImage')->name('addGalleryImage');

Route::Post('/getTreeView', 'UserController@getTreeView')->name('getTreeView'); 
