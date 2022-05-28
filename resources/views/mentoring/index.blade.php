@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <!-- Your Code -->
            <div class="card">
                <div class="card-header">Mentorship</div>
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
                    Create mentorship</button>
                    <!-- Modal -->
                    <div class="modal fade" id="mamberBox" tabindex="-1" aria-labelledby="mamberBoxLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="{{route('mentors.store')}}" method="POST">
                                    @csrf
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="mamberBoxLabel">Add mentorship</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group mb-3">
                                            <label for="#">Tital</label>
                                            <input type="text" class="form-control" name="tital" placeholder="tital">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="#">Description</label>
                                            <textarea class="ckeditor form-control" name="description"></textarea>
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
                                <th>Tital</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($mentorings as $mentoring)
                            <tr>
                                <td>{{$mentoring->id}}</td>
                                <td>{{$mentoring->tital}}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="/mentors/{{$mentoring->id}}/show"  class="btn btn-primary btn-sm">View</a>
                                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#rmeoveModal{{$mentoring->id}}">Delete</button>
                                        <!-- model start -->
                                        <div class="modal fade" id="rmeoveModal{{$mentoring->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Remove {{$mentoring->tital}}</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <!-- Are yous sure? -->
                                                        <p>Are you sure you want to remove this mentoring?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <form action="{{route('mentors.destroy')}}" method="POST">
                                                            <input type="hidden" name="id" value="{{$mentoring->id}}">
                                                            @csrf
                                                            @method('DELETE')
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
                                <td colspan="4" class="text-center">No mentoring found</td>
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

<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });
</script>