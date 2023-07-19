<?php
include "dbConnection.php";
if ($_POST) {
    /*Delete Functionality */
    if(isset($_POST['type']) && !empty($_POST['type']) && $_POST['type'] == 'delete'){
        $sql1 = "SELECT * FROM country_university WHERE id=".$_POST['id'];
        $result1 = mysqli_query($conn, $sql1);
        if (mysqli_num_rows($result1) === 1) {
            $row = mysqli_fetch_assoc($result1);
            unlink('../../uploads/' . $row['image']);

            $photos = explode(',',$row['photo_gallery']);
            if(!empty($photos)){
                foreach ($photos as $img){
                    unlink('../../uploads/' . $img);
                }
            }
        }
        $sql2 = "DELETE FROM country_university WHERE id=".$_POST['id'];
        $result2 = mysqli_query($conn, $sql2);
        echo 'University is deleted successfully';
        exit();
    }

    $sql2 = "SELECT * FROM country WHERE id=".$_POST['cId'];
    $result3 = mysqli_query($conn, $sql2);
    if (mysqli_num_rows($result3) === 1) {
        $row2 = mysqli_fetch_assoc($result3);
    }

    $universityId = $_POST['uId'];
    $country = $_POST['cId'];
    $university_name = $_POST['university_name'];
    $profile_image = $_POST['profile_image'];
    $overview_title = $_POST['overview_title'];
    $overview_content = mysqli_real_escape_string($conn,$_POST['overview_content']);
    $admission_title = $_POST['admission_procedure_title'];
    $admission_content = mysqli_real_escape_string($conn,$_POST['admission_procedure_content']);
    $highlight_title = $_POST['highlight_of_the_medical_collage_title'];
    $highlight_content = mysqli_real_escape_string($conn,$_POST['highlight_of_the_medical_collage_content']);
    $fees_title = $_POST['fees_title'];
    $fees_content = mysqli_real_escape_string($conn,$_POST['fees_content']);
    $courses_title = $_POST['courses_title'];
    $courses_content = mysqli_real_escape_string($conn,$_POST['courses_content']);
    $gallery_title = $_POST['gallery_title'];
    $slug = trim(str_replace(' ','-',strtolower($university_name)).'-study-mbbs-in-'.strtolower($row2['name']));

    $sql = "SELECT * FROM country_university WHERE id=".$universityId;
    $result = mysqli_query($conn, $sql);
    $img_name = '';
    if (mysqli_num_rows($result) === 1) {
        $isNew = 0;
        $row = mysqli_fetch_assoc($result);
        $profile_image_name = $row['profile_image'];
        $img_name = $row['photo_gallery'];
    }else{
        $isNew = 1;
        $row = [];
    }

    if(!empty($_FILES['profile_image'])){
        if (isset($_FILES["profile_image"]) && $_FILES["profile_image"]["error"] == UPLOAD_ERR_OK) {
            $tmp_name1 = $_FILES["profile_image"]["tmp_name"];
            $file1 = explode('.',$_FILES["profile_image"]["name"]);
            $ext1 = end($file1);
            $name1 = time().'.'.$ext1;
            $destination1 = "../../uploads/" . $name1;
            if (move_uploaded_file($tmp_name1, $destination1)) {
                $profile_image_name = $name1;
                $_SESSION['error'] = 'Profile image is uploaded';
            } else {
                $_SESSION['error'] = 'Image is not uploaded';
            }
        } else {
            $_SESSION['error'] = 'Image is not uploaded';
        }
    }

    $galleryImages = [];
    $totalFiles = $_FILES['multiple_image']['name'];

    if(count($totalFiles) > 0) {
        foreach ($totalFiles as $key => $img){
            if(!empty($img)){
                $name = '';
                $tmp_name = $_FILES["multiple_image"]["tmp_name"][$key];
                $file = explode('.', $_FILES["multiple_image"]["name"][$key]);
                $ext = end($file);
                $name = time().$key. '.' . $ext;
                $destination = "../../uploads/" . $name;
                if (move_uploaded_file($tmp_name, $destination)) {
                    $galleryImages[$key] = $name;
                }
            }
        }
        if(!empty($galleryImages)){
            $img_name = implode(',',$galleryImages);
        }
    }

    if($isNew == 1){
        $sql = "INSERT INTO country_university (country,slug,university_name,profile_image,overview_title,overview_content,
                                admission_procedure_title,admission_procedure_content,highlight_of_the_medical_collage_title,
                                fees_title,fees_content,courses_title,courses_content,highlight_of_the_medical_collage_content,
                                gallery_title,photo_gallery) 
                VALUES ('$country','$slug','$university_name','$profile_image_name','$overview_title','$overview_content',
                        '$admission_title','$admission_content','$highlight_title','$fees_title','$fees_content','$courses_title',
                        '$courses_content','$highlight_content','$gallery_title','$img_name')";
        $result = mysqli_query($conn, $sql);
        if ($result == 1) {
            $_SESSION['error'] = 'Country university is inserted successfully';
        }else{
            $_SESSION['error'] = 'Something is wrong';
        }
    }else{
        $sql = "UPDATE country_university SET 
            slug = '$slug',
            university_name = '$university_name',
            profile_image = '$profile_image_name',
            overview_title = '$overview_title',
            overview_content = '$overview_content',
            admission_procedure_title = '$admission_title',
            admission_procedure_content = '$admission_content',
            highlight_of_the_medical_collage_title = '$highlight_title',
            highlight_of_the_medical_collage_content = '$highlight_content',            
            fees_title = '$fees_title',
            fees_content = '$fees_content',
            courses_title = '$courses_title',
            courses_content = '$courses_content',
            gallery_title = '$gallery_title',
            photo_gallery = '$img_name'
            WHERE id =".$universityId;
        if ($conn->query($sql) === TRUE) {
            $_SESSION['error'] = 'Country university is updated successfully';
        } else {
            $_SESSION['error'] = 'Something is wrong';
        }
    }
}else{
    $_SESSION['error'] = 'Something is wrong';
}
header("Location: ../universityList.php?cId=".$country);
exit();
?>