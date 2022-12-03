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

                            <div class="form-group col-md-6">
                                <label for="inputComplaintDescription">Complaint Description</label>
                                <input type="text" class="form-control" id="inputComplaintDescription" placeholder="Description">
                            </div>
                                                        
                            <br>

                            <div class="form-group col-md-6">
                                <label for="inputDaysToComplete">Days To Complete</label> 
                                <input type="number" class="form-control" id="inputDaysToComplete" placeholder="Days To Complete">
                            
                            </div>

                            <!-- <script>
                                $(".dropdown-menu li a").click(function () {
                                    var selText = $(this).text();
                                    $(this).parents('.dropdown').find('.dropdown-toggle').html(selText + ' <span class="caret"></span>');
                                });
                            </script> -->
                        
                          <br>
                            <div>
                            <button type="add" class="btn btn-primary" style="">Add</button>
                            </div>
                    </form>   

           @endsection             
