
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Faculty Evaluation</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        .rating-checkbox {
            margin-right: 5px;
        }
        .rating-checkbox{
            transform: scale(2.2);
        }
        .small-input {
            width: 20px; 
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form method="post" action="process_form.php">
            <div class="time-container">
                <label for="time" class="right-label">Time:</label>&nbsp;&nbsp;
                <span id="timePlaceholder" class="right-label"></span>
                <p>
                    <label for="Adate">Date of Observation:</label>
                    <input type="date" id="Adate" name="Adate" class="semi-small-input">
                </p>
            </div>
        <br/>
        
            <h1>FACULTY EVALUATION ON CLASSROOM INSTRUCTION (PEAC FORM) CLASSROOM OBSERVATION FORM</h1>
            <p>
                <label for="Uname" class="left-label">Name: or ID number:</label>
                <input type="text" id="Uname" name="Uname" class="semi-small-input">
                <label for="subjectc" class="left-label">Subject CODE:</label>
                <input type="text" id="subjectc" name="subjectc" class="semi-small-input">
            </p>
            <p>
                <label for="Usubject" class="left-label">Subject of Instruction:</label>
                <input type="text" id="Usubject" name="Usubject" class="semi-small-input">
                <label for="Agrade" class="left-label">Grade level/Section:</label>
                <input type="text" id="Agrade" name="Agrade" class="semi-small-input">
            </p>
            <p>
                <label for="Uobserver" class="left-label">Name of Observer:</label>
                <input type="text" id="Uobserver" name="Uobserver" class="semi-small-input">
            </p>
            
            <br>
            <p>Rating Scale:</p>
            <p>5 - Performance of this item is innovatively done</p>
            <p>4 - Performance of this item is satisfactorily done</p>
            <p>3 - Performance of this item is partially done due to some omissions</p>
            <p>2 - Performance of this item is partially done due to serious errors and misconceptions</p>
            <p>1 - Performance of this item is not observed at all</p>
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
                    <td><input type="checkbox" name="rating1" value="5" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating1" value="4" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating1" value="3" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating1" value="2" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating1" value="1" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                </tr>
                <tr>
                    <td>The teacher utilizes various learning materials and resources to enable all students to learn and achieve the unit standards and competencies and learning goals.</td>
                    <td><input type="checkbox" name="rating2" value="5" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating2" value="4" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating2" value="3" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating2" value="2" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating2" value="1" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                </tr>
                <tr>
                    <td>The teacher monitors and checks on students' learning and attainment of the unit standards and competencies by conducting varied forms of assessments during class discussion.</td>
                    <td><input type="checkbox" name="rating3" value="5" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating3" value="4" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating3" value="3" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating3" value="2" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating3" value="1" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                </tr>
                <tr>
                    <td>The teacher provides appropriate feedback or interventions to enable students in attaining the unit standars and competencies.</td>
                    <td><input type="checkbox" name="rating4" value="5" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating4" value="4" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating4" value="3" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating4" value="2" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating4" value="1" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                </tr>
                <tr>
                    <td>The teacher manages the classroom environment and time in a way that supports student learning and the achievement of the unit standards and competencies.</td>
                    <td><input type="checkbox" name="rating5" value="5" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating5" value="4" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating5" value="3" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating5" value="2" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating5" value="1" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                </tr>
                <tr>
                    <td>The teacher possesses students' understanding by asking clarifying or critical thinking questions related to the unit standards or competencies.</td>
                    <td><input type="checkbox" name="rating6" value="5" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating6" value="4" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating6" value="3" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating6" value="2" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating6" value="1" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                </tr>
                
                <tr>
                    <td><strong>STUDENT LEARNING ACTION</strong></td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>The students are active and engaged with the different learning tasks aimed at accomplishing the unit st0andards and competencies.</td>
                    <td><input type="checkbox" name="rating7" value="5" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating7" value="4" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating7" value="3" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating7" value="2" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating7" value="1" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                </tr>
                <tr>
                    <td>The students use different learning materials and resources, including technology, to achieve the learning goals of the unit standards and competencies.</td>
                    <td><input type="checkbox" name="rating8" value="5" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating8" value="4" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating8" value="3" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating8" value="2" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating8" value="1" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                </tr>
                <tr>
                    <td>The students share their ideas, reflections, or solutions to thought-provoking questions and real-life challenges or problems related to the unit standards and competencies.</td>
                    <td><input type="checkbox" name="rating9" value="5" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating9" value="4" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating9" value="3" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating9" value="2" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating9" value="1" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                </tr>
                <tr>
                    <td>The students collaborate, plan together, and have meaningful interactions related to the unit standards and competencies.</td>
                    <td><input type="checkbox" name="rating10" value="5" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating10" value="4" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating10" value="3" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating10" value="2" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating10" value="1" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                </tr>
                <tr>
                    <td>The students are able to explain how their ideas, outputs, or performances accomplish the unit standards and competencies.</td>
                    <td><input type="checkbox" name="rating11" value="5" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating11" value="4" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating11" value="3" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating11" value="2" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating11" value="1" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                </tr>
                <tr>
                    <td>The students, when encouraged or on their own, ask questions to clarify or deepen their understanding of the unit standards and competencies.</td>
                    <td><input type="checkbox" name="rating12" value="5" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating12" value="4" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating12" value="3" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating12" value="2" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating12" value="1" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                </tr>
                <tr>
                    <td>The students are able to relate or transfer their learning to daily life and real-world situations.</td>
                    <td><input type="checkbox" name="rating13" value="5" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating13" value="4" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating13" value="3" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating13" value="2" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating13" value="1" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                </tr>
                <tr>
                    <td>The students are able to integrate 21st-century skills in their achievement of the unit standards and competencies.</td>
                    <td><input type="checkbox" name="rating14" value="5" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating14" value="4" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating14" value="3" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating14" value="2" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating14" value="1" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                </tr>
                <tr>
                    <td>The students are able to reflect on and connect their learning with the school's PVGMO.</td>
                    <td><input type="checkbox" name="rating15" value="5" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating15" value="4" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating15" value="3" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating15" value="2" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                    <td><input type="checkbox" name="rating15" value="1" class="rating-checkbox" onclick="uncheckOther(this); calculateTotals();"></td>
                </tr>
               
                 <tr>
                    <td>Total </td>
                    <td id="total5">0</td>
                    <td id="total4">0</td>
                    <td id="total3">0</td>
                    <td id="total2">0</td>
                    <td id="total1">0</td>
                    <input type="hidden" name="total1" value="0">
                    <input type="hidden" name="total2" value="0">
                    <input type="hidden" name="total3" value="0">
                    <input type="hidden" name="total4" value="0">
                    <input type="hidden" name="total5" value="0">
                </tr>
               
                </table>

                <script>
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

    // Define a function to calculate the weighted average
    function calculateWeightedAverage() {
        const total5 = parseInt(document.getElementById("total5").textContent);
        const total4 = parseInt(document.getElementById("total4").textContent);
        const total3 = parseInt(document.getElementById("total3").textContent);
        const total2 = parseInt(document.getElementById("total2").textContent);
        const total1 = parseInt(document.getElementById("total1").textContent);
       // const totalParticipants = 15;

        const weightedAverage = (total5 * 5 + total4 * 4 + total3 * 3 + total2 * 2 + total1 * 1);
        //const weightedAverage = (total5 * 5 + total4 * 4 + total3 * 3 + total2 * 2 + total1 * 1) / totalParticipants;

        // Display the weighted average
       // document.getElementById("average").textContent = weightedAverage.toFixed(2); // Display average with 2 decimal places
    }

    // Add event listeners to all rating checkboxes
    const ratingCheckboxes = document.querySelectorAll('.rating-checkbox');
    ratingCheckboxes.forEach(function (checkbox) {
        checkbox.addEventListener('change', function () {
            calculateWeightedAverage();
            updateTime(); // Update time whenever a rating checkbox is changed
        });
    });

    // Calculate the weighted average when the page loads
    calculateWeightedAverage();

    // to calculate Total
    function calculateTotals() {
        const ratingCategories = [5, 4, 3, 2, 1];
        const totals = {};

        ratingCategories.forEach(category => {
            const total = document.querySelectorAll(`input[value="${category}"]:checked`).length;
            const totalCell = document.getElementById(`total${category}`);
            totalCell.textContent = total;

            // Store the total in the totals object
            totals[`total${category}`] = total;
        });

        // Send the totals to the server via an HTTP request
        sendTotalsToServer(totals);
    }

    function sendTotalsToServer(totals) {
        fetch('save_totals.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(totals),
        })
        .then(response => {
            if (response.ok) {
                // Data saved successfully
                console.log('Totals saved to the server.');
            } else {
                // Error occurred while saving data
                console.error('Error: Totals not saved.');
            }
        })
        .catch(error => {
            console.error('Error: ' + error.message);
        });
    }

    // Call calculateTotals when the page loads
    calculateTotals();

    // Function to un_check other checkbox
    function uncheckOther(checkbox) {
        if (checkbox.checked) {
            const checkboxes = document.querySelectorAll('input[name="' + checkbox.name + '"]');
            checkboxes.forEach((otherCheckbox) => {
                if (otherCheckbox !== checkbox) {
                    otherCheckbox.checked = false;
                }
            });
        }
    }
</script>

       
       
            <div class="form-button"><br>
                <button type="submit" name="create">Submit</button>
            </div>
        </form>
    </div>

</body>
</html>
