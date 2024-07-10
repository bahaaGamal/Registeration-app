<?php require("inc/header.php"); ?>
<?php include("core/functions.php"); ?>
<?php 
    if(!isset($_SESSION["auth"])){
        redirect("login.php");
        die();
    }
 ?>
<?php require("inc/nav.php"); ?>
   
   <div class="container">
    <div class="row">
        <div class="col-8 mx-auto my-5 border p-3">
            <h2 class="border m-2 p-2 bg-success">Name: <?php echo $_SESSION["auth"][0] ?></h2>
            <h2 class="border m-2 p-2 bg-primary">Email: <?php echo $_SESSION["auth"][1] ?></h2>
        </div>
    </div>
   </div>

<?php require("inc/footer.php"); ?>

   