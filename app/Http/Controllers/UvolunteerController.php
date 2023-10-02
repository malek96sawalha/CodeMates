<?php

namespace App\Http\Controllers;

use App\Models\Uvolunteer;
use App\Http\Requests\StoreUvolunteerRequest;
use App\Http\Requests\UpdateUvolunteerRequest;

class UvolunteerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreUvolunteerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUvolunteerRequest $request)
    {
        $request->validate([
            'CV' => 'required|mimes:pdf,docx',
        ]);
        Uvolunteer::create([

        'Address'=>$request->Address,
        'day'=>$request->day,
        'Experience'=>$request->Experience,
        'CV'=>$request->CV,
       
       ]);
       return redirect('home');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Uvolunteer  $uvolunteer
     * @return \Illuminate\Http\Response
     */
    public function show(Uvolunteer $uvolunteer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Uvolunteer  $uvolunteer
     * @return \Illuminate\Http\Response
     */
    public function edit(Uvolunteer $uvolunteer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUvolunteerRequest  $request
     * @param  \App\Models\Uvolunteer  $uvolunteer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUvolunteerRequest $request, Uvolunteer $uvolunteer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Uvolunteer  $uvolunteer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Uvolunteer $uvolunteer)
    {
        //
    }
}
