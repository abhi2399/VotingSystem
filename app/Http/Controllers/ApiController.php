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
use Illuminate\Database\Eloquent\Builder;
use App\Http\Middleware\checklogin;

use Mail;

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
    	$newelection =countings::all();

    	
    	return view('/admin',compact('olderelection','newelection'));
    }
     

     public function ele()
     {
        $c = countings::all()->toArray();
        // dd($c[0]['election_name']);
         
        
        return view('/election',compact('c'));

     }

    public function loginvoter(Request $request)
    {   
        $email = $request->post('email');
        $password = $request->post('password');

        
        $checklogin = voterlists::where(['email'=>$email,'password'=>$password])->get();
       
        
        
        if(count($checklogin)>0)
        {    
             // dd($checklogin[0]['pic']);
            $request->session()->put('name',$checklogin);
            return view('index', ['name' => $request->session()->get('name')]);
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

       
        $checklogin = candidatelists::where(['email'=>$email,'password'=>$password])->get();
         
       
        
        if(count($checklogin)>0)
        {
             $request->session()->put('name',$checklogin);
            return view('cdashboard')->with('name',$request->session()->get('name'));
        }
        else
        {
            return redirect('/login');
        }
    }

    public function incrementvote($id,$vote)
    {
        $a=countings::find($id);
        if($vote == 'vote1')
        {
            DB::update('update countings set vote1 =? where id =?',[$a[$vote]+1,$id]);
            $email=session('name')[0]['email'];
            $name=$a->can1;
            $data = array('name'=>session('name')[0]['name'],'mail'=>$email);
      Mail::send('mail', $data, function($message) use ($email){
         $message->to($email, 'Tutorials Point')->subject
            ('Casted Vote');
         $message->from('idadhichabhi@gmail.com','VotingSystem');
      });
     
        }

        else if($vote == 'vote2')
        {
            DB::update('update countings set vote2 =? where id =?',[$a[$vote]+1,$id]);
            $email=session('name')[0]['email'];

            $data = array('name'=>session('name')[0]['name'],'mail'=>$email);
      Mail::send('mail', $data, function($message) use ($email){
         $message->to($email, 'Tutorials Point')->subject
            ('Casted Vote');
         $message->from('idadhichabhi@gmail.com','VotingSystem');
      });
      
        }
        else
        {
            DB::update('update countings set vote3 =? where id =?',[$a[$vote]+1,$id]);
            $email=session('name')[0]['email'];

            $data = array('name'=>session('name')[0]['name'],'mail'=>$email);
      Mail::send('mail', $data, function($message) use ($email){
         $message->to($email, 'Tutorials Point')->subject
            ('Casted Vote');
         $message->from('idadhichabhi@gmail.com','VotingSystem');
      });
     
        }

        return redirect('index');

       
    }

    public function close($id)
    {
        $a=countings::find($id);
        $v1=$a->vote1;
          $v2=$a->vote2;
            $v3=$a->vote3;
            $win="";
            $na="";
            $bio="";
            if($v1>$v2){
                if($v1>$v3){
                        $win=$v1;
                        $na=$a->can1;
                        $bio=$a->bio1;
                }
                else{
                    
                        $win=$v3;
                        $na=$a->can3;
                        $bio=$a->bio3;
                }

            }
            else{
                 if($v2>$v3){
                        $win=$v2;
                        $na=$a->can2;
                        $bio=$a->bio2;
                }
                else{
                   
                        $win=$v3;
                        $na=$a->can3;
                        $bio=$a->bio3;
                
                }
            }
            $voter=new olderelections();

        $voter->id = $id;
        $voter->name = $a->election_name;
        $voter->winnername=$na;
        $voter->votes = $win;
        $voter->bio= $bio;
       
        $voter->save();
          countings::where('id',$id)->delete();
          return redirect('/default.admin');
    }
  
}
