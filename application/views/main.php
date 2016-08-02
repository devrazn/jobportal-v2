<!DOCTYPE html>
<head>

<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>
	<?php 
        echo $this->config->item('site_name'); 
        if($this->config->item('site_slogan')) {
          echo " - " .$this->config->item('site_slogan');
        }
      ?>
</title>

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/colors/green.css" id="colors">

<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>

<body>