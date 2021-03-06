<style>
.collection-sidenav ul {
	padding-top: 20px;
	padding-left: 20px;
	padding-right: 20px;
	border: solid gray 1px; 
	border-radius: 5px;
}
.collection-sidenav ul li a {
	padding: 9px 15px;
	border: solid 1px;
	border-radius: 5px;	
	border-color: #AAAAAA;
}
.collection-sidenav ul li a:hover {
	background-color: #DDDDDD;	
}
.collection-sidenav ul li ul.inline {
	padding: 0px;
	margin: 0px;
	border: 0px;
}
.collection-sidenav ul li ul li{
	padding: 0px;
	margin: 0px;
}
.collection-sidenav ul li ul li button{
	margin: 0px;
}

.collection-decks-section {
	border: solid gray 1px; 
	border-radius: 5px;
}
.cds-top {
	padding: 20px;
	background-color: #CCCCCC;
}
.cds-bottom {
	padding: 20px;
	
}
.cds-bottom ul li {
	font-weight: bold;
	text-align: center;
	background: url("/img/deck.jpg");
	height: 70px;
	width: 110px;
	padding-top: 40px;
	margin: 10px;
}
</style>
<div class="row-fluid">
	<nav class="span4 collection-sidenav">
		<ul class="nav nav-list affix span4">
			<li><a href="#">My Decks<i class="icon-chevron-right pull-right"></i></a></li>
			<li><a href="#">Course 1<i class="icon-chevron-right pull-right"></i></a></li>
			<li><a href="#">Course 2<i class="icon-chevron-right pull-right"></i></a></li>
			<li><a href="#">Course 3<i class="icon-chevron-right pull-right"></i></a></li>
			<li>
				<ul class="unstyled inline">
					<li><button id="add_collection_button" class="btn">+</button></li>
					<li><button class="btn">-</button></li>
					<li><button class="btn">++</button></li>
					<li><button class="btn">E</button></li>
				</ul>
			</li>
		</ul>
	</nav>
	<section class="span8 collection-decks-section">
		<ul class="unstyled">
			<li>
				<div class="cds-top">
					<h5>Course 1</h5>
					<em>Description of Course 1</em>
				</div>
				<div class="cds-bottom">
					<ul class="inline">
						<li>Week 1</li>
						<li>Week 2</li>
						<li>Week 3</li>
						<li>Week 4</li>
						<li>Week 5</li>
						<li>Week 6</li>
						<li>Week 7</li>
						<li>Week 8</li>
					</ul>
				</div>
			</li>
			<li>
				<div class="cds-top">
					<h5>Course 2</h5>
					<em>Description of Course 2</em>
				</div>
				<div class="cds-bottom">
					<ul class="inline">
						<li>Week 1</li>
						<li>Week 2</li>
					</ul>
				</div>
			</li>
			<li>
				<div class="cds-top">
					<h5>Course 3</h5>
					<em>Description of Course 3</em>
				</div>
				<div class="cds-bottom">
					<ul class="inline">
						<li>Week 1</li>
						<li>Week 2</li>
						<li>Week 3</li>
						<li>Week 4</li>
						<li>Week 5</li>
					</ul>
				</div>
			</li>
		</ul>
	</section>
</div>

<script>
$(document).ready(function(){
	$('#add_collection_button').click(function(){
		window.location = "{$this->createUrl('/collection/create')}";
	});
});
</script>
