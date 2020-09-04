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

function get_attribute_options_by_attribute_id($id)
{
    $attributeOptions = DB::table('tbl_attribute_options')->where('attribute_id', $id)->get();
    
    return $attributeOptions;
}

