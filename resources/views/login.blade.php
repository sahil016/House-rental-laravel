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
  font-size: 15px;
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
  
  <form action="{{route('login-user')}}" class="container" method="post" >
    @csrf
    <h1>Login</h1>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" >
    <span class="">@error('email') {{$message}}@enderror</span>
<br>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" >
    <span class="text-danger">@error('password') {{$message}}@enderror</span>

    <button type="submit" class="btn">Login</button> <br> <br>
    <a href="/register" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Register</a> <br><br>
    <a href="/ad" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Admin Login</a>
  </form>
</div>


</body>
</html>
