@extends('layouts.master')

@section('content')

<!-- @if ($message = Session::get('success'))

<div class="alert alert-success">
    {{ $message }}
</div>
@else
<div class="alert alert-danger">
    {{ $message }}
    
@endif -->



<div class="container-fluid px-4">
                        <h1 class="mt-4">Add Wards</h1>
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
                        
           <form method="post"  action="{{ url ('addWards')}}" enctype="multipart/form-data">
                        {{ csrf_field()}}
           
            <div class="form-row col-md-8">
                                <div class="form-group col-md-8">
                                <label for="inputWard">Ward</label>
                                <input type="text" name="ward" class="form-control" id="inputWard" placeholder="Ward Number">
                                </div>
                             
                                <br>

                            <div class="form-group col-md-8">
                                <label for="inputAddress">Address</label>
                                <input type="text" name="description" class="form-control" id="inputAddress" placeholder="1234 Main St">
                            </div>
                                                        
                            <br>

                            <div>
                            <button type="submit" value="submit" class=" btn btn-primary" >Add</button>
                            </div>
                    </form>   
                        
@endsection