<?php

namespace App\Http\Controllers;

use App\Models\Donor;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.pages.search');
    }

    public function bloodSearch(Request $request)
    {

        $request->validate([
            'blood' => 'required'
        ]);

        $bloodSearch=Donor::join('users','users.id','=','donors.user_id')
        ->join('donor_infos','donors.id','=','donor_infos.donor_id')
        ->select('users.*','donors.*','donor_infos.*')
        ->where('donors.blood_group','like',request('blood'))
        ->get();

        return view('site.pages.search.bloodSearchResult',compact('bloodSearch'));
    }

    public function addressSearch(Request $request)
    {
        $request->validate([
            'searchAddress' => 'required'
        ]);

        $req=request('searchAddress');

        $searchAddress=Donor::join('users','users.id','=','donors.user_id')
                            ->join('donor_infos','donors.id','=','donor_infos.donor_id')
                            ->select('users.*','donor_infos.*','donors.*')
                            ->where('donor_infos.address','like',"%{$req}%")
                            ->get();

        
        return view('site.pages.search.addressSearchResult',compact(['searchAddress']));
    }
 
}

