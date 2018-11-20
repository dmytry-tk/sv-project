<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

$post_id = 843; //Виджет - Header
$tel_1 = get_field("tel_1", $post_id);
$tel_1_to = get_field("tel_1_to", $post_id);
setcookie("present", "FALSE");
?>

<!DOCTYPE html>
<html lang="ru">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimal-ui">	
	<meta name="theme-color" content="#000000">
	<meta name="msapplication-navbutton-color" content="#000000">
	<meta name ="apple-mobile-web-app-status-bar-style" content ="#000000">
	<meta name="description" content="" />
	<base href="http://sv.primochki.space/">
	<link rel="icon" href="http://sv.primochki.space/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="http://sv.primochki.space/favicon.ico" type="image/x-icon" />
	<link href="/wp-content/themes/svgroup/assets/css/main-app.css" rel="stylesheet">
	<link href="/wp-content/themes/svgroup/assets/css/tmp.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<?php
		//определяем текущую категорию
		$r = explode("/", $_SERVER['REQUEST_URI']);
		$cont_r = count($r);
		//var_dump ($cont_r);
		if (strripos($_SERVER['REQUEST_URI'], "/create/") !== false) {
			if ($cont_r > 4) {

				//Получаем path url проекта и по нему определяем ID
				$path_url = explode("/", $_SERVER['REQUEST_URI']);
				$path_url = $path_url[count($path_url)-2];
				$post = get_page_by_path($path_url, '', 'create_in');
				$post_id = $post->ID;
				$title  = get_post_meta( get_the_ID(), '_yoast_wpseo_title', true);
				//var_dump($title);
			}
		}


?>

<?php wp_head(); ?>

<meta name="mobile-web-app-capable" content="yes">
<meta name="theme-color" content="transparent">
<meta name="application-name" content="favicon">
<link rel="apple-touch-icon" sizes="57x57" href="/wp-content/themes/svgroup/assets/icons/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/wp-content/themes/svgroup/assets/icons/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/wp-content/themes/svgroup/assets/icons/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/wp-content/themes/svgroup/assets/icons/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/wp-content/themes/svgroup/assets/icons/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/wp-content/themes/svgroup/assets/icons/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/wp-content/themes/svgroup/assets/icons/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/wp-content/themes/svgroup/assets/icons/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/wp-content/themes/svgroup/assets/icons/apple-touch-icon-180x180.png">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="apple-mobile-web-app-title" content="favicon">
<link rel="icon" type="image/png" sizes="32x32" href="/wp-content/themes/svgroup/assets/icons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/wp-content/themes/svgroup/assets/icons/favicon-16x16.png">
<link rel="shortcut icon" href="/wp-content/themes/svgroup/assets/icons/favicon.ico">
<link rel="apple-touch-startup-image" media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 1)" href="/wp-content/themes/svgroup/assets/icons/apple-touch-startup-image-320x460.png">
<link rel="apple-touch-startup-image" media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 2)" href="/wp-content/themes/svgroup/assets/icons/apple-touch-startup-image-640x920.png">
<link rel="apple-touch-startup-image" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)" href="/wp-content/themes/svgroup/assets/icons/apple-touch-startup-image-640x1096.png">
<link rel="apple-touch-startup-image" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2)" href="/wp-content/themes/svgroup/assets/icons/apple-touch-startup-image-750x1294.png">
<link rel="apple-touch-startup-image" media="(device-width: 414px) and (device-height: 736px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 3)" href="/wp-content/themes/svgroup/assets/icons/apple-touch-startup-image-1182x2208.png">
<link rel="apple-touch-startup-image" media="(device-width: 414px) and (device-height: 736px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 3)" href="/wp-content/themes/svgroup/assets/icons/apple-touch-startup-image-1242x2148.png">
<link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 1)" href="/wp-content/themes/svgroup/assets/icons/apple-touch-startup-image-748x1024.png">
<link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 1)" href="/wp-content/themes/svgroup/assets/icons/apple-touch-startup-image-768x1004.png">
<link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 2)" href="/wp-content/themes/svgroup/assets/icons/apple-touch-startup-image-1496x2048.png">
<link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 2)" href="/wp-content/themes/svgroup/assets/icons/apple-touch-startup-image-1536x2008.png">


</head>
<body>


<?php if ($_SERVER['REQUEST_URI'] == "/" or $_SERVER['REQUEST_URI'] == "/en/") { ?>

<style>
	.preloader{
		width: 100%;
		height: 100vh;
		background: #191b1b;
		position: fixed;
		top: 0;
		left: 0;
		z-index: 500;
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
		/* display: none; */
	}
	.pre_logo{
		width: 200px;
		height: 200px;
		position: relative;
		z-index: 501;
	}
	.pre_logo svg{
		width: 100%;
		height: 100%
	}
	.persent{
		position: absolute;
		width: 200px;
		height: 200px;
		bottom: 60px;
		left: calc(50% - 100px);
		display: flex;
		flex-direction: row;
		justify-content: center;
		align-items: center;
	}
	.persent span{
		font-size: 16px;
		position: relative;
		display: inline-block;
		z-index: 2;
	}
 /* .persent:before{
		content: "";
		position: absolute;
		width: 100px;
		height: 100px;
		background: url('img/circle.svg');
		background-position: center center;
		background-size: 100%;
		top: calc(50% - 50px);
		left: calc(50% - 50px);
		z-index: 1;
		opacity: 0.3;

	}  */
	.st500{fill:#ffffff; stroke: #ffffff;fill-opacity: 0;stroke-width: 2;}
  .btfWvnfm_0{stroke-dasharray:2330 2332;stroke-dashoffset:2331;animation:btfWvnfm_draw 4666ms ease-out 0.5s forwards;}
  .btfWvnfm_1{stroke-dasharray:564 566;stroke-dashoffset:565;animation:btfWvnfm_draw 4666ms ease-out 0.5s forwards;}
  .btfWvnfm_2{stroke-dasharray:251 253;stroke-dashoffset:252;animation:btfWvnfm_draw 4666ms ease-out 0.6s forwards;}
  .btfWvnfm_3{stroke-dasharray:137 139;stroke-dashoffset:138;animation:btfWvnfm_draw 4666ms ease-out 0.7s forwards;}
  .btfWvnfm_4{stroke-dasharray:122 124;stroke-dashoffset:123;animation:btfWvnfm_draw 4666ms ease-out 0.8s forwards;}
  .btfWvnfm_5{stroke-dasharray:102 104;stroke-dashoffset:103;animation:btfWvnfm_draw 4666ms ease-out 0.7s forwards;}
  .btfWvnfm_6{stroke-dasharray:422 424;stroke-dashoffset:423;animation:btfWvnfm_draw 4666ms ease-out 0.7s forwards;}
  @keyframes btfWvnfm_draw{
  
  90%{
    stroke-dashoffset:0;
    fill-opacity: 0;
  }
  100%{
    stroke-dashoffset:0;
    fill-opacity: 1;
    }
  }
	@media screen and (max-width: 767px) {
		.pre_logo{
		width: 150px;
		height: 150px;
		position: absolute;
		z-index: 501;
		top: calc(50% - 100px);
		left: calc(50% - 75px)
	}

	.persent{
		position: absolute;
		width: 100px;
		height: 100px;
		bottom: 50;
		left: calc(50% - 50px);
		display: flex;
		flex-direction: row;
		justify-content: center;
		align-items: center;
	}
	}
	@media screen and (min-width: 768px) and (max-width: 1199px) {
	.pre_logo{
		width: 360px;
		height: 360px;
		z-index: 501;
		position: absolute;
		top: calc(50% - 250px);
		left: calc(50% - 180px);
	}
}
</style>
<body class="ovf">
	
		<div class="wrapper main_page">
 <div class="preloader">
  <div class="pre_logo">

<?php echo'<!--?xml version="1.0" encoding="utf-8"?-->'; ?>
<!-- Generator: Adobe Illustrator 22.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" id="logo2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 268 268" style="" xml:space="preserve">
  <style type="text/css">
    
  </style>
  <g>
    <path class="st500 btfWvnfm_0" d="M67,0.4V4l0,0v1.5c0,20.3,0,40.6,0,60.9c0,0.4,0,0.9,0,1.3c-0.3,2.8-2.3,4.2-5.1,3.4c-1-0.3-2-0.7-2.9-1.2
      C51.6,66.6,44,65,36,65.8c-14.4,1.5-24.1,13-22.1,28.8c0.9,7.2,4.8,12.7,10,17.4c4.7,4.2,10.1,7.4,15.6,10.5
      c6.7,3.7,13.2,7.6,18.3,13.4c7.9,9,10.5,19.2,6.4,30.7c-2.8,7.9-7.7,13.7-16.4,15.3C36,184,25,182,15.2,175
      c-5.8-4.2-9.8-9.5-11.4-16.5c-0.6-2.5-0.9-5.1-1.3-7.8H0v117.6h267.9V0.4H67z M264.3,264.7H3.5c0-3.1,0-6.1,0-9.1
      c0-23.5,0-47.1,0-70.6c0-1.8,0.3-3.4,1.5-4.8c2.1-2.5,4.9-2.7,7.7-1.9c2.1,0.6,4,1.8,6.1,2.7c13,5.6,26.2,6.2,39,0.2
      c10.5-4.9,16.9-13.6,18.6-25.2c1.1-7.6-1-14.6-4.9-21.1c-5.1-8.5-12.3-15-20.7-20.2c-6-3.8-12.1-7.5-18-11.4
      c-3.7-2.4-6.9-5.5-9.3-9.3c-4-6.3-3.8-14.1,0.7-19.5c3.1-3.8,7.4-5.5,12.1-6.1c8.7-1,16.4,1.4,23.2,6.9c3.9,3.1,6.6,7.1,7.6,12
      c0.4,2.2,0.1,4.5,0.1,7h3.3V4h193.8V264.7z"></path>
  </g>
  <g>
    <path class="st500 btfWvnfm_1" d="M142.3,166.6c0.3-0.6,0.5-1,0.7-1.4c13.9-29.4,27.9-58.7,41.8-88.1c0.4-0.9,0.8-1.7,1-2.7
      c0.5-1.9-0.6-3.2-2.5-3.3c-2.3,0-4.7,0-7.1,0c0-1.2,0-2.3,0-3.6c8.3,0,16.6,0,25,0c0,1.2,0,2.3,0,3.6c-1.8,0-3.6,0.1-5.3,0
      c-3.1-0.1-5.1,1.3-6.3,4.1c-3.8,8.1-7.7,16.2-11.5,24.3c-13.4,28.2-26.8,56.3-40.2,84.5c-0.2,0.5-0.5,0.9-0.8,1.6
      c-0.7-1.5-1.4-2.8-1.9-4c-17-36.2-34-72.5-50.9-108.8c-0.6-1.2-1.2-1.8-2.6-1.7c-1.9,0.1-3.8,0-5.8,0c0-1.3,0-2.4,0-3.7
      c9.5,0,18.9,0,28.4,0c0,1.2,0,2.3,0,3.6c-2,0-4.1,0-6.5,0C112.7,103.1,127.5,134.7,142.3,166.6z"></path>
    <path class="st500 btfWvnfm_2" d="M187,167.5c-0.2,0.8-0.3,1.6-0.3,1.8c1.3-0.7,2.8-1.8,4.4-2.2c2-0.5,3.8,1.1,3.5,3c-0.1,0.8-0.8,1.7-1.4,2
      c-0.6,0.3-1.7-0.1-2.3-0.5c-0.8-0.7-0.5-1.6,0.1-2.4c0.1-0.2,0.2-0.4,0.6-1.1c-1,0.2-1.7,0.2-2.2,0.6c-1.7,1.1-2.6,2.9-3.1,4.8
      c-1,3.7-2,7.4-2.9,11.2c-1.1,0-2.3,0-3.7,0c1.4-5.5,2.9-11,4.4-16.6c-1.7,0.3-3.3-0.5-4.8,0.6c-0.4,0.3-1.2,0.2-1.6-0.1
      c-0.4-0.2-0.4-1-0.5-1.5c-0.1-0.3,0.1-0.6,0.1-0.9c-1.9,0.1-2.8,1.7-2,3.2c0.9,1.6,0.8,3.3,0,4.9c-1.8,3.6-6.4,5.4-10.2,4
      c-0.7-0.3-1.9-0.2-2.5,0.2c-0.6,0.4-1,1.4-1.1,2.2c0,0.3,1.2,1,1.8,1c2.4,0,4.8-0.2,7.2-0.2c0.6,0,1.2,0,1.8,0
      c3,0.1,4.3,2.1,3.2,4.9c-1.6,4-4.8,6.1-8.9,6.9c-2.2,0.5-4.4,0.5-6.6-0.4c-1.2-0.5-2.1-1.4-2.2-2.9c-0.1-1.5,0.4-2.9,1.8-3.7
      c0.5-0.3,1.2-0.4,1.8-0.4c0.4,0.1,0.9,0.5,1.1,1c0.1,0.2-0.2,0.7-0.4,1c-0.3,0.5-0.8,0.9-1,1.4c-0.7,1.5,0,2.9,1.6,3.3
      c3,0.8,7.8-0.9,9.6-3.5c0.5-0.8,0.8-2,0.6-2.9c-0.2-0.5-1.6-0.9-2.4-0.9c-2.1-0.1-4.1,0.2-6.2,0.2c-2.8,0.1-4.4-0.8-4.8-2.7
      c-0.5-1.9,0.7-3.9,3-5.1c0.3-0.2,0.7-0.3,0.7-0.4c-0.3-1.5-0.9-2.9-0.7-4.1c0.2-1.3,0.9-2.6,1.7-3.6c2.4-2.8,5.9-3.4,9.8-1.8
      c1-1.6,2.3-3.2,4.5-2.8c0.8,0.2,1.4,1.3,2.1,1.9c-0.1,0.1-0.2,0.3-0.3,0.4C182.4,167.5,184.6,167.5,187,167.5z M172.1,171
      c0-2.6-1.7-3.7-3.5-2.6c-0.7,0.5-1.3,1.4-1.6,2.2c-0.5,1.4-0.7,2.9-1,4.3c-0.3,1.3-0.3,2.6,1.4,3.1c1.3,0.4,2.9-0.3,3.4-1.7
      C171.4,174.3,171.8,172.3,172.1,171z"></path>
    <path class="st500 btfWvnfm_3" d="M240.9,168.2c-1.3-0.1-2.5-0.1-3.7-0.2c0-0.1,0-0.2,0-0.4c2.4,0,4.7,0,7.2,0c-0.1,0.6-0.2,1.3-0.3,2.3
      c1.5-2,3-3.2,5.3-2.9c3.1,0.4,4.9,2.4,5.8,5.2c1.5,4.7-1,10.2-5.5,12.3c-3.9,1.8-6.4,0.7-8.3-3.6c-0.8,3.4-1.7,6.6-2.3,9.8
      c-0.3,1.7-1,2.4-2.7,2.1c-0.5-0.1-0.9-0.1-1.5-0.1C236.9,184.5,238.9,176.4,240.9,168.2z M252,172.3c-0.5-1.9-0.5-3.7-2.5-4.5
      c-1.4-0.5-3.1,0-4.1,1.6c-2.2,3.6-3.2,7.6-2.9,11.8c0.2,2,1.5,3.3,3,3.4c1.5,0.2,3.2-0.8,3.8-2.6
      C250.4,178.9,251.2,175.6,252,172.3z"></path>
    <path class="st500 btfWvnfm_4" d="M218.5,168.2c-1.3-0.1-2.4-0.1-3.5-0.2c0-0.2,0-0.3,0-0.5c1.2,0,2.3,0,3.5,0c1.2,0,2.4,0,3.9,0
      c-0.2,0.9-0.4,1.7-0.6,2.5c-0.9,3.6-2,7.2-2.8,10.8c-0.2,0.8,0,2.1,0.5,2.7c0.4,0.4,1.9,0.1,2.5-0.3c2.8-1.9,5.1-4.3,5.9-7.8
      c0.5-2.1,1.1-4.2,1.6-6.3c0.3-1.2,0.8-1.7,2-1.5c0.6,0.1,1.3,0,2.1,0c-1.1,4.3-2.2,8.5-3.3,12.7c-0.2,0.8-0.5,1.6-0.6,2.5
      c-0.1,0.4,0.1,1.1,0.3,1.2c0.3,0.2,1,0,1.2-0.3c0.8-1,1.6-2.1,2.3-3.2c0.2-0.3,0.5-0.6,0.8-1.1c0,2.8-3.2,6.2-5.7,6
      c-1.7-0.1-2.6-1.1-2.5-2.8c0-0.8,0.2-1.6,0.3-2.7c-1.1,1.2-1.9,2.3-3,3.1c-1.5,1-3.1,1.9-4.8,2.3c-2.1,0.6-3.7-0.8-3.6-3
      c0-1.5,0.4-2.9,0.8-4.4C216.8,174.6,217.6,171.5,218.5,168.2z"></path>
    <path class="st500 btfWvnfm_5" d="M212.4,174.4c-0.1,5.4-4.9,10.5-10.4,10.9c-4.2,0.3-7.7-3.3-7.4-7.7c0.3-5.5,5.4-10.4,10.9-10.6
      C209.6,166.9,212.5,170,212.4,174.4z M209.1,172c-0.2-1.7-0.4-3.2-2.1-4c-1.7-0.8-3.3-0.3-4.6,0.9c-0.8,0.7-1.6,1.5-1.9,2.5
      c-1,3-1.8,6.1-2.5,9.2c-0.3,1.5,0.3,3,1.8,3.7c1.5,0.8,3,0.7,4.3-0.3c0.8-0.6,1.7-1.5,2-2.4C207.4,178.4,208.2,175.2,209.1,172z"></path>
  </g>
  <g>
    <path class="st500 btfWvnfm_6" d="M67,0.4L0,0.4L0,146.2L2.9,146.2L2.9,4L67,4"></path>
  </g>
  <style data-made-with="vivus-instant">
  .st500{fill:#ffffff; stroke: #ffffff;fill-opacity: 0; stroke-width: 1.7;}
  .btfWvnfm_0{stroke-dasharray:2330 2332;stroke-dashoffset:2331;animation:btfWvnfm_draw 4666ms ease-out 0.5s forwards;}
  .btfWvnfm_1{stroke-dasharray:564 566;stroke-dashoffset:565;animation:btfWvnfm_draw 4666ms ease-out 0.5s forwards;}
  .btfWvnfm_2{stroke-dasharray:251 253;stroke-dashoffset:252;animation:btfWvnfm_draw 4666ms ease-out 0.6s forwards;}
  .btfWvnfm_3{stroke-dasharray:137 139;stroke-dashoffset:138;animation:btfWvnfm_draw 4666ms ease-out 0.7s forwards;}
  .btfWvnfm_4{stroke-dasharray:122 124;stroke-dashoffset:123;animation:btfWvnfm_draw 4666ms ease-out 0.8s forwards;}
  .btfWvnfm_5{stroke-dasharray:102 104;stroke-dashoffset:103;animation:btfWvnfm_draw 4666ms ease-out 0.7s forwards;}
  .btfWvnfm_6{stroke-dasharray:422 424;stroke-dashoffset:423;animation:btfWvnfm_draw 4666ms ease-out 0.7s forwards;}
  @keyframes btfWvnfm_draw{
  
  90%{
    stroke-dashoffset:0;
    fill-opacity: 0;
  }
  100%{
    stroke-dashoffset:0;
    fill-opacity: 1;
    }
  }
 
  </style>
  </svg>


  
  
 
  
  </div>
  <div class="persent">
      <div class="persent_counter">
        <span id="count"></span><span>%</span>
      </div>
    </div>
</div> 


<?php } ?>


<!-- HEADER START -->
<header class="fadeout wrap_for_mobile">
    <nav class="">
        <a href="<?php if (WPGlobus::Config()->language != 'ru') { echo '/' . WPGlobus::Config()->language;} ?>/" class="logo"><span class="icon"></span></a>
        <div class="burger">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="burger_mb">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="lang">

<?php
if ( class_exists( 'WPGlobus' ) ) {

		if (strripos($_SERVER['REQUEST_URI'], "/en") !== false) {
			$now_lang = "en";
		} else {
			$now_lang = "ru";
		}

			echo '<!-- .wpglobus-selector-box -->';
				foreach( WPGlobus::Config()->enabled_languages as $lang ) {

					//Условие для пропуска языка по умолчанию, т.е. отображает переключатели всех языков, кроме по-умолчанию
					//if ( $lang == WPGlobus::Config()->language ) {
					//	continue;
					//}

					
					$flag = WPGlobus::Config()->flags_url . WPGlobus::Config()->flag[ $lang ];					
					//echo '<img src="' . $flag . '" /> ';
					if ($now_lang == $lang) {
						if ($lang == "ru") {$lang_tag = "RU";} else {$lang_tag = "EN";}
						echo '<a href="' . WPGlobus_Utils::localize_current_url( $lang ). '" ';
						echo 'class="' . $lang_tag . ' active">' . $lang_tag;
						echo '</a>';														
					}
				}


				
				foreach( WPGlobus::Config()->enabled_languages as $lang ) {

					//Условие для пропуска языка по умолчанию, т.е. отображает переключатели всех языков, кроме по-умолчанию
					//if ( $lang == WPGlobus::Config()->language ) {
					//	continue;
					//}

					
					$flag = WPGlobus::Config()->flags_url . WPGlobus::Config()->flag[ $lang ];					
					//echo '<img src="' . $flag . '" /> ';
					if ($now_lang != $lang) {						
						if ($lang == "ru") {$lang_tag = "RU";} else {$lang_tag = "EN";}
						echo '<a href="' . WPGlobus_Utils::localize_current_url( $lang ). '" ';
						echo 'class="' . $lang_tag . '">' . $lang_tag;
						echo '</a>';
						
					}										
				}
				


			echo '<!-- .wpglobus-selector-box -->';
}
	
?>




        </div>



<?php
$post_id = "1809"; //Виджет Меню
$mtext_1 = get_field("mtext_1", $post_id);
$mtext_2 = get_field("mtext_2", $post_id);
$mtext_3 = get_field("mtext_3", $post_id);
$mtext_4 = get_field("mtext_4", $post_id);
$mtext_5 = get_field("mtext_5", $post_id);
$murl_1 = get_field("murl_1", $post_id);
$murl_2 = get_field("murl_2", $post_id);
$murl_3 = get_field("murl_3", $post_id);
$murl_4 = get_field("murl_4", $post_id);
$murl_5 = get_field("murl_5", $post_id);

?>


        <div class="menu_mb">
            <ul class="nav_mb">
                <li><a href="<?php if (WPGlobus::Config()->language != 'ru') { echo '/' . WPGlobus::Config()->language;} ?><?php echo $murl_1; ?>"><?php echo apply_filters( 'the_title', $mtext_1 ); ?></a></li>
                <li><a href="<?php if (WPGlobus::Config()->language != 'ru') { echo '/' . WPGlobus::Config()->language;} ?><?php echo $murl_2; ?>"><?php echo apply_filters( 'the_title', $mtext_2 ); ?></a></li>
                <li><a href="<?php if (WPGlobus::Config()->language != 'ru') { echo '/' . WPGlobus::Config()->language;} ?><?php echo $murl_3; ?>"><?php echo apply_filters( 'the_title', $mtext_3 ); ?></a></li>
                <li><a href="<?php if (WPGlobus::Config()->language != 'ru') { echo '/' . WPGlobus::Config()->language;} ?><?php echo $murl_4; ?>"><?php echo apply_filters( 'the_title', $mtext_4 ); ?></a></li>
                <li><a href="<?php if (WPGlobus::Config()->language != 'ru') { echo '/' . WPGlobus::Config()->language;} ?><?php echo $murl_5; ?>"><?php echo apply_filters( 'the_title', $mtext_5 ); ?></a></li>
            </ul>
            <div class="aside_mb">
<?php
$post_id = "1003"; //Виджет Контакты
$shop_url = get_field("shop_url", $post_id);
$soc_url_1 = get_field("soc_url_1", $post_id);
$soc_url_2 = get_field("soc_url_2", $post_id);
$soc_url_3 = get_field("soc_url_3", $post_id);

?>

                <a href="<?php if (WPGlobus::Config()->language != 'ru') { echo '/' . WPGlobus::Config()->language;} ?>/<?php echo $shop_url; ?>" class="toshop">shop</a>
            <ul class="social">
              <li class="fb">








                <a href="<?php echo $soc_url_1; ?>"> <?php echo'<?xml version="1.0" encoding="iso-8859-1"?>'; ?>
<!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 470.513 470.513" style="enable-background:new 0 0 470.513 470.513;" xml:space="preserve">
<g>
	<path class="ic0" d="M271.521,154.17v-40.541c0-6.086,0.28-10.8,0.849-14.13c0.567-3.335,1.857-6.615,3.859-9.853   c1.999-3.236,5.236-5.47,9.706-6.708c4.476-1.24,10.424-1.858,17.85-1.858h40.539V0h-64.809c-37.5,0-64.433,8.897-80.803,26.691   c-16.368,17.798-24.551,44.014-24.551,78.658v48.82h-48.542v81.086h48.539v235.256h97.362V235.256h64.805l8.566-81.086H271.521z" fill="#aaaaa9"/>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
</a>
              </li>
              <li class="in">
                <a href="<?php echo $soc_url_2; ?>"> <?php echo'<?xml version="1.0" encoding="iso-8859-1"?>'; ?>
<!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="512px" height="512px">
<g>
	<g>
		<path class="ic0" d="M373.659,0H138.341C62.06,0,0,62.06,0,138.341v235.318C0,449.94,62.06,512,138.341,512h235.318    C449.94,512,512,449.94,512,373.659V138.341C512,62.06,449.94,0,373.659,0z M470.636,373.659    c0,53.473-43.503,96.977-96.977,96.977H138.341c-53.473,0-96.977-43.503-96.977-96.977V138.341    c0-53.473,43.503-96.977,96.977-96.977h235.318c53.473,0,96.977,43.503,96.977,96.977V373.659z" fill="#aaaaa9"/>
	</g>
</g>
<g>
	<g>
		<path class="ic0" d="M370.586,238.141c-3.64-24.547-14.839-46.795-32.386-64.342c-17.547-17.546-39.795-28.746-64.341-32.385    c-11.176-1.657-22.507-1.657-33.682,0c-30.336,4.499-57.103,20.541-75.372,45.172c-18.269,24.631-25.854,54.903-21.355,85.237    c4.499,30.335,20.541,57.102,45.172,75.372c19.996,14.831,43.706,22.619,68.153,22.619c5.667,0,11.375-0.418,17.083-1.265    c30.336-4.499,57.103-20.541,75.372-45.172C367.5,298.747,375.085,268.476,370.586,238.141z M267.791,327.632    c-19.405,2.882-38.77-1.973-54.527-13.66c-15.757-11.687-26.019-28.811-28.896-48.216c-2.878-19.405,1.973-38.77,13.66-54.527    c11.688-15.757,28.811-26.019,48.217-28.897c3.574-0.53,7.173-0.795,10.772-0.795s7.199,0.265,10.773,0.796    c32.231,4.779,57.098,29.645,61.878,61.877C335.608,284.268,307.851,321.692,267.791,327.632z" fill="#aaaaa9"/>
	</g>
</g>
<g>
	<g>
		<path class="ic0" d="M400.049,111.951c-3.852-3.851-9.183-6.058-14.625-6.058c-5.442,0-10.773,2.206-14.625,6.058    c-3.851,3.852-6.058,9.174-6.058,14.625c0,5.451,2.207,10.773,6.058,14.625c3.852,3.851,9.183,6.058,14.625,6.058    c5.442,0,10.773-2.206,14.625-6.058c3.851-3.852,6.058-9.183,6.058-14.625C406.107,121.133,403.9,115.802,400.049,111.951z" fill="#aaaaa9"/>
	</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
</a>
              </li>
              <li class="pin">
                <a href="<?php echo $soc_url_3; ?>"> <?php echo'<?xml version="1.0" encoding="iso-8859-1"?>'; ?>
<!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 486.392 486.392" style="enable-background:new 0 0 486.392 486.392;" xml:space="preserve" width="512px" height="512px">
<g>
	<g>
		<g>
			<path class="ic0" d="M430.149,135.248C416.865,39.125,321.076-9.818,218.873,1.642     C138.071,10.701,57.512,76.03,54.168,169.447c-2.037,57.029,14.136,99.801,68.399,111.84     c23.499-41.586-7.569-50.676-12.433-80.802C90.222,77.367,252.16-6.718,336.975,79.313c58.732,59.583,20.033,242.77-74.57,223.71     c-90.621-18.179,44.383-164.005-27.937-192.611c-58.793-23.286-90.013,71.135-62.137,118.072     c-16.355,80.711-51.557,156.709-37.3,257.909c46.207-33.561,61.802-97.734,74.57-164.704     c23.225,14.136,35.659,28.758,65.268,31.038C384.064,361.207,445.136,243.713,430.149,135.248z" fill="#aaaaa9"/>
		</g>
	</g>
	<g>
	</g>
	<g>
	</g>
	<g>
	</g>
	<g>
	</g>
	<g>
	</g>
	<g>
	</g>
	<g>
	</g>
	<g>
	</g>
	<g>
	</g>
	<g>
	</g>
	<g>
	</g>
	<g>
	</g>
	<g>
	</g>
	<g>
	</g>
	<g>
	</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
</a>
              </li>
            </ul>
                
            </div>
        </div>

    </nav>




<?php
$post_id = "1809"; //Виджет Меню
$mtext_1 = get_field("mtext_1", $post_id);
$mtext_2 = get_field("mtext_2", $post_id);
$mtext_3 = get_field("mtext_3", $post_id);
$mtext_4 = get_field("mtext_4", $post_id);
$mtext_5 = get_field("mtext_5", $post_id);
$murl_1 = get_field("murl_1", $post_id);
$murl_2 = get_field("murl_2", $post_id);
$murl_3 = get_field("murl_3", $post_id);
$murl_4 = get_field("murl_4", $post_id);
$murl_5 = get_field("murl_5", $post_id);

?>



    <div class="menu">
        <ul class="main_nav">
            <li class="main_item drop_menu">
                <a href="<?php if (WPGlobus::Config()->language != 'ru') { echo '/' . WPGlobus::Config()->language;} ?><?php echo $murl_1; ?>"><?php echo apply_filters( 'the_title', $mtext_1 ); ?></a>
                <div class="circle"> </div>
            </li>            
            <li class="main_item"><a href="<?php if (WPGlobus::Config()->language != 'ru') { echo '/' . WPGlobus::Config()->language;} ?><?php echo $murl_2; ?>"><?php echo apply_filters( 'the_title', $mtext_2 ); ?></a></li>
            <li class="main_item"><a href="<?php if (WPGlobus::Config()->language != 'ru') { echo '/' . WPGlobus::Config()->language;} ?><?php echo $murl_3; ?>"><?php echo apply_filters( 'the_title', $mtext_3 ); ?></a></li>
            <li class="main_item"><a href="<?php if (WPGlobus::Config()->language != 'ru') { echo '/' . WPGlobus::Config()->language;} ?><?php echo $murl_4; ?>"><?php echo apply_filters( 'the_title', $mtext_4 ); ?></a></li>
            <li class="main_item"><a href="<?php if (WPGlobus::Config()->language != 'ru') { echo '/' . WPGlobus::Config()->language;} ?><?php echo $murl_5; ?>"><?php echo apply_filters( 'the_title', $mtext_5 ); ?></a></li>
        </ul>
    </div>




</header>
<!-- HEADER END -->