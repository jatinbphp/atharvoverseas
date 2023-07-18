<?php
include "dbConnection.php";
if ($_POST) {
    $country = $_POST['cId'];
    $overview_title = $_POST['overview_title'];
    $overview_content = mysqli_real_escape_string($conn,$_POST['overview_content']);
    $admission_title = $_POST['admission_procedure_title'];
    $admission_content = mysqli_real_escape_string($conn,$_POST['admission_procedure_content']);
    $highlight_title = $_POST['highlight_of_the_medical_collage_title'];
    $highlight_content = mysqli_real_escape_string($conn,$_POST['highlight_of_the_medical_collage_content']);
    $gallery_title = $_POST['gallery_title'];

    $sql = "SELECT * FROM country_university WHERE country=".$_POST['cId'];
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        $isNew = 0;
        $row = mysqli_fetch_assoc($result);
        $img_name = $row['photo_gallery'];
    }else{
        $isNew = 1;
        $row = [];
    }
    $img_name = '';
    $totalFiles = count($_FILES['multiple_image']['name']);
    for ($i = 0; $i < $totalFiles; $i++) {
        $name = '';
        $tmp_name = $_FILES["multiple_image"]["tmp_name"][$i];
        $file = explode('.',$_FILES["multiple_image"]["name"][$i]);
        $ext = end($file);
        $name = time().'.'.$ext;
        $destination = "../../uploads/" . $name;
        if (move_uploaded_file($tmp_name, $destination)) {
            $img_name .= $name.',';
            $_SESSION['error'] = 'Image is uploaded';
        } else {
            $_SESSION['error'] = 'Image is not uploaded';
        }
    }

    if($isNew == 1){
        $sql = "INSERT INTO country_university (country,overview_title,overview_content,admission_procedure_title,admission_procedure_content,highlight_of_the_medical_collage_title,highlight_of_the_medical_collage_content,gallery_title,photo_gallery) 
                VALUES ('$country','$overview_title','$overview_content','$admission_title','$admission_content','$highlight_title','$highlight_content','$gallery_title','$img_name')";
        $result = mysqli_query($conn, $sql);
        if ($result == 1) {
            $_SESSION['error'] = 'Country university is inserted successfully';
        }else{
            $_SESSION['error'] = 'Something is wrong';
        }
    }else{
        $sql = "UPDATE country_university SET 
            overview_title = '$overview_title',
            overview_content = '$overview_content',
            admission_procedure_title = '$admission_title',
            admission_procedure_content = '$admission_content',
            highlight_of_the_medical_collage_title = '$highlight_title',
            highlight_of_the_medical_collage_content = '$highlight_content',
            gallery_title = '$gallery_title',
            photo_gallery = '$img_name'
            WHERE country =".$_POST['cId'];
        if ($conn->query($sql) === TRUE) {
            $_SESSION['error'] = 'Country university is updated successfully';
        } else {
            $_SESSION['error'] = 'Something is wrong';
        }
    }
}else{
    $_SESSION['error'] = 'Something is wrong';
}
header("Location: ../country.php");
exit();
?>