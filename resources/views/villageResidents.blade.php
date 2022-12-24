<style>
  @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');

body{
    font-family: 'Open Sans', sans-serif;
}

</style>


<div class="container mt-5 px-2">
  <h2>Village Residents Record</h2>
    
    <div class="table-responsive">
    <table class="table table-responsive">
        
      <thead style="background-color: #0abef0;">
            <tr>
              <th scope="col" width="2%">User ID</th>
              <th scope="col" width="5%">User Name</th>
              <th scope="col" width="5%">Phone</th>
              <th scope="col" width="5%">Aaddhar No.</th>
              <th scope="col" width="10%">Address</th>
              <th scope="col" width="5%">Ward</th>  
            </tr>
      </thead>
      <tbody>
                  @foreach ( $users as $us)
                      <tr>    
                        <th>{{ $us->uid }}</th>
                        <th>{{ $us ->uname }}</th>
                        <th>{{ $us->phone }}</th> 
                        <th>{{ $us->addharno }}</th>
                        <th>{{ $us->address }}</th>
                        <th>{{ $us->wid }}</th>                  
                      </tr>
                  @endforeach
      </tbody>
    </table>
  
  </div>
    
</div>