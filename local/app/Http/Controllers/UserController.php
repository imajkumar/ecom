<?php

namespace App\Http\Controllers;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
use Theme;
use DB;
use Illuminate\Support\Facades\Auth;
use Response;
use Session;
use File;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function bannerListLayout()
    {
        $theme = Theme::uses('backend')->layout('layout');
        $bannerLists = DB::table('tbl_banners')->leftjoin('tbl_banner_size', function($join){
            $join->on('tbl_banners.size','=','tbl_banner_size.id');
            
        })
        ->select('tbl_banner_size.id as banner_size_id','tbl_banner_size.banner_size','tbl_banners.*')
        ->get();
        //dd($bannerLists);
        return $theme->scope('admin.banner.banner_list', compact('bannerLists'))->render();
    }

    public function brandListLayout()
    {
        $theme = Theme::uses('backend')->layout('layout');
        $brandLists = DB::table('tbl_brands')->get();
        //dd($bannerLists);
        return $theme->scope('admin.brand.brand_list', compact('brandLists'))->render();
    }

    public function addBannerLayout()
    {
        $theme = Theme::uses('backend')->layout('layout');
        $bannerSizes = DB::table('tbl_banner_size')->get();
        return $theme->scope('admin.banner.banner_add', compact('bannerSizes'))->render();
    }

    public function addBrandLayout()
    {
        $theme = Theme::uses('backend')->layout('layout');
        return $theme->scope('admin.brand.brand_add')->render();
    }

    public function editBannerLayout($id)
    {
        $theme = Theme::uses('backend')->layout('layout');
        $bannerSizes = DB::table('tbl_banner_size')->get();
        $banner = DB::table('tbl_banners')->where('id', $id)->first();
        return $theme->scope('admin.banner.banner_edit', compact('bannerSizes','banner'))->render();
    }

    public function editBrandLayout($id)
    {
        $theme = Theme::uses('backend')->layout('layout');
        $brand = DB::table('tbl_brands')->first();
        
        return $theme->scope('admin.brand.brand_edit', compact('brand'))->render();
    }

    public function saveBanner(Request $request)
    {
        $this->validate($request, [
            'banner' => 'required|image',
            'size' => 'required',
            //'banner' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        $banner = $request->file('banner');
        
        $name = preg_replace('/[^a-zA-Z0-9_.]/', '_', $banner->getClientOriginalName());
        $destinationPath = ITEM_IMG_PATH;
        $image_name = 'banner_'.date('mdis').$name;
        $banner->move($destinationPath, $image_name);

        $user_id = Auth::user()->id;
        $bannerData = DB::table('tbl_banners')->insert([
            'banner' => $image_name,
            'size' => $request->size,
            'created_by' => $user_id
        ]);

        if($bannerData){
            $request->session()->flash('message', 'Banner save successfully.');
            $request->session()->flash('message-type', 'success');
            return redirect()->route('bannerListLayout');
        }else{
            $request->session()->flash('message', 'Something is wrong try again.');
            $request->session()->flash('message-type', 'warning');
            return redirect()->route('addBannerLayout');
        }
        
    }

    public function saveBrand(Request $request)
    {
        $this->validate($request, [
            'brand_img' => 'required|image',
            'name' => 'required|max:120',
            //'banner' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        $banner = $request->file('brand_img');
        
        $name = preg_replace('/[^a-zA-Z0-9_.]/', '_', $banner->getClientOriginalName());
        $destinationPath = ITEM_IMG_PATH;
        $image_name = 'brand_'.date('mdis').$name;
        $banner->move($destinationPath, $image_name);

        $user_id = Auth::user()->id;
        $bannerData = DB::table('tbl_brands')->insert([
            'brand_img' => $image_name,
            'name' => $request->name,
            'description' => $request->description
            
        ]);

        if($bannerData){
            $request->session()->flash('message', 'Brand save successfully.');
            $request->session()->flash('message-type', 'success');
            return redirect()->route('brandListLayout');
        }else{
            $request->session()->flash('message', 'Something is wrong try again.');
            $request->session()->flash('message-type', 'warning');
            return redirect()->route('addBrandLayout');
        }
        
    }

    public function updateBrand(Request $request, $id)
    {
        $this->validate($request, [
            //'brand_img' => 'required|image',
            'name' => 'required|max:120',
            //'banner' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        
        if ($request->hasFile('brand_img')) {
            $banner = $request->file('brand_img');
            $name = preg_replace('/[^a-zA-Z0-9_.]/', '_', $banner->getClientOriginalName());
            $destinationPath = ITEM_IMG_PATH;
            $image_name = 'brand_'.date('mdis').$name;
            $banner->move($destinationPath, $image_name);
            if (File::exists($destinationPath.'/'.$request->input('old_brand'))) {
				File::delete($destinationPath.'/'.$request->input('old_brand'));
			}
		} else {
			$image_name = $request->input('old_brand');
        }

        $user_id = Auth::user()->id;
        $bannerData = DB::table('tbl_brands')->where('id', $id)->update([
            'brand_img' => $image_name,
            'name' => $request->name,
            'description' => $request->description
            
        ]);

        if($bannerData){
            $request->session()->flash('message', 'Brand updated successfully.');
            $request->session()->flash('message-type', 'success');
            return redirect()->route('brandListLayout');
        }else{
            $request->session()->flash('message', 'Something is wrong try again.');
            $request->session()->flash('message-type', 'warning');
            return redirect()->route('editBrandLayout', $id);
        }
        
    }

    public function updateBanner(Request $request, $id)
    {
        $this->validate($request, [
            //'banner' => 'required|image',
            'size' => 'required',
        ]);
        
        if ($request->hasFile('banner')) {
            $banner = $request->file('banner');
            $name = preg_replace('/[^a-zA-Z0-9_.]/', '_', $banner->getClientOriginalName());
            $destinationPath = ITEM_IMG_PATH;
            $image_name = 'banner_'.date('mdis').$name;
            $banner->move($destinationPath, $image_name);
            if (File::exists($destinationPath.'/'.$request->input('old_banner'))) {
				File::delete($destinationPath.'/'.$request->input('old_banner'));
			}
		} else {
			$image_name = $request->input('old_banner');
        }
        $user_id = Auth::user()->id;
        $data = [
            'banner' => $image_name,
            'size' => $request->size,
            'created_by' => $user_id
        ];
        
        $bannerData = DB::table('tbl_banners')->where('id', $id)->update($data);

        if($bannerData){
            $request->session()->flash('message', 'Banner updated successfully.');
            $request->session()->flash('message-type', 'success');
            return redirect()->route('bannerListLayout');
        }else{
            $request->session()->flash('message', 'Something is wrong try again.');
            $request->session()->flash('message-type', 'warning');
            return redirect()->route('editBannerLayout', $id);
        }
    }

    public function deleteBanner($id)
    {
        $bannerimg = DB::table('tbl_banners')->where('id', $id)->first();
        $bannerImgForDel = $bannerimg->banner;
        $banner = DB::table('tbl_banners')->where('id', $id)->delete();
        if ($banner) {
            $destinationPath = ITEM_IMG_PATH;
            if (File::exists($destinationPath.'/'.$bannerImgForDel)) {
                File::delete($destinationPath.'/'.$bannerImgForDel);
            }
                return redirect()->route('bannerListLayout')
                        ->with(['message' =>'Banner deleted successfully.','message-type' => 'success']);
        } else {
            
                return redirect()->route('bannerListLayout')
                    ->with(['message' =>'Something is wrong try again.','message-type' => 'warning']);
            }
    }

    public function deleteBrand($id)
    {
        $brandimg = DB::table('tbl_brands')->where('id', $id)->first();
        $brandImgForDel = $brandimg->brand_img;
        $brand = DB::table('tbl_brands')->where('id', $id)->delete();
        if ($brand) {
            $destinationPath = ITEM_IMG_PATH;
            if (File::exists($destinationPath.'/'.$brandImgForDel)) {
                File::delete($destinationPath.'/'.$brandImgForDel);
            }
                return redirect()->route('brandListLayout')
                        ->with(['message' =>'Brand deleted successfully.','message-type' => 'success']);
        } else {
            
                return redirect()->route('brandListLayout')
                    ->with(['message' =>'Something is wrong try again.','message-type' => 'warning']);
            }
    }

    public function uploadGalleryImage(Request $request)  //item gallary uploads
    {
        $photos = $request->file('files');

        $destinationPath = ITEM_IMG_PATH;
        for ($i = 0; $i < count($photos); $i++) {
            $photo = $photos[$i];
            //$name = sha1(date('YmdHis') . microtime());
            $name = preg_replace('/[^a-zA-Z0-9_.]/', '_', $photo->getClientOriginalName()).'_'.$i;
            
            $image_name = $name . '.' . $photo->getClientOriginalExtension();
            $photo->move($destinationPath, $image_name);
            
            $user_id = Auth::user()->id;
            $itemData = DB::table('tbl_item_gallery')->insert([
                'item_id' => $request->item_id,
                'img_name' => $image_name,
                'alt_tag' => $photo->getClientOriginalName(),
                'created_by' => $user_id,
            ]);

            
        }
        $defaultImg = DB::table('tbl_item_gallery')->where('item_id', $request->item_id)->first();
        DB::table('tbl_item_gallery')->where('item_id', $request->item_id)->where('id', $defaultImg->id)
        ->update(['default'=> 1]);

        return Response::json([
            'message' => 'Image saved Successfully'
        ], 200);
    }

    // public function addItenImage(Request $request)  //item gallary uploads
    // {
    //     $photos = $request->file('files');

    //     $destinationPath = ITEM_IMG_PATH;
    //     for ($i = 0; $i < count($photos); $i++) {
    //         $photo = $photos[$i];
    //         //$name = sha1(date('YmdHis') . microtime());
    //         $name = preg_replace('/[^a-zA-Z0-9_.]/', '_', $photo->getClientOriginalName()).'_'.$i;
            
    //         $image_name = $name . '.' . $photo->getClientOriginalExtension();
    //         $photo->move($destinationPath, $image_name);
            
    //         $user_id = Auth::user()->id;
    //         $itemData = DB::table('tbl_item_gallery')->insert([
    //             'item_id' => $request->item_id,
    //             'img_name' => $image_name,
    //             'alt_tag' => $photo->getClientOriginalName(),
    //             'created_by' => $user_id,
    //         ]);

            
    //     }
    //     $defaultImg = DB::table('tbl_item_gallery')->where('item_id', $request->item_id)->first();
    //     DB::table('tbl_item_gallery')->where('item_id', $request->item_id)->where('id', $defaultImg->id)
    //     ->update(['default'=> 1]);

    //     return Response::json([
    //         'message' => 'Image saved Successfully'
    //     ], 200);
    // }

    public function saveAttribute(Request $request)
    { 
        $this->validate($request, [
            'attr_name' => 'required|string|unique:tbl_attribute|max:120',
        ], [
            'attr_name.required' => 'Attribute name is required.',
            'attr_name.string' => 'Attribute name should be string.',
            'attr_name.max' => 'Attribute name Should be Minimum of 120 Character.',
        ]);
        $attrTable = 'tbl_'.strtolower(trim($request->attr_name));
        $itemData = DB::table('tbl_attribute')->insert([
            'attr_name' => ucfirst($request->attr_name),
            'table_name' => $attrTable,
            
        ]);
        if ($itemData) {
            Schema::create($attrTable, function($table)
            {           
                $table->increments('id');
                $table->string('attr_name');
                $table->integer('is_active')->default(1);
            });
            return Response::json(array('status' => 'success', 'msg' => 'New Attribute added successfully.'));
        } else {
            return Response::json(array('status' => 'wrong', 'msg' => 'Something is wrong try again.'));
        }
    }

    public function saveItem(Request $request)
    { 
        $this->validate($request, [
            'item_name' => 'required|string|max:120',
            'item_sku' => 'required|string|unique:tbl_items,item_sku',
            'attribute_family_id' => 'required',
            // 'group_id' => 'required|integer',
            // 'brand_id' => 'required|integer',
            // 'open_qty' => 'required|integer',
            // 'min_qty' => 'required|integer',
        ], [
            'attribute_family_id.required' => 'Attribute family is required.',
            'item_name.required' => 'Item name is required.',
            'item_name.string' => 'Item name should be string.',
            'item_sku.required' => 'Item sku is required.',
            'item_sku.string' => 'Item sku should be string.',
            'item_sku.unique' => 'Item sku olready used.',
            'item_name.max' => 'Item name Should be Minimum of 120 Character.',
            // 'group_id.required' => 'Group field is required.',
            // 'group_id.required' => 'Brand field is required.',
            // 'open_qty.required' => 'Open quantity field is required.',
            // 'open_qty.integer' => 'Open quantity field should be number.',
            // 'min_qty.required' => 'Min quantity field is required.',
            // 'min_qty.integer' => 'Min quantity field should be number.',
        ]);
        $user_id = Auth::user()->id;
        $itemData = DB::table('tbl_items')->insertGetId([
            'item_name' => $request->item_name,
            'item_sku' => $request->item_sku,
            'attribute_family_id' => $request->attribute_family_id,
            // 'brand_id' => $request->brand_id,
            // 'description' => $request->description,
            // 'sale_price' => $request->sale_price,
            // 'regular_price' => $request->regular_price,
            // 'open_qty' => $request->open_qty,
            // 'min_qty' => $request->min_qty,
            // 'status' => $request->status
        ]);
        //dd($itemData);exit;
        //$request->session()->flash('message', 'New Item added successfully.');
        //$request->session()->flash('message-type', 'success');

        if ($itemData) {
            return Response::json(array('status' => 'success', 'msg' => 'New Item added successfully.', 'url' => route('itemEditLayout', $itemData)));
        } else {
            return Response::json(array('status' => 'warning', 'msg' => 'Something is wrong try again'));
        }
    }

    public function deleteItemImgByAjax(Request $request)
    { 
       $itemData = DB::table('tbl_item_gallery')->where('id', $request->imgId)
        ->where('item_id', $request->itemId)->delete();
        if ($itemData) {
            return Response::json(array('status' => 'success', 'msg' => 'Item image deleted successfull.'));
        } else {
            return Response::json(array('status' => 'warning', 'msg' => 'Something is wrong try again'));
        }
    }

    public function addPrimaryImgByAjax(Request $request)
    { 
        if($request->defaultVal == 1){
            $removeAnyPrimary =  DB::table('tbl_item_gallery')->where('item_id', $request->itemId)->update(['default'=> 0]);
        }
       $itemData = DB::table('tbl_item_gallery')->where('id', $request->imgId)
        ->where('item_id', $request->itemId)->update(['default'=> $request->defaultVal]);
        if ($itemData) {
            return Response::json(array('status' => 'success', 'msg' => 'Item image have been changed successfull.'));
        } else {
            return Response::json(array('status' => 'warning', 'msg' => 'Something is wrong try again'));
        }
    }

    public function updateItem(Request $request, $item_id)
    {  
       
        
        //echo"<pre>".$item_id; print_r(json_decode($request->categorys));exit;
        $this->validate($request, [
            'item_name' => 'required|string|max:120',
            'item_sku' => 'required|string',
            //'group_id' => 'required|integer',
            'brand_id' => 'required',
            'open_qty' => 'required|integer',
            'min_qty' => 'required|integer',
            'sale_price' => 'integer',
            'regular_price' => 'integer',
            'categorys' => 'required',
        ], [
            'item_name.required' => 'Item name is required.',
            'item_name.string' => 'Item name should be string.',
            'item_name.max' => 'Item name Should be Minimum of 120 Character.',
            'item_sku.required' => 'Item sku is required.',
            'item_sku.string' => 'Item sku should be string.',
            //'group_id.required' => 'Group field is required.',
            'brand_id.required' => 'Brand field is required.',
            'open_qty.required' => 'Open quantity field is required.',
            'open_qty.integer' => 'Open quantity field should be number.',
            'min_qty.required' => 'Min quantity field is required.',
            'min_qty.integer' => 'Min quantity field should be number.',
            'sale_price.integer' => 'Sale price field should be number.',
            'regular_price.integer' => 'Regular price field should be number.',
            'regular_price.required' => 'Category field is required.',
        ]);
        $user_id = Auth::user()->id;
        $query = 0;
        $itemData = DB::table('tbl_items')->where('item_id', $item_id)->update([
            'item_name' => $request->item_name,
            'item_sku' => $request->item_sku,
            //'group_id' => $request->group_id,
            'brand_id' => $request->brand_id,
            'description' => $request->description,
            'sale_price' => $request->sale_price,
            'regular_price' => $request->regular_price,
            'open_qty' => $request->open_qty,
            'min_qty' => $request->min_qty,
        ]);
        
        if ($itemData) {
            $query = 1;
        }
            if($request->categorys){
                $cats = json_decode($request->categorys);
                //echo count($cats); dd($cats);
                DB::table('tbl_item_groups')->where('item_id', $item_id)->delete();
                for($i=0; $i < count($cats); $i++)
                {
                    DB::table('tbl_item_groups')->insert([
                        'item_id' => $item_id,
                        'g_id' => $cats[$i],
                    ]);
                }
                $query = 1;
            }

            
            if(count($request->option)>0){
                
                foreach($request->option as $code => $attrOptions){
                    DB::table('tbl_item_attributes')->where('item_id', $item_id)->where('attr_code', $code)->delete();
                    //echo $code;
                    foreach($attrOptions as $attrOption){
                        DB::table('tbl_item_attributes')->insert([
                            'item_id' => $item_id,
                            'attr_code' => $code,
                            'attr_option' => $attrOption,
                        ]);
                    }
                }
                $query = 1;
            }
        if($query ==1)
        {  
            return Response::json(array('status' => 'success', 'msg' => 'Item updated successfully.', 'url' => route('itemListLayout') ));
        } else {
            return Response::json(array('status' => 'warning', 'msg' => 'Something is wrong try again', 'url' => route('itemEditLayout', $item_id)));
        }
        
        // if ($itemData) {
        //     $request->session()->flash('message', 'Item updated successfully.');
        //     $request->session()->flash('message-type', 'success');
            
        //     return redirect()->route('itemEditLayout', $item_id);
        //     //return Response::json(array('status' => 'success', 'msg' => 'Item details updated successfull.'));
        // } else {
        //     $request->session()->flash('message', 'Something is wrong try again.');
        //     $request->session()->flash('message-type', 'warning');
        //     return redirect()->route('itemEditLayout', $item_id);
        //     //return Response::json(array('status' => 'wrong', 'msg' => 'Something is wrong try again'));
        // }
    }

    public function itemMasterLayout()
    { //viewLayout
        DB::enableQueryLog();
        $theme = Theme::uses('backend')->layout('layout');
        $dataObjArr = DB::table('tbl_items')->leftJoin('tbl_group', function ($join) {
            $join->on('tbl_items.group_id', '=', 'tbl_group.g_id');
        })->leftJoin('tbl_item_gallery', function ($join) {
            $join->on('tbl_items.item_id', '=', 'tbl_item_gallery.item_id');
            $join->DISTINCT('tbl_items.item_id');
            $join->orderBy('tbl_items.item_id','DESC');
            $join->where('tbl_item_gallery.default',1);
            // SELECT DISTINCT(column_name) FROM table_name ORDER BY column_name DESC limit 2,1;
            // $join->orderBy('tbl_items.item_id','DESC');
             $join->limit(2,1);
        })
        //->orderBy('DESC')
        
        ->select('tbl_items.*','tbl_group.g_id','tbl_group.g_name','tbl_item_gallery.img_name','tbl_item_gallery.default')
        ->get();

        $brands = DB::table('tbl_brands')->get();
        //echo"<pre>"; print_r(DB::getQueryLog());exit;
        $galleryImages = DB::table('tbl_item_gallery')->rightJoin('tbl_items', function ($join) {
            $join->on('tbl_items.item_id', '=', 'tbl_item_gallery.item_id');
        })->get();

        $attrFamilys = DB::table('tbl_attribute_families')->where('status', 1)->get();

        return $theme->scope('admin.item_master', compact('dataObjArr','galleryImages','brands','attrFamilys'))->render();
    }
    
    public function itemListLayout()
    { //viewLayout
        DB::enableQueryLog();
        $theme = Theme::uses('backend')->layout('layout');
        $dataObjArr = DB::table('tbl_items')->leftJoin('tbl_group', function ($join) {
            $join->on('tbl_items.group_id', '=', 'tbl_group.g_id');
        })->leftJoin('tbl_item_gallery', function ($join) {
            $join->on('tbl_items.item_id', '=', 'tbl_item_gallery.item_id');
            $join->DISTINCT('tbl_items.item_id');
            //$join->orderBy('tbl_items.item_id','DESC');
            $join->where('tbl_item_gallery.default',1);
            // SELECT DISTINCT(column_name) FROM table_name ORDER BY column_name DESC limit 2,1;
             //$join->orderBy('tbl_items.item_id','DESC');
             $join->limit(2,1);
        })->leftjoin('tbl_brands', function($brand){
            $brand->on('tbl_items.brand_id','=','tbl_brands.id');
        })
        ->orderBy('tbl_items.item_id','DESC')
        
        ->select('tbl_items.*','tbl_brands.id as brandId','tbl_brands.name as brandName','tbl_group.g_id','tbl_group.g_name','tbl_item_gallery.img_name','tbl_item_gallery.default')
        ->get();
        //echo"<pre>"; print_r($dataObjArr);exit;
        $galleryImages = DB::table('tbl_item_gallery')->rightJoin('tbl_items', function ($join) {
            $join->on('tbl_items.item_id', '=', 'tbl_item_gallery.item_id');
        })->get();

        return $theme->scope('admin.item_list', compact('dataObjArr','galleryImages'))->render();
    }

    public function getItembyAjax()
    { 
        $dataObjArr = DB::table('tbl_items')->leftJoin('tbl_group', function ($join) {
            $join->on('tbl_items.group_id', '=', 'tbl_group.g_id');

        })->leftJoin('tbl_item_gallery', function ($join) {

            $join->on('tbl_items.item_id', '=', 'tbl_item_gallery.item_id');
            $join->where('tbl_item_gallery.default',1);

        })->select('tbl_items.*','tbl_group.g_id','tbl_group.g_name','tbl_item_gallery.img_name','tbl_item_gallery.default')
        ->get();
        $galleryImages = DB::table('tbl_item_gallery')->get();
        return Response::json(array(
            'status' => 'success',
            'dataForTable' => $dataObjArr, 
            'galleryImages' => $galleryImages
        ));
    }

    public function addGalleryImage($item_id)
    {
        $theme = Theme::uses('backend')->layout('layout');
        $data = ['item_id' => $item_id];
        return $theme->scope('admin.add_gallery', $data)->render();
    }

    public function masterSettingsLayout()
    { //viewLayout

        $theme = Theme::uses('backend')->layout('layout');
        $data = ['data' => ''];


        return $theme->scope('admin.master_settings', $data)->render();
    }

    public function customerListLayout()
    { 
        $theme = Theme::uses('backend')->layout('layout');
        $dataObjArr = DB::table('tbl_customers')->orderBy('id','DESC')->get();

        return $theme->scope('admin.customer_list', compact('dataObjArr'))->render();
    }

    public function addressListLayout($id)
    { 
        $theme = Theme::uses('backend')->layout('layout');
        $addresses = DB::table('tbl_addresses')->orderBy('id','DESC')->get();
        $customer = DB::table('tbl_customers')->where('id', $id)->first();
        
        return $theme->scope('admin.address_list', compact('addresses', 'customer'))->render();
    }

    public function addAddressLayout($id)
    { 
        $theme = Theme::uses('backend')->layout('layout');
        $customer = DB::table('tbl_customers')->where('id', $id)->first();

        return $theme->scope('admin.address_add', compact('customer'))->render();
    }

    public function editAttributeLayout($id)
    { 
        $theme = Theme::uses('backend')->layout('layout');
        $attribute = DB::table('tbl_attributes')->where('id', $id)->first();
        $attributeOptions = DB::table('tbl_attribute_options')->where('attribute_id', $attribute->id)->get();
        return $theme->scope('admin.attribute.attribute_edit', compact('attribute','attributeOptions'))->render();
    }

    public function attributesLayout()
    { 
        $theme = Theme::uses('backend')->layout('layout');
        $attributes = DB::table('tbl_attributes')->get();
        //pr($customers);
        return $theme->scope('admin.attribute.attributes', compact('attributes'))->render();
    }

    public function attributeFamiliesLayout()
    { 
        $theme = Theme::uses('backend')->layout('layout');
        $attributeFamilies = DB::table('tbl_attribute_families')->get();
        //pr($customers);
        return $theme->scope('admin.attribute.attribute_families', compact('attributeFamilies'))->render();
    }

    public function addAttrFamilyLayout()
    { 
        $theme = Theme::uses('backend')->layout('layout');
        $attributes = DB::table('tbl_attributes')->get();
        return $theme->scope('admin.attribute.attribute_families_add', compact('attributes'))->render();
    }

    public function editAttributeFamilyLayout($id)
    { 
        $theme = Theme::uses('backend')->layout('layout');
        $attrFamily = DB::table('tbl_attribute_families')->where('id', $id)->first();

        $attrFamilyGroups = DB::table('tbl_attribute_families_group')->where('attribute_family_id', $attrFamily->id)->get();
        $attrFamilyGroups = json_decode(json_encode($attrFamilyGroups), true);

        $attrFamily = DB::table('tbl_attribute_families')->where('id', $id)->first();
        $attributes = DB::table('tbl_attributes')->get();
        
        return $theme->scope('admin.attribute.edit_attribute_family', compact('attributes','attrFamily','attrFamilyGroups'))->render();
    }

    public function addAttributeLayout()
    { 
        $theme = Theme::uses('backend')->layout('layout');
        
        return $theme->scope('admin.attribute.attribute_add')->render();
    }

    public function updateAttribute(Request $request)
    { 
        $this->validate($request, [
            'attribute_code' => 'required|string|max:191',
            'type' => 'required|max:191',
            'admin_name_lable' => 'required|string|max:191',
        ], [
            'attribute_code.required' => 'Attribute code is required.',
            'attribute_code.string' => 'Attribute code should be string.',
            'attribute_code.max' => 'Attribute code should not be grater than 191 Character.',

            'admin_name_lable.required' => 'Lable is required.',
            'admin_name_lable.string' => 'Lable should be string.',
            'admin_name_lable.max' => 'Lable should not be grater than 191 Character.',
            
            'type.required' => 'Type is required.',
            'type.max' => 'Last name should not be grater than 191 Character.',

        ]);
        $addressData = DB::table('tbl_attributes')->where('id', $request->attribute_id)->update([
            'attribute_code' => $request->attribute_code,
            'type' => $request->type,
            'admin_name_lable' => $request->admin_name_lable,
            'is_required' => $request->is_required,
            'is_unique' => $request->is_unique,
            'input_validation' => $request->input_validation,
            'is_comparable' => $request->is_comparable,
            'is_visible_on_front' => $request->is_visible_on_front,
            
        ]);
        
        if ($addressData) {
            $delOption = DB::table('tbl_attribute_options')->where('attribute_id', $request->attribute_id)->delete();
            
             for($i=0; $i<count($request->options); $i++){
                $option = DB::table('tbl_attribute_options')->insert([
                    'attribute_option_name' => $request->options[$i],
                    'attribute_id' => $request->attribute_id,
                ]);
            }
            return Response::json(array('status' => 'success', 'msg' => 'Attribute updated successfully.', 'url' => route('attributesLayout')));
        } else {
            return Response::json(array('status' => 'warning', 'msg' => 'Something is wrong try again', 'url' => route('editAttributeLayout', $request->attribute_id)));
        }
    }

    public function updateAttributeFamily(Request $request)
    { 
        
       $this->validate($request, [
            'code' => 'required|string|max:191',
            'name' => 'required|string|max:191',
        ]);
        
        $addressData = DB::table('tbl_attribute_families')->where('id', $request->attribute_families_id)->update([
            'code' => $request->code,
            'name' => $request->name,
            'status' => $request->status,
            
        ]);
        
        if ($addressData) {
            $delFamilyGroup = DB::table('tbl_attribute_families_group')->where('attribute_family_id', $request->attribute_families_id)->delete();

            $attr = $request->request->get('attributes');
            for($i=0; $i<count($attr); $i++){
                $option = DB::table('tbl_attribute_families_group')->insert([
                    'attribute_id' => $attr[$i],
                    'attribute_family_id' => $request->attribute_families_id,
                ]);
            }
            
            return Response::json(array('status' => 'success', 'msg' => 'Attribute Family updated successfully.', 'url' => route('attributeFamiliesLayout')));
        } else {
            return Response::json(array('status' => 'warning', 'msg' => 'Something is wrong try again', 'url' => route('editAttributeFamilyLayout', $request->attribute_families_id)));
        }
    }

    public function addAttributeFamily(Request $request)
    { 
        
       $this->validate($request, [
            'code' => 'required|string|max:191|unique:tbl_attribute_families,code',
            'name' => 'required|string|max:191|unique:tbl_attribute_families,name',
        ]);
        
        $addressData = DB::table('tbl_attribute_families')->insertGetId([
            'code' => $request->code,
            'name' => $request->name,
            'status' => $request->status,
            
        ]);
        
        if ($addressData) {
            $attr = $request->request->get('attributes');
            for($i=0; $i<count($attr); $i++){
                //echo $attr[$i];
                $option = DB::table('tbl_attribute_families_group')->insert([
                    'attribute_id' => $attr[$i],
                    'attribute_family_id' => $addressData,
                ]);
            }
            
            return Response::json(array('status' => 'success', 'msg' => 'Attribute Family saved successfully.', 'url' => route('attributeFamiliesLayout')));
        } else {
            return Response::json(array('status' => 'warning', 'msg' => 'Something is wrong try again'));
        }
    }

    public function addAttribute(Request $request)
    { 
        
        $this->validate($request, [
            'attribute_code' => 'required|string|max:191|unique:tbl_attributes,attribute_code',
            'type' => 'required|max:191',
            'admin_name_lable' => 'required|string|max:191|unique:tbl_attributes,admin_name_lable',
        ], [
            'attribute_code.required' => 'Attribute code is required.',
            'attribute_code.string' => 'Attribute code should be string.',
            'attribute_code.max' => 'Attribute code should not be grater than 191 Character.',

            'admin_name_lable.required' => 'Lable is required.',
            'admin_name_lable.string' => 'Lable should be string.',
            'admin_name_lable.max' => 'Lable should not be grater than 191 Character.',
            
            'type.required' => 'Type is required.',
            'type.max' => 'Last name should not be grater than 191 Character.',

        ]);
        
        $addressData = DB::table('tbl_attributes')->insertGetId([
            'attribute_code' => $request->attribute_code,
            'type' => $request->type,
            'admin_name_lable' => $request->admin_name_lable,
            'is_required' => $request->is_required,
            'is_unique' => $request->is_unique,
            'input_validation' => $request->input_validation,
            'is_comparable' => $request->is_comparable,
            'is_visible_on_front' => $request->is_visible_on_front,
            
        ]);
        
        if ($addressData) {
            for($i=0; $i<count($request->options); $i++){
                $option = DB::table('tbl_attribute_options')->insertGetId([
                    'attribute_option_name' => $request->options[$i],
                    'attribute_id' => $addressData,
                ]);
            }
            

            return Response::json(array('status' => 'success', 'msg' => 'Attribute saved successfully.', 'url' => route('attributesLayout')));
        } else {
            return Response::json(array('status' => 'warning', 'msg' => 'Something is wrong try again', 'url' => route('addAttributeLayout')));
        }
    }

    public function editAddressLayout($id)
    { 
        $theme = Theme::uses('backend')->layout('layout');
        //$customer = DB::table('tbl_customers')->where('id', $id)->first();
        $address = DB::table('tbl_addresses')->where('id', $id)->first();
        $address = json_decode(json_encode($address), true);
        //echo "<pre>";print_r($address);exit;
        return $theme->scope('admin.address_edit', compact('address'))->render();
    }

    public function editCustomerLayout($id)
    { 
        $theme = Theme::uses('backend')->layout('layout');
        $customer = DB::table('tbl_customers')->where('id', $id)->first();

        return $theme->scope('admin.customer_edit', compact('customer'))->render();
    }

    public function addAddress(Request $request)
    { 
        //dd($request->all());
        $this->validate($request, [
            'f_name' => 'required|string|max:120',
            'l_name' => 'required|string|max:120',
            'street_address' => 'required|string',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'phone' => 'required|integer',
            'postal_code' => 'required|integer',
            
        ], [
            'f_name.required' => 'First name is required.',
            'f_name.string' => 'First name should be string.',
            'f_name.max' => 'First name should not be grater than 120 Character.',

            'street_address.required' => 'Street adrress is required.',
            'street_address.string' => 'Street adrress should be string.',
            

            'phone.required' => 'Phone number is required.',
            'phone.integer' => 'Phone number should be number.',
            'postal_code.required' => 'Postal code is required.',
            'postal_code.integer' => 'Postal code should be number.',

            'l_name.required' => 'Last name is required.',
            'l_name.string' => 'Last name should be string.',
            'l_name.max' => 'Last name should not be grater than 120 Character.',

            'country.required' => 'Country is required.',
            'state.required' => 'State is required.',
            'city.required' => 'City is required.',
        ]);

        $checks = DB::table('tbl_addresses')->where('customer_id', $request->customer_id)->where('default_address', 1)->get();
        if(count($checks)>0){
            DB::table('tbl_addresses')->where('customer_id', $request->customer_id)->update([
                'default_address' => 0,
            ]);
        }
        $user_id = Auth::user()->id;
        $addressData = DB::table('tbl_addresses')->insertGetId([
            'customer_id' => $request->customer_id,
            'f_name' => $request->f_name,
            'l_name' => $request->l_name,
            'company_name' => $request->company_name,
            'street_address' => $request->street_address,
            'country' => $request->country,
            'phone' => $request->phone,
            'state' => $request->state,
            'city' => $request->city,
            'postal_code' => $request->postal_code,
            'default_address' => ($request->default_address)? 1:0,
        ]);
        
        if ($addressData) {
            return Response::json(array('status' => 'success', 'msg' => 'Address saved successfully.', 'url' => route('addressListLayout', $request->customer_id)));
        } else {
            return Response::json(array('status' => 'warning', 'msg' => 'Something is wrong try again', 'url' => route('addAddressLayout', $request->customer_id)));
        }
        
    }

    public function updateAddress(Request $request)
    { 
        //dd($request->all());
        $this->validate($request, [
            'f_name' => 'required|string|max:120',
            'l_name' => 'required|string|max:120',
            'street_address' => 'required|string',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'phone' => 'required|integer',
            'postal_code' => 'required|integer',
            
        ], [
            'f_name.required' => 'First name is required.',
            'f_name.string' => 'First name should be string.',
            'f_name.max' => 'First name should not be grater than 120 Character.',

            'street_address.required' => 'Street adrress is required.',
            'street_address.string' => 'Street adrress should be string.',
            

            'phone.required' => 'Phone number is required.',
            'phone.integer' => 'Phone number should be number.',
            'postal_code.required' => 'Postal code is required.',
            'postal_code.integer' => 'Postal code should be number.',

            'l_name.required' => 'Last name is required.',
            'l_name.string' => 'Last name should be string.',
            'l_name.max' => 'Last name should not be grater than 120 Character.',

            'country.required' => 'Country is required.',
            'state.required' => 'State is required.',
            'city.required' => 'City is required.',
        ]);

        $user_id = Auth::user()->id;
        $checks = DB::table('tbl_addresses')->where('customer_id', $request->customer_id)->where('default_address', 1)->get();
        if(count($checks)>0){
            DB::table('tbl_addresses')->where('customer_id', $request->customer_id)->update([
                'default_address' => 0,
            ]);
        }
        

        $addressData = DB::table('tbl_addresses')->where('id', $request->address_id)->update([
            'customer_id' => $request->customer_id,
            'f_name' => $request->f_name,
            'l_name' => $request->l_name,
            'company_name' => $request->company_name,
            'street_address' => $request->street_address,
            'country' => $request->country,
            'phone' => $request->phone,
            'state' => $request->state,
            'city' => $request->city,
            'postal_code' => $request->postal_code,
            'default_address' => ($request->default_address)? 1:0,
        ]);
        
        if ($addressData) {
            return Response::json(array('status' => 'success', 'msg' => 'Address saved successfully.', 'url' => route('addressListLayout', $request->customer_id)));
        } else {
            return Response::json(array('status' => 'warning', 'msg' => 'Something is wrong try again', 'url' => route('editAddressLayout', $request->address_id)));
        }
        
    }

    public function addNewCustomer(Request $request)
    { 
        //dd($request->all());
        $this->validate($request, [
            'f_name' => 'required|string|max:120',
            'l_name' => 'required|string|max:120',
            'email' => 'required|string|max:50',
            'gender' => 'required',
            'dob' => 'max:15',
            //'phone' => 'required|integer|max:10',
            // 'min_qty' => 'required|integer',
        ], [
            'f_name.required' => 'First name is required.',
            'f_name.string' => 'First name should be string.',
            'f_name.max' => 'First name should not be grater than 120 Character.',

            'phone.required' => 'Phone name is required.',
            'phone.integer' => 'Phone number should be number.',
            //'phone.max' => 'Phone should not be grater than 10 Character.',

            'l_name.required' => 'Last name is required.',
            'l_name.string' => 'Last name should be string.',
            'l_name.max' => 'Last name should not be grater than 120 Character.',
            'dob.max' => 'Date of birth should not be grater than 15 Character.',
            
            'gender.required' => 'Gender is required.',
            'email.required' => 'Email is required.',
            'email.string' => 'Email should be string.',
            'email.max' => 'Email should not be grater than 50 Character.',
            
        ]);
        $user_id = Auth::user()->id;
        $customerData = DB::table('tbl_customers')->insertGetId([
            'f_name' => $request->f_name,
            'l_name' => $request->l_name,
            'email' => $request->email,
            'gender' => $request->gender,
            'dob' => $request->dob,
            'phone' => $request->phone,
            'customer_type' => $request->customer_type,
            
        ]);
        
        if ($customerData) {
            return Response::json(array('status' => 'success', 'msg' => 'Customer save successfully.', 'url' => route('customerListLayout')));
        } else {
            return Response::json(array('status' => 'warning', 'msg' => 'Something is wrong try again', 'url' => route('addNewCustomerLayout')));
        }
        //return $theme->scope('admin.customer_list', $dataObjArr)->render();
    }

    public function updateCustomer(Request $request)
    { 
        //dd($request->all());
        $this->validate($request, [
            'f_name' => 'required|string|max:120',
            'l_name' => 'required|string|max:120',
            'email' => 'required|string|max:50',
            'gender' => 'required',
            'dob' => 'max:15',
            //'phone' => 'required|integer|max:10',
            // 'min_qty' => 'required|integer',
        ], [
            'f_name.required' => 'First name is required.',
            'f_name.string' => 'First name should be string.',
            'f_name.max' => 'First name should not be grater than 120 Character.',

            'phone.required' => 'First name is required.',
            'phone.integer' => 'Phone number should be number.',
            //'phone.max' => 'Phone should not be grater than 10 Character.',

            'l_name.required' => 'Last name is required.',
            'l_name.string' => 'Last name should be string.',
            'l_name.max' => 'Last name should not be grater than 120 Character.',
            'dob.max' => 'Date of birth should not be grater than 15 Character.',
            
            'gender.required' => 'Gender is required.',
            'email.required' => 'Email is required.',
            'email.string' => 'Email should be string.',
            'email.max' => 'Email should not be grater than 50 Character.',
            
        ]);
        $user_id = Auth::user()->id;
        $customerData = DB::table('tbl_customers')->where('id', $request->customer_id)->update([
            'f_name' => $request->f_name,
            'l_name' => $request->l_name,
            'email' => $request->email,
            'gender' => $request->gender,
            'dob' => $request->dob,
            'phone' => $request->phone,
            'customer_type' => $request->customer_type,
            
        ]);
        
        if ($customerData) {
            return Response::json(array('status' => 'success', 'msg' => 'Customer updated successfully.', 'url' => route('customerListLayout')));
        } else {
            return Response::json(array('status' => 'warning', 'msg' => 'Something is wrong try again', 'url' => route('editCustomerLayout', $request->customer_id)));
        }
        
    }

    public function deleteCustomer(Request $request)
    {
       
        $customer = DB::table('tbl_customers')->where('id', $request->customer_id)->delete();
        if ($customer) {
            return Response::json(array('status' => 'success', 'msg' => 'Customer deleted successfully.', 'url' => route('customerListLayout')));
        } else {
            return Response::json(array('status' => 'warning', 'msg' => 'Something is wrong try again'));
        }
    }

    public function addNewCustomerLayout()
    { 
        $theme = Theme::uses('backend')->layout('layout');
        $dataObjArr = ['data' => ''];

        return $theme->scope('admin.customer_add', $dataObjArr)->render();
    }

    public function get_attributes(){
        $attributes = get_attributes();
        $html = '<option value="" disabled selected>Choose atrribute</option>';
        
        foreach($attributes as $attribute){
            
            $html .= '<option value="'.$attribute['id'].'">'.$attribute['admin_name_lable'].'</option>';
        }
        return $html;
        
    }

    public function getAttributeOptions(Request $request){
        $options = get_attributes_option_by_attr_id($request->attr_id);
        // $html = '';
        
        // foreach($options as $attribute){
        //     $html .= '<label class="">'.$attribute['attribute_option_name'].'</label>';
        //     $html .= '<input type="checkbox" name="option[]" value="'.$attribute['id'].'" class="" multiple/>';
                                                
            
        // }
        // return $html;
        $html = '<option value="" disabled selected>Choose option</option>';
        
        foreach($options as $attribute){
            
            $html .= '<option value="'.$attribute['id'].'">'.$attribute['attribute_option_name'].'</option>';
        }
        return $html;
        
    }

    public function itemEditLayout($item_id)
    { 
        $theme = Theme::uses('backend')->layout('layout');
        $item = DB::table('tbl_items')->leftJoin('tbl_group', function ($join) {
            $join->on('tbl_items.group_id', '=', 'tbl_group.g_id');
            
        })->leftJoin('tbl_brands', function ($brand) {
            $brand->on('tbl_items.brand_id', '=', 'tbl_brands.id');
            
        })->select('tbl_items.*','tbl_brands.name as brandName','tbl_group.g_id','tbl_group.g_name')
        ->where('tbl_items.item_id', '=', $item_id)
        ->first();
        //pr($item);
        //$item = json_decode(json_encode($item), true);
        $attrFamily = DB::table('tbl_attribute_families')->where('id', $item->attribute_family_id)->first();

        $attrFamilyGroups = DB::table('tbl_attribute_families_group')->where('attribute_family_id', $attrFamily->id)->get();
        $attrFamilyGroups = json_decode(json_encode($attrFamilyGroups), true);

        $attributeAndOptions = DB::table('tbl_item_attributes')->where('item_id', $item_id)->get();
        $attributeAndOptions = json_decode(json_encode($attributeAndOptions), true);

        

        $itemImages = DB::table('tbl_items')->leftJoin('tbl_item_gallery', function ($join) {
            $join->on('tbl_items.item_id', '=', 'tbl_item_gallery.item_id');
           
        })->select('tbl_items.*','tbl_item_gallery.img_name','tbl_item_gallery.id','tbl_item_gallery.default')
        ->where('tbl_items.item_id', '=', $item_id)
        ->get();

        $brands = DB::table('tbl_brands')->get();

        return $theme->scope('admin.item_edit', compact('attributeAndOptions','brands','item','itemImages','attrFamilyGroups'))->render();
    }

    public function saveGroupAttribute(Request $request)
    {

        foreach ($request->UnderGroupAttrSelected as $key => $row) {

            DB::table('tbl_group_attribute')->insert(
                [
                    'g_id' => $request->UnderGroupAttr,
                    'attr_id' => $row
                ]
            );
        }
    }

    public function saveAttributeValue(Request $request)
    {

        $attribute = DB::table('tbl_attribute')->find($request->attribute_id);
        DB::table($attribute->table_name)->updateOrInsert(
            [
                'attr_name' => ucwords($request->attr_name),

            ]
        );
    }

    public function getTreeView(Request $request)
    {
        $dataObjArr = DB::table('tbl_group')->get();
        $folders_arr = array();
        foreach ($dataObjArr as $key => $rowData) {
            $parentid = $rowData->grp_id;
            if ($parentid == '0') $parentid = "#";
            $selected = false;
            $opened = false;
            if ($rowData->g_id == 2) {
                $selected = true;
                $opened = true;
            }
            $folders_arr[] = array(
                "id" => $rowData->g_id,
                "parent" => $parentid,
                "text" => $rowData->g_name,
                "state" => array("selected" => $selected, "opened" => $opened)
            );
        }
        return json_encode($folders_arr);
    }

    public function getTreeViewFrEdit(Request $request)
    {
        $item = DB::table('tbl_item_groups')->where('item_id', $request->itemId)->get();
        
        $item = json_decode(json_encode($item), true);
        //echo $item['group_id'];exit;
        $dataObjArr = DB::table('tbl_group')->get();
        $folders_arr = array();
        
        foreach ($dataObjArr as $key => $rowData) {
            $parentid = $rowData->grp_id;
            if ($parentid == '0') $parentid = "#";
            $selected = false;
            $opened = false;
            if(count($item)>0){
                for($n=0; $n<count($item); $n++){
                    if ($rowData->g_id == $item[$n]['g_id']) {
                        $selected = true;
                        $opened = true;
                    }
                }
            }
            
            $folders_arr[] = array(
                "id" => $rowData->g_id,
                "parent" => $parentid,
                "text" => $rowData->g_name,
                "state" => array("selected" => $selected, "opened" => $opened)
            );
            
        }
        return json_encode($folders_arr);
    }

    public function saveMasterGroup(Request $request)
    {
        switch ($request->action) {
            case 1:
                if ($request->primaryGroup == 1) {
                    DB::table('tbl_group')->insert(
                        [
                            'g_name' => $request->group_name,
                            'g_details' => $request->alias_name,
                            'grp_id' => $request->UnderGroup,
                            'type_id' => 1, //inventry
                            'alias' => $request->alias_name,
                            'created_by' => Auth::user()->id,

                        ]
                    );
                } else {
                    DB::table('tbl_group')->insert(
                        [
                            'g_name' => $request->group_name,
                            'g_details' => $request->alias_name,
                            'grp_id' => 0,
                            'type_id' => 1, //inventry
                            'alias' => $request->alias_name,
                            'created_by' => Auth::user()->id,

                        ]
                    );
                }



                break;
        }
    }
}
