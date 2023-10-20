<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Faculty Evaluation</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="form-container">
        <form method="post" action="process_form.php">
        <div class="time-container">
            <label for="time" class="right-label">Time:</label>&nbsp;&nbsp;
            <span id="timePlaceholder" class="right-label"></span>

        </div>
        <script>
              function uncheckOther(checkbox) {
            if (checkbox.checked) {
                const checkboxes = document.querySelectorAll('input[name="' + checkbox.name + '"]');
                checkboxes.forEach((otherCheckbox) => {
                    if (otherCheckbox !== checkbox) {
                        otherCheckbox.checked = false;
                    }
                });
            }

            // JavaScript for automatic time
            const timePlaceholder = document.getElementById("timePlaceholder");

            function updateTime() {
                const now = new Date();
                const time = now.toLocaleTimeString('en-US');
                timePlaceholder.textContent = time;
            }

            updateTime(); // Call the function once to set the initial time
            setInterval(updateTime, 1000); // Update the time every second
        }
            // Function to get the current time
            function getCurrentTime() {
                const now = new Date();
                return now.toLocaleTimeString('en-US');
            }

            // Function to update the time
            function updateTime() {
                const timePlaceholder = document.getElementById("timePlaceholder");
                timePlaceholder.textContent = getCurrentTime();
                // Store the current time in local storage
                localStorage.setItem("currentTime", getCurrentTime());
            }

            // Check if there's a stored time in local storage
            const storedTime = localStorage.getItem("currentTime");

            if (storedTime) {
                // If there's a stored time, display it
                const timePlaceholder = document.getElementById("timePlaceholder");
                timePlaceholder.textContent = storedTime;
            } else {
                // If not, update the time
                updateTime();
            }

            // Update the time every second
            setInterval(updateTime, 1000);
        </script>
            <h1>FACULTY EVALUATION ON CLASSROOM INSTRUCTION (PEAC FORM) CLASSROOM OBSERVATION FORM</h1>
            <p>
                <label for="Uname" class="left-label">Name: or ID number:</label>
                <input type="text" id="Uname" name="Uname" class="semi-small-input">
            </p>
            <p>
                <label for="Usubject" class="left-label">Subject of Instruction:</label>
                <input type="text" id="Usubject" name="Usubject" class="semi-small-input">
            </p>
            <p>
                <label for="Agrade" class="left-label">Grade level/Section:</label>
                <input type="text" id="Agrade" name="Agrade" class="semi-small-input">
            </p>
            <p>
                <label for="Adate">Date of Observation:</label>
                <input type="date" id="Adate" name="Adate" class="semi-small-input">
            </p>
            <p>
                <label for="Uobserver" class="left-label">Name of Observer:</label>
                <input type="text" id="Uobserver" name="Uobserver" class="semi-small-input">
            </p>
            <br>
            <br>
            <p>Rating Scale:</p>
            <p>4 - Performance of this item is innovatively done</p>
            <p>3 - Performance of this item is satisfactorily done</p>
            <p>2 - Performance of this item is partially done due to some omissions</p>
            <p>1 - Performance of this item is partially done due to serious errors and misconceptions</p>
            <p>0 - Performance of this item is not observed at all</p>
            <br>
            <br>
            <table>
                <tr>
                    <th><strong>TEACHER ACTION</strong></th>
                    <th>5</th>
                    <th>4</th>
                    <th>3</th>
                    <th>2</th>
                    <th>1</th>
                </tr>
                <tr>
                    <td>The teacher communicates clear expectations of student performance in line with the unit standards and competencies.</td>
                    <td><input type="checkbox" name="rating1" value="5" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating1" value="4" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating1" value="3" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating1" value="2" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating1" value="1" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                </tr>
                <tr>
                    <td>The teacher utilizes various learning materials and resources to enable all students to learn and achieve the unit standards and competencies and learning goals.</td>
                    <td><input type="checkbox" name="rating2" value="5" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating2" value="4" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating2" value="3" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating2" value="2" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating2" value="1" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                </tr>
                <tr>
                    <td>The teacher monitors and checks on students' learning and attainment of the unit standards and competencies by conducting varied forms of assessments during class discussion.</td>
                    <td><input type="checkbox" name="rating3" value="5" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating3" value="4" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating3" value="3" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating3" value="2" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating3" value="1" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                </tr>
                <tr>
                    <td>The teacher provides appropriate feedback or interventions to enable students in attaining the unit standars and competencies.</td>
                    <td><input type="checkbox" name="rating4" value="5" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating4" value="4" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating4" value="3" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating4" value="2" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating4" value="1" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                </tr>
                <tr>
                    <td>The teacher manages the classroom environment and time in a way that supports student learning and the achievement of the unit standards and competencies.</td>
                    <td><input type="checkbox" name="rating5" value="5" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating5" value="4" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating5" value="3" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating5" value="2" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating5" value="1" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                </tr>
                <tr>
                    <td>The teacher possesses students' understanding by asking clarifying or critical thinking questions related to the unit standards or competencies.</td>
                    <td><input type="checkbox" name="rating6" value="5" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating6" value="4" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating6" value="3" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating6" value="2" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating6" value="1" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                </tr>
                
                    <td>STUDENT LEARNING ACTION </td>
                    
                <tr>
                    <td>The students are active and engaged with the different learning tasks aimed at accomplishing the unit standards and competencies.</td>
                    <td><input type="checkbox" name="rating5" value="5" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating5" value="4" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating5" value="3" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating5" value="2" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating5" value="1" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                </tr>
                <tr>
                    <td>The students use different learning materials and resources including technology to achieve the learninng goals of the unit standards and competencies.</td>
                    <td><input type="checkbox" name="rating5" value="5" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating5" value="4" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating5" value="3" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating5" value="2" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating5" value="1" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                </tr>
                <tr>
                    <td>The students share their ideas, reflections or solutions to thought-provoking questions and real life challenges or problems related to the unit standards and competencies.</td>
                    <td><input type="checkbox" name="rating5" value="5" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating5" value="4" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating5" value="3" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating5" value="2" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating5" value="1" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                </tr>
                <tr>
                    <td>The students collaborate, plan together and have meaningful interaction the unit standards and competencies.</td>
                    <td><input type="checkbox" name="rating5" value="5" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating5" value="4" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating5" value="3" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating5" value="2" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating5" value="1" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                </tr>
                <tr>
                    <td>The students are able to explain how their ideas, outputs or performances accomplish the unit standards and competencies.</td>
                    <td><input type="checkbox" name="rating5" value="5" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating5" value="4" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating5" value="3" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating5" value="2" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating5" value="1" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                </tr>
                <tr>
                    <td>The students, when encouraged or on their own, ask questions to clarify or deepen their understanding of the unit standards and competencies.</td>
                    <td><input type="checkbox" name="rating5" value="5" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating5" value="4" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating5" value="3" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating5" value="2" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating5" value="1" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                </tr>
                <tr>
                    <td>The students are able to relate or transfer their learning to daily life and real world situations</td>
                    <td><input type="checkbox" name="rating5" value="5" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating5" value="4" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating5" value="3" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating5" value="2" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating5" value="1" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                </tr>
                <tr>
                    <td>The students are able to integrate 21st century skills in their achievement of the unit standards and competencies.</td>
                    <td><input type="checkbox" name="rating5" value="5" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating5" value="4" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating5" value="3" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating5" value="2" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating5" value="1" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                </tr>
                <tr>
                    <td>15.The students are able to reflect on and connect their learning with the school's PVGMO.</td>
                    <td><input type="checkbox" name="rating5" value="5" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating5" value="4" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating5" value="3" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating5" value="2" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                    <td><input type="checkbox" name="rating5" value="1" class="rating-checkbox" onclick="uncheckOther(this)"></td>
                </tr>
                <tr>
                    <td>Total </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
               
                </tr>
                <tr>
                    <td>Average</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>

            <div class="form-button"><br>
                <button type="submit" name="create">Submit</button>
            </div>
        </form>
    </div>

</body>
</html>
