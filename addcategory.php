<?php 
include("include/header.php");
include("include/navbar.php");
include("include/sidebar.php");



?>



  <main id="main" class="main">
    <br><br>

    <div class="row">
            <div class="col-lg-12 col-12">
            <h1>Add Category</h1>
                <!-- card -->
                <div class="card mb-6 shadow border-0">
                    <!-- card body -->
                    <div class="card-body p-6 ">
                

                        <h4 class="mb-4 h5 mt-5">Category Information</h4>

                        <div class="row">
                            <form id="row1">
                        
                            <!-- input -->
                            <div class="mb-3 col-lg-6">
                                <label class="form-label">Category Name</label>
                                <input id="cat_name"  type="text" class="form-control" placeholder="Category Name" required>
                            </div>
                            <!-- input -->

                            <!-- input -->



                            <div>

                            </div>
                            <!-- input -->
                            <div class="form-floating">
                            <textarea class="form-control"  placeholder="Leave a comment here" id="cat_des" style="height: 100px"></textarea>
                            <label for="cat_des">Category Description</label>
                            </div>

                            <!-- input -->
                            <div class="mb-3 col-lg-12 my-3 ">
                                <h5>Select Status</h5>
                            <select class="form-select"  id="status" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">Active</option>
                            <option value="2">Disabled</option>
                            </select>

                            </div>

                            <div class="col-lg-12">

                                <button id="addCat" class="btn btn-secondary ms-2">
                                    Save
                                </button>
                            </div>
                            </form>
                        
                        </div>
                    </div>
                </div>

            </div>


        </div>
  </main><!-- End #main -->
  <script src="ajax/cat.js"></script>


  <?php 
include("include/footer.php");


?>