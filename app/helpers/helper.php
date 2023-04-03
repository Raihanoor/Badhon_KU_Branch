<?php

use Illuminate\Support\Facades\Auth;

function isAdmin(){
      $user=Auth::user();

      if($user->role=='admin'){
            return true;
      }else{
            return false;
      }
}


function bloodGroups(){
      
      $bloodGroups = array( "A+", "A-", "B+","B-","O+","O-","AB+","AB-");

      return $bloodGroups;
}