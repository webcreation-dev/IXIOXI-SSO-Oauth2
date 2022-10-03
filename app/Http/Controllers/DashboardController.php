<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\ManageUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function userList() {

        return view('user_list', [
            'users' => User::where('name_society', Auth::user()->name_society)->get(),
            'pendings' => ManageUser::where('name_society', Auth::user()->name_society)
                                    ->where('statut', 'En cours')                        
                                    ->get(),
        ]);
    }

    public function viewEditUser() {

        return view('user_profile', [
            'users' => User::where('name_society', Auth::user()->name_society)
                            ->where('database', NULL) 
                            ->get(),
        ]);
    }

    public function editUser(Request $request) {

        $currentUser = User::where("id", Auth::user()->id)->first();
        $currentUser->update([
            'name' => $request->name,
            'addresse' => $request->addresse != null ? $request->addresse : null,
            'telephone' => $request->telephone != null ? $request->telephone : null,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->back()->with('modifyProfil','Votre profil a été édité avec succès !');
    }

    public function viewUpdateAccess($id) {
        
        return view('update_access', ['id' => $id]);
    }
    public function viewUpdateAccessBefore($email) {
        
        return view('update_access', ['email' => $email]);
    }
}
