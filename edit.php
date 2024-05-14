<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
        header("Location: index.php");
       }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetaniPintar - Edit Profil</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
</head>

<body class="body-fixed">
    <header class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header-logo">
                        <a href="menu.php">
                            <img src="image/logo_petanipintar.png" width="40" height="40" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="main-navigation">
                        <button class="menu-toggle"><span></span><span></span></button>
                        <nav class="header-menu">
                            <ul class="menu">
                                <li>
                                    <button onclick="window.location.href='profile.php'" class="signup">Kembali</button>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div id="viewport">
        <div id="js-scroll-content">
            <div class="repeat-img" style="background-image: url(image/pattern1_background.png);">
                <div section="main-banner">
                    <div class="sec-wp">
                        <div class="box-container">
                            <div class="box form-box">
                            <?php 
                            if(isset($_POST['submit'])){
                                $email = $_POST['email'];
                                $username = $_POST['username'];
                                $fullname = $_POST['fullname'];
                                $age = $_POST['age'];

                                $id = $_SESSION['id'];

                                $edit_query = mysqli_query($con,"UPDATE users SET Username='$username', Email='$email', Fullname='$fullname', Age='$age' WHERE Id=$id ") or die("error occurred");

                                if($edit_query){
                                    echo "<div class='message'>
                                        <h5><b>Profil Diperbarui!</b></h5>
                                    </div> <br>";
                                    echo "<a href='profile.php'><center><button class='signin'>Kembali ke Profil Akun</button></center>";
                    
                                }
                            }else{

                                $id = $_SESSION['id'];
                                $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id ");

                                while($result = mysqli_fetch_assoc($query)){
                                    $res_Email = $result['Email'];
                                    $res_Uname = $result['Username'];
                                    $res_Fullname = $result['Fullname'];
                                    $res_Age = $result['Age'];
                                }

                            ?>
                            <header>Change Profile</header>
                            <form action="" method="post">
                                <div class="field input">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" id="email" value="<?php echo $res_Email; ?>" autocomplete="off" required>
                                </div>
                                
                                <div class="field input">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" id="username" value="<?php echo $res_Uname; ?>" autocomplete="off" required>
                                </div>

                                <div class="field input">
                                    <label for="fullname">Nama Lengkap</label>
                                    <input type="text" name="fullname" id="fullname" value="<?php echo $res_Fullname; ?>" autocomplete="off" required>
                                </div>

                                <div class="field input">
                                    <label for="age">Umur</label>
                                    <input type="number" name="age" id="age" value="<?php echo $res_Age; ?>" autocomplete="off" required>
                                </div>
                                
                                <div class="field">
                                    
                                    <input type="submit" class="btn" name="submit" value="Update" required>
                                </div>
                                
                            </form>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
