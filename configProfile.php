<?php
$conn = mysqli_connect('localhost', 
                       'root', 
                       '', 
                       'lam') 
or die ('Connection Error'); 
mysqli_set_charset($conn, "utf8");
if(isset($_POST['update']))
{  
    $password = mysqli_real_escape_string($conn, $_POST['password']);    
    $sql = "UPDATE customer SET  password = '$password' WHERE username = '{$_SESSION['username']}'";
    $result = mysqli_query($conn, $sql);
    if($result)
    {
        echo '<script language="javascript">alert("Update Successfully");window.location="updateComplete.php";</script>';
    }
    else
    {
        echo "<script>alert('Update Failed')</script>";
    }
}

?>