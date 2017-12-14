<?php
$root = $_SERVER['HTTP_HOST'];
?>
<html lang="en"><head>

    <title>EasyEngine Dashboard by VirtuBox</title>
    <meta name="description" content="A Custom Dashboard built with Bootstrap and Netdata for EasyEngine - by VirtuBox.">

    <link rel="icon" href="favicon.ico">
	
	


    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="author" content="VirtuBox">

    <meta property="og:locale" content="en_US" />
    <meta property="og:image" content="https://img.virtubox.net/images/2017/12/14/Screenshot206.png"/>





    <!-- Bootstrap core CSS -->
 <link href="css/bootstrap.min.css" rel="stylesheet">
	<script>var netdataNoBootstrap = true;</script>
	<script type="text/javascript">var netdataServer = "https://<?php echo $root; ?>/netdata/";</script>
	<script type="text/javascript" src="https://<?php echo $root; ?>/netdata/dashboard.js"></script>
    <!-- Custom styles for this template -->
    <link href="css/ee-dashboard.css" rel="stylesheet">
</head>

  <body>

    <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 py-4">
              <h4 class="text-white">About</h4>
              <p class="text-muted">This dashboard is built with <a href="https://v4-alpha.getbootstrap.com">Bootstrap</a> and <a href="https://my-netdata.io/">Netdata</a> for <a href="https://easyengine.io/">EasyEngine</a> by <a href="https://virtubox.net/" title="VirtuBox" >VirtuBox</a> </p>
            </div>
            <div class="col-sm-4 py-4">
              <h4 class="text-white">Social</h4>
              <ul class="list-unstyled">
                <li><a href="https://twitter.com/VirtuBox" class="text-white">Follow on Twitter</a></li>
                <li><a href="https://www.facebook.com/virtubox" class="text-white">Like on Facebook</a></li>
				<li><a href="https://github.com/VirtuBox" class="text-white">Follow on Github</a></li>
				
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand">EasyEngine Dashboard by VirtuBox</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>

    <main role="main">

     
      <div class="album text-muted">
        <div class="container">

     
			  

<div class="row">
  <div class="col-3">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home"> <i class="fas fa-database"></i> Database</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile"><i class="fas fa-tachometer-alt"></i> Cache</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages"><i class="fas fa-chart-bar"></i> Monitoring</a>

    </div>
  </div>
  <div class="col-9">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list"><div class="container"><div class="card-deck">
  <div class="card">
	  <div class="text-center">
   <i class="fas fa-database fa-10x"></i>

    <div class="card-body">
      <h4 class="card-title">phpMyAdmin</h4>

    </div>
	  	 
    <div class="card-footer">
	<a href="https://<?php echo $root; ?>/db/pma/" target="_blank" ><button type="button" class="btn btn-primary btn-lg btn-block">Open</button></a>
    </div>
		   </div>
  </div>
  <div class="card">
	  <div class="text-center">
   <i class="fas fa-database fa-10x"></i>

    <div class="card-body">
      <h4 class="card-title">Adminer</h4>

    </div>
		  	
    <div class="card-footer">
	<a href="https://<?php echo $root; ?>/db/adminer/" target="_blank" ><button type="button" class="btn btn-primary btn-lg btn-block">Open</button></a>

		  </div>
    </div>
  </div>
  <div class="card">
	  <div class="text-center">
   <i class="fas fa-database fa-10x"></i>

    <div class="card-body">
      <h4 class="card-title">Anemometer</h4>
	
         
   
			  </div>
    
    <div class="card-footer">
	<a href="https://<?php echo $root; ?>/db/anemometer/" target="_blank" ><button type="button" class="btn btn-primary btn-lg btn-block">Open</button></a>
    </div>
		  </div>
  </div>
	  </div></div></div>
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list"><div class="container"><div class="card-deck">
  <div class="card">
	  <div class="text-center">
   <i class="fas fa-database fa-10x"></i>

    <div class="card-body">
      <h4 class="card-title">memcache</h4>

    </div>
	  	 
    <div class="card-footer">
	<a href="https://<?php echo $root; ?>/cache/memcache/" target="_blank" ><button type="button" class="btn btn-primary btn-lg btn-block">Open</button></a>
    </div>
		   </div>
  </div>
  <div class="card">
	  <div class="text-center">
   <i class="fas fa-database fa-10x"></i>

    <div class="card-body">
      <h4 class="card-title">Redis</h4>

    </div>
		  	
    <div class="card-footer">
	<a href="https://<?php echo $root; ?>/cache/redis/phpRedisAdmin/" target="_blank" ><button type="button" class="btn btn-primary btn-lg btn-block">Open</button></a>

		  </div>
    </div>
  </div>
  <div class="card">
	  <div class="text-center">
   <i class="fas fa-database fa-10x"></i>

    <div class="card-body">
      <h4 class="card-title">Opcache</h4>
	
         
   
			  </div>
    
    <div class="card-footer">
	<a href="https://<?php echo $root; ?>/cache/opcache/opgui.php" target="_blank" ><button type="button" class="btn btn-primary btn-lg btn-block">Open</button></a>
    </div>
		  </div>
  </div>
	  </div></div></div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list"><div class="container">
	  
	  <table class="table table-striped text-center">
          <thead class="thead-dark">
          <tr>
            <th></th>
            <th>CPU</th>
            <th>RAM</th>
            <th>SWAP</th>
			 <th>DISK</th>
          </tr>
          </thead>
          <tbody>
          <tr>
         
			  <td> 
			    </td> 
      <td> 
	  <img src="https://<?php echo $root; ?>/netdata/api/v1/badge.svg?chart=system.cpu&amp;alarm=10min_cpu_usage&amp;refresh=auto">
	  </td>
      <td>  
	  <img src="https://<?php echo $root; ?>/netdata/api/v1/badge.svg?chart=system.ram&alarm=ram_in_use&refresh=auto">
	  </td>
      <td>  
	  <img src="https://<?php echo $root; ?>/netdata/api/v1/badge.svg?chart=system.swap&alarm=used_swap&refresh=auto">
	  </td> <td> 
	  <img src="https://<?php echo $root; ?>/netdata/api/v1/badge.svg?chart=system.swap&alarm=used_swap&refresh=auto">
	  </td>

          </tr>
          
         
          </tbody>
        </table>
	  
	  <div class="card-deck">
  <div class="card">
	  <div class="text-center">

  <div data-netdata="nginx_local.connections" data-title="" data-height="250" data-width="250" data-dimensions="" data-chart-library="gauge" data-gauge-adjust="width" data-before="0" data-after="-480" data-points="CHART_DURATION" data-colors="#0099C6"></div>

    <div class="card-body">

	<h4 class="card-title">Nginx</h4>
    </div>
	  	 
    <div class="card-footer">

    </div>
		   </div>
  </div>
  <div class="card">
	  <div class="text-center">
  
     <div data-netdata="phpfpm_local.requests" data-title=""  data-chart-library="gauge"  data-width="250" data-points="60"  data-after="-60" data-height="250"></div>


    <div class="card-body">

	<h4 class="card-title">PHP-FPM</h4>
    </div>
		  	
    <div class="card-footer">


		  </div>
		   </div>
    </div>
 
  <div class="card">
	  <div class="text-center">
  <div data-netdata="mysql_local.connections" data-title="" data-height="250" data-width="250" data-dimensions="" data-chart-library="gauge" data-gauge-adjust="width" data-before="0" data-after="-480" data-points="CHART_DURATION" data-colors="#0099C6"></div>

    <div class="card-body">

	<h4 class="card-title">MySQL</h4>
         
   
			  </div>
      <div class="card-footer">


		  </div>
   
		  </div>
  </div>
	  </div></div> </div>
      
    </div>
  </div>
</div>



			  </div></div>
		     
      </div>

    </main>

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        <p>Built with <a href="https://v4-alpha.getbootstrap.com">Bootstrap</a> and <a href="https://my-netdata.io/">Netdata</a> for <a href="https://easyengine.io/">EasyEngine</a> by <a href="https://virtubox.net/" title="VirtuBox" >VirtuBox</a>.</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
 <script>
      var RELOAD_EVERY = 5;
      setTimeout(function(){
        location.reload();
      }, RELOAD_EVERY * 60 * 1000);
    </script>
</body></html>