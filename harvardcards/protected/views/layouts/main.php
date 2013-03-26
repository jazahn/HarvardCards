<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- bootstrap CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-responsive.min.css" media="print" />

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

    <style>
      body {
		  /* padding-top: 60px;*/ /* 60px to make the container go all the way to the bottom of the topbar */
      }
	  .splash-box {
		  margin: 20px;
		  padding: 10px;	
		  background-color: #CCCCCC;  	
		  border-radius: 5px;
	  }
	  
    </style>

    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.9.1.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>


	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

	<!--
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="/index.php"><?php echo CHtml::encode(Yii::app()->name); ?></a>
          <div class="btn-group pull-right">
	
			<?php if(Yii::app()->user->isGuest) {?>
            <a id="login-btn" class="btn dropdown-toggle" href="/site/login">
              <i class="icon-user"></i> Login
              <span class="caret"></span>
            </a>
			<?php } else {?>
            <a id="login-btn" class="btn" data-toggle="dropdown" href="#">
              <i class="icon-user"></i> <?php echo Yii::app()->user->name; ?>
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">

              <li><a href="/site/logout">Sign Out</a></li>
            </ul>
			<?php } ?>

          </div>
          <div class="nav-collapse">
            <ul class="nav">
            </ul>
          </div>
        </div>
      </div>
    </div>
	-->

    <div id="container" class="container-fluid">

		<?php echo $content; ?>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

<script>
var dohash = function(hash){
	console.log("dohash");
	if(document.location.hash != ''){
		var locationhash = document.location.hash;
		if(locationhash.match(/^#\//)){
			var newlocation = locationhash.replace(/^#([^#]*)/, "$1");
			$('#container').load(newlocation);
		} 
	} else {
		$('#container').load('/site/splash');
	}
}

// I think this may be causing an issue...
$(window).on('hashchange', dohash);

$(document).ready(function(){
	dohash();
});

//]]>	
</script>
</body>
</html>
