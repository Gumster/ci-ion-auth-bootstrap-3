<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php if (isset($page_title)) echo strip_tags($page_title) . ' | '; ?><?php echo $site_name; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="/assets/ico/favicon.png">
        <link href="/assets/css/lavish-bootstrap.css" rel="stylesheet" media="screen">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.1/css/font-awesome.css" rel="stylesheet">
        <link href="/assets/css/sticky-footer-navbar.css" rel="stylesheet">  
        <link href='http://fonts.googleapis.com/css?family=Quattrocento+Sans' rel='stylesheet' type='text/css'>
        <link href="/assets/css/styles.css" rel="stylesheet">
        <!--[if lt IE 9]>
          <script src="/assets/js/html5shiv.js"></script>
          <script src="/assets/js/respond.min.js"></script>
        <![endif]-->
        <?php if (isset($head_content)) echo $head_content; ?>
    </head>
    <body>

        <!-- Wrap all page content here -->
        <div id="wrap">

            <!-- Fixed navbar -->
            <div id="mast" class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <span class="h1"><a class="navbar-brand" href="<?php echo base_url(); ?>"> <?php if (isset($site_name)) echo $site_name; ?></a></span>
                    </div>

                    <div class="collapse navbar-collapse">
                        <?php if (isset($my_controller)) : ?>   
                            <?php if ($logged_in) : ?>  
                                <?php if ($is_admin) : ?>  
                                    <ul class="nav navbar-nav"> <!--
                                      <li><a href="#contact">Contact</a></li>//-->               
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Users <b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?php echo base_url('auth'); ?>">Manage users</a></li>   
                                                <li><a href="<?php echo base_url('auth/create_user'); ?>">Create user</a></li>
                                                <li><a href="<?php echo base_url('auth/create_group'); ?>">Create group</a></li>
                                            </ul>
                                        </li> 
                                    <?php endif; ?>


                                </ul>
                                <ul class="nav navbar-nav pull-right">
                                    <li id="login-name"><a title="Last login: <?php echo $last_login; ?>"><i class="fa fa-user"></i> <?php echo $login_name; ?></a></li>
                                    <li><a href="<?php echo base_url('auth/logout'); ?>">Logout <i class="fa fa-sign-out"></i></a></li>
                                </ul>
                            <?php endif; ?> 
                        <?php endif; ?>     
                    </div><!--/.nav-collapse -->
                </div>
            </div>

            <!-- Begin page content -->
            <div id="main-container" class="container">
                <div class="page-header">
                    <h1><?php if(isset($page_title)) echo $page_title; ?></h1>
                </div> 
