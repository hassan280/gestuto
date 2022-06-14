<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calendrier;
class ScheduleController extends Controller
{
    public function index(){
        $calendrier = auth()->user()->calendrier()->get();
       
        return view('schedule',['calendrier' => $calendrier]);
        
    }
    public function destroy($id){
        $calendrier = Calendrier::findOrFail($id);
        $calendrier -> delete();
  
        return redirect('schedule')->with('status','schedule record is deleted');
        
    }
    // protected function validator(array $data){
    //     return Validator::make($data,[
    //         'date' => 'required',
    //         'hours' => 'required',
    //         'ampm' => 'required',
    //     ]);
    // }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'date' => ['required', 'string'],
            'hours' => ['required', 'string'],
            'ampm' => ['required', 'string'],
        ]);
        
        $calendrier = new Calendrier;
        $calendrier->date = $request->date;
        $calendrier->hours =strtoupper($request->hours.':00 '.$request->ampm);
        $calendrier->user_id = $request->user()->id;
        $calendrier->save();
        
        return redirect('schedule');
    }
    public function create(){
        return view('add-schedule');
    }
}
