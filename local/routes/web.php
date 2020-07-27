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

Auth::routes(['register' => false]);

Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');

//admin route 
Route::get('/master-settings', 'UserController@masterSettingsLayout')->name('masterSettingsLayout');
Route::get('/item-master', 'UserController@itemMasterLayout')->name('itemMasterLayout');
Route::get('/items', 'UserController@itemListLayout')->name('itemListLayout');
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

Route::get('/banners', 'UserController@bannerListLayout')->name('bannerListLayout'); 
Route::get('/add-banner', 'UserController@addBannerLayout')->name('addBannerLayout');
Route::post('/save-banner', 'UserController@saveBanner')->name('saveBanner');
Route::get('/edit-banner/{id}', 'UserController@editBannerLayout')->name('editBannerLayout');
Route::post('/update-banner/{id}', 'UserController@updateBanner')->name('updateBanner');
Route::get('/delete-banner/{id}', 'UserController@deleteBanner')->name('deleteBanner');

Route::get('/brands', 'UserController@brandListLayout')->name('brandListLayout'); 
Route::get('/add-brand', 'UserController@addBrandLayout')->name('addBrandLayout');
Route::post('/save-brand', 'UserController@saveBrand')->name('saveBrand');
Route::get('/edit-brand/{id}', 'UserController@editBrandLayout')->name('editBrandLayout');
Route::post('/update-brand/{id}', 'UserController@updateBrand')->name('updateBrand');
Route::get('/delete-brand/{id}', 'UserController@deleteBrand')->name('deleteBrand');
