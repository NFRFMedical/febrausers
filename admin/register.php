<?php
include 'inc/header.php';
Session::CheckLogin();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {

  $register = $users->userRegistration($_POST);
}

if (isset($register)) {
  echo $register;
}


 ?>


 <div class="card ">
   <div class="card-header">
          <h3 class='text-center'>Request for FrontLine Health Worker User ID</h3>
          <p class='text-center'>Note: User ID will be sent to your email within 24 Working Hours.</p>
        </div>
        <div class="cad-body">



            <div style="width:600px; margin:0px auto">

            <form class="" action="" method="post">
                <div class="form-group pt-3">
                  <label for="fname">First Name</label>
                  <input type="text" name="fname"  class="form-control">
                </div>
                <div class="form-group pt-3">
                  <label for="mname">Middle Name</label>
                  <input type="text" name="mname"  class="form-control">
                </div>
                <div class="form-group pt-3">
                  <label for="lname">Last Name</label>
                  <input type="text" name="lname"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="nin">National Identification Number / Passport Number</label>
                  <input type="nin" name="nin" class="form-control">
                  <input type="hidden" name="roleid" value="3" class="form-control">
                </div>
                <div class="form-group">
                  <label for="username">Tablet's IMEI ID</label>
                  <input type="text" name="username"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" name="email"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="mobile">Mobile Number</label>
                  <input type="text" name="mobile"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="password">Password </label>
                  <p>Should contain atleast 1 character (A - Z), a number (0 - 9) & atleast a special character (# * .)</p>
                  <input type="password" name="password"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="cpassword">Confirm Password</label>
                  <input type="password" name="cpassword"  class="form-control">
                </div>
                
                <div class="form-group">
                  <button type="submit" name="register" class="btn btn-success">Send Request</button>
                </div>


            </form>
          </div>


        </div>
      </div>



  <?php
  include 'inc/footer.php';

  ?>
