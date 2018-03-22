<?php
/* @var $this DadsFormsController */
/* @var $data DadsForms */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('key')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->key), array('view', 'id'=>$data->key)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('install_date')); ?>:</b>
	<?php echo CHtml::encode($data->install_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('city')); ?>:</b>
	<?php echo CHtml::encode($data->city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('transfer_to')); ?>:</b>
	<?php echo CHtml::encode($data->transfer_to); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('transfer_from')); ?>:</b>
	<?php echo CHtml::encode($data->transfer_from); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asset_tag')); ?>:</b>
	<?php echo CHtml::encode($data->asset_tag); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('serial')); ?>:</b>
	<?php echo CHtml::encode($data->serial); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tran_to_sector')); ?>:</b>
	<?php echo CHtml::encode($data->tran_to_sector); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tran_to_loc')); ?>:</b>
	<?php echo CHtml::encode($data->tran_to_loc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('installer')); ?>:</b>
	<?php echo CHtml::encode($data->installer); ?>
	<br />

	*/ ?>

</div>