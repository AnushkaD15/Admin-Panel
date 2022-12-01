@extends('layouts.master')

@section('content')

<div class="container-fluid px-4">
                        <h1 class="mt-4">Add Authority</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">E-Complaints Grievance Portal</li>
                        </ol>

                        <form>
                        <div class="form-row">
                            <div class="form-group col-md-8">
                            <label for="inputName4">Name</label>
                            <input type="name" class="form-control" id="inputName4" placeholder="Enter name">
                            </div>
                            <br>
                            <div class="form-group col-md-8">
                            <label for="inputPhoneNo4">Phone Number</label>
                            <input type="number" class="form-control" id="inputPhoneNo4" placeholder="Enter phone number">
                            </div>
                        </div>
                        <br>
                        <div class="form-group col-md-8">
                            <label for="inputAddress">Address</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="Enter address">
                        </div>
                        <br>
                        <div class="form-group col-md-8">
                            <label for="inputAadhaarNo">Aadhaar Number</label>
                            <input type="text" class="form-control" id="inputAadhaarNo" placeholder="enter aadhaar no.">
                        </div>
                        <br>
                        <!-- <div class="dropdown">
                            <label for="inputDesignation">Designation</label>
                                <li class="dropdown-header">Choose from..</li>
                                <li>Gram Sevak</li>
                                <li>Sarpanch</li>
                                <li>Upa-sarpanch</li>
                                <li>Ward Members</li>
                            </ul>
                        </div> -->

                        <div class="form-group col-md-8>
                            <label for="inputDesignation">Designation</label>
                            <div class="dropdown">
                                <a  class="dropdown-toggle" data-bs-toggle="dropdown">Choose from..</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Gram Sevak</a>
                                    <a class="dropdown-item" href="#">Sarpanch</a>
                                    <a class="dropdown-item" href="#">Upa-sarpanch</a>
                                    <a class="dropdown-item" href="#">Ward Members</a>
                                </div>
                                    
                            </div>
                        </div>
                            <br>
                        <div class="form-group col-md-8 ">
                            <label for="inputDate">Works From</label>
                            <input type="date" class="form-control" id="inputdate" placeholder="enter date in format (DD-MM-YYYY)">
                            </div>
                            <br>
                            <div class="form-group col-md-8">
                            <label for="inputchoice">Works Still</label>
                            <input type="text" class="form-control" id="inputdate" placeholder="enter yes or no">

                            </div>
                        </div>
                        <br>
                        <div class=" align-center ml-auto">
                            <button type="add" class="btn btn-primary" >Add</button>
                        </div>
                        
@endsection