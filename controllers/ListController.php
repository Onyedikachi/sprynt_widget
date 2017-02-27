<?php

namespace app\controllers;
use yii\web\Controller;

class ListController extends Controller
{
	function actionList()
	{
		return $this->render('ListView');
	}
}