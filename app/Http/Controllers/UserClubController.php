<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserClubRequest;
use App\Http\Requests\UpdateUserClubRequest;
use App\Models\UserClub;

class UserClubController extends Controller
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
     * @param  \App\Http\Requests\StoreUserClubRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserClubRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserClub  $userClub
     * @return \Illuminate\Http\Response
     */
    public function show(UserClub $userClub)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserClub  $userClub
     * @return \Illuminate\Http\Response
     */
    public function edit(UserClub $userClub)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserClubRequest  $request
     * @param  \App\Models\UserClub  $userClub
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserClubRequest $request, UserClub $userClub)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserClub  $userClub
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserClub $userClub)
    {
        //
    }
}
