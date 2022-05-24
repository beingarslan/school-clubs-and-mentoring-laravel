@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <!-- Your Code -->
            <div class="card">
                <div class="card-header">Clubs Members</div>
                <div class="card-body">
                    <!-- create a club mamber form started -->
                    <form action="#" id="popupBox">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#mamberBox">
                            Add new Mamber</button>
                        <!-- Modal -->
                        <div class="modal fade" id="mamberBox" tabindex="-1" aria-labelledby="mamberBoxLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="mamberBoxLabel">Create Mamber</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group mb-3">
                                            <label for="#">Name</label>
                                            <input type="text" class="form-control" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                            <!-- model end -->
                        </div>
                    </form>
                    <!-- create a culb mamber form ended -->
                    <!-- create table for mamber started -->
                    <table class="table table-striped table-hover text-center">
                        <tr>
                            <th>ID</th>
                            <th>Member Name</th>

                            <th>Action</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Amran</td>
                            <td>
                                <button class="btn btn-danger m-0">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Amran</td>
                            <td>
                                <button class="btn btn-danger m-0">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>umar</td>
                            <td>
                                <button class="btn btn-danger m-0">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Ali Raza</td>
                            <td>
                                <button class="btn btn-danger m-0">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Naeem</td>
                            <td>
                                <button class="btn btn-danger m-0">Delete</button>
                            </td>
                        </tr>
                    </table>
                    <!-- create table for mamber ended -->
                </div>
            </div>
            <!-- Your code -->
        </div>
    </div>
</div>
@endsection