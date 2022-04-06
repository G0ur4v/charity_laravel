<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donate;
class DonateController extends Controller
{
    //

    public function index()
    {
        return view('donate');
    }

    public function store(Request $request)
    {   

         $request->validate([
           
            'name'=> 'required',
             'email'=>'required|email',
             'amount'=>'required|'

         ]);

        $donor = new Donate;

        $donor->   name       =$request['name'];
        $donor->    email      =$request['email'];
           $donor->    amount      =$request['amount'];
           
           $donor->save();
           
           echo "<script> alert('Thankyou for help') </script>";
           return redirect('/donate/view');
    }

    public function view()
    {      
          $donor = Donate::all();
        //   echo "<pre>";
        //   print_r($donor->toArray());
        //   echo "</pre>";
        //   die;
            $data=compact('donor');
           return view('ViewDonors')->with($data);
    }
}
