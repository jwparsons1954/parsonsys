<?php
/* @var $this DadsFormsController */
/* @var $model DadsForms */

$this->breadcrumbs=array(
	'Dads Forms'=>array('index'),
	$model->key=>array('view','id'=>$model->key),
	'Update',
);

$this->menu=array(
	array('label'=>'List DadsForms', 'url'=>array('index')),
	array('label'=>'Create DadsForms', 'url'=>array('create')),
	array('label'=>'View DadsForms', 'url'=>array('view', 'id'=>$model->key)),
	array('label'=>'Manage DadsForms', 'url'=>array('admin')),
);
?>

<h1>Update DadsForms <?php echo $model->key; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>