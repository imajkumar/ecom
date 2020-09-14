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

Route::get('/logout', function(){
    Auth::logout();
        session()->forget('customer');
        return redirect('/');
});


//admin route 
Route::get('/master-settings', 'UserController@masterSettingsLayout')->name('masterSettingsLayout');
Route::get('/item-master', 'UserController@itemMasterLayout')->name('itemMasterLayout');
Route::get('/items', 'UserController@itemListLayout')->name('itemListLayout');
Route::get('/item-edit/{item_id}', 'UserController@itemEditLayout')->name('itemEditLayout');
Route::post('/update-item/{item_id}', 'UserController@updateItem')->name('updateItem');
Route::post('deleteItemImgByAjax', 'UserController@deleteItemImgByAjax')->name('deleteItemImgByAjax');
Route::post('addPrimaryImgByAjax', 'UserController@addPrimaryImgByAjax')->name('addPrimaryImgByAjax');
Route::get('/get_attributes', 'UserController@get_attributes')->name('get_attributes');
Route::post('/getAttributeOptions', 'UserController@getAttributeOptions')->name('getAttributeOptions');

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

Route::get('/itemCategories', 'UserController@itemCategories')->name('itemCategories');
Route::get('/add-categoryLayout', 'UserController@addCategoryLayout')->name('addCategoryLayout');
Route::post('/addCategoryLayout', 'UserController@addCategory')->name('addCategory');

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
Route::post('/saveCustomerApproval', 'UserController@saveCustomerApproval')->name('saveCustomerApproval'); 
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






//Start customer
Route::group(['prefix'=>'customer'], function(){
    Route::get('login', 'HomeController@showCustomerLoginForm')->name('showCustomerLoginForm');
    Route::post('/sendOtp', 'Auth\RegisterController@sendOtp')->name('sendOtp');
    Route::post('/resendOtp', 'Auth\RegisterController@resendOtp')->name('resendOtp');
    Route::post('/verifyOtp', 'Auth\RegisterController@verifyOtp')->name('verifyOtp');
    
});

Route::post('/saveCustomerProfileDetails', 'CustomerController@saveCustomerProfileDetails')->name('saveCustomerProfileDetails');
Route::get('/addresses', 'CustomerController@addresses')->name('addresses');
Route::post('/saveProfilePic', 'CustomerController@saveProfilePic')->name('saveProfilePic');
Route::get('/customer-profile', 'CustomerController@customerProfile')->name('customerProfile');



// Route::get('protected', ['middleware' => ['auth'], function() {
//     // this page requires that you be logged in AND be an Admin
    
    
// }]);

// Route::get('protected', ['middleware' => ['auth'], ['prefix'=>'customer'],function() {
//     this page requires that you be logged inbut you don't need to be an admin
    
    
// }]);
//End customer