<?php 
include("include/header.php");
include("include/navbar.php");
include("include/sidebar.php");
include("config.php");




?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>View category</h1>

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
      <form class="user" action="cupdate.php" method="POST">
    <div class="form-group row">
 
    <input id="cid" type="text" class="form-control form-control-user input1" 
       placeholder="id" name="userid" required>
 


        <div class="col-sm-6 mb-3 mb-sm-0">
       
         
            <input id="cname"  style="border-radius: 100px;" type="text" class="form-control form-control-user input1" 
                placeholder="category Name" name="cname" required>
        </div>
        <div class="col-sm-6">
            <input id="cdes"  style="border-radius: 100px;" type="text" class="form-control form-control-user input1" 
                placeholder="category description" name="cdes" required>
         </div>
    </div>
   
    
    <br>
    <!-- <a class="btn btn-primary btn-user btn-block" name="register">
        Register Account
    </a> -->
    
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <input type="submit" name="cupdate" value="register" class="btn btn-primary btn-user btn-block" >
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
                    
                    <th>Id</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                
                <tbody id="ctab">
            
                
                </tbody>
            </table>

                </div>
                    
                 

            
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
  <?php 

include("include/footer.php");


?>