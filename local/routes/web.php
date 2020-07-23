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
Route::get('/item-edit/{item_id}', 'UserController@itemEditLayout')->name('itemEditLayout');
Route::get('/update-item/{item_id}', 'UserController@updateItem')->name('updateItem');
Route::post('deleteItemImgByAjax', 'UserController@deleteItemImgByAjax')->name('deleteItemImgByAjax');
Route::post('addPrimaryImgByAjax', 'UserController@addPrimaryImgByAjax')->name('addPrimaryImgByAjax');

Route::post('/saveItem', 'UserController@saveItem')->name('saveItem');
Route::get('/getItembyAjax', 'UserController@getItembyAjax')->name('getItembyAjax');

Route::Post('/saveMasterGroup', 'UserController@saveMasterGroup')->name('saveMasterGroup'); 
Route::Post('/saveGroupAttribute', 'UserController@saveGroupAttribute')->name('saveGroupAttribute'); 
Route::Post('/saveAttributeValue', 'UserController@saveAttributeValue')->name('saveAttributeValue'); 

Route::get('/add-gallery-image/{item_id}', 'UserController@addGalleryImage')->name('addGalleryImage');
Route::post('/uploadGalleryImage', 'UserController@uploadGalleryImage')->name('uploadGalleryImage');

Route::Post('/getTreeView', 'UserController@getTreeView')->name('getTreeView'); 
Route::Post('/saveAttribute', 'UserController@saveAttribute')->name('saveAttribute'); 
Route::get('/customer-list', 'UserController@customerListLayout')->name('customerListLayout'); 
Route::get('/add-new-customer', 'UserController@addNewCustomerLayout')->name('addNewCustomerLayout'); 
