<!DOCTYPE html>
<html>
<head>
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
}

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url('../image/asd.jpg');
  background-image: url('asd.jpeg');
  min-height: 750px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container {
  position: absolute;
  right: 0;
  margin: 50px;
  max-width: 300px;
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password], input[type=number]{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus input[type=number]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #04AA6D;
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


</style>
</head>
<body>
<div class="bg-img"  >
  
  <form action="/house" class="container" method="post" >
    <h1>Admin Login</h1>
    <label for="state"><b>Admin id</b></label>
    <input type="number" placeholder="Enter id" name="A_id" required>


    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pss" required>

    <button type="submit" class="btn">Login</button> <br>
 
  </form>
</div>


</body>
</html>
