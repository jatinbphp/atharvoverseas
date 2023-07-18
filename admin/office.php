<!DOCTYPE html>
<html lang="en">
<?php
include "include/head.php";
include "include/navbar.php";
include "include/sidebar.php";
include "dbConnection.php";

$sql = "SELECT * FROM offices";
$result = mysqli_query($conn, $sql);
?>
<body class="hold-transition sidebar-mini layout-navbar-fixed">
<div class="wrapper content-wrapper content-header">
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Corporate Offices</h3>
                        <a href="officeForm.php">
                            <button type="button" class="btn btn-info btn-sm float-right"><i class="fa fa-plus"></i>Add New</button>
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>State</th>
                                <th>Address</th>
                                <th style="width: 40px">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $i = 1;
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)){
                                    ?>
                                    <tr id="banner_<?php echo $row['id']; ?>" >
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $row['state_name']; ?></td>
                                        <td><?php echo $row['address']; ?></td>
                                        <td>
                                            <div class="btn-group btn-group-sm">
                                                <a href="officeForm.php?id=<?php echo $row['id']?>">
                                                    <span data-toggle="tooltip" title="Edit Banner" data-trigger="hover">
                                                        <button class="btn btn-sm btn-primary mr-2" type="button"><i class="fa fa-edit"></i></button>
                                                    </span>
                                                </a>
                                                <span data-toggle="tooltip" title="Delete Banner" data-trigger="hover">
                                                    <button class="btn btn-sm btn-danger delBtn" data-id="<?php echo $row['id']?>" type="button"><i class="fa fa-trash"></i></button>
                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                    $i++;
                                }
                            }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</body>
<?php include('include/footer.php') ?>
</html>
