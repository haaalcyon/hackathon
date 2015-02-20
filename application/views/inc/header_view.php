<!doctype html>
<html lang="en">
    <!----HEADER---->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Traffic Congestion Avoidance System</title>
        <link rel="stylesheet" href="<?=base_url()?>public/css/bootstrap.min.css"/>        
        <link rel="stylesheet" href="<?=base_url()?>public/css/style.css"/>
        <script src="<?=base_url()?>public/js/jquery.js"></script>
        <script src="<?=base_url()?>public/js/bootstrap.min.js"></script>
        <script src="<?=base_url()?>public/js/resemble.js"></script>
        
       
</head>
<div class="body">
    
   
    <!------Navigation Bar
    ========================------->
    <div class="navbar-wrapper">
      <div class="container">

       <div class="navbar navbar-default navbar-fixed-top">
          
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">                
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><img src="<?=base_url()?>/public/img/TCASv1.png" width="65" height="60"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <b>
              <ul class="nav navbar-nav">
                <li class=""><a href="<?=site_url('home/index')?>">HOME</a></li>                
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">AREAS <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    
                    <li><a href="<?=site_url('areas/index')?>">Cebu</a></li>
                    <li><a href="#">Lapu-lapu</a></li>                    
                    <li><a href="#">Mandaue</a></li>                    
                    <li><a href="#">Talisay</a></li>                    
                    <li><a href="#">Consolacion</a></li>                    
                    <li><a href="#">Lilo-an</a></li>                  
                  </ul>
                </li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">BOOKMARKS <b class="caret"></b></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href=""<?=site_url('areas/index')?>>My Usual Route</a></li>
                        <li><a href="#">First Route</a></li>
                </li> 
              </ul>    
				<li class=""><a href="#">Date</a></li>     
              </ul>   
                </b>
            </div>          
        </div>
      </div>
    </div>
    <!------Navigation Bar
    ========================------->
  