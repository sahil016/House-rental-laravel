<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    <div class="bg">

<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Select city</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="/ah">Ahmedabad</a>
    <a href="/br">Baroda</a>
    <a href="/su">Surat</a>
  </div>
</div>

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


@foreach($house as $house)
<div class="container">
<div class="col-xs-12 col-md-6">
	<!-- First product box start here-->
	<div class="prod-info-main prod-wrap clearfix">
		<div class="row">
				<div class="col-md-5 col-sm-12 col-xs-12">
					<div class="product-image"> 
					<img src="{{$house->House_image}}" alt="194x228" class="img-responsive"> 
						

					</div>
				</div>
				<div class="col-md-7 col-sm-12 col-xs-12">
				<div class="product-deatil">
						<h5 class="name">
							<a href="#">
								house 1
							</a>
							<a href="#">
								<span>House Category</span>
							</a>                            

						</h5>
						<p class="price-container">
							<span>{{$house->House_rent}}</span>
						</p>
						<span class="tag1"></span> 
				</div>
				<div class="description">
					<p>House number:{{$house->House_no}} </p>
                    <p>{{$house->House_city}}</p>
				</div>
				<div class="product-info smart-form">
					<div class="row">
						<div class="col-md-12"> 
							<a href="/book2" class="btn btn-danger">Book</a>
                            <a href="/detail" class=btn btn-danger">House Detail</a>
                            <a href="/rul" class=btn btn-danger"> Rules</a>
						</div>
						<div class="col-md-12">

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endforeach
	<!-- end product -->
</div>
<div>
            <button onclick="history.back()" class=button >Go Back</button>
        </div>
</form>
	<!-- end product -->        
</div>
</div>
</body>
</html>