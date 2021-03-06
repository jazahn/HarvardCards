<style>
.cbtn-login {
	width: 160px !important
}
.splash-box ul {
	list-style: none;
	margin: 0px;
	
}
.splash-box ul li {
	margin-bottom: 15px;
}
</style>

<h1>Welcome to <i>{$app_name}</i></h1>

<div class="row-fluid">
	<div class="span6">
		<div class="splash-box">
			<p>FOR students who want to memorize words, media, or concepts and instructors who want to assess student progress.</p>
			<p>Harvard Cards is a web application</p>
			<p>THAT enables memorization through frequent practice and review, anytime, anywhere</p>
			<p>UNLIKE <a href="http://quizlet.com/" title="Quizlet">Quizlet</a>, <a href="http://www.studyblue.com/" title="Study Blue">Study Blue</a>, and <a href="http://ankisrs.net/" title="Anki">Anki</a></p>
			<p>OUR PRODUCT has customizable exercises, games, and assessment tools that engage both instructors and students.</p>
		</div>
	</div>
	<div class="span6">

		<div class="splash-box" style="text-align: center;">
			<h4>Log in</h4><hr/>
			<ul>
				<li><a class="btn btn-success cbtn-login">Google</a></li>
				<li><a class="btn btn-success cbtn-login">Harvard Pin</a></li>
				<li><a class="btn btn-danger cbtn-login" href="{$this->createUrl("/collection/index")}">Guest</a></li>
			</ul>
		</div>

	</div>
</div>

<hr/>

<div class="row-fluid">
	<div class="span6">
		<div class="splash-box">
			Promotional Material
		</div>
	</div>
	<div class="span6">
		<div class="splash-box">
			links, features, docs
		</div>
	</div>
</div>
