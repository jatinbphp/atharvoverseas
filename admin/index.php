<!DOCTYPE html>
<html lang="en">
    <?php include('include/head.php') ?>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="index.php"><b>Atharv Overseas Education</b> <br>Admin</a>
            </div>
            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">Sign in to start your session</p>
                        <form role="form" method="POST" action="postRequest/login.php">
                            <div class="form-group has-feedback">
                                <input type="text" id="email" name="email" class="form-control" placeholder="Email" value="">
                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                            </div>
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="checkbox icheck">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <button type="submit" class="btn btn-danger btn-block btn-flat">Sign In</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
    <script type='text/javascript' src='http://code.jquery.com/jquery-1.11.0.min.js'></script>
    <script>
        $(document).ready( function() {
            <?php if(isset($_SESSION['error']) && !empty($_SESSION['error'])){ ?>
                alert('<?php echo $_SESSION['error']; $_SESSION['error'] = ''; ?>');
            <?php } ?>
        });
    </script>
</html>
