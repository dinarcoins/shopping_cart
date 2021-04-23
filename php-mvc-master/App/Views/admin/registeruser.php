<?php
include dirname( __DIR__ ) . '\admin\includes\header.php'; 
?>
<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

  <div class="col-xl-6 col-lg-6 col-md-6">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Register Here</h1>
              
              </div>
                <form class="user" action="/public/registeruser" method="POST">
                   <div class="form-group">
                    <input type="text" name="fisrtname" class="form-control form-control-user" placeholder="Your Name...">
                    </div>
                    <div class="form-group">
                    <input type="email" name="email" class="form-control form-control-user" placeholder="Enter Email Address...">
                    </div>
                    <div class="form-group">
                    <input type="password" name="password" class="form-control form-control-user" placeholder="Password">
                    </div>
            
                    <input type="submit" name="registerUser" class="btn btn-primary btn-user btn-block" value="registerUser" />
                    <hr>
                </form>


            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>

</div>


<?php
include dirname( __DIR__ ) . '\admin\includes\scripts.php';

?>