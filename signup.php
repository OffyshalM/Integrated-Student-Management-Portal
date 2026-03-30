 <?php require "../database.php";
// School_Management_System


if (isset($_POST['registrationBtn'])){
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$dob = $_POST['dob'];
$gender = isset($_POST["gender"]) ? $_POST['gender'] : '';
$password = sha1($_POST['password']);
$confirmpassword = sha1($_POST['confirmpassword']);


$saveData = mysqli_query($connect,"insert into student_tb (firstname,lastname,email,phone,dob,gender,password,confirmpassword) values('$firstname','$lastname','$email','$phone','$dob','$gender','$password','$confirmpassword')");

if ($saveData){
    header("location:../studentPortal/st_dashboard.php");
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
<div class="logo"><img style="width: 20%; align-items: center; margin-left: 40%;" src="../studentPortal/images/schoolLogo.jpg"></div>
     
    <div class="welcome-text">
        <h2>WELCOME TO ST. EMMANUEL COLLEGE</h2>
    </div>
    <div class="form-container">
        <a href="../studentPortal/login.php " target="_blank" class="loginBtn"> Login <i class="fas fa-arrow-right"></i> </a>
        <form method="POST" onsubmit="return formValidation()">
            <h2 style="text-align: center; color: rgb(12, 6, 99);">REGISTER HERE</h2>
            <label for="firstname">Firstname</label>
            <input type="text" id="firstname" placeholder="Firstname" name="firstname" required>
            <label for="lastname">Lastname</label>
            <input type="text" placeholder="Lastname" id="lastname" name="lastname" required>
            <label for="email">Email Address</label>
            <input type="email" placeholder="Example@gmail.com" id="email" name="email" required>
            <label for="phone">Phone Number</label>
            <input type="tel" placeholder="PhoneNo" id="phone" name="phone" required>
            <label for="dob">Date of birth</label>
            <input type="date" id="dob" name="dob" required>
            <label for="gender">Gender</label>
            <div class="gender" style="display: flex; margin-bottom: 1rem;">
                <label for="male">
                    <input type="radio" name="gender" value="male" id="male"> Male
                </label>
                <label for="female">
                    <input type="radio" name="gender" value="female" id="female"> Female
                </label>
            </div>
            <label for="password">Password</label>
            <input type="password" id="password" placeholder="Password" name="password" required>
            <label for="confirmpassword">Confirm Password</label>
            <input type="password" id="confirmpassword" placeholder="Confirm Password" name="confirmpassword" required>
            <button type="submit" name="registrationBtn">Register</button>
        </form>
    </div>
    <div id="error" style="color: red;"></div>
</body>
<script src="../studentPortal/index.js"></script>
</html>