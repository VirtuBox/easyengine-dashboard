<?php
$root = $_SERVER['HTTP_HOST'];
?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="VirtuBox">
	<link rel="icon" href="favicon.ico">

	<title>EasyEngine Dashboard by VirtuBox</title>

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Custom styles for this template -->
	<link href="css/dashboard.css" rel="stylesheet">

	<script>
		var netdataNoBootstrap = true;
	</script>
	<script type="text/javascript" src="https://<?php echo $root; ?>/netdata/dashboard.js"></script>
	<script defer src="js/fontawesome-all.min.js"></script>


</head>

<body>
	<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
		<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="https://virtubox.net">VirtuBox</a>


	</nav>
	<div class="container-fluid">
		<div class="row">
			<nav class="col-md-2 d-none d-md-block bg-dark sidebar">
				<div class="sidebar-sticky">
					<ul class="nav flex-column">
						<li class="nav-item">
							<a class="nav-link active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">
								<i class="fas fa-home fa-lg"></i>
								Dashboard
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="list-db-list" data-toggle="list" href="#list-db" role="tab" aria-controls="db">
								<i class="fas fa-database fa-lg"></i>
								Database
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="list-cache-list" data-toggle="list" href="#list-cache" role="tab" aria-controls="cache">
								<i class="fas fa-tachometer-alt fa-lg"></i>
								Cache
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="https://<?php echo $root; ?>/files/" target="_blank">
								<i class="far fa-folder-open fa-lg"></i>
								File Manager
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="https://<?php echo $root; ?>/php/info.php" target="_blank">
								<i class="fas fa-code fa-lg"></i>
								PHP Info
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="https://<?php echo $root; ?>/netdata/" target="_blank">
								<i class="fas fa-chart-area fa-lg"></i>
								Monitoring
							</a>
						</li>
					</ul>

					<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
						<span>Server Health</span>
						<a class="d-flex align-items-center text-muted" href="#">
							<span data-feather="plus-circle"></span>
						</a>
					</h6>
					<ul class="nav flex-column mb-2">
						<li class="nav-item">
							<a class="nav-link" href="#">
								<span data-feather="file-text"></span>
								<embed src="https://<?php echo $root; ?>/netdata/api/v1/badge.svg?chart=disk_util.sda&alarm=10min_disk_utilization&refresh=auto"
								 type="image/svg+xml" height="20" />
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">
								<span data-feather="file-text"></span>
								<embed src="https://<?php echo $root; ?>/netdata/api/v1/badge.svg?chart=system.cpu&alarm=10min_cpu_usage&refresh=auto"
								 type="image/svg+xml" height="20" />
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">
								<span data-feather="file-text"></span>
								<embed src="https://<?php echo $root; ?>/netdata/api/v1/badge.svg?chart=system.ram&alarm=ram_in_use&refresh=auto"
								 type="image/svg+xml" height="20" />
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">
								<span data-feather="file-text"></span>
								<embed src="https://<?php echo $root; ?>/netdata/api/v1/badge.svg?chart=disk_space._&alarm=disk_space_usage&refresh=auto"
								 type="image/svg+xml" height="20" />
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">
								<span data-feather="file-text"></span>
								<embed src="https://<?php echo $root; ?>/netdata/api/v1/badge.svg?chart=mysql_local.queries&alarm=mysql_10s_slow_queries&refresh=auto"
								 type="image/svg+xml" height="20" />
							</a>
						</li>
					</ul>
				</div>
			</nav>


			<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
				<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
					<h1 class="h2">EasyEngine Dashboard</h1>
					<div class="btn-toolbar mb-2 mb-md-0">
						<div class="btn-group mr-2">

						</div>

					</div>
				</div>
				<div class="tab-content" id="nav-tabContent">
					<div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list" aria-selected="true">
						<div class="row">
							<div class="col-sm">
								<div data-netdata="system.cpu" data-title="cpu" data-chart-library="gauge" data-height="270" data-width="100%" data-points="60"
								 data-after="-60"></div>
							</div>
							<div class="col-sm">
								<div class="netdata-container-gauge" data-netdata="nginx_local.connections" data-dimensions="" data-height="270" data-width="100%"
								 data-chart-library="gauge" data-gauge-adjust="width" data-title="Nginx Connections" data-before="0" data-after="-480"
								 data-points="CHART_DURATION" data-colors="#0099C6" role="application"></div>
							</div>
							<div class="col-sm">
								<div class="netdata-container-gauge" data-netdata="nginx_local.requests" data-dimensions="" data-height="270" data-width="100%"
								 data-chart-library="gauge" data-gauge-adjust="width" data-title="Nginx Requests" data-before="0" data-after="-480"
								 data-points="CHART_DURATION" data-colors="#66AA00" role="application" style="will-change: transform;"></div>
							</div>
							<div class="col-sm">
								<div class="netdata-container-gauge" data-netdata="net.eth0" data-dimensions="received" data-height="270" data-width="100%"
								 data-chart-library="gauge" data-gauge-adjust="width" data-title="Network IN" data-before="0" data-after="-480" data-points="CHART_DURATION"
								 data-colors="" role="application" style="width: 12%; will-change: transform;"></div>
							</div>

							<div class="col-sm">
								<div class="netdata-container-gauge" data-netdata="net.eth0" data-dimensions="sent" data-height="270" data-width="100%" data-chart-library="gauge"
								 data-gauge-adjust="width" data-title="Network OUT" data-before="0" data-after="-480" data-points="CHART_DURATION"
								 data-colors="" role="application" style="width: 12%; will-change: transform;"></div>
							</div>

						</div>

						<hr>

						<div class="row">
							<div class="col-sm-12">
								<div class="table-responsive">
									<table class="table table-striped table-sm">
										<thead class="thead-dark">
											<tr>

												<th>CPU</th>
												<th>RAM</th>


											</tr>
										</thead>
										<tbody>

											<tr>

												<td class="bg-white">
													<div data-netdata="system.cpu" data-dimensions="user" data-chart-library="dygraph" data-dygraph-theme="sparkline"
													 data-width="100%" data-height="200px" data-after="-240" data-colors="#3366CC"></div>
												</td>
												<td class="bg-white">
													<div data-netdata="mem.available" data-chart-library="dygraph" data-dygraph-theme="sparkline" data-width="100%" data-height="200px"
													 data-after="-240" data-colors="#FF5555" data-colors="#3366CC"></div>
												</td>



											</tr>


										</tbody>
									</table>
								</div>

							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm">

						</div>
						<div class="col-sm">

						</div>
						<div class="col-sm">

						</div>
						<div class="col-sm">

						</div>
						<div class="col-sm">

						</div>


					</div>

					<div class="tab-pane fade" id="list-db" role="tabpanel" aria-labelledby="list-db-list">
						<div class="row">
							<div class="container">
								<div class="card-deck">
									<div class="card">
										<div class="text-center">
											<i class="fas fa-database fa-6x"></i>
											<div class="card-body">
												<h4 class="card-title">phpMyAdmin</h4>

											</div>

											<div class="card-footer">
												<a href="https://<?php echo $root; ?>/db/pma/" target="_blank">
													<button type="button" class="btn btn-primary btn-lg btn-block">Open</button>
												</a>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="text-center">
											<i class="fas fa-database fa-6x"></i>

											<div class="card-body">
												<h4 class="card-title">Adminer</h4>

											</div>

											<div class="card-footer">
												<a href="https://<?php echo $root; ?>/db/adminer/" target="_blank">
													<button type="button" class="btn btn-primary btn-lg btn-block">Open</button>
												</a>

											</div>
										</div>
									</div>
									<div class="card">
										<div class="text-center">
											<i class="fas fa-database fa-6x"></i>

											<div class="card-body">
												<h4 class="card-title">Anemometer</h4>



											</div>

											<div class="card-footer">
												<a href="https://<?php echo $root; ?>/db/anemometer/" target="_blank">
													<button type="button" class="btn btn-primary btn-lg btn-block">Open</button>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
					<div class="tab-pane fade" id="list-cache" role="tabpanel" aria-labelledby="list-cache-list">
						<div class="row">
							<div class="container">
								<div class="card-deck">
									<div class="card">
										<div class="text-center">
											<i class="fas fa-server fa-6x"></i>
											<div class="card-body">
												<h4 class="card-title">Memcached</h4>

											</div>

											<div class="card-footer">
												<a href="https://<?php echo $root; ?>/cache/memcache/" target="_blank">
													<button type="button" class="btn btn-primary btn-lg btn-block">Open</button>
												</a>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="text-center">
											<i class="fas fa-server fa-6x"></i>

											<div class="card-body">
												<h4 class="card-title">Redis</h4>

											</div>

											<div class="card-footer">
												<a href="https://<?php echo $root; ?>/cache/redis/phpRedisAdmin/" target="_blank">
													<button type="button" class="btn btn-primary btn-lg btn-block">Open</button>
												</a>

											</div>
										</div>
									</div>
									<div class="card">
										<div class="text-center">
											<i class="fas fa-server fa-6x"></i>

											<div class="card-body">
												<h4 class="card-title">Opcache</h4>



											</div>

											<div class="card-footer">
												<a href="https://<?php echo $root; ?>/cache/opcache/opgui.php" target="_blank">
													<button type="button" class="btn btn-primary btn-lg btn-block">Open</button>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>
		</div>
	</div>








	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
	 crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
	 crossorigin="anonymous"></script>
	<script src="js/bootstrap.min.js"></script>







</body>

</html>