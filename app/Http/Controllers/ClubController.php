<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClubRequest;
use App\Http\Requests\UpdateClubRequest;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Club;
use App\Models\User;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    public function addMember(Request $request)
    {
        $club = Club::find($request->club_id);
        $user = User::find($request->user_id);

        $club->users()->attach($user);

        Toastr::success('User added to club successfully.');
        return redirect()->back();
    }
    
    public function removeMember(Request $request)
    {
        $club = Club::find($request->club_id);
        $user = User::find($request->user_id);

        $club->users()->detach($user);

        Toastr::success('User removed from the club successfully.');
        return redirect()->back();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clubs = Club::with(['users', 'announcements'])->get();

        return view('clubs.index', compact('clubs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreClubRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClubRequest $request)
    {
        $club = Club::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        Toastr::success('Club created successfully.');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function show(Club $club)
    {
        $users = User::where('is_admin', false)->whereDoesntHave('clubs', function ($query) use ($club) {
            $query->where('club_id', $club->id);
        })->get();
        return view('clubs.show', compact('club', 'users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function edit(Club $club)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClubRequest  $request
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClubRequest $request, Club $club)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function destroy(Club $club)
    {
        $club->delete();
        Toastr::success('Club deleted successfully.');
        return redirect()->back();
    }
}
