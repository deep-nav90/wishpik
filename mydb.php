<?php
        $servername = "localhost"; // or 127.0.0.1
            $username = "root"; // default username in XAMPP
            $password = ""; // default password is empty
            $dbname = "wish";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            echo "Connected successfully";
    
    ?>