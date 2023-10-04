<?php
require './conn.php';
require '../classes/User.php';
if (isset($_POST['isClickedSignupBtn'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = password_hash($password,PASSWORD_DEFAULT);
    $username = $_POST['username'];
    if (!empty($name) && !empty($email) && !empty($password) && !empty($username)){
        $sql = $conn->prepare(
            "Insert into `user` (name,username,email,password) values(?,?,?,?)"
        );
        $sql->bind_param('ssss',$name,$username,$email,$password);
        if ($sql->execute()){
            header("location: ../login.php?msg=Signup Successful. Please login to continue.");
        }

    }
}


if (isset($_POST['isClickedLoginBtn'])){
    $err = "";
    $email = $_POST['login_email'];
    $inppwd = $_POST['login_pwd'];
    echo "<script>console.log('$email + $inppwd')</script>";
    if (empty($_POST['login_email']) || empty($_POST['login_pwd'])){
        header("location: ../login.php?msg=Please fill all the required fields");
    }else{
        $stmt = $conn->query("Select * from `user` where email='$email'");
        if ($stmt->num_rows < 1 ){
            $err = "User with the email $email does not exist.";
        }else{
            while($row = $stmt->fetch_assoc()){
                $id = $row['id'];
                $name = $row['name'];
                $username = $row['username'];
                $password = $row['password'];
                $email = $row['email'];
            }

            if (password_verify($inppwd,$password)){
                $user = new User($id,$name,$username,$email,$password);
                session_start();
                $_SESSION['user'] = serialize($user);
                header('location: ../index.php');
            }else{
                header("location: ../login.php?msg=$err");
            }
        }
    }
}

?>


