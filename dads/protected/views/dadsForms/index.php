<?php
/* @var $this DadsFormsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dads Forms',
);

$this->menu=array(
	array('label'=>'Create DadsForms', 'url'=>array('create')),
	array('label'=>'Manage DadsForms', 'url'=>array('admin')),
);
?>

<h1>Dads Forms</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
