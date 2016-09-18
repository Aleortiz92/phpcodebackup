<?php
/**
 * Created by PhpStorm.
 * User: HPS
 * Date: 9/17/2016
 * Time: 1:55 AM
 */
if (isset($_POST['submit'])) {
    $dba = $_POST["name"];
    $conn = mysqli_connect("localhost", "root", "Therush35", "my_dba");
    echo "The name is ". $dba;
    // setting variables 
    $table_name = $_POST["table"];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    // end of setting variables 
    
    echo "name: {$firstname} lastname: {$lastname} email: {$email}<br>";
    $sql = "Select * from {$table_name}";
    
    $sql_insert = "INSERT INTO {$_POST["table"]} (id,firstname, lastname, email)
VALUES ({$_POST['id']} ,'$firstname','$lastname', '$email')";
    $result_insert = mysqli_query($conn, $sql_insert);
    
    
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result))
    {
        echo "<br>";
        echo $row["firstname"];
    }
    mysqli_close($conn);
}
else {
    $name = "";
}
?>

<!DOCTYPE HTML>
<html>
<body>



<form action="sqldev.php" method="post">
    DBA: <input type="text" name="name"><br>
    Table Name: <input type="text" name="table"><br>
    ID: <input type="number" name="id"><br>
    First Name: <input type="text" name="firstname"><br>
    Last Name: <input type="text" name="lastname"><br>
    Email: <input type="text" name="email"><br>
    <input type="submit" name="submit" value="Submit" />
</form>

</body>
</html>