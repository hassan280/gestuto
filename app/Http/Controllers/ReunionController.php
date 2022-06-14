<?php

namespace App\Http\Controllers;
use \App\Models\Reunion;
use Illuminate\Http\Request;
use DB;
use Auth;

class ReunionController extends Controller
{
    public function index()
    {
        $usertype =DB::table('users')->where('id', Auth::user()->id)->pluck('type');
        // dd($usertype);
        if($usertype[0]==2){
            $reunions =auth()->user()->reunions()->get();
        } else {
            $reunions =DB::table('reunions')->where('teacher_id', Auth::user()->id)->get();
        }
       
      
        return view('meetings',['reunions' => $reunions]);
       
    }
    public function destroy($id){
        $subject = Reunion::findOrFail($id);
        $subject -> delete();
  
        return redirect('meetings')->with('status','meeting record is deleted');
        
    }
}
