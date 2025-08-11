<?php

namespace App\Http\Controllers;

use App\Mail\MainMail;
use App\Models\Flight;
use App\Models\Leave;
use App\Models\Soldier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function generateSoldierId()
    {
        do {

            $uniqueCode = str_pad(random_int(0, 999999999999), 12, '0', STR_PAD_LEFT);
        } while (Soldier::where('soldier_id', $uniqueCode)->exists());

        return $uniqueCode;
    }

    public function sendemail()
    {
        request()->validate([
            'email' => 'required|email',
        ]);

        $emailData = [
            'email' => request()->email,
            'subject' => request()->subject,
            'message' => request()->message,
        ];

        // Mail::to('joeloduburu@gmail.com')->send(new ContactFormMail($emailData));
        Mail::to($emailData['email'])
            // ->bcc('support@orextrd.com')
            ->send(new MainMail($emailData));

        return back()->with('success', 'Message Has Been Sent Successfully!');
    }

    public function viewemail()
    {
        return view('admin.view-email');
    }
    public function dashboard()
    {
        return view('admin.dashboard', [
            "leaves" => Leave::latest()->paginate(10),
            "flights" => Flight::latest()->paginate(10),
            "soldiers" => Soldier::latest()->paginate(10),

        ]);
    }
    public function leaves()
    {
        return view('admin.leaves', [
            "leaves" => Leave::latest()->paginate(50),
        ]);
    }
    public function flights()
    {
        return view('admin.flights', [
            "flights" => Flight::latest()->paginate(50),
        ]);
    }
    public function leaveEmail($id)
    {
        return view('admin.email', [
            "client" => Leave::where('id', $id)->first(),
        ]);
    }
    public function flightEmail($id)
    {
        return view('admin.email', [
            "client" => Flight::where('id', $id)->first(),
        ]);
    }

    public function soldierProfile()
    {
        return view('admin.soldier-profile');
    }
    public function soldierEdit($id)
    {
        return view('admin.soldier-edit', [
            "soldier" => Soldier::findOrFail($id),
        ]);
    }
    public function soldiers()
    {
        return view('admin.soldiers', [
            "soldiers" => Soldier::latest()->paginate(50),
        ]);
    }


    public function soldier()
    {
        $validate = request()->validate([
            'firstname' => "required",
            'lastname' => "required",
            'address' => "required",
            'country' => "required",
            'age' => "required",
            'maritalStatus' => "required",
            'bloodGroup' => "required",
            'salary' => "required",
            'annualSalary' => "required",
            'deployment' => "required",
            'rank' => "required",
            'sexualOrientation' => "required",
            'gender' => "required",
            'religion' => "required",
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // 👈 Image validation
        ]);

        if (request()->hasFile('image')) {
            $image = request()->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();

            // Dynamically detect the correct public directory (even if it's named public_html)
            $destinationPath = $_SERVER['DOCUMENT_ROOT'] . '/uploads/soldiers';

            // Ensure the folder exists
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            $image->move($destinationPath, $imageName);

            // This path is what gets stored in the DB and used in asset()
            $imagePath = 'uploads/soldiers/' . $imageName;
        }



        $create = Soldier::create([
            "soldier_id" => $this->generateSoldierId(),
            "firstname" => $validate["firstname"],
            "lastname" => $validate["lastname"],
            "address" => $validate["address"],
            "country" => $validate["country"],
            "age" => $validate["age"],
            "maritalStatus" => $validate["maritalStatus"],
            "bloodGroup" => $validate["bloodGroup"],
            "salary" => $validate["salary"],
            "annualSalary" => $validate["annualSalary"],
            "deployment" => $validate["deployment"],
            "rank" => $validate["rank"],
            "sexualOrientation" => $validate["sexualOrientation"],
            "gender" => $validate["gender"],
            "religion" => $validate["religion"],
            "image" => $imagePath, // 👈 Add image path
        ]);

        if ($create) {
            return redirect()->back()->with('success', "Soldier Profile Created Successfully!");
        } else {
            return redirect()->back()->with('error', "Failed to create Soldier Profile. Try again later!");
        }
    }

    public function soldierUpdate($id)
    {
        $validate = request()->validate([
            'firstname' => "required",
            'lastname' => "required",
            'address' => "required",
            'country' => "required",
            'age' => "required",
            'maritalStatus' => "required",
            'bloodGroup' => "required",
            'salary' => "required",
            'annualSalary' => "required",
            'deployment' => "required",
            'rank' => "required",
            'sexualOrientation' => "required",
            'gender' => "required",
            'religion' => "required",
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // 👈 Image validation
        ]);

        $imagePath = null;




        if (request()->hasFile('image')) {
            $image = request()->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/soldiers'), $imageName);
            $imagePath = 'uploads/soldiers/' . $imageName;
        }


        $create = Soldier::create([
            "soldier_id" => $this->generateSoldierId(),
            "firstname" => $validate["firstname"],
            "lastname" => $validate["lastname"],
            "address" => $validate["address"],
            "country" => $validate["country"],
            "age" => $validate["age"],
            "maritalStatus" => $validate["maritalStatus"],
            "bloodGroup" => $validate["bloodGroup"],
            "salary" => $validate["salary"],
            "annualSalary" => $validate["annualSalary"],
            "deployment" => $validate["deployment"],
            "rank" => $validate["rank"],
            "sexualOrientation" => $validate["sexualOrientation"],
            "gender" => $validate["gender"],
            "religion" => $validate["religion"],
            "image" => $imagePath, // 👈 Add image path
        ]);


        if ($create) {
            return redirect()->back()->with('success', "Soldier Profile Updated Successfully!");
        } else {
            return redirect()->back()->with('error', "Failed to update Soldier Profile. Try again later!");
        }
    }

    public function soldierDelete($id)
    {
        $delete = Soldier::where('id', $id)->delete();
        if ($delete) {
            return redirect()->back()->with('success', "Soldier Profile Deleted Successfully!");
        } else {
            return redirect()->back()->with('error', "Failed to delete. Try again later!");
        }
    }
}
