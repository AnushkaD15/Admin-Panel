<style>
  @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');

body{
    font-family: 'Open Sans', sans-serif;
}

</style>


<div class="container mt-5 px-2">
  <h2>Authority Record</h2>
    
    <div class="table-responsive">
    <table class="table table-responsive">
        
      <thead style="background-color: #0abef0;">
            
		<tr>
                        <th scope="col" width="2%">Authority ID</th>
                        <th scope="col" width="5%">Authority Name</th>
                        <th scope="col" width="5%">Phone</th>
                        <th scope="col" width="10%">Address</th>
                        <th scope="col" width="5%">Aaddhar No.</th>
                        <th scope="col" width="5%">Designation</th>
                        <th scope="col" width="5%">Date of Joining</th>
                        <th scope="col" width="5%">Works Still</th>
                      </tr>
      </thead>
      <tbody>
           @foreach ( $authority as $aut)
                        <tr>    
                        <th>{{$aut->aid }}</th>
                        <th>{{$aut->aname }}</th>
                        <th>{{$aut->phone}}</th>
                        <th>{{$aut->address}}</th> 
                        <th>{{$aut->addharno}}</th>
                        <th>{{$aut->designation}}</th>    
                        <th>{{$aut->workfrom}}</th> 
                        <th>{{$aut->workstill}}</th>               
                        </tr>
                    @endforeach
      </tbody>
    </table>
  
  </div>
    
</div>