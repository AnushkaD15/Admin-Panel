<style>
  @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');

body{
    font-family: 'Open Sans', sans-serif;
}

</style>


<div class="container mt-5 px-2">
  <h2>Complaint Record</h2>
    
    <div class="table-responsive">
    <table class="table table-responsive">
        
      <thead style="background-color: #0abef0;">
            <tr>
		<tr>
                        <th scope="col">Complaint ID </th>
                        <th scope="col">Complaintant ID</th>
                        <th scope="col">Complaint Type </th>
                        <th scope="col">Ward</th>
                        <th scope="col">Complaint Description</th>
                        <th scope="col">Complaint Registration Date</th>
                        <th scope="col">To Be Completed In</th>
                        <th scope="col">Authority Acknowledgement</th>
                        <th scope="col">Date of Update By Authority</th>
                        <th scope="col">Complaintant Acknowledgement</th>
                        <th scope="col">Acknowledgement Date by Complaintant</th>
                      </tr>
      </thead>
      <tbody>
            @foreach ( $complaintsDetails as $cmprec)
                        <tr>    
                        <th>{{$cmprec->cdid }}</th>
                        <th>{{$cmprec->uid }}</th>
                        <th>{{$cmprec->cid}}</th>
                        <th>{{$cmprec->wid}}</th> 
                        <th>{{$cmprec->details}}</th>
                        <th>{{$cmprec->registereddate}}</th>    
                        <th>{{$cmprec->tobeCompleted}}</th> 
                        <th>{{$cmprec->astatus}}</th>
                        <th>{{$cmprec->aDateofUpdate}}</th>
                        <th>{{$cmprec->uack}}</th>
                        <th>{{$cmprec->ackDate}}</th>
                        </tr>
                    @endforeach
      </tbody>
    </table>
  
  </div>
    
</div>