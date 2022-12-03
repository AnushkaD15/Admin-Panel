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
                        <!-- <div class="dropdown">
                            <label for="inputDesignation">Designation</label>
                                <li class="dropdown-header">Choose from..</li>
                                <li>Gram Sevak</li>
                                <li>Sarpanch</li>
                                <li>Upa-sarpanch</li>
                                <li>Ward Members</li>
                            </ul>
                        </div> -->

                        <!-- <div class="form-group col-md-8>
                            <label for="inputDesignation">Designation</label>
                            <div class="dropdown">
                                <a  class="dropdown-toggle" data-bs-toggle="dropdown">Choose from..</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#"></a>
                                    <a class="dropdown-item" href="#"></a>
                                    <a class="dropdown-item" href="#"></a>
                                    <a class="dropdown-item" href="#"></a>
                                </div>
                                    
                            </div>
                        </div> -->

                        <!-- <div>
                                <div>
                                <label for="inputstatus">Designation</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                    Gram Sevak
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                    Sarpanch
                                    </label>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                    <label class="form-check-label" for="flexRadioDefault3">
                                    Upa-sarpanch
                                    </label>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                                    <label class="form-check-label" for="flexRadioDefault4">
                                    Ward Members
                                    </label>
                                </div>
                            </div> -->
                            <div>
                                <label for="inputdesignation">Designation</label>
                                </div>
                            <div class="dropdown mt-3">
                                <button class="btn btn-info dropdown-toggle" type="button" id="book-dropdown" data-bs-toggle="dropdown">
                                    Choose from..
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="book-dropdown">
                                    <li><a class="dropdown-item" href="#">Gram Sevak</a></li>
                                    <li><a class="dropdown-item" href="#">Sarpanch</a></li>
                                    <li><a class="dropdown-item" href="#">Upa-sarpanch</a></li>
                                    <li><a class="dropdown-item" href="#">Ward Members</a></li>
                                </ul> 

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
                            <button type="add" class="btn btn-primary" >Add</button>
                        </div>
                    </form>
                </div>
                        
                        
@endsection