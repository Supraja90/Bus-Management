<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Register</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark" style="background-image: linear-gradient(blue,white);">

    <div class="container">
      <div class="card card-register mx-auto mt-5">
      <div class="card-header" style="width:638px">
        <img class="card-imp-top" src="image/header.jpg" alt="Card image" style="width:100%">
        <div class="card-body">
          <form method="POST" action="success1.php">
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="rnum" class="form-control" placeholder="rnum" name="rnum" required="required" autofocus="autofocus">
                    <label for="rnum">Rollnumber</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="name" class="form-control" placeholder="name" name="name" required="required">
                    <label for="name">Name</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="program" id="program" class="form-control" placeholder="program" name="program" required="required">
                    <label for="program">Program</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="branch" id="branch" class="form-control" placeholder="branch" name="branch" required="required">
                    <label for="branch">Branch</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="sem" id="sem" class="form-control" placeholder="sem" name="sem" required="required">
                    <label for="sem">Sem</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="mobilenum" id="mobilenum" class="form-control" placeholder="mobilenum" name="mobilenum" required="required">
                    <label for="mobilenum">Mobile Number</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
            <div class="form-row">
                <div class="col-md-6">
              <div class="form-label-group">
                <input type="gender" id="gender" class="form-control" placeholder="gender" name="gender" required="required">
                <label for="gender">Gender</label>
              </div>
            </div>
            <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="pickup_point" id="pickup_point" class="form-control" placeholder="pickup_point" name="pickup_point" required="required">
                    <label for="pickup_point">Pickup Point</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
            <div class="form-row">
                <div class="col-md-6">
              <div class="form-label-group">
                <input type="pname" id="pname" class="form-control" placeholder="pname" name="pname" required="required">
                <label for="pname">Guardian Name</label>
              </div>
            </div>
            <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="pnum" id="pnum" class="form-control" placeholder="pnum" name="pnum" required="required">
                    <label for="pnum">Guardian number</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required="required">
                <label for="inputEmail">Email address</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                     title="Must contain at least one number,one uppercase,lowercase letter and at least 8 or more characters" required>
                    <label for="inputPassword">Password</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="confirmPassword" class="form-control" placeholder="Confirm password" name="confirm" required="required">
                    <label for="confirmPassword">Confirm password</label>
                  </div>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="register" style="background-image: linear-gradient(, #2144);">Register</button>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="register.php" Login Page</a>
           
          </div>
        </div>
      </div>
</div>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
