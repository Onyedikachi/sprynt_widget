<?php
namespace app\vendor\sprynt\widgets\listview;
use yii\base\Widget;

class ListWidget extends Widget
{
	public function init()
	{
		parent::init();
	}
	public function  run()
	{
		parent::run();
		
		return $this->render('listDisplay');
	}
}
