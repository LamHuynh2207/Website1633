
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <p class="toggle-btn">User Information</p>
            </div>
            <form id="login" method="post" class="input-group">
                <?php
                $conn = mysqli_connect('localhost', 'root', '', 'lam') 
                or die ('Connection Errors'); 
                mysqli_set_charset($conn, "utf8");
                session_start();
                $profileUser = $_SESSION['username'];
                $sql = "SELECT * FROM customer WHERE username = '$profileUser'";

                $result = mysqli_query($conn, $sql);

                if($result)
                {
                    if(mysqli_num_rows($result) > 0)
                    {
                        while($row = mysqli_fetch_array($result))
                        {
                            ?>
                            <input type="text" class="input-field" name="username" value="<?php echo $row['username']; ?>" >
                            <input type="email" class="input-field" name="email" value="<?php echo $row['email']; ?>" disabled>
                            <input type="password" class="input-field" name="password" value="<?php echo $row['password']; ?>">
                            <input type="submit" name="update" class="submit-btn" value="Save Change">
                            <?php require 'configProfile.php';?>
                            <?php
                        }
                    }
                }
            ?> 
            </form>
        </div>
    </div>  
</body>
</html>