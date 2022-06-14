<?php

namespace App\Http\Traits;

use MacsiDigital\Zoom\Facades\Zoom;
use Carbon\Carbon;


trait ZoomTrait
{
    public function createMeeting($request,$start){

        $user = Zoom::user()->first();

        $meetingData = [
            'topic' => $request->name,
            'start_time' =>  new Carbon($start),
            // 'timezone' => config('zoom.timezone')
          'timezone' => 'africa/casablanca'
        ];
        $meeting = Zoom::meeting()->make($meetingData);
        // dd($meeting);

        $meeting->settings()->make([
            'join_before_host' => true,
            'host_video' => false,
            'participant_video' => false,
            'mute_upon_entry' => true,
            'waiting_room' => true,
            'approval_type' => config('zoom.approval_type'),
            'audio' => config('zoom.audio'),
            'auto_recording' => config('zoom.auto_recording')
        ]);

        return  $user->meetings()->save($meeting);

    }
}