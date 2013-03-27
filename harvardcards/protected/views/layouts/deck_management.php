<?php require_once('header.php'); ?>
<style>
.deck_management {
	margin-top: 120px;
}
</style>
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?php echo $this->createUrl('/'); ?>"><?php echo CHtml::encode(Yii::app()->name); ?></a>
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
	  <div class="brand pull-center" style="width: 100%; text-align: center">Deck Management</div>
      </div>
    </div>
	

<div class="deck_management">
	<?php echo $content; ?>
</div>
