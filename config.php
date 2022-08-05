<?php
$conn = mysqli_connect('localhost',
                       'root', 
                       '', 
                       'lam') 
or die ('Connection Errors'); 
mysqli_set_charset($conn, "utf8");
if(!isset($_SESSION)) { 
    session_start(); 
  } 
if(isset($_POST['register'])){
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "SELECT * FROM customer WHERE email = '$email'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0)
{
echo '<script language="javascript">alert("Your email Already Exist. Enter another Email");window.location="login&register.php";</script>';
die ();
}
else {
    $sql = "INSERT INTO customer (username, email, password) 
            VALUES ('$username', '$email', '$password')";
    echo '<script language="javascript">alert("Register Successfully!"); 
          window.location="login&register.php";</script>';
    $result = mysqli_query($conn, $sql);
}
}
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM customer 
            WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        $_SESSION['email'] = $row['email'];
        echo '<script language="javascript">alert("Login Successfully!"); 
        window.location="login&register.php";</script>';
        header("Location: home.php");
    }
    else
    {
        echo '<script language="javascript" >alert("Something Wrong"); 
        window.location="login&register.php";</script>';
    }
}
?>