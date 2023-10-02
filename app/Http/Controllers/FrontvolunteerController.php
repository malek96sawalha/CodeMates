<?php

namespace App\Http\Controllers;

use App\Models\products;

use App\Models\Frontvolunteer;
use App\Http\Requests\StoreFrontvolunteerRequest;
use App\Http\Requests\UpdateFrontvolunteerRequest;
use Illuminate\Support\Facades\Auth;

class FrontvolunteerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.UIform');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $language = products::find($id);
        return view('pages.frontendForm',compact('language'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFrontvolunteerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFrontvolunteerRequest $request,$id)
    {
        $request->validate([
            'CV' => 'required|mimes:pdf,docx',
        ]);
        $users = Frontvolunteer::all();
        if ($request->hasFile('CV')) {
            $pdfFile = $request->file('CV');
            $authPdfFile = time() . '.' . $pdfFile->getClientOriginalExtension();
            $pdfFile->move(public_path('uplods'), $authPdfFile);
            $users['CV'] = $authPdfFile;
        }

        Frontvolunteer::create([
   "user_id" =>Auth::user()->id,
            'Address' => $request->Address,
            'Languages' => $request->Languages,
            'day' => $request->day,
            'Experience' => $request->Experience,
            'CV' => $users['CV']

        ]);
        return redirect()->route('finishform');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Frontvolunteer  $frontvolunteer
     * @return \Illuminate\Http\Response
     */
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Frontvolunteer  $frontvolunteer
     * @return \Illuminate\Http\Response
     */
    public function edit(Frontvolunteer $frontvolunteer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFrontvolunteerRequest  $request
     * @param  \App\Models\Frontvolunteer  $frontvolunteer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFrontvolunteerRequest $request, Frontvolunteer $frontvolunteer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Frontvolunteer  $frontvolunteer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Frontvolunteer $frontvolunteer)
    {
        //
    }
}