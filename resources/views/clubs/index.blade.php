@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <!-- Your Code -->
            <div class="card">
                <div class="card-header">Clubs</div>
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
                        Add Club</button>
                    <!-- Modal -->
                    <div class="modal fade" id="mamberBox" tabindex="-1" aria-labelledby="mamberBoxLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="{{route('clubs.store')}}" method="POST">
                                    @csrf
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="mamberBoxLabel">Add Club</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group mb-3">
                                            <label for="#">Name</label>
                                            <input type="text" class="form-control" name="name" placeholder="Name">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="#">Description</label>
                                            <textarea name="description" class="form-control" placeholder="Description"></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Add Club</button>
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
                                <th>Name</th>
                                <th>Members</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($clubs as $club)
                            <tr>
                                <td>{{$club->id}}</td>
                                <td>{{$club->name}}</td>
                                <td>{{count($club->users)}}</td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-primary btn-sm">View</button>
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="text-center">No clubs found</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <!-- create table for mamber ended -->
                </div>
            </div>
            <!-- Your code -->
        </div>
    </div>
</div>
@endsection