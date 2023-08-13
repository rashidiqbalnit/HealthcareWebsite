<?php
// Assuming you have a database connection established already

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $number = $_POST["number"];
    $email = $_POST["email"];
    $specialist = $_POST["specialist"];
    $doctor = $_POST["doctor"];
    $date = $_POST["date"];

    // Create a MySQL connection
    $connection = new mysqli("localhost", "root", "", "contact_db0");

    // Check the connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    // Prepare and execute the SQL query
    $stmt = $connection->prepare("INSERT INTO contact_form0 (name, number, email, specialist, doctor, date) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $number, $email, $specialist, $doctor, $date);

    if ($stmt->execute()) {
        $stmt->close();
        
        // Send email using mail() function
        $to = "rk6612262@gmail.com";
        $subject = "Appointment Confirmation";
        $message = "Name: $name\nPhone no: $number\nEmail: $email\nSpecialist Type: $specialist\nDoctor name: $doctor\nDate-Time: $date";
        $headers = "From: rashidiqbalbih@gmail.com";

        if (mail($to, $subject, $message, $headers)) {
            echo "Success";
        } else {
            echo "Error sending email";
        }
    } else {
        echo "Error saving data to MySQL";
    }

    $connection->close();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section class="contact" id="contact">
        <!-- ... Your form content ... -->
        <form action="save_data.php" method="post" id="appointmentForm">
            <!-- ... Your form fields ... -->
    
    
            <input type="text" id="name" placeholder="Your Name" required><br>
                <input type="text" id="phone" placeholder="Phone Number" required><br>
                <input type="email" id="email" placeholder="Email Id" required><br>
                <select style="select" id="option1">
                  <optgroup label="Search Specialist Type">
                    <option value="not selected" selected>Search Specialist Type *</option>
                    <option value="General Physician">General Physician</option>
                    <option value="Gynecologist">Gynecologist</option>
                    <option value="Cardiologists">Cardiologists</option>
                    <option value="Dermatologists">Dermatologists</option>
                    <option value="Gastroenterologists">Gastroenterologists</option>
                    <option value="Diabetologist">Diabetologist</option>
                    <option value="Pediatrics">Pediatrics</option>
                    <option value="Physiotherapist">Physiotherapist</option>
                    <option value="Dentist">Dentist</option>
                    <option value="Ophthalmologist">Ophthalmologist</option>
                  </optgroup>
                </select>
                <br>
                <select style="select" id="option2">
                    <optgroup label="Search Doctors">
                        <option value="not selected" selected>Search Doctors *</option>
                        <option value="Dr. Ashok Seth">Dr. Ashok Seth</option>     <option value="Dr. G Girish">Dr. G Girish</option>
                        <option value="Dr. Amir">Dr. Amir</option>    <option value="Dr. Iram">Dr. Iram</option>
                        <option value="Dr. Naresh Trehan">Dr. Naresh Trehan</option>   <option value="Dr. Bidhan Chandra Roy">Dr. Bidhan Chandra Roy</option>
                        <option value="Dr. Swarupa Mitra">Dr. Swarupa Mitra</option>   <option value="Dr. Mohamed Rafi">Dr. Mohamed Rafi</option>
                        <option value="Dr Santosh Shetty">Dr Santosh Shetty</option>   <option value="Dr. Vinod Kumar">Dr. Vinod Kumar</option>
                        <option value="Dr. Surbhi Anand">Dr. Surbhi Anand</option>     <option value="Dr. Dhiraj Balaji">Dr. Dhiraj Balaji</option>
                        <option value="Dr. Ravi Gopal Varma">Dr. Ravi Gopal Varma</option>   <option value="Dr. Darshan Patil">Dr. Darshan Patil</option>
                        <option value="Dr. Ramakanta Panda">Dr. Ramakanta Panda</option>    <option value="Dr. Murali Mohan C.R">Dr. Murali Mohan C.R</option>
                        <option value="Dr. Shivashankar Roy">Dr. Shivashankar Roy</option>   <option value="Dr. Mathew Jacob">Dr. Mathew Jacob</option>
                        <option value="Dr. Vinod Raina">Dr. Vinod Raina</option>    <option value="Dr. Apurva Pande">Dr. Apurva Pande</option>
                        <option value="Dr. Yash Gulati">Dr. Yash Gulati</option>    <option value="Dr. Sujatha Thyagarajan">Dr. Sujatha Thyagarajan</option>
                        <option value="Dr. Hemant Kalyan">Dr. Hemant Kalyan</option>    <option value="Dr. Dhananjaya Bhat">Dr. Dhananjaya Bhat</option>
                        <option value="Dr. Sachin Suresh Jadhav">Dr. Sachin Suresh Jadhav</option>   <option value="Dr. Sreekanta Swamy">Dr. Sreekanta Swamy</option>
                        <option value="Dr. Devi Prasad Shetty">Dr. Devi Prasad Shetty</option>    <option value="Dr. J V Srinivas">Dr. J V Srinivas</option>
                    </optgroup>
                </select>
                <br>
                <input type="datetime-local" id="datetime" name="date" required><br>
                <!--textarea id="message" rows="4" placeholder="how can we help you?"></textarea><br-->
                <!--button type="submit">Submit</button-->
            <button type="submit" name="submit" onclick="return submitForm();">Submit</button>
        </form>
    </section>
    
    <!-- Include your main.js file -->
    <script src="main.js"></script>
    
</body>
</html>
