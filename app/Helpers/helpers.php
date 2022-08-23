<?php
use Illuminate\Support\Str;
use App\Models\UserRole;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


function hasProfile($id) {

    $user = User::where("id", $id)->first();
    if($user->database != null) {
        $profile = 'Membre';
        return $profile;
    }else {
        $profile = 'Administrateur';
        return $profile;
    }      
}

function hasCrm($id) {

    if(Auth::user()->database != null) {
        $userRole = UserRole::where("user_id", $id)->skip(0)->take(1)->first();
        if( $userRole->role_id == 1 ) {
            return true;
        }else {
            return false;
        }
    }else {
        return true;
    }      
}

function hasCachet($id) {

    if(Auth::user()->database != null) {
        $userRole = UserRole::where("user_id", $id)->skip(1)->take(1)->first();


        if( $userRole->role_id == 2 ) {
            return true;
        }else {
            return false;
        }
    }else {
        return true;
    }   
}


