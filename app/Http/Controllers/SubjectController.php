<?php

namespace App\Http\Controllers;
use \App\Models\Subject;
use Illuminate\Http\Request;
use MacsiDigital\Zoom\Facades\Zoom;
use App\Http\Traits\ZoomTrait;
use App\Models\Reunion;
use Carbon\Carbon;
use DB;
use Illuminate\Validation\Rule; 

class SubjectController extends Controller
{
    use ZoomTrait;
    public function index()
    {
        $subjects = auth()->user()->subject()->get();
       
        return view('subjects',['subjects' => $subjects]);
    }
    public function destroy($id){
        $subject = Subject::findOrFail($id);
        $subject -> delete();
  
        return redirect('subjects')->with('status','subject record is deleted');
        
    }
    public function store(Request $request)

    {
        // dd($request);
        $sj = DB::table('subjects')->where('name',$request->name)->pluck('user_id')->toArray();;
        // dd($sj);
        if(in_array(auth()->user()->id, $sj)){
            $validated = $request->validate([
                'name' => ['required','string','unique:subjects']
                
            ]);
        }
       
        $subject = new Subject;
        $subject->name = $request->name;
        $subject->user_id = $request->user()->id;
        $subject->save();
        
        // dd($meeting);
        // $topic = $meeting->topic;
        // $subjects = DB::table('subjects')->where('user_id',auth()->user()->id)->pluck('name');
        $dates = DB::table('calendriers')->where('user_id',auth()->user()->id)->pluck('date');
        $hours = DB::table('calendriers')->where('user_id',auth()->user()->id)->pluck('hours');
        //  dd($hours[0]);
        // $subjects=$subject['name'];
         $query1 = DB::table('calendriers')->whereIn('date', $dates)->whereIn('hours', $hours)->pluck('user_id');
        //  dd($query1);
        $query = DB::table('subjects')->where('name', $request->name)->pluck('user_id');
        $query2 = DB::table('users')->whereIn('id', $query)->whereIn('id', $query1)->where('type', '<>', auth()->user()->type)->pluck('id');
        // dd($query2);
        // dd($query2);
        if(count($query2) <> 0 and count($dates) <> 0 and count( $hours) <> 0){
        $id;
       
    //    dd($query2);
        foreach ($query2 as  $value){
            if($value<>auth()->user()->id){
                $id=$value;
                
            }
        }
        $dates1 = DB::table('calendriers')->where('user_id',$id)->whereIn('date', $dates)->whereIn('hours', $hours)->pluck('date');
        $hours1 = DB::table('calendriers')->where('user_id',$id)->whereIn('date', $dates)->whereIn('hours', $hours)->pluck('hours');
        $hour=substr($hours1[0], 0, -3);
        $AP=substr($hours1[0],-2);
        $time = strtotime($dates1[0]);
        $newformat = date('Y-m-d',$time);
       if($AP=="PM"){
        $hour=strval(intval( substr($hours1[0],0,2))+12);
        
       }else{
        $hour= substr($hours1[0],0,2);
        if (str_contains($hour, ':')) { 
            $hour= substr($hour,0,1);
        }
       }
            $meeting = $this->createMeeting($request,$newformat.' '.$hour.':00:00');
            DB::table('calendriers')->whereIn('user_id', array(auth()->user()->id,$id))->whereIn('date', array($dates1[0]))->whereIn('hours', array($hours1[0]))->delete();
            DB::table('subjects')->whereIn('user_id', array(auth()->user()->id,$id))->where('name',$request->name)->delete();
            if(auth()->user()->type==2){
                $reunion = new Reunion();
            $reunion->user_id = auth()->user()->id;
            $reunion->teacher_id = $id;
            $reunion->metting_id =  $meeting->id;
            $reunion->topic =  $meeting->topic; //new Carbon('2022-05-24 10:00:00');
            $reunion->start_at =   $newformat.' '.$hours1[0];
            $reunion->join_url =  $meeting->join_url;
            $reunion->save();
            }else{
                $reunion = new Reunion();
                $reunion->user_id = $id;
                $reunion->teacher_id = auth()->user()->id;
                $reunion->metting_id =  $meeting->id;
                $reunion->topic =  $meeting->topic;
                $reunion->start_at =    $newformat.' '.$hours1[0];
                $reunion->join_url =  $meeting->join_url;
                $reunion->save();
            }
            


        }
        
        
        // Reunion::create([
            
            
        //     'user_id' => auth()->user()->id,
        //     'teacher_id' => 2,
        //     'metting_id' => $meeting->id,
        //     'topic' => $meeting->topic,
        //     'start_at' => new Carbon('2022-05-24 10:00:00'),
        //     'join_url' => $meeting->join_url,
        // ]);
        // toastr()->success(trans('messages.success'));
        return redirect('subjects')->with('status', 'subject Has Been inserted');
    }
    public function create(){
        return view('add-subject');
    }
      
}
