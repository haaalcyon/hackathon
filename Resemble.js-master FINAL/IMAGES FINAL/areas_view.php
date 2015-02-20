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
        
     <div class="col-md-6">
		
		<img src="<?=base_url()?>/public/images/full left empty right.jpg">
		
        
       
		</div>
			 
        <div class="col-md-4">
          <h2 class="featurette-heading">Banilad </h2>
			<form method='post'>
			<?php
			$mem_query = mysql_query("SELECT mismatchvalue FROM street WHERE streetID=1");
			while($run_mem = mysql_fetch_array($mem_query)){
				$mismatchvalue = $run_mem['mismatchvalue'];
				if($mismatchvalue >= 50)
				echo "North Bound: Heavy Traffic";
					else if($mismatchvalue <= 10){
					echo "North Bound: Light Traffic";
					echo "<img src="<?=base_url()?>/public/images/full left empty right.jpg">";
					}
						else
						echo "North Bound: Moderate Traffic";						
			}
			echo "<br></br>";
			$mem_query = mysql_query("SELECT mismatchvalue FROM street WHERE streetID=2");
			while($run_mem = mysql_fetch_array($mem_query)){
				$mismatchvalue = $run_mem['mismatchvalue'];
				if($mismatchvalue >= 50)
				echo "South Bound: Heavy Traffic";
					else if($mismatchvalue <= 10)
					echo "South Bound: Light Traffic";
						else
						echo "South Bound: Moderate Traffic";
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
			<input type='submit' name='submit' value='REFRESH'/>										
			</form>
          
        </div>
        </div>
      </div>
 </div>
      <hr class="featurette-divider">