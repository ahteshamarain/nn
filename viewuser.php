<?php 
include("include/header.php");
include("include/navbar.php");
include("include/sidebar.php");
include("config.php");




?>

  <main id="main" class="main">
<br>
    <div class="pagetitle">
      <h1>View user</h1>

    </div><!-- End Page Title -->
    <br><br>

    <!-- <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <br><br>
              <h3 class="card-title">User data</h3>
              <br><br>
             

           
              <table class="table">
                <thead>
                  <tr>
                  <th>Id</th>
                    <th><b>first</b>Name</th>
                    <th>Last name</th>
                    <th>Email</th>
                    <th>Update</th>
                    <th>Delete</th>


                    
                  </tr>
                </thead>
                <tbody id="utab">
            
                   
                </tbody>
              </table>

            </div>
          </div>

        </div>
      </div>
    </section> -->
    <!-- modaal -->
    <!-- Button trigger modal -->


<!-- Modal -->

<div class="modal fade" id="updatedata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="user" action="uupdate.php" method="POST">
    <div class="form-group row">
 
    <input id="uid" type="hidden" class="form-control form-control-user input1" 
       placeholder="user id" name="userid" required>
 


        <div class="col-sm-6 mb-3 mb-sm-0">
       
         
            <input id="ufname"  style="border-radius: 100px;" type="text" class="form-control form-control-user input1" 
                placeholder="First Name" name="fname" required>
        </div>
        <div class="col-sm-6">
            <input id="ulname"  style="border-radius: 100px;" type="text" class="form-control form-control-user input1" 
                placeholder="Last Name" name="lname" required>
         </div>
    </div>
    <div class="form-group mt-3">
        <input id="uemail"  style="border-radius: 100px;" type="email" class="form-control form-control-user input1" 
            placeholder="Email Address" name="email" required>
    </div>
    
    <br>
    <!-- <a class="btn btn-primary btn-user btn-block" name="register">
        Register Account
    </a> -->
    
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <input type="submit" name="uupdate" value="register" class="btn btn-primary btn-user btn-block" >
    <br><br>
 
 
                        
</form>


      </div>
  
    </div>
  </div>
</div>
    <!-- modaal End -->
 
 

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <br><br>
              <h3 class="card-title">Products data</h3>
              <br>
     <!-- table -->
     <div class="table-responsive">
     <br><br>
     <table class="table table-warning">
                <thead class="bg-warning p-2 text-dark bg-opacity-10" style="opacity: 75%;">
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                    </tr>
                </thead>
                
                <tbody id="utab">
            
                
                </tbody>
            </table>

                </div>

                </div>
          </div>

        </div>
      </div>
    </section>




  </main><!-- End #main -->
  <?php 

include("include/footer.php");


?>
<script>
  new DataTable('#dtable');
 
</script>