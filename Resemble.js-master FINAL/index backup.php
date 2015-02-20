<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="libs/twitter-bootstrap/bootstrap.min.css">
		<link rel="stylesheet" href="demoassets/resemble.css?v1">		
	</head>
	<body>
	<?php include 'connect.php'; ?>
		<div class="container">
			<header>
				<div class="page-header">
					<h1>TEST SITE</h1>
				</div>
			</header>
	
			<section role="main">
				<div class="row">
					<div class="span12">
						<div class="row">
							<div class="span6">
								<div id="dropzone1" class="small-drop-zone">
									Drop first image
								</div>
								<div id="dropzone2" class="small-drop-zone">
									Drop second image
								</div>
							</div>
							<div class="span6">
								<h2>TEST</h2>
								<!--<div id="image-diff" class="small-drop-zone">
									Diff will appear here.
								</div>
								-->
								<div id="diff-results" style="display:none;">
									<p>
										<strong>The second image is <span id="mismatch"></span>% different compared to the first.
										<p id="result">TEST</p>
										<p id="test" name="test">TEST</p>
										
										<form action='create.php' method='post'>
											<?php
											if(isset($_POST['submit'])){
												$username = $_POST['username'];
												mysql_query("INSERT INTO users VALUES('".$username."')");
												}
											?>
											<input type='text' name='username' value=''/>
											<input type='submit' name='submit' value='SEND TO DB'/>
											<input type="button" value="Submit" onclick="post();"> 
										</form>
										
										<span id="differentdimensions" style="display:none;">And they have different dimensions.</span>										
										</strong>
									</p>									
								</div>
								
								<p id="thesame" style="display:none;">
									<strong>These images are the same!</strong>
								</p>
							</div>
						</div>
					</div>
				</div>
				
		
		<script src="jquery.min.js"></script>
		<script src="resemble.js"></script>
		<script src="demoassets/main.js"></script>
		<script>
		function post(){
			var value;
			value = document.getElementById("mismatch").innerHTML;
			document.getElementById("test").innerHTML = value;		
		}
		</script>
	</body>
</html>
