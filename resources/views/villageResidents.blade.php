
<section class="intro">
  <div class="bg-image h-100" style="background-color: #f5f7fa;">
    <div class="mask d-flex align-items-center h-100">
      <div class="container">
      <h1 class="mt-4">Village Residents Record</h1>
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="card">
              <div class="card-body p-0">
                <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true" style="position: relative; height: 700px">
                  <table class="table table-striped mb-0">
                    <thead style="background-color: #0abef0;">
                      <tr>
                        <th scope="col">User ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Addhar No.</th>
                        <th scope="col">Address</th>
                        <th scope="col">Ward</th>
                      </tr>
                    </thead>
                    <tbody>
                     @foreach ( $users as $us)
                        <tr>    
                         <th>{{ $us->uid }}</th>
                        <th>{{ $us ->uname }}</th>
                     
                         <th>{{$us->phone}}</th>
                        <th>{{$us->address}}</th> 
                        <th>{{$us->addharno}}</th>
                        <th>{{$us->wid}}</th>                  
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







