<!DOCTYPE html>
<html lang="en">
<?php
include "include/head.php";
include "include/navbar.php";
include "include/sidebar.php";
include "dbConnection.php";

$sql = "SELECT * FROM contact_us";
$result = mysqli_query($conn, $sql);
?>
<body class="hold-transition sidebar-mini layout-navbar-fixed">
<div class="wrapper content-wrapper content-header">
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Contact Us List</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th style="width: 10px;">#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Contact No</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <!--<th style="width: 40px">Action</th>-->
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $i = 1;
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)){
                                    ?>
                                    <tr id="contact_<?php echo $row['id']; ?>" >
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['contact_no']; ?></td>
                                        <td><?php echo $row['subject']; ?></td>
                                        <td><?php echo $row['message']; ?></td>
                                        <!--<td>
                                            <div class="btn-group btn-group-sm">
                                                <span data-toggle="tooltip" title="Delete Banner" data-trigger="hover">
                                                    <button class="btn btn-sm btn-danger delBtn" data-id="<?php echo $row['id']?>" type="button"><i class="fa fa-trash"></i></button>
                                                </span>
                                            </div>
                                        </td>-->
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
