<?php 
function getDateFormat()
{
    $obj = app('App\EComGeneralSettings');
    return $obj->getDateFormat(); 
}

function getUnderGroup()
{
    $obj = app('App\EComGeneralSettings');
    return $obj->getUnderGroup(); 
}

function getItemAttributes()
{
    $obj = app('App\EComGeneralSettings');
    return $obj->getItemAttributes(); 
}

function pr($arr)
{
    echo "<pre>";print_r($arr);exit;
    
}

function get_attribute_by_id($id)
{
    $attribute = DB::table('tbl_attributes')->where('id', $id)->first();
    
    return json_decode(json_encode($attribute), true);
}

function get_attributes()
{
    $attribute = DB::table('tbl_attributes')->get();
    
    return json_decode(json_encode($attribute), true);
    //return $attribute;
}

function get_attributes_option_by_attr_id($attr_id)
{
    $attribute = DB::table('tbl_attribute_options')->where('attribute_id', $attr_id)->get();
    
    return json_decode(json_encode($attribute), true);
    //return $attribute;
}

function get_itemAtributeOptions_by_option_id($option_id)
{
    
   $attribute = DB::table('tbl_item_attributes')->where('attr_option', $option_id)->first();
   //pr(json_decode(json_encode($attribute), true));
    return json_decode(json_encode($attribute), true);
    //return $attribute;
}

function get_attribute_options_by_attribute_id($id)
{
    $attributeOptions = DB::table('tbl_attribute_options')->where('attribute_id', $id)->get();
    
    return $attributeOptions;
}

function get_categorys_by_item_id($item_id)
{
    $categories = DB::table('tbl_item_groups')->where('item_id', $item_id)->get();
    
    return $categories;
}

function get_categorys_by_g_id($g_id)
{
    $groups = DB::table('tbl_group')->where('g_id', $g_id)->first();
    
    return $groups;
}

