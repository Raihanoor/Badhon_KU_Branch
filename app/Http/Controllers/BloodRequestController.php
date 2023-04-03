<?php

namespace App\Http\Controllers;

use App\Models\BloodRequest;
use App\Models\Patients;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class BloodRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $message = BloodRequest::all();
        return view('admin.pages.message.bloodRequests',compact('message'));
    }


        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createPost($id)
    {
        $post=BloodRequest::find($id);
        $post->is_posted=true;
        $res=$post->save();

        if($res)
        {             
            return redirect()->back()->with('success','Request Posted Successfully');
            

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
            'contact_no'=> 'required|numeric|min:11',
            'desises'=> 'required',
            'blood'=> 'required',
            'no_of_bag'=> 'required|numeric',
            'donation_date'=> 'required',
            'donation_time'=> 'required',
            'managed'=> 'required|numeric',
            'message'=> 'required',
            'relationship'=> 'required',
            'location'=> 'required',


        ]);

        $bloodRequest =new BloodRequest();
        $bloodRequest->blood=request('blood');
        $bloodRequest->no_of_bag=request('no_of_bag');
        $bloodRequest->donation_date=request('donation_date');
        $bloodRequest->donation_time=request('donation_time');
        $bloodRequest->managed=request('managed');
        $bloodRequest->location=request('location');
        $bloodRequest->contact_no=request('contact_no');
        $bloodRequest->relationship=request('relationship');
        $bloodRequest->message=request('message');
        $res=$bloodRequest->save();



        if($res=='true')
        {                
            return redirect()->back()->with('success','Request Send Successfully ! You are Registered as Patient . Please Login for more information');
            

        }else{

            return redirect()->back()->with('danger','Something went wrong');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BloodRequest  $bloodRequest
     * @return \Illuminate\Http\Response
     */
    public function show(BloodRequest $bloodRequest)
    {
        $bloodRequest =BloodRequest::all();

        return view('admin.pages.message.postedRequests',compact('bloodRequest'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BloodRequest  $bloodRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(BloodRequest $bloodRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BloodRequest  $bloodRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BloodRequest $bloodRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BloodRequest  $bloodRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bloodRequest=BloodRequest::find($id);      
        if($bloodRequest)
            {  
                $bloodRequest->delete();             
                return redirect()->back()->with('success','BloodRequest Deleted');
                

            }else{

                return redirect()->back()->with('danger','Something went wrong');

            }
    }
}
