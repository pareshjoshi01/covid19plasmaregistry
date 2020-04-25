<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeedbackRequest;
use Illuminate\Http\Request;
use App\Donor;
use App\Seeker;
use App\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactDetails;

class SiteController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function donor_register()
    {
        return view('donor.register');
    }

    public function save_donor_details(FeedbackRequest $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'country_code' => 'required',
          //  'location' => 'required',
            'country' => 'required',
            'zipcode' => 'required',
            'email' => 'email',
            'positive_test_date' => 'required',
            'blood_group' => 'required',
            'accept_condition' => 'required'
        ]);

        $input = $request->all();

        /*
        $donor_details = Donor::where("phone",$request->phone)->where("country_code",$request->country_code)->first();
        if($donor_details)
        {
          return redirect()->back()->withInput()->with('flash_message_error','Phone number already exists!');
        }
        */

        try {

            $input['name'] = $this->encryptString($input['name']);
            $input['phone'] = $this->maskPhoneNumber($input['phone']);
            $input['encrypted_phone'] = $this->encryptString($input['phone']);
            $input['email'] = $this->encryptString($input['email']);

			      $donor_res = Donor::create($input);

            // send otp code
            $app_res = $this->send_mobile_authentication_msg($request->country_code.$request->phone);
             if($app_res['status'] == true)
             {
                 Donor::where("id",$donor_res['id'])->update(["otp_code" => $app_res['otp_code']]);
             }

            return redirect('/donor/'.$donor_res["id"].'/otp/verification')->with('flash_message_success','Donor registered successfully.');
        }
        catch (\Exception $e) {
		        return redirect()->back()->withInput()->with('flash_message_error','Something is wrong!');
        }

    }

    public function donor_otp_verification($donor_id)
    {
        $donor_details = Donor::where("id",$donor_id)->select("id","phone","country_code")->first();
        return view('donor.otp_verification')->with('donor_details',$donor_details);
    }

    public function donor_otp_verify(Request $request, $donor_id)
    {
        $this->validate($request, [
            'otp_code' => 'required|digits:6',
        ]);

        $otp_code = $request->otp_code;

        $donor_details = Donor::where("id", $donor_id)->first();

        if($donor_details->otp_code == $otp_code)
        {
            $phone_verified = Donor::where("id", $donor_id)->update(["is_verified" => 1]);
            return redirect()->route('donor.thankyou')->with('success','Account verified successfully!');
        }
        else
        {
            return redirect()->back()->with('error', "Invalid OTP");
        }
    }

    public function donor_thankyou()
    {
        return view('donor.thankyou');
    }

    public function find_donor()
    {
        return view('seeker.find');
    }

    public function save_seeker_details(FeedbackRequest $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'country_code' => 'required',
            'email' => 'email',
            'hospital_name' => 'required',
            'hospital_address' => 'required',
            'country' => 'required',
            'zipcode' => 'required',
            'document' => 'required',
            'patient_blood_group' => 'required'
        ]);

        $input = $request->all();

        try {

            $input['name'] = $this->encryptString($input['name']);
            $input['phone'] = $this->maskPhoneNumber($input['phone']);
            $input['encrypted_phone'] = $this->encryptString($input['phone']);
            $input['email'] = $this->encryptString($input['email']);

            $seeker_res = Seeker::create($input);

            // send otp code
            $app_res = $this->send_mobile_authentication_msg($request->country_code.$request->phone);
             if($app_res['status'] == true)
             {
                 Seeker::where("id",$seeker_res['id'])->update(["otp_code" => $app_res['otp_code']]);
             }

            return redirect('/seeker/'.$seeker_res["id"].'/otp/verification')->with('flash_message_success','Seeker registered successfully.');
        }
        catch (\Exception $e) {
            return redirect()->back()->withInput()->with('flash_message_error','Something is wrong!');
        }
    }

    public function seeker_otp_verification($seeker_id)
    {
        $seeker_details = Seeker::where("id",$seeker_id)->select("id","phone","country_code")->first();
        return view('seeker.otp_verification')->with('seeker_details',$seeker_details);
    }

    public function seeker_otp_verify(Request $request, $seeker_id)
    {
        $this->validate($request, [
            'otp_code' => 'required|digits:6',
        ]);

        $otp_code = $request->otp_code;

        $seeker_details = Seeker::where("id", $seeker_id)->first();

        if($seeker_details->otp_code == $otp_code)
        {
            $phone_verified = Seeker::where("id", $seeker_id)->update(["is_verified" => 1]);
            return redirect()->route('seeker.thankyou')->with('success','Account verified successfully!');
        }
        else
        {
            return redirect()->back()->with('error', "Invalid OTP");
        }
    }

    public function seeker_thankyou()
    {
        return view('seeker.thankyou');
    }

    public function volunteer_contact()
    {
        return view('volunteer_contact');
    }

    public function volunteer_contact_save(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'msg' => 'required'
        ]);

        $input = $request->all();
        $inputemail = $input;

        $input['name'] = $this->encryptString($input['name']);
        $input['email'] = $this->encryptString($input['email']);

        try {
            $contact_res = Contact::create($input);
            //send contact us mail
            Mail::to(env('CONTACT_ADMIN_EMAIL'))->send(new ContactDetails($inputemail));
            return redirect()->back()->with('flash_message_success','Your message has been sent. Thank you!');
        }
        catch (\Exception $e) {
            return redirect()->back()->with('flash_message_error','Something is wrong!');
        }
    }

    public function about()
    {
        return view('about');
    }

}
