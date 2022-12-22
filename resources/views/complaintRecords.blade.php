

<section class="intro">
  <div class="bg-image h-100" style="background-color: #f5f7fa;">
    <div class="mask d-flex align-items-center h-100">
      <div class="container">
      <h1 class="mt-4">Complaint Record</h1>
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="card">
              <div class="card-body p-0">
                <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true" style="position: relative; height: 700px">
                  <table class="table table-striped mb-0">
                    <thead style="background-color: #0abef0;">
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
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>







