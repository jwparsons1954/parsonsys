<?php
/* @var $this DadsFormsController */
/* @var $model DadsForms */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dads-forms-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'install_date'); ?>
		<?php echo $form->textField($model,'install_date',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'install_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'key'); ?>
		<?php echo $form->textField($model,'key'); ?>
		<?php echo $form->error($model,'key'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'transfer_to'); ?>
		<?php echo $form->textField($model,'transfer_to',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'transfer_to'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'transfer_from'); ?>
		<?php echo $form->textField($model,'transfer_from',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'transfer_from'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'asset_tag'); ?>
		<?php echo $form->textField($model,'asset_tag',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'asset_tag'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'serial'); ?>
		<?php echo $form->textField($model,'serial',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'serial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tran_to_sector'); ?>
		<?php echo $form->textField($model,'tran_to_sector'); ?>
		<?php echo $form->error($model,'tran_to_sector'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tran_to_loc'); ?>
		<?php echo $form->textField($model,'tran_to_loc',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'tran_to_loc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'installer'); ?>
		<?php echo $form->textField($model,'installer',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'installer'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->