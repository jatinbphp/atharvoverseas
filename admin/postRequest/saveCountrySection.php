<?php
include "dbConnection.php";
if ($_POST) {
    $country = $_POST['cId'];
    $image = $_POST['image'];
    $content = htmlspecialchars_decode(mysqli_real_escape_string($conn,trim($_POST['content']))) ;
    $content2 = htmlspecialchars_decode(mysqli_real_escape_string($conn,trim($_POST['content2']))) ;
    $about_title = $_POST['about_title'];
    $about_content = htmlspecialchars_decode(mysqli_real_escape_string($conn,trim($_POST['about_content'])));
    $study_title = $_POST['study_title'];
    $study_content = htmlspecialchars_decode(mysqli_real_escape_string($conn,trim($_POST['study_content'])));
    $benefit_mbbs_title = $_POST['benefit_mbbs_title'];
    $benefit_mbbs_content = htmlspecialchars_decode(mysqli_real_escape_string($conn,trim($_POST['benefit_mbbs_content'])));
    $admission_title = $_POST['admission_title'];
    $admission_content = htmlspecialchars_decode(mysqli_real_escape_string($conn,trim($_POST['admission_content'])));
    $fee_title = $_POST['fee_title'];
    $fee_content = htmlspecialchars_decode(mysqli_real_escape_string($conn,trim($_POST['fee_content'])));
    $processing_title = $_POST['processing_title'];
    $processing_sub_title = $_POST['processing_sub_title'];
    $processing_content = htmlspecialchars_decode(mysqli_real_escape_string($conn,trim($_POST['processing_content'])));

    $highLights = [];
    $highLights['country_name'] = $_POST['country_name'];
    $highLights['country_code'] = $_POST['country_code'];
    $highLights['country_rank'] = $_POST['country_rank'];
    $highLights['currency'] = $_POST['currency'];
    $highLights['capital'] = $_POST['capital'];
    $highLights['weather'] = $_POST['weather'];
    $highLights['language'] = $_POST['language'];
    $highLights['accrediations'] = $_POST['accrediations'];
    $highLights['course_duration'] = $_POST['course_duration'];
    $highLights['teaching_medium'] = $_POST['teaching_medium'];
    $highLights['mess_facility'] = $_POST['mess_facility'];
    $highLights['university_type'] = $_POST['university_type'];
    $highLights['hostel_fees_range'] = $_POST['hostel_fees_range'];
    $highLights['tution_fees_range'] = $_POST['tution_fees_range'];

    $highLightJSON = htmlspecialchars_decode(mysqli_real_escape_string($conn,trim(json_encode($highLights))));

    $img_name = '';
    $sql = "SELECT * FROM country_section WHERE country=".$_POST['cId'];
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        $isNew = 0;
        $row = mysqli_fetch_assoc($result);
        $img_name = $row['image'];
    }else{
        $isNew = 1;
        $row = [];
    }

    if(!empty($_FILES['image'])){
        if (isset($_FILES["image"]) && $_FILES["image"]["error"] == UPLOAD_ERR_OK) {
            $tmp_name = $_FILES["image"]["tmp_name"];
            $file = explode('.',$_FILES["image"]["name"]);
            $ext = end($file);
            $name = time().'.'.$ext;
            $destination = "../../uploads/" . $name;
            if (move_uploaded_file($tmp_name, $destination)) {
                $img_name = $name;
                $_SESSION['error'] = 'Image is uploaded';
            } else {
                $_SESSION['error'] = 'Image is not uploaded';
            }
        } else {
            $_SESSION['error'] = 'Image is not uploaded';
        }
    }

    if($isNew == 1){
        $sql = "INSERT INTO country_section (country,image,content,content2,about_title,about_content,study_title,study_content,benefit_mbbs_title,
                             benefit_mbbs_content,admission_title,admission_content,fee_title,fee_content,highlights,processing_title,processing_sub_title,processing_content) 
                VALUES ('$country','$img_name','$content','$content2','$about_title','$about_content','$study_title','$study_content','$benefit_mbbs_title',
                        '$benefit_mbbs_content','$admission_title','$admission_content','$fee_title','$fee_content','$highLightJSON','$processing_title','$processing_sub_title','$processing_content')";
        $result = mysqli_query($conn, $sql);
        if ($result == 1) {
            $_SESSION['error'] = 'Country section is inserted successfully';
        }else{
            $_SESSION['error'] = 'Something is wrong';
        }
    }else{
        $sql = "UPDATE country_section SET image = '$img_name',
            content = '$content',
            content2 = '$content2',
            about_title = '$about_title',
            about_content = '$about_content',
            study_title = '$study_title',
            study_content = '$study_content',
            benefit_mbbs_title = '$benefit_mbbs_title',
            benefit_mbbs_content = '$benefit_mbbs_content',
            admission_title = '$admission_title',
            admission_content = '$admission_content',
            fee_title = '$fee_title',
            fee_content = '$fee_content',
            highlights = '$highLightJSON',
            processing_title = '$processing_title',
            processing_sub_title = '$processing_sub_title',
            processing_content = '$processing_content'
            WHERE country =".$_POST['cId'];
        if ($conn->query($sql) === TRUE) {
            $_SESSION['error'] = 'Country section is updated successfully';
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