<!DOCTYPE html>
<html lang="en">
<?php
include "include/head.php";
include "include/navbar.php";
include "include/sidebar.php";
include "dbConnection.php";
$row = [];
if(isset($_GET['id']) && !empty($_GET['id'])){
    $sql = "SELECT * FROM section WHERE id=".$_GET['id'];
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
                        <h3 class="card-title">Edit <?php echo isset($_GET['section']) && !empty($_GET['section']) ? $_GET['section'].' '.'Section' : ''?> </h3>
                    </div>
                    <form action="postRequest/saveSection.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="sId" value="<?php echo isset($_GET['id']) && !empty($_GET['id']) ? $_GET['id'] : 0; ?>">
                        <input type="hidden" name="menu" value="<?php echo isset($_GET['section']) && !empty($_GET['section']) ? $_GET['section'] : ''; ?>">
                        <div class="card-body">
                            <div class="form-group">
                                <label class="col-md-12 control-label" for="title">Title <small class="text-red">*</small></label>
                                <div class="col-md-12">
                                    <input type="text" name="title" class="form-control" id="title" value="<?php echo $row['title']?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12 control-label" for="content">Content <small class="text-red">*</small></label>
                                <div class="col-md-12">
                                    <textarea name="content" id="summernote"><?php echo $row['content']?></textarea>
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
