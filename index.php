
<!DOCTYPE html>

<html lang="en">
<head>
   <meta charset="utf-8">
   <title>untitled</title>
   <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
   <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
</head>
<body>
	<nav class="navbar navbar-custom" role="navigation">
		<div class="container">
		<div class="col-md-6 col-md-offset-4">
			<div class="navbar-header">
				<h1 class="navbar-brand text-center">OWE-Length Converter</h1>
			</div>
		</div>
		<div class="nav navbar-nav">
			<div class="btn-group btn-lg"> 
				
					<button type="button" class="btn btn-default len-but">Length</button> 
					<button type="button" class="btn btn-default weg-but">Weight</button>
				
				
			</div>
		</div>
		</div>			
	</nav>
<div class="container">
		<div class="col-md-10 col-md-offset-1 main">
			
			<div id="head">
				<p>WELCOME </p>
				<p>TO</p> 
				<p>OWE CONVERTER</p>
				
			</div>

			<div id="main" style="margin-top: 30px;" class="col-md-6 col-md-offset-3">

				<form id="form">
					<h1 class="text-center">Convert</h1>
						<div id="len_cat">
							<div class="form-group"> 
								<input id="length" type="text" class="form-control input-lg" name="length" placeholder="Insert Length To be Converted">
							 </div>
							<div class="form-group"> 
								<select class="form-control input-lg" id="unit_1" name="unit_1">
									<option value="">Select Unit</option>
									<option value="meter">Meter</option>
									<option value="inches">Inch</option>
									<option value="yard">Yard</option>
									<option value="feet">Feet</option>
									<option value="mile">Mile</option>
								</select>
							</div>
							<h1 class="text-center ini">Into</h1>
							<div class="form-group"> 
								<select class="form-control input-lg" id="unit_2" name="unit_2">
									<option value="">Select Unit</option>
									<option value="meter">Meter</option>
									<option value="inches">Inch</option>
									<option value="yard">Yard</option>
									<option value="feet">Feet</option>
									<option value="mile">Mile</option>
								</select>
							</div>
						</div>
					</form>
					<form id="form1">
					<h1 class="text-center">Convert</h1>
						
						<div id="weg_cat">
							<div class="form-group"> 
								<input id="weight" type="text" class="form-control input-lg" name="weight" placeholder="Insert Weight To be Converted">
							 </div>
							<div class="form-group"> 
								<select class="form-control input-lg" id="unit_3" name="unit_3">
									<option value="">Select Unit</option>
									<option value="kilo">Kilogram</option>
									<option value="pound">Pound</option>
									<option value="ounce">Ounce</option>
									<option value="ton">Ton</option>
									
								</select>
							</div>
							<h1 class="text-center ini">Into</h1>
							<div class="form-group"> 
								<select class="form-control input-lg" id="unit_4" name="unit_4">
									<option value="">Select Unit</option>
									<option value="kilo">Kilogram</option>
									<option value="pound">Pound</option>
									<option value="ounce">Ounce</option>
									<option value="ton">Ton</option>
									
								</select>
							</div>
						</div>
					
					<input class="btn btn-info btn-lg btn-block convert" type="submit" name="convert" value="convert">
				</form>

		<div id="output" style="margin-top: 20px;" class="text-center"> </div>

	</div>
</div>
		<div class="socials">
			<ul class="list-unstyled list-inline text-center">
		<li class="list-inline-item">
			<a class="btn-floating btn-tw mx-1">
				<i class=" fa fa-twitter-square fa-lg white-text mr-md-5 mr-3 fa-2x"></i>
			</a>
		</li>
		<li class="list-inline-item">
			<a class="btn-floating btn-fb mx-1">
				<i class=" fa fa-facebook-square fa-lg white-text mr-md-5 mr-3 fa-2x"></i>
			</a>
		</li>
		<li class="list-inline-item">
			<a class="btn-floating btn-ins mx-1">
				<i class=" fa fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"></i>
			</a>
		</li>
		
	</ul>
		</div>
 </div>

 <script src="assets/js/jquery.js" type="text/javascript"></script>
 <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
 <script type="text/javascript" src="assets/js/length.js"></script>
</body>
</html>