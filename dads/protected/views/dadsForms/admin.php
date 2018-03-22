<?php
/* @var $this DadsFormsController */
/* @var $model DadsForms */

$this->breadcrumbs=array(
	'Dads Forms'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List DadsForms', 'url'=>array('index')),
	array('label'=>'Create DadsForms', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#dads-forms-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Dads Forms</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'dads-forms-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'install_date',
		'key',
		'city',
		'transfer_to',
		'transfer_from',
		'asset_tag',
		/*
		'serial',
		'description',
		'tran_to_sector',
		'tran_to_loc',
		'installer',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
