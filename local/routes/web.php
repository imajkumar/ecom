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
Route::post('/update-item/{item_id}', 'UserController@updateItem')->name('updateItem');
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
Route::Post('/getTreeViewFrEdit', 'UserController@getTreeViewFrEdit')->name('getTreeViewFrEdit'); 
Route::Post('/saveAttribute', 'UserController@saveAttribute')->name('saveAttribute'); 
Route::get('/customers', 'UserController@customerListLayout')->name('customerListLayout'); 

Route::get('/customers/{id}/addresses', 'UserController@addressListLayout')->name('addressListLayout');
Route::get('/customers/{id}/addresses/create', 'UserController@addAddressLayout')->name('addAddressLayout');
Route::get('/customers/addresses/edit/{id}', 'UserController@editAddressLayout')->name('editAddressLayout');
Route::post('/updateAddress', 'UserController@updateAddress')->name('updateAddress');
Route::post('/addAddress', 'UserController@addAddress')->name('addAddress');

Route::get('/add-new-customer', 'UserController@addNewCustomerLayout')->name('addNewCustomerLayout'); 
Route::get('/attributesLayout', 'UserController@attributesLayout')->name('attributesLayout'); 
Route::get('/addAttributeLayout', 'UserController@addAttributeLayout')->name('addAttributeLayout'); 
Route::post('/addAttribute', 'UserController@addAttribute')->name('addAttribute'); 
Route::get('/editAttributeLayout/{id}', 'UserController@editAttributeLayout')->name('editAttributeLayout'); 
Route::post('/updateAttribute', 'UserController@updateAttribute')->name('updateAttribute');

Route::get('/attributeFamiliesLayout', 'UserController@attributeFamiliesLayout')->name('attributeFamiliesLayout'); 
Route::get('/addAttrFamilyLayout', 'UserController@addAttrFamilyLayout')->name('addAttrFamilyLayout'); 
Route::get('/editAttributeFamilyLayout/{id}', 'UserController@editAttributeFamilyLayout')->name('editAttributeFamilyLayout'); 
Route::post('/addAttributeFamily', 'UserController@addAttributeFamily')->name('addAttributeFamily'); 
Route::post('/updateAttributeFamily', 'UserController@updateAttributeFamily')->name('updateAttributeFamily'); 

Route::post('/add-new-customer', 'UserController@addNewCustomer')->name('addNewCustomer'); 
Route::get('/edit-customer/{id}', 'UserController@editCustomerLayout')->name('editCustomerLayout'); 
Route::post('/update-customer', 'UserController@updateCustomer')->name('updateCustomer'); 
Route::post('/delete-customer', 'UserController@deleteCustomer')->name('deleteCustomer'); 

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
