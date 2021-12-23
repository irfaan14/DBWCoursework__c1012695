
<?php


function createUser(){

    $created = false;//this variable is used to indicate the creation is successfull or not
    $db = new SQLite3('C:\xampp\StudentModule.db'); // db connection 
    $sql = 'INSERT INTO User(userID, UserName, firstName, lastName, Password, Status, product) VALUES (:Month, :userName, :fName, :lName, :Pcode, :status, :product)';
    $stmt = $db->prepare($sql); //prepare the sql statement

    //give the values for the parameters
    $stmt->bindParam(':Month', $_POST['Month'], SQLITE3_TEXT); // use SQLITE3_TEXT for text/varchar. You can use SQLITE3_INTEGER or SQLITE3_REAL for numerical values
    $stmt->bindParam(':userName', $_POST['Dob'], SQLITE3_TEXT); 
    $stmt->bindParam(':fName', $_POST['fname'], SQLITE3_TEXT);
    $stmt->bindParam(':lName', $_POST['lname'], SQLITE3_TEXT);
    $stmt->bindParam(':Pcode', $_POST['Pcode'], SQLITE3_TEXT);
    $stmt->bindParam(':status', $_POST['status'], SQLITE3_TEXT);
    $stmt->bindParam(':product', $_POST['product'], SQLITE3_TEXT);

    //execute the sql statement
    $stmt->execute();

    //the logic
    if($stmt){
        $created = true;
    }

    return $created;
}
