<style>
  @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');

body{
    font-family: 'Open Sans', sans-serif;
}

</style>


<div class="container mt-5 px-2">
  <h2>New Complaints</h2>
    
    <div class="table-responsive">
    <table class="table table-responsive">
        
      <thead style="background-color: #0abef0;">
            <tr>
              <th scope="col" width="2%">User ID</th>
              <th scope="col" width="5%">User Name</th>
              <th scope="col" width="2%">Complaint ID</th>
              <th scope="col" width="2%">Ward No</th>
              <th scope="col" width="5%">Ward Name</th>
              <th scope="col" width="10%">Complaint Description</th>
              <th scope="col" width="5%">Complaint Registration Date</th>
              <th scope="col" width="2%">To Be Completed In</th>
              <th scope="col" width="5%">Date of Update By Authority</th>        
            </tr>
      </thead>
      <tbody>
        @foreach($dcmp as $dcp)
          <tr>    
            <th>{{ $dcp->uid }}</th>
            <th>{{ $dcp->uname }}</th>
            <th>{{ $dcp->cid }}</th>
            <th>{{ $dcp->wid }}</th>
            <th>{{ $dcp->ward }}</th>
            <th>{{ $dcp->details }}</th> 
            <th>{{ $dcp->registereddate }}</th>
            <th>{{ $dcp->tobeCompleted }}</th> 
            <th>{{ $dcp->aDateofUpdate }}</th>                   
          </tr>
        @endforeach
      </tbody>
    </table>
  
  </div>
    
</div>