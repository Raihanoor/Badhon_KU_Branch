<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.pages.contact');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $message = Contact::all();

        return view('admin.pages.message.contact',compact('message'));

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
            'email'=> 'required|email',
            'contact'=> 'required|numeric|min:11',
            'message'=> 'required',

        ]);

       $contact = new Contact();
       
       $contact->name=request('name');
       $contact->contact=request('contact');
       $contact->email=request('email');
       $contact->messege=request('message');
       $res=$contact->save();

       if($res=='true')
       {                
           return redirect('/site/contact')->with('success','Messege Successfully  Sent!');
           

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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Contact::find($id);      
        
        if($data)
            {  
                $data->delete();             
                return redirect()->back()->with('success','Message Deleted');
                

            }else{

                return redirect()->back()->with('danger','Something went wrong');

            }
    }
}
