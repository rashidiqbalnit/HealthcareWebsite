function submitForm() {
    // Prevent the form from submitting normally
    Event.preventDefault();

    // Collect form data
    var name = document.getElementById("name").value;
    var number = document.getElementById("number").value;
    var email = document.getElementById("email").value;
    var specialist = document.getElementById("option1").value;
    var doctor = document.getElementById("option2").value;
    var date = document.getElementById("date").value;

    // Make an AJAX call to your PHP script to save the data
    var xhr = new XMLHttpRequest();
    var url = "save_data.php";
    var params = "name=" + encodeURIComponent(name) +
                 "&number=" + encodeURIComponent(number) +
                 "&email=" + encodeURIComponent(email) +
                 "&specialist=" + encodeURIComponent(specialist) +
                 "&doctor=" + encodeURIComponent(doctor) +
                 "&date=" + encodeURIComponent(date);

    xhr.open("POST", url, true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Handle the response from the server if needed
            if (xhr.responseText === "Success") {
                alert("Data saved successfully. Appointment confirmed!");
            } else {
                alert("Error: " + xhr.responseText);
            }
        }
    };

    xhr.send(params);
}
