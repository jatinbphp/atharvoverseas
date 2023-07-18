<?php
include "dbConnection.php";
if ($_POST) {
    /*Delete Functionality */
    if(isset($_POST['type']) && !empty($_POST['type']) && $_POST['type'] == 'delete'){
        $sql2 = "DELETE FROM offices WHERE id=".$_POST['id'];
        $result2 = mysqli_query($conn, $sql2);
        echo 'Office is deleted successfully';
        exit();
    }

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $state_name = validate($_POST['state_name']);
    $address = validate($_POST['address']);
    $google_map_link = validate($_POST['google_map_link']);

    if(!empty($_POST['oId']) && $_POST['oId'] > 0){
        $sql1 = "SELECT * FROM offices WHERE id=".$_POST['oId'];
        $result1 = mysqli_query($conn, $sql1);
        if (mysqli_num_rows($result1) === 1) {
            $sql = "UPDATE offices SET state_name = '$state_name', address = '$address', google_map_link = '$google_map_link' WHERE id =".$_POST['oId'];
            if ($conn->query($sql) === TRUE) {
                $_SESSION['error'] = 'Office is updated successfully';
            } else {
                $_SESSION['error'] = 'Something is wrong';
            }
        }
    }else{
        /*Insert Functionality */
        $sql = "INSERT INTO offices (state_name,address,google_map_link) VALUES ('$state_name','$address','$google_map_link')";
        $result = mysqli_query($conn, $sql);
        if ($result == 1) {
            $_SESSION['error'] = 'Office is inserted successfully';
        }else{
            $_SESSION['error'] = 'Something is wrong';
        }
    }
}else{
    $_SESSION['error'] = 'Something is wrong';
}
header("Location: ../office.php");
exit();
?>