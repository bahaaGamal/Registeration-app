<?php require("inc/header.php"); ?>
<?php include("core/functions.php"); ?>
<?php 
    if(isset($_SESSION["auth"])){
        redirect("index.php");
        die();
    }
 ?>
<?php require("inc/nav.php"); ?>
   
<div class="container">
  <div class="row">
    <div class="col-8 mx-auto my-5">
      <h1 class="border p-2 my-2 text-center">Login</h1>

      <!-- Print Errors -->
      <?php 
        if(isset($_SESSION['errors'])):
        foreach($_SESSION['errors'] as $error): 
      ?>
        <div class="alert alert-danger text-center">
          <?php echo $error; ?>
        </div>
      <?php
        endforeach;
        unset($_SESSION['errors']);
        endif;        
      ?>

      <form action="handelers/handellogin.php" method="post" class=" border p-3">
        <div class="form-group p-2 my-1">
          <label for="email">Email</label>
          <input type="email" name="email" class="form-control" id="email">
        </div>
        <div class="form-group p-2 my-1">
          <label for="password">Password</label>
          <input type="password" name="password" class="form-control" id="password">
        </div>
        <div class="form-group p-2 my-1">
          <input type="submit" value="Login"  class="form-control">
        </div>
      </form> 
    </div>
  </div>
</div>

<?php require("inc/footer.php"); ?>

   