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
