<?php

namespace App\Http\Controllers;

use App\Models\MentorshipComments;
use App\Http\Requests\StoreMentorshipCommentsRequest;
use App\Http\Requests\UpdateMentorshipCommentsRequest;
use Brian2694\Toastr\Facades\Toastr;

class MentorshipCommentsController extends Controller
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
     * @param  \App\Http\Requests\StoreMentorshipCommentsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function storeComment(StoreMentorshipCommentsRequest $request)
    {
        $mentorship_comment = new MentorshipComments();
        $mentorship_comment->montorship_id = $request->montorship_id;
        $mentorship_comment->user_id = auth()->user()->id;
        $mentorship_comment->content = $request->content;
        $mentorship_comment->save();
        Toastr::success('Your comment successfully added', 'Success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MentorshipComments  $mentorshipComments
     * @return \Illuminate\Http\Response
     */
    public function show(MentorshipComments $mentorshipComments)
    {
        //mentorship with comments

    

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MentorshipComments  $mentorshipComments
     * @return \Illuminate\Http\Response
     */
    public function edit(MentorshipComments $mentorshipComments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMentorshipCommentsRequest  $request
     * @param  \App\Models\MentorshipComments  $mentorshipComments
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMentorshipCommentsRequest $request, MentorshipComments $mentorshipComments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MentorshipComments  $mentorshipComments
     * @return \Illuminate\Http\Response
     */
    public function destroy(MentorshipComments $mentorshipComments)
    {
        //
    }
}
