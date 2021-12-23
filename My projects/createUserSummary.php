<?php include("NavBar.php"); 
$result = $_GET['createUser']; //you can also use $_REQUEST[''] do 

?>
<div class="container pb-5">
<main product="main" class="pb-3">
<h2>User Creation Result</h2><br>
<div>
<?php
if($result){
echo "A user successfully created";
 }
else{
echo "Error";
 }
?>
<div><a href="createUser.php">Back</a></div>
</div>
</div>
<?php
include("Footer.php");