<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>   

body {
  background-image: url('../image/asd.jpg');
  background-image: url('asd.jpg');

  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}

body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 13px;
  overflow: hidden; /* Hide scrollbars */
}

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("../img/asd1.jpg");

  /* Full height */
  height: 800px; 
  

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Add styles to the form container */
.container {
  position: absolute;
  right: 0;
  margin: 14px;
  max-width: 300px;
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password], input[type=number], input[type=email] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus, input[type=number]:focus, input[type=email] {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color:#4000ff;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}

.center {
  margin: auto;
  width: 60%;
  border: 3px solid #73AD21;
  padding: 10px;
}

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}

h1 {
  text-align: center;
}

</style>
</head>
<body>
  
<div class="bg-img"  >
  <form action="register" class="container" method="POST" >
  @csrf
    <h1>Register</h1>
    <!-- <label for="U_id"><b>User  id</b></label>
    <input type="number" placeholder="Enter User id" name="U_id" required> -->
    <span class="text-danger">@error('U_city') {{$message}}@enderror</span>
    
    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter email" name="email" required >

    <label for="email"><b>Name</b></label>
    <input type="text" placeholder="Enter name" name="name" required >

    <label for="psw"><b>Passaword</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <label for="city"><b>City</b></label>
    <input type="text" placeholder="Enter city" name="U_city" required>

    <label for="state"><b>State</b></label>
    <input type="text" placeholder="Enter state" name="U_state" required>

    <button type="submit" class="btn">Register</button> <br> <br>

    <a href="/login" class="btn btn-primary btn-lg active" role="button" aria-pressed="true"> Login</a><br><br>
      <a href="/ad" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Admin Login</a>
    

    <!-- <a href="/login">click here to Login<a/> -->

</div>

</body>
</html>
