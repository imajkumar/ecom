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
        
        $this->validate($request, [
            'f_name' => 'required|string|max:120',
            'l_name' => 'required|string|max:120',
            'email' => 'required|string|max:50',
            'gender' => 'required',
            'dob' => 'max:15',
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
            'dob.max' => 'Date of birth should not be grater than 15 Character.',
            
            'gender.required' => 'Gender is required.',
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
        $customerData = DB::table('tbl_customers')->updateOrInsert(
            [
                'user_id' => $request->customer_id,
            ],[
            'f_name' => $request->f_name,
            'l_name' => $request->l_name,
            'email' => $request->email,
            'gender' => $request->gender,
            'dob' => $request->dob,
            'phone' => $request->mobile,
            'customer_type' => $request->customer_type,
            
        ]);
        if ($customerData) {
            $query = 1;
        }
        $customer = DB::table('tbl_customers')->where('user_id', $request->customer_id)->first();
              
        $addressData = DB::table('tbl_addresses')->updateOrInsert(
            [
                'customer_id' => $customer->id,
                'default_address' => 0,
                'check_page' => 0,
            ],[
                'f_name' => $request->f_name,
                'l_name' => $request->l_name,
                'customer_id' => $customer->id,
                'address_user_id' => $request->customer_id,
                'company_name' => $request->company_name,
                'street_address' => $request->street_address,
                'country' => $request->country,
                'state' => $request->state,
                'city' => $request->city,
                'postal_code' => $request->postal_code,
           
             ]);
         
        if ($addressData) {
            
            $query = 1;
        }
        
        if ($query ==1) {

            $user = User::find($request->customer_id);
            $user->profile = 0;
            $user->mobile = $request->mobile;
            $user->name = $request->f_name.' '.$request->l_name;
            $user->save();

            $customer = session()->get('customer'); 
            $customer->profile = 0;
            $customer->mobile = $request->mobile;
            $customer->save();

            return Response::json(array('status' => 'success', 'msg' => 'Profile save successfully.', 'url' => route('addresses')));
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

        return $theme->scope('admin.customer_profile', compact('customer'))->render();
       
    }

}
