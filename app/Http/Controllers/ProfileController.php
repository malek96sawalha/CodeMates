<?php

namespace App\Http\Controllers;
use App\Models\Frontvolunteer;
use App\Models\User;
use App\Models\Uvolunteer;
use App\Models\Volunteer;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;


class ProfileController extends Controller
{
    public function show(Volunteer $volunteer)
    {
        // $volunteers = Frontvolunteer::find(Auth::id());
        $volunteers = DB::table('frontvolunteers as fu')
        ->select([
            'u.id',
            'fu.Languages',
            'fu.Address',
            'fu.Experience',
            'fu.CV',
            'fu.day'
        ])
            ->join('users as u', 'u.id', '=', 'fu.user_id')
            ->where('u.id', '=', Auth::user()->id)
            ->get();
        $user = User::find(Auth::id()); 
        return view('profile.edit',['user'=>$user,'volunteers'=>$volunteers]);
       
    }


    /**
     * Display the user's profile form.
     */
    public function edit(Request $request){

        $users = DB::table('frontvolunteers as fu')
            ->select([
                'u.id',
                'fu.Languages',
                'fu.Address',
                'fu.Experience',
                'fu.CV',
                'fu.day'
            ])
            ->join('users as u', 'u.id', '=', 'fu.user_id')
            ->join('users as u', 'u.id', '=', 'fu.user_id')

            ->where('u.id', '=', Auth::user()->id)
            ->get();
     
        $file = Volunteer::findOrFail(1);
        $filename = $file->content;
        return redirect()->route('profile.show', [
            'user'=>$request->Auth::user(),'volunteers'=>$users, 'filename'=> $filename
        ]);
    }

    public function ssss() {
return redirect('home');
}
    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = $request->user();

        // Update the user's profile data (name and email)
        $user->fill($request->only(['name', 'email']));
    
        // Check if the user uploaded a new image
        if ($request->hasFile('image')) {
            // Validate and store the uploaded image
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/users'), $imageName);


            // $imagePath = $request->file('image')->store('images/users');
            $user->image =  $imageName;
        }
    
        // Update the user's phone number
        $user->phone = $request->input('phone');
    
        // Reset email verification if email is changed
        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }
    
        // Save the user's updated profile
        $user->save();
        $donition=DB::table(' frontvolunteers');
        return Redirect::route('profile.show')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
    

}