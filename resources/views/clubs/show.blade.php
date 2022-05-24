@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <!-- Your Code -->
            <div class="card">
                <div class="card-header">Clubs Members [{{$club->name}}]</div>
                <div class="card-body">
                    <!-- errors -->
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#mamberBox">
                        Add Member</button>
                    <!-- Modal -->
                    <div class="modal fade" id="mamberBox" tabindex="-1" aria-labelledby="mamberBoxLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="{{route('clubs.add.member')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="club_id" value="{{$club->id}}">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="mamberBoxLabel">Add Member</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group mb-3">
                                            <label for="#">Select Member</label>
                                            <select name="user_id" class="form-control">
                                                @foreach($users as $member)
                                                <option value="{{$member->id}}">{{$member->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Add</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- create a culb mamber form ended -->
                    <!-- create table for mamber started -->
                    <table class="table table-striped table-hover text-center">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Member Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($club->users as $member)
                            <tr>
                                <td>{{$member->id}}</td>
                                <td>{{$member->name}}</td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#rmeoveModal{{$member->id}}">Delete</button>
                                        <!-- model start -->
                                        <div class="modal fade" id="rmeoveModal{{$member->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Remove {{$member->name}}</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <!-- Are yous sure? -->
                                                        <p>Are you sure you want to remove from this club?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <form action="{{route('clubs.remove.member')}}" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="user_id" value="{{$member->id}}">
                                                            <input type="hidden" name="club_id" value="{{$club->id}}">
                                                            <button type="submit" class="btn btn-danger">Remove</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- model end -->
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3" class="text-center">No Members found</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <!-- create table for mamber ended -->
                </div>
            </div>
            <!-- Your code -->
           
            <!-- Your Code -->
            <div class="card mt-2">
                <div class="card-header">Club Announcements</div>
                <div class="card-body">
                    <!-- errors -->
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#announcementModal">
                        Create Announcement</button>
                    <!-- Modal -->
                    <div class="modal fade" id="announcementModal" tabindex="-1" aria-labelledby="mamberBoxLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="{{route('announcements.store')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="club_id" value="{{$club->id}}">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="mamberBoxLabel">Announcement Content</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group mb-3">
                                            <label for="#">Announcement content</label>
                                          <textarea name="content" class="form-control" id="" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Add</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- create a culb mamber form ended -->
                    <!-- create table for mamber started -->
                    @forelse($club->announcements as $announcement)
                    <div class="list-group">

                    <a href="#" class="list-group-item list-group-item-action mt-3">
                        <div class="bg-success p-2 text-dark bg-opacity-10 rounded">
                        <div class="d-flex w-100 justify-content-between">
                        <h6 class="mb-1">A new announcement</h6>
                        <small class="text-muted badge bg-primary text-white rounded-pill">{{ $announcement->created_at->diffForHumans() }}</small>
                        </div>
                        <p class="mb-1">{{ $announcement->content }}</p>
                        </div>
                         <hr>
                         <hr>
                        <!-- all comments -->
                        @forelse($announcement->comments as $comment)
                        <div class="bg-light p-2 text-dark bg-opacity-10">
                      
                            <p class="mb-1">{{ $comment->content }}</p>
                            <div class="d-flex w-100">
                            <small class="text-muted mb-1 badge badge-secondary round-pill">{{ $comment->user->name }}</small>
                            <small class="text-muted ">{{ $comment->created_at->diffForHumans() }}</small>
                            </div>
                        </div>
                        <hr>
                        @empty
                        <div class="bg-light p-2 text-dark bg-opacity-10">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1"></h6>
                            </div>
                            <p class="mb-1">No comments</p>
                        </div>
                        @endforelse
                      

                    </a>

                    </div>
                    @empty
                    <p class="text-center">No Announcements found</p>
                    @endforelse
                    <!-- create table for mamber ended -->
                </div>
            </div>
            <!-- Your code -->
        </div>
    </div>
</div>
@endsection