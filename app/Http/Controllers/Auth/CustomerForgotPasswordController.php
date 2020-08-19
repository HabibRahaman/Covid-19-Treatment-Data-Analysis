<?php

namespace App\Http\Controllers\Auth;

use Hash;
use Mail;
use Session;
use App\Model\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\CustomerForgetPassword;

class CustomerForgotPasswordController extends Controller
{
    public function forgotPassword()
    {

        return view('web.auth.forgot-password');

    }


    public function emailForgotPasswordLink(Request $request)
    {
        
        $this->validate($request,[
            'email' => 'required',
        ]);
        

        $customer = Customer::where('email', $request->email)->get();

        if(count($customer) == 1){
        	$length = 18;
			$token = bin2hex(random_bytes($length));

			$update = Customer::where('email', '=', $request->email)->firstOrFail();
			$update->remember_token = $token;
			$update->save();

			$receiverName = $update->name;


            // Passing data to email template
            $data['token'] = $token;
            $data['id'] = $update->id;
            $data['name'] = $update->name;

            // Mail Information
            $data['senderName'] = 'Bangladesh Tourism Guide';
            $data['subject'] = 'Password Reset';
            $data['sendTo'] = $request->email;
            $data['receiverName'] = $receiverName;

            // Send Mail
            Mail::to($data['sendTo'])->send(new CustomerForgetPassword($data));

            Session::flash('success', 'Mail Send Successfully! Check Your Inbox Now');

            return view('web.auth.forgot-mailed');

        }
        else{
            Session::flash('error', 'Have Not Found Any Account In This Email Address');
        }

        return redirect()->back();
    }


    public function verifyEmail(Request $request, $id, $token)
    {

        $customer = Customer::where('id', $id)->firstOrFail();

        return view('web.auth.reset-password', compact('customer', 'token'));

    }


    public function resetPassword(Request $request)
    {

        $customer = Customer::findOrFail($request->id);

        $this->validate($request,[
            'password' => 'required|confirmed|min:6',
            ]);


        $customer->password = Hash::make($request->password);
        $customer->remember_token = NULL;
        $customer->save();

        session()->flash('success','Your password has been updated successfully');

        return redirect()->route('customer.login');

    }
}
