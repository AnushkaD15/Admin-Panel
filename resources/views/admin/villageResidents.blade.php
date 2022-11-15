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
                        <th scope="col">User ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Addhar No.</th>
                        <th scope="col">Address</th>
                        <th scope="col">Ward</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $key => $data)
                        <tr>    
                        <th>{{$data->uid}}</th>
                        <th>{{$data->uname}}</th>
                        <th>{{$data->phone}}</th>
                        <th>{{$data->address}}</th> 
                        <th>{{$data->addharno}}</th>
                        <th>{{$data->ward}}</th>                 
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




<!-- @foreach ($users as $key => $data )
{{ auth()->data()->username }}

$server_name = "localhost";
$username = "root";
$password = "";
$db_name = "adminpanel";

$conn =  new mysqli();

$conn->new mysqli($server_name, $username, $password, $db_name);

if($conn -> connect_error){
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT uid, uname, phone from users;";

$result = $conn->query($query);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "user id: " . $row["uid"] . " - Name: " . $row["uname"] . "Phone no: " . $row["phone"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();


@endforeach
?> -->