<?php require_once('header.php'); ?>

<body>

    <div id="container" class="container-fluid">

		<?php echo $content; ?>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

<script>
var dohash = function(hash){
	//console.log("dohash");
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
//$(window).on('hashchange', dohash);

$(document).ready(function(){
	//dohash();
});

//]]>	
</script>
</body>
</html>
