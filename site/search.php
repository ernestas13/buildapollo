<!DOCTYPE html>
<html lang="en">
<head>
<title>search result</title>
<meta charset="utf-8">    
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
<meta name="description" content="Your description">
<meta name="keywords" content="Your keywords">
<meta name="author" content="Your name">
<!--CSS-->
<link rel="stylesheet" href="css/bootstrap.css" >
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="fonts/font-awesome.css">
<!--JS-->
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="search/search.js"></script>
<script src="js/jquery.mobilemenu.js"></script> 
<script src="js/jquery.ui.totop.js"></script>
<script src="js/jquery.equalheights.js"></script> 

<!--[if (gt IE 9)|!(IE)]><!-->
<script src="js/wow/wow.js"></script>
<script src="js/wow/device.min.js"></script>
<script>
    $(document).ready(function () {       
      if ($('html').hasClass('desktop')) {
        new WOW().init();
      }   
    });
</script>
<!--<![endif]-->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>

    <div id="ie6-alert" style="width: 100%; text-align:center;">
    <img src="http://beatie6.frontcube.com/images/ie6.jpg" alt="Upgrade IE 6" width="640" height="344" border="0" usemap="#Map" longdesc="http://die6.frontcube.com" />
      <map name="Map" id="Map"><area shape="rect" coords="496,201,604,329" href="http://www.microsoft.com/windows/internet-explorer/default.aspx" target="_blank" alt="Download Interent Explorer" /><area shape="rect" coords="380,201,488,329" href="http://www.apple.com/safari/download/" target="_blank" alt="Download Apple Safari" /><area shape="rect" coords="268,202,376,330" href="http://www.opera.com/download/" target="_blank" alt="Download Opera" /><area shape="rect" coords="155,202,263,330" href="http://www.mozilla.com/" target="_blank" alt="Download Firefox" />
        <area shape="rect" coords="35,201,143,329" href="http://www.google.com/chrome" target="_blank" alt="Download Google Chrome" />
      </map>
  </div>
  <![endif]-->
</head>
<body>
<header class="clearfix">
    <div class="box">
        <div class="container">
            <p><a href="#">Sitemap</a> | <a href="#">FAQ</a></p>
            <ul class="follow_icon">
                <li><a href="#" class="fa fa-facebook"></a></li>
                <li><a href="#" class="fa fa-google-plus"></a></li>
                <li><a href="#" class="fa fa-rss"></a></li>
                <li><a href="#" class="fa fa-pinterest"></a></li>
                <li><a href="#" class="fa fa-linkedin"></a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <h1 class="navbar-brand navbar-brand_ wow fadeInDown" data-wow-delay="0.6s"><a href="index.html"><img src="img/logo.png" alt="logo"></a></h1>
        <p class="tel wow fadeInLeft" data-wow-delay="0.7s">Free phone: <strong>+ 8 800 757 43 92</strong></p>
    </div>
</header>
<div class="bg_pic"></div>
<div class="menu_box indent">
    <div class="container">
        <nav class="navbar navbar-default navbar-static-top tm_navbar clearfix" role="navigation">
            <ul class="nav sf-menu clearfix">
                <li><a href="index.html">Home</a></li>
                <li class="sub-menu"><a href="index-1.html">about</a><span></span>
                    <ul class="submenu">
        				<li><a href="#">history</a></li>
        				<li><a href="#">news</a><span class="fa fa-angle-right"></span>
                            <ul class="submenu">
                                <li><a href="#">latest</a></li>
                                <li><a href="#">archive</a></li>
                              </ul> 
                        </li>
        				<li><a href="#">testimonials</a></li>
        			</ul>
                </li>
                <li><a href="index-2.html">services</a></li>
                <li><a href="index-3.html">projects</a></li>
                <li><a href="index-4.html">contacts</a></li>
            </ul>
             <form id="search" class="search" action="search.php" method="GET" accept-charset="utf-8">
                <input type="text" name="s" value="" onfocus="if (this.value == '') {this.value=''}" onblur="if (this.value == '') {this.value=''}">
                <a href="#" onClick="document.getElementById('search').submit()"><img src="img/magnify.png" alt=""></a>
            </form>
        </nav>
    </div>
    <em></em>
</div>
<div class="content indent">
    <!--content-->
    <div class="container">
        <h2>Search result:</h2>
        <div id="search-results"></div>
    </div>
</div>
<!--footer-->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 maxheight2 wow fadeInUp">
                <p class="logo">Apollo Construction</p>
                <p class="prev">&copy; <em id="copyright-year"></em> <i>|</i> <a href="index-5.html">Privacy Policy</a></p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 maxheight2 wow fadeInUp" data-wow-delay="0.2s">
                 <h3>latest posts</h3>
                 <hr>
                 <ul class="list2">
                    <li>
                        <p>Eos et accusamus et iustom odgnissimos ducimus qui blap.</p>
                        <a href="#"><time datetime="2014-01-01">5 Days ago.</time></a>
                    </li>
                    <li>
                        <p>At accusamus et iustom odgnissimos ducimus qui blapraesentium.</p>
                        <a href="#"><time datetime="2014-01-01">7 Days ago.</time></a>
                    </li>
                 </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 maxheight2 wow fadeInUp" data-wow-delay="0.3s">
                 <h3>Online Support</h3>
                 <hr>
                 <strong>+ 8 800 757 43 92</strong>
                 <p>Ask Your questions by e-mail:<br><a href="#" class="lnk">mail@demolink.org</a></p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 maxheight2 wow fadeInUp" data-wow-delay="0.4s">
                 <h3>Get In Touch</h3>
                 <hr>
                 <ul class="follow_icon2">
                    <li><a href="#" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-google-plus"></a></li>
                    <li><a href="#" class="fa fa-rss"></a></li>
                    <li><a href="#" class="fa fa-pinterest"></a></li>
                    <li><a href="#" class="fa fa-linkedin"></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<script src="js/bootstrap.min.js"></script>
<script src="js/tm-scripts.js"></script>
</body>
</html>