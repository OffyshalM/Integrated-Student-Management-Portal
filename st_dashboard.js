//COURSE OVERVIEW

function addCourse() {
    const courseOverview = document.querySelector(".courseOverview");

    const addedCourse = document.createElement("div");
    addedCourse.innerHTML = `
    <div class="course-card">
                    <h3>CSC 341 - Data Communication</h3>
                    <p class="instructor"><strong>Instructor:</strong> Dr. Adeleke</p>
                    <p class="instructor"><strong>Time:</strong> Mon, Tue - 12PM to 2PM</p>
                </div>`
    addedCourse.classList.add("course-card");
    courseOverview.insertBefore(addedCourse, document.getElementById('add-course-btn'));
}
//CGPA
const ctx = document.getElementById('cgpaChart').getContext('2d');
const cgpaChart = new Chart(ctx, {
    type: 'line', 
    data: {
        labels: ['100L(1st Semester)', '100L(2nd Semester)', '200L(1st Semester)', '200L(2nd Semester)', '300L(1st Semester)', '300L(2nd Semester)'], // X-axis labels (semesters)
        datasets: [{
            label: 'CGPA Progression',
            data: [2.2, 2.4, 2.6, 2.8, 2.85, 2.9], 
            backgroundColor: ' rgb(12, 6, 99)', 
            borderColor: ' rgb(12, 6, 99)', 
            borderWidth: 2,
            pointBackgroundColor: '#007bff', 
            pointBorderColor: '#fff', 
            pointRadius: 4,
            
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true,
                max: 4
            }
        }
    }
});

// CALENDAR
let currentMonth = new Date().getMonth();
    let currentYear = new Date().getFullYear();

    const monthNames = [
        "January", "February", "March", "April", "May", "June", 
        "July", "August", "September", "October", "November", "December"
    ];

    function myCalendar(year, month) {
        const dayCell = document.querySelector(".day-cell-header");
        const monthYear = document.getElementById("month-year");

        monthYear.textContent = `${monthNames[month]} ${year}`;

        dayCell.innerHTML = "";

        const getDays = new Date(year, month + 1, 0).getDate();

        for (let day = 1; day <= getDays; day++) {
            const cell = document.createElement("div");
            cell.classList.add("day-cell");
            cell.textContent = day;
            dayCell.appendChild(cell);
        }
    }

    document.getElementById("next").addEventListener("click", () => {
        currentMonth++;
        if (currentMonth === 12) {
            currentMonth = 0;
            currentYear++;
        }
        myCalendar(currentYear, currentMonth);
    });

    document.getElementById("prev").addEventListener("click", () => {
        currentMonth--;
        if (currentMonth === -1) {
            currentMonth = 11;
            currentYear--;
        }
        myCalendar(currentYear, currentMonth);
    });

    myCalendar(currentYear, currentMonth);