<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=School::all();
        return view('admin.pages.school.school',compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.school.createSchool');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $school=new School();

        $school->school_name=request('school_name');
        $school->thana=request('thana');
        $school->district=request('district');
        $res=$school->save();


        if($res=='true')
        {                
            return redirect('/all-schools')->with('success','School Created Successfully !');
            

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

        $data=School::where('id','=',$id)
        ->select('*')
        ->get();


        return view('admin.pages.school.editSchool',compact(['data']));
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

            $school=School::find($id);

            $school->school_name=request('school_name');
            $school->thana=request('thana');
            $school->district=request('district');
            $res=$school->save();


            if($res=='true')
            {                
                return redirect('/adm/all-schools')->with('success','School Edited Successfully !');
                

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
        $data=School::find($id);      
        
        if($data)
            {  
                $data->delete();             
                return redirect('/all-schools')->with('success','School Deleted');
                

            }else{

                return redirect()->back()->with('danger','Something went wrong');

            }
    }
}
