<!---->
<!DOCTYPE html>
<html>
<head>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	  <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
	 <link rel="stylesheet" type="text/css" href="style_corona.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<title></title>
</head>
<body>
      <nav class="navbar navbar-expand-lg nav_style p-3" >
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5" >
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Symtoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Prevention</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>

      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="main_header">
	<div class="row w-100 h-100">
		<div class="col-lg-5 col md-5 col-12 order-lg-1 order-2">
			<div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
				<img src="virus.jpg" style="width: 650px">
			</div>
			
		</div>
		<div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
			<div class="rightside">
				<h1>Let's Stay Safe & Fight Together Against Cor<span class="corona_rot"><img src="coronavirus.png" height="80px"></span>na</h1>
			</div>
			
		</div>
		

</div>
	</div>
	<div class="mb-3">
		<h1 style="font-size: 3rem;">COVID-19 INDIA</h1></div>
<div class="card-deck">
  <div class="card bg-dark text-white text-center">
  
    <div class="card-body">
      <h5 class="card-title">Active Cases</h5>
      <p class="card-text" id="active"><?php echo "Fetching.....";?></p>
    </div>
    <div class="card-footer">
      <small class="text-muted" id="last_update">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card bg-danger text-white text-center">
    
    <div class="card-body">
      <h5 class="card-title">Deaths</h5>
      <p class="card-text" id="deaths">Fetching.....</p>
    </div>
    <div class="card-footer">
      <small class="text-muted" id="last_update1">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card bg-success text-white text-center">
 
    <div class="card-body">
      <h5 class="card-title">Recovered</h5>
      <p class="card-text" id="recovered">Fetching.....</p>
    </div>
    <div class="card-footer">
    	<small class="text-white" >Last updated</small>
      <small class="text-muted" id="last_update2">Last updated 3 mins ago</small>
    </div>
  </div>
</div>

<br>
<br>

<section class="corona_update container-fluid">
	<div class="mb-3">
		<h3 class="text-uppercase text-center" style="font-size: 3rem;">covid-19 Live updates All Country</h3>
		
	</div>
	<div class="table table-responsive">
		<table class="table-bordered table-striped text-center" id="tbval">
			<thead>
			<tr style="color: red">
				<th>Index</th>
				<th>Country</th>
				<th>TotalConfirmed</th>
				<th>TotalDeaths</th>
				<th>NewRecovered</th>
				<th>NewDeaths</th>
			</tr>
		</thead>
		<tbody id="result">
			
		</tbody>
			
		</table>
	</div>
</section>


</body>
</html>
<script>
	$(document).ready(function(){
		fetch_data();
		function fetch_data(data)
		{
			var Id=1;
		 $.ajax({
		 	url:'corona_get.php',
			type:'post',
            data:{Id:Id},
		 	success:function(data){
		 		var getData=$.parseJSON(data);
					$('#result').html(getData.output);
					$('#active').html(getData.active);
					$('#deaths').html(getData.deaths);
					$('#recovered').html(getData.recovered);
					$('#last_update').html(getData.lastupdatedtime);
					$('#last_update1').html(getData.lastupdatedtime);
					$('#last_update2').html(getData.lastupdatedtime);
				
				
			}
		 });
		
	};
	

	})

</script>
<!-- https://api.covid19india.org/data.json -->
