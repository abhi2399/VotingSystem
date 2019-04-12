<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Voting</span>System</a>
				
					
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="abhi.jpg" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Username</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			
			
			
			<li class="active"><a href="/cdashboard"><em class="fa fa-dashboard">&nbsp;</em> Cand-Dashboard</a></li>
			<li><a href="/login"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div><!--/.row-->
		
			
		

		<!-- New election -->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-warning">
					<div class="panel-heading">
						Coming Up Election Date
					</div>
					<div class="panel-body">		
						<!-- Name-->
						<div class="row">
							<div class="col-md-3 col-sm-3 ">
											<b>Lok Sabha Election 2019</b>			
							</div>
							
								<div class="form-horizontal col-md-7 col-sm-7">	
		                                <!-- Name-->
									    <div class="form-group">
											<label class="col-md-2 col-sm-2 control-label" style="margin-top: -10px;">Date:</label>
											<div class="col-md-8 col-sm-8" style="margin-top: -3px;">
												<b>28-04-2019</b>
											</div>
										</div>																				
								</div>
						</div><!-- close row -->
						
						<hr>
                         
                        <div class="row">
							<div class="col-md-3 col-sm-3 ">
										<b>	Lok Sabha Election 2019	</b>		
							</div>
							
								<div class="form-horizontal col-md-7 col-sm-7">	
		                                <!-- Name-->
									    <div class="form-group">
											<label class="col-md-2 col-sm-2 control-label" style="margin-top: -10px;">Date:</label>
											<div class="col-md-8 col-sm-8" style="margin-top: -3px;">
												<b>28-04-2019</b>
											</div>
										</div>																				
								</div>
						</div><!-- close row --> 

					</div><!-- panel-body -->
				</div><!-- panel -->
			</div>		
		</div><!--/.row-->

        <!-- Older Election Result -->
		
		<div class="row">						
			<div class="col-md-9 col-md-offset-1">
				
				<div class="panel panel-info">
					<div class="panel-heading">
						Your Details	
					</div>
					
					<div class="panel-body">
						<div class="col-md-4 mt-3">
							<img src="abhi.jpg" class="img-rounded" alt="Cinque Terre" width="160px"; height="160px";>
						<!-- Name-->
								<div style="margin-top: 20px;">
									<b>Abhishek Dadhich</b>
								</div>		
						</div>
						<form method="post">
							<div class="form-horizontal">
								<fieldset>											
									<!-- Email -->
									<div class="form-group">
										<label class="col-md-4 control-label" for="email">Your E-mail:</label>
										<div class="col-md-8">
										<input class="form-control" id="email" type="email" placeholder="abhishekdadhich798@gmail.com">
									    </div>
									</div>
	                                <!-- Password -->
									<div class="form-group">
										<label class="col-md-4 control-label" for="email">Your Password:</label>
										<div class="col-md-8">
										<input class="form-control" id="name" type="Password" placeholder="qwertyuiop">
									    </div>
									</div>
									
									<!-- DOB -->
									<div class="form-group">
										<label class="col-md-4 control-label" for="message">Your DOB:</label>
										<div class="col-md-8">
										<input class="form-control" id="DOB" type="number" placeholder="23-05-1998">
									    </div>
									</div>
	                                <!-- Gender -->
									<div class="form-group">
										<label class="col-md-4 control-label" for="message">Your Gender:</label>
										<div class="col-md-8">
										<!-- <input class="form-control" id="name" type="Password" placeholder="Your Password"> -->
										<span>Male</span><input type="radio" name="gender" value="Male">
										<span>Female</span><input type="radio" name="gender" value="Female">
									    </div>
									</div>
									
	                                <!-- Phone Number -->
									<div class="form-group">
										<label class="col-md-4 control-label" for="message">Your Phone Number:</label>
										<div class="col-md-8">
										<input class="form-control" id="name" type="number" placeholder="7791853336">
									    </div>
									</div>
	                                <!-- bio-->
									<div class="form-group">
										<label class="col-md-4 control-label" for="message">Your Bio:</label>
										<div class="col-md-8">
										<textarea class="form-control" id="message" name="message" placeholder="Good behaviour" rows="5"></textarea>
									    </div>
									</div>
									<!-- Form actions -->
									<div class="form-group">
										<div class="col-md-12 ">
											<input type="submit" class="btn btn-primary btn-md pull-right" value="update">
										</div>
									</div>								
								</fieldset>
							</div>
						</form>	
					</div>
				</div>
			</div><!--/.col-->
		</div><!--/.row-->
	</div>	<!--/.main-->
	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	
		
</body>
</html>