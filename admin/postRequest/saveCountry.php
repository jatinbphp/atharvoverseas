<?php
include "dbConnection.php";
if ($_POST) {
    $budget = $_POST['budget'];
    $isDisplay = isset($_POST['is_display']) && !empty($_POST['is_display']) ? 1 : 0;

    $sql = "UPDATE country SET budget = '$budget', is_display = '$isDisplay' WHERE id =".$_POST['cId'];
    if ($conn->query($sql) === TRUE) {
        $_SESSION['error'] = 'Country details is updated successfully';
    } else {
        $_SESSION['error'] = 'Something is wrong';
    }
}else{
    $_SESSION['error'] = 'Something is wrong';
}
header("Location: ../country.php");
exit();
?>