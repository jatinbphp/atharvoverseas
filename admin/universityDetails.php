<!DOCTYPE html>
<html lang="en">
<?php
include "include/head.php";
include "include/navbar.php";
include "include/sidebar.php";
include "dbConnection.php";
$row = [];
$required = 'required';
if(isset($_GET['uId']) && !empty($_GET['uId'])){
    $sql = "SELECT * FROM country_university WHERE id=".$_GET['uId'];
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        $required = !empty($row) && !empty($row['profile_image']) ? '' : 'required';
    }
}

if(isset($_GET['cId']) && !empty($_GET['cId'])){
    $sql2 = "SELECT * FROM country WHERE id=".$_GET['cId'];
    $result2 = mysqli_query($conn, $sql2);
    if (mysqli_num_rows($result2) === 1) {
        $row2 = mysqli_fetch_assoc($result2);
    }
}

$fieldArr = ['overview','admission_procedure','highlight_of_the_medical_collage'];
?>
<body class="hold-transition sidebar-mini layout-navbar-fixed">
<div class="wrapper content-wrapper content-header">
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit University Details for <?php echo $row2['name'];?></h3>
                    </div>
                    <form action="postRequest/saveCountryUniversity.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="cId" value="<?php echo !empty($row2) ? $row2['id'] : 0; ?>">
                        <input type="hidden" name="uId" value="<?php echo isset($_GET['uId']) && !empty($_GET['uId']) ? $_GET['uId'] : 0; ?>">
                        <div class="card-body">
                            <div class="form-group">
                                <label class="col-md-12 control-label" for="profile_image">Profile Image <small class="text-red">*</small></label>
                                <div class="col-md-12">
                                    <input type="file" name="profile_image" class="form-control" id="image" <?php echo $required; ?>>
                                    <?php
                                    if(!empty($row) && !empty($row['profile_image']) && file_exists('../uploads/'.$row['profile_image'])){
                                        echo '<img src="../uploads/'.$row['profile_image'].'" class="mt-2" style="height: 100px; width: 100px;">';
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 control-label" for="university_name">University Name <small class="text-red">*</small></label>
                                <div class="col-md-12">
                                    <input type="text" name="university_name" class="form-control" id="university_name" value="<?php echo $row['university_name']?>" required>
                                </div>
                            </div>
                            <?php foreach ($fieldArr as $field){ ?>
                                <div class="form-group">
                                    <label class="col-md-12 control-label" for="<?php echo $field?>_title"><?php echo str_replace('_',' ', ucfirst($field))?> Title <small class="text-red"></small></label>
                                    <div class="col-md-12">
                                        <input type="text" name="<?php echo $field?>_title" class="form-control" id="<?php echo $field?>_title" value="<?php echo !empty($row[$field.'_title']) ? $row[$field.'_title'] : ""; ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12 control-label" for="<?php echo $field?>_content"><?php echo str_replace('_',' ', ucfirst($field))?> Content <small class="text-red"></small></label>
                                    <div class="col-md-12">
                                        <textarea name="<?php echo $field?>_content" class="summernote"><?php echo !empty($row[$field.'_content']) ? $row[$field.'_content'] : ""; ?></textarea>
                                    </div>
                                </div>
                            <?php }?>

                            <div class="form-group">
                                <label class="col-md-12 control-label" for="gallery_title">Gallery Title <small class="text-red"></small></label>
                                <div class="col-md-12">
                                    <input type="text" name="gallery_title" class="form-control" id="gallery_title" value="<?php echo !empty($row['gallery_title']) ? $row['gallery_title'] : ""; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12 control-label" for="image">University Gallery <small class="text-red">(Select multiple images)</small></label>
                                <div class="col-md-12">
                                    <input type="file" name="multiple_image[]" class="form-control" id="multiple_image" multiple>
                                    <?php
                                    if(!empty($row) && !empty($row['photo_gallery'])){
                                        $images = explode(',',rtrim($row['photo_gallery'],','));
                                        foreach ($images as $img) {
                                            echo '<img src="../uploads/' . $img . '" class="mt-2 mr-2" style="height: 100px; width: 100px;">';
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-info float-right" type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
</body>
<?php include('include/footer.php') ?>
</html>
