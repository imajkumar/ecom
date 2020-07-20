<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Theme;
use DB;
use Illuminate\Support\Facades\Auth;
<<<<<<< HEAD

=======
//ajay
>>>>>>> master
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function itemMasterLayout()
    { //viewLayout

        $theme = Theme::uses('backend')->layout('layout');
        $data = ['data' => ''];
<<<<<<< HEAD
=======


>>>>>>> master
        return $theme->scope('admin.item_master', $data)->render();
    }

    public function masterSettingsLayout()
    { //viewLayout

        $theme = Theme::uses('backend')->layout('layout');
        $data = ['data' => ''];


        return $theme->scope('admin.master_settings', $data)->render();
    }
    public function saveGroupAttribute(Request $request){
        
        foreach ($request->UnderGroupAttrSelected as $key => $row) 
        {
            
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

    public function getTreeView(Request $request){
        $dataObjArr = DB::table('tbl_group')->get();
        $folders_arr = array();
        foreach ($dataObjArr as $key => $rowData) {
            $parentid =$rowData->grp_id;
            if($parentid == '0') $parentid = "#";
            $selected = false;$opened = false;
            if($rowData->g_id == 2){
                $selected = true;$opened = true;
            }
            $folders_arr[] = array(
                "id" => $rowData->g_id,
                "parent" => $parentid,
                "text" => $rowData->g_name,
                "state" => array("selected" => $selected,"opened"=>$opened) 
             );

        }
        return json_encode($folders_arr);

    }

    public function saveMasterGroup(Request $request){
        switch ($request->action) {
            case 1:
                if($request->primaryGroup==1){
                    DB::table('tbl_group')->insert(
                        [
                            'g_name' =>$request->group_name,
                            'g_details' => $request->alias_name,
                            'grp_id' =>$request->UnderGroup,
                            'type_id' => 1, //inventry
                            'alias' => $request->alias_name,
                            'created_by' => Auth::user()->id,
                            
                        ]
                    );
                }else{
                    DB::table('tbl_group')->insert(
                        [
                            'g_name' =>$request->group_name,
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