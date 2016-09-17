<?php
/**
 * Created by PhpStorm.
 * User: HPS
 * Date: 9/17/2016
 * Time: 1:55 AM
 */






if (isset($_POST['submit'])) {

    $dba = $_POST["name"];
    $conn = mysqli_connect("localhost", "root", "Therush35", $dba);
    echo "The name is ". $dba;
    $table_name = $_POST["table"];
    $sql = "Select * from {$table_name}";
    $sql_insert = "Insert "
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



<form action="userin.php" method="post">
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
