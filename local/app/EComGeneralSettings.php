<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class ECOMGeneralSettings extends Model
{
    protected $systemDateFormat	= "yyyy/mm/dd";

    protected $countries        = array();
    
    public function getDateFormat()
    {
        return $this->systemDateFormat;
    }
    public function getUnderGroup()
    {
        $data = DB::table('tbl_group')->get();
        return $data;


    }
    public function getItemCategory()
    {
        $data = DB::table('tbl_item_category')->get();
        return $data;


    }
    public function getCountry()
    {
        $data = DB::table('countries')->limit(10)->get();
        return $data;


    }
    
    
    public function getItemAttributes()
    {
        $data = DB::table('tbl_attribute')->get();
        return $data;
    }
    
    

    
    
}
