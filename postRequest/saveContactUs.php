<?php
include "dbConnection.php";

if ($_POST) {

    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message'])){
    
        $sql = "INSERT INTO contact_us (type,name,email,subject,message) VALUES ('1', '".$_POST['name']."', '".$_POST['email']."', '".$_POST['subject']."', '".$_POST['message']."')";
        $result = mysqli_query($conn, $sql);
        
        if ($result == 1) {
            echo 1;
        }else{
            echo 0;
        }

    } else if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['telephone_number']) && !empty($_POST['message'])){

        $sql = "INSERT INTO contact_us (type,name,email,contact_no,message) VALUES ('2', '".$_POST['name']."', '".$_POST['email']."', '".$_POST['telephone_number']."', '".$_POST['message']."')";
        $result = mysqli_query($conn, $sql);
        
        if ($result == 1) {
            echo 1;
        }else{
            echo 0;
        }

    } else {
        echo 0;
    }
}else{
    echo 0;
}
?>