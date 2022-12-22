

<section class="intro">
  <div class="bg-image h-100" style="background-color: #f5f7fa;">
    <div class="mask d-flex align-items-center h-100">
      <div class="container">

      <h1 class="mt-4">New Complaints</h1>
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="card">
              <div class="card-body p-0">
                <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true" style="position: relative; height: 700px">
                  <table class="table table-striped mb-0">
                    <thead style="background-color: #0abef0;">
                      <tr>
                        <th scope="col">User ID</th>
                        <th scope="col">Complaint </th>
                        <th scope="col">Ward</th>
                        <th scope="col">Complaint Description</th>
                        <th scope="col">Complaint Registration Date</th>                        
                        <th scope="col">To Be Completed In</th>
                        <th scope="col">Date of Update By Authority</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                     @foreach($dcmp as $dcp)
                        <tr>    
                        <th>{{$dcp->uid }}</th>
                        <th>{{$dcp->cid }}</th>
                        <th>{{$dcp->wid}}</th>
                        <th>{{$dcp->details}}</th> 
                        <th>{{$dcp->registereddate}}</th>
                        <th>{{$dcp->tobeCompleted}}</th> 
                        <th>{{$dcp->aDateofUpdate}}</th>                   
                        </tr>
                      @endforeach
                 
                    
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>







