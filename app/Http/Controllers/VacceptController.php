<?php

namespace App\Http\Controllers;

use App\Mail\Acceptmail;
use App\Models\Frontvolunteer;
use App\Models\User;
use App\Models\Vaccept;
use App\Models\Volunteer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
class VacceptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     //
    // }

    public function acceptv($id)
    {
      
        $Volunteeraccept= DB::table('frontvolunteers as fu')
        ->select([
            'u.id',
            'fu.id as fuid',
            'fu.Languages',
            'fu.user_id',
            'u.email',
            'fu.Address',
            'fu.Experience',
            'fu.CV',
            'fu.day'
        ])
            ->join('users as u', 'u.id', '=', 'fu.user_id')
            ->get();
        $Volunteeraccept1= $Volunteeraccept[0];  

        Vaccept::create([
            'user_id' => $Volunteeraccept1->fuid,
            'email'=> $Volunteeraccept1->email,
            'Address' => $Volunteeraccept1->Address,
            'Languages' => $Volunteeraccept1->Languages,
            'day' => $Volunteeraccept1->day,
            'Experience' => $Volunteeraccept1->Experience,
            'CV' => $Volunteeraccept1->CV

        ]);
        $frontVolunteer = Frontvolunteer::find($id);
        $frontVolunteer->delete();
       return redirect()->route('Admin_Dashboard.Volunteers');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function showEmailForm()
    {
        return view('send-email');
    }

    public function sendEmail(Request $request)
    {
        // Validate the incoming data
        $request->validate([
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Get the subject and message from the form
        $subject = $request->input('subject');
        $message = $request->input('message');

        // Retrieve all user emails (adjust the User model and table name)
        $userEmails = Acceptmail::pluck('email')->all();

        // Send the email with BCC to all users
        // Mail::to('admin@example.com') // Admin's email address
        //     ->bcc($userEmails)
        //     ->send(new Acceptmailv($subject, $message));

        return redirect()->back()->with('success', 'Email sent successfully to all users.');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vaccept  $vaccept
     * @return \Illuminate\Http\Response
     */
    public function show(Vaccept $vaccept)
    {
        $vaccepts=Vaccept::all();
        return view('Admin_Dashboard.Vaccept',compact('vaccepts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vaccept  $vaccept
     * @return \Illuminate\Http\Response
     */
    public function edit(Vaccept $vaccept)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vaccept  $vaccept
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vaccept $vaccept)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vaccept  $vaccept
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vaccept $vaccept)
    {
        //
    }
}
