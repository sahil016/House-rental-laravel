<!DOCTYPE html>
<html>
<link rel="stylesheet" href="/css/style.css">
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

hr {
  margin: auto;
  width: 40%;
}
</style>
<body>

<div class="bgimg">

  <div class="middle">
    <h1>Villa Spinaltermine</h1>
    <hr>
    <p>House number:2</p>
    <p>4BHK</p>
    <p>5 Badroom</p>
    <p>1 Hall</p>
    <p>1 kitchn</p>
    <p>Swiming pool<p/>
    <p>garden</p>
    <p>Rent: 25000 per month</p>
    <P>Address:Maninagar, ahmedabad</p>

</div>

<div class="bottomleft">
       <div>
            <button onclick="history.back()" class=button >Go Back</button>
        </div>
  </div>
</body>
</html>
