<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>admin-login</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Muli'><link rel="stylesheet" href="./style1.css">

</head>

<!-- style="background-color:lightgrey;" -->
<body >
<!-- partial:index.partial.html -->
<div class="pt-5">
  <h1 class="text-center">Admin Login</h1>
  <br>
 <form action="" method="POST">
 
 <div class="container"  >
                <div class="row" >
                    <div class="col-md-5 mx-auto">
                        <div class="card card-body" style="box-shadow: 0 2px 8px black">
                                                    
                            <form id="submitForm" action="/login" method="post" data-parsley-validate="" data-parsley-errors-messages-disabled="true" novalidate="" _lpchecked="1"><input type="hidden" name="_csrf" value="7635eb83-1f95-4b32-8788-abec2724a9a4">
                                <div class="form-group required">
                                    <lSabel for="username">Authority Id</lSabel>
                                    <input type="text" class="form-control text-lowercase" id="username" required="" name="username" value="">
                                </div>     
                            
                                <div class="form-group required">
                                    <lSabel for="phonenumber">Phone Number</lSabel>
                                    <input type="text" class="form-control text-lowercase" id="phonenumber" required="" name="username" value="">
                                </div>                    
                                <div class="form-group required">
                                    <label class="d-flex flex-row align-items-center" for="password">Password 
                                        <a class="ml-auto border-link small-xl" href="/forget-password">Forget?</a></label>
                                    <input type="password" class="form-control" required="" id="password" name="password" value="">
                                </div>
                                <div class="form-group mt-4 mb-4">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="remember-me" name="remember-me" data-parsley-multiple="remember-me">
                                        <label class="custom-control-label" for="remember-me">Remember me?</label>
                                    </div>
                                </div>
                                <div class="form-group pt-1">
                                    <button class="btn btn-primary btn-block" type="submit">Log In</button>
                                </div>
                            </form>
                            <p class="small-xl pt-3 text-center">
                                <span class="text-muted">Not a member?</span>
                                <a href="/signup">Sign up</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
</div>



 </form>
<!-- partial -->
  
</body>
</html>
