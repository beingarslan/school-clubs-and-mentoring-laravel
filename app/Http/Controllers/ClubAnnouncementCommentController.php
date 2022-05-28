<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClubAnnouncementCommentRequest;
use App\Http\Requests\UpdateClubAnnouncementCommentRequest;
use App\Models\ClubAnnouncementComment;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

class ClubAnnouncementCommentController extends Controller
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
     * @param  \App\Http\Requests\StoreClubAnnouncementCommentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClubAnnouncementCommentRequest $request)
    {
    
        $clubAnnouncementComment = new ClubAnnouncementComment();
        $clubAnnouncementComment->club_announcement_id = $request->club_announcement_id;
        $clubAnnouncementComment->user_id = Auth::user()->id;
        $clubAnnouncementComment->content = $request->content;
        $clubAnnouncementComment->save();
        Toastr::success('Comment successfully added', 'Success');
        return redirect()->back();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClubAnnouncementComment  $clubAnnouncementComment
     * @return \Illuminate\Http\Response
     */
    public function show(ClubAnnouncementComment $clubAnnouncementComment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClubAnnouncementComment  $clubAnnouncementComment
     * @return \Illuminate\Http\Response
     */
    public function edit(ClubAnnouncementComment $clubAnnouncementComment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClubAnnouncementCommentRequest  $request
     * @param  \App\Models\ClubAnnouncementComment  $clubAnnouncementComment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClubAnnouncementCommentRequest $request, ClubAnnouncementComment $clubAnnouncementComment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClubAnnouncementComment  $clubAnnouncementComment
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClubAnnouncementComment $clubAnnouncementComment)
    {
        //
    }
}
