 <?php require "../database.php";
 if(isset($_POST['login'])){
    if(!empty($_POST['email'] && $_POST['password'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $getUserData = mysqli_query($connect,"select * from student_tb where email='$email' ");

        $result = mysqli_num_rows($getUserData);

        if ($result==1){
            $userData = mysqli_fetch_assoc($getUserData);
            $_SESSION['stID'] = $userData['student_id'];
            
            header("location:../studentPortal/st_dashboard.php");
            exit();
            } else{
                echo "Invalid Email or Password";
        }
    } else{
        echo "Please fill all the fields";
    }
 }

?> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School college</title>
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
<div class="logo"><img style="width: 20%; align-items: center; margin-left: 40%; margin-bottom: -3%;" src="../studentPortal/images/schoolLogo.jpg"></div>
    <div class="welcome-text"></div>
    <h2 style="text-align:center; color:rgb(12, 6, 99); margin-top:10px; font-size:2.3rem;">WELCOME TO ST. EMMANUEL COLLEGE</h2>
    </div>

    <div class="form-container">
        <form onsubmit="return loginValidation()" method="POST">
            <h2 style="text-align: center; color: rgb(12, 6, 99);">LOGIN</h2>

            <label for="email">Email Address</label>
            <input type="email" placeholder="Example@gmail.com" id="email" name="email" required>

            <label for="password">Password</label>
            <input type="password" id="password" placeholder="Password" name="password" required>   

            <button type="submit" name="login">Login</button>

            <div id="error" style="color: red;"></div>
        </form>
    </div>
</body>
<script src="../studentPortal/login.js"></script>
</html>