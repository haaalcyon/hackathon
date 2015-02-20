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
		<?php include 'connect.php'; 
		error_reporting(E_ALL ^ E_DEPRECATED);
		?>	
		<div class="container">
			<header>
				<div class="page-header">
					<?php
					echo "Created by [James Cryer](http://github.com/jamescryer) and the Huddle development team. Resemble.js";
					?>					
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
								<div id="diff-results" style="display:none;">
									<p>
										<strong>Mismatch value:<span id="mismatch"></span>%.
										<p id="result">RESULT IF TRAFFIC OR NOT TRAFFIC</p>
										<p id="test">VALUE FOR MISMATCH</p>
										
										<form method='post'>
										<?php
										if(isset($_POST['submit'])){
												$mismatch = $_POST['mismatchvalue'];
												mysql_query ("UPDATE street SET mismatchvalue='".$mismatch."' WHERE streetID=1");
												}
												
										if(isset($_POST['submit2'])){
												$mismatch = $_POST['mismatchvalue'];
												mysql_query ("UPDATE street SET mismatchvalue='".$mismatch."' WHERE streetID=2");
										}
										?>
											<input type='text' id='mismatchvalue1' name='mismatchvalue'/>
											<input type='submit' name='submit' value='SEND TO DB l'/>		
											<input type='submit' name='submit2' value='SEND TO DB r'/>												
										</form>
										
	
										<input type="button" value="GET VALUES" onclick="post();">											
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
			document.getElementById("mismatchvalue1").value = value;
		}
		</script>
	</body>
</html>
