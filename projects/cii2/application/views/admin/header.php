<!DOCTYPE html>
<?php
if (!$this->session->logged_in)
{
	redirect(base_url()."admin/login");
}

?>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="tr" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title><?=$title?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="<?=base_url()?>assets/admin/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url()?>assets/admin/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url()?>assets/admin/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url()?>assets/admin/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>

<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<link href="<?=base_url()?>assets/admin/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url()?>assets/admin/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url()?>assets/admin/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url()?>assets/admin/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url()?>assets/admin/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="<?=base_url()?>assets/admin/css/style-metronic.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url()?>assets/admin/css/style.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url()?>assets/admin/css/style-responsive.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url()?>assets/admin/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url()?>assets/admin/css/pages/tasks.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url()?>assets/admin/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="<?=base_url()?>assets/admin/css/print.css" rel="stylesheet" type="text/css" media="print"/>
<link href="<?=base_url()?>assets/admin/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="<?=base_url()?>assets/admin/plugins/jstree/docs/assets/favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-fixed-top">
	<!-- BEGIN TOP NAVIGATION BAR -->
	<div class="header-inner">
		<!-- BEGIN LOGO -->
		<a class="navbar-brand" href="<?=base_url();?>admin/home/index">
			<img src="<?=base_url()?>assets/admin/img/logo.png" alt="logo" class="img-responsive"/>
		</a>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<img src="<?=base_url()?>assets/admin/img/menu-toggler.png" alt=""/>
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<ul class="nav navbar-nav pull-right">
			<!-- BEGIN USER LOGIN DROPDOWN -->
			<li class="dropdown user">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<img alt="" src="<?=base_url()?>assets/admin/img/avatar1_small.jpg"/>
					<span class="username">
						<?=$this->session->logged_in['username']; ?> 
					</span>
					<i class="fa fa-angle-down"></i>
				</a>
				<ul class="dropdown-menu">
					<li>
						<a href="<?=base_url();?>admin/home/profilim">
							<i class="fa fa-user"></i> <?php echo lang("profile");?>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-envelope"></i> <?php echo lang("inbox");?>
						</a>
					</li>
					
					<li class="divider">
					</li>
					<li>
						<a href="<?=base_url();?>admin/login">
							<i class="fa fa-key"></i> <?php echo lang("quit");?>
						</a>
					</li>
					
				</ul>
			</li>
			<!-- END USER LOGIN DROPDOWN -->
		</ul>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
