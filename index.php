<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Adding Form</title>
</head>
<style media="screen">
  body{
    background-color: #607d8b;
  }
  label {
  width: 200px;
  font-weight: bold;
  display: block;
  margin-top: 10px;
  }
  .form_info{
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .heading{
    text-align: center;
  }
  .input{
    border-radius: 5px;
    border: 1px solid;
    padding: 3px;
    width: 300px;
    margin-top: 5px;
  }
  select{
    border-radius: 5px;
    border: 1px solid;
    padding: 3px;
    width: 300px;
    margin-top: 5px;  
  }
  #btn{
    margin-left: 0;
    border-radius: 0;
    background: skyblue;
    color: white;
    border: none;
    font-weight: 300;
    padding: 10px 20px;
    line-height: 1;
    margin: 10px auto;
    border-radius: 10px;
  }
  </style>
<body>
  <h1 class="heading"><u>Member Adding Form</u></h1>
  <div class="form_info">
    <form class="" action="code.php" method="post">
      <label for="">Name</label>
      <input class="input" type="text" name="name" required value="">
      <label for="">Age</label>
      <input class="input" type="number" name="age" required value="">
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
      <label for="">Phone</label>
      <input class="input" type="text" name="phone" required value="">
      <label for="">Email</label>
      <input class="input" type="email" name="email" required value="">
      <br>
      <button id="btn" type="submit" name="submit">Submit</button>
    </form>
  </div>
</body>
</html>
