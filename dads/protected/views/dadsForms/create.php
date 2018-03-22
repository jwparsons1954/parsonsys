<?php
/* @var $this DadsFormsController */
/* @var $model DadsForms */

$this->breadcrumbs=array(
	'Dads Forms'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DadsForms', 'url'=>array('index')),
	array('label'=>'Manage DadsForms', 'url'=>array('admin')),
);
?>

<h1>Create DadsForms</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>