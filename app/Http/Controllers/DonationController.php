<?php

namespace App\Http\Controllers;

use App\Models\BloodRequest;
use App\Models\Donation;
use App\Models\Donor;
use App\Models\Patients;
use App\Models\User;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Donor::join('donations','donations.donor_id','=','donors.id')
        ->join('donor_infos','donor_infos.donor_id','=','donors.id')
        ->join('users','donors.user_id','=','users.id')
        ->select('donors.*','donations.*','donor_infos.*','users.*')
        ->get();
       
        return view('admin.pages.donation.donation',compact(['data']));
    }

    public function makeADonation($id){

        $bloodRequest=BloodRequest::find($id); 
        $donorInfo=Donor::where('user_id',auth()->user()->id)->get();   

        return view('site.pages.donation.makeADonation',compact('bloodRequest','donorInfo'));
    }


    public function addDonation(Request $request){

        $request->validate([
            'description'=>'required',
            'donation_date'=>'required',
        ]);
         
        $donor=Donor::where('user_id','=',$request->user_id)->first();

        $nextAvailableDate = new DateTime("+2 months");
        
        $donor->next_available_date=$nextAvailableDate->format('d-m-Y');
        $donor->is_available=true;
        $donor->save();
        

        $request = BloodRequest::where('patient_id','=',$request->patient_id)->first();

        $request->managed=$request->managed+1;
        $request->save();

        $donation = new Donation();

        $donation->donor_id=$donor->id;
        $donation->donation_place=request('donation_place');
        $donation->donation_date=request('donation_date');
        $donation->description=request('description');
        $res=$donation->save();
        

        if($res=='true')
        {                
            return redirect()->back()->with('success','Donation Created Successfully !');
            

        }else{

            return redirect()->back()->with('danger','Something went wrong');

        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=Donor::join('users','donors.user_id','=','users.id')
        ->select('donors.*','users.*')
        ->get();

        return view('admin.pages.donation.createDonation',compact(['data']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $donation=new Donation();

        $donation->donor_id=request('donor_id');
        $donation->donation_place=request('donation_place');
        $donation->donation_date=request('donation_date');
        $donation->description=request('description');
        $res=$donation->save();

        if($res=='true')
        {                
            return redirect('/adm/all-donations')->with('success','Donation Created Successfully !');
            

        }else{

            return redirect()->back()->with('danger','Something went wrong');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function show(Donation $donation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function edit(Donation $donation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donation $donation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donation $donation)
    {
        //
    }
}
