<!DOCTYPE html>
<html lang="en">
<?php
include "include/head.php";
include "include/navbar.php";
include "include/sidebar.php";
include "dbConnection.php";
$row = [];
if(isset($_GET['id']) && !empty($_GET['id'])){
    $sql = "SELECT * FROM banner WHERE id=".$_GET['id'];
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
    }
}
?>
<body class="hold-transition sidebar-mini layout-navbar-fixed">
<div class="wrapper content-wrapper content-header">
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><?php echo isset($_GET['id']) && !empty($_GET['id']) ? 'Edit' : 'Add'; ?> Banner</h3>
                    </div>
                    <form action="postRequest/saveBanner.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="bId" value="<?php echo isset($_GET['id']) && !empty($_GET['id']) ? $_GET['id'] : 0; ?>">
                        <div class="card-body">
                            <div class="form-group">
                                <label class="col-md-12 control-label" for="image">Image <small class="text-red">*</small></label>
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
                                <label class="col-md-12 control-label" for="status">Status <small class="text-red">*</small></label>
                                <div class="col-md-12">
                                    <label class="ml-3">
                                        <input class="form-check-input" type="radio" name="status" value="active" <?php echo !empty($row) && $row['status'] == 'active' ? 'checked' : '';?> required> <span class="mr-5">Active</span>
                                        <input class="form-check-input" type="radio" name="status" value="inactive" <?php echo !empty($row) && $row['status'] == 'inactive' ? 'checked' : '';?> required> <span style="margin-right: 10px">Inactive</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="banner.php" ><button class="btn btn-default" type="button">Back</button></a>
                            <button class="btn btn-info float-right" type="submit">Add</button>
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
