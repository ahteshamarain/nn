<?php 
include("include/header.php");


?>
	

    <div id="main1">
    <br><br><br><br><br><br>

<div id="container">
<section class="wrapper" id="formm">
      <div class="form signup">
        <header>Admin login</header>
        <form action="newuser.php" method="POST">

          <input name="email" class="input" id="email" type="text" placeholder="Email address" required />
          <input name="pass" class="input" id="password" type="password" placeholder="Password" required />
      
          <div class="checkbox">
            <input type="checkbox" id="signupCheck" />
            <label for="signupCheck">I accept all terms & conditions</label>
         </div>
         <button id="sign" type="submit" value="register" name="register">Signup</button> 
        </form>
      </div>

    </section>
</div>

</div>



  