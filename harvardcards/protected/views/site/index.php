<?php $this->pageTitle=Yii::app()->name; ?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

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

		<div class="login-box splash-box tabbable">
			<ul class="nav nav-tabs">
				<li class="active">
					<a href="#tab1" data-toggle="tab">Google</a>
				</li>
				<li>
					<a href="#tab2" data-toggle="tab">HUID</a>
				</li>
			</ul>
			
			<div class="tab-content">
				
				<form class="form-horizontal tab-pane active" id="tab1">
					<div class="control-group">
						<label class="control-label" for="inputEmail">Email</label>
						<div class="controls">
							<input type="text" id="inputEmail" placeholder="Email" />
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label" for="inputPassword">Password</label>
						<div class="controls">
							<input type="password" id="inputPassword" placeholder="Password" />
						</div>
					</div>
					<div style="margin: auto; width: 80px">
				    <button type="submit" class="btn">Login</button>
					</div>
				</form>
			
				<form class="form-horizontal tab-pane" id="tab2">
					<div class="control-group">
						<label class="control-label" for="inputEmail">HUID</label>
						<div class="controls">
							<input type="text" id="inputEmail" placeholder="HUID" />
						</div>
					</div>
				
					<div class="control-group">
						<label class="control-label" for="inputPassword">Password</label>
						<div class="controls">
							<input type="password" id="inputPassword" placeholder="Password" />
						</div>
					</div>
					<div style="margin: auto; width: 80px">
				    <button type="submit" class="btn">Login</button>
					</div>
				</form>
			
			</div>
			
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
