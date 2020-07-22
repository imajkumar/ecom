<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Theme;
use DB;
use Illuminate\Support\Facades\Auth;
use Response;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function uploadGalleryImage(Request $request)  //item gallary uploads
    {
        $photos = $request->file('files');

        $destinationPath = ITEM_IMG_PATH;
        for ($i = 0; $i < count($photos); $i++) {
            $photo = $photos[$i];
            $name = sha1(date('YmdHis') . microtime());
            $image_name = $name . '.' . $photo->getClientOriginalExtension();
            $photo->move($destinationPath, $image_name);
            
            $user_id = Auth::user()->id;
            $itemData = DB::table('tbl_item_gallery')->insert([
                'item_id' => $request->item_id,
                'img_name' => $image_name,
                'alt_tag' => $photo->getClientOriginalName(),
                'created_by' => $user_id

            ]);
        }
        return Response::json([
            'message' => 'Image saved Successfully'
        ], 200);
    }
    public function saveItem(Request $request)
    { //viewLayout

        //echo"<pre>"; print_r($request->all());exit;
        $this->validate($request, [
            'item_name' => 'required|string|max:120',
            'group_id' => 'required|integer',
            'open_qty' => 'required|integer',
            'min_qty' => 'required|integer',
        ], [
            'item_name.required' => 'Item name is required.',
            'item_name.string' => 'Item name should be string.',
            'item_name.max' => 'Item name Should be Minimum of 120 Character.',
            'group_id.required' => 'Group field is required.',
            'open_qty.required' => 'Open quantity field is required.',
            'open_qty.integer' => 'Open quantity field should be number.',
            'min_qty.required' => 'Min quantity field is required.',
            'min_qty.integer' => 'Min quantity field should be number.',
        ]);
        $user_id = Auth::user()->id;
        $itemData = DB::table('tbl_items')->insert([
            'item_name' => $request->item_name,
            'group_id' => $request->group_id,
            'open_qty' => $request->open_qty,
            'min_qty' => $request->min_qty,
        ]);
        $request->session()->flash('message', 'New customer added successfully.');
        $request->session()->flash('message-type', 'success');

        if ($itemData) {
            return Response::json(array('status' => 'success', 'msg' => 'Item details save successfull.'));
        } else {
            return Response::json(array('status' => 'wrong', 'msg' => 'Something is wrong try again'));
        }
    }

    public function itemMasterLayout()
    { //viewLayout

        $theme = Theme::uses('backend')->layout('layout');
        $dataObjArr = DB::table('tbl_items')->leftJoin('tbl_group', function ($join) {
            $join->on('tbl_items.group_id', '=', 'tbl_group.g_id');
        })->get();
        //dd($dataObjArr);
        //$data = ['data' => ''];
        return $theme->scope('admin.item_master', compact('dataObjArr'))->render();
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
