<?php

namespace App\Http\Controllers;

use App\Models\Donor;
use App\Models\DonorInfo;
use App\Models\Patients;
use App\Models\School;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomRegController extends Controller
{
    public function index(){
        return view('site.pages.auth.register');
    }

    public function create(Request $request){

    if(request('role')=='donor'){

        $request->validate([
            'name'=> 'required|min:3',
            'email'=> 'required|email|unique:users',
            'role'=>'required',
            'contact'=> 'required|numeric|min:11',
            'password'=> 'required|min:8',
            'school'=> 'required',
            'blood'=> 'required',
            'weight'=> 'required',
            'date_of_birth'=> 'required',
            'gender'=> 'required',
            'address'=> 'required',
        ]);

        $user=new User();

        $user->name=request('name');
        $user->email=request('email');
        $user->password=Hash::make(request('password'));
        $user->role=request('role');
        $user->save();

        $school=new School();

        $school->school_name=request('school');
        $res=$school->save();
        
        $donor=new Donor();

        $donor->school_id=$school->id;
        $donor->user_id=$user->id;
        $donor->blood_group=request('blood');
        $donor->weight=request('weight');
        $res=$donor->save();

        $donor_info=new DonorInfo();

        $donor_info->donor_id=$donor->id;
        $donor_info->date_of_birth=request('date_of_birth');
        $donor_info->address=request('address');
        $donor_info->contact_no=request('contact');
        $donor_info->gender=request('gender');
        $res=$donor_info->save();

        if($res=='true')
        {                
            return redirect()->back()->with('success','You Registered successfully as Donor !! Please Login for more information');
            

        }else{

            return redirect()->back()->with('danger','Something went wrong');

        }

    }elseif(request('role')=='patient'){

             $request->validate([

            'name'=> 'required|min:3',
            'password'=> 'required|min:8',
            'email'=> 'required|email|unique:users',
            'role'=>'required',
            'p_contact'=> 'required|numeric|min:11',
            'p_desises'=> 'required',
            'p_blood'=> 'required',
            'p_address'=> 'required',

        ]);
       
        $user=new User();

        $user->name=request('name');
        $user->email=request('email');
        $user->password=Hash::make(request('password'));
        $user->role=request('role');
        $user->save();

        $patient = new Patients();
        $patient->user_id=$user->id;
        $patient->desises=request('p_desises');
        $patient->contact=request('p_contact');
        $patient->blood_group=request('p_blood');
        $patient->address=request('p_address');
        $res=$patient->save();


        if($res=='true')
        {                
            return redirect()->back()->with('success','You  Registered Successfully as Patient !! Please Login for more information');
            

        }else{

            return redirect()->back()->with('danger','Something went wrong');

        }

    }else{

        $request->validate([

            'name'=> 'required|min:3',
            'password'=> 'required|min:8',
            'email'=> 'required|email|unique:users',
            'role'=>'required',

        ]);
       
        $user=new User();

        $user->name=request('name');
        $user->email=request('email');
        $user->password=Hash::make(request('password'));
        $user->role=request('role');
        $res=$user->save();

        if($res=='true')
        {                
            return redirect()->back()->with('success','You Registered Successfully !! . Please Login for more information');
            

        }else{

            return redirect()->back()->with('danger','Something went wrong');

        }

    }
        
        return $request;
    }
}
