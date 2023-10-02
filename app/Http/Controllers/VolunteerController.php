<?php

namespace App\Http\Controllers;

use App\Models\Volunteer;
use App\Http\Requests\StoreVolunteerRequest;
use App\Http\Requests\UpdateVolunteerRequest;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Spatie\Backtrace\File;

// use Barryvdh\DomPDF\PDF;
class VolunteerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $volunteers = Volunteer::all();
        $file = Volunteer::findOrFail(1);
        $filename = $file->filename;
        //    return view('profile.edit')->with(['Volunteers'=>$volunteers,'filename'=> $filename]);
        return view('profile.edit', compact('Volunteers', 'filename'));
    }


    public function view($id)
    {
        // $volunteers = Volunteer::all()->where($id);
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

        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('profile.partials.table', ['volunteers' => $volunteers])->setPaper('a4', 'landscape');
        return $pdf->stream();
        //  return $pdf->download('profile.partials.table');


    }
    public function download()
    {
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML('<h1>Test</h1>');
        return $pdf->stream();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreVolunteerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVolunteerRequest $request)
    {
        $request->validate([
            'CV' => 'required|mimes:pdf,docx',
        ]);
        Volunteer::create([

            'Address' => $request->Address,
            'Languages' => $request->Languages,
            'day' => $request->day,
            'Experience' => $request->Experience,
            'CV' => $request->CV,

        ]);
        return redirect('home');
    }


    public function upload(Volunteer $request)
    {
        $request->validate([
            'file' => 'required|mimes:pdf,docx',
        ]);

        // Handle file upload logic here
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function show(Volunteer $volunteer)
    {
        $volunteers = Volunteer::all();
        return view('profile.edit')->with('Volunteers', $volunteers);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function edit(Volunteer $volunteer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVolunteerRequest  $request
     * @param  \App\Models\Volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVolunteerRequest $request, Volunteer $volunteer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Volunteer $volunteer)
    {
        //
    }

    public function showe(Volunteer $volunteers)
    {
        $volunteers = DB::table('frontvolunteers as fu')
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
            // ->where('u.id', '=', Auth::user()->id)

        return view('Admin_Dashboard.Volunteers')->with('Volunteers', $volunteers);
    }
}