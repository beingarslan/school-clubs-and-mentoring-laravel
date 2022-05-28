<?php

namespace App\Http\Controllers;

use App\Models\Mentoring;
use App\Http\Requests\StoreMentoringRequest;
use App\Http\Requests\UpdateMentoringRequest;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class MentoringController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mentorings = Mentoring::all();
        return view('mentoring.index', compact('mentorings'));
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
     * @param  \App\Http\Requests\StoreMentoringRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMentoringRequest $request)
    {
        $mentoring = new Mentoring();
        $mentoring->tital = $request->tital;
        $mentoring->description = $request->description;
        $mentoring->save();
        Toastr::success('Mentoring successfully added', 'Success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mentoring  $mentoring
     * @return \Illuminate\Http\Response
     */
    public function show($mentoring)
    {
       
        // get montoring with comments

        $mentoring = Mentoring::with('comments')->find($mentoring);
       
        return view('mentoring.show', compact('mentoring'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mentoring  $mentoring
     * @return \Illuminate\Http\Response
     */
    public function edit(Mentoring $mentoring)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMentoringRequest  $request
     * @param  \App\Models\Mentoring  $mentoring
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMentoringRequest $request, Mentoring $mentoring)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mentoring  $mentoring
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $mentoring)
    {
       
        $mentorship = Mentoring::findOrFail($mentoring->id);
        $mentorship->delete();
        Toastr::success('Mentoring successfully deleted', 'Success');
        return redirect()->back();
    }
}
