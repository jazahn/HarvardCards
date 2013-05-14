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
				'actions'=>array('index', 'create', 'wizard2','wizarddd'),
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
		$this->render('index', array());
    }
	
	public function actionCreate()
	{
		$this->layout = '//layouts/deck_management';
				
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
				// if the insert doesn't fail
				$collection_id = 1;
				$this->redirect($this->createUrl('/collection/wizard2/'.$collection_id));
			}
		}
		
		$this->render('create', array());		
	}
	
	
	public function actionWizard2(){
		$this->layout = '//layouts/deck_management';
		// 
		$collection_name = "Course Whatever";
		$this->render('wizard2', array(
			'collection_name' => $collection_name
		));
	}
 
	public function actionWizarddd(){
		$this->layout = '//layouts/deck_management';
		// 
		$collection_name = "Course Whatever";
		$this->render('wizarddd', array(
			'collection_name' => $collection_name
		));
	}
 
    
}
?>
