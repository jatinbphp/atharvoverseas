<!DOCTYPE html>
<html lang="en">
<?php
include "include/head.php";
include "include/navbar.php";
include "include/sidebar.php";
include "dbConnection.php";
$row = [];
if(isset($_GET['id']) && !empty($_GET['id'])){
    $sql = "SELECT * FROM offices WHERE id=".$_GET['id'];
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
                        <h3 class="card-title"><?php echo isset($_GET['id']) && !empty($_GET['id']) ? 'Edit' : 'Add'; ?> Corporate Office</h3>
                    </div>
                    <form action="postRequest/saveOffice.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="oId" value="<?php echo isset($_GET['id']) && !empty($_GET['id']) ? $_GET['id'] : 0; ?>">
                        <div class="card-body">
                            <div class="form-group">
                                <label class="col-md-12 control-label" for="title">State Name <small class="text-red"></small></label>
                                <div class="col-md-12">
                                    <input type="text" name="state_name" class="form-control" id="state_name" value="<?php echo !empty($row) ? $row['state_name'] : ''; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12 control-label" for="title">Address <small class="text-red"></small></label>
                                <div class="col-md-12">
                                    <input type="text" name="address" class="form-control" id="address" value="<?php echo !empty($row) ? $row['address'] : ''; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12 control-label" for="title">Google Map Link <small class="text-red"></small></label>
                                <div class="col-md-12">
                                    <input type="text" name="google_map_link" class="form-control" id="google_map_link" value="<?php echo !empty($row) ? $row['google_map_link'] : ''; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="office.php" ><button class="btn btn-default" type="button">Back</button></a>
                            <button class="btn btn-info float-right" type="submit"><?php echo isset($_GET['id']) && !empty($_GET['id']) ? 'Update' : 'Add'; ?></button>
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
