<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}

h2{
    text-align: center;
}

</style>
</head>
<body>
<h2>House booking</h2>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="/action_page.php">
      
        <div class="row">
          <div class="col-50">
            <h3>Booking</h3>

            <label for="fname"> House no</label>
            <input type="text" id="fname" name="firstname">
            <label for="fname"> House booking id</label>
            <input type="text" id="fname" name="firstname">
            <label for="fname"> U id</label>
            <input type="text" id="fname" name="firstname">

            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname">

            <label for="fname"> Gender</label>
            <input type="text" id="fname" name="firstname">

            <label for="adr"> Address</label>
            <input type="text" id="adr" name="address" >

            <label for="email"> U id proof</label>
            <input type="text" id="email" name="email">

            <label for="city"> City</label>
            <input type="text" id="city" name="city">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state">
              </div>
              <div class="col-50">
                <label for="Booking date">House ageement document</label>
                <input type="file" id="house ageement" name="booking date">
              </div>
            </div>

            <div class="row">
              <div class="col-50">
                <label for="booking date">Booking date</label>
                <input type="date" id="booking date" name="exit date">
              </div>
              <div class="col-50">
                <label for="exit date">Exit date</label>
                <input type="date" id="exit date" name="exit date" >
              </div>
            </div>
          </div>

          </div>

 
          
        </div>

        <input href="pay.php" type="submit" value="Book" class="btn">
      </form>
    </div>
  </div>


</div>

</body>
</html>
