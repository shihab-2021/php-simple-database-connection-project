<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style media="screen">
    label{
      display: block;
    }
  </style>
<body>
    <form class="" action="" method="post" autocomplete="off">
      <label for="">Name</label>
      <input type="text" name="name" required value="">
      <label for="">Age</label>
      <input type="number" name="age" required value="">
      <label for="">Country</label>
      <select class="" name="country" required>
        <option value="" selected hidden>Select Country</option>
        <option value="USA">USA</option>
        <option value="UK">UK</option>
        <option value="India">India</option>
      </select>
      <label for="">Gender</label>
      <input type="radio" name="gender" value="Male" required> Male
      <input type="radio" name="gender" value="Female"> Female
      <label for="">Languages</label>
      <input type="checkbox" name="languages[]" value="English">English
      <input type="checkbox" name="languages[]" value="Chinese">Chinese
      <input type="checkbox" name="languages[]" value="Spanish">Spanish
      <br>
      <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>
<?php
    $name = $_POST("name");
    $age = $_POST("age");
    $country = $_POST("country");
    $gender = $_POST("gender");
    $language = $_POST("language");
    $language = "";
    foreach($languages as $row){
      $language .= $row . ",";
    }
    $connection = mysqli_connect("localhost", "root", "", "database_practice_1");
    mysqli_query($connection, "INSERT INTO member_info(member_name, age, country, gender, language)values('$name', '$age', '$country', '$gender', '$language')");
?>