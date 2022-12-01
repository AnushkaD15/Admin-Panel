<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>admin-registration</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Muli'><link rel="stylesheet" href="./style1.css">

</head>
<!-- style="background-color:lightgrey;" -->
<body>
<!-- partial:index.partial.html -->
<div class="pt-5">
  <h1 class="text-center">Admin Registration</h1>
  <br>
  
<div class="container">
                <div class="row">
                    <div class="col-md-5 mx-auto">
                        <div class="card card-body" style="box-shadow: 0 2px 8px black">
                                                    
                            <form id="submitForm" action="/login" method="post" data-parsley-validate="" data-parsley-errors-messages-disabled="true" novalidate="" _lpchecked="1"><input type="hidden" name="_csrf" value="7635eb83-1f95-4b32-8788-abec2724a9a4">
                                <div class="form-group required">
                                    <lSabel for="username">Full Name </lSabel>
                                    <input type="text" class="form-control text-lowercase" id="username" required="" name="username" value="">
                                </div>     
                            
                                <div class="form-group required">
                                    <lSabel for="phome">Phone Number</lSabel>
                                    <input type="text" class="form-control text-lowercase" id="username" required="" name="username" value="">
                                </div> 
                                
                                <div class="form-group required">
                                    <lSabel for="address">Address</lSabel>
                                    <input type="text" class="form-control text-lowercase" id="username" required="" name="username" value="">
                                </div> 
                                
                                <div class="form-group required">
                                    <lSabel for="aadhar no">Aadhaar Number</lSabel>
                                    <input type="text" class="form-control text-lowercase" id="username" required="" name="username" value="">
                                </div> 

                                <div>
                                    <lSabel for="designation">Designation</lSabel>
                                        <select class="form-control" id="designation" name="designation">
                                            <option>Choose from below...</option>
                                            <option value="1">Village Head/ Sarpanch</option>
                                            <option value="2">Village Sub-head/ Upa-sarpanch</option>
                                            <option value="3">Village Member/ Gram Sevak</option>
                                        </select>
                                    <br>
                                </div> 

                                <div class="form-group required">
                                    <lSabel for="password">Password</lSabel>
                                    <input type="text" class="form-control text-lowercase" id="username" required="" name="username" value="">
                                </div> 

                                <div class="form-group required">
                                    <lSabel for="password">Confirm Password</lSabel>
                                    <input type="text" class="form-control text-lowercase" id="username" required="" name="username" value="">
                                </div> 
                                                               
                                <div class="form-group pt-1">
                                    <button class="btn btn-primary btn-block" type="submit">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
</div>
<!-- partial -->
  
</body>
</html>
