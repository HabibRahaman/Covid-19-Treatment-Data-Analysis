<?php

namespace App\Http\Controllers\Auth;

use Hash;
use Mail;
use Session;
use App\Model\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\PatientForgetPassword;

class PatientForgotPasswordController extends Controller
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
        

        $patient = Patient::where('email', $request->email)->get();

        if(count($patient) == 1){
        	$length = 18;
			$token = bin2hex(random_bytes($length));

			$update = Patient::where('email', '=', $request->email)->firstOrFail();
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
            Mail::to($data['sendTo'])->send(new PatientForgetPassword($data));

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

        $patient = Patient::where('id', $id)->firstOrFail();

        return view('web.auth.reset-password', compact('patient', 'token'));

    }


    public function resetPassword(Request $request)
    {

        $patient = Patient::findOrFail($request->id);

        $this->validate($request,[
            'password' => 'required|confirmed|min:6',
            ]);


        $patient->password = Hash::make($request->password);
        $patient->remember_token = NULL;
        $patient->save();

        session()->flash('success','Your password has been updated successfully');

        return redirect()->route('patient.login');

    }
}
