<style>
  @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');

body{
    font-family: 'Open Sans', sans-serif;
}

</style>


<div class="container mt-5 px-2">
  <h2>Pending Complaints</h2>
    
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
        @foreach ( $pcmp as $pcp)
          <tr>    
            <th>{{ $pcp->uid }}</th>
            <th>{{ $pcp->uname }}</th>
            <th>{{ $pcp->cid }}</th>
            <th>{{ $pcp->wid }}</th>
            <th>{{ $pcp->ward }}</th>
            <th>{{ $pcp->details }}</th> 
            <th>{{ $pcp->registereddate }}</th>
            <th>{{ $pcp->tobeCompleted }}</th> 
            <th>{{ $pcp->aDateofUpdate }}</th>                   
          </tr>
        @endforeach
      </tbody>
    </table>
  
  </div>
    
</div>