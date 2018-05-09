<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Login Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/css/mdb.min.css" rel="stylesheet">

  <!-- JQuery -->
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/js/mdb.min.js"></script>


</head>
<body>

<div class="row">

  <div class="col-md-6" style="margin:auto">

  <!-- Card -->

<section class="form-simple">

    <!--Form with header-->
    <div class="card">

        <!--Header-->
        <div class="header pt-3 grey lighten-2">

            <div class="row d-flex justify-content-start">
                <h3 class="deep-grey-text mt-3 mb-4 pb-1 mx-5">Log in</h3>
            </div>

        </div>
        <!--Header-->

        <div class="card-body mx-4 mt-4">

            <!--Body-->
            <div class="md-form">
              <form action="logincheck.php" method="post" enctype="multipart/form-data">
                <input type="text" id="Form-email4" class="form-control" name="uemail">
                <label for="Form-email4">Your email</label>
            </div>

            <div class="md-form pb-3">
                <input type="password" id="Form-pass4" class="form-control" name="upass">
                <label for="Form-pass4">Your password</label>
                <p class="font-small grey-text d-flex justify-content-end">Forgot <a href="#" class="dark-grey-text font-weight-bold ml-1"> Password?</a></p>
            </div>

            <div class="text-center mb-4">
                <button type="button" class="btn btn-danger btn-block z-depth-2" name="btn-login">Log in</button>
              </form>
            </div>
            <p class="font-small grey-text d-flex justify-content-center">Don't have an account? <a href="signuppage.php" class="dark-grey-text font-weight-bold ml-1"> Sign up</a></p>

        </div>

    </div>
    <!--/Form with header-->

</section>

</div>


</div>

</html>
