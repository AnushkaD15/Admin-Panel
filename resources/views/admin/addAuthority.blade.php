@extends('layouts.master')

@section('content')

<div class="container-fluid px-4">
                        <h1 class="mt-4">Add Authority</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">E-Complaints Grievance Portal</li>
                        </ol>

                        @if (\Session::has('success'))
                        <div class= "alert alert-success">
                            <p> 
                                {{\Session::get('success') }}
                            </p>
                        </div>
                            
                        @endif

                        <form method="post"  action="{{ url ('addAuthority')}}" enctype="multipart/form-data">
                        {{ csrf_field()}}
                        
                        <div class="form-row">
                            <div class="form-group col-md-8">
                            <label for="inputName4">Name</label>
                            <input type="name" class="form-control" id="inputName4" placeholder="Enter name">
                            </div>
                            <br>
                            <div class="form-group col-md-8">
                            <label for="inputPhoneNo4">Phone Number</label>
                            <input type="text" class="form-control" id="inputPhoneNo4" placeholder="Enter phone number">
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
                        
                            <div class="form-group col-md-8">
                                <label for="inputDesignation">Designation</label>
                                <select name="designation" class="form-control" id="inputDesignation">
                                    <option value="">Select designation</option>
                                    <option value="">Sarpanch</option>
                                    <option value="">Upa-Sarpanch</option>
                                    <option value="">Gram Sevak</option>
                                    <option value="">Ward Member</option>
                                </select>
                            </div>

                            <br>

                            <div class="form-group col-md-8">
                                <label for="inputALevel">Authority Level</label>
                                <select name="alevel" class="form-control" id="inputALevel">
                                    <option value="">Select authority level</option>
                                    <option value="">3</option>
                                    <option value="">2</option>
                                    <option value="">1</option>
                                </select>
                            </div>
                            <br>
                        <div class="form-group col-md-8 ">
                            <label for="inputDate">Works From</label>
                            <input type="date" class="form-control" id="inputdate" placeholder="enter date in format (DD-MM-YYYY)">
                            </div>
                            <br>

                            <div>
                                <div>
                                <label for="inputstatus">Works Still</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
                                    <label class="form-check-label" for="flexRadioDefault5">
                                    Yes
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault6" checked>
                                    <label class="form-check-label" for="flexRadioDefault6">
                                    No
                                    </label>
                                </div>
                            </div>
                            <br>
                            <div class="form-row">
                            <div class="form-group col-md-8">
                            <label for="password">Password</label>
                            <input class="form-control" type="password" id="disabledInput" placeholder="123" disabled>
                            
                            </div>
                            <br>
                        <div class=" align-center ml-auto">
                            <button type="submit" class="btn btn-primary" >Add</button>
                        </div>
                    </form>
                </div>
                        
                        
@endsection