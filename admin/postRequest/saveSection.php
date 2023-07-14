<?php
include "dbConnection.php";
if ($_POST) {
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $title = validate($_POST['title']);
    $content = validate($_POST['content']);

    if(!empty($_POST['sId']) && $_POST['sId'] > 0 && !empty($content)){
        $sql = "UPDATE section SET title = '$title', content = '$content' WHERE id =".$_POST['sId'];
        if ($conn->query($sql) === TRUE) {
            $_SESSION['error'] = 'Section is updated successfully';
        } else {
            $_SESSION['error'] = 'Something is wrong';
        }
    }else{
        $_SESSION['error'] = 'Something is wrong';
    }
}else{
    $_SESSION['error'] = 'Something is wrong';
}
header("Location: ../section.php?id=".$_POST['sId'].'&section='.$_POST['menu']);
exit();
?>