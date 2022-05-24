<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserClubRequest;
use App\Http\Requests\UpdateUserClubRequest;
use App\Models\UserClub;
use Brian2694\Toastr\Facades\Toastr;

class UserClubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userClubs = UserClub::with('users')->get();

        return view('userClubs.index', compact('userClubs'));
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
        $club = UserClub::create([
            'user_id' => $request->user_id,
            'club_id' => $request->club_id,
        ]); 

        Toastr::success('User added to club successfully.');
        return redirect()->back();
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
        $userClub->delete();
        Toastr::success('User removed from club successfully.');
    }
}
