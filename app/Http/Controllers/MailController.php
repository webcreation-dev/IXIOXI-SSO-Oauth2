<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Signup;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\ManageUser;
use App\Models\UserRole;

class MailController extends Controller
{
    public function getView() {
        return view('subscribe');
    }

    public function updateAccess(Request $request) {

        if($request->id != Auth::user()->id) {


            if($request->email != Auth::user()->email){
                $updateUser = User::where("id", $request->id)->first();
                $checkEmail = ManageUser::where("email", $request->email)->first();

                if ($updateUser != null) {
                    $roleUser = UserRole::where("user_id", $updateUser->id)->skip(0)->take(1)->first();
                    $roleUser->role_id = $request->crm ? '1' : '0';
                    $roleUser->save();
                    $roleUser = UserRole::where("user_id", $updateUser->id)->skip(1)->take(1)->first();
                    $roleUser->role_id = $request->cachet_express ? '2' : '0';
                    $roleUser->save();
                }else {
                    

                    $checkEmail->update([
                        'email' => $request->email,
                        'name_society' => Auth::user()->name_society,
                        'crm' => $request->crm ? '1' : '0',
                        'cachet_express' => $request->cachet_express ? '2' : '0',
                    ]);
                }
            }

            return redirect(route('user.list'))->with('updateAccess','Les accès de cet utilisateur ont été mis à jour !');
        }else {

            return redirect(route('user.list'))->with('notModifyAccess',"Les accès de l'administrateur ne peut etre mis à jour !");
        }

    }

    public function sendMail(Request $request)
    {
        $user = User::where("email", $request->email)->first();

        if( $user === null ){
            $checkEmail = ManageUser::where("email", $request->email)->first();
            
            if( $checkEmail === null ) {
                $url = URL::signedRoute('subscribe.user', [
                    'email' => $request->email,
                ]);
                Mail::to($request->email)->send(new SignUp($url));
                ManageUser::create([
                    'email' => $request->email,
                    'name_society' => Auth::user()->name_society,
                    'crm' => $request->crm ? '1' : '0',
                    'cachet_express' => $request->cachet_express ? '2' : '0',
                ]);

            }
            return redirect(route('user.list'))->with('sendLinkRegister',"Lien d'inscription envoyé avec succès !");
        }else {
            return redirect(route('user.list'))->with('notSendLinkRegister',"Ce mail est déjà inscrit sur la plateforme");
        }    
    }

    public function registerUser(Request $request) {

        $newUser = ManageUser::where("email", $request->email)->first();
        $checkUser = User::where("email", $newUser->email)->first();

        if(($checkUser === null)) {
            User::create([
                'name' => $request->name, 
                'email' => $newUser->email,
                'name_society' => $newUser->name_society,
                'profil' => 'entreprise',
                'database' => str_replace(' ', '_', $newUser->name_society), 
                'password' => Hash::make($request->password),
            ]);


            $newUserConnect = User::where("email", $newUser->email)->first();

            UserRole::create([
                'role_id' => $newUser->crm, 
                'user_id' => $newUserConnect->id,
            ]);
            UserRole::create([
                'role_id' => $newUser->cachet_express, 
                'user_id' => $newUserConnect->id,
            ]);
            $user = $newUserConnect;

            $newUser->update([
                'statut' => 'Active',
            ]);

        }else {
            $user = $checkUser;
        }

        // Auth::login($user);
        
        return redirect("/login");
    }
}
