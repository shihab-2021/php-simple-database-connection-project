<?php
        $name = $_POST['name'];
        $age = $_POST['age'];
        $country = $_POST['country'];
        $gender = $_POST['gender'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        
        $connection = mysqli_connect("localhost","root","","database_practice_1");

        mysqli_query($connection,"INSERT INTO member_info(member_name, age, country, gender, phone, email) 
        VALUES('$name', '$age', '$country', '$gender', '$phone', '$email')");

        if (isset($_SERVER["HTTP_REFERER"])) {
            header("Location: " . $_SERVER["HTTP_REFERER"]);
        }

?>