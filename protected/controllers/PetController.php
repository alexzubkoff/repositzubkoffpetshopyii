<?php

class PetController extends Controller
{   
	public $layout='//layouts/column2';
        
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','white','whitefluffy','mostexpensive','morethanaverprice'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
        
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}
        
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Pet;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Pet']))
		{
			$model->attributes=$_POST['Pet'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}
       
		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Pet']))
		{
			$model->attributes=$_POST['Pet'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Pet');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
        public function actionWhite()
	{       
            
                $criteria = new CDbCriteria;
		
		$criteria->compare('color','white',true);
		
                $data = new  CActiveDataProvider('Pet', array(
			'criteria'=>$criteria,
		));
                
                $this->render('index',array(
			'dataProvider'=>$data,
		));
	}
        public function actionWhiteFluffy()
	{       
            
                $criteria = new CDbCriteria;
		
                $criteria->condition = "color = 'white' AND fluffiness = 1";
		//$criteria->compare($column, $criteria, $partialMatch, $operator, $escape);
		
                $data = new  CActiveDataProvider('Pet', array(
			'criteria'=>$criteria,
		));
                
                $this->render('index',array(
			'dataProvider'=>$data,
		));
	}
        public function actionMostExpensive()
	{       
            
                $criteria = new CDbCriteria;
		
                $criteria->condition = "price = (SELECT MAX(price) FROM tbl_pet)";
		
                $data = new  CActiveDataProvider('Pet', array(
			'criteria'=>$criteria,
		));
                
                $this->render('index',array(
			'dataProvider'=>$data,
		));
	}
        public function actionMoreThanAverPrice()
	{       
            
                $criteria = new CDbCriteria;
		
                $criteria->condition = "price >(SELECT AVG(price) FROM tbl_pet)";
		
                $data = new  CActiveDataProvider('Pet', array(
			'criteria'=>$criteria,
		));
                
                $this->render('index',array(
			'dataProvider'=>$data,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Pet('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Pet']))
			$model->attributes=$_GET['Pet'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Pet the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Pet::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Pet $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='pet-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
