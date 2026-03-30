<?php require "../database.php";

if (isset($_SESSION['stID'])){
 $stuID = $_SESSION['stID'];
 $getStudentData = mysqli_query($connect, "select * from student_tb where student_id ='$stuID'");

 $fetchStudentData = mysqli_fetch_assoc($getStudentData);

 $studentfirstName = $fetchStudentData['firstname'];
 $studentlastName = $fetchStudentData['lastname'];

 $fullName = $studentfirstName ." ". $studentlastName;
} 
// else{
//     header("location: ../studentPortal/login.php");
// }

?>
<html lang="en"></html>

<head>
    <link rel="stylesheet" href="../studentPortal/registration.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>St Emmanuel college</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <header>
        <div class="name-container">
            <h1 style="font-family: 'poppins';">ST. EMMANUEL COLLEGE</h1>
        </div>
        <div class="search-btn">
            <input type="text" placeholder="Search">
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>

        <div class="studentProfile">
            <div class="userPic">
                <img src="../studentPortal/images/UserProfile.jpg">
            </div>
            <div class="studentName">
                <span> <?php echo $fullName ?></span>
                <p>300 Level</p>
            </div>
        </div>


        <div class="notification">
            <i class="fas fa-bell" style="color: rgb(12, 6, 99);"></i>
            <span class="notification-badge"></span>
        </div>
    </header>

    <section>
        <div class="content">
            <nav class="sidebar">
                <div class="sidebarPic">
                    <img src="../studentPortal/images/schoolLogo2.jpeg" alt="">
                </div>
                <ul class="sidebarLinks">
                    <li><i class="fa-solid fa-chart-simple"></i><a href="../studentPortal/st_dashboard.php">Dashboard</a></li>
                    <li><i class="fa-solid fa-money-check"></i><a href="#">payment info</a></li>
                    <li><i class="fa-regular fa-pen-to-square"></i><a href="">Registration</a></li>
                    <li><i class="fas fa-poll"></i>
                        <a href="#">Result</a>
                    </li>
                    <li><i class="fas fa-calendar-alt"></i>
                        <a href="#">Schedule</a>
                    </li>
                    <li><i class="fas fa-book"></i>
                        <a href="#">Courses</a>
                    </li>
                    <br>

                    <li><i class="fas fa-sign-out-alt"></i>
                         <a href="#">Log out</a>
                    </li>
                </ul>
            </nav>

            <div class="container">
                <h2>Semester Courses</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Course Title</th>
                            <th>Code</th>
                            <th>Unit</th>
                            <th>Type</th>
                            <th>Session</th>
                            <th>Level</th>
                            <th>Semester</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Government,Society And Economy</td>
                            <td>GES103</td>
                            <td>2</td>
                            <td>GES</td>
                            <td>2023/2024</td>
                            <td>300</td>
                            <td>First Semester</td>
                            <td><input type="checkbox" checked></td>
                        </tr>
                        <tr>
                            <tr>
                                <td>Intro To Enterpreneur Skills</td>
                                <td>GES 301</td>
                                <td>2</td>
                                <td>GES</td>
                                <td>2023/2024</td>
                                <td>300</td>
                                <td>First Semester</td>
                                <td><input type="checkbox" checked></td>
                            </tr>
                            <tr>
                                <td>African Cultures And Civilization</td>
                                <td>GES102</td>
                                <td>2</td>
                                <td>GES</td>
                                <td>2023/2024</td>
                                <td>300</td>
                                <td>First Semester</td>
                                <td><input type="checkbox" checked></td>
                            </tr>
                            <tr>
                                <td>System Analysis And Design</td>
                                <td>CSC302</td>
                                <td>3</td>
                                <td>CSC</td>
                                <td>2023/2024</td>
                                <td>300</td>
                                <td>First Semester</td>
                                <td><input type="checkbox" checked></td>
                            </tr>
                            <tr>
                                <td>Computer Operating System I</td>
                                <td>CSC 321</td>
                                <td>4</td>
                                <td>CSC</td>
                                <td>2023/2024</td>
                                <td>300</td>
                                <td>First Semester</td>
                                <td><input type="checkbox" checked></td>
                            </tr>
                            <tr>
                                <td>Principle Of Data Communication</td>
                                <td>CSC 322</td>
                                <td>3</td>
                                <td>CSC</td>
                                <td>2023/2024</td>
                                <td>300</td>
                                <td>First Semester</td>
                                <td><input type="checkbox" checked></td>
                            </tr>
                            
                            <tr>
                                <td>Data Structure</td>
                                <td>CSC341</td>
                                <td>4</td>
                                <td>CSC</td>
                                <td>2023/2024</td>
                                <td>300</td>
                                <td>First Semester</td>
                                <td><input type="checkbox" checked></td>
                            </tr>
                            <tr></tr>
                                <td>Programming paragidm</td>
                                <td>CSC331</td>
                                <td>3</td>
                                <td>CSC</td>
                                <td>2023/2024</td>
                                <td>300</td>
                                <td>First Semester</td>
                                <td><input type="checkbox" checked></td>
                            </tr>
                            <tr>
                                <td>Automata and Formal Language</td>
                                <td>CSC351</td>
                                <td>4</td>
                                <td>CSC</td>
                                <td>2023/2024</td>
                                <td>300</td>
                                <td>First Semester</td>
                                <td><input type="checkbox" checked></td>
                            </tr>
                           
                        </tr>
                            <td>Operation Research</td>
                            <td>MAT 353</td>
                            <td>4</td>
                            <td>MAT</td>
                            <td>2023/2024</td>
                            <td>300</td>
                            <td>First Semester</td>
                            <td><input type="checkbox" checked></td>
                        </tr>
                    </tbody>
                </table>
                <div class="actions">
                    <button onclick="registerCourses()">Register</button>
                    <button onclick="window.print()">Print</button>
                </div>
            </div>
        
            <div id="notification" class="notification">
                <p>Your courses have been successfully registered</p>
                <button onclick="closeNotification()">OK</button>
            </div>
        

        </div>
        
    </section>

</body>


<script src="../studentPortal/registation.js"></script>

</html>