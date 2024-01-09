<?php 
include("include/header.php");
include("include/navbar.php");
include("include/sidebar.php");
include("config.php");




?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>products</h1>

    </div><!-- End Page Title -->
    <br><br>
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
                        <th>Name</th>
                        <th>code</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Update</th>
                        <th>Delete</th>
                </thead>
                
                <tbody id="ptab">
            
                
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