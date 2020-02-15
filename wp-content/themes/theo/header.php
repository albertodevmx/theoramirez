<!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title>
<?php wp_title(); ?>
</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.5.3/jquery-ui.min.js" ></script>

</head>

<!--[if lt IE 8]>

       <div style=' clear: both; text-align:center; position: relative;'>

         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">

           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />

        </a>

      </div>

    <![endif]-->

<!--[if lt IE 9]>

   		<script type="text/javascript" src="js/html5.js"></script>

    	<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">

	<![endif]-->




</head>

<body>
<div class="main">
  <!--==============================header=================================-->
<header>
  
  <div class="encabezado">

    <div class="reproductor">
<!--
      <audio id="player" src="http://theoramirezphotographer.com/wp-content/uploads/2015/03/My-story.mp3" autoplay="autoplay" type="audio/mp3" controls="controls">    
      </audio>
-->
    </div>


    <div class="logotipo">
      <h1> <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"> <span>
      <?php bloginfo( 'name' ); ?>
      </span> </a> 
      </h1>
  </div>


  <div class="social-icons">
<!--
    <div class="fechahoy">
      <?php setlocale(LC_ALL,"es_ES.utf8","es_ES","esp"); ?>
      <?php echo strftime( "%A", time() );?>, 
      <?php echo strftime( "%d", time() );?> de <?php echo strftime( "%B", time() );?> de <?php echo strftime( "%Y", time() );?>
    </div>
-->        
    
      <!-- <a href="https://youtube.com/" class="youtube" target="_blank">Youtube</a> -->
      <!-- <a href="https://twitter.com/" class="twitter" target="_blank">Twitter</a> -->
      <a href="https://www.facebook.com/fotostheo" class="facebook" target="_blank">Facebook</a>
  </div>
  
  <?php wp_nav_menu(); ?>

    
  </div>

</header>


<section id="content">

