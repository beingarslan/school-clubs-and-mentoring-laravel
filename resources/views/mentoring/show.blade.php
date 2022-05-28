@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

      
            <!-- Your code -->
           
            <!-- Your Code -->
            <div class="card mt-2">
                <div class="card-header">Mentorship questionnaire</div>
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
           
                    <!-- Modal -->
             
                    <!-- create a culb mamber form ended -->
                    <!-- create table for mamber started -->
                    <div class="list-group">

                    <div class="list-group-item list-group-item-action mt-3">
                        <div class="bg-success p-2 text-dark bg-opacity-10 rounded">
                        <div class="d-flex w-100 justify-content-between">
                        <h6 class="mb-1">{{ $mentoring->tital }}</h6>
                        <small class="text-muted badge bg-primary text-white rounded-pill">{{ $mentoring->created_at->diffForHumans() }}</small>
                        </div>
                        <p class="mb-1">{!! $mentoring->description !!}</p>
                        </div>
                         <hr>
                         <hr>
                        <!-- all comments -->
                        
                        @forelse($mentoring->comments as $comment)
                        <div class="bg-light p-2 text-dark bg-opacity-10">
                      
                            <p class="mb-1">{{ $comment->content }}</p>
                            <div class="d-flex w-100">
                            <small class="text-muted mb-1 badge badge-secondary round-pill">{{ $comment->user->name }}</small>
                            <small class="text-muted ">{{ $comment->created_at->diffForHumans() }}</small>
                            </div>
                        </div>
                        <!-- add comment -->
                    
                        <hr>
                  
                        <div class="bg-light p-2 text-dark bg-opacity-10">
                            <form action="{{route('mentors.store.comment')}}" method="POST">
                                @csrf
                                <input type="hidden" name="montorship_id" value="{{ $mentoring->id }}">
                                <div class="form-group">
                                    <label for="">Write a reply</label>
                                    <textarea name="content" class="form-control" id="" cols="30" rows="2"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Add</button>
                            </form>
                        </div>
                    @empty
                    <p class="text-center">No reply found</p>
                    @endforelse 

                    </div>

                    </div>
            
                    <!-- create table for mamber ended -->
                </div>
            </div>
            <!-- Your code -->
        </div>
    </div>
</div>
@endsection