<?php 
include("include/header.php");
include("include/navbar.php");
include("include/sidebar.php");
include("config.php");




?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Employee</h1>

    </div><!-- End Page Title -->
    <br><br>

    

<!-- Modal -->

<div class="modal fade" id="updatedata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="user" action="eupdate.php" method="POST">
    <div class="form-group row">
 
    <input id="eid" type="text" class="form-control form-control-user input1" 
       placeholder="user id" name="userid" required>
 


        <div class="col-sm-6 mb-3 mb-sm-0">
       
         
            <input id="efname"  style="border-radius: 100px;" type="text" class="form-control form-control-user input1" 
                placeholder="First Name" name="fname" required>
        </div>
        <div class="col-sm-6">
            <input id="elname"  style="border-radius: 100px;" type="text" class="form-control form-control-user input1" 
                placeholder="Last Name" name="lname" required>
         </div>
    </div>
    <div class="form-group mt-3">
        <input id="eemail"  style="border-radius: 100px;" type="email" class="form-control form-control-user input1" 
            placeholder="Email Address" name="email" required>
    </div>
    
    <br>
    <!-- <a class="btn btn-primary btn-user btn-block" name="register">
        Register Account
    </a> -->
    
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <input type="submit" name="eupdate" value="register" class="btn btn-primary btn-user btn-block" >
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
         <table class="table table-warning">
                <thead class="bg-warning p-2 text-dark bg-opacity-10" style="opacity: 75%;">
                         <th>Id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Update</th>
                        <th>Delete</th>
                       
                </thead>
                
                <tbody id="etab">
            
                
                </tbody>
            </table>
            </div>
          </div>

        </div>
      </div>
    </section>
  

  </main><!-- End #main -->
  <?php 

include("include/footer.php");


?>