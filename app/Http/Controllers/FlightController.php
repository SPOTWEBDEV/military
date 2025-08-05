<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    public function create()
    {
        $validated = request()->validate([
            "name" => "required|min:3",
            "number" => "required|min:3",
            "email" => "required|email",
            "soldierName" => "required",
            "soldierId" => "required",
            "soldierEmail" => "required|email",
            "currentState" => "required",
            "country" => "required",
            "transitType" => "required",
            "state" => "required",
            "destinationCountry" => "required",
            "endOfDeparture" => "required",
            "flightClass" => "required",
            "numberOfAdults" => "required",
            "numberOfChildren" => "required",
        ]);
        try {

            $create = Flight::create([
                "name" => $validated["name"],
                "number" => $validated["number"],
                "email" => $validated["email"],
                "soldierName" => $validated["soldierName"],
                "soldierId" => $validated["soldierId"],
                "soldierEmail" => $validated["soldierEmail"],
                "currentState" => $validated["currentState"],
                "country" => $validated["country"],
                "transitType" => $validated["transitType"],
                "state" => $validated["state"],
                "destinationCountry" => $validated["destinationCountry"],
                "endOfDeparture" => $validated["endOfDeparture"],
                "flightClass" => $validated["flightClass"],
                "numberOfAdults" => $validated["numberOfAdults"],
                "numberOfChildren" => $validated["numberOfChildren"],
            ]);

            if ($create) {
                return redirect()->back()->with('success', "Flight Booking Requested Successfully!");
            } else {
                return redirect()->back()->with('error', "Failed to book Flight. Try again later!");

            }
        } catch (\Throwable $th) {
            dd($th);
            return redirect()->back()->with('error', "Failed to book Flight. Try again later!");

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

            $update = Flight::where('id', $id)->update([
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
                return redirect()->back()->with('success', "Flight Applicatoon Updated Successfully!");
            } else {
                return redirect()->back()->with('error', "Failed to update for Flight. Try again later!");

            }
        } catch (\Throwable $th) {
            // dd($th);
            return redirect()->back()->with('error', "Failed to update for Flight. Try again later!");

        }


    }

    public function delete($id)
    {
        $delete = Flight::where('id', $id)->delete();
        if ($delete) {
            return redirect()->back()->with('success', "Flight Applicatoon Deleted Successfully!");
        } else {
            return redirect()->back()->with('error', "Failed to delete. Try again later!");

        }
    }
}
