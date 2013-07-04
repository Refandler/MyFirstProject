<?php

class GuestbookController extends Controller
{
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Guestbook');

		$this->render('index', array(
			 'dataProvider' => $dataProvider,
			));
	}

	public function actionCreate()
	{
	    $model=new Guestbook('create');

	    // uncomment the following code to enable ajax-based validation
	    /*
	    if(isset($_POST['ajax']) && $_POST['ajax']==='guestbook-create-form')
	    {
	        echo CActiveForm::validate($model);
	        Yii::app()->end();
	    }
	    */

	    if(isset($_POST['Guestbook']))
	    {
	        $model->attributes=$_POST['Guestbook'];
	        if($model->validate())
	        {
	        	$model->save();

	        	$this->redirect(Yii::app()->createUrl('guestbook/index'));
	            // form inputs are valid, do something here
	            return;
	        }
	    }

	    $this->render('create',array('model'=>$model));
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}