<?php
require_once("inc/cnf.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<meta name="viewport" content="initial-scale=1.0">
<meta name="description" content="<?php echo $full_name; ?>">
<meta name="keywords" content="<?php echo $meta_keywords; ?>">
<!-- Chrome, Firefox OS and Opera -->
<meta name="theme-color" content="#ED1C24">
<!-- Windows Phone -->
<meta name="msapplication-navbutton-color" content="#ED1C24">
<!-- iOS Safari -->
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<!--AppIcon-->
<link rel="icon" sizes="192x192" href="gra/appicon.png">
<link rel="shortcut icon" href="gra/favicon.ico" type="image/x-icon">
<!--Stylesheets-->
<link rel="stylesheet" type="text/css" href="css/glb.css">
<link rel="stylesheet" type="text/css" href="css/mob.css">
<title><?php echo $short_name." - ".$slogan; ?></title>
<!--Plus256 Network, Ltd ~ www.plus256.com-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://npmcdn.com/imagesloaded@4.1/imagesloaded.pkgd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.1/masonry.pkgd.min.js"></script>
<!--<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>-->
<!--<script type="text/javascript" src="js/masonry.pkgd.min.js"></script>-->
<script type="text/javascript" src="js/fun.js"></script>
<script>
  (function(d) {
    var config = {
      kitId: 'inm7ich',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
</head>
<body>
<noscript id="noscript"><?php echo $noscript; ?></noscript>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-44750036-1', 'auto');
  ga('send', 'pageview');
</script>
