<!DOCTYPE html>
<html lang="en">
<?php
include "include/head.php";
include "include/navbar.php";
include "include/sidebar.php";
include "dbConnection.php";
$row = [];
if(isset($_GET['cId']) && !empty($_GET['cId'])){
    $sql = "SELECT * FROM country_section WHERE country=".$_GET['cId'];
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
    }

    $sql2 = "SELECT * FROM country WHERE id=".$_GET['cId'];
    $result2 = mysqli_query($conn, $sql2);
    if (mysqli_num_rows($result2) === 1) {
        $row2 = mysqli_fetch_assoc($result2);
    }

    $highlights = ['country_name','country_code','country_rank','currency','capital','weather','language','accrediations','course_duration','teaching_medium',
        'mess_facility','university_type','hostel_fees_range','tution_fees_range'];


    $fieldArr = ['about','study','benefit_mbbs','admission','fee','processing'];
}
?>
<body class="hold-transition sidebar-mini layout-navbar-fixed">
<div class="wrapper content-wrapper content-header">
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit MBBS Details Of <?php echo $row2['name']; ?></h3>
                    </div>
                    <form action="postRequest/saveCountrySection.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="cId" value="<?php echo isset($_GET['cId']) && !empty($_GET['cId']) ? $_GET['cId'] : 0; ?>">
                        <div class="card-body">
                            <div class="form-group">
                                <label class="col-md-12 control-label" for="image">Image <small class="text-red"></small></label>
                                <div class="col-md-12">
                                    <input type="file" name="image" class="form-control" id="image">
                                    <?php
                                    if(!empty($row) && !empty($row['image']) && file_exists('../uploads/'.$row['image'])){
                                        echo '<img src="../uploads/'.$row['image'].'" class="mt-2" style="height: 100px; width: 100px;">';
                                    }
                                    ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12 control-label" for="content">Content <small class="text-red"></small></label>
                                <div class="col-md-12">
                                    <textarea name="content" id="summernote"><?php echo !empty($row['content']) ? $row['content'] : ""; ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12 control-label" for="content">Content 2 <small class="text-red"></small></label>
                                <div class="col-md-12">
                                    <textarea name="content2" class="summernote"><?php echo !empty($row['content2']) ? $row['content2'] : ""; ?></textarea>
                                </div>
                            </div>

                            <div class="row border">
                                <div class="col-md-12 text-center my-2 border-bottom"><h4 class="font-weight-bold">MBBS in <?php echo $row2['name']?>: HighLights</h4></div>
                                <?php
                                    $highlightJSON = !empty($row) && !empty($row['highlights']) ? json_decode($row['highlights']) : [];
                                    $highlightData = !empty($highlightJSON) ? $highlightJSON : $highlights;

                                    foreach ($highlightData as $key => $list){
                                        $label = !empty($highlightJSON) ? $key : $list;
                                        $value = !empty($highlightJSON) ? $list : '';

                                        if(!empty($highlightJSON)){
                                            $value = $list;
                                        }else{
                                            $value = $key == 0 ?  $row2['name'] : ($key == 1 ? $row2['code'] : '');
                                        }

                                        $readOnly = in_array($key, [0,1]) ?  'readonly' : '';
                                ?>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-md-12 control-label"><?php echo ucwords(str_replace('_',' ', $label))?> <small class="text-red"></small></label>
                                            <div class="col-md-12">
                                                <input type="text" name="<?php echo $label?>" class="form-control" value="<?php echo $value; ?>">
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>

                            <?php
                                foreach ($fieldArr as $field){
                            ?>
                                    <div class="form-group">
                                        <label class="col-md-12 control-label" for="<?php echo $field?>_title"><?php echo str_replace('_',' ', ucfirst($field))?> Title <small class="text-red"></small></label>
                                        <div class="col-md-12">
                                            <input type="text" name="<?php echo $field?>_title" class="form-control" id="<?php echo $field?>_title" value="<?php echo !empty($row[$field.'_title']) ? $row[$field.'_title'] : ""; ?>">
                                        </div>
                                    </div>

                                    <?php
                                        if($field == 'processing'){
                                    ?>
                                            <div class="form-group">
                                                <label class="col-md-12 control-label" for="<?php echo $field?>_sub_title"><?php echo str_replace('_',' ', ucfirst($field))?> Sub Title <small class="text-red"></small></label>
                                                <div class="col-md-12">
                                                    <input type="text" name="<?php echo $field?>_sub_title" class="form-control" id="<?php echo $field?>_sub_title" value="<?php echo !empty($row[$field.'_sub_title']) ? $row[$field.'_sub_title'] : ""; ?>">
                                                </div>
                                            </div>
                                    <?php }?>

                                    <div class="form-group">
                                        <label class="col-md-12 control-label" for="<?php echo $field?>_content"><?php echo str_replace('_',' ', ucfirst($field))?> Content <small class="text-red"></small></label>
                                        <div class="col-md-12">
                                            <textarea name="<?php echo $field?>_content" class="summernote"><?php echo !empty($row[$field.'_content']) ? $row[$field.'_content'] : ""; ?></textarea>
                                        </div>
                                    </div>
                            <?php }?>
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
