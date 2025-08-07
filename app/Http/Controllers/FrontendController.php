<?php

namespace App\Http\Controllers;

use App\Models\Soldier;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
    public function carepack()
    {
        return view('frontend.carepack');
    }
    public function applyLeave()
    {
        return view('frontend.applyLeave');
    }

    public function leaveApplication()
    {
        return view('frontend.leaveApplication');
    }

    public function flight()
    {
        return view('frontend.flight');
    }

    public function track()
    {
        return view('frontend.trackMid');
    }
    public function flightApplication()
    {
        return view('frontend.applyFlight');
    }
    public function trackId()
    {
        $validate = request()->validate([
            'trackingId' => 'required',
        ]);

        $soldierInfo = Soldier::where('soldier_id', $validate['trackingId'])->first();
        if ($soldierInfo) {
            return view('frontend.profile', ['soldier' => $soldierInfo]);
        } else {
            return redirect()->route('frontend.track')->with('error', 'No soldier found with this tracking ID');
        }
        // return view('frontend.applyFlight');
    }
    
}
