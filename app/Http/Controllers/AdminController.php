<?php



namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Admin;
use RealRashid\SweetAlert\Facades\Alert;


class AdminController extends Controller
{





    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $AdminList = Admin::all();

        return view('Admin_Dashboard.profile', ['admins' => $AdminList]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $admin = Admin::all();

        return view('Admin_Dashboard.Admins_Create', ['admin' => $admin]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'regex:/^[A-Za-z\s]+$|^[\p{Arabic}\s]+$|^[\p{Hebrew}\s]+$/u', 'max:20'],
            'last_name' => ['required', 'regex:/^[A-Za-z\s]+$|^[\p{Arabic}\s]+$|^[\p{Hebrew}\s]+$/u', 'max:20'],
            // 'email' => ['required'|'email'],
            'password' => ['required','regex:/^(?=.[a-z])(?=.[A-Z])(?=.*\d).{8,}$/i' ],
        ], [
            'name.required' => 'The name field is required.',
            'name.regex' => 'The name field must contain valid characters. Only letters and spaces are allowed.',
            'name.max' => 'The name field may not be greater than 255 characters.',
            'last_name.required' => 'The last name field is required.',
            'last_name.regex' => 'The last name field must contain valid characters. Only letters and spaces are allowed.',
            'last_name.max' => 'The last name field may not be greater than 255 characters.',
            'email.required' => 'The email field is required.',
            'email.email' => 'Please enter a valid email address.',
            'password.required' => 'The password field is required.',
            'password.regex' => ' At least 8 characters, one lowercase letter, one uppercase letter, and one digit.',

        ]);

        $admin = new Admin;
        $admin->name = $request->name;
        $admin->last_name = $request->last_name;
        $admin->email = $request->email;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/users'), $imageName);
            $admin->image = $imageName;
        }

        $admin->password = bcrypt($request->password);
        $admin->save();

         Alert::success('Added Successfuly', ' ');

        return redirect()->route('Admin_Dashboard.Admins_Data');
    }

    public function store_admin(Request $request, $id)
    {


        return redirect()->route('Admin_Dashboard.Admins_Data');
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {

        $AdminList = Admin::all();

        return view('Admin_Dashboard.Admins_Data', ['admins' => $AdminList]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $admin = Admin::find($id);
        return view('Admin_Dashboard.Admins_Update')->with('admins', $admin);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'regex:/^[A-Za-z\s]+$|^[\p{Arabic}\s]+$|^[\p{Hebrew}\s]+$/u', 'max:20'],
            'last_name' => ['required', 'regex:/^[A-Za-z\s]+$|^[\p{Arabic}\s]+$|^[\p{Hebrew}\s]+$/u', 'max:20'],
            // 'email' => ['required|email'],
            'password' => ['required','regex:/^(?=.[a-z])(?=.[A-Z])(?=.*\d).{8,}$/i' ],
        ], [
            'name.required' => 'The name field is required.',
            'name.regex' => 'The name field must contain valid characters. Only letters and spaces are allowed.',
            'name.max' => 'The name field may not be greater than 255 characters.',
            'last_name.required' => 'The last name field is required.',
            'last_name.regex' => 'The last name field must contain valid characters. Only letters and spaces are allowed.',
            'last_name.max' => 'The last name field may not be greater than 255 characters.',
            'email.required' => 'The email field is required.',
            'email.email' => 'Please enter a valid email address.',
            'password.required' => 'The password field is required.',
            'password.regex' => ' At least 8 characters, one lowercase letter, one uppercase letter, and one digit.',

        ]);
        
        $admin = Admin::find($id);
        $admin->name = $request->name;
        $admin->last_name = $request->last_name;
        $admin->email = $request->email;
        // $admin->password = $request->password;
        $admin->save();

        // $admin->update();
        return redirect()->route('Admin_Dashboard.Admins_Data')->with('success', 'student data dashboard successfully ');
    }

    public function updateprofile(Request $request, $id)
    {
        $admin = Admin::find($id);
        $admin->name = $request->name;
        $admin->last_name = $request->last_name;
        $admin->email = $request->email;
        // $admin->password = $request->password;
        $admin->save();

        // $admin->update();
        return redirect()->route('Admin_Dashboard.profile')->with('success', 'saved');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $admin = Admin::find($id);
        $admin->delete();
        return redirect()->route('Admin_Dashboard.Admins_Data')->with('success', 'student data dashboard successfully ');
    }
}
