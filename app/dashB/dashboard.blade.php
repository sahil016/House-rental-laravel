<!DOCTYPE html>
<html lang="en">
@include('header')
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compstible" contemt="ie=edge">
    <title>Custom Authentication</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4" style="margin-top:20px;">
            <h4>Welcome to our site</h4>
            <hr>
            <table class="table">
                <thead>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>
                        <td><a href="{{route('destroy')}}">Logout</td>
                    </tr>
                </tbody>
            </table>


        </div>
    </div>
</div>


</body>

</html>

<head>
<style>

body, html {
  height: 100%;
  margin: 0;
}

.centered {
    text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;}

.bg {
  /* The image used */
  background-image: url("../img/home2.jpg");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.dropbtn {
  background-color: #3498DB;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  width=90%;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}

/* .center {
    position: absolute;
    left: 50%;
    top:50%;
    width:90%;
} */



</style>
</head>
<body>
    <div class="bg">
        <div class="center">
            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn">Select city</button>
                <lable>click here to select city<lable>
                <div id="myDropdown" class="dropdown-content">
                    <a href="/ah">Ahmedabad</a>
                    <a href="/br">Baroda</a>
                    <a href="/su">Surat</a>
                </div>
            </div>
       </div>
    </div>
    <div class="centered">    <h1 style="font-size:50px">Welcome To House Rental</h1> <h2>Managemet System</h2></div>
    <script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
        function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
        }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
     var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
         }
        }
    }
    }
    </script>
</body>