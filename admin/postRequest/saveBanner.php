<?php
include "dbConnection.php";
if ($_POST) {
    /*Delete Functionality */
    if(isset($_POST['type']) && !empty($_POST['type']) && $_POST['type'] == 'delete'){
        $sql1 = "SELECT * FROM banner WHERE id=".$_POST['id'];
        $result1 = mysqli_query($conn, $sql1);
        if (mysqli_num_rows($result1) === 1) {
            $row = mysqli_fetch_assoc($result1);
            unlink('../../uploads/' . $row['image']);
        }
        $sql2 = "DELETE FROM banner WHERE id=".$_POST['id'];
        $result2 = mysqli_query($conn, $sql2);
        echo 'Banner is deleted successfully';
        exit();
    }

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if(!empty($_POST['bId']) && $_POST['bId'] == 0) {
        $image = validate($_POST['image']);
    }
    $status = validate($_POST['status']);

    if(!empty($status)){
        $sql = "UPDATE banner SET status = '$status' WHERE id =".$_POST['bId'];
        if ($conn->query($sql) === TRUE) {
            $_SESSION['error'] = 'Banner is updated successfully';
        } else {
            $_SESSION['error'] = 'Something is wrong';
        }
    }
    if(!empty($_FILES['image']) && !empty($status)){
        if (isset($_FILES["image"]) && $_FILES["image"]["error"] == UPLOAD_ERR_OK) {
            $tmp_name = $_FILES["image"]["tmp_name"];
            $file = explode('.',$_FILES["image"]["name"]);
            $ext = end($file);
            $name = time().'.'.$ext;
            $destination = "../../uploads/" . $name;
            if (move_uploaded_file($tmp_name, $destination)) {
                /*Update Functionality */
                if(!empty($_POST['bId']) && $_POST['bId'] > 0){
                    $sql1 = "SELECT * FROM banner WHERE id=".$_POST['bId'];
                    $result1 = mysqli_query($conn, $sql1);
                    if (mysqli_num_rows($result1) === 1) {
                        $row = mysqli_fetch_assoc($result1);
                        unlink('../../uploads/'.$row['image']);

                        $sql = "UPDATE banner SET image = '$name', status = '$status' WHERE id =".$_POST['bId'];
                        if ($conn->query($sql) === TRUE) {
                            $_SESSION['error'] = 'Banner is updated successfully';
                        } else {
                            $_SESSION['error'] = 'Something is wrong';
                        }
                    }
                }else{
                    /*Insert Functionality */
                    $sql = "INSERT INTO banner (image,status) VALUES ('$name','$status')";
                    $result = mysqli_query($conn, $sql);
                    if ($result == 1) {
                        $_SESSION['error'] = 'Banner is inserted successfully';
                    }else{
                        $_SESSION['error'] = 'Something is wrong';
                    }
                }
            } else {
                $_SESSION['error'] = 'Image is not uploaded';
            }
        } else {
            $_SESSION['error'] = 'Image is not uploaded';
        }
    }
}else{
    $_SESSION['error'] = 'Something is wrong';
}
header("Location: ../banner.php");
exit();
?>