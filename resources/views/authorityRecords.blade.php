

<section class="intro">
  <div class="bg-image h-100" style="background-color: #f5f7fa;">
    <div class="mask d-flex align-items-center h-100">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="card">
              <div class="card-body p-0">
                <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true" style="position: relative; height: 700px">
                  <table class="table table-striped mb-0">
                    <thead style="background-color: #0abef0;">
                      <tr>
                        <th scope="col">Authority ID</th>
                        <th scope="col">Authority Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Address</th>
                        <th scope="col">Aaddhar No.</th>
                        <th scope="col">Designation</th>
                        <th scope="col">Date of Joining</th>
                        <th scope="col">Works Still</th>
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
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>







