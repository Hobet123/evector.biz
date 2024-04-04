<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="not-ie" lang="en"> <!--<![endif]-->
<head>
	<!-- Basic Meta Tags -->
<meta charset="utf-8">
<title>E Vector Networking Inc. - <?=$title;?></title>
<meta name="description" content="<?=$$description;?>">
<meta name="keywords" content="<?=$keywords;?>">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <META NAME="robots" CONTENT="noindex,nofollow">

  <!-- Favicon -->
  <link href="img/favicon.png" rel="icon" type="image/png">

  <!-- Styles -->
  <link href="css/styles.css" rel="stylesheet">
  <link href="css/bootstrap-override.css" rel="stylesheet">

  <!-- Font Avesome Styles -->
  <link href="css/font-awesome/font-awesome.css" rel="stylesheet">
	<!--[if IE 7]>
		<link href="css/font-awesome/font-awesome-ie7.min.css" rel="stylesheet">
	<![endif]-->

  <!-- FlexSlider Style -->
  <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen">

  <!-- Web Fonts -->
  <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script> 
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet" type="text/css">  

	<!-- Internet Explorer condition - HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->   
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
_gaq.push(['_setAccount','UA-3555439-1']);
_gaq.push(['_setDomainName','evector.biz']);
_gaq.push(['_addIgnoredOrganic','evector.biz']);
_gaq.push(['_trackPageview']);
} catch(err) {}</script>	
</head>       
<body>
  <div class="main"> 

	<!-- Top Space -->
  <div class="space30"></div>
 
  <!-- Content -->
  <div class="content">    
                      
  	<!-- Site -->
    <div class="container site">
      <div class="row">
        <div class="span12">
          <div class="row">
            <div class="span12 logo">
                <a href="index.php"><img src="img/evector3.png" alt=""></a>
  
              <div class="slogan">Networking Inc.</div>
            </div>
          </div>  
          <div class="row">
            <div class="space10"></div>
          </div>
          <div class="row">
            <div class="span12">
            
              <nav class="navbar">
                <!-- Menu -->
                <ul class="nav">
                <?php
                  $cur_page = $_SERVER['PHP_SELF'];

                  $pages = ['/index.php' => 'Home', 
                          '/about.php' => 'About Us', 
                          '/services.php' => 'Services', 
                          '/portfolio.php' => 'Portfolio', 
                          '/contact.php' => 'Contact'];

                  foreach($pages as $c => $name){

                    echo '<li ';

                    if($cur_page == $c) echo ' class="active"';

                    echo '><a href="'.$c.'" >'.$name.'</a></li>';

                  }
                ?>
                  <!-- <li><a href="index.php" title="">Home</a></li>
                  <li><a href="about.php" title="">About Us</a></li>
                  <li class="active"><a href="services.php" title="">Services</a></li>
                  <li><a href="portfolio.php" title="">Portfolio</a></li>                
                  <li><a href="contact.php" title="">Contact</a></li> -->
                </ul>
              </nav>
  
            </div>  
          </div>
          
          <div class="row space10"></div>  
