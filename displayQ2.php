<html>
<head></head>


<body>


<!-- <?php
    $userid = $_POST['userid'];
    $userName = $_POST['userName'];
    $userDob = $_POST['userDob'];
    $userAge = $_POST['userAge'];
    $userUsername = $_POST['userUsername'];
    $userPw = $_POST['userPw'];
    $userSalary = $_POST['userSalary'];
    $userBonus = $_POST['userBonus'];
    $userLeaveDays = $_POST['userLeaveDays'];
    $userLeaveDaysProof = $_POST['userLeaveDaysProof'];
    $userMC = $_POST['userMC'];
    $userMCProof = $_POST['userMCProof'];
    $userClaims = $_POST['userClaims'];
    $userClaimsProof = $_POST['userClaimsProof'];

    echo $userid, $userName;
?> -->

<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "companya";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $userid = $_POST['userid'];
    $userName = $_POST['userName'];
    $userDob = $_POST['userDob'];
    $userAge = $_POST['userAge'];
    $userUsername = $_POST['userUsername'];
    $userPw = $_POST['userPw'];
    $userSalary = $_POST['userSalary'];
    $userBonus = $_POST['userBonus'];
    $userLeaveDays = $_POST['userLeaveDays'];
    $userLeaveDaysProof = $_POST['userLeaveDaysProof'];
    $userMC = $_POST['userMC'];
    $userMCProof = $_POST['userMCProof'];
    $userClaims = $_POST['userClaims'];
    $userClaimsProof = $_POST['userClaimsProof'];

    $sql = "INSERT INTO employeeTables (name)
    VALUES ('$userName')";
    // still trying to put more values
    $sql = "INSERT INTO employeeTables (dob)
    VALUES ('$userName','$userDob', '$userAge','$userUsername','$userPw','$userSalary','$userBonus','$userLeaveDays','$userLeaveDaysProof','$userMC','$userMCProof','$userClaims','$userClaimsProof')";

    if ($conn->query($sql) === TRUE) {
    //   echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }



// $conn->close();

?>

<!-- I do not remember the syntax how to connect to DB. So, here is the pseudocode:
    1. Create a new database and establish the connection to the database
    2. Create a new table in the database and go to PHP my admin and check if the table exists.






-->

</body>






</html>