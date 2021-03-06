<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaulting to false so the 
	 * default is an ajaxy thing that isn't using a layout
	 */
	//public $layout = false;
	public $layout = "/layouts/main";
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();
	
	/**
	 * Overloading CController::forward
	 * added the routeArr lines so the ids are passed
	 */
	public function forward($route,$exit=true){
		//error_log("Controller::forward");
		$routeArr = explode("/", $route);
		if(isset($routeArr[3]))
			$_GET['id'] = $routeArr[3];
		if(isset($routeArr[4]))
			$_GET['id2'] = $routeArr[4];
		
		parent::forward($route, $exit);
				
	}
}