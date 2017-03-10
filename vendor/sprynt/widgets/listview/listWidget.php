<?php

namespace app\vendor\sprynt\widgets\listview;

use yii\base\Widget;
use yii\helpers\Html;

class ListWidget extends Widget
{
	public function init(){
		parent::init();
	}
	public function run(){
		return $this->render ('ListDisplay');
	}
}
?>