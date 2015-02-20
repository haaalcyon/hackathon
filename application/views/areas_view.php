 <div class="maoni">
 <div class="row featurette">
     <div class="container marketing">
     <div class="col-sm-2">
         
       <ul class="nav navbar-default">
           <li><a href="#">Banilad</a></li>
           <li><a href="#">A.C Cortes</a></li>
           <li><a href="#">MJ Cuenco</a></li>
           <li><a href="#">Sanciangko</a></li>
       </ul>
     </div>
        
     <div class="col-md-6" id="DISPLAY">
	 
	 
		
		
        
       
		</div>
			 
        <div class="col-md-4">
          <h2 class="featurette-heading">Banilad </h2>
			<form method='post'>
			<?php
			$IMAGE = "";
			$mem_query = mysql_query("SELECT mismatchvalue FROM street WHERE streetID=1");
			while($run_mem = mysql_fetch_array($mem_query)){
				$mismatchvalue = $run_mem['mismatchvalue'];
				if($mismatchvalue >= 50){
				echo "South Bound: Heavy Traffic";
				$SBOUND = $mismatchvalue;}
					else if($mismatchvalue <= 10){
					echo "South Bound: Light Traffic";
					$SBOUND = $mismatchvalue;}
						else{
						echo "South Bound: Moderate Traffic";
						$SBOUND = $mismatchvalue;}
			}
			echo "<br></br>";
			$mem_query = mysql_query("SELECT mismatchvalue FROM street WHERE streetID=2");
			while($run_mem = mysql_fetch_array($mem_query)){
				$mismatchvalue = $run_mem['mismatchvalue'];
				if($mismatchvalue >= 50){
				echo "North Bound: Heavy Traffic";
				$NBOUND = $mismatchvalue;}
					else if($mismatchvalue <= 10){
					echo "North Bound: Light Traffic";
					$NBOUND = $mismatchvalue;}
						else{
						echo "North Bound: Moderate Traffic";
						$NBOUND = $mismatchvalue;}
			}
			
			
			switch($mismatchvalue) {
			case ($SBOUND <= 10 && $NBOUND <= 10):
				$IMAGE = "/tcas/public/images/full empty.jpg";
				echo '<div id="IMAGE"><img src="'.$IMAGE.'""width="500px" height="250px"/></div>';
			break;
			case ($SBOUND >= 50 && $NBOUND >= 50):
				$IMAGE = "/tcas/public/images/full.jpg";
				echo '<div id="IMAGE"><img src="'.$IMAGE.'""width="500px" height="250px"/></div>';
			break;
			case ($SBOUND >= 50 && $NBOUND >= 10 && $NBOUND <= 49):
				$IMAGE = "/tcas/public/images/full left empty right.jpg";
				echo '<div id="IMAGE"><img src="'.$IMAGE.'""width="500px" height="250px"/></div>';
			break;
			//case ($SBOUND <= 10 && $NBOUND <= 10):
			//	$IMAGE = "/tcas/public/images/full empty.jpg";
			//	echo '<div id="IMAGE"><img src="'.$IMAGE.'""width="500px" height="250px"/></div>';
			//break;
			//case ($SBOUND <= 10 && $NBOUND <= 10):
			//	$IMAGE = "/tcas/public/images/full empty.jpg";
			//	echo '<div id="IMAGE"><img src="'.$IMAGE.'""width="500px" height="250px"/></div>';
			//break;
			
			
			
			
			
			
			
			
			}
			?>
			
			<form method='post'>			
				<?php
				if(isset($_POST['submit'])){
				$mem_query = mysql_query("SELECT mismatchvalue FROM street");
				while($run_mem = mysql_fetch_array($mem_query)){
					$mismatchvalue = $run_mem['mismatchvalue'];
					}
				}
				?>
				<br></br>
			<input type='submit' name='submit' value='REFRESH' onclick="post();"/>										
			</form>
          
        </div>
        </div>
      </div>
 </div>
 </div>
      <hr class="featurette-divider">