<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use Validator;
use App\voterlists;
use App\candidatelists;
use App\newelections;
use App\olderelections;
use App\countings;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ApiController extends Controller
{
    public function insertvoterlist(){
    	$voter=new voterlists();

    	$voter->name = request('name');
    	$voter->email = request('email');
    	$voter->password = request('password');
    	$voter->dob = request('dob');
    	$voter->gender = request('gender');
    	$voter->number = request('number');
    	$voter->pic = request('pic');
    	$voter->save();
    	return redirect('/default.admin');
    }
    public function insertcandidatelist(){
    	$candidate=new candidatelists();

    	$candidate->name = request('name');
    	$candidate->email = request('email');
    	$candidate->password = request('password');
    	$candidate->dob = request('dob');
    	$candidate->gender = request('gender');
    	$candidate->number = request('number');
    	$candidate->pic = request('pic');
    	$candidate->biodata = request('bio');
    	$candidate->save();
    	return redirect('/default.admin');
    }

    public function insertelection(){
    	$candidate=new countings();

    	$candidate->election_name = request('name');
    	$candidate->can1 = request('name1');
            $candidate->vote1 = 0;
        $candidate->email1 = request('email1');
        $candidate->bio1 = request('bio1');
        $candidate->pic1 = request('pic1');
        $candidate->can2 = request('name2');
        $candidate->vote2 = 0;
        $candidate->email2 = request('email2');
        $candidate->bio2 = request('bio2');
        $candidate->pic2 = request('pic2');
        $candidate->can3 = request('name3');
        $candidate->vote3 = 0;
        $candidate->email3 = request('email3');
        $candidate->bio3 = request('bio3');
         $candidate->pic3 = request('pic3');
          
    
    	$candidate->save();
    	return redirect('/default.admin');
    }

    public function deletevoter(Request $request){
    	$name = $request->input('name');
    	$email = $request->input('email');
    	$a=voterlists::where('email',$email)->delete();
    	return redirect('/default.admin');
    }

    public function deletecandidate(Request $request){
    	$name = $request->input('name');
    	$email = $request->input('email');
    	$a=candidatelists::where('email',$email)->delete();
    	return redirect('/default.admin');
    }
    public function old(){
    	$olderelection =olderelections::all();
    	$newelection =newelections::all();
    	
    	return view('/admin',compact('olderelection','newelection'));
    }

    public function loginvoter(Request $request)
    {   
        $email = $request->post('email');
        $password = $request->post('password');

        $checkname = voterlists::where('email',$email)->value('name');
        $checklogin = voterlists::where(['email'=>$email,'password'=>$password])->get();
       
        $request->session()->flash('name',$checkname);
        
        if(count($checklogin)>0)
        {   
            return view('index')->with('names',$request->session()->get('name'));
        }
        else
        {
            return redirect('/login');
        }
    }

    public function logincandidate(Request $request)
    {   
        $email = $request->post('email');
        $password = $request->post('password');

        $checkname = candidatelists::where('email',$email)->value('name');
        $checklogin = candidatelists::where(['email'=>$email,'password'=>$password])->get();
         
        $request->session()->flash('name',$checkname);
        
        if(count($checklogin)>0)
        {
            return view('cdashboard')->with('names',$request->session()->get('name'));
        }
        else
        {
            return redirect('/login');
        }
    }

    // public function validatevoter(Request $request)
    // {
        

    //     $validator = Validator::make($request->all(), [
    //         'email' => 'required|string|max:255',
    //         'password' => 'required',
    //     ]);
    //     if($validator ->fails())
    //     {
    //         return redirect('/login')
    //             ->withErrors($validator)
    //             ->withInput();
    //     }
    //     else
    //     {
    //         return redirect('/checkvoter');
    //     }
    // }

  
}
