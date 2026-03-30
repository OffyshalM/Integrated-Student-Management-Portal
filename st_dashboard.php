<?php require "../database.php";

if (isset($_SESSION['stID'])){
 $stuID = $_SESSION['stID'];
 $getStudentData = mysqli_query($connect, "select * from student_tb where student_id ='$stuID'");

 $fetchStudentData = mysqli_fetch_assoc($getStudentData);

 $studentfirstName = $fetchStudentData['firstname'];
 $studentlastName = $fetchStudentData['lastname'];

 $fullName = $studentfirstName ." ". $studentlastName;
} else{
    // header("location:../studentPortal/login.php");
}

?>

<html lang="en">

<head>
    <link rel="stylesheet" href="../studentPortal/dashboard.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>St Emmanuel college</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body>

    <header>
        <div class="name-container">
            <h1 style="font-family: 'poppins'; font-size:35px;">ST. EMMANUEL COLLEGE</h1>
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
                <span><?php echo $fullName ?></span>
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
                    <li><i class="fa-solid fa-chart-simple"></i><a href="">Dashboard</a></li>
                    <li><i class="fa-solid fa-money-check"></i><a href="#">Payment info</a></li>
                    <li><i class="fa-regular fa-pen-to-square"></i><a href="../studentPortal/registration.php">Registration</a></li>
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

            <div class="welcomeContainer">
                <div class="greeting">
                    <span>
                        <p style="font-size: 13px; color: #fff; opacity: 0.5; ">20, October,2024</p>
                    </span>
                    <span style="font-size: 2.5rem; color: #fff;">Welcome Back, <?php echo $fullName?></span>
                </div>

                <div class="animatedPic">
                    <img src="../studentPortal/images/schoolChildren-removebg-preview.png" height="100" width="300"
                        alt="">
                </div>
            </div>
        </div>
        <div class="schoolDetails">

            <div class="courseOverview">
                <h2>Course Overview</h2>
                <div class="course-card">
                    <h3>CSC 341 - Data Structure</h3>
                    <p class="instructor"><strong>Instructor:</strong> Prof. Akinola</p>
                    <p class="instructor"><strong>Time:</strong> Mon, Wed, Fri - 10AM to 12PM</p>
                </div>
                <div class="course-card">
                    <h3>CSC 321 - Operating System</h3>
                    <p class="instructor"><strong>Instructor:</strong> Dr. Nancy Woods.</p>
                    <p class="instructor"><strong>Time:</strong> Tue, Thu - 2PM to 3:30 PM</p>
                </div>

                <div class="course-card">
                    <h3>CSC 351 - Formal Languages & <br> Automata theory</h3>
                    <p class="instructor"><strong>Instructor:</strong> Dr. Abiola</p>
                    <p class="instructor"><strong>Time:</strong> Mon, Wed, Fri - 1PM to 2:30 PM</p>
                </div>

                <button id="add-course-btn" onclick="addCourse()">Add New Course</button>

            </div>
            <div class="cgpaContainer">
                <div class="cgpa-card">
                    <h2>CGPA Summary</h2>
                    <div class="cgpa-value">
                        <span>2.85</span>
                    </div>
                    <p class="cgpa-details">
                        <strong>Credits Completed:</strong> 90<br>
                        <strong>Academic Year:</strong> 2023/2024
                    </p>
                    <canvas id="cgpaChart"></canvas>
                </div>
            </div>

            <div class="calendar">
                <div class="calendar-header">
                    <span id="month-year"></span>
                </div>
        
                <div class="days-header">
                    <div class="days">Sun</div>
                    <div class="days">Mon</div>
                    <div class="days">Tue</div>
                    <div class="days">Wed</div>
                    <div class="days">Thu</div>
                    <div class="days">Fri</div>
                    <div class="days">Sat</div>
                </div>
        
                <div class="day-cell-header"></div>
        
                <div class="nav-buttons">
                    <div id="prev"><button>Prev</button></div>
                    <div id="next"><button>Next</button></div>
                </div>
        
                <div class="event-container">
                    <p>No Schedule Today...</p>
                    <button class="eventBtn">Add a new Event</button>
                </div>
            </div>
        </div>
    </section>

</body>


<script src="../studentPortal/st_dashboard.js"></script>
</html>