<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><?=$this->config->item('site_name')?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320">
    <!--srart theme style -->
    <link href="<?=base_url().'assets/front/jobmesh/'?>css/main.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url().'assets/front/css/'?>custom.css" rel="stylesheet" type="text/css" />
    <?=$stylesheet?>
    <!-- end theme style -->
    <!-- favicon links -->
    <link rel="shortcut icon" type="image/png" href="<?=base_url().'assets/front/'?>images/favicon.png" />
</head>
<body>
	<?php $this->load->view('common/topnav'); ?>

	<?=$javascript;?>
	<!-- Script Start -->

    <script src="<?=base_url().'assets/front/jobmesh/'?>js/modernizr.custom.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?=base_url().'assets/front/jobmesh/'?>js/plugins/rsslider/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="<?=base_url().'assets/front/jobmesh/'?>js/plugins/rsslider/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="<?=base_url().'assets/front/jobmesh/'?>js/plugins/rsslider/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="<?=base_url().'assets/front/jobmesh/'?>js/plugins/rsslider/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="<?=base_url().'assets/front/jobmesh/'?>js/plugins/rsslider/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="<?=base_url().'assets/front/jobmesh/'?>js/plugins/rsslider/revolution.extension.slideanims.min.js"></script>
    <script src="<?=base_url().'assets/front/jobmesh/'?>js/plugins/countto/jquery.countTo.js" type="text/javascript"></script>
    <script src="<?=base_url().'assets/front/jobmesh/'?>js/plugins/owl/owl.carousel.js" type="text/javascript"></script>
    <script src="<?=base_url().'assets/front/jobmesh/'?>js/plugins/bootstrap-slider/bootstrap-slider.js" type="text/javascript"></script>
    <script src="<?=base_url().'assets/front/jobmesh/'?>js/plugins/fancybox/jquery.fancybox.js" type="text/javascript"></script>
    <script src="<?=base_url().'assets/front/jobmesh/'?>js/plugins/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
    <script src="<?=base_url().'assets/front/jobmesh/'?>js/jquery.mixitup.js" type="text/javascript"></script>
    <script src="<?=base_url().'assets/front/jobmesh/'?>js/plugins/jquery-ui/jquery-ui.js"></script>
    <script src="<?=base_url().'assets/front/jobmesh/'?>js/plugins/isotop/isotope.pkgd.js"></script>
    <script src="<?=base_url().'assets/front/jobmesh/'?>js/plugins/ckeditor/ckeditor.js"></script>
    <script src="<?=base_url().'assets/front/jobmesh/'?>js/plugins/ckeditor/adapters/jquery.js"></script>
    <script src="<?=base_url().'assets/front/jobmesh/'?>js/custom.js" type="text/javascript"></script>
    <!-- Script End -->
</body>
</html>