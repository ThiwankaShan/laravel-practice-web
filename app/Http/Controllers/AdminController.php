<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Hash;
use DB;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function login(){

        return view("users.admin");
    }
    public function AdminCheck(Request $request){
       
        // $user_data=array(
        //    'email' => $request->get('mail'),
        //    'password' => $request->get('pwd')

        // );

        $email=$request->mail;
        $pwd= $request->get('pwd');  
       
        $admin=DB::select('SELECT * FROM users WHERE email=? ',['admin@gmail.com']);
        foreach($admin as $ad){
            $password=$ad->password;
            $Email=$ad->email;
        } 
       
      //  return $password;
      if($email==$Email && Hash::check($pwd,$password)){
          $user=User::all();
          return view('users.userlist',compact('user'));
      }else{
          return back()->with('massg','You Are Not a Admin!');
      }
    }
       
        public function UserList(){
            $user=User::all();
            return view('users.userlist',compact('user'));

        }
    
       public function adminview($id){
           $user=User::findOrFail($id);
         return view('users.adminview',compact('user'));

       }

       public function adminEdit($id){
        $user=User::findOrFail($id);
        return view('users.adminedit',compact('user'));
       }
     
       public function AdminUpdate(Request $request){
           $user=User::findOrFail($request->id); 

           $this->validate($request,[
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'uname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

           ]);

           $user->fname=$request->fname;
           $user->lname=$request->lname;
           $user->uname=$request->uname;
           $user->email=$request->email;
           //$user->password=$request->password;
           $user->password=Hash::make($request->password_confirmation);

           $user->save();

           return redirect('/admin/list')->with('msg','Profile Upadted!');


       } 

       public function destroy($id){
            $user=User::findOrFail($id);
          $user->delete();

          return redirect('/admin/list')->with('msg','Profile Deleted!');
           
       }

}
