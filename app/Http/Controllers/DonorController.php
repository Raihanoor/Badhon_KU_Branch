<?php

namespace App\Http\Controllers;

use App\Models\Donor;
use App\Models\DonorInfo;
use App\Models\School;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DonorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data=User::join('donors','donors.user_id','=','users.id')
        ->join('donor_infos','donor_infos.donor_id','=','donors.id')
        ->select('donors.*','users.*','donor_infos.*')
        ->get();

        return view('site.pages.donor',compact(['data']));
    }
 

    public function donors()
    {
        $data=User::join('donors','donors.user_id','=','users.id')
        ->join('donor_infos','donor_infos.donor_id','=','donors.id')
        ->select('donors.*','users.*','donor_infos.*')
        ->get();

        $school=School::all();

        return view('admin.pages.donor',compact(['school','data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.createDonor');
    }

        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function userToDonor(Request $request)
    {
        $request->validate([

            'contact'=> 'required|numeric|min:11',
            'school'=> 'required',
            'blood'=> 'required',
            'weight'=> 'required',
            'date_of_birth'=> 'required',
            'gender'=> 'required',
            'address'=> 'required',


        ]);
        
        $user = User::find(Auth::user()->id);

        $donor=new Donor();

        $donor_info=new DonorInfo();

        $school=new School();

        $school->school_name=request('school');
        $res=$school->save();


        $user->role='donor';
        $user->save();



        $donor->school_id=$school->id;
        $donor->user_id=$user->id;
        $donor->blood_group=request('blood');
        $donor->weight=request('weight');
        $res=$donor->save();


        $donor_info->donor_id=$donor->id;
        $donor_info->date_of_birth=request('date_of_birth');
        $donor_info->address=request('address');
        $donor_info->contact_no=request('contact');
        $donor_info->gender=request('gender');
        $res=$donor_info->save();



        if($res=='true')
        {                
            return redirect()->back()->with('success','You are now a donor!');
            

        }else{

            return redirect()->back()->with('danger','Something went wrong');

        }

    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 

        $request->validate([
            'name'=> 'required|min:3',
            'email'=> 'required|email|unique:users',
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
        $user->role='donor';
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
            return redirect('/adm/all-donors')->with('success','Donor Created Successfully !');
            

        }else{

            return redirect()->back()->with('danger','Something went wrong');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('site.pages.donor.becomeAhero');
    }

    public function donorReg(Request $request)
    {
        $request->validate([
            'name'=> 'required|min:3',
            'email'=> 'required|email|unique:users',
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
        $user->role='donor';
        $user->save();

        $school=new School();

        $school->school_name=request('school');
        $res=$school->save();
        
        $donor=new Donor();

        $donor->school_id=$school->id;
        $donor->user_id=$user->id;
        $donor->blood_group=request('blood');
        $donor->height=request('height');
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
            return redirect()->back()->with('success','You have Registered Successfully ! Please Login');
            

        }else{

            return redirect()->back()->with('danger','Something went wrong');

        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=User::join('donors','donors.user_id','=','users.id')
        ->join('donor_infos','donor_infos.donor_id','=','donors.id')
        ->select('donors.*','users.*','donor_infos.*')
        ->where('donors.id','=',$id)
        ->get();


        $school=Donor::join('schools','donors.school_id','=','schools.id')
        ->select('donors.*','schools.*')
        ->where('donors.id','=',$id)
        ->get();


        return view('admin.pages.editDonor',compact(['data','school']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            $request->validate([
                'name'=> 'required|min:3',
                'email'=> 'required|email',
                'contact'=> 'required|numeric|min:11',
                'password'=> 'required|min:8',
                'school'=> 'required',
                'blood'=> 'required',
                'height'=> 'required',
                'weight'=> 'required',
                'date_of_birth'=> 'required',
                'gender'=> 'required',
                'address'=> 'required',


            ]);

            $donor=Donor::find($id);
    
            $donor_info=DonorInfo::find($donor->id);
            
            $user=User::find($donor->user_id);

            $school=School::find($donor->school_id);

            $school->school_name=request('school');
            $res=$school->save();


            $user->name=request('name');
            $user->email=request('email');
            $user->password=Hash::make(request('password'));
            $user->role='donor';
            $user->save();



            $donor->school_id=$school->id;
            $donor->user_id=$user->id;
            $donor->blood_group=request('blood');
            $donor->height=request('height');
            $donor->weight=request('weight');
            $res=$donor->save();


            $donor_info->donor_id=$donor->id;
            $donor_info->date_of_birth=request('date_of_birth');
            $donor_info->address=request('address');
            $donor_info->contact_no=request('contact');
            $donor_info->gender=request('gender');
            $res=$donor_info->save();



            if($res=='true')
            {                
                return redirect('/adm/all-donors')->with('success','Donor Edited Successfully !');
                

            }else{

                return redirect()->back()->with('danger','Something went wrong');

            }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Donor::find($id);      
        $user_id=$data->user_id;
        $user=User::find($user_id);
        
        if($user)
            {  
                $user->delete();             
                return redirect()->back()->with('success','Donor Deleted');
                

            }else{

                return redirect()->back()->with('danger','Something went wrong');

            }
    }
}
