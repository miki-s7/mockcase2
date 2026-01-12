<?php

namespace App\Http\Controllers;
use App\Models\Attendance;
use Carbon\Carbon;

use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    //出勤打刻
    public function clockIn()
    {
        Attendance::create([
            'user_id'  => auth()->id(),
            'date'     => Carbon::today(),
            'clock_in' => Carbon::now()->format('H:i:s'),
            'note' => '',
        ]);

        return redirect('/attendance/list');
    }

    //退勤打刻
    public function clockOut()
    {
        Attendance::create([
            'user_id'  => auth()->id(),
            'date'     => Carbon::today(),
            'clock_in' => Carbon::now()->format('H:i:s'),
            'clock_out' => Carbon::now()->format('H:i:s'),
            'note' => '',
        ]);

        return redirect('/attendance/list');
    }

    public function userList(){
        return view('attendance.list');
    }

}
