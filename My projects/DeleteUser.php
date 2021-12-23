<?php
if (isset($_POST['delete'])){

    $db = new SQLite3('C:\xampp\Data\StudentModule.db');

    $stmt = "DELETE FROM User WHERE userId = :stdID";
    $sql = $db->prepare($stmt);
    $sql->bindParam(':stdID', $_POST['Month'], SQLITE3_TEXT);

    $sql->execute();
    header("Location:viewUser.php?deleted=true");
}

include("Navbar.php"); 

$db = new SQLite3('C:\xampp\StudentModule.db');
$sql = "SELECT UserName, firstName, lastName, product FROM User WHERE userId=:Month";
$stmt = $db->prepare($sql);
$stmt->bindParam(':Month', $_GET['Month'], SQLITE3_TEXT);
$result= $stmt->execute();
$arrayResult = [];

while($row=$result->fetchArray(SQLITE3_NUM)){
    $arrayResult [] = $row;
    </?>
}
<h2>Delete User for <?php echo $_GET['Month'];?></h2><br>
        <h4 style="color: red;">Are you sure want to delete this user?</h4><br>
        
        <div class="row">
            <div class="col-md-2 f">
                <label style="font-size: 20px; color:blue; font-weight: bold;">User Name</label>
            </div>
            <div class="col-md-6">
                <label style="font-size: 20px;"><?php echo $arrayResult[0][0] ?></label>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2 f">
                <label style="font-size: 20px; color:blue; font-weight: bold;">First Name</label>
            </div>
            <div class="col-md-6">
                <label style="font-size: 20px;"><?php echo $arrayResult[0][1] ?></label>
                </div>
                </div>
        
                <div class="row">
                    <div class="col-md-2 f">
                        <label style="font-size: 20px; color:blue; font-weight: bold;">Last Name</label>
                    </div>
                    <div class="col-md-6">
                        <label style="font-size: 20px;"><?php echo $arrayResult[0][2] ?></label>
                    </div>
                </div>
        
                <div class="row">
                    <div class="col-md-2 f">
                        <label style="font-size: 20px; color:blue; font-weight: bold;">product</label>
                    </div>
                    <div class="col-md-6">
                        <label style="font-size: 20px;"><?php echo $arrayResult[0][3] ?></label>
                    </div>
                </div>
        
                <div class="row">
                    <div class="col-5">
                        <form method="post">
                             <input type="hidden" name="Month" value = "<?php echo $_GET['Month'] ?>"><br>
                            <input type="submit" value="Delete" class="btn btn-danger" name="delete"><a href="viewUser.php" style="font-weight: bold; padding-left: 30px;">Back</a>
                        </form>
                    </div>
                </div>
        