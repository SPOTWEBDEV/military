<?php

namespace App\Http\Controllers;

use App\Models\Leave;
use Illuminate\Http\Request;

class LeaveController extends Controller
{
    
    public function store()
    {
        $validated = request()->validate([
            "firstname" => "required|min:3",
            "lastname" => "required|min:3",
            "email" => "required|email",
            "number" => "required|numeric",
            "gender" => "required",
            "maritalStatus" => "required",
            "relationship" => "required",
            "country" => "required",
            "language" => "required",
            "soldierName" => "required",
            "soldierId" => "required",
            "soldierEmail" => "required|email",
            "currentState" => "required",
            "soldierCountry" => "required",
            "duration" => "required",
        ]);


        
        try {

            $create = Leave::create([
                "firstname" => $validated["firstname"],
                "lastname" => $validated["lastname"],
                "email" => $validated["email"],
                "number" => $validated["number"],
                "gender" => $validated["gender"],
                "maritalStatus" => $validated["maritalStatus"],
                "relationship" => $validated["relationship"],
                "country" => $validated["country"],
                "language" => $validated["language"],
                "alternateLanguage" => $validated["language"],
                "soldierName" => $validated["soldierName"],
                "soldierId" => $validated["soldierId"],
                "soldierEmail" => $validated["soldierEmail"],
                "currentState" => $validated["currentState"],
                "soldierCountry" => $validated["soldierCountry"],
                "duration" => $validated["duration"],
            ]);

            if ($create) {
                return redirect()->back()->with('success', "Leave Applicatoon Requested Successfully!");
            } else {
                return redirect()->back()->with('error', "Failed to request for leave. Try again later!");

            }
        } catch (\Throwable $th) {
            // dd($th);
            return redirect()->back()->with('error', "Failed to request for leave. Try again later!");
        }


    }
    public function update($id)
    {
        $validated = request()->validate([
            "firstname" => "required|min:3",
            "lastname" => "required|min:3",
            "email" => "required|email",
            "number" => "required|numeric",
            "gender" => "required",
            "maritalStatus" => "required",
            "relationship" => "required",
            "country" => "required",
            "language" => "required",
            "soldierName" => "required",
            "soldierId" => "required",
            "soldierEmail" => "required|email",
            "currentState" => "required",
            "soldierCountry" => "required",
            "duration" => "required",
        ]);
        try {

            $update = Leave::where('id', $id)->update([
                "firstname" => $validated["firstname"],
                "lastname" => $validated["lastname"],
                "email" => $validated["email"],
                "number" => $validated["number"],
                "gender" => $validated["gender"],
                "maritalStatus" => $validated["maritalStatus"],
                "relationship" => $validated["relationship"],
                "country" => $validated["country"],
                "language" => $validated["language"],
                "soldierName" => $validated["soldierName"],
                "soldierId" => $validated["soldierId"],
                "soldierEmail" => $validated["soldierEmail"],
                "currentState" => $validated["currentState"],
                "soldierCountry" => $validated["soldierCountry"],
                "duration" => $validated["duration"],
            ]);

            if ($update) {
                return redirect()->back()->with('success', "Leave Applicatoon Updated Successfully!");
            } else {
                return redirect()->back()->with('error', "Failed to update for leave. Try again later!");

            }
        } catch (\Throwable $th) {
            // dd($th);
            return redirect()->back()->with('error', "Failed to update for leave. Try again later!");

        }


    }

    public function delete($id){
        $delete = Leave::where('id',$id)->delete();
        if ($delete) {
            return redirect()->back()->with('success', "Leave Applicatoon Deleted Successfully!");
        } else {
            return redirect()->back()->with('error', "Failed to delete for leave. Try again later!");

        }
    }
}
