<?php

namespace App\Http\Controllers;

use App\Models\BloodRequest;
use App\Models\Patients;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=User::join('patients','patients.user_id','=','users.id')
        ->select('patients.*','users.*')
        ->get();

        return view('admin.pages.patient.patient',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.patient.createPatient');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $patient=new Patients();

        $user=new User();


        $user->name=request('name');
        $user->email=request('email');
        $user->password=Hash::make(request('password'));
        $user->role='patient';
        $user->save();

        $patient->user_id=$user->id;
        $patient->desises=request('desises');
        $patient->blood_group=request('blood');
        $patient->address=request('address');
        $patient->contact=request('contact');
        $res=$patient->save();



        if($res=='true')
        {                
            return redirect('/adm/all-patients')->with('success','Patient Updated Successfully');
            

        }else{

            return redirect()->back()->with('danger','Something went wrong');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patients  $patients
     * @return \Illuminate\Http\Response
     */
    public function show(Patients $patients)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patients  $patients
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=User::join('patients','patients.user_id','=','users.id')
        ->select('patients.*','users.*')
        ->where('users.id','=',$id)
        ->get();

        return view('admin.pages.patient.editPatient',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patients  $patients
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $patient=Patients::where('user_id','=',$id)->first();

        $user=User::find($patient->user_id);


        $user->name=request('name');
        $user->email=request('email');
        $user->password=Hash::make(request('password'));
        $user->role='patient';
        $user->save();

        $patient->user_id=$user->id;
        $patient->desises=request('desises');
        $patient->blood_group=request('blood');
        $patient->address=request('location');
        $patient->contact=request('contact_no');
        $res=$patient->save();



        if($res=='true')
        {                
            return redirect('/adm/all-patients')->with('success','Patient Updated Successfully');
            

        }else{

            return redirect()->back()->with('danger','Something went wrong');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patients  $patients
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {     
        $user=User::find($id);
        
        if($user)
            {  
                $user->delete();             
                return redirect()->back()->with('success','Patient Deleted');
                

            }else{

                return redirect()->back()->with('danger','Something went wrong');

            }
    }
}
