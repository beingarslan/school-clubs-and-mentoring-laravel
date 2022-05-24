<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClubAnnouncementRequest;
use App\Http\Requests\UpdateClubAnnouncementRequest;
use App\Models\ClubAnnouncement;

class ClubAnnouncementController extends Controller
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
     * @param  \App\Http\Requests\StoreClubAnnouncementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClubAnnouncementRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClubAnnouncement  $clubAnnouncement
     * @return \Illuminate\Http\Response
     */
    public function show(ClubAnnouncement $clubAnnouncement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClubAnnouncement  $clubAnnouncement
     * @return \Illuminate\Http\Response
     */
    public function edit(ClubAnnouncement $clubAnnouncement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClubAnnouncementRequest  $request
     * @param  \App\Models\ClubAnnouncement  $clubAnnouncement
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClubAnnouncementRequest $request, ClubAnnouncement $clubAnnouncement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClubAnnouncement  $clubAnnouncement
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClubAnnouncement $clubAnnouncement)
    {
        //
    }
}
