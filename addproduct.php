<?php 
include("include/header.php");
include("include/navbar.php");
include("include/sidebar.php");
include("config.php");


?>



  <main id="main" class="main">
    <br><br>

  
<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">
    

    <div class="col-xl-10 col-lg-12 col-md-9">
        <h2>Add product</h2>
        <hr>
<form class="user" id="pform">
<div class="mb-3 ">
                        <?php 
                        $insert = "SELECT * from `category`";
                        $result = mysqli_query($connection, $insert);
                        if($result){
                            if(mysqli_num_rows($result) > 0){
                        

                        
                        ?>
                            <select name="procat" class="form-select"  id="pcategory" style="width: 400px;border-radius: 100px;">
                            <option selected>Select category</option>
                            <?php 
                     while($pro = mysqli_fetch_assoc($result)){
                echo '<option value="'.$pro['catid'].'">'. $pro['catname'].'</option>';
          
                     }
                    }
                }
              ?>
                           
                            </select>
                          

                            </div>
    <div class="form-group">

        <div class="col-sm-6">
            <input name="proname" style="border-radius: 100px;" type="text" class="form-control form-control-user input1" id="pname"
                placeholder="Product Name" required>
         </div>
        
    </div>
    <div class="col-sm-6 mt-3">
            <input name="procode" style="border-radius: 100px;" type="text" class="form-control form-control-user input1" id="pcode"
                placeholder="Product code" required>
         </div>
    <div class="form-group mt-3 col-sm-6">
        <input name="proimage" style="border-radius: 100px;" type="file" class="form-control form-control-user input1" id="pimage"
            placeholder="Product Image" required>
    </div>
    <div class="form-group mt-3 col-sm-6">
        <input name="proprice" style="border-radius: 100px;" type="text" class="form-control form-control-user input1" id="pprice"
            placeholder="Product Price" required>
    </div>

    
 
    <br>
    <!-- <a class="btn btn-primary btn-user btn-block" name="register">
        Register Account
    </a> -->
    <input type="submit" id="addpro" value="Add product" class="btn btn-primary btn-user btn-block" >
    <br><br>
 
                        
</form>

    </div>

</div>

</div>
  </main><!-- End #main -->


  <?php 
include("include/footer.php");


?>