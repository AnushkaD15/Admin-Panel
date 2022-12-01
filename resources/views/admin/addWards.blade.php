@extends('layouts.master')

@section('content')

<div class="container-fluid px-4">
                        <h1 class="mt-4">Add Wards</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">E-Complaints Grievance Portal</li>
                        </ol>
                    <form>
                        <div class="form-row col-md-8">
                                <div class="form-group col-md-8">
                                <label for="inputWard">Ward</label>
                                <input type="ward" class="form-control" id="inputWard" placeholder="Ward">
                                </div>
                            
                                <br>

                            <div class="form-group col-md-8">
                                <label for="inputAddress">Address</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                            </div>
                                                        
                            <br>

                            <div>
                            <button type="add" class=" btn btn-primary" >Add</button>
                            </div>
                    </form>   
                        
@endsection