<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use DB;
use Validator;
use session;
use Theme;
use File;
use App\User;
use Auth;

class CustomerController extends Controller
{
   public function saveCustomerProfileDetails(Request $request)
    {
        
        // pr($request->all());
        $this->validate($request, [
            'f_name' => 'required|string|max:120',
            'l_name' => 'required|string|max:120',
            'email' => 'required|string|max:50',
            //'gender' => 'required',
            //'dob' => 'max:15',
            'mobile' => 'required|integer|digits:10',
            'street_address' => 'required|string',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'postal_code' => 'required|integer',
            
        ], [
            'f_name.required' => 'First name is required.',
            'f_name.string' => 'First name should be string.',
            'f_name.max' => 'First name should not be grater than 120 Character.',

            'mobile.required' => 'Phone name is required.',
            'mobile.integer' => 'Phone number should be number.',
            'mobile.digit' => 'Phone should not be grater than 10 Character.',

            'l_name.required' => 'Last name is required.',
            'l_name.string' => 'Last name should be string.',
            'l_name.max' => 'Last name should not be grater than 120 Character.',
            //'dob.max' => 'Date of birth should not be grater than 15 Character.',
            
            //'gender.required' => 'Gender is required.',
            'email.required' => 'Email is required.',
            'email.string' => 'Email should be string.',
            'email.max' => 'Email should not be grater than 50 Character.',

            'street_address.required' => 'Street adrress is required.',
            'street_address.string' => 'Street adrress should be string.',
            
            'postal_code.required' => 'Postal code is required.',
            'postal_code.integer' => 'Postal code should be number.',
            'country.required' => 'Country is required.',
            'state.required' => 'State is required.',
            'city.required' => 'City is required.',
            
        ]);
        $query = 0;
        $status = 0;
        $customerData = DB::table('tbl_customers')->updateOrInsert(
            [
                'user_id' => $request->customer_id,
            ],[
            'cutomer_fname' => $request->cutomer_fname,
            'cutomer_lname' => $request->cutomer_lname,
            'email' => $request->email,
            //'gender' => $request->gender,
            //'dob' => $request->dob,
            'phone' => $request->mobile,
            'status' => $status,
            'customer_type' => $request->customer_type,
            
        ]);

        if ($customerData) {
            $query = 1;
        }
        
        if($request->parent_code){
             $parent_code = get_unique_code();
        }else{
            $parent_code = '';
        }

        $customer = DB::table('tbl_customers')->where('user_id', $request->customer_id)->first();

        $businessData = DB::table('tbl_businesses')->updateOrInsert(
            [
                'busines_user_id' => $request->customer_id,
                'customer_id' => $customer->id,
            ],[
            'store_name' => $request->store_name,
            'business_country' => $request->business_country,
            'business_state' => $request->business_state,
            'business_city' => $request->business_city,
            'business_postal_code' => $request->business_postal_code,
            'parent_code' => $parent_code,
        ]);

        if ($businessData) {
            $query = 1;
        }

        

        $addressData = DB::table('tbl_addresses')->updateOrInsert(
            [
                'customer_id' => $customer->id,
                'id' => $request->address_id,
                'check_page' => 0,
            ],[
                'f_name' => $request->f_name,
                'l_name' => $request->l_name,
                'customer_id' => $customer->id,
                'address_user_id' => $request->customer_id,
                //'company_name' => $request->company_name,
                'street_address' => $request->street_address,
                'gst_number' => $request->gst_number,
                'country' => $request->country,
                'state' => $request->state,
                'city' => $request->city,
                'postal_code' => $request->postal_code,
           
             ]);

            if ($addressData)
            {
            
                $query = 1;
            }
         
            //  if(!empty($request->addr2_fname) && !empty($request->addr2_lname) && !empty($request->addr2_street_address))
            //  {
            //      DB::table('tbl_addresses')->where('customer_id', $customer->id)
            //         ->where('address_user_id', $request->customer_id)
            //         ->where('id', '!=', $request->address_id)->delete();

            //     $address2Data = DB::table('tbl_addresses')->Insert(
            //         // [
            //         //     'customer_id' => $customer->id,
            //         //     'id' => $request->address_id,
            //         //     'default_address' => 0,
            //         //     'check_page' => 0,
            //         // ],
            //         [
            //             'f_name' => $request->addr2_fname,
            //             'l_name' => $request->addr2_lname,
            //             'customer_id' => $customer->id,
            //             'address_user_id' => $request->customer_id,
            //             'street_address' => $request->addr2_street_address,
            //             // 'country' => $request->country,
            //             // 'state' => $request->state,
            //             // 'city' => $request->city,
            //             // 'postal_code' => $request->postal_code,
                   
            //          ]);
            //          if ($address2Data) {
            
            //             $query = 1;
            //         }
            //  }

             if(count($request->team_name) > 0 && count($request->team_mobile) > 0 && count($request->team_email) > 0)
             {
                $detTeams = DB::table('tbl_teams')->where('customer_id', $customer->id)
                ->where('team_user_id', $request->customer_id)->delete();
                for($n = 0; $n < count($request->team_name); $n++)
                {

                //    echo  $request->team_name[$n];
                //    pr($request->team_name);
                    

                    $teamData = DB::table('tbl_teams')->insert(
                        [
                            'customer_id' => $customer->id,
                            'team_user_id' =>$request->customer_id,
                            'team_name' => $request->team_name[$n],
                            'team_mobile' => $request->team_mobile[$n],
                            'team_email' => $request->team_email[$n],
                            
                        ]);
                }

                if ($teamData) {
            
                    $query = 1;
                }
             }

            $gst_name = '';
            $license_name = '';
            $msme_udyog_adhar_name = '';
            $FSSAI_certificate_name = '';
            $Trade_certificate_name = '';
            if ($request->hasFile('gst_certificate')) 
            {
                $img = $request->file('gst_certificate');
                $name = preg_replace('/[^a-zA-Z0-9_.]/', '_', $img->getClientOriginalName());
                $destinationPath = ITEM_IMG_PATH;
                $gst_name = 'GST_'.date('mdis').$name;
                $img->move($destinationPath, $gst_name);

                //$customerdetail = get_custumer_by_user_id($customer->id);
                if (File::exists($destinationPath.'/'.$request->gst_certificate_old)) {
                    File::delete($destinationPath.'/'.$request->gst_certificate_old);
                }
            }

            if ($request->hasFile('shop_establishment_license')) 
            {
                $img = $request->file('shop_establishment_license');
                $name = preg_replace('/[^a-zA-Z0-9_.]/', '_', $img->getClientOriginalName());
                $destinationPath = ITEM_IMG_PATH;
                $license_name = 'Shop_license_'.date('mdis').$name;
                $img->move($destinationPath, $license_name);

                if (File::exists($destinationPath.'/'.$request->shop_establishment_license_old)) {
                    File::delete($destinationPath.'/'.$request->shop_establishment_license_old);
                
                }
            }

            if ($request->hasFile('msme_udyog_adhar')) 
            {
                $img = $request->file('msme_udyog_adhar');
                $name = preg_replace('/[^a-zA-Z0-9_.]/', '_', $img->getClientOriginalName());
                $destinationPath = ITEM_IMG_PATH;
                $msme_udyog_adhar_name = 'Udyog_adhar_'.date('mdis').$name;
                $img->move($destinationPath, $msme_udyog_adhar_name);

                if (File::exists($destinationPath.'/'.$request->msme_udyog_adhar_old)) {
                    File::delete($destinationPath.'/'.$request->msme_udyog_adhar_old);
                }
            }

            if ($request->hasFile('FSSAI_certificate')) 
            {
                $img = $request->file('FSSAI_certificate');
                $name = preg_replace('/[^a-zA-Z0-9_.]/', '_', $img->getClientOriginalName());
                $destinationPath = ITEM_IMG_PATH;
                $FSSAI_certificate_name = 'FSSAI_certificate_'.date('mdis').$name;
                $img->move($destinationPath, $FSSAI_certificate_name);

                if (File::exists($destinationPath.'/'.$request->FSSAI_certificate_old)) {
                    File::delete($destinationPath.'/'.$request->FSSAI_certificate_old);
                }
            }

            if ($request->hasFile('Trade_certificate')) 
            {
                $img = $request->file('Trade_certificate');
                $name = preg_replace('/[^a-zA-Z0-9_.]/', '_', $img->getClientOriginalName());
                $destinationPath = ITEM_IMG_PATH;
                $Trade_certificate_name = 'Trade_certificate_'.date('mdis').$name;
                $img->move($destinationPath, $Trade_certificate_name);

                if (File::exists($destinationPath.'/'.$request->Trade_certificate_old)) {
                    File::delete($destinationPath.'/'.$request->Trade_certificate_old);
                }
            }

            $documents = DB::table('tbl_customer_documents')->updateOrInsert(
                [
                    'customer_id' => $customer->id,
                    'customer_docs_user_id' => $request->customer_id,
                ],[
                    'gst_certificate' => ($gst_name) ? $gst_name : $request->gst_certificate_old,

                    'shop_establishment_license' => ($license_name) ? $license_name : $request->shop_establishment_license_old,
                    
                    'msme_udyog_adhar' => ($msme_udyog_adhar_name) ? $msme_udyog_adhar_name : $request->msme_udyog_adhar_old,
                    
                    'FSSAI_certificate' => ($FSSAI_certificate_name) ? $FSSAI_certificate_name : $request->FSSAI_certificate_old,
                    
                    'Trade_certificate' => ($Trade_certificate_name) ? $Trade_certificate_name : $request->Trade_certificate_old,
                ]);
    
                if ($documents)
                {
                
                    $query = 1;
                }

            
            //Start code for documents
             
             //End code for documents
        
        if ($query ==1) {

            $user = User::find($request->customer_id);
            $user->profile = 0;
            $user->mobile = $request->mobile;
            $user->name = $request->f_name.' '.$request->l_name;
            $user->email = $request->email;
            $user->save();

            $customer = session()->get('customer'); 
            $customer->profile = 0;
            $customer->mobile = $request->mobile;
            $customer->save();
            
            return Response::json(array('status' => 'success', 'msg' => 'Profile save successfully.', 'url' => route('customerProfile')));
        } else {
            return Response::json(array('status' => 'warning', 'msg' => 'Something is wrong try again'));
        }

    }

    public function addresses()
    {
        $theme = Theme::uses('backend')->layout('layout');
        $customer = session()->get('customer'); 
        if($customer)
        {
            $addresses = get_addresses_by_user_id($customer->id);
            $customer = DB::table('tbl_customers')->where('user_id', $customer->id)->first();
            return $theme->scope('admin.address_list', compact('addresses', 'customer'))->render();
        }
    }

    public function saveProfilePic(Request $request)
    {
        $this->validate($request, [
            'customer_pic' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $customer = session()->get('customer'); 
        if($customer)
        {
            if ($request->hasFile('customer_pic')) 
            {
                $img = $request->file('customer_pic');
                $name = preg_replace('/[^a-zA-Z0-9_.]/', '_', $img->getClientOriginalName());
                $destinationPath = ITEM_IMG_PATH;
                $image_name = 'profile_'.date('mdis').$name;
                $img->move($destinationPath, $image_name);

                $customerdetail = get_custumer_by_user_id($customer->id);
                if (File::exists($destinationPath.'/'.$customerdetail->profile_pic)) {
                    File::delete($destinationPath.'/'.$customerdetail->profile_pic);
                }
            }
            $customerData = DB::table('tbl_customers')->where('user_id', $customer->id)->update([

                'profile_pic' => $image_name,
            ]);

            if ($customerData) {

                return Response::json(array('status' => 'success', 'msg' => 'Profile pic save successfully.', 'picPath' =>asset('/'.ITEM_IMG_PATH.'/'.$image_name)));
            } else {

                return Response::json(array('status' => 'warning', 'msg' => 'Something is wrong try again'));
            }
        }
    }

    public function customerProfile(Request $request)
    {
        $theme = Theme::uses('backend')->layout('layout');
        
        $customer = get_customer_and_address_by__user_id(Auth::user()->id);
        // if(Auth::user()->profile == 0){
        //     return redirect()->route('dashboard');
        // }
        return $theme->scope('admin.customer_profile', compact('customer'))->render();
       
    }

}
