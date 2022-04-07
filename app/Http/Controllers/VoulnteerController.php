<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Volunteer;
class VoulnteerController extends Controller
{
    //
    
    public function index()
    {   
        //  echo "<script> alert('inside index method of volunteer') </script>";
        return view('volunteer');
    }

    public function store(Request $request)
    {   
        // echo "<script> alert('inside store method of volunteer') </script>";
        // print_r($request->all());
         $request->validate([
           
            'name'=> 'required',
             'email'=>'required|email',
             'reason'=>'required|'

         ]);

        $volunteer = new Volunteer;

        $volunteer->   name       =$request['name'];
        $volunteer->    email      =$request['email'];
        $volunteer->    reason      =$request['reason'];
           
           $volunteer->save();
           
           echo "<script> alert('Thankyou for volunteering') </script>";
            return view('volunteer');
        //    return redirect('/donate/view');
    }

    // public function view()
    // {      
    //       $donor = Donate::all();
    //     //   echo "<pre>";
    //     //   print_r($donor->toArray());
    //     //   echo "</pre>";
    //     //   die;
    //         $data=compact('donor');
    //        return view('ViewDonors')->with($data);
    // }
}
