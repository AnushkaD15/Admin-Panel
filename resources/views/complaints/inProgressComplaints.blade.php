

<section class="intro">
  <div class="bg-image h-100" style="background-color: #f5f7fa;">
    <div class="mask d-flex align-items-center h-100">
      <div class="container">
      <h1 class="mt-4">In Progress Complaints</h1>
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
                     @foreach ( $inprgs as $ip)
                        <tr>    
                        <th>{{$ip->uid }}</th>
                        <th>{{$ip->cid }}</th>
                        <th>{{$ip->wid}}</th>
                        <th>{{$ip->details}}</th> 
                        <th>{{$ip->registereddate}}</th>
                        <th>{{$ip->tobeCompleted}}</th> 
                        <th>{{$ip->aDateofUpdate}}</th>                   
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







