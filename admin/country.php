<!DOCTYPE html>
<html lang="en">
<?php
include "include/head.php";
include "include/navbar.php";
include "include/sidebar.php";
include "dbConnection.php";

$sql = "SELECT * FROM country";
$result = mysqli_query($conn, $sql);
?>
<body class="hold-transition sidebar-mini layout-navbar-fixed">
<div class="wrapper content-wrapper content-header">
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Countries</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Budget</th>
                                <th style="width: 15%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $i = 1;
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)){
                                    ?>
                                    <tr id="country_<?php echo $row['id']; ?>" >
                                        <td><?php echo $i; ?></td>
                                        <td>
                                            <?php if(file_exists('../assets/flags/'.$row['image'])){?>
                                                <img src="../assets/flags/<?php echo $row['image']; ?>" style="height: 50px; width: 50px;">
                                            <?php }?>
                                        </td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['budget']; ?></td>
                                        <td>
                                            <div class="btn-group btn-group-sm">
                                                 <span data-toggle="modal" data-target="#countryModal_<?php echo $row['id']; ?>">
                                                    <button class="btn btn-sm btn-primary mr-2" type="button"><i class="fa fa-edit"></i></button>
                                                </span>
                                                <a href="mbbsDetails.php?cId=<?php echo $row['id']?>">
                                                    <span data-toggle="tooltip" title="Add MBBS Detail" data-trigger="hover">
                                                        <button class="btn btn-sm btn-success mr-2" type="button"><i class="fa fa-file-medical-alt"></i></button>
                                                    </span>
                                                </a>
                                                <a href="universityList.php?cId=<?php echo $row['id']?>">
                                                    <span data-toggle="tooltip" title="Add MBBS Detail" data-trigger="hover">
                                                        <button class="btn btn-sm btn-warning" type="button"><i class="fa fa-hospital"></i></button>
                                                    </span>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>

                                    <div class="modal fade" id="countryModal_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Budget</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="postRequest/saveCountry.php" method="POST" enctype="multipart/form-data">
                                                    <div class="modal-body">
                                                        <input type="hidden" name="cId" value="<?php echo $row['id']; ?>">
                                                        <div class="form-group">
                                                            <label class="col-md-12 control-label" for="image">Budget <small class="text-red">*</small></label>
                                                            <div class="col-md-12">
                                                                <input type="text" name="budget" class="form-control" id="budget">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-12 control-label" for="image">Is Display <small class="text-red">*</small></label>
                                                            <div class="col-md-12">
                                                                <div class="icheck-primary d-inline">
                                                                    <input type="checkbox" id="is_display" name="is_display" <?php echo $row['is_display'] == 1 ? 'checked' : ''; ?>>
                                                                    <label for="is_display"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
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
