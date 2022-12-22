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
                        <h1 class="mt-4">Assign Wards to Authority</h1>
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
                        
           <form method="post"  action="{{ url ('assignWardsToAuthority')}}" enctype="multipart/form-data">
                        {{ csrf_field()}}
           
            <div class="form-row col-md-8">
                                                          
                            <div class="form-group col-md-8">
                                <label for="inputWard">Ward</label>
                                <select name="ward" class="form-control" id="inputWard">
                                    <option value="">Select Ward</option>
                                    @foreach ($wdata as $wd)
                                        <option value="{{$wd->wid}}">{{$wd->ward}}</option>           
                                    @endforeach
                                    

                                </select>
                            </div>
                            
                            <br>

                            <div class="form-group col-md-8">
                                <label for="inputAuthority">Authority</label>
                                <select name="authority" class="form-control" >
                                    <option value="">Select Authority</option>
                                        @foreach ($adata as $ad)
                                        <option value="{{$ad->aid}}">{{$ad->aname}}</option>           
                                        @endforeach                              
                                </select>
                            </div>

                            <br>

                            <div>
                            <button type="submit" value="Assign" class=" btn btn-primary" >Assign</button>
                            </div>
                    </form>   
                        
@endsection