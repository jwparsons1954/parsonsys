<?php
/* @var $this DadsFormsController */
/* @var $model DadsForms */

$this->breadcrumbs=array(
	'Dads Forms'=>array('index'),
	$model->key,
);

$this->menu=array(
	array('label'=>'List DadsForms', 'url'=>array('index')),
	array('label'=>'Create DadsForms', 'url'=>array('create')),
	array('label'=>'Update DadsForms', 'url'=>array('update', 'id'=>$model->key)),
	array('label'=>'Delete DadsForms', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->key),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DadsForms', 'url'=>array('admin')),
);
?>

<h1>View DadsForms #<?php echo $model->key; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'install_date',
		'key',
		'city',
		'transfer_to',
		'transfer_from',
		'asset_tag',
		'serial',
		'description',
		'tran_to_sector',
		'tran_to_loc',
		'installer',
	),
)); ?>
