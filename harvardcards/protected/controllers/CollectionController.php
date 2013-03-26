<?php
/**
 * @copyright Copyright (c) 2013 The President and Fellows of Harvard College
 * @license Use of this source code is governed by the LICENSE file found in the root of this project.
 */

class CollectionController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}
	
	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index', 'wizard1', 'wizard1form', 'wizard2'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array(),
				'roles'=>array(),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
		
    public function actionIndex()
    {
		$this->layout = '//layouts/deck_management';
		//error_log("actionIndex");
		$this->render('index', array());
    }
	
	public function actionWizard1()
	{
		$this->layout = '//layouts/deck_management';
		//error_log("actionWizard1");
				
		if(isset($_REQUEST['submit'])){
			$title = Yii::app()->getRequest()->getParam('title');
			$desc = Yii::app()->getRequest()->getParam('desc');
		
			$errors = array();
			if($title == '')
				$errors['no_title'] = 1;
			if($desc == '')
				$errors['no_desc'] = 1;
			if(empty($errors)){
				// insert into db
			}
		}
		
		$this->render('wizard1', array());		
	}
	
	public function actionWizard1form(){
		$this->layout = false;
		$title = Yii::app()->getRequest()->getParam('title');
		$desc = Yii::app()->getRequest()->getParam('desc');
		
		$errors = array();
		if($title == '')
			$errors['no_title'] = 1;
		if($desc == '')
			$errors['no_desc'] = 1;
		if(empty($errors)){
			// insert into db
		}
			
//			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');

		echo json_encode(array('errors'=>$errors));
		Yii::app()->end();
	}
	
	public function actionWizard2(){
		$this->layout = '//layouts/deck_management';
		//error_log("actionWizard2");
		$this->render('fields_form', array());		
	}
 
    
}
?>