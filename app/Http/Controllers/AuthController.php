<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Donate;
use Hash;
use Session;
class AuthController extends Controller
{
    //

    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
              return view('auth.register');  
    } 

    public function registerAdmin(Request $request)
    {
        $request->validate([
           
            'ename'=> 'required',
            'eid'=> 'required|unique:admins',
             'email'=>'required|email',
             'password'=>'required|min:4|max:12'
         ]);

        $admin = new Admin;

        $admin->   ename       =$request['ename'];
        $admin->    eid      =$request['eid'];
        $admin->    email      =$request['email'];
        $admin->    password      =$request['password'];
        // $admin->    password      =Hash::make($request['password']);
           
          $res= $admin->save();

          if($res)
          {
              return back()->with('success','You have registered Successfully');
          }
          else
          {
              return back()->with('fail','Something went wrong');
          }
           
           echo "<script> alert('Thankyou for volunteering') </script>";
           // return view('volunteer');
        //    return redirect('/donate/view');
        
    }

    public function loginAdmin(Request $request)
    {
         
        echo "login page";
        $request->validate([
            'eid'=> 'required|',
             'password'=>'required|'
         ]);

        $admin =Admin::where('eid','=',$request->eid)->first();

        if($admin)
        {   if(Admin::where('password','=',$request->password)->first())
            {
                    $request->session()->put('loginID',$admin->id);
                    // $donor = Donate::all();
                    // $data=compact('donor');
                    // return view('dashboard')->with($data);
                   // return redirect('/lo/view');
                   return $this->dashboard();
            }else
            {
                return back()->with('fail','Password does not match');
            }
            
        }
        else
        {
            return back()->with('fail','Eid not registered');
        }

      
    }

    
   
    public function dashboard()
    {  

        if(Session::has('loginID'))
        {
            $donor = Donate::all();
            $data=compact('donor');
           return view('dashboard')->with($data);
        }
        else
        {
            echo "You are logged out";
        }
       
    }

    public function logout()
    {
        if(Session::has('loginID'))
        {
            Session::pull('loginID');
            return redirect('login');
        }
    }
    
}