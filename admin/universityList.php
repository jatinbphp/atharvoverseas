<!DOCTYPE html>
<html lang="en">
<?php
include "include/head.php";
include "include/navbar.php";
include "include/sidebar.php";
include "dbConnection.php";

$sql = "SELECT * FROM country_university WHERE country=".$_GET['cId'];
$result = mysqli_query($conn, $sql);

$sql2 = "SELECT * FROM country WHERE id=".$_GET['cId'];
$result2 = mysqli_query($conn, $sql2);
if (mysqli_num_rows($result2) === 1) {
    $row2 = mysqli_fetch_assoc($result2);
}
?>
<body class="hold-transition sidebar-mini layout-navbar-fixed">
<div class="wrapper content-wrapper content-header">
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Universities Of <?php echo $row2['name']; ?></h3>
                        <a href="universityDetails.php?cId=<?php echo $row2['id']?>&is_new=1">
                            <button type="button" class="btn btn-info btn-sm float-right"><i class="fa fa-plus"></i>Add New</button>
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th style="width: 40px">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $i = 1;
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)){
                                    ?>
                                    <tr id="universuty_<?php echo $row['id']; ?>" >
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $row['university_name']; ?></td>
                                        <td>
                                            <?php if(file_exists('../uploads/'.$row['profile_image'])){?>
                                                <img src="../uploads/<?php echo $row['profile_image']; ?>" style="height: 100px; width: 100px;">
                                            <?php }?>
                                        </td>
                                        <td>
                                            <div class="btn-group btn-group-sm">
                                                <a href="universityDetails.php?uId=<?php echo $row['id']; ?>&cId=<?php echo $row['country']; ?>">
                                                    <span data-toggle="tooltip" title="Edit University" data-trigger="hover">
                                                        <button class="btn btn-sm btn-primary mr-2" type="button"><i class="fa fa-edit"></i></button>
                                                    </span>
                                                </a>
                                                <span data-toggle="tooltip" title="Delete University" data-trigger="hover">
                                                    <button class="btn btn-sm btn-danger delUniversityBtn" data-id="<?php echo $row['id']?>" type="button"><i class="fa fa-trash"></i></button>
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
