<?php
/* @var $this DadsFormsController */
/* @var $model DadsForms */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'install_date'); ?>
		<?php echo $form->textField($model,'install_date',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'key'); ?>
		<?php echo $form->textField($model,'key'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'transfer_to'); ?>
		<?php echo $form->textField($model,'transfer_to',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'transfer_from'); ?>
		<?php echo $form->textField($model,'transfer_from',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asset_tag'); ?>
		<?php echo $form->textField($model,'asset_tag',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'serial'); ?>
		<?php echo $form->textField($model,'serial',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tran_to_sector'); ?>
		<?php echo $form->textField($model,'tran_to_sector'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tran_to_loc'); ?>
		<?php echo $form->textField($model,'tran_to_loc',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'installer'); ?>
		<?php echo $form->textField($model,'installer',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->