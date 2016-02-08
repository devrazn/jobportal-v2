<!DOCTYPE HTML>
<html>
    <head>
        <title>Job Portal</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <meta name="keywords" content="" />

                <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
                <link href="<?=base_url();?>assets/user/css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
                <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
                <script src="<?=base_url();?>assets/user/js/jquery.min.js"></script>
                <script src="<?=base_url();?>assets/user/js/bootstrap.min.js"></script>
                <!-- Custom Theme files -->
                <link href="<?=base_url();?>assets/user/css/style.css" rel='stylesheet' type='text/css' />
                <link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
                <!-- font-Awesome -->
                <link href="<?=base_url();?>assets/user/css/font-awesome.css" rel="stylesheet"> 
                <!-- font-Awesome -->
                <link href="<?=base_url();?>assets/user/css/jquery-ui.css" rel="stylesheet">

                <script src="<?=base_url();?>assets/user/js/jquery-ui.min.js"></script> 

    </head>

    <body>
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="<?=base_url();?>assets/user/images/logo.png" alt=""/></a>
                </div>
                <!--/.navbar-header-->
                <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Jobs<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="location.html">Contract Jobs</a></li>
                                <li><a href="location.html">Walkin Jobs</a></li>
                                <li><a href="location.html">Jobs by Location</a></li>
                                <li><a href="location.html">Jobs by Function</a></li>
                                <li><a href="location.html">Jobs by Industry</a></li>
                                <li><a href="location.html">Jobs by Company</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services<b class="caret"></b></a>
                            <ul class="dropdown-menu multi-column columns-3">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <ul class="multi-column-dropdown">
                                            <li><a href="services.html">Action</a></li>
                                            <li><a href="services.html">Another action</a></li>
                                            <li><a href="services.html">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="services.html">Separated link</a></li>
                                            <li class="divider"></li>
                                            <li><a href="services.html">One more separated link</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4">
                                        <ul class="multi-column-dropdown">
                                            <li><a href="services.html">Action</a></li>
                                            <li><a href="services.html">Another action</a></li>
                                            <li><a href="services.html">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="services.html">Separated link</a></li>
                                            <li class="divider"></li>
                                            <li><a href="services.html">One more separated link</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4">
                                        <ul class="multi-column-dropdown">
                                            <li><a href="services.html">Action</a></li>
                                            <li><a href="services.html">Another action</a></li>
                                            <li><a href="services.html">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="services.html">Separated link</a></li>
                                            <li class="divider"></li>
                                            <li><a href="services.html">One more separated link</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Recruiters<b class="caret"></b></a>
                             <ul class="dropdown-menu">
                                <li><a href="login.html">Recruiter Updates</a></li>
                                <li><a href="recruiters.html">Recruiters you are following</a></li>
                                <li><a href="codes.html">Shortcodes</a></li>
                             </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">More<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="jobs.html">Walk-ins</a></li>
                                <li><a href="jobs.html">Bpo Jobs</a></li>
                                <li><a href="jobs.html">Teaching Jobs</a></li>
                                <li><a href="jobs.html">Diploma Jobs</a></li>
                                <li><a href="jobs.html">Tech Support</a></li>
                                <li><a href="jobs.html">Finance Jobs</a></li>
                                <li><a href="jobs.html">Part time Jobs</a></li>
                                <li><a href="jobs.html">Health Care</a></li>
                                <li><a href="jobs.html">Hospitality</a></li>
                                <li><a href="jobs.html">Internships</a></li>
                                <li><a href="jobs.html">Research Jobs</a></li>
                                <li><a href="jobs.html">Defence Jobs</a></li>
                            </ul>
                        </li>
                        <li><a href="login.php">Login</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Register<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?=base_url().'register';?>">Register As JobSeeker</a></li>
                                <li><a href="<?=base_url().'register/register_employeer';?>">Register As Employer</a></li>
                            </ul>
                        </li>
                        <li><a href="resume.html">Upload Resume</a></li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
        </nav>

<div class="banner_1">
    <div class="container">
        <div id="search_wrapper1">
           <div id="search_form" class="clearfix">
            <h1>Start your job search</h1>
            <p>
             <input type="text" class="text" placeholder=" " value="Enter Keyword(s)" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Keyword(s)';}">
             <input type="text" class="text" placeholder=" " value="Location" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Location';}">
             <label class="btn2 btn-2 btn2-1b"><input type="submit" value="Find Jobs"></label>
            </p>
           </div>
        </div>
   </div> 
</div>  