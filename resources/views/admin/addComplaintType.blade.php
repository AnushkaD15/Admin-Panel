@extends('layouts.master')

@section('content')

<div class="container-fluid px-4">
                        <h1 class="mt-4">Add Complaint Type</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">E-Complaints Grievance Portal</li>
                        </ol>
                        <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputComplaintType">Complaint Type</label>
                                <input type="text" class="form-control" id="inputComplaintType" placeholder="Complaint Type">
                            </div>
                            
                                <br>

                            <div class="form-group">
                                <label for="inputComplaintDescription">Complaint Description</label>
                                <input type="text" class="form-control" id="inputComplaintDescription" placeholder="Description">
                            </div>
                                                        
                            <br>

                            <div>
                                <label for="inputDaysToComplete">Days To Complete</label>
                                <input type="number" class="form-control" id="inputDaysToComplete" >  
                            </div>

                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Choose number of days
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <button class="dropdown-item" type="button">1</button>
                                    <button class="dropdown-item" type="button">2</button>
                                    <button class="dropdown-item" type="button">3</button>
                                    <button class="dropdown-item" type="button">4</button>
                                    <button class="dropdown-item" type="button">5</button>
                                    <button class="dropdown-item" type="button">6</button>
                                    <button class="dropdown-item" type="button">7</button>
                                    <button class="dropdown-item" type="button">8</button>
                                    <button class="dropdown-item" type="button">9</button>
                                    <button class="dropdown-item" type="button">10</button>
                                    <button class="dropdown-item" type="button">11</button>
                                    <button class="dropdown-item" type="button">12</button>
                                </div>
                            </div>

                          
                            <div>
                            <button type="add" class="btn btn-primary" style="">Add</button>
                            </div>
                    </form>   

           @endsection             
