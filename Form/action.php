<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    // Retrieve data from the form
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Database connection parameters
    $servername = "localhost";
    $username = "id21338124_vermafurniture";
    $password = "Rajender@123";
    $dbname = "id21338124_rajenderdata";

    // Create a database connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    else{
        //echo "Connection done.."."<br>";
    }

    // Fetch data form database

    // $sql = "SELECT * FROM form_data";
    // $result = $conn -> query($sql);

    // if ($result->num_rows > 0) {
    //     while ($row = $result->fetch_assoc()) {
    //         // Process the data in $row
    //         // For example, you can echo it or store it in an array
    //         echo "ID: " . $row["id"] . " - Name: " . $row["fname"]."- lastname".$row["lname"] . "- gender".$row["gender"]." - Email: " . $row["email"]. " - Message: " . $row["message"] ."<br>";
    //     }
    // } else {
    //     echo "No results found";
    // }
    

    // Insert data into the database
    $sql = "INSERT INTO form_data (fname,lname,gender, email, message) VALUES ('$fname','$lname','$gender', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        //echo "Data inserted successfully.";
    } else {
        //echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
<html>
    <head>
        <title>Thank You !</title>
        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            .container{
                width: 100%;
                height: 100vh;
                background: #c7daff;
            }
            .popup {
                width: 500px;
                background: #fff;
                border-radius: 6px;
                height: 450px;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%,-50%);
                text-align: center;
                padding: 0 30px 30px;
                color: #333;
            }
            .popup img{
                width: 150px;
                margin: auto;
                margin-top: -70px;
                border-radius: 50;
                box-shadow: 0 2px 5px rgba(0,0,0,0.2);
            }
            .popup h2{
                font-size: 60px;
                font-weight: 500;
                margin: 30px 0 10px;
            }
            .popup p{
                font-size: 28px;
            }
            .popup a{
                width: 100%;
                margin-top: 50px;
                padding: 10px 0;
                background: #6fd649;
                color: #fff;
                text-decoration: none;
                border: 0;
                outline: none;
                font-size: 38px;
                border-radius: 4px;
                cursor: pointer;
                box-shadow: 0 5px 5px rgba(0,0,0,0.2);
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="popup">
                <img src="../image/checked.png" alt="">
                <h2>Thank You!</h2>
                <p>Your feedback has been successfully submitted. Thanks!</p>
                <a href="../index.html">Ok</a>
            </div>
        </div>
    </body>
</html
