<?php
include "dbConnection.php";
if ($_POST) {
    $country = $_POST['country'];
    $image = $_POST['image'];
    $content = $_POST['content'];
    $about_title = $_POST['about_title'];
    $about_content = $_POST['about_content'];
    $study_title = $_POST['study_title'];
    $study_content = $_POST['study_content'];
    $benefit_mbbs_title = $_POST['benefit_mbbs_title'];
    $benefit_mbbs_content = $_POST['benefit_mbbs_content'];
    $admission_title = $_POST['admission_title'];
    $admission_content = $_POST['admission_content'];
    $fee_title = $_POST['fee_title'];
    $fee_content = $_POST['fee_content'];

    $highLights = [
        'country_name' => $_POST['country_name'],
        'country_code' => $_POST['country_code'],
        'country_rank' => $_POST['country_rank'],
        'currency' => $_POST['currency'],
        'capital' => $_POST['capital'],
        'weather' => $_POST['weather'],
        'language' => $_POST['language'],
        'accrediations' => $_POST['accrediations'],
        'course_duration' => $_POST['course_duration'],
        'teaching_medium' => $_POST['teaching_medium'],
        'mess_facility' => $_POST['mess_facility'],
        'university_type' => $_POST['university_type'],
        'hostel_fees_range' => $_POST['hostel_fees_range'],
        'tution_fees_range' => $_POST['tution_fees_range'],
    ];

    $highLightJSON = json_encode($highLights);

    $img_name = '';
    $sql = "SELECT * FROM country_section WHERE country=".$_GET['cId'];
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        $isNew = 1;
        $row = mysqli_fetch_assoc($result);
    }else{
        $isNew = 0;
        $row = [];
    }

    if(!empty($status)){
        $sql = "UPDATE banner SET status = '$status' WHERE id =".$_POST['bId'];
        if ($conn->query($sql) === TRUE) {
            $_SESSION['error'] = 'Banner is updated successfully';
        } else {
            $_SESSION['error'] = 'Something is wrong';
        }
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
                $_SESSION['error'] = 'Image is not uploaded';
            } else {
                $_SESSION['error'] = 'Image is not uploaded';
            }
        } else {
            $_SESSION['error'] = 'Image is not uploaded';
        }
    }

    if($isNew == 1){
        $sql = "INSERT INTO country_section (country,image,content,about_title,about_content,study_title,study_content,benefit_mbbs_title,
                             benefit_mbbs_content,admission_title,admission_content,fee_title,fee_content) 
                VALUES ('$country','$image','$content','$about_title','$about_content','$study_title','$study_content','$benefit_mbbs_title',
                        '$benefit_mbbs_content','$admission_title','$admission_content','$fee_title','$fee_content',)";
        $result = mysqli_query($conn, $sql);
        if ($result == 1) {
            $_SESSION['error'] = 'Banner is inserted successfully';
        }else{
            $_SESSION['error'] = 'Something is wrong';
        }
    }else{

    }
}else{
    $_SESSION['error'] = 'Something is wrong';
}
header("Location: ../country.php");
exit();
?>