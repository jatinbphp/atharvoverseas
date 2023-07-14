<?php
    include "dbConnection.php";

    if (isset($_POST['email']) && isset($_POST['password'])) {
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $email = validate($_POST['email']);
        $pass = validate($_POST['password']);
        $md5Password = md5($pass);

        if (empty($email)) {
            $_SESSION['error'] = 'Email is required';
            header("Location: ../index.php");
            exit();
        }else if(empty($pass)){
            $_SESSION['error'] = 'Password is required';
            header("Location: ../index.php");
            exit();
        }else{
            $sql = "SELECT * FROM user WHERE email='$email' AND password='$md5Password'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);
                if ($row['email'] === $email && $row['password'] === $md5Password) {
                    echo "Logged in!";
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['id'] = $row['id'];
                    header("Location: ../dashboard.php");
                    exit();
                }else{
                    $_SESSION['error'] = 'Incorrect Email or password';
                    header("Location: ../index.php");
                    exit();
                }
            }else{
                $_SESSION['error'] = 'Incorrect Email or password';
                header("Location: ../index.php");
                exit();
            }
        }
    }else{
        header("Location: ../index.php");
        exit();
    }
?>