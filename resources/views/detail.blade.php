<!DOCTYPE html>
<html>
<title>House Details</title>
<style>
body, html {
  height: 100%;
  margin: 0;
}

.bgimg {
  background-image: url('/img/10.jpg');
  height: 100%;
  background-position: center;
  background-size: cover;
  position: relative;
  color: white;
  font-family: "Courier New", Courier, monospace;
  font-size: 25px;
}

.topleft {
  position: absolute;
  top: 0;
  left: 16px;
}

.bottomleft {
  position: absolute;
  bottom: 0;
  left: 16px;
}

.middle {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}



.button {
  background-color: #f4511e;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none;
  cursor: pointer;
}

.button:hover {opacity: 1}

hr {
  margin: auto;
  width: 40%;
}
</style>
<body>

<div class="bgimg">

  <div class="middle">
    <h1>fort vila</h1>
    <hr>
    <p>House number:1</p>
    <p>4BHK</p>
    <p>4 Badroom</p>
    <p>1 Hall</p>
    <p>Swiming pool</p>
    <p>1 kitchn</p>
    <p>Rent: 20000 per month</p>
    <P>Address: naroda, ahmedabad</p>
  </div>
  <div class="bottomleft">
       <div>
            <button onclick="history.back()" class=button >Go Back</button>
        </div>
  </div>
</div>



</body>
</html>
